<?php

if (isset($_POST['timkiem'])) {
	$tukhoa = $_POST['tukhoa'];
}

$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc and tbl_sanpham.tensanpham like '%".$tukhoa."%' " ;
$query_pro = mysqli_query($mysqli, $sql_pro);

?>
<h3 class="font-Georgia font-medium text-lg text-teal-900 uppercase">Từ khóa tìm kiếm: <?php echo $_POST['tukhoa'] ?>
</h3>
<div class="row mt-5">
    <?php
	while ($row = mysqli_fetch_array($query_pro)) {
	?>
    <div class="col-md-3 col-lg-2 py-2">
        <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
            <img class="img img-responsive" style="width: 100%"
                src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
            <p class="title_product" style="color: #241C57;"><?php echo $row['tensanpham'] ?></p>
            <p class="price_product">Giá: <?php echo number_format($row['giasp'], 0, ',', '.') . 'vnđ' ?></p>
        </a>
    </div>
    <?php
	}
	?>
</div>
<div style="clear:both;"></div>