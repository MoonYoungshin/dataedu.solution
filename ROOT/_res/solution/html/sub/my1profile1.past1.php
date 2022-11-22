<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221107 | @m | 요구반영. 결함개선. 고도화
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
<title>내 프로필 | 데이터에듀 API</title>

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
	<h2 class="h1">내 프로필</h2>
</div>
<!-- /cp1hg1 -->


<!-- cp1my1profile1 cp1write1 -->
<div class="cp1my1profile1 cp1write1">
	<div class="w1">

		<!-- cp1profile1write1 -->
		<div class="cp1profile1write1">
			<div class="f1">
				<div class="f1p1">
					<img src="/_res/solution/img/lib2/noimg1face1.png" alt="이미지 없음">
				</div>
				<button type="button" class="ic1" title="이미지 업로드"><span class="blind">이미지 업로드</span></button>
			</div>
			<!-- cp1upload1 -->
			<div class="cp1upload1 off">
				<label for="★1file0" class="label form-t1">이미지 업로드</label>
				<div class="w1file">
					<input type="file" id="★1file0" class="file">
					<input type="text" value="" title="업로드 파일명" class="file">
					<button type="button" class="b1 del">파일 지우기</button>
				</div>
			</div>
			<!-- /cp1upload1 -->
			<div class="explain">
				※ 최대용량 2MB
			</div>
		</div>
		<!-- /cp1profile1write1 -->

		<script>/*<![CDATA[*/
			//$(function(){
				/** ◇◆ 첨부업로드 input[type='file'] 고도화. 20220621. @m.
				 */
				(function(){
					var $my = $('.cp1upload1'),
						$file = $('[type="file"]', $my),
						$text = $('[type="text"]', $my),
						$del = $('.b1.del', $my);

					// 초기 호출
					isVal();

					// 파일값 동기화
					$file.on('change', function(){
						$text.val( getFileName( $file.val() ) );
						isVal();
					});

					// 파일 지우기
					$del.on('click', function(e){
						e.preventDefault();
						$file.val('').triggerHandler('change'); // triggerHandler() 강제
						$text.val('');
					});

					// 파일명.확장자 만 추출
					function getFileName(v){
						var arr = v.split("\\"); // 로컬경로는 / 아닌 \ 로 분리
						return arr[arr.length-1]; // 배열의 맨 끝이 파일명
					}

					// 파일값 유무 구분
					function isVal(){
						//console.log( !!$file.val() );
						if( !$file.val() ){ // 값 없으면
							$my.addClass('off');
						}else{
							$my.removeClass('off');
						}
					}

					// 20220621. 섬네일 옆 아이콘 클릭
					$('.cp1profile1write1 .f1 .ic1').on('click', function(e){
						$file.trigger('click');
					});

				})();
			//});
		/*]]>*/</script>

	</div>
	<div class="w2">

		<div class="item">
			<span class="label form-t1">이메일</span>
			<input type="text" value="Hong@gmail.com" readonly placeholder="account@emailserver.com" title="이메일" class="w100">
		</div>

		<div class="item">
			<span class="label form-t1">이름</span>
			<input type="text" value="홍길동" readonly placeholder="이름" title="이름" class="w100">
		</div>

		<div class="item">
			<span class="label form-t1">연락처</span>
			<input type="text" value="010–1234–5678" placeholder="연락처" title="연락처" class="w100">
		</div>

		<div class="item">
			<span class="label form-t1">회사/소속</span>
			<input type="text" value="데이터에듀" placeholder="회사/소속" title="회사/소속" class="w100">
		</div>

		<div class="item">
			<span class="label form-t1">비밀번호 변경</span>
			<div class="dd1">
				<input type="password" value="" placeholder="현재 비밀번호" title="현재 비밀번호" class="w100">
				<input type="password" value="" placeholder="새 비밀번호" title="새 현재 비밀번호" class="w100">
				<input type="password" value="" placeholder="새 비밀번호 확인" title="새 비밀번호 확인" class="w100 ic1check1">
			</div>
		</div>

		<div class="btns">
			<button type="submit" class="button submit block">저장하기</button>
		</div>

	</div>
</div>
<!-- /cp1my1profile1 cp1write1 -->





</div>
<!-- /container -->
</div>
<!-- /#body_content -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_footer.php"; ?>
</body>
</html>