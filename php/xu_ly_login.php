<?php 
session_start();
$conn = mysqli_connect('localhost','root','','pmnckh');
if($conn == false){
    echo "Kết nối thất bại";
}

if(isset($_POST["btn_submit"]))
{
    $user = $_POST["tendn"];
    $pass = $_POST["matkhau"];
    $user = strip_tags($user);
    $user = addslashes($user);
    $pass = strip_tags($pass);
    $pass = addslashes($pass);
    if($user == "" || $pass == "")
    {
        echo "Vui lòng nhập tài khoản mật khẩu";
    }
    else
    {
        $sql = "SELECT * from users Where tendn = '$user' and matkhau = '$pass'";
        $kq = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($kq);
        if($num == 0)
        {
            // echo "Tài khoản hoặc mật khẩu không đúng";
           header('Location: login.php?ma=1');
        }
        else{
            $_SESSION["tendn"] = $user;
            header('Location: indexn.php');
        }
    }
}
// if(isset($_POST["btn_dangky"]))
// {
//     header('Location: dky.php');
// }



?>