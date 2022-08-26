<?php
include_once('./_common.php');
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$co_id = "location";
$menuNum = "1";
$menuNum2 = "2";
$g5['title'] = "오시는길";

include_once(G5_THEME_PATH.'/head.php');
?>

<style>
    .root_daum_roughmap{
        margin: 0 auto;
    }
</style>

<script>


    $(document).ready(function(){
        $('#snb > li:nth-child(<?php echo $menuNum; ?>)').addClass("co_id<?php echo $co_id; ?> active");
        $('#snb > li:nth-child(<?php echo $menuNum; ?>) > ul > li:nth-child(<?php echo $menuNum2; ?>)').addClass("snb2d_co_id<?php echo $co_id; ?>  active");
    });

</script>

<!-- * 카카오맵 - 지도퍼가기 -->
<!-- 1. 지도 노드 -->
<div id="daumRoughmapContainer1661482806805" class="root_daum_roughmap root_daum_roughmap_landing"></div>

<!--
	2. 설치 스크립트
	* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
-->
<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

<!-- 3. 실행 스크립트 -->
<script charset="UTF-8">
	new daum.roughmap.Lander({
		"timestamp" : "1661482806805",
		"key" : "2bhwz",
		"mapWidth" : "1200",
		"mapHeight" : "360"
	}).render();
</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');