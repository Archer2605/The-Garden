 <?php
	session_start();
	include('config/config.php');
	if (isset($_POST['dangnhap'])) {
		$taikhoan = $_POST['username'];
		$matkhau = ($_POST['password']);
		$sql = "SELECT * FROM tbl_admin WHERE username='" . $taikhoan . "' AND password='" . $matkhau . "' LIMIT 1";
		$row = mysqli_query($mysqli, $sql);
		$count = mysqli_num_rows($row);
		if ($count > 0) {
			$_SESSION['dangnhap'] = $taikhoan;
			header("Location:index.php");
		} else {
			echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại.");</script>';
			header("Location:login.php");
		}
	}
	?>

 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


 <!DOCTYPE html>
 <html>

 <head>
 	<title>Login Page</title>
 	<!--Made with love by Mutiullah Samim -->
 	<!--Bootsrap 4 CDN-->
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

 	<!--Fontawesome CDN-->
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

 	<!--Custom styles-->
 	<link rel="stylesheet" type="text/css" href="styles.css">
 	<style>
		body {
    font-family: "Lato", sans-serif;
}



.main-head{
    height: 150px;
    background: #FFF;
   
}

.sidenav {
    height: 100%;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 20px;
}


.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%; 
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 80%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}
	</style>
 </head>

 <body>
 	 <div class="sidenav">
         <div class="login-main-text">
            <h1>Garden of Words</h1>
            <h2>Admin Login</h2>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form action="" autocomplete="off" method="POST">
                  <div class="form-group">
                     <label>User Name</label>
					 <div class="input-group form-group">
 							<div class="input-group-prepend">
 								<span class="input-group-text"><i class="fas fa-user"></i></span>
 							</div>
 							<input type="text" class="form-control" placeholder="username" name="username">
 						</div>
                  </div>
                  <div class="form-group">
                     <label>Password</label>
					 <div class="input-group form-group">
 							<div class="input-group-prepend">
 								<span class="input-group-text"><i class="fas fa-key"></i></span>
 							</div>
 							<input type="password" class="form-control" placeholder="password" name="password">
 						</div>
                  </div>
                  <div class="form-group">
 							<input input type="submit" name="dangnhap" value="Login" class="btn float-right login_btn">
 						</div>
               </form>
            </div>
         </div>
      </div>

 	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 </body>
 </html>