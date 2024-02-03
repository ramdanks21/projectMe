 @if ($errors->any('email'))
     <div class="alert alert-danger">
         {{ $errors->first('email') }}
     </div>
 @endif

 <div class="login-container">
     <h2>Login</h2>
     <form action="/login" method="post">
         @csrf
         <label for="email">Email:</label>
         <input type="email" name="email" class="@error('email')
                is-invalid 
            @enderror"
             required>




         <label for="password">Password:</label>
         <input type="password" name="password"
             class="@error('passwordd')
                is-invalid
            @enderror" required>

         <button type="submit">Login</button>
     </form>
 </div>
