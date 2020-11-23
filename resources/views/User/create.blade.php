<!--     protected $fillable = [
  'first_name', 'last_name', 'email', 'phone', 'address', 'zip_code', 'city', 'admin', 'password'
  ]; -->
  
  <form action="{{ route ('User.store') }}" method="POST">
    @csrf
    
    <div class="form-group">    
      <label for="first_name">Prénom:</label>
      <input type="text" class="form-control" name="first_name"/>
    </div>
    
    <div class="form-group">
      <label for="last_name">Nom:</label>
      <input type="text" class="form-control" name="last_name"/>
    </div>
    
    <div class="form-group">
      <label for="email">Email*:</label>
      <input type="email" class="form-control" name="email" required/>
    </div>
    <div class="form-group">
      <label for="phone">Téléphone:</label>
      <input type="text" class="form-control" name="phone"/>
    </div>
    <div class="form-group">
      <label for="address">Adresse:</label>
      <input type="text" class="form-control" name="address"/>
    </div>
    <div class="form-group">
      <label for="zip_code">Code Postal:</label>
      <input type="text" class="form-control" name="zip_code"/>
    </div>
    <div class="form-group">
      <label for="city">Ville:</label>
      <input type="text" class="form-control" name="city"/>
    </div>

    <div class="form-group">
      <label for="password">Mot de passe*:</label>
      <input type="password" class="form-control" name="password" required/>
    </div>
                         
    <button type="submit" class="btn btn-primary-outline">Add contact</button>
  </form>