<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

</head>


<body style="background-image: url(../img/astronauta.jpg);">
    <div class=" m-0 vh-100 row justify-content-center align-items-center ">

        <div class="bg-dark bg-opacity-25 text-white col-md-5 justify-content-center align-items-center">

            <br><br>
            <form class="text-center" action="../controllerAndModel/login/loginController.php" method="POST">
            <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" id="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" id="passwors" name="password" class="form-control" id="exampleInputPassword1">
                  <div id="passHelp" class="form-text">We'll never share your password with anyone else.</div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

              <br><br>
        </div>
    </div>


    <script src="/bootstrap/js/bootstrap.min.js"></script>
</body>


</html>