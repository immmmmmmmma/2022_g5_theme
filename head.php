<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->
<div id="hd">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>
    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>
    
    <div id="hd_wrapper">

        <div id="logo">
            <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_THEME_IMG_URL ?>/logo.svg" alt="<?php echo $config['cf_title']; ?>"></a>
        </div>
	
		<nav id="gnb">
			<h2>메인메뉴</h2>
			<div class="gnb_wrap">
				<ul id="gnb_1dul">
					
					<?php
					$menu_datas = get_menu_db(0, true);
					$gnb_zindex = 999; // gnb_1dli z-index 값 설정용
					$i = 0;
					foreach( $menu_datas as $row ){
						if( empty($row) ) continue;
						$add_class = (isset($row['sub']) && $row['sub']) ? 'gnb_al_li_plus' : '';
					?>
					<li class="gnb_1dli <?php echo $add_class; ?>" style="z-index:<?php echo $gnb_zindex--; ?>">
						<a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_1da"><?php echo $row['me_name'] ?></a>
						
					</li>
					<?php
					$i++;
					}   //end foreach $row

					if ($i == 0) {  ?>
						<li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
					<?php } ?>
				</ul>
				
				
			</div>
    	</nav>
        
        
    </div>
    
    

</div>
<!-- } 상단 끝 -->


<hr>



<!-- 콘텐츠 시작 { -->
<div id="wrapper">
	
	<?php if (!defined("_INDEX_")) { ?>
		<style>
			.visual{
                height: 200px;
				display: flex;
                justify-content: center;
                align-items: center;
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
				background-attachment: fixed;
				color:white
			}
			.visual h2{font-size:2em}
			.subTopBg_01{
				background-image: url(<? echo G5_THEME_IMG_URL?>/bg01.jpg);
			}
			.subTopBg_02{background-image: url(<? echo G5_THEME_IMG_URL?>/bg02.jpg);}
			.subTopBg_03{background-image: url(<? echo G5_THEME_IMG_URL?>/bg03.jpg);}
			.subTopBg_04{background-image: url(<? echo G5_THEME_IMG_URL?>/bg01.jpg);}
		</style>
		<div class="visual" id="page_title">
			<div class="txtWrap">
				<h2 class="loc1D"></h2>
				<p class="txt">항상 저희 홈페이지를 찾아주셔서 감사합니다</p>
			</div>
		</div>
		<script>
			window.onload = function(){
				console.log("111"+$(".loc1D").html())
				if($(".loc1D").html() == "소개"){
					$(".txtWrap>.txt").html("왼쪽에 앉아있는 사람부터 소개 해볼까?")
				}
				if($(".loc1D").html() == "공지사항"){
					$(".txtWrap>.txt").html("금일 점심 쏘야")
				}
			}
		</script>
		
	<?}?>


    <div id="container_wr"  <?php if (defined("_INDEX_")) { ?> style="width:100%" <?php } ?>>
	
    <div id="container">
		
        <?php if (!defined("_INDEX_")) { ?>
			<h2 id="container_title">
				<span title="<?php echo get_text($g5['title']); ?>">
					<?php echo get_head_title($g5['title']); ?>
				</span>
			</h2>
		<?php } ?>
			
		