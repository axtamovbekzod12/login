<!doctype html>
<html lang="en">
    <head>
        <title>Login 10</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="login-wrap p-0">
                            <h3 class="mb-4 text-center">Login</h3>
                            <form action="#" class="signin-form" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Username" name='name' required>
                                </div>
                                <div class="form-group">
                                    <input id="password-field" type="password" class="form-control" placeholder="Password" name='psw' required>
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary submit px-3" name='press'>Sign In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
	</body>
</html>
<?php
    if(isset($_POST['press']))
    {
        $name = $_POST['name'];
        $psw = $_POST['psw'];
        $db_connect = mysqli_connect('localhost','root','','student');
        $sql_surov = "select name, password from talaba";
        $query = mysqli_query($db_connect,$sql_surov);
        while($row = mysqli_fetch_array($query)){
            if($row['name'] == $name && $row['password'] == $psw){
                echo "<script>window.location='accaunt.php'</script>";
                break;
            }
        }
    }
?>