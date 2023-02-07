<?php
include('admincp/config/config.php');

require('carbon/autoload.php');

use Carbon\Carbon;
use Carbon\CarbonInterval;

$now = Carbon::now('Asia/Ho_Chi_Minh');


?>

<div class="box-border h-64 p-4 border-4 text-center rounded-lg border-cyan-400/20">

    <p class="font-mono text-6xl text-lime-800">Thank you!</p>
    <div class="text-lg p-4">
        <p>Cảm ơn bạn đã mua hàng</p>
        <p>Đơn hàng của bạn đã đặt thành công, vui lòng chờ cửa hàng xác
            nhận và liên hệ bạn sớm nhất!</p>
    </div>
    <a href="index.php" class="text-white ">
        <button
            class="text-2xl text-white bg-gradient-to-r from-teal-500 to-lime-400 hover:from-red-400 hover:to-yellow-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 rounded-lg box-border p-2 border-2 font-Georgia">Tiếp
            tục mua hàng</button>
    </a>
</div>