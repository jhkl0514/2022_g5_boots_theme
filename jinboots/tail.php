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
<div class="bg-dark">
    <div class="container py-5 text-center text-secondary">  
        <div Class="fw-bold text-white">
        이용약관 l 개인정보처리방침 l 영상정보처리기기 l 운영관리방침 <br><br>
        </div>
        <div>
        사업자등록번호 101-81-92326 / 대표이사 화찬권 /통신판매업신고번호 제 01-985호<br>
        TEL 1670-7978 FAX 02-2260-4410 E-mail ybmky@ybm.co.kr 서울특별시 종로구 창경궁로 112-7 (주)YBM교육<br>
        Copyright © ㈜YBM교육. All rights reserved.
        </div>
    </div>
</footer>
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