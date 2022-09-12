
	<!DOCTYPE html>
		<html>
		<head>
			<title>Login - Phần mềm quản lý bán hàng</title>
			<link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="cssgiua.css">
			<link rel="stylesheet" type="text/css" href="public/css/style.css">
			<link rel="stylesheet" href="public/font-awesome/css/font-awesome.min.css">
			<script type="text/javascript" src="public/js/jquery.min.js"></script>
			<script type="text/javascript" src="public/js/popper.min.js"></script>
			<script type="text/javascript" src="public/bootstrap/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="public/js/login.js"></script>
		</head>
		<body>
			<form action="" method="POST">
					<div class="mainwrap">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-5 login-form">
							<div class="header-login">
								<img src="public/images/logo.png" width="100px">
							</div>
							<div class="body-login">
								<div class="form-group">
									<label>Tên đăng nhập</label>
									<input type="text" name="txtuser"  class="form-control">
								</div>
								<div class="form-group">
									<label>Mật khẩu</label>
									<input type="password"  name="txtpass" class="form-control">
								</div>
								<div class="form-group">
									
											<input type="submit"  class="btn btn-success " name="submit" value="Đăng nhập">
						
								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</form>
		
		

	</body>
	</html>
 
	
 <?php 
       include('connection.php');
       session_start();
        	$kt="";
        if(isset($_POST['submit'])) {
        	
            $user = $_POST['txtuser'];
            $pass = $_POST['txtpass'];
            $sql = "SELECT * FROM users";
            $qr = mysqli_query($conn,$sql);
            
            while( $rs = mysqli_fetch_array($qr))
            {
               if ($user==$rs['UserId'] && $pass==$rs['Pass']) {
               	$kt=0;
               	 $_SESSION["uid"]=$user;
                header("location: header.php");
                }else{
			     $kt++;
               }
        	}
        	if ($kt!=0) {
        		echo '<script language="javascript">';
                echo 'alert("Không Tìm Thấy Tài Khoản")';
                echo '</script>';
        	}
        	
        }
        
         


    ?>
