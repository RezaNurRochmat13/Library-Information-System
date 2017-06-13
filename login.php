<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Simple login form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
      <link rel="stylesheet" href="assets_form/css/style.css">
</head>

<body>
  <div class="container">
  <div class="login">
    <h1 class="login-heading">
      <strong>Selamat Datang Admin</strong></br>Silahkan Login</h1>
      <form action="login_proses.php" method="post">
        <input type="text" name="username" placeholder="Username" required="required" class="input-txt" />
          <input type="password" name="password" placeholder="Password" required="required" class="input-txt" />
          <div class="login-footer">
             <a href="register.php" class="lnk">
              <span class="icon icon--min">Punya akun?</span> 
              Jika belum silahkan buat akun
            </a>
            <button type="submit" class="btn btn--right">Sign in</button>
    
          </div>
      </form>
  </div>
</div>
  
<script src="assets_form/js/index.js"></script>
