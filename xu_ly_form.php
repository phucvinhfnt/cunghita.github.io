<?php
$name = $_POST["name"];
$age = $_POST["age"];
$fra = $_POST["Fra-50"];
$fall = $_POST["Fall-12"];
$gender = $_POST["gender"];
$weight = $_POST["weight"];
$T_scr = $_POST["T-score"];
$BMD = $_POST["BMD"];
$Den = $_POST["DXA"];

$conn = mysqli_connect('localhost','root','','pmnckh');
if($conn == false)
{
    echo "Kết nối thất bại !";
}

$sql = "INSERT INTO solieu VALUE ('$name','$age','$gender','$fra','$fall','$T_scr','$BMD','$Den','$weight')";
$kq = mysqli_query($conn,$sql);
if(mysqli_affected_rows($conn)>0)
{
    echo "Đăng ký thành công";
}
else{
    echo "Đăng ký không thành công";
}
mysqli_close($conn);

?>