<?php
include_once('./_common.php');
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$g5["title"]="company";


include_once(G5_THEME_PATH.'/head.php');
?>
<style>
    .slide img{
        width: 100%;
    }
</style>


<ul class="slide">
    <li><img src="<? echo G5_THEME_IMG_URL?>/img1.jpg" alt=""></li>
    <li><img src="<? echo G5_THEME_IMG_URL?>/img2.jpg" alt=""></li>
    <li><img src="<? echo G5_THEME_IMG_URL?>/img3.jpg" alt=""></li>
    <li><img src="<? echo G5_THEME_IMG_URL?>/img4.jpg" alt=""></li>
</ul>

<script>
    $(".slide").bxSlider()
</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');