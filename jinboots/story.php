<?php
include_once('./_common.php');
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


$co_id = "location";
$menuNum = "1";
$menuNum2 = "1";
$g5['title'] = "YBM Lemon스토리";
// https://jhkl0514.cafe24.com/gnuboard5/theme/jinboots/story.php

include_once(G5_THEME_PATH.'/head.php');
?>
<script>
$(document).ready(function(){
   $('#snb > li:nth-child(<?php echo $menuNum; ?>)').addClass("co_id<?php echo $co_id; ?> active");
   $('#snb > li:nth-child(<?php echo $menuNum; ?>) > ul > li:nth-child(<?php echo $menuNum2; ?>)').addClass("snb2d_co_id<?php echo $co_id; ?>  active");
   });
</script>


<img src="<?php echo G5_THEME_IMG_URL ?>/img_free.PNG" alt="" class="d-block mx-auto">
<div class="container">
   <div class="row">
      <div class="text-center ">
         <img src="<?php echo G5_THEME_IMG_URL ?>/sub_lemon01.PNG" alt="">
         <p>60년간 외국어 교육에 한 길만 달려온 YBM</p>
         <p>YBM이 만드는 화상학습은 달라야 했습니다.</p>
         <img src="<?php echo G5_THEME_IMG_URL ?>/sub_lemon02.PNG" alt="">
      </div>
   </div>
</div>

<div class="story_bg01">
   <div class="container">
      <div class="row">
         <div class="text-center ">            
            <p>지루하고 똑같은 화상 수업이 아니라</p>
            <p>우리 아이에게 정말 필요한,</p>
            <p>우리 아이의 학습의욕에 불을 지필 수 있는</p>
            <p>프로그램을 고민했습니다.</p>
         </div>
      </div>
   </div>
</div>

<div class="container">
   <div class="text-center ">
         <h2>YBM 레몬은 다릅니다!</h2>
         <p>YBM 레몬만의 화상 전용 뷰어를 소개합니다.</p> 
   </div>
   <div class="row">      
      <div class="col-md-6">
          <img src="<?php echo G5_THEME_IMG_URL ?>/e-class_01.png" alt="">
         <p>화상 수업에 맞춰 개발된 교재 e-Classbook</p>
      </div>
      <div class="col-md-6">
          <img src="<?php echo G5_THEME_IMG_URL ?>/e-class_02.png" alt="">
         <p>학생이 참여하는 다양한 화상 수업 교구와 화상 수업 기술</p>
      </div>
      <div class="col-md-6">
          <img src="<?php echo G5_THEME_IMG_URL ?>/e-class_03.png" alt="">
         <p>선생님이 체계적으로 관리해주는 자기주도학습</p>
      </div>
      <div class="col-md-6">
          <img src="<?php echo G5_THEME_IMG_URL ?>/e-class_04.png" alt="">
         <p>한국인 선생님이 함께하는 외국인 회화시간</p>
      </div>
   </div>
</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');