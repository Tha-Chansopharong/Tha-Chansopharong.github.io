<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
  <script src="bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <!-- copy from teacher -->
  <p id="msg"></p>
  <!-- -------------------------- -->
  <section class="h-100 gradient-form " style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">

        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0 ">
              <div class="col-lg-6 ">
                <div class="card-body p-md-5 mx-md-4">

                  <div class="text-center">
                    <h3 class="mt-1 mb-5 pb-1">Admin</h3>
                  </div>

                  <form method="post" action="login_action.php">
                    <p>Please login to your account</p>
                    <?php if (!empty($_GET['message'])) { ?>
                      <p style="color:red;">
                        <?php echo $_GET['message'] ?>
                      </p>
                    <?php } ?>
                    <div class="form-outline mb-4">
                      <input id="txtUsername" type="email" name="txtUsername" class="form-control"
                        placeholder="Username" />
                      <!-- <label class="form-label" for="form2Example11">Username</label> -->
                    </div>

                    <div class="form-outline mb-4">
                      <input id="txtPassword" type="password" name="txtPassword" class="form-control"
                        placeholder="Password" />
                      <!-- <label class="form-label" for="form2Example22">Password</label> -->
                    </div>

                    <div class="pt-1 mb-5 pb-1">
                      <input type="submit" name="btnLogin" value="Login"
                        class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" />
                      <span>
                        <label class="text-muted">
                          <input type="checkbox" checked="checked">
                          <span>Remmember Me?</span>
                        </label>
                        <a style="margin-left: 120px;" class="text-muted" href="#!">Forgot password?</a>
                      </span>
                    </div>

                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Don't have an account?</p>
                      <button type="button" class="btn btn-outline-danger">Create new</button>
                    </div>

                  </form>

                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">We are more than just a company</h4>
                  <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="js/jquery-3.7.1.min.js"></script>
  <script src="js/login.js"></script>
</body>

</html>