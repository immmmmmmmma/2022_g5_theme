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



<div id="g5">
	<?php
		echo G5_THEME_PATH;
		echo "<br>";
		echo G5_THEME_IMG_URL."<BR>";
		echo G5_THEME_CSS_URL."<BR>";
		echo G5_THEME_JS_URL."<BR>";
		echo G5_BBS_URL."<BR>";
	?>
</div>

<div class="bannerWrap">
	<div class="banner">
		<div class="txtWrap">
			<h2>
				금융을 시작으로
				일상에 도움이 되는 선한 서비스
			</h2>
			<p>
				삼성생명, 삼성화재, 삼성카드, 삼성증권이 함께 만든
				모니모는 오늘도 이 가치를 펼치고자 합니다
			</p>
		</div>
	</div>
</div>

<div class="mslideWrap">
	<ul class="mslide">
		<li><img src="<? echo G5_THEME_IMG_URL ?>/ms01.png" alt=""></li>
		<li><img src="<? echo G5_THEME_IMG_URL ?>/ms02.png" alt=""></li>
		<li><img src="<? echo G5_THEME_IMG_URL ?>/ms03.png" alt=""></li>
		<li><img src="<? echo G5_THEME_IMG_URL ?>/ms04.png" alt=""></li>
		<li><img src="<? echo G5_THEME_IMG_URL ?>/ms05.png" alt=""></li>
		<li><img src="<? echo G5_THEME_IMG_URL ?>/ms06.png" alt=""></li>
		<li><img src="<? echo G5_THEME_IMG_URL ?>/ms07.png" alt=""></li>
		<li><img src="<? echo G5_THEME_IMG_URL ?>/ms08.png" alt=""></li>
	</ul>
</div>

<script>
	$(".mslide").bxSlider(function(){
		
	})
</script>


<?php
include_once(G5_THEME_PATH.'/tail.php');