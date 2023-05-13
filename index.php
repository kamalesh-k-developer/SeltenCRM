<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- style link  -->
  <link rel="stylesheet" href="Themes\Css\FormView.css">
  <link rel="stylesheet" href="Themes\Css\Bootstrap.min.css">
  <title>Selten</title>
</head>

<body>
  <div class="container form-container">
    <div class="form-valitation">
    <form class="form-main">
      <center> <img src="Themes\Logo\selten-logo.png" alt="" class="form-logo"></center>

      <div class="form-all">
        <div class="mb-3 form-div">
          <label for="exampleInputEmail1" class="form-label">Username</label>
          <input type="email" class="form-control form-input" id="exampleInputEmail1" aria-describedby="emailHelp" required>

        </div>
        <div class="mb-3 form-div">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control form-input" id="exampleInputPassword1" required>
        </div>
        <div class="button-part">
          <button type="submit" class="btn btn-primary form-signin">Sign In</button> <br>
          <hr class="hr">
          <label class="form-check-label forget-password" for="exampleCheck1"><a href="">forgot Password?</a></label><br>

          <label class="form-check-label form-signup" for="exampleCheck1">Do You Have an Accont <br><a href="Views\RegistrationForm.php">Sign up</a></label>
        </div>
    </form> 
    </div>
    
  </div>
  </div>
</body>

</html>