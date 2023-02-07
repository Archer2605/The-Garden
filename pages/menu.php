<?php

$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);


?>
<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
	unset($_SESSION['dangky']);
}
?>
<nav class="navbar navbar-expand navbar-dark px-5 bg-gradient-to-r from-teal-700 to-green-500 relative h-16"
    style="width: 100%;">
    <a class="navbar-brand uppercase font-Georgia font-medium" href="index.php">The Garden of words</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active px-1">
                <a class="nav-link font-Georgia" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Trang
                    chủ
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item active px-1"><a class="nav-link font-Georgia" href="index.php?quanly=tintuc">Sản phẩm
                    mới</a></li>

            <li class="nav-item dropdown active px-1">
                <a class="nav-link dropdown-toggle font-Georgia" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-expanded="false">
                    Danh mục
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php
					while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
					?>
                    <a class="dropdown-item"
                        href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a>
                    <?php
					}
					?>
                </div>
            </li>
    </div>
    <div class="p-2">
        <?php
	if (isset($_SESSION['dangky'])) {

	?>
        <a href="index.php?quanly=thaydoimatkhau">
            <button
                class=" text-white bg-gradient-to-r from-teal-600 to-lime-400 hover:from-red-400 hover:to-yellow-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 rounded-lg box-border p-2 border-2 font-Georgia">Đổi
                mật khẩu <i class="fa fa-cogs" aria-hidden="true"></i>
            </button></a>
        <a href="index.php?quanly=lichsudonhang">
            <button
                class=" text-white bg-gradient-to-r from-teal-600 to-lime-400 hover:from-red-400 hover:to-yellow-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 rounded-lg box-border p-2 border-2 font-Georgia">Đơn
                hàng <i class="fa fa-file-o" aria-hidden="true"></i>
            </button></a>
        <a href="index.php?dangxuat=1">
            <button
                class=" text-white bg-gradient-to-r from-teal-600 to-lime-400 hover:from-red-400 hover:to-yellow-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 rounded-lg box-border p-2 border-2 font-Georgia">Đăng
                xuất <i class="fa fa-sign-out" aria-hidden="true"></i></button></a>
        <?php
	} else {
	?>
        <a href="index.php?quanly=dangnhap">
            <button
                class=" text-white bg-gradient-to-r from-teal-600 to-lime-400 hover:from-red-400 hover:to-yellow-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 rounded-lg box-border p-2 border-2 font-Georgia">Đăng
                nhập
                <i class="fa fa-user" aria-hidden="true"></i></button>
        </a>
        <?php
	}
	?>

        </ul>
    </div>
    <div class="absolute inset-y-0 right-0 p-3">
        <form action="index.php?quanly=timkiem" method="POST" class="flex flex-row">
            <input type="text" placeholder="Tìm kiếm sản phẩm..." name="tukhoa"
                class="text-gray-900 text-center rounded-lg ">
            <button type="submit" name="timkiem" value="Tìm Kiếm">
                <i class="fa fa-search bg-gradient-to-r from-teal-200 to-lime-200 hover:from-red-400 hover:to-yellow-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 rounded-lg box-border p-2 border-2"
                    aria-hidden="true"></i>
            </button>
            <a href="index.php?quanly=giohang">
                <i class="fa fa-shopping-cart bg-gradient-to-r from-teal-200 to-lime-200 hover:from-red-400 hover:to-yellow-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 rounded-lg box-border p-2 border-2"
                    aria-hidden="true"></i>
            </a>
        </form>

    </div>

</nav>