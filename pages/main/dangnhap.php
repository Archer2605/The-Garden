<?php
if (isset($_POST['dangnhap'])) {
	$email = $_POST['email'];
	$matkhau = md5($_POST['password']);
	$sql = "SELECT * FROM tbl_dangky WHERE email='" . $email . "' AND matkhau='" . $matkhau . "' LIMIT 1";
	$row = mysqli_query($mysqli, $sql);
	$count = mysqli_num_rows($row);

	if ($count > 0) {
		$row_data = mysqli_fetch_array($row);
		$_SESSION['dangky'] = $row_data['tenkhachhang'];
		$_SESSION['email'] = $row_data['email'];
		$_SESSION['id_khachhang'] = $row_data['id_dangky'];
		// echo 123; header('Location: http://localhost/garden/index.php?quanly=giohang');
		echo '<script>window.location.href ="http://localhost/garden/index.php?quanly=index"</script>';
		
		
	} else {
		echo '<p style="color:red">Mật khẩu hoặc Email sai ,vui lòng nhập lại.</p>';
	}
}
?>

<div class="flex justify-center items-center">
    <form class="p-10 bg-gradient-to-r from-green-400 to-blue-400 rounded-xl drop-shadow-lg space-y-5" action=""
        autocomplete="off" method="POST">
        <h1 class="text-center text-3xl font-Georgia font-medium">Vui lòng đăng nhập</h1>
        <div class="flex flex-col space-y-2">
            <label class="text-sm font-light" for="email">Email</label>
            <input class="w-96 px-3 py-2 rounded-md border border-slate-400" type="email"
                placeholder="Nhập Email của bạn..." name="email" id="email">
        </div>
        <div class="flex flex-col space-y-2">
            <label class="text-sm font-light" for="password">Mật khẩu:</label>
            <input class="w-96 px-3 py-2 rounded-md border border-slate-400" type="password"
                placeholder="Nhập mật khẩu của bạn..." name="password" id="password">
        </div>

        <div>
            <input type="checkbox" name="remember" id="remember" />
            <label class="text-sm font-light" for="remember">Ghi nhớ tôi</label>
        </div>


        <div class="row">
            <div>
                <button class="w-full px-10 py-2 bg-blue-600 text-white rounded-md
				bg-gradient-to-r from-blue-600 to-green-600 hover:from-pink-500 hover:to-yellow-500" type="submit" name="dangnhap">
                    Đăng nhập
                </button>
            </div>
            <div class="flex-right pl-40">
                <a href="index.php?quanly=dangky">Đăng ký tài khoản mới</a>
            </div>
        </div>
    </form>
</div>