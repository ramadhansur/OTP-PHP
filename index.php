<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>OTP Sender</title>
  </head>
  <body>
    <div class="container">
        <div class="card position-absolute top-50 start-50 translate-middle">
            <div class="card-body">
                <h2 class="text-center">OTP Code With PHP</h2>
                <br>
                <form action="otp-send.php" method="post">
                  <div class="mb-3">
                      <label class="form-label">E-mail</label>
                      <input type="email" placeholder="example@gmail.com" name="email" class="form-control">
                      <div class="form-text">OTP code will send to your E-mail</div>
                  </div>
                  <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>