<?php
include_once('./_common.php');
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


$co_id = "location";
$menuNum = "4";
$menuNum2 = "1";
$g5['title'] = "마이클래스";

//https://jhkl0514.cafe24.com/gnuboard5/theme/jinboots/myclass.php

include_once(G5_THEME_PATH.'/head.php');
?>
<script>
$(document).ready(function(){
   $('#snb > li:nth-child(<?php echo $menuNum; ?>)').addClass("co_id<?php echo $co_id; ?> active");
   $('#snb > li:nth-child(<?php echo $menuNum; ?>) > ul > li:nth-child(<?php echo $menuNum2; ?>)').addClass("snb2d_co_id<?php echo $co_id; ?>  active");
   });
</script>


<div class="container mt-5 pt-5 mb-5 pb-5 d-flex d-flex justify-content-center">
   <img src="<?php echo G5_THEME_IMG_URL ?>/img_member.PNG" alt="" class="img-fluid">
</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');