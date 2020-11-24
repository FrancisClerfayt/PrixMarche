<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('User.index', ['users'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('User.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        
        $user = new User([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'address' => $request->get('address'),
            'zip_code' => $request->get('zip_code'),
            'city' => $request->get('city'),
            'admin' => false,
            'password' => $request->get('password')
            ]);
            $user->save();
            return redirect()->route('User.index');
        }
        
        /**
         * Display the specified resource.
         *
         * @param  int $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            $userDetail = User::all()->find($id);
            return view('User.show', ['user'=>$userDetail]);
        }
        
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $user = User::all()->find($id);
            return view('User.edit', ['user' => $user]);
        }
        
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            $user = User::find($id);
            $password_old=$user->password;
            $password_new=$request->get('actual_password');
            if ($request->filled('actual_password') && $request->filled('new_password') && $request->filled('confirm_password')){
                if ($password_new == $password_old){
                    if ($request->get('new_password') == $request->get('confirm_password')){
                        $user->fill(['password'=>$request->get('new_password')]);
                    }
                }
                // $2y$10$PRpz4nvp18dfC2xgnr5amOFZocV15KG4RCCvoOTT.v.3GnABDRT3e
                // $2y$10$PRpz4nvp18dfC2xgnr5amOFZocV15KG4RCCvoOTT.v.3GnABDRT3e
                
            }
            $user->fill([
                'first_name' => $request->get('first_name'),
                'last_name' => $request->get('last_name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'address' => $request->get('address'),
                'zip_code' => $request->get('zip_code'),
                'city' => $request->get('city'),
            ]);
            $user->save();
            
            return redirect()->route('User.index');
            

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::all()->find($id);
        $user->delete();

        return redirect()->route('User.index');
    }
}