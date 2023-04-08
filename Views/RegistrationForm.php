<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style link  -->
    <link rel="stylesheet" href="..\Themes\Css\FormView.css">
    <link rel="stylesheet" href="..\Themes\Css\Bootstrap.min.css">
    <!-- js link  -->
    <script src = "..\Themes\Javascript\jquery.js"></script>
    <script src="..\Themes\Javascript\bootstrap.js"></script>
    <script src="..\Themes\Javascript\FormView.js"></script>
    
    <meta charset=utf-8 />
    <title>signup</title>
</head>

<body>
    <div class="container form-container">
        <div class="reg-valitation">
            <form class="form-main" onsubmit="return verifyPassword()">
                <center> <img src="..\Themes\Logo\selten-logo.png" alt="" class="form-logo"></center>
                <div class="form-all">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3 form-div">
                                <label for="exampleInputFirstname" class="form-label">First Name</label>
                                <input type="text" class="form-control form-input" name="firstname" id="exampleInputFirstname" placeholder="first name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 form-div">
                                <label for="exampleInputLastname" class="form-label">Last Name</label>
                                <input type="text" class="form-control form-input" name="lastname" id="exampleInputLastname" placeholder="last name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 form-div">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="text" class="form-control form-input" name="email" id="exampleInputEmail1" placeholder="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 form-div">
                                <label for="exampleInputPhone" class="form-label">Phone Number</label>
                                <input type="number" class="form-control form-input" name="phone" id="exampleInputPhone" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3 form-div">
                                <label for="exampleInputradio" class="form-label">User Type :</label><br>
                                <input type="radio" onclick="guestuserhide()" class=" form-input-checkbox" name="user" id="exampleInputradio">
                                <label class="labels" >Guest User</label><br>
                                <input type="radio" onclick="sysytemusershow()" class=" form-input-checkbox" name="user" id="exampleInputradio">
                                <i class="fa fa-eye"></i>
                                <label class="labels">System User</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 form-div password " id="passworddiv">
                                <label for="password1" class="form-label">Password</label>
                                <input type="password" value="" onkeyup="valitatePassword()" class="form-control form-input newClass1" name="password" id="password" placeholder="Password"> <br>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 form-div password" id="confirmpassworddiv">
                                <label for="password2" class="form-label">Confirm Password</label>
                                <input type="password" value="" onkeyup="confirmpaswordvalidate()" class="form-control form-input newClass" name="confirmpassword" id="confirmpassword" placeholder="confirm password">
                            </div>
                        </div>
                        <div class="col-md-12">
                        <span id="message" style="color:red;"></span>
                                <span id="confirmpasswordmessage"></span>
                        </div>
                        <center>
                        <div class="button-part-register">
                            <button type="submit" name="submit" class="btn btn-primary form-signin" id="button">Sign Up</button> <br>
                            <hr class="hr">
                            <label class="form-check-label form-signup" for="exampleCheck1">Already Have An Account <br><a href="../index.php">Sign In</a></label>
                        </div>
                        </center>
                    </div>
            </form>
        </div>
    </div>
</body>

</html>