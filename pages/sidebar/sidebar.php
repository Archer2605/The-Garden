<hr>
<h3 class="mt-1 font-Georgia font-medium text-lg text-teal-1000 uppercase">Danh mục sản phẩm</h3>
<hr>
<ul class="list_sidebar mt-3">
    <?php
	$sql_danhmuc = "SELECT * FROM tbl_danhmuc";
	$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
	while ($row = mysqli_fetch_array($query_danhmuc)) {
	?>
    <hr>
    <li class="bg-gradient-to-r from-teal-700 to-green-500 hover:from-red-400 hover:to-yellow-200"
        style="text-transform: uppercase;"><a
            href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></a>
    </li>
    <?php

	} ?>

</ul>