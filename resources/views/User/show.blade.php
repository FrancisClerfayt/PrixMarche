
{{-- 'first_name' => $request->get('first_name'),
'last_name' => $request->get('last_name'),
'email' => $request->get('email'),
'phone' => $request->get('phone'),
'address' => $request->get('address'),
'zip_code' => $request->get('zip_code'),
'city' => $request->get('city'),
'admin' => false,
'password' => bcrypt($request->get('password'))
]); --}}

{{ $user->first_name }} <br>
{{ $user->last_name }} <br>
{{ $user->email }} <br>
{{ $user->phone }} <br>
{{ $user->address }} <br>
{{ $user->zip_code }} <br>
{{ $user->city }} <br>

<a href="{{ route('User.edit', ['User' => $user->id]) }} ">Modifier mes informations</a>
<form action="{{ route('User.destroy', ['User' => $user->id]) }}" method="POST">
  @csrf
  @method('DELETE')
  <button type="submit">
    Supprimer mon compte
  </button>
</form>
