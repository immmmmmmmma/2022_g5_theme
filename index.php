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

<h2 class="sound_only">최신글</h2>

<?php
echo G5_THEME_PATH;
echo "<br>";
echo G5_THEME_IMG_URL."<br>";
echo G5_THEME_CSS_URL."<br>";
echo G5_THEME_JS_URL."<br>";
?>
<img src="<?echo G5_THEME_IMG_URL?>/img/img1.jpg" alt="">;

<div class="wrap slideWrap">
	<ul class="slide">
		<li><img src="<?echo G5_THEME_URL?>/img/img1.jpg" alt="">" alt=""></li>;
		<li><img src="<?echo G5_THEME_URL?>/img/img2.jpg" alt="">" alt=""></li>;
		<li><img src="<?echo G5_THEME_URL?>/img/img3.jpg" alt="">" alt=""></li>;
		<li><img src="<?echo G5_THEME_URL?>/img/img4.jpg" alt="">" alt=""></li>;
		<li><img src="<?echo G5_THEME_URL?>/img/img5.jpg" alt="">" alt=""></li>;
		<li><img src="<?echo G5_THEME_URL?>/img/img6.jpg" alt="">" alt=""></li>;
		<li><img src="<?echo G5_THEME_URL?>/img/img6.jpg" alt="">" alt=""></li>;
	</ul>
</div>


<script>
	$(".slide").bxSlider();
</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');