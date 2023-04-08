function valitatePassword() {
   var password = document.getElementById("password").value;
   var pattern = new RegExp(
      '(?=[A-Za-z0-9@#$%^&+!=]+$)^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#$%^&+!=])(?=.{8,}).*$'
   );

   console.log("patern", pattern.test(password));
   if (!pattern.test(password)) {
      document.getElementById("message").innerHTML = "**Password length must be at least contain one Capital letter and one number special characters and  8 characters";
      document.getElementById("password").style.border = "3px solid red";
      document.getElementById('button').disabled = true;
      document.getElementById('button').style.opacity = (0.4);
      document.getElementById("password2").disabled = true;
      return false;
   }
   else {
      document.getElementById("message").innerHTML = "";
      document.getElementById("password").style.border = "3px solid green";
      document.getElementById("message").style.display = "block";
      document.getElementById('button').disabled = true;
      document.getElementById('button').style.opacity = (0.4);
      document.getElementById('confirmpassword').style.opacity = (1);
      document.getElementById("confirmpassword").disabled = false;
   }
}

function confirmpaswordvalidate() {
   var pass = document.getElementById('password').value;
   var confirm_pass = document.getElementById('confirmpassword').value;

   if (pass != confirm_pass) {
      document.getElementById('confirmpasswordmessage').style.color = 'red';
      document.getElementById('confirmpasswordmessage').innerHTML = '☒ Password Mismatch';
      document.getElementById('button').disabled = true;
      document.getElementById('button').style.opacity = (0.4);
      document.getElementById("confirmpassword").style.border = "3px solid red";
   } else {
      document.getElementById('confirmpasswordmessage').style.color = 'green';
      document.getElementById("confirmpassword").style.border = "3px solid green";
      document.getElementById('confirmpasswordmessage').innerHTML = '';
      document.getElementById('button').disabled = false;
      document.getElementById('button').style.opacity = (1);
   }
}
//hide show function //
function sysytemusershow() {
   document.getElementById("passworddiv").style.display = "block";
   document.getElementById("confirmpassworddiv").style.display = "block";

}
function guestuserhide() {
   document.getElementById("passworddiv").style.display = "none";
   document.getElementById("confirmpassworddiv").style.display = "none";
   document.getElementById('button').disabled = false;
   document.getElementById('button').style.opacity = (1);
}

