<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<style>
    .mView{
        width: 100%; padding-top: 36%;
        position: relative; overflow: hidden;
    }
    .mView video{position: absolute; width: 100%; left: 50%; top: 50%; transform: translate(-50%,-50%)}
    .line{height: 1px; background: #ddd;}
</style>

<!-- aos.js -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>




<!-- <div class="mView">
    <img src="<?php echo G5_THEME_IMG_URL ?>/pc01.jpg" alt="">
</div> -->

<div class="line"></div>
<div class="mView">
    <video src="https://ybmlemon.com/img/web/HOME/main/ybmlemon.mp4" autoplay="" muted="" draggable="true"></video>
</div>




<div class="container" >
    <div class="row pt-5 mt-5 " >
        <div class="col-lg-6 position-relative" data-aos="fade-right"  data-aos-offset="300"   data-aos-easing="ease-in-sine">
            <img src="<?php echo G5_THEME_IMG_URL ?>/main_visual_01.png" alt=""  class="img-fluid"> 
        </div>
        <div class="col-lg-6 d-flex justify-content-center justify-content-lg-start flex-wrap mt-lg-0 mt-2" 
			 data-aos="fade-left"  data-aos-offset="500"   data-aos-easing="ease-in-sine">
            <h2 class="fs-2 fw-bold mt-auto text-lg-start text-center">
            YBM 레몬만의 전용뷰어로 수업
            </h2>
            <p class="fs-6 mt-3 text-lg-start text-center">화상 회의실 같은 딱딱한 뷰어가 아닙니다. <br>
                YBM교육이 개발한 화상수업 전용 뷰어입니다.</p>
        </div>
    </div>
</div>


<div class="container rounded-5">
    <div class="row pt-5 mt-5 " >        
    <div class="col-lg-6 d-flex justify-content-center justify-content-lg-end flex-wrap mt-lg-0 mt-5 pe-5 order-2 order-lg-1"
		  data-aos="fade-up"  data-aos-duration="3000"
		 >
            <h2 class="fs-2 fw-bold mt-auto text-lg-end text-center">화상수업을 위해 개발된<br>e-Classbook</h2>
            <p class="fs-6 mt-3 text-lg-end text-center">오프라인 교재를 그대로 올려서 수업하지 않습니다.<br>
            온라인 수업에 맞춰 개발된 온라인 전용 e-Classbook입니다.
            </p>
        </div>
        <div class="col-lg-6 position-relative order-1 order-lg-2" data-aos="fade-down"  data-aos-easing="linear"  data-aos-duration="5000">
            <img src="<?php echo G5_THEME_IMG_URL ?>/main_visual_02.png" alt="" class="img-fluid">          
        </div>
    </div>
</div>

<div class="container">
    <div class="row pt-5 mt-5" >
        <div class="col-lg-6 position-relative" data-aos="fade-up">
            <img src="<?php echo G5_THEME_IMG_URL ?>/main_visual_03.png" alt=""  class="img-fluid"> 
        </div>
        <div class="col-lg-6 d-flex justify-content-center justify-content-lg-start flex-wrap mt-lg-0 mt-2" data-aos="fade-down">
            <h2 class="fs-2 fw-bold mt-auto text-lg-start text-center">지루할 틈이 없는 수업 진행</h2>
            <p class="fs-6 mt-3 text-lg-start text-center">온라인 교구와 액티비티로 흥미있는 수업이 진행됩니다.<br>
				선생님과 함께 직접 수업에 참여합니다.</p>
        </div>
    </div>
</div>

<div class="container rounded-5">
    <div class="row pt-5 mt-5 " >        
        <div class="col-lg-6 d-flex justify-content-center justify-content-lg-end flex-wrap mt-lg-0 mt-5 pe-5 order-2 order-lg-1" data-aos="fade-right">
            <h2 class="fs-2 fw-bold mt-auto text-lg-end text-center">외국인 선생님 +<br>
                                        한국인 선생님이 함께</h2>
            <p class="fs-6 mt-3 text-lg-end text-center">외국인 선생님과 수업할 때, 한국인 선생님도<br>
                옆에 함께합니다. 더 이상 영어가 두렵지 않습니다.
            </p>
        </div>
        <div class="col-lg-6 position-relative col-lg-6 position-relative order-1 order-lg-2" data-aos="fade-left">
            <img src="<?php echo G5_THEME_IMG_URL ?>/main_visual_04.png" alt="" class="img-fluid">          
        </div>
    </div>
</div>

<div class="container">
    <div class="row pt-5 mt-5 " >
        <div class="col-lg-6 position-relative" data-aos="fade-up-right">
            <img src="<?php echo G5_THEME_IMG_URL ?>/main_visual_05.png" alt=""  class="img-fluid"> 
        </div>
        <div class="col-lg-6 d-flex justify-content-center justify-content-lg-start flex-wrap mt-lg-0 mt-2 " data-aos="fade-up-left">
            <h2 class="fs-2 fw-bold mt-auto text-lg-start text-center">
            Main Class 자신감 UP<br>
            예습도복습도<br>
            특별한 학습시스템
            </h2>
            <p class="fs-6 mt-3 text-lg-start text-center">본 수업 전/후 예복습 시스템과 숙제로 효과적인 확인학습을
				진행합니다. 혼자서도 척척! 자기주도 학습이 가능합니다.</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row pt-5 mt-5">
    <div class="col-lg-12 text-center" data-aos="zoom-in">
            <h2 class="fs-2 fw-bold mt-auto">
            YBM 레몬만의 밀착 학습관리
            </h2>
		<p class="fs-6 mt-3 mb-5">체계적인 관리를 통해 우리 아이의 학습효과를 극대화 합니다.</p>
        </div>
        <div class="col-lg-12 d-flex justify-content-center" data-aos="zoom-in-up">
            <img src="<?php echo G5_THEME_IMG_URL ?>/graph.png" alt=""  class="img-fluid"> 
        </div>        
    </div>
</div>

<div class="container pt-5 mt-5">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-12 col-md-6 col-xxl-3">
            <div class="card">
                <div class="row g-0 ">
                    <div class="col-5 col-sm-3 d-flex align-items-center ms-4">
                        <img src="<?php echo G5_THEME_IMG_URL ?>/main_icon_report_01.png" alt="card-horizontal-image">
                    </div>
                    <div class="col-5 col-sm-7">
                        <div class="mt-4 mb-4">
                            <h5 class="fs-5 fw-bold">학습 결과 보고서</h5>
                            <p class="fs-6 text-secondary ">Daily Class Report</p>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="col-12 col-md-6 col-xxl-3">
            <div class="card">
                <div class="row g-0 ">
                    <div class="col-5 col-sm-3 d-flex align-items-center ms-4">
                        <img src="<?php echo G5_THEME_IMG_URL ?>/main_icon_test_01.png" alt="card-horizontal-image">
                    </div>
                    <div class="col-5 col-sm-7">
                        <div class="mt-4 mb-4">
                            <h5 class="fs-5 fw-bold">성취도 테스트</h5>
                            <p class="fs-6 text-secondary ">Achievement Test</p>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="col-12 col-md-6 col-xxl-3">
            <div class="card">
                <div class="row g-0 ">
                    <div class="col-5 col-sm-3 d-flex align-items-center ms-4">
                        <img src="<?php echo G5_THEME_IMG_URL ?>/main_icon_solution_01.png" alt="card-horizontal-image">
                    </div>
                    <div class="col-5 col-sm-7">
                        <div class="mt-4 mb-4">
                            <h5 class="fs-5 fw-bold">화상솔루션</h5>
                            <p class="fs-6 text-secondary ">Online Learning Solutins</p>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xxl-3">
            <div class="card">
                <div class="row g-0 ">
                    <div class="col-5 col-sm-3 d-flex align-items-center ms-4">
                        <img src="<?php echo G5_THEME_IMG_URL ?>/main_icon_homework_01.png" alt="card-horizontal-image">
                    </div>
                    <div class="col-5 col-sm-7">
                        <div class="mt-4 mb-4 ms-0">
                            <h5 class="fs-5 fw-bold">온오프라인숙제관리</h5>
                            <p class="fs-6 text-secondary ">Homework</p>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
		 <div class="col-12 col-md-6 col-xxl-3">
            <div class="card">
                <div class="row g-0 ">
                    <div class="col-5 col-sm-3 d-flex align-items-center ms-4">
                        <img src="<?php echo G5_THEME_IMG_URL ?>/main_icon_attendance_01.png" alt="card-horizontal-image">
                    </div>
                    <div class="col-5 col-sm-7">
                        <div class="mt-4 mb-4 ms-0">
                            <h5 class="fs-5 fw-bold">출결관리</h5>
                            <p class="fs-6 text-secondary ">Attendance</p>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
		 <div class="col-12 col-md-6 col-xxl-3">
            <div class="card">
                <div class="row g-0 ">
                    <div class="col-5 col-sm-3 d-flex align-items-center ms-4">
                        <img src="<?php echo G5_THEME_IMG_URL ?>/main_icon_counsel_01.png" alt="card-horizontal-image">
                    </div>
                    <div class="col-5 col-sm-7">
                        <div class="mt-4 mb-4 ms-0">
                            <h5 class="fs-5 fw-bold">정기상담관리</h5>
                            <p class="fs-6 text-secondary ">Requla Consulting</p>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
		 <div class="col-12 col-md-6 col-xxl-3">
            <div class="card">
                <div class="row g-0 ">
                    <div class="col-5 col-sm-3 d-flex align-items-center ms-4">
                        <img src="<?php echo G5_THEME_IMG_URL ?>/main_icon_alert_01.png" alt="card-horizontal-image">
                    </div>
                    <div class="col-5 col-sm-7">
                        <div class="mt-4 mb-4 ms-0">
                            <h5 class="fs-5 fw-bold">모바일 알림</h5>
                            <p class="fs-6 text-secondary ">Notifications</p>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="col-12 col-md-6 col-xxl-3">
            <div class="card">
                <div class="row g-0 ">
                    <div class="col-5 col-sm-3 d-flex align-items-center ms-4">
                        <img src="<?php echo G5_THEME_IMG_URL ?>/main_icon_point_01.png" alt="card-horizontal-image">
                    </div>
                    <div class="col-5 col-sm-7">
                        <div class="mt-4 mb-4 ms-0">
                            <h5 class="fs-5 fw-bold">포인트 제도</h5>
                            <p class="fs-6 text-secondary ">Rewad System</p>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 p-4">
            <?php
            // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
            // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
            // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
            echo latest('theme/basic', 'notice', 5, 23);		// 최소설치시 자동생성되는 갤러리게시판
            ?>
        </div>
        <div class="col-md-4  p-4">
            <?php           
            echo latest('theme/basic', 'notice', 5, 23);
            ?>
        </div>
        <div class="col-md-4  p-4">
            <?php            
            echo latest('theme/basic', 'notice', 5, 23);
            ?>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<style>
    .slide1 .prev,.slide1 .next{cursor: pointer;}
    .slide1 img.prev,img.next{position: absolute;top: 50%;transform:translateY(-50%)}
    .slide1 img.prev{left: -50px;}
    .slide1 img.next{right: -50px;}
    .slickslide1 .sItem{
        padding: 15px;opacity: 0.5;transition:0.3s;
        transform:scale(0.8)
    }
    .slickslide1 .sItem.slick-center{padding: 15px;opacity: 1;transform:scale(1)}




    .slide2 .prev,.slide2 .next{cursor: pointer;}
    .slide2 img.prev,img.next{position: absolute;top: 50%;transform:translateY(-50%)}
    .slide2 img.prev{left: -50px;}
    .slide2 img.next{right: -50px;}

    .slickslide2 .sItem{margin: 0 10px;}

    .slide2 .sItem{position: relative;border-radius:10px;overflow: hidden;}
    .slide2 .sItem .txt{
        position: absolute;
        width: 100%;height: 100%;
        top: 0;left: 0;background-color:rgba(0,0,0,0.3);
          
    }
    .slide2 .sItem .txt a{
        display: flex;height: 100%;
        justify-content: center;align-items: center;
        color:white;font-size:2em
    }
    /* .slickslide2 .sItem.slick-center{padding: 15px;opacity: 1;transform:scale(1)} */
 
</style>

<div class="container position-relative slide1">
  <img src="<?php echo G5_THEME_IMG_URL?>/prev.png" alt="" class="prev d-none d-md-block" >
  <img src="<?php echo G5_THEME_IMG_URL?>/next.png" alt="" class="next d-none d-md-block">
  <div class="slickslide1">
    <div class="sItem">
        <img src="<?php echo G5_THEME_IMG_URL ?>/img1.jpg" alt="" class="img-fluid">
    </div>
    <div class="sItem">
        <img src="<?php echo G5_THEME_IMG_URL ?>/img2.jpg" alt="" class="img-fluid">
    </div>
    <div class="sItem">
        <img src="<?php echo G5_THEME_IMG_URL ?>/img3.jpg" alt="" class="img-fluid">
    </div>
    <div class="sItem">
        <img src="<?php echo G5_THEME_IMG_URL ?>/img4.jpg" alt="" class="img-fluid">
    </div>
    <div class="sItem">
        <img src="<?php echo G5_THEME_IMG_URL ?>/img5.jpg" alt="" class="img-fluid">
    </div>
    <div class="sItem">
        <img src="<?php echo G5_THEME_IMG_URL ?>/img6.jpg" alt="" class="img-fluid">
    </div>
    <div class="sItem">
        <img src="<?php echo G5_THEME_IMG_URL ?>/img7.jpg" alt="" class="img-fluid">
    </div>

  </div>
</div>


<div class="container position-relative slide2">
    <img src="<?php echo G5_THEME_IMG_URL?>/prev.png" alt="" class="prev d-none d-md-block" >
    <img src="<?php echo G5_THEME_IMG_URL?>/next.png" alt="" class="next d-none d-md-block">
    <div class="slickslide2">
        <?php
            echo latest('theme/pic_jingall', 'gallery', 7, 23);		
        ?>
    </div>
</div>





<div class="container">
            <h2 class="text-center pt-5 mt-5 fs-1 fw-bold">갤러리</h2>            
            <div class="owl-carousel d-xl-flex justify-content-xl-between  mt-5" id="oslide1">
                <!-- item1 s -->
                <div class="item p-2 d-flex d-md-block">
                <img src="<?php echo G5_THEME_IMG_URL ?>/gallery_01.png" alt="" class="mb-3">
                    <div class="txtBody">
                        <h2 class="fs-5 mb-3">Project | Speaking <br> Level 2 Day-13</h2>
                        <p class="fs-6 text-secondary">2022.07.28</p>
                    </div>

                </div>
                <!-- item1 e -->
				<!-- item1 s -->
                <div class="item p-2 d-flex d-md-block">
                <img src="<?php echo G5_THEME_IMG_URL ?>/gallery_01.png" alt="" class="mb-3">
                    <div class="txtBody">
                        <h2 class="fs-5 mb-3">Project | Speaking <br> Level 2 Day-13</h2>
                        <p class="fs-6 text-secondary">2022.07.28</p>
                    </div>

                </div>
                <!-- item1 e -->
				<!-- item1 s -->
                <div class="item p-2 d-flex d-md-block">
                <img src="<?php echo G5_THEME_IMG_URL ?>/gallery_01.png" alt="" class="mb-3">
                    <div class="txtBody">
                        <h2 class="fs-5 mb-3">Project | Speaking <br> Level 2 Day-13</h2>
                        <p class="fs-6 text-secondary">2022.07.28</p>
                    </div>

                </div>
                <!-- item1 e -->
				<!-- item1 s -->
                <div class="item p-2 d-flex d-md-block">
                <img src="<?php echo G5_THEME_IMG_URL ?>/gallery_01.png" alt="" class="mb-3">
                    <div class="txtBody">
                        <h2 class="fs-5 mb-3">Project | Speaking <br> Level 2 Day-13</h2>
                        <p class="fs-6 text-secondary">2022.07.28</p>
                    </div>

                </div>			
                <!-- item1 e -->
            </div>
        </div>

</div>

 



<script>
    $('.slickslide1').slick({
    centerMode: true,
    slidesToShow: 5,
    nextArrow:$('.slide1 .next'),
    prevArrow:$('.slide1 .prev'),
    responsive: [
        {
        breakpoint: 768,
        settings: {
            centerMode: true,
            slidesToShow: 1
        }
        },
        {
        breakpoint: 480,
        settings: {
            centerMode: true,
            slidesToShow: 1
        }
        }
    ]
    });


    $('.slickslide2').slick({
    centerMode: true,
    slidesToShow: 5,
    nextArrow:$('.slide2 .next'),
    prevArrow:$('.slide2 .prev'),
    responsive: [
        {
        breakpoint: 768,
        settings: {
            centerMode: true,
            slidesToShow: 1
        }
        },
        {
        breakpoint: 480,
        settings: {
            centerMode: true,
            slidesToShow: 1
        }
        }
    ]
    });
    
</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');