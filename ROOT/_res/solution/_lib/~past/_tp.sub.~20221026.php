<!DOCTYPE html>
<?php
/**
 * SubPage Template
 * 20211020 | @m | 최초작성
 * 20211020 | @m | 요구반영. 결함개선. 고도화.
 * 20220222 | @m | 
 */

include "../share/inc/connect.php"; // 접속경로 (( "../../share/inc/connect.php"
?>
<html lang="ko">
<head>
<?php $pageTitle="메뉴콘텐츠관리"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">





<h2 class="hb1 h2">메뉴/콘텐츠 관리</h2>


<!-- panel1 -->
<div class="panel1 pd2em-rv">
	<strong class="fsB4">사이트 전체에 사용되는 메뉴 입니다.</strong>
	<ul class="bu mgt075em mgb0">
	<li>사이트 전체에 사용되는 메뉴 입니다.</li>
	<li>사용자 페이지에 출력이 되지  않는 메뉴는 취소선으로 표기됩니다.</li>
	<li>관리를 위한 권한부여는 전체관리자에게 문의하세요.</li>
	<li>2차메뉴 이상의 코드를 선택하시면 하위 메뉴 전체를 확인 할 수 있습니다.</li>
	</ul>
</div>
<!-- /panel1 -->





</div>
<!-- /container -->
</div>
<!-- /#body_content -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_footer.php"; ?>
</body>
</html>