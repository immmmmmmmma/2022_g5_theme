<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$list_count = (is_array($list) && $list) ? count($list) : 0;
$thumb_width = 280;
$thumb_height = 207;
?>

<div class="latestWrap">
    <div class="mylatest">
        <div class="title">
            <h3><a href="<?php echo get_pretty_url($bo_table); ?>"><?php echo $bo_subject ?></a></h3>
            <a href="<?php echo get_pretty_url($bo_table); ?>" class="mIcon">icon</a>
        </div>
        <ul class="content">
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
                <a href="<? echo get_pretty_url($bo_table, $list[$i]['wr_id']) ?>">
                    <? echo $img_content ?>
                    <h4><? echo $list[$i]['subject'] ?>
                    <? if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">N<span class=\"sound_only\">새글</span></span>"; ?>
                    </h4>
                    <p>2022-08-25</p>
                </a>
            </li>
            <? } ?>
    
            <?php if ($list_count == 0) { //게시물이 없을 때  ?>
            <li class="empty_li">게시물이 없습니다.</li>
            <?php }  ?>
    
        </ul>
    </div>
</div>
    <!-- 이미지도 나타내고 싶다면 latest.skin.php 에서 가지고 오면 됨-->

