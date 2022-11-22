<?php
/**
 * Include
 * 20211129 | @m | 최초작성
 * 20211129 | @m | 요구반영. 결함개선. 고도화.
 */
?>
<!-- (달력날짜선택기) -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<script>/*<![CDATA[*/
	/** ◇◆ 달력 날짜 선택기 생성. 20210915. 20210924. @m
	 *
	 */
	$(function() {
		$('input.date').datepicker({
			changeMonth: true,
			changeYear: true,
			dateFormat: 'yy.mm.dd',
			prevText: '이전 달',
			nextText: '다음 달',
			monthNames: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
			monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
			dayNames: ['일','월','화','수','목','금','토'],
			dayNamesShort: ['일','월','화','수','목','금','토'],
			dayNamesMin: ['일','월','화','수','목','금','토'],
			showMonthAfterYear: true,
			yearSuffix: '년',
			showOn: 'button',
			buttonImageOnly: true,
			buttonImage: '<?=$sitePath?>/img/lib/ic20calendar.png', // 20210924
			buttonText: '달력 날짜 선택기 열기 (마우스 클릭, 화면 터치로 이용 가능합니다.)',
			beforeShow: function() {
				// 레이어팝업 안에 있으면 달력날짜선택기 위치 결함 수정. 20210915.
				var $my = $('.ui-datepicker'), // 달력날짜선택기
					isFixed = !!$(this).closest('.cp1layer1lightbox1').length; // 레이어팝업 안에 있으면
					inputHeight = $(this).outerHeight();
				setTimeout(function(){
					var mn = ( isFixed )? ( $my.outerHeight(true) + inputHeight - $(window).scrollTop() ): 0; // 달력날짜선택기높이 + 날짜입력상자높이 - 스크롤위치
					$my.css({
						transform: 'translateY(' + mn + 'px)',
						'z-index': 9999
					});
				}, 50);
			}
		});
		/* ☆[m] 접근성 자동점검 통과. 20200922 */
		$(".ui-datepicker-trigger").on('click', function(){ // 버튼이미지(buttonImage)
			$('table.ui-datepicker-calendar').prepend('<caption class="blind">달력 날짜 선택기</caption>');
			$('select.ui-datepicker-year').attr({title: '년 선택'});
			$('select.ui-datepicker-month').attr({title: '월 선택'});
		});
	});
/*]]>*/</script>
<script>/*<![CDATA[*/
	function fnVaccChk() {
		var theForm = document.getElementById("f0");
		if(!theForm.f0date0.value){
			alert("일자를 입력하세요.");
			theForm.f0date0.focus();
			return false;
		}
		return true;
	}
/*]]>*/</script>