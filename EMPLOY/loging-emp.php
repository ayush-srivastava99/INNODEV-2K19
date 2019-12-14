<!DOCTYPE html>
<html>
    <head>
        <title>Employ-Login</title>
        <link rel="shortcut icon" href="icon1.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a3b90de71b.js"></script>
    <link rel="stylesheet" href="googbutton.css">
    </head>
    <body style="background-color: rgb(240, 223, 223)" onload="myFunc()">
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                    <!-- Brand/logo -->
                    <a class="navbar-brand" href="#"><img src="icon1.ico"></a>
                    <!-- Links -->
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="cntt.php">Contact Us</a>
                      </li>
                    </ul>
                  </nav>
                  <br>
                      <br>
                      <h1 style="text-align: center">We will find you a work</h1>
                      <br>
                  <div class="container" style="border: rgb(214, 207, 207) solid 1px;box-shadow: 0px 0px 10px 5px #fc4c81;">
                    <br>
                        <h2>Welcome Back</h2>
                        <p>Log in to see what we have for you.</p>
                        <form action="valid-emp.php" method="POST" class="was-validated">
                          <div class="form-group">
                            <label for="uname">Username:</label>
                            <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                          </div>
                          <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                          </div>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                        <a href="resetpass.php?link=emp">Reset or forget password</a>
                        <br>
                      </div>
                      <br>
                      <h1 style="text-align: center">Not made an account?</h1>
                      <h1 style="text-align: center">Register Here</h1>
        <div style="margin:10px;padding: 25px;border: dimgray dotted 3px;">
            <form action="regis-emp.php" method="POST" enctype="multipart/form-data"><h1 style="text-align: center">Create you new account</h1>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" minlength="8" name="pass" placeholder="Password" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Name</label>
                      <input type="text" class="form-control" id="inputAddress" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress2">Username</label>
                      <input type="text" class="form-control" id="inputAddress2" name="uname" placeholder="username" required>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity" name="city" required>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">Work-Type</label>
                        <select id="inputState" class="form-control" name="field" required>
                          <option selected>Choose...</option>
                          <option>Electrician</option>
                          <option>Plumber</option>
                          <option>Barber/Stylist</option>
                          <option>House Cleaning Services</option>
                          <option>Medicine</option>
                          <option>Doctor</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="inputZip">Experience</label>
                        <input type="number" class="form-control" id="inputZip" name="exp" required>
                      </div>
                      <div class="form-group col-md-2">
                          <label for="inputZip">Contact no.</label>
                          <input type="number" class="form-control" minlength="10" id="inputZip" name="no" required>
                        </div>
                        <div class="form-group col-md-2">
                        <label for="inputZip">Speciality</label>
                        <input type="text" class="form-control" id="inputZip" name="spec" required>
                      </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip">Profile Pic.(file size less than 1mb)</label>
                            <input type="file" name="imge" required>
                          </div>
                    </div>
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" required>
                        <label class="form-check-label" for="gridCheck">
                          Accept all terms and contitions.
                        </label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                  </form>
                  <br>
                  <a href="terms.php">Terms and conditions</a>
                  <br>
                  <a href="gg.php?link=emp">
                  <button class="loginBtn loginBtn--google">Signin with Google</button></a>
                  </div>
                  <!--footer-->
                  <div style="background-color: rgb(57, 54, 58)">
                        <footer class="page-footer font-small blue pt-4">
                          <div class="container-fluid text-center text-md-left">
                            <div class="row">
                              <div class="col-md-6 mt-md-0 mt-3">      
                                <h5 class="text-uppercase" style="color: gainsboro">Diensten</h5>
                                <p style="color: ivory">Our main aim is to make your life easier if you are moving to new city.</p>
                              </div>
                              <hr class="clearfix w-100 d-md-none pb-3">
                              <div class="col-md-3 mb-md-0 mb-3">
                                <h5 class="text-uppercase" style="color: gainsboro">Follow us on</h5>
                                <ul class="list-unstyled">
                                  <li>
                                    <a href="#!">Facebook</a>
                                  </li>
                                  <li>
                                    <a href="#!">Twitter</a>
                                  </li>
                                  <li>
                                    <a href="#!">Instagram</a>
                                  </li>
                                  <li>
                                    <a href="#!">Google+</a>
                                  </li>
                                </ul>
                              </div>
                              <div class="col-md-3 mb-md-0 mb-3">
                                <h5 class="text-uppercase" style="color: gainsboro">Write us at</i></h5>
                                <ul class="list-unstyled">
                                  <li>
                                      <i class='far fa-comment-alt' style='font-size:24px;color: mistyrose'></i>
                                  </li>
                                  <li>
                                    <a href="#!">service.complaint@gmail.com</a>
                                  </li>
                                  <li>
                                    <a href="#!">care.customer@gmail.com</a>
                                  </li>
                                  <li>
                                    <a href="#!">help.customer@gmail.com</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="footer-copyright text-center py-3" style="color: grey">© 2019 Copyright:
                            <a href="https://mdbootstrap.com/education/bootstrap/"> TINNODEV</a>
                          </div>
                        </footer>
                        </div>
                        <script>
                        var preloader=document.getElementById('loader');
                        function myFunc(){
                          preloader.style.display='none';
                        }
                        </script>
    </body>
</html>