<?php
include_once('./_common.php');
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


$co_id = "location";
$menuNum = "1";
$menuNum2 = "1";
$g5['title'] = "YBM Lemon스토리";
// $g5['title'] = "YBM Lemon스토리";
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
         <img src="<?php echo G5_THEME_IMG_URL ?>/sub_lemon01.PNG" alt="" class="img-fluid">
         <p class="fs-1 fw-bold mt-5">60년간 외국어 교육에 한 길만 달려온 YBM</p>
         <p class="fs-4 ">YBM이 만드는 화상학습은 달라야 했습니다.</p>
         <img src="<?php echo G5_THEME_IMG_URL ?>/sub_lemon02.PNG" alt="" class="img-fluid">
      </div>
   </div>
</div>
<style>


</style>
<div class="story_bg01">
   <div class="container">
      <div class="row">
         <div class="text-center ">            
            <p class="fs-4 text-secondary lh-lg" style="letter-spacing:-3px;">지루하고 똑같은 화상 수업이 아니라</p>
            <p class="text-info fw-bold lh-lg story_dot" style="letter-spacing:-3px; font-size:40px">우리 아이에게 <b>정</b><b>말</b> <b>필</b><b>요</b><b>한</b>,</p>
            <p class="fs-5 text-light" style="letter-spacing:-2px;">우리 아이의 <span class="text-warning">학습의욕에 불을 지필 수 있는</span></p>
            <p class="fs-5 text-light" style="letter-spacing:-2px;">프로그램을 고민했습니다.</p>
         </div>
      </div>
   </div>
</div>

<div class="container mt-5 pt-5">
   <div class="text-center mb-5 pb-5 ">
         <h2  class="fs-1 fw-bold">YBM 레몬은 다릅니다!</h2>
         <p class="fs-5 lh-lg">YBM 레몬만의 <b class="fs-4">화상 전용 뷰어</b>를 소개합니다.</p> 
   </div>
   <div  class="row">
      <div class="offset-1 col-10 offset-1">
         <div class="row storyBg">
            <div class="col-lg-6  mb-5 ">
                <img src="<?php echo G5_THEME_IMG_URL ?>/e-class_01.png" alt="" class="img-fluid">
               <p class="text-center fs-6 fw-light mt-2">화상 수업에 맞춰 개발된 교재 <strong class="sbg">e-Classbook</strong></p>
            </div>
            <div class="col-lg-6 mb-5">
                <img src="<?php echo G5_THEME_IMG_URL ?>/e-class_02.png" alt="" class="img-fluid">
               <p  class="text-center fs-6 fw-light mt-2">학생이 참여하는 다양한 <strong class="sbg">화상 수업 교구</strong>와 <strong class="sbg">화상 수업 기술</strong></p>
            </div>
            <div class="col-lg-6 mb-5">
                <img src="<?php echo G5_THEME_IMG_URL ?>/e-class_03.png" alt="" class="img-fluid">
               <p  class="text-center fs-6 fw-light mt-2"><strong class="sbg">선생님이 체계적으로 관리해주는 자기주도학습</strong></p>
            </div>
            <div class="col-lg-6  mb-5">
                <img src="<?php echo G5_THEME_IMG_URL ?>/e-class_04.png" alt="" class="img-fluid">
               <p  class="text-center fs-6 fw-light mt-2"><strong class="sbg">한국인 선생님이 함께하는 외국인 회화시간</strong></p>
            </div>
         </div>
      </div>
   </div>
</div>
<style>
   
   </style>

<?php
include_once(G5_THEME_PATH.'/tail.php');