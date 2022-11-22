/**
 * script.js
 * JavaScript jQuery 필요한거 여기 패키징
 * 20211020 | @m | 최초작성
 * 20211020 | @m | 요구반영. 결함개선. 고도화.
 * 20211020 | @m | 캡쳐위해 주메뉴 동작 호출 주석 처리
 * 20211109 | @m | $('#tnb1').jQmTnbD2a1(); 호출
 * 20211124 | @m | jQmMenuOn1() 추가 및 jQmTnbD2a1() 삭제
 * 20211125 | @m | jQmMenuOn1()
 * 20211201 | @m | 현재 일시분초.., .doSelectPlaceholder() 추가
 * 20211216 | @m | MJS.hms() 수정
 * 20220203 | @m | jQmMenuOn1() 2차 활성 추가
 * 20220208 | @m | jQmMenuOn1() 
 * 20220211 | @m | jQmGoAnchor1() 
 * 20220216 | @m | jQmGoAnchor1() 
 * 20221101 | @m | jQmMenuOn1() 
 */

/* Table of contents )) ☆ 목차 갱신 20220211
 ************************************************************
	Base --
	jQuery(function($){
		즉시 실행
		$.fn.jQmMenuOn1() 메뉴활성
			$('#tnb1').jQmMenuOn1(); // 호출
		MJS.doSelectPlaceholder() 선택목록 select placeholder
	}

	Plugin --
		$.fn.jQmGoAnchor1() 일부 클릭 앵커 이동

	Function --
		현재 일시분초. 1,3,6,12개월 조회 입력
 ************************************************************
 */


//jQuery.noConflict();
/* ◇◆ jQuery(document).ready(function($){}); ◇◆◇◆◇◆◇◆◇◆ */
jQuery(function($){



/** ◇◆ 메뉴활성 v0.1 | 20211125. 20220208. 20221101. @m.
 * sessionStorage 이용
 * Use)
		$('#tnb1').jQmMenuOn1({d1on: 'm2', d2on: 'm1'});
		$('#tnb1').jQmMenuOn1();
 * 20220203. 2차 추가 및 고도화
 * Task)
		호출은 html_head.php 에서 하는건?
		웹페이지 선언한 활성값 있으면?
 */
$.fn.jQmMenuOn1 = function(options){
	if(!this) return false;
	var config = {
		d1on: '', // 1차활성 CSS 클래스값 ex) 'm1'
		d2on: '' // 2차활성 CSS 클래스값 ex) 'm1'
	};
	$.extend(config,options);
	return this.each(function(){
		var $my = $(this);
		var d1on = d2on = d3on = d4on = ''; // 활성값

		// 초기화
		$('div.d1 a+div', $my).prev().parent().addClass('hasSub');
		$('div.d2 a+div', $my).prev().parent().addClass('hasSub');

		// 활성값 할당
		d1on = config.d1on || sessionStorage.getItem('d1on');
		d2on = config.d2on || sessionStorage.getItem('d2on');

		// 1차활성
		if( d1on ){
			$('div.d1>ul>li.'+ d1on, $my).addClass('on');
		}else{
			//$('div.d1>ul>li', $my).first().addClass('on'); // 첫번째 활성
		}

		// 2차활성
		if( d2on ){
			$('div.d1>ul>li.on>div.d2>ul>li.'+ d2on, $my).addClass('on');
		}else{
			//$('div.d2>ul>li', $my).first().addClass('on'); // 첫번째 활성
		}

		// 1차메뉴 클릭
		$('div.d1>ul>li>a', $my).on('click', function(e){
			var r1 = new RegExp("(m[0-9]*)");
			var css1 = $(this).parent().attr("class"); // 클릭한 부모
			if( css1 && r1.exec(css1) ){
				sessionStorage.setItem('d1on', RegExp.$1);
			}
			$(this).parent().toggleClass('on').siblings().removeClass('on');

			if( $(this).parent().hasClass('hasSub') ){
				return false;
			}
		});

		// 2차메뉴 클릭
		$('div.d2>ul>li>a', $my).on('click', function(e){
			var r1 = new RegExp("(m[0-9]*)");
			var css1 = $(this).parent().attr("class"); // 클릭한 부모
			if( css1 && r1.exec(css1) ){
				sessionStorage.setItem('d2on', RegExp.$1);
			}
			$(this).parent().toggleClass('on').siblings().removeClass('on');

			if( $(this).parent().hasClass('hasSub') ){
				return false;
			}
		});

	});

}; // 20220208. ; 추가하여 오류방지
// 호출
$('#tnb1').jQmMenuOn1();


/** ◇◆ 선택목록 select placeholder v0.1 | 20210825. 20211201. 20220216. by@m.
 * Use) CSS
		select{color:#959595;}
		select option{color:#000;	}
 */
(MJS.doSelectPlaceholder = function(selector){
	$('select').each(function(){
		// 선택된값 있으면
		if( !!$(this).find('option:not(:first-child)').filter('[selected]').length ){
			$(this).css({
				color: $(this).find('option').css('color') //
			});
		}
		// 값선택하면
		$(this).on('change', function(){
			//console.log( $(this).find('option').css('color') );
			$(this).css({
				color: $(this).find('option').css('color') //
			});
		});
	});
})();


}); /* /jQuery(function($){})(); */



/* ◇◆ Plugin ◇◆◇◆◇◆◇◆◇◆ */



/** ◇◆ 일부 클릭 앵커 이동 v0.1 | 20220208~20220211. @m.
 * 아이템(tr) 자손(td) 일부 클릭하면 앵커(a) 주소로 이동
 * Use) 
		$('.cm1bbs1table1').jQmGoAnchor1({c: 'td:nth-child(n+2):nth-child(-n+7)'});
 */
$.fn.jQmGoAnchor1 = function(options){
	if(!this) return false;
	var config = {
		item: '.item', // 항목
		c: 'td:nth-child(n+2):nth-child(-n+7)', // ★ td 요소 2~7번째 선택 
		a: '.a1', // 앵커
		b: '.button' // 버튼 (이벤트 전파 안하는거)
	};
	$.extend(config,options);
	return this.each(function(){
		var $my = $(this);

		// 초기화
		$my.find(config.c).css({
			//background: '#ee0',
			cursor: 'pointer'
		});

		// 자손(td) 클릭
		$my.on('click', config.c, function(e){
			//$(this).closest(config.item).find(a).triggerHandler('click'); // (X)
			var $a = $(this).closest(config.item).find(config.a);
			var target = $a.attr('target') || '_self'; // 새창 || 현재창
			window.open( $a.attr('href'), target); // 앵커 주소로 이동
		});

		// 버튼 클릭
		$my.on('click', config.b, function(e){
			e.stopPropagation(); // 버튼 이벤트만 처리
		});
	});
};



/* ◇◆ Function ◇◆◇◆◇◆◇◆◇◆ */



/** ◇◆ 현재 일시분초. 1,3,6,12개월 조회 입력 | 20210924~20211216. 20220208. @m
 * Use)
	// 날짜값 입력
	$('.w1date .date1').val( MJS.today() );	// 오늘 날짜
	$('.w1date .date2').val( MJS.pastWeek() );	// 1주전 날짜+1
	$('.w1date .date3').val( MJS.pastMonth() );	// 1달전 날짜+1
	$('.w1date .date3').val( MJS.MJS.mDate(-1) );	// 오늘 날짜-1

	// 오늘날짜 시분초 담기
	$('.m-v1').html( MJS.today() + '. ' + MJS.hms() );
 */
(function(){

	// 사용예제
	//console.log( hms(), today(), pastWeek(), pastMonth(), pastMonth(6) );

	// 날짜 관련 함수들 //

	// 날짜 객체 받아서 시분초 문자열로 리턴하는 함수
	MJS.getTimeStr = function(myDate){
		var h = myDate.getHours();
		var m = myDate.getMinutes();
		var s = myDate.getSeconds();
		h = (h < 10) ? '0' + String(h) : h;
		m = (m < 10) ? '0' + String(m) : m;
		s = (s < 10) ? '0' + String(s) : s;
		return h + ':' + m + ':' + s;
	}

	// 날짜 객체 받아서 년월일 문자열로 리턴하는 함수
	MJS.getDateStr = function(myDate){
		var year = myDate.getFullYear();
		var month = (myDate.getMonth() + 1);
		var day = myDate.getDate();
		month = (month < 10) ? '0' + String(month) : month;
		day = (day < 10) ? '0' + String(day) : day;
		return  year + '.' + month + '.' + day;
	}

	// 현재 시분초를 문자열로 반환
	MJS.hms = function(){
		var d = new Date();
		return MJS.getTimeStr(d);
	}

	// 오늘 날짜를 문자열로 반환
	MJS.today = function(){
		var d = new Date();
		return MJS.getDateStr(d);
	}

	// 오늘로부터 m일 날짜 반환
	MJS.mDate = function(m){
		var d = new Date();
		var m = m || 0;
		var dayOfMonth = d.getDate();
		d.setDate(dayOfMonth + m);
		return MJS.getDateStr(d);
	}

	// 오늘로부터 1주일전+1 날짜 반환
	MJS.pastWeek = function(){
		var d = new Date();
		var dayOfMonth = d.getDate();
		d.setDate(dayOfMonth - 7 + 1);
		return MJS.getDateStr(d);
	}

	// 오늘로부터 m개월전+1일 날짜 반환
	MJS.pastMonth = function(m){
		var d = new Date();
		var m = m || 1;
		var monthOfYear = d.getMonth();
		var dayOfMonth = d.getDate();
		d.setMonth(monthOfYear - m);
		d.setDate(dayOfMonth + 1);
		return MJS.getDateStr(d);
	}

})();