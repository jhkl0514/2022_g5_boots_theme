<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$list_count = (is_array($list) && $list) ? count($list) : 0;


if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨

$thumb_width = 300;
$thumb_height = 150;

?>



<!-- notice -->
<div class="notice01">
    <div class="container not01">
        <h3 class="wow fadeInUp" data-wow-offset="100" data-wow-delay="0">재단소식</h3>
               
    </div>
    <div class="container not02">
        <ul class="clearfix">
            <li><a href="<?php echo get_pretty_url($bo_table); ?>"><?php echo $bo_subject ?></a></li>
            <li><a href="#">뉴스룸</a></li>
            <li><a href="#">소셜미디어</a></li>
        </ul>            
    </div>

    <div class="container not03">    
        <ul class="clearfix">
			 <?php for ($i=0; $i<$list_count; $i++) {  
				 
				  $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

					if($thumb['src']) {
						$img = $thumb['src'];
					} else {
						$img = G5_IMG_URL.'/no_img.png';
						$thumb['alt'] = '이미지가 없습니다.';
					}
					$img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
				 
				 
				 
				 ?>
            <li>
				</a>
                <div class="not_card">
				<a href="<? echo get_pretty_url($bo_table, $list[$i]['wr_id']) ?>">
                        <h3><? echo $list[$i]['subject']; ?></h3>
						<? if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">N<span class=\"sound_only\">새글</span></span>"; ?>	
                        <p class="txt"><? echo get_text(cut_str(strip_tags($list[$i]['wr_content']),100)); ?> </p>
                        <p class="data"><?php echo $list[$i]['datetime2'] ?></p>						
						<div>
							<? echo $img_content ?>
						</div>
						


    
						
				</div>
				 </a>
				
            </li>
			<? }  ?> 

			<?php if ($list_count == 0) { //게시물이 없을 때  ?>
				<li class="empty_li">게시물이 없습니다.</li>
			<?php }  ?>
           
        </ul>
    </div>
</div>
<!-- notice -->



<!-- 

<div class="lat">
    <h2 class="lat_title"><a href="<?php echo get_pretty_url($bo_table); ?>"><?php echo $bo_subject ?></a></h2>
    <ul>
    <?php for ($i=0; $i<$list_count; $i++) {  ?>
        <li class="basic_li">
            <?php
            if ($list[$i]['icon_secret']) echo "<i class=\"fa fa-lock\" aria-hidden=\"true\"></i><span class=\"sound_only\">비밀글</span> ";

            echo "<a href=\"".get_pretty_url($bo_table, $list[$i]['wr_id'])."\"> ";
            if ($list[$i]['is_notice'])
                echo "<strong>".$list[$i]['subject']."</strong>";
            else
                echo $list[$i]['subject'];

            echo "</a>";
			
			if ($list[$i]['icon_hot']) echo "<span class=\"hot_icon\"><i class=\"fa fa-heart\" aria-hidden=\"true\"></i><span class=\"sound_only\">인기글</span></span>";
			if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">N<span class=\"sound_only\">새글</span></span>";
            // if ($list[$i]['link']['count']) { echo "[{$list[$i]['link']['count']}]"; }
            // if ($list[$i]['file']['count']) { echo "<{$list[$i]['file']['count']}>"; }

            echo $list[$i]['icon_reply']." ";
           	if (isset($list[$i]['icon_file']) && $list[$i]['icon_file']) echo " <i class=\"fa fa-download\" aria-hidden=\"true\"></i>" ;
            if ($list[$i]['icon_link']) echo " <i class=\"fa fa-link\" aria-hidden=\"true\"></i>" ;

            if ($list[$i]['comment_cnt'])  echo "
            <span class=\"lt_cmt\"><span class=\"sound_only\">댓글</span>".$list[$i]['comment_cnt']."</span>";

            ?>
            <div class="lt_info">
				<span class="lt_nick"><?php echo $list[$i]['name'] ?></span>
            	<span class="lt_date"><?php echo $list[$i]['datetime2'] ?></span>              
            </div>
        </li>
    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>
    <a href="<?php echo get_pretty_url($bo_table); ?>" class="lt_more"><span class="sound_only"><?php echo $bo_subject ?></span>더보기</a>

</div> -->
