<?php
if(isset($_POST['username']) && ($_POST['password'])){
    if(isset($_POST['remember'])){
        setcookie("logged",$_POST['username'],time()+ 3600,"/");
    }else{
        session_start();
        $_SESSION['logged']= $_POST['username'];
    }

}else{
    $error="bạn phải nhập đầy đủ username và password";
}
echo $_SESSION['logged'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BaiTapPHP1</title>
</head>
<body>

    <form method="POST">
    <table>
    <tr>
        <td>Username</td>
        <td><input type="text" name="username"></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" name="password"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="checkbox" name="remember" value="1">Remember password ?</td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Login"></td>
    </tr>
    <tr>
        <td></td>
        <td>
        <?php
        if(isset($error)){
            echo $error;
        }
        ?>
        </td>
    </tr>

    </table>
    
    </form>
</body>
</html>