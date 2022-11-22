<?php
/**
 * Include
 * 20210730 | @m | 최초작성
 * 20210924 | @m | 요구반영. 결함개선. 고도화.
 * 20211222 | @m | 
 */
?>
<!-- #wing --><hr class="dpn">
<div id="wing" class="init clearfix">
<!-- container -->
<div class="container">


<a href="#container" title="현재 페이지 상단으로 이동" id="gotop1" class="mj-smooth1scroll1"><i class="ic1"></i> <span class="t1">TOP</span></a>


<script>/*<![CDATA[*/
	/** ◇◆ 스크롤 내리면 TOP링크 활성. 20211222. @m.
	 */
	(function(){
		var $my = $('#gotop1'), // TOP링크
			scrTop; // 스크롤값

		// 최초 호출
		do1();

		// 항목 클릭하면
		$(window).on('scroll', function(e){
			e.preventDefault();
			do1(); // 호출
		});

		// 동작
		function do1(){
			scrTop = document.querySelector('html').scrollTop;
			//console.log(scrTop);
			if( scrTop > 99 ){
				$my.addClass('on');
			}else{
				$my.removeClass('on');
			}
		}
	})();
/*]]>*/</script>


</div>
<!-- /container -->
</div>
<!-- /#wing -->