/**
 * script.js
 * JavaScript jQuery 필요한거 여기 패키징
 * 20221101 | @m | 최초작성
 * 20221101 | @m | makeActive2ClickHover2()
 * 20221205 | @m | makeScrollOn()
 */

/* Table of contents )) ☆ 목차 갱신 20221101
 ************************************************************
	Base --
	jQuery(function($){
		메소드, 함수 호출 (( ★☆ script.js
		즉시 실행
		MJS.doSelectPlaceholder() 선택목록 select placeholder
	}

	Plugin --
		$.fn.jQmGoAnchor1() 일부 클릭 앵커 이동

	Function --
		makeActive2ClickHover2() 주메뉴
		현재 일시분초. 1,3,6,12개월 조회 입력
 ************************************************************
 */


//jQuery.noConflict();
/* ◇◆ jQuery(document).ready(function($){}); ◇◆◇◆◇◆◇◆◇◆ */
jQuery(function($){


/* ◇◆ 메소드, 함수 호출 ◇◆◇◆◇◆ */


// 주메뉴 20221101
makeActive2ClickHover2('#tnb1');


/* ◇◆ 즉시 실행 ◇◆◇◆◇◆ */


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


/** ◇◆ 스크롤on효과. 20200305. 20200819. 20221205. @m.
 */
(function(){

	$(window).on('load resize scroll', function(){
		makeScrollOn();
	});

	function makeScrollOn(){
		var where = .85; // < 1
		var newScrollTop = $(this).scrollTop() + $(this).height() * where;
		
		$('.mj-ani').each(function(){
		  var $my = $(this);
		  if( $my.offset().top < newScrollTop ){
				$my.addClass('on');
			}
		});
	}

})();


/** ◇◆ sticky효과. 20221206. @m.
 */
(function(){

	$(window).on('load resize scroll', function(){
		makeScrollFixed();
	});

	function makeScrollFixed(){
		var where = .5; // < 1
		var newScrollTop = $(this).scrollTop() + $(this).height() * where;

		$('.mj-sticky').each(function(){
		  var $my = $(this);

			console.log(newScrollTop, $my.offset().top, ($my.parent().offset().top + $my.parent().height()) );

			// $my 세로 중앙이 화면세로중앙 보다 위로 올라가면
		  if( ($my.offset().top + ($my.height() * where)) < newScrollTop ){
				$my.addClass('act');
			}else{
				$my.removeClass('act');
			}

		  if( $my.offset().top < $my.parent().offset().top ){
				$my.removeClass('act');
			}

		});
	}

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


/** ◇◆ 주메뉴활성동작2 | ~20201113~20220624. 20220824. MoonYoungShin.
 * Use) makeActive2ClickHover2('#tnb1');
 * makeActive2ClickHover2('#tnb1', {activeThey: 'all'}); // 데스크탑 1차메뉴 li 모두 .over 만듦
 * makeActive2ClickHover2('#tnb1', {onFilter: '.m1'}); // 1차메뉴 li.m1.on 만듦
 * 모바일 (()) 데스크탑('.width-xlarge')
 * li 이벤트 'focusin mouseenter' 하면 .over 만듦
 * 모바일: 1차~2차~4차메뉴 클릭하면 링크 이동 없이 하위메뉴 펼침.
 * 데스크탑: 1~3차메뉴 클릭하면 모두 링크 이동. 메뉴 호버하면 하위메뉴 펼침.
 * 데스크탑. setTimeout 하면 마우스 빠른 동작 결함 발생하니 CSS transition 이용바람.
 * 20191018. 메뉴 통 초점 호버 동작
 * 20191023. 데스크탑.주메뉴
 * 20201113. 키보드 접근성 결함개선
 * 20220408. 배경(가림막) 클릭하면 닫기
 * 20220624. 1000px~
 * 20220824. 2차 하위 3차 메뉴 있으면
 * Task) 2차높이계산 take2tnb1heightD2() )) ★☆ script.js
 * Task) To Advance.
 */
function makeActive2ClickHover2(selector, options){
	var $my = $(selector);
	if(!$my) return false;
	//var timer = null;
	var config = {
		onFilter : null, // 최초활성 선택자. 예) '.m1'
		activeThey : 'one', // 데스크탑 활성옵션.  one: 해당메뉴 | all: 모든메뉴
		onToggle: true
	};
	$.extend(config, options);

	var $myc = $(selector+'c'); // 콘텐츠 컨테이너
	$my.$d1 = $('div.d1', $my);
	$my.$d2 = $('div.d2', $my);
	$my.$m = $('li', $my);
	$my.$a = $('li>a[href]', $my);
	$my.$b2close = $('.b2.close', $my); // 모바일 닫기
	$my.$b3close = $('.b3.close', $my); // PC 2차~ 펼친거 닫기
	$my.$bg = $('>.bg', $myc); // 배경(가림막)

	$('div.d1 a+div', $my).prev().parent().addClass('hasSub');

	if(config.onFilter){
		$my.$m.removeClass('on').filter(config.onFilter).addClass('on');
	}

	$my.$a.off(); // 20170227. 함수 2번 호출하면 아래 토글 동작이 2번 실행되는 결함 해결

	// 앵커 클릭
	$my.$a.on('click', function(){ // a[href]
		if($(this).parent().is('.on')){ // 토글
			if( config.onToggle ){
				$(this).parent().removeClass('on');
			}
		}else{
			$(this).parent().siblings().removeClass('on').end().addClass('on');
		}
		// 링크 이동 return | 이동 없음 return false
		//if($('html').is('.width-xlarge')){ // 1260px~ 
		if( $('html').is('.width-large') || $('html').is('.width-xlarge') ){ // 1000px~ 20220624.
			return; // 링크 이동
		}else{
			//if($(this).next('div[class*="d"]').length > 0){ // 하위 메뉴 있으면
			if($(this).next('div.d3').length > 0){ // 2차 하위 3차 메뉴 있으면
				return false;
			}else{ // 하위 메뉴 없으면
				return;
			}
		}
	});

	// 20220408. 배경(가림막) 클릭하면 닫기 
	$my.$bg.on('click', function(){
		$my.$b2close.triggerHandler('click');
	});


	/** ◇◆ 데스크탑.주메뉴 | ~20191023. 20201113
	 * CSS 만으로는 키보드 운용 안되어 JS 개발
	 * 키보드운용 [IE11][CR]OK!
	 */

	//$my.$m.off(); // ☆ 이거하면 다른 곳 스크립트에서 추가한 바인딩도 제거된다.

	// 20191018. 메뉴 통 초점 호버 동작
	$myc.on('focusin mouseenter', function(){
		$(this).addClass('over');
	}).on('focusout mouseleave', function(){
		$(this).removeClass('over');
	});

	// 메뉴 전체 초점 호버 동작
	//$my.$d1.on('focusin mouseenter', function(){
	//	$(this).addClass('over');
	//}).on('focusout mouseleave', function(){
	//	$(this).removeClass('over');
	//});

	// 메뉴 초점 호버 동작
	$my.$m.on('focusin mouseenter', function(){
		var $m = $(this);
		if( config.activeThey == 'one' ){ // 해당메뉴 하나만 오버
			$m.addClass('over').siblings().removeClass('over');
		}else if( config.activeThey == 'all' ){ // 모든메뉴 오버
			$m.siblings().addBack().addClass('over');
		}
	}).on('mouseleave', function(){ // focusout 하지마라.
		var $m = $(this);
		$m.removeClass('over');
	});

	// 키보드 접근성
	$my.$a.on('focusin', function(){
		//console.log(config.activeThey);
		var $m = $(this).parent();
		if( config.activeThey == 'one' ){
			$m.addClass('over').siblings().removeClass('over'); // 해당메뉴 활성
		}else if( config.activeThey == 'all' ){
			$m.siblings().addBack().addClass('over'); // 모든메뉴 활성
		}
	}).on('focusout', function(){
		var $m = $(this).parent();
		//setTimeout(function(){ // 20201113. 주석처리
			//if( !$myc.is('.over') ){ // 20201113. 주석처리
				$my.$m.removeClass('over'); // 모든 .over 제거
			//}
		//}, 0);
	});

	// 2차~ 펼친거 닫기
	$my.$b3close.on('click', function(){
		// (OK)[CR][FF][OP] 초점은 안보이지만 탭누르면 다음 요소로 이동한다.
		// (Bug)[IE11] 초점을 잃고 웹페이지 처음으로 되돌아간다.
		if( $('html').is('[class*=" IE"]') ){ // [IE7~11] 결함 해결
			var $next = $(this).closest('div.d2').parent('li').next();
			if( !!$next.length && !($next.css('display') == 'none') ){ // 다음 li 가 존재하고 안보이지 않는다면
				$next.attr({tabindex: '0'}).focus().attr({tabindex: ''});
			}else{
				$('#anb1 a').focus(); // 주메뉴 다음 콘텐츠에 초점.
			}
		}
		$(this).blur(); // 이거만해도 메뉴 li 이벤트 focusout 발생한다. 초점 보내기 전에 이거부터 하면 다시 펼쳐지니 주의!
	});

}


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