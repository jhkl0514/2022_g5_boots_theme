<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 380;
$thumb_height = 240;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>


    <?php
    for ($i=0; $i<$list_count; $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['src'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" class="card-img-top"
    alt="card-img-top" style="height: 240px;">';
    $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
    ?>
        <div class="col-md-6 col-xl-4 mt-5 pb-5">
         <div class="d-flex justify-content-xl-between justify-content-center">
         <div class="card border-0 rounded-5"  style="width: 380px;"> 
                <div>       
                    <a href="<?php echo $wr_href; ?>" >
                        <?php echo run_replace('thumb_image_tag', $img_content, $thumb); ?>
                    </a>
                </div>              

            <div class="card-body" style="height: 275px;">
                <div class="txt">
                <h5 class="card-title fs-5 fw-bold mb-3">
                    <?php
                    echo "<a href=\"".$wr_href."\"> ";
                    
                    if ($list[$i]['is_notice'])
                        echo "<strong>".$list[$i]['subject']."</strong>";
                    else
                        echo $list[$i]['subject'];                        
                    
                    echo "</a>";
                    ?>
                    </h5>
                    <div style="height: 1px; background:#F0F0F0"></div>                    
                    <p class="card-text fs-6 text-secondary mt-4">
                         <? echo get_text(cut_str(strip_tags($list[$i]['wr_content']),80)); ?> 
                    </p>
                </div> 
              </div>
            </div>
            </div>
            
        </div>


    <?php }  ?>

    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <div class="empty_li">게시물이 없습니다.</div>
    <?php }  ?>
