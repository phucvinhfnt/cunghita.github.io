<!doctype html>
<html lang="en">
  <head>
  	<title>Login 07</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"> -->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="style2.css">
	<link rel="stylesheet" href="bootstrap-5.0.0-beta2-dist/css/bootstrap.css">
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Đăng nhập</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text">
								<h3 style = "color: white; margin-left: 10px;">Chào mừng đến trang đăng nhập</h3>
								<p>Bạn chưa có tài khoản?</p>
								<a href="#" class="btn btn-white btn-outline-white">Đăng ký</a>
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Đăng nhập</h3>
			      		</div>
								<!-- <div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div> -->
			      	</div>
							<form action="xu_ly_login.php" method = "POST" class="signin-form">
							<!-- <div class="form-group mb-3">
			      			<label class="label" for="email">Email</label>
			      			<input type="text" class="form-control" name="email" id="email" placeholder="@gmail.com" required>
			      		</div> -->
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Tài khoản</label>
			      			<input type="text" class="form-control" name="tendn" id="tendn" placeholder="Tài khoản" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Mật khẩu</label>
		              <input type="password" class="form-control" name="matkhau" id="matkhau" placeholder="Mật khẩu" required>
		            </div>
					<div class="form-group mb-3">
						<?php 
						$madm = 0;
						if(isset($_GET['ma'])) $madm = $_GET["ma"];
						if($madm == 1) {
						 ?>
		            	<span style = "color:red;" id = "wrong">Sai tài khoản hoặc mật khẩu!</span>
						<?php } ?>
		            </div>
		            <div class="form-group">
		            	<button type="submit" name = "btn_submit" class="form-control btn btn-primary submit px-3" >Sign In</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Ghi nhớ
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Quên mật khẩu</a>
									</div>
		            </div>
		          </form>
		        </div>
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

