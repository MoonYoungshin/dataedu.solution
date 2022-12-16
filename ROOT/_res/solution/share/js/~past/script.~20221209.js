/**
 * script.js
 * JavaScript jQuery 필요한거 여기 패키징
 * 20221101 | @m | 최초작성
 * 20221101 | @m | makeActive2ClickHover2()
 * 20221206 | @m | makeScrollOn()
 */

/* Table of contents )) ☆ 목차 갱신 20221101
 ************************************************************
	Base --
	jQuery(function($){
		메소드, 함수 호출 (( ★☆ script.js
		즉시 실행
		MJS.doSelectPlaceholder() 선택목록 select placeholder
		makeScrollAct() 스크롤on효과
		MJS.doScrollVhAct() 스크롤이 뷰높이 넘어서면 활성
		MJS.doScrollCtopAct() 스크롤이 콘텐츠 상단을 넘어서면 활성
		MJS.doScrollCmidAct() 스크롤이 콘텐츠 세로 위치 (중앙)을 넘어서면 활성
		메인. 스크롤 시 대상 콘텐츠 위치
		메인. 비주얼효과
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


/** ◇◆ 스크롤 액션 효과. 20200305. 20200819. 20221206. @m.
 */
(function(){

	$(window).on('load resize scroll', function(){
		makeScrollAct();
	});

	function makeScrollAct(){
		var where = .85; // < 1
		var newScrollTop = $(this).scrollTop() + $(this).height() * where;
		
		$('.mj-ani').each(function(){
		  var $my = $(this);
		  if( $my.offset().top < newScrollTop ){
				$my.addClass('act');
			}
		});
	}

})();


/** ◇◆ 스크롤이 (뷰높이 * .5) 넘어서면 활성 v0.1 | 20210811. 20211110. 20221206. @m.
 * Use)
	<a href="#container" class="mj-scroll-vh-act" /> // 날개메뉴..
 */
(MJS.doScrollVhAct = function(selector){
	$(function(){
		var $my = $('.mj-scroll-vh-act'),
			$v = $(window);

		act();	// 초기화

		$v.on('load resize scroll', function(e){ // 윈도우 스크롤
			act();
		});

		// 동작
		function act(){
			if( $v.scrollTop() > ( $v.height() * .5) ){ // 뷰높이 반
				$my.addClass('act');
			}else{
				$my.removeClass('act');
			}
		}
	});
})();


/** ◇◆ 스크롤이 콘텐츠 상단을 넘어서면 활성 v0.1 | 20210812. 2021110. 20221206. @m.
 * ofs 값 추가
 * Use)
	<div class="mj-scroll-ctop-act" /> // 콘텐츠블록
	<div class="mj-scroll-ctop-act" data-ofs="123" /> // 콘텐츠블록
 */
(MJS.doScrollCtopAct = function(selector){
	$('.mj-scroll-ctop-act').each(function(){
		var $my = $(this),
			$v = $(window),
			oTop = $my.offset().top, // 원래 윗단
			ofs = $my.data('ofs') || 0; // 20211110

		act();	// 초기화

		$v.on('load resize scroll', function(e){ // 윈도우 스크롤
			act();
		});

		// 동작
		function act(){
			if( $v.scrollTop() > ( oTop - ofs ) ){ // 20211110
				$my.addClass('act');
			}else{
				$my.removeClass('act');
			}
		}
	});
})();


/** ◇◆ 스크롤이 콘텐츠 세로 위치 (중앙)을 넘어서면 활성 v0.1 | 20221206. @m.
 * ofs 값 추가
 * Use)
	<div class="mj-scroll-cmid-act" /> // 대상 콘텐츠
	<div class="mj-scroll-cmid-act" data-ofs="20" data-where=".5" /> // 대상 콘텐츠
 */
 (MJS.doScrollCmidAct = function(selector){
	$('.mj-scroll-cmid-act').each(function(){
		var $my = $(this),
			$v = $(window),
			oTop = $my.offset().top, // 원래 윗단
			ofs = $my.data('ofs') || 20, // 상쇄값
			where = $my.data('where') || .5; // 세로 위치 중앙 기본값

		act();	// 초기화

		$v.on('load resize scroll', function(e){ // 윈도우 스크롤
			act();
		});

		// 동작
		function act(){
			var newScrollTop = parseInt($v.scrollTop() + $v.height() * where);
			var newMyTop = parseInt($my.offset().top + $my.height() * where);
			//console.log( newScrollTop, newMyTop );
			if( newScrollTop > ( newMyTop - ofs ) ){
				$my.addClass('act');
			}else{
				$my.removeClass('act');
			}

		  if( $my.offset().top < $my.parent().offset().top ){
				$my.removeClass('act');
			}

		}
	});
})();


/** ◇◆ 메인. 스크롤 시 대상 콘텐츠 위치. 20221206. @m.
 * 스크롤하여 콘텐츠 하단이 아래 구역 상단과 만나면.. 갭간격을 유지하며 이동한다.
 */
(function(){

	var $my = $('#tgroup1'), // 대상 콘텐츠
		$u = $('#mainbody4'), // 아래 구역
		$v = $(window), // 뷰
		myBtm, // 뷰 상단 기준 대상 밑단
		uTop, // 뷰 상단 기준 아래 상단
		gap = 0; // 추가할 간격 (대상 밑단과 아래 상단)

	act();	// 초기화

	// 스크롤하면 동작 호출
	$v.on('load resize scroll', function(e){
		act();
	});

	// 동작
	function act(){
		myBtm = $my.outerHeight(true) + parseInt($my.css('top')) + parseInt($my.css('margin-top')) + gap;
		uTop = $u.offset().top - $v.scrollTop();
		//console.log( myBtm, uTop );
		if( ( uTop < myBtm ) && $my.is('.act') ){
			$my.css({
				transform: 'translateY('+ (uTop - myBtm) +'px)'
			});
		}else{
			$my.css({
				transform: 'translateY(0)'
			});					
		}
	}
})();



/** ◇◆ 메인. 비주얼효과. 20221205. @m.
 */
(function(){
	var $my = $('#vpr1'), // 래퍼
		$m = $('.bg1 .p', $my), // 동작할 항목
		config = {}; // 설정값

	config = {
		onnum: 1, // 활성값
		oldnum: 0, // 이전 활성값 (최초값은 없음)
		interval: 6000, //동작간격 밀리초
		duration: 400, // 동작시간 밀리초 (예비)
		delay: 0, // 지연시간 (예비)
		easing: 'swing', // 동작 완화 (예비)
	};

	$m.total = $m.length; // 항목 수

	// 순번 액션
	($my.action = function(effect){
		$m.removeClass('on old').addClass('off');
		setTimeout(function(){
			$m.eq(config.onnum-1).removeClass('off').addClass('on');
			$m.eq(config.oldnum-1).removeClass('off').addClass('old');
		}, 0);
	})(); // ★즉시호출

	// 다음 동작
	$my.nextAct = function(){
		config.oldnum = config.onnum;
		config.onnum += 1;
		if(config.onnum > $m.total){
			config.onnum = 1;
		}
		$my.action(); // 
		$my.restartInterval($my.timer1); // 
	};

	// 자동 순환 //
	// 자동 동작
	$my.autoAct = function(){
		$my.nextAct(); // 다음 동작 호출
	};

	// 자동 재가동
	($my.restartInterval = function(timer){
		if(timer) clearInterval(timer);
		$my.timer1 = setInterval($my.autoAct, config.interval);
	})(); // ★즉시호출


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