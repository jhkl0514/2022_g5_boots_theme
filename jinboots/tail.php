<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>
   <? include_once(G5_THEME_PATH."/skin/nav/mysubmenu.php")?>
</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->

<footer class="footer">
<div class="bg-secondary">
      <div class="container">
        <div class="row py-5 ps-5 ps-md-0 ">          
          <div class="col-lg col-6 text-left ">
            <h4 class="fw-bold  text-white fs-5 border-bottom border-white-50 py-3">
                    YBM Lemon 스토리</h4>
            <ul class="list-group list-group-flush ">
                <li class="list-group-item border-secondary-30 bg-secondary "><a href="/lemon/theme/jinboots/story.php" class="text-white-50 fs-6">YBM Lemon 스토리</a></li>
                <li class="list-group-item border-secondary-30 bg-secondary "><a href="/lemon/bbs/board.php?bo_table=request" class="text-white-50 fs-6">상담신청</a></li>
            </ul>
          </div>
          <div class="col-lg col-6 text-left ">
            <h4 class="fw-bold  text-white fs-5 border-bottom border-white-50 py-3">
            수강신청</h4>
            <ul class="list-group list-group-flush ">
                <li class="list-group-item border-secondary-30 bg-secondary "><a href="/lemon/bbs/board.php?bo_table=applyclass" class="text-white-50 fs-6">수강신청</a></li>
                <li class="list-group-item border-secondary-30 bg-secondary "><a href="/lemon/bbs/board.php?bo_table=review" class="text-white-50 fs-6">체험수업후기</a></li>
            </ul>
          </div>
          <div class="col-lg col-6 text-left ">
            <h4 class="fw-bold  text-white fs-5 border-bottom border-white-50 py-3">
            커뮤니티</h4>
            <ul class="list-group list-group-flush ">
                <li class="list-group-item border-secondary-30 bg-secondary "><a href="/lemon/bbs/board.php?bo_table=gallery" class="text-white-50 fs-6">갤러리</a></li>
                <li class="list-group-item border-secondary-30 bg-secondary "><a href="/lemon/bbs/board.php?bo_table=event" class="text-white-50 fs-6">이벤트</a></li>
            </ul>
          </div>
          <div class="col-lg col-6 text-left ">
            <h4 class="fw-bold  text-white fs-5 border-bottom border-white-50 py-3">
            마이클래스</h4>
            <ul class="list-group list-group-flush ">
                <li class="list-group-item border-secondary-30 bg-secondary "><a href="/lemon/bbs/board.php?bo_table=event" class="text-white-50 fs-6">마이클래스</a></li>                
            </ul>
          </div>                    
          </div>
        </div>
    </div>
        <div class="bg-dark">
            <div class="container">
                <div class="row">
                  <div class="col-md-9 mb-3">
                    <ul class="d-flex justify-content-center justify-content-md-start py-5 ">
                      <li><a href="#!" class="text-white fs-6">로그인</a></li>
                      <li class="px-3 text-secondary fs-6">l</li>
                      <li><a href="#!" class="text-white fs-6">이용약관</a></li>
                      <li class="px-3 text-secondary fs-6">l</li>
                      <li><a href="#!" class="text-white fs-6">개인정보처리방침</a></li>
                      <li class="px-3 text-secondary fs-6">l</li>
                      <li><a href="#!" class="text-white fs-6">운영관리방침</a></li>             
                    </ul>
                  </div>
                  <div class="col-md-3">
                    <ul class="d-flex gap-3 justify-content-center justify-content-md-end">
                      <li class="py-3"><a href="#!"><img src="<?php echo G5_THEME_IMG_URL ?>/naver_blog2.png" alt="" class="img-fluid" style="width:40px"></a></li>
                      <li class="py-3"><a href="#!"><img src="<?php echo G5_THEME_IMG_URL ?>/Instagram_Glyph_Gradient_RGB.png" alt="" class="img-fluid" style="width:40px"></a></li>
                      <li class="py-3 mt-1"><a href="#!"><img src="<?php echo G5_THEME_IMG_URL ?>/youtube_social_icon_red.png" alt="" class="img-fluid" style="width:40px"></a></li>                 
                    </ul>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-10 text-secondary fs-6 mb-5 pb-md-5 pb-0">
                    <p class="py-1"><b  class="text-white-50">사업자등록번호</b>  101-81-92326 <b class="text-white-50 ms-4">대표이사</b>  화찬권 <b class="text-white-50  ms-4">통신판매업신고번호</b> 제 01-985호</p>                    
                    <p class="py-1"><b class="text-white-50">TEL</b> 1670-7978 <b class="text-white-50  ms-4">FAX</b> 02-2260-4410 <b class="text-white-50  ms-4">E-mail</b> ybmky@ybm.co.kr</p> 
                    <p class="py-1 fw-bold text-white-50">서울특별시 종로구 창경궁로 112-7 (주)YBM교육</p> 
                    <p class="py-1 pb-5">Copyright © ㈜YBM교육. All rights reserved.</p> 
                  </div>
                </div>                 
                
            </div>
        </div>
</footer>

</div>

<div class="bottom fixed-bottom ">
    <div class="bg-warning">
        <div class="container">
            <div class="row">
                <div class="offset-2 col-8 offset-2 text-center py-3 d-flex align-items-center  gap-3 ">
                   <h1 class="fs-5 fw-bold">우리 아이만의 전용 온라인 교실. 무료체험 해보세요!</h1>
                   <a href="/lemon/bbs/board.php?bo_table=applyclass"><button type="button" class="bg-danger rounded-5 border-0 py-3 px-5 fs-4 fw-bold text-white shadow-sm">상담신청하기</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");