<!-- affiche tous les utilisateurs -->
{{-- pour chaque ligne affiche un utilisateurs --}}

@foreach ($users as $user)
    <a href="{{ route('User.show', ['User' => $user]) }} ">
      {{ $user->email }}</a>
@endforeach