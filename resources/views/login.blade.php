<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login</title>
      <link rel="stylesheet" href="{{ asset('css/login.css') }}">
      <link rel="stylesheet" href="yourpath/magic.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               Login
            </div>
            <div class="title signup">
               Register
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Register</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               <form action="{{ route('login') }}" class="login" method="POST">
                @csrf
                 @if(session('errors'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Ada yang salah cok:
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                       <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
               </div>
            @endif
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            @endif
                <div class="field">
                    <input type="text" name="name"  placeholder="Nama">
                </div>
                  <div class="field">
                     <input type="email" name="email" placeholder="Email" required>
                  </div>
                  <div class="field">
                     <input type="password" name="password" placeholder="Password" required>
                  </div>
                  <div class="pass-link">
                     <a href="#">Lupa password?</a>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Login">
                  </div>
                  <div class="signup-link">
                     Gak punya akun kawan ? <a href="">Daftar Sekarang</a>
                  </div>
               </form>
               <form action="{{ route('register') }}" class="signup" method="POST">
                @csrf
                <div class="field">
                    <input type="text" name="name" id="" placeholder="Nama">
                </div>
                  <div class="field">
                    @if(session('errors'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                       Ada yang salah nih bos:
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
                     <input type="email" name="email" placeholder="Alamat Email" required>
                  </div>
                  <div class="field">
                     <input type="password" name="password" placeholder="Password" required>
                  </div>
                  <div class="field">
                     <input type="password" name="password_confirmation" placeholder="Konfirmasi password" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Daftar">
                  </div>
               </form>
            </div>
         </div>
      </div>
      <script>
          const loginText = document.querySelector(".title-text .login");
const loginForm = document.querySelector("form.login");
const loginBtn = document.querySelector("label.login");
const signupBtn = document.querySelector("label.signup");
const signupLink = document.querySelector("form .signup-link a");
signupBtn.onclick = (()=>{
  loginForm.style.marginLeft = "-50%";
  loginText.style.marginLeft = "-50%";
});
loginBtn.onclick = (()=>{
  loginForm.style.marginLeft = "0%";
  loginText.style.marginLeft = "0%";
});
signupLink.onclick = (()=>{
  signupBtn.click();
  return false;
});

      </script>
   </body>
</html>