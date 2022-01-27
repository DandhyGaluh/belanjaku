<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belanjaku</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body id="bg-login">
    <div class="box-login">
        <h2>Login</h2>
        <form" action="" method="POST">
        <input type="text" name="user" placeholder="Username" class="input-control">
        <input type="password" name="pass" placeholder="Password" class="input-control">
        <input type="submit" name="submit" value="Login" class="btn">
        </form>
    <?php 
        if(isset($_POST['submit'])){
            include 'db.php';

            $user = $_POST['user'];
            $pass = $_POST['pass'];

            $cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '".$user."' AND password = '".MD5($pass)."'");
            echo mysqli_num_rows($cek);

        }
    ?>
    </div>
    
</body>
</html>