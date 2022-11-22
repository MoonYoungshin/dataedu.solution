<!DOCTYPE html>
<?php
/**
 * 20220223 | @m | connect.php 추가
 */

include "../../share/inc/connect.php"; // 접속경로
?>
<html lang="ko">
<head>
<?php $d1n=1;$d2n=1;$d3n=1;$d4n=1;$d5n=1;$d6n=1; 
$pageTitle="Pick Color"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>


<style>/*<![CDATA[*/
	/* ◇◆ _Demo Page_ ◇◆◇◆◇ */
	h2.demo{display:block;
		margin:2em 0;padding:.75em .875em;
		border-radius:2px;
		border-left:.5em solid #357;
		background:#579;
		color:#fff;
		font-weight:600;
		font-size:1em;
		letter-spacing:0;
		box-shadow: inset 0 1px 0 0 rgba(0,0,0, .1),
			0 2px 0 0 rgba(0,0,0, .05);
	}


	/* 글꼴 샘플 선택 20200522. 20200605 */
	.mcp1pick1color1{
		position:relative;
		font-family:
			'Lato', /* 숫자,영문 */
			'Microsoft JhengHei', /* 한자 */
			'맑은 고딕','Malgun Gothic', /* 한글 */
			sans-serif;
		line-height:1.375;
	}
	.color1item1{
		display:inline-block;
		position:relative;
		box-sizing:border-box; /* ☆ */
		width:5.75%; /* (1/16)-(0.25*2) */
		height:2.375em;
		margin:.25% 0;
		padding:.5em;
		color:#fff;
		font-size:14px;
		text-align:center;
		cursor:default;
	}
	.color1item1:before{content:'Copied!'; /* □ */
		display:block;
		position:absolute;left:0;right:0;top:0;bottom:0;
		background:rgba(0,0,0, .8);
		font-size:12px;
		line-height:32px;
		opacity:0;
	}
	.color1item1.do:before{
		animation:kf1op110 1s alternate;
	}
	/* ◇◆ */
	@keyframes kf1op110{
		0%{opacity:1;}
		75%{opacity:1;}
		100%{opacity:0;}
	}


	/* ☆ 대비3vs1 */
	.color1item1.contrast3vs1{
		box-shadow:0 0 0 1px rgba(0,0,0, 1);
	}
	.color1item1.contrast--valid,
	.color1item1.off{
		border:1px solid rgba(255,255,0, 1);
		background:#fff;
	}
	/* ☆ */
	.mj-cp1pick1color1{
		position:relative;
	}
	.mj-cp1pick1color1 .color1item1{
		width:6.25%; /* (1/16) */
	}


/*]]>*/</style>


</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">
<!-- width1s2 -->
<div class="width1s2">





<!-- mcp1pick1color1 -->
<div class="mcp1pick1color1">


<h2 class="hb1 h2"> Choice Contrast 3.2:1 Colors  </h2>

<a class="color1item1" style="background: #4193ee;">#4193ee</a>
<a class="color1item1" style="background: #299fa2;">#299fa2</a>
<a class="color1item1" style="background: #2aa178;">#2aa178</a>
<a class="color1item1" style="background: #42a152;">#42a152</a>
<a class="color1item1" style="background: #669d39;">#669d39</a>
<a class="color1item1" style="background: #869722;">#869722</a>
<a class="color1item1" style="background: #a58d29;">#a58d29</a>
<a class="color1item1" style="background: #d47724;">#d47724</a>
<a class="color1item1" style="background: #e46c40;">#e46c40</a>
<a class="color1item1" style="background: #ee6069;">#ee6069</a>
<a class="color1item1" style="background: #ea5ba8;">#ea5ba8</a>
<a class="color1item1" style="background: #d06ad8;">#d06ad8</a>
<a class="color1item1" style="background: #aa79eb;">#aa79eb</a>
<a class="color1item1" style="background: #8385f6;">#8385f6</a>
<a class="color1item1" style="background: #908f8f;">#908f8f</a>
<br />


<h2 class="hb1 h2"> Choice Contrast 3:1 Colors  </h2>


R(0)G(5~a)B()
<br />
<a class="color1item1" style="background: #059;">#059</a>
<a class="color1item1" style="background: #06a;">#06a</a>
<a class="color1item1" style="background: #078;">#078</a>
<a class="color1item1" style="background: #082;">#082</a>
<a class="color1item1" style="background: #089;">#089</a>
<a class="color1item1" style="background: #08c;">#08c</a>
<a class="color1item1" style="background: #096;">#096</a>
<a class="color1item1" style="background: #099;">#099</a>
<a class="color1item1" style="background: #09b;">#09b</a>
<a class="color1item1" style="background: #09c;">#09c</a>
<a class="color1item1" style="background: #09d;">#09d</a>
<a class="color1item1" style="background: #0a0;">#0a0</a>
<a class="color1item1" style="background: #0a4;">#0a4</a>
<a class="color1item1" style="background: #0a6;">#0a6</a>
<a class="color1item1" style="background: #0a7;">#0a7</a>
<br />
R(0)G()B(f~0)
<br />
<a class="color1item1 contrast3vs1" style="background: #09f;">#09f</a><!-- ☆ -->
<a class="color1item1" style="background: #09e;">#09e</a>
<a class="color1item1" style="background: #09d;">#09d</a>
<a class="color1item1" style="background: #09c;">#09c</a>
<a class="color1item1" style="background: #09b;">#09b</a>
<a class="color1item1" style="background: #09a;">#09a</a>
<a class="color1item1" style="background: #099;">#099</a>
<a class="color1item1 contrast3vs1" style="background: #0a8;">#0a8</a><!-- ☆ -->
<a class="color1item1" style="background: #0a7;">#0a7</a>
<a class="color1item1" style="background: #0a6;">#0a6</a>
<a class="color1item1" style="background: #0a5;">#0a5</a>
<a class="color1item1" style="background: #0a4;">#0a4</a>
<a class="color1item1" style="background: #0a3;">#0a3</a>
<a class="color1item1" style="background: #0a2;">#0a2</a>
<a class="color1item1" style="background: #0a1;">#0a1</a>
<a class="color1item1" style="background: #0a0;">#0a0</a>
<br />
R(0~f)G()B(8)
<br />
<a class="color1item1" style="background: #0a8;">#0a8</a>
<a class="color1item1" style="background: #198;">#198</a>
<a class="color1item1" style="background: #298;">#298</a>
<a class="color1item1" style="background: #398;">#398</a>
<a class="color1item1" style="background: #498;">#498</a>
<a class="color1item1" style="background: #598;">#598</a>
<a class="color1item1" style="background: #698;">#698</a>
<a class="color1item1" style="background: #798;">#798</a>
<a class="color1item1" style="background: #898;">#898</a>
<a class="color1item1" style="background: #988;">#988</a>
<a class="color1item1" style="background: #a88;">#a88</a>
<a class="color1item1" style="background: #b88;">#b88</a>
<a class="color1item1" style="background: #c78;">#c78</a>
<a class="color1item1" style="background: #d78;">#d78</a>
<a class="color1item1" style="background: #e68;">#e68</a>
<a class="color1item1" style="background: #f58;">#f58</a>
<br />
R(0~f)G(a)B()
<br />
<a class="color1item1" style="background: #0a8;">#0a8</a>
<a class="color1item1" style="background: #1a7;">#1a7</a>
<a class="color1item1" style="background: #2a7;">#2a7</a>
<a class="color1item1" style="background: #3a6;">#3a6</a>
<a class="color1item1" style="background: #4a4;">#4a4</a>
<a class="color1item1" style="background: #590;">#590</a>
<br />
R(0~f)G()B(0)
<br />
<a class="color1item1" style="background: #0a0;">#0a0</a>
<a class="color1item1" style="background: #1a0;">#1a0</a>
<a class="color1item1" style="background: #2a0;">#2a0</a>
<a class="color1item1" style="background: #3a0;">#3a0</a>
<a class="color1item1" style="background: #4a0;">#4a0</a>
<a class="color1item1" style="background: #590;">#590</a>
<a class="color1item1" style="background: #690;">#690</a>
<a class="color1item1" style="background: #790;">#790</a>
<a class="color1item1" style="background: #890;">#890</a>
<a class="color1item1" style="background: #990;">#990</a>
<a class="color1item1" style="background: #a80;">#a80</a>
<a class="color1item1" style="background: #b80;">#b80</a>
<a class="color1item1 contrast3vs1" style="background: #c80;">#c80</a><!-- ☆ -->
<a class="color1item1" style="background: #d70;">#d70</a>
<a class="color1item1" style="background: #e60;">#e60</a>
<a class="color1item1" style="background: #f50;">#f50</a>
<br />
R(c)G()B(0~f)
<br />
<a class="color1item1" style="background: #c80;">#c80</a>
<a class="color1item1" style="background: #c81;">#c81</a>
<a class="color1item1" style="background: #c82;">#c82</a>
<a class="color1item1" style="background: #c73;">#c73</a>
<a class="color1item1" style="background: #c74;">#c74</a>
<a class="color1item1" style="background: #c75;">#c75</a>
<a class="color1item1" style="background: #c76;">#c76</a>
<a class="color1item1" style="background: #c77;">#c77</a>
<a class="color1item1" style="background: #c78;">#c78</a>
<a class="color1item1" style="background: #c79;">#c79</a>
<a class="color1item1" style="background: #c7a;">#c7a</a>
<a class="color1item1" style="background: #c7b;">#c7b</a>
<a class="color1item1" style="background: #c7c;">#c7c</a>
<a class="color1item1" style="background: #c6d;">#c6d</a>
<a class="color1item1" style="background: #c6e;">#c6e</a>
<a class="color1item1" style="background: #c6f;">#c6f</a>
<br />
R(f)G()B(0~f)
<br />
<a class="color1item1 contrast3vs1" style="background: #f50;">#f50</a>
<a class="color1item1" style="background: #f51;">#f51</a>
<a class="color1item1" style="background: #f52;">#f52</a>
<a class="color1item1" style="background: #f53;">#f53</a>
<a class="color1item1" style="background: #f54;">#f54</a>
<a class="color1item1" style="background: #f55;">#f55</a>
<a class="color1item1" style="background: #f56;">#f56</a>
<a class="color1item1" style="background: #f57;">#f57</a>
<a class="color1item1" style="background: #f58;">#f58</a>
<a class="color1item1 contrast3vs1" style="background: #f59;">#f59</a><!-- ☆ -->
<a class="color1item1" style="background: #f4a;">#f4a</a>
<a class="color1item1" style="background: #f4b;">#f4b</a>
<a class="color1item1" style="background: #f4c;">#f4c</a>
<a class="color1item1" style="background: #f3d;">#f3d</a>
<a class="color1item1" style="background: #f3e;">#f3e</a>
<a class="color1item1" style="background: #f2f;">#f2f</a>
<br />
R(f~0)G(5~9)B()
<br />
<a class="color1item1" style="background: #f59;">#f59</a>
<a class="color1item1" style="background: #e5d;">#e5d</a>
<a class="color1item1" style="background: #c6f;">#c6f</a>
<a class="color1item1" style="background: #b6f;">#b6f</a>
<a class="color1item1" style="background: #a7f;">#a7f</a>
<a class="color1item1" style="background: #97f;">#97f</a>
<a class="color1item1" style="background: #88f;">#88f</a>
<a class="color1item1" style="background: #78f;">#78f</a>
<a class="color1item1" style="background: #68f;">#68f</a>
<a class="color1item1" style="background: #58f;">#58f</a>
<a class="color1item1" style="background: #48f;">#48f</a>
<a class="color1item1" style="background: #38f;">#38f</a>
<a class="color1item1" style="background: #29f;">#29f</a>
<a class="color1item1" style="background: #19f;">#19f</a>
<a class="color1item1" style="background: #09f;">#09f</a>
<br />


<hr />


<a class="color1item1" style="background: #000;">#000</a>
~ <a class="color1item1" style="background: #0a8;">#0a8</a>
~ <a class="color1item1" style="background: #008;">#008</a>
~ <a class="color1item1" style="background: #0a0;">#0a0</a>
~ >(3:1)>
~ <a class="color1item1" style="background: #0a9;">#0a9</a>
~ <a class="color1item1" style="background: #0ff;">#0ff</a>
<br />
<a class="color1item1" style="background: #100;">#100</a>
~ <a class="color1item1" style="background: #1a7;">#1a7</a>
~ <a class="color1item1" style="background: #107;">#107</a>
~ <a class="color1item1" style="background: #1a0;">#1a0</a>
~ >(3:1)>
~ <a class="color1item1" style="background: #1a8;">#1a8</a>
~ <a class="color1item1" style="background: #1ff;">#1ff</a>
<br />
<a class="color1item1" style="background: #200;">#200</a>
~ <a class="color1item1" style="background: #2a7;"><span class="op05">#2a7</span></a>
~ <a class="color1item1" style="background: #207;">#207</a>
~ <a class="color1item1" style="background: #2a0;">#2a0</a>
~ >(3:1)>
~ <a class="color1item1" style="background: #2a8;">#2a8</a>
~ <a class="color1item1" style="background: #2ff;">#2ff</a>
<br />
<a class="color1item1" style="background: #300;">#300</a>
~ <a class="color1item1" style="background: #3a6;">#3a6</a>
~ <a class="color1item1" style="background: #306;">#306</a>
~ <a class="color1item1" style="background: #3a0;">#3a0</a>
~ >(3:1)>
~ <a class="color1item1" style="background: #3a7;">#3a7</a>
~ <a class="color1item1" style="background: #3ff;">#3ff</a>
<br />
<a class="color1item1" style="background: #400;">#400</a>
~ <a class="color1item1" style="background: #4a4;">#4a4</a>
~ <a class="color1item1" style="background: #404;">#404</a>
~ <a class="color1item1" style="background: #4a0;">#4a0</a>
~ >(3:1)>
~ <a class="color1item1" style="background: #4a5;">#4a5</a>
~ <a class="color1item1" style="background: #4ff;">#4ff</a>
<br />
<a class="color1item1" style="background: #500;">#500</a>
~ <a class="color1item1" style="background: #59d;">#59d</a>
~ <a class="color1item1" style="background: #50d;">#50d</a>
~ <a class="color1item1" style="background: #590;">#590</a>
~ >(3:1)>
~ <a class="color1item1" style="background: #59e;">#59e</a>
~ <a class="color1item1" style="background: #5ff;">#5ff</a>
<br />
<a class="color1item1" style="background: #600;">#600</a>
~ <a class="color1item1" style="background: #69c;">#69c</a>
~ <a class="color1item1" style="background: #60c;">#60c</a>
~ <a class="color1item1" style="background: #690;">#690</a>
~ >(3:1)>
~ <a class="color1item1" style="background: #69d;">#69d</a>
~ <a class="color1item1" style="background: #6ff;">#6ff</a>
<br />
<a class="color1item1" style="background: #700;">#700</a>
~ <a class="color1item1" style="background: #79b;">#79b</a>
~ <a class="color1item1" style="background: #70b;">#70b</a>
~ <a class="color1item1" style="background: #790;">#790</a>
~ >(3:1)>
~ <a class="color1item1" style="background: #79c;">#79c</a>
~ <a class="color1item1" style="background: #7ff;">#7ff</a>
<br />
<a class="color1item1" style="background: #800;">#800</a>
~ <a class="color1item1" style="background: #899;">#899</a>
~ <a class="color1item1" style="background: #809;">#809</a>
~ <a class="color1item1" style="background: #890;">#890</a>
~ >(3:1)>
~ <a class="color1item1" style="background: #89a;">#89a</a>
~ <a class="color1item1" style="background: #8ff;">#8ff</a>
<br />
<a class="color1item1" style="background: #900;">#900</a>
~ <a class="color1item1" style="background: #995;"><!-- #996 --> #995</a>
~ <a class="color1item1" style="background: #906;">#906</a>
~ <a class="color1item1" style="background: #990;">#990</a>
~ >(3:1)>
~ <a class="color1item1" style="background: #997;">#997</a>
~ <a class="color1item1" style="background: #9ff;">#9ff</a>
<br />
<a class="color1item1" style="background: #a00;">#a00</a>
~ <a class="color1item1" style="background: #a8b;"><!-- #a8c --> #a8b</a>
~ <a class="color1item1" style="background: #a0c;">#a0c</a>
~ <a class="color1item1" style="background: #a80;">#a80</a>
~ >(3:1)>
~ <a class="color1item1" style="background: #a8d;">#a8d</a>
~ <a class="color1item1" style="background: #aff;">#aff</a>
<br />
<a class="color1item1" style="background: #b00;">#b00</a>
~ <a class="color1item1" style="background: #b88;"><!-- #b89 --> #b88</a>
~ <a class="color1item1" style="background: #b09;">#b09</a>
~ <a class="color1item1" style="background: #b80;">#b80</a>
~ >(3:1)>
~ <a class="color1item1" style="background: #b8a;">#b8a</a>
~ <a class="color1item1" style="background: #bff;">#bff</a>
<br />
<a class="color1item1" style="background: #c00;">#c00</a>
~ <a class="color1item1" style="background: #c82;">#c82</a>
~ <a class="color1item1" style="background: #c02;">#c02</a>
~ <a class="color1item1" style="background: #c80;">#c80</a>
~ >(3:1)>
~ <a class="color1item1" style="background: #c83;">#c83</a>
~ <a class="color1item1" style="background: #cff;">#cff</a>
<br />
<a class="color1item1" style="background: #d00;">#d00</a>
~ <a class="color1item1" style="background: #d78;">#d78</a>
~ <a class="color1item1" style="background: #d08;">#d08</a>
~ <a class="color1item1" style="background: #d70;">#d70</a>
~ >(3:1)>
~ <a class="color1item1" style="background: #d89;">#d89</a>
~ <a class="color1item1" style="background: #dff;">#dff</a>
<br />
<a class="color1item1" style="background: #e00;">#e00</a>
~ <a class="color1item1" style="background: #e69;"><!-- #e6a --> #e69</a>
~ <a class="color1item1" style="background: #e0a;">#e0a</a>
~ <a class="color1item1" style="background: #e60;">#e60</a>
~ >(3:1)>
~ <a class="color1item1" style="background: #e6b;">#e6b</a>
~ <a class="color1item1" style="background: #eff;">#eff</a>
<br />
<a class="color1item1" style="background: #f00;">#f00</a>
~ <a class="color1item1" style="background: #f59;">#f59</a>
~ <a class="color1item1" style="background: #f09;">#f09</a>
~ <a class="color1item1" style="background: #f50;">#f50</a>
~ >(3:1)>
~ <a class="color1item1" style="background: #f5a;">#f5a</a>
~ <a class="color1item1" style="background: #fff;">#fff</a>
<br />


<hr />

<a href="?#★" class="button do-make-color-palette">#000컬러아이템생성</a>

<!-- mj-cp1pick1color1 -->
<div class="mj-cp1pick1color1">
	<!-- MJS.makeColorPalette1() 로 생성 -->
</div>
<!-- /mj-cp1pick1color1 -->


</div>
<!-- /mcp1pick1color1 -->



<script>/*<![CDATA[*/

	/** ◇◆ #000컬러아이템생성. 20200605. MoonYoungshin.
	 */

	MJS = window.MJS || {};
	(MJS.makeColorPalette1 = function(){
		$(function(){

			//var selector = '.mj-cp1pick1color1';

			// RGB
			(function makeFun1(selector){
				var $my = $('.mj-cp1pick1color1');
				var hexR, hexG, hexB;
				$my.append('<h2>RGB</h2>');
					for(var r=0; r<16; r++){
						$my.append('<h3>#'+ r.toString(16) +'00</h3>');
						for(var g=0; g<16; g++){
							for(var b=0; b<16; b++){
								$my.append('<a class="color1item1" style="background:#'
									+ r.toString(16) + g.toString(16) + b.toString(16) + ';">#'
									+ r.toString(16) + g.toString(16) + b.toString(16) +'</a>');
							}
						}
					}
			})();

			// BGR
			(function makeFun1(selector){
				var $my = $('.mj-cp1pick1color1');
				var hexR, hexG, hexB;
				$my.append('<h2>BGR</h2>');
					for(var b=0; b<16; b++){
						$my.append('<h3>#00'+ b.toString(16) +'</h3>');
						for(var g=0; g<16; g++){
							for(var r=0; r<16; r++){
								$my.append('<a class="color1item1" style="background:#'
									+ r.toString(16) + g.toString(16) + b.toString(16) + ';">#'
									+ r.toString(16) + g.toString(16) + b.toString(16) +'</a>');
							}
						}
					}
			})();

			$('.color1item1').on('click', function(){
				if( $(this).is('.off') ){
					$(this).removeClass('off');
				}else{
					$(this).addClass('off');
				}
			});

		});
	});

	$('.do-make-color-palette').on('click', function(){
		MJS.makeColorPalette1();
	});

/*]]>*/</script>


<script>/*<![CDATA[*/

	/** ◇◆ 클립보드로 복사하기. 20201103. MoonYoungshin.
	 */	
	function copyToClipboard(val) {
		var t = document.createElement("textarea"); // textarea 임시 생성하여 복사
		document.body.appendChild(t);
		t.value = val;
		t.select();
		document.execCommand('copy');
		document.body.removeChild(t);
	}
	$(document).on('click', '.color1item1', function() {
		copyToClipboard($(this).text());
		//alert('Copied!');
		$('.color1item1').removeClass('do');
		$(this).addClass('do');
	});

/*]]>*/</script>





</div>
<!-- /width1s2 -->
</div>
<!-- /container -->
</div>
<!-- /#body_content -->
<?php //include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/wing.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_footer.php"; ?>
</body>
</html>