<p class="mt-1 font-Georgia font-medium text-lg text-teal-1000 uppercase p-2">Chi tiết sản phẩm</p>
<?php
	$sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
	$query_chitiet = mysqli_query($mysqli,$sql_chitiet);
	while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<div class="wrapper_chitiet">
    <div class="hinhanh_sanpham p-2">
        <img width="100%" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
    </div>
    <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
        <div class="chitiet_sanpham font-Georgia font-medium text-teal-1000 p-2">
            <h3 style="margin:0">Tên sản phẩm : <?php echo $row_chitiet['tensanpham'] ?></h3>
            <p>Mã sp: <?php echo $row_chitiet['masp'] ?></p>
            <p>Giá: <?php echo number_format($row_chitiet['giasp'],0,',','.').'vnđ' ?></p>
            <p>Số lượng: <?php echo $row_chitiet['soluong'] ?></p>
            <p>Danh mục: <?php echo $row_chitiet['tendanhmuc'] ?></p>
            <button class=" px-2 py-2 bg-blue-600 text-white rounded-md
				bg-gradient-to-r from-blue-600 to-green-600 hover:from-pink-500 hover:to-yellow-500"><input class="themgiohang"
                    name="themgiohang" type="submit" value="Thêm giỏ hàng"></button>

        </div>
    </form>
</div>
<div class="clear"></div>
<div class="tabs">
    <ul id="tabs-nav">
        <li><a href="#tab1">Tóm tắt</a></li>
        <li><a href="#tab2">Tác giả</a></li>
        <li><a href="#tab3">Hình ảnh sản phẩm</a></li>

    </ul> <!-- END tabs-nav -->
    <div id="tabs-content">
        <div id="tab1" class="tab-content">
            <?php echo $row_chitiet['tomtat'] ?>
        </div>
        <div id="tab2" class="tab-content">
            <?php echo $row_chitiet['tacgia'] ?>
        </div>
        <div id="tab3" class="tab-content ">
            <img width="50%" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
        </div>

    </div> <!-- END tabs-content -->
</div> <!-- END tabs -->
<?php
} 
?>