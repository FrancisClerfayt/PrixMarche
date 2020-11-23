<!--     protected $fillable = [
  'first_name', 'last_name', 'email', 'phone', 'address', 'zip_code', 'city', 'admin', 'password'
  ]; -->
@extends('layouts.app')
@section('title', 'modification')
@section('content')

  <form action="{{ route ('User.update', ['User'=>$user->id]) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="row">
      <div class="col-6">   
        <label for="first_name">Prénom:</label>
      <input type="text" class="form-control" name="first_name" value="{{ $user->first_name }}"/>

        <label for="last_name">Nom:</label>
      <input type="text" class="form-control" name="last_name" value="{{ $user->last_name }}"/>
      </div>
    </div>
    
    <div class="form-group">
      <label for="email">Email*:</label>
      <input type="email" class="form-control" name="email" required value="{{ $user->email }}"/>
    </div>
    <div class="form-group">
      <label for="phone">Téléphone:</label>
      <input type="text" class="form-control" name="phone" value="{{ $user->phone }}"/>
    </div>
    <div class="form-group">
      <label for="address">Adresse:</label>
      <input type="text" class="form-control" name="address" value="{{ $user->address }}"/>
    </div>
    <div class="form-group">
      <label for="zip_code">Code Postal:</label>
      <input type="text" class="form-control" name="zip_code" value="{{ $user->zip_code }}"/>
    </div>
    <div class="form-group">
      <label for="city">Ville:</label>
      <input type="text" class="form-control" name="city" value="{{ $user->city }}"/>
    </div>

    <div class="form-group">
      <label for="password">Mot de passe*:</label>
      <input type="password" class="form-control" name="password" required value="{{ $user->password }}"/>
    </div>
                         
    <button type="submit" class="btn btn-primary-outline">Modifier mes informations</button>
  </form>
  @endsection