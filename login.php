<?php
ob_start();
session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang="en">

<head>
    <title>LoginForm</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h2>Enter Username and Password</h2>
    <div class="container form-signin">

        <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
            && !empty($_POST['password'])) {
				
            if ($_POST['username'] == 'admin' && 
                $_POST['password'] == '1234') {
                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();
                $_SESSION['username'] = 'admin';
                header("Location:welcome.php " );
            }else {
                $msg = 'Wrong username or password';
            }
            }         ?>
    </div> <!-- /container -->

    <div class="container">
        <div class="container-fluid">
            <form class="form-signin" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method="post">
                <h4 class="form-signin-heading"><?php echo $msg; ?></h4>
                <input type="text" class="form-control" name="username" placeholder="username = admin" required
                    autofocus></br>
                <input type="password" class="form-control" name="password" placeholder="password = 1234" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
            </form>
            Click here to clean <a href="logout.php" title="Logout">Session.

        </div>
    </div>

</body>

</html>