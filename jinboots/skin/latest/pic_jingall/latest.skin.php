<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 290;
$thumb_height = 210;
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
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" class="w-100">';
    $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
    ?>        

        <div class="sItem mt-5 mb-5">
            <div class="img p-2 d-md-block">
                <a href="<?php echo $wr_href; ?>">
                    <?php echo run_replace('thumb_image_tag', $img_content, $thumb); ?>
                </a>
            </div>

            <div class="txt">
             <h2 class="fs-5 mb-3 mt-3">
                <?php
                echo "<a href=\"".$wr_href."\"> ";
                
                if ($list[$i]['is_notice'])
                    echo "<strong>".$list[$i]['subject']."</strong>";
                else
                    echo $list[$i]['subject'];
                
                echo "</a>";
                ?>
                </h2>
                 <span class="lt_date fs-6 text-secondary"><?php echo $list[$i]['datetime2'] ?></span>
            </div>            
        </div>


        


    <?php }  ?>

    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <div class="empty_li">게시물이 없습니다.</div>
    <?php }  ?>
