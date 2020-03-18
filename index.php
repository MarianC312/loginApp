<html>
    <head>
        <title>Loggin APP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./css/bootstrap.css">
        <script src="./js/actions.js"></script>
    </head>
    <body class="bg-secondary">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div id="container-general" class="col-md-6 col-sm-6 bg-light px-5 py-2">
                    <center>
                        <div class="d-block align-selft-center w-50">
                            <img src="./assets/logo.png" alt="Logo Image" class="w-100">
                        </div>
                    </center> 
                    <div id="login-process" style="display: none"></div>
                    <div id="login-form" class="h-auto"> 
                        <form id="loginForm" action="./process/logIn/data.php" process="#login-process" form="#login-form">
                            <div class="form-group">
                                <label class="col-form-label col-md-form-label-lg text-primary text-right w-100" for="username">
                                    <small>Username</small>
                                </label>
                                <input class="form-control form-control-lg" type="text" name="username" id="username">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label col-form-label-lg text-primary text-right w-100" for="password">
                                    <small>Password</small>
                                </label>
                                <input class="form-control form-control-lg" type="password" name="password" id="password">
                            </div>
                                <button type="button" onclick="logIn()" class="btn btn-success btn-lg w-100">Log In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    </body>
</html>