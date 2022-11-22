<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221109 | @m | 요구반영. 결함개선. 고도화.
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
<title>영상정보수집 - 엔진체험 | 데이터에듀 API</title>

<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>

</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- 현재페이지 경로 + 사용자명 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/video/web1crawling1_body_head.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">





<!-- 본문제목 + 탭 -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/video/web1crawling1_inc1.php"; ?>
<script>/*<![CDATA[*/
	$('.cp2tabs1 .m1').addClass('on'); // 20221102. 탭활성. @m
/*]]>*/</script>


<!-- cp2view1 -->
<div class="cp2view1">


<h3 class="blind">엔진체험</h3>


<!-- cp2write1 -->
<div class="cp2write1">
	<!-- form -->
	<form method="post" enctype="multipart/form-data">
		<ul class="dl1">
			<li class="di1">
				<div class="dt1">
					유튜브 URL
				</div>
				<div class="dd1">
					<input type="text" name="urls" value="" placeholder="크롤링 할 URL 주소" title="유튜브 URL" class="w100" />
				</div>
			</li>
			<li class="di1">
				<div class="dt1">
					크롤링 옵션
				</div>
				<div class="dd1">
					<ul class="dl2">
						<li class="di2">
							<div class="dt2">
								기본 정보
							</div>
							<div class="dd2">
								<label class="label-it"><input type="checkbox" name="options" value="url" /> <span class="t1">영상주소</span></label>
								<label class="label-it"><input type="checkbox" name="options" value="title" /> <span class="t1">영상제목</span></label>
								<label class="label-it"><input type="checkbox" name="options" value="date" /> <span class="t1">영상날짜</span></label>
								<label class="label-it"><input type="checkbox" name="options" value="like" /> <span class="t1">영상 좋아요</span></label>
							</div>
						</li>
						<li class="di2">
							<div class="dt2">
								부가 정보
							</div>
							<div class="dd2">
								<label class="label-it"><input type="checkbox" name="options" value="description" /> <span class="t1">영상설명</span></label>
								<label class="label-it"><input type="checkbox" name="options" value="comment" /> <span class="t1">영상댓글</span></label>
								<label class="label-it"><input type="checkbox" name="options" value="channel_name" /> <span class="t1">영상채널명</span></label>
								<label class="label-it"><input type="checkbox" name="options" value="channel_url" /> <span class="t1">영상채널 URL</span></label>
							</div>
						</li>
						<li class="di2">
							<div class="dt2">
								태그
							</div>
							<div class="dd2">
								<label class="label-it"><input type="checkbox" name="options" value="videotag" /> <span class="t1">영상태그</span></label>
								<label class="label-it"><input type="checkbox" name="options" value="hashtag" /> <span class="t1">해시태그</span></label>
							</div>
						</li>
					</ul>
				</div>
			</li>
		</ul>
		<div class="fg1">
			
			<button type="submit" class="b1 button submit type1"><span class="t1">결과보기</span></button>
			
		</div>
	</form>
	<!-- /form -->
</div>
<!-- /cp2write1 -->


<script>/*<![CDATA[*/
	$(function(){


		/** ◇◆ 작성폼 고도화. ~20220804. 20221109. @m.
			20221109.★☆ToEdit) //bigdatamart.co.kr/sub/solution3-2.php 그대로 가져와서 오류 있음! ())@개발자
		*/
		(function(){
			var $my = $('.cp2write1'),
				$form = $('form', $my), // 폼
				$text = $('[type="text"]', $my), // 텍스트 입력박스
				$check = $('[type="checkbox"]', $my), // 선택박스
				$submit = $('.b1.submit', $my),
				chkArray =[];	// check한 옵션; // 전송버튼

			//var $progress = $('.cp1progress1'), // 프로그래스
			//	$start = $('.start', $progress); // 프로그래스 스타트

			// 초기 호출
			doAbleSubmit();

			// 텍스트 입력박스 값 수정 즉시
			$text.on('input', function(){
				doAbleSubmit();
			});

			// 체크박스 변화
			$check.on('change', function(){
				doAbleSubmit();
			});

			// 입력값 있으면 전송버튼 활성화
			function doAbleSubmit(){
				if( !!$text.val() && !!$check.filter(':checked').length ){ // 텍스트 입력과 체크박스 선택 있으면
					$my.removeClass('off');
					$submit.removeAttr('disabled'); // 전송버튼 활성화
				}else{
					$my.addClass('off');
					$submit.attr({disabled: 'disabled'}); // 전송버튼 비활성화
				}
			}

			// 폼 전송 동작시
			$form.on('submit', function(e){
				var num = 1; // 수집할 URL 수

				if( !$text.val() || $text.val().indexOf('youtu') == -1){	// youtube url이 아니거나 입력하지 않은 경우
					alert('유튜브 영상 URL을 입력해주세요.');
					$text.focus();
					return false;
				}else if( !$check.filter(':checked').length ){
					alert('크롤링 옵션을 선택해주세요.');
					$check.eq(0).focus();
					return false;
				}else{
					sessionStorage.setItem('total_url', num); // 세션스토리지
					sessionStorage.setItem('tab_on', '.m2'); // 탭활성
					//$progress.addClass('on');
					//$start.triggerHandler('click');

					// 전송 정보 크로링 서버로 전달
					$("input[type='checkbox'][name='options']:checked").each(function (){
						chkArray.push($(this).val());
					});

					$.ajax({
						type: 'POST',
						url: "/sub/solution3ok1PostInfos.php",
						dataType: 'json',
						data:{
							'urls' : $text.val(),
							'options' : JSON.stringify(chkArray)
						},
						success:function(data) {
							if(data) {
								console.log(data);
								//alert('전송이 완료 되었습니다.');
								$data = JSON.stringify(data);
								
								var form = document.createElement('form'); // 폼객체 생성
								var objs;
								objs = document.createElement('input'); // 값이 들어있는 녀석의 형식
								objs.setAttribute('type', 'text'); // 값이 들어있는 녀석의 type
								objs.setAttribute('name', 'text'); // 객체이름
								objs.setAttribute('value', $data); //객체값
								form.appendChild(objs);
								form.setAttribute('method', 'post'); //get,post 가능
								form.setAttribute('action', "/sub/solution3ok1.php"); // 수집 완료 페이지로 이동
								document.body.appendChild(form);
								form.submit();
							}
						},
						error:function(request,status,error){
							console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
							alert('전송이 완료되지 않았습니다.');
							location.reload();
						}
					});
					
					return false;
				}
			});

		})();


	});
/*]]>*/</script><!--JSON (E_DECODE-->


</div>
<!-- /cp2view1 -->





</div>
<!-- /container -->
</div>
<!-- /#body_content -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_footer.php"; ?>
</body>
</html>