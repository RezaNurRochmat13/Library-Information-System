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
      <strong>Isi Data</strong>Anda</h1>
      <form action="proses_register.php" method="post" enctype="multipart/form-data">
       
        <input type="text" name="nama_petugas" placeholder="Nama Petugas" required="required" class="input-txt" />
        <input type="text" name="username" placeholder="Username" required="required" class="input-txt" />
        <input type="password" name="password" placeholder="Password" required="required" class="input-txt" />
          <div class="login-footer">
             
            <button type="submit" name="submit" class="btn btn--right">Daftar  </button>
    
          </div>
      </form>
  </div>
</div>
  
<script src="assets_form/js/index.js"></script>
