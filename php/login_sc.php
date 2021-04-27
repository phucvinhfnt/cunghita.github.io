<?php
// session_start();
// if(!isset($_SESSION["tendn"])){
//     header('Location: dnhap.php');
// }

?>
<style type ="text/css">
.ten{
  /* float: right; */
  margin-top: 30px;
  margin-right: 20px;
  color: white;
  font-size: 18px;
}
.ten a{
    margin-left: 10px;
  color: black;
  font-size: 18px;
}
.ten a:hover{
    color: blue;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Welcome</title> -->
</head>
<body>
<form action="capnhat.php" method = "post">
  <?php 

  $conn = mysqli_connect('localhost','root','','pmnckh');
  if($conn->connect_errno) die("Kết nối thất bại!");
  $dn = $_SESSION['tendn'];
  $sql = "SELECT tentv FROM users WHERE tendn = '$dn'";
  $kq = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($kq);
 
  ?>
  <div class ="ten">Chào mừng <?php echo $row['tentv'];  ?>
  <a href="login.php" name = "btn_out">Đăng xuất</a></div>

  <!-- <a href="bai_viet.php" name = "btn_update">Đọc tin tức</a>
  <a href="them_bai.php" name = "btn_add">Thêm bài viết mới</a> -->
  <?php
//   if(isset($_SESSION['username'])){
//       unset($_SESSION['username']);
//   }
?>
</form>

</body>
</html>