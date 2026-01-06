<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: proses.php");
}

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
     // ganti ketika username dan password diganti
    if ($username === 'sendy' && $password === 'sendy') {
        $_SESSION['username'] = $username;
        header("Location: proses.php");




if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
     // ganti ketika username dan password diganti
    if ($username === 'sendy' && $password === 'sendy') {
        $_SESSION['username'] = $username;
        header("Location: proses.php");
    } else {
       
        $error = "Username salah!! masukin username yang diberikan.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>SendyHost</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
    
        .login-form {
          background: #7B3FFF;
            margin-top: 50px;
            color: white;
            border: 1px solid #ccc;
            box-shadow: 0 2px 5px rgba(0,0,0,0.3);
            padding: 20px;
        }
        .btn-primary {
          background: #FF67C2
          border: 1px black;
            box-shadow: 0 2px 5px rgba(0,0,0,0.3);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 login-form">
                <h2 class="text-center">Login</h2>
<?= (isset($error)) ? "<p class='text-danger'>$error</p>" : ""; ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" name="username" id="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" >Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>


