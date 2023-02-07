<?php
if (isset($_POST['dangky'])) {
	$tenkhachhang = $_POST['hovaten'];
	$email = $_POST['email'];
	$dienthoai = $_POST['dienthoai'];
	$matkhau = md5($_POST['matkhau']);
	$diachi = $_POST['diachi'];
	$sql_dangky = mysqli_query($mysqli, "INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('" . $tenkhachhang . "','" . $email . "','" . $diachi . "','" . $matkhau . "','" . $dienthoai . "')");
	if ($sql_dangky) {
		// header('Location:index.php?quanly=giohang');
        echo '<script>window.location.href ="http://localhost/garden/index.php?quanly=index"</script>';
		echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
		$_SESSION['dangky'] = $tenkhachhang;
		$_SESSION['email'] = $email;
		$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
	}
}
?>
<div class="flex justify-center items-center">
    <div class="p-10 bg-gradient-to-r from-green-400 to-blue-400 rounded-xl drop-shadow-lg space-y-5">
        <form action="" autocomplete=" off" method="POST">
            <div class="form-group">
                <label for="hovaten">Họ tên: </label>
                <input type="text" class="form-control" size="50" id="hovaten" name="hovaten"
                    placeholder="Nhập vào họ tên của bạn...">
            </div>
            <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" class="form-control" size="50" id="email" name="email"
                    placeholder="Nhập email của bạn...">
            </div>
            <div class="form-group">
                <label for="dienthoai">Số điện thoại:</label>
                <input type="text" class="form-control" size="50" id="dienthoai" name="dienthoai"
                    placeholder="Nhập số điện thoại của bạn...">
            </div>
            <div class="form-group">
                <label for="diachi">Địa chỉ:</label>
                <input type="text" class="form-control" size="50" id="diachi" name="diachi"
                    placeholder="Nhập địa chỉ của bạn...">
            </div>
            <div class="form-group">
                <label for="matkhau">Mật khẩu: </label>
                <input type="password" class="form-control" size="50" id="matkhau" name="matkhau"
                    placeholder="Nhập mật khẩu của bạn...">
            </div>
            <div class="row">
                <div>
                    <button type="submit" name="dangky"
                        class="text-white bg-gradient-to-r from-blue-600 to-green-600 hover:from-pink-500 hover:to-yellow-500 w-full px-10 py-2 bg-blue-600 text-white rounded-md">Đăng
                        ký</button>
                </div>
                <div class="flex-right pl-40 ">
                    <a href="index.php?quanly=dangnhap" class="ml-3">
                        Quay lại trang đăng nhập
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>