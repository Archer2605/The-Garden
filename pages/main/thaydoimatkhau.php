<?php
if (isset($_POST['doimatkhau'])) {
	$taikhoan = $_POST['email'];
	$matkhau_cu = md5($_POST['password_cu']);
	$matkhau_moi = md5($_POST['password_moi']);
	$sql = "SELECT * FROM tbl_dangky WHERE email='" . $taikhoan . "' AND matkhau='" . $matkhau_cu . "' LIMIT 1";
	$row = mysqli_query($mysqli, $sql);
	$count = mysqli_num_rows($row);
	if ($count > 0) {
		$sql_update = mysqli_query($mysqli, "UPDATE tbl_dangky SET matkhau='" . $matkhau_moi . "'");
		echo '<p style="color:green">Mật khẩu đã được thay đổi."</p>';
	} else {
		echo '<p style="color:red">Tài khoản hoặc Mật khẩu cũ không đúng,vui lòng nhập lại."</p>';
	}
}
?>
<div class="flex justify-center items-center">
    <form action="" autocomplete="off" method="POST"
        class="p-10 bg-gradient-to-r from-green-400 to-blue-400 rounded-xl drop-shadow-lg space-y-5">
        <table class="table-login table">
            <thead class="">
                <tr>
                    <td colspan="2">
                        <h3 class="font-weight-bold">ĐỔI MẬT KHẨU TÀI KHOẢN</h3>
                    </td>
                </tr>
            </thead>
            <tr>
                <td>Tài khoản:</td>
                <td><input type="text" name="email" placeholder="Nhập email của bạn..."></td>
            </tr>
            <tr>
                <td>Mật khẩu cũ:</td>
                <td><input type="text" name="password_cu" placeholder="Nhập mật khẩu củ..."></td>
            </tr>
            <tr>
                <td>Mật khẩu mới:</td>
                <td><input type="text" name="password_moi" placeholder="Nhập mật khẩu mới..."></td>
            </tr>
            <tr>

                <td colspan="2"><input class="w-full px-10 py-2 bg-blue-600 text-white rounded-md
				bg-gradient-to-r from-blue-600 to-green-600 hover:from-pink-500 hover:to-yellow-500" type="submit"
                        name="doimatkhau" value="Đổi mật khẩu"></td>
            </tr>
        </table>
    </form>
</div>