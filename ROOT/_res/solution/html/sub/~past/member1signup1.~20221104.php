<!DOCTYPE html>
<?php
/**
 * SubPage Template
 * 20221026 | @m | 최초작성
 * 20221103 | @m | 요구반영. 결함개선. 고도화.
 */

include "../../share/inc/connect.php"; // 접속경로 (( "../../share/inc/connect.php"
?>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="author" content="데이터에듀">
<meta name="keywords" content="데이터에듀 솔루션 API">
<meta name="description" content="데이터에듀 솔루션 API">
<title>회원가입 | 데이터에듀 API</title>

<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>

</head>
<body class="type2">
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">





<!-- cp1hg1 -->
<div class="cp1hg1">
	<h2 class="h1 logo">LOGO</h2>
</div>
<!-- /cp1hg1 -->


<!-- cp1write1 -->
<div class="cp1write1">
<!-- cp1signup1 -->
<div class="cp1signup1">


	<!-- form -->
	<form action="?#★">
		<fieldset>
			<legend class="blind"><strong class="h1">회원가입</strong></legend>


			<!-- cp1verify1 -->
			<div class="item cp1verify1">
				<div class="item">
					<span class="label">이메일</span>
					<input type="text" value="" placeholder="account@emailserver.com" title="이메일" class="w100 email">
					<button type="button" class="button block verify-email" disabled>이메일 인증하기</button>
				</div>
				<!-- cp1verify1c -->
				<div class="cp1verify1c item">
					<p class="explain yes">
						인증 코드가 메일로 발송되었습니다.
					</p>
					<p class="explain no">
						이미 사용 중인 아이디입니다.
					</p>
					<div class="w1">
						<div class="w1w1">
							<input type="text" value="" maxlength="6" placeholder="6자리 입력" title="인증코드 입력" class="w100 code">
							<div class="w1w1w1">
								<span class="time" data-sec="180" title="남은시간(초)"></span>
								<button type="button" class="button verify-code" disabled>확인</button>
							</div>
						</div>
					</div>
					<p class="explain yes">
						인증에 성공했습니다.
					</p>
					<p class="explain no">
						인증에 실패했습니다. 인증시간이 만료되었습니다.
					</p>
				</div>
				<!-- /cp1verify1c -->
			</div>
			<!-- /cp1verify1 -->


			<script>/*<![CDATA[*/

					/** ◇◆ 인증. 버튼, 타이머.. 20220310. @m.
					 * 이건 그냥 보여주기 샘플. ))@개발자. 고도화 필요! 이 주석은 제거바람.
					 */
					(function(){

						var $my = $('.cp1verify1'), // 인증 래퍼
							$that = $('.cp1verify1c', $my), // 인증코드 입력 부문
							$m1 = $('input.email', $my), // 이메일 인풋
							$b1 = $('.button.verify-email', $my), // 이메일 인증하기 버튼
							$m2 = $('input.code', $my), // 인증코드 인풋
							$b2= $('.button.verify-code', $my), // 인증 버튼
							$time = $('.time', $my); // 타이머 요소
						var timer, setTime; // setInterval
						
						// 초기화
						$that.hide();
						
						// 타이머
						MJS.doTimer1 = function(sec){

							setTime = sec || $time.data('sec') || 0; // 기본 설정 초 0
							var hms, h, m, s;

							clearInterval(timer); // 타이머 초기화

							// 타이머글
							function hmsTime(){
								h = Math.floor(setTime / 3600); // 남은 시
								m = Math.floor((setTime % 3600) / 60); // 남은 분
								s = (setTime % 60); // 남은 초
								h = (h < 10)? '0' + h: h;
								m = (m < 10)? '0' + m: m;
								s = (s < 10)? '0' + s: s;
								if( parseInt(h) == 0 ){
									hms = m + ':' + s + '';
								}else{
									hms = h + ':' + m + ':' + s + '';
								}
								$time.html( '(' + hms + ')' );
								setTime--; // 1초씩 감소
								if (setTime < 0) {
									endThat();
								}
							}
							hmsTime(); // 즉시 호출
							timer = setInterval(hmsTime, 1000); // 1초마다 갱신
						};

						// 호출 (재 호출 가능)
						//MJS.doTimer1(); // (data-num 설정초)
						//MJS.doTimer1(.1); // (타임아웃) // 0 으로 호출하면 data-num 설정초로 동작
						//MJS.doTimer1(22); // (22초)
						//MJS.doTimer1(60); // (1분)

						// 인증코드 입력 부문 감춤
						function endThat(){
							clearInterval(timer);
							$time.html('<span class="t0">종료</span>');
							$b1.removeClass('disabled').removeClass('on');
							$that.delay(200).fadeOut(600);
						}

						// 이메일 인풋 포커스
						$m1.on('focusin', function(e){
							$b1//.filter(':not(.verified)')
								.removeAttr('disabled').addClass('act');
						});

						// 인증코드 인풋 포커스
						$m2.on('focusin', function(e){
							$b2.removeAttr('disabled').addClass('act');
						});

						// 이메일 인증하기 버튼 클릭
						$b1.filter(':not(.disabled)').on('click', function(e){
							e.preventDefault();
							//$(this).addClass('disabled');
							$(this).addClass('on');
							$that.fadeIn();
							MJS.doTimer1(180);
						});

						// 인증 버튼 클릭
						$b2.on('click', function(e){
							if(true){ // 인증 완료 시 ☆★ -->
								$b1.attr('disabled', 'disabled').removeClass('act on')
									.addClass('verified').text('이메일 인증 완료');
								endThat();
							}
						});

					})();
				//});
			/*]]>*/</script>


			<div class="item">
				<span class="label">비밀번호</span>
				<p class="explain">
					* 8자 이상 (영문, 숫자 포함)
				</p>
				<input type="password" value="" placeholder="비밀번호" title="비밀번호" class="w100">
				<input type="password" value="" placeholder="비밀번호 재확인" title="비밀번호 재확인" class="w100 ic1check1">
			</div>

			<div class="item">
				<span class="label">이름</span>
				<input type="text" value="" placeholder="이름" title="이름" class="w100">
			</div>

			<div class="item">
				<span class="label">연락처</span>
				<input type="text" value="" placeholder="연락처" title="연락처" class="w100">
			</div>

			<div class="item">
				<span class="label">회사/소속</span>
				<input type="text" value="" placeholder="회사/소속" title="회사/소속" class="w100">
			</div>

			<div class="item">
				<span class="label">가입경로 (선택)</span>
				<select title="가입경로" class="w100 placeholder">
					<option value="">가입경로</option>
					<option value="">블로그</option>
					<option value="">지인소개&추천</option>
					<option value="">기타</option>
				</select>
			</div>

			<!-- agree -->
			<div class="agree">
				<!-- cp1fcontrol1 -->
				<div class="cp1fcontrol1 mline">
					<label class="item">
						<input type="checkbox" name="★1checkbox1" value=""><span class="t1">이용약관 (필수)</span>
						<a href="?#★" target="_blank" rel="noopener" title="새 창" class="a1 fsS2">약관보기</a>
					</label>
					<label class="item">
						<input type="checkbox" name="★1checkbox1" value=""><span class="t1">개인정보처리방침 (필수)</span>
						<a href="?#★" target="_blank" rel="noopener" title="새 창" class="a1 fsS2">내용보기</a>
					</label> 
				</div>
				<!-- /cp1fcontrol1 -->
			</div>
			<!-- /agree -->

			<div class="btns">
				<button type="submit" class="button submit block">가입하기</button>
			</div>

		</fieldset>
	</form>
	<!-- /form -->


</div>
<!-- /cp1signup1 -->
</div>
<!-- /cp1write1 -->





</div>
<!-- /container -->
</div>
<!-- /#body_content -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_footer.php"; ?>
</body>
</html>