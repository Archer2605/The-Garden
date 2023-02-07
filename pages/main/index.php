<?php
if (isset($_POST['timkiem'])) {
	$tukhoa = $_POST['tukhoa'];
}

$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC";
$query_pro = mysqli_query($mysqli, $sql_pro);
$sql_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham";
$query_sp = mysqli_query($mysqli, $sql_sp);

?>
<h2 class="font-Georgia font-medium text-xl text-center text-teal-1000 uppercase">Các sản phẩm mới</h2>
<div class="row mt-5 slider">
    <?php
	while ($row = mysqli_fetch_array($query_pro)) {
	?>
    <div class="col-md-3 col-lg-2">
        <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
            <img class="img img-responsive" style="width: 100%"
                src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
            <p class="title_product font-sans hover:font-mono"><?php echo $row['tensanpham'] ?></p>
            <p class="price_product">Giá:
                <?php echo number_format($row['giasp'], 0, ',', '.') . 'vnđ' ?></p>
        </a>
    </div>
    <?php
	}
	?>
</div>

<h2 class="font-Georgia font-medium text-xl text-center text-teal-1000 uppercase  pt-2">Bán chạy nhất</h2>
<div class="row mt-5 slider">
    <?php
	while ($row = mysqli_fetch_array($query_sp)) {
	?>
    <div class="col-md-3 col-lg-2">
        <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
            <img class="img img-responsive" style="width: 100%"
                src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
            <p class="title_product font-sans hover:font-mono"><?php echo $row['tensanpham'] ?></p>
            <p class="price_product">Giá:
                <?php echo number_format($row['giasp'], 0, ',', '.') . 'vnđ' ?></p>
        </a>
    </div>
    <?php
	}
	?>
</div>

<div style="clear:both;"></div>

<script>
$('.slider').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: true,
    draggable: false,
    prevArrow: "<button type='button' class='slick-prev slick-arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow: "<button type='button' class='slick-next slick-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
});
</script>