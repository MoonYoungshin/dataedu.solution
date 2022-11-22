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
$pageTitle="Grid Best Practice"; ?>
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





<h1 class="hb1 h1">Grid Best Practice</h1>


<h2 class="hb1 h2">Photo + Texts</h2>


<h3 class="hb1 h3">이미지 small-12 large-5 column | 텍스트 small-12 large-7 column</h3>


<!-- even-grid -->
<div class="even-grid gap4pct">
	<div class="small-12 large-5 column">
		<div class="wrap1 tac">
			<img src="/_res/@m/_img.ex/brothers-457237_1280.jpg" alt="★대체텍스트필수" />
		</div>
	</div>
	<div class="small-12 large-7 column">
		<div class="wrap1">
			<p class="mgt0">21세기는 과학의 시대다. 현대 과학은 다른 학문을 지배하며 끊임없이 정답을 추구한다. 하지만 철학은 정답에 대한 의심에서 시작한다. 정답을 확신하는 사람은 질문하지 않지만, 의심하는 사람은 끊임없이 묻는다. 삶의 의미를 찾기 위해 올바른 질문을 제기하는 것이 철학이며, 과학의 시대에 철학의 쓸모는 바로 여기서 비롯된다. 정답을 찾는 데 익숙한 공대생에게 스스로 의심하고 질문하는 방법을 가르치고 있는 철학자 이진우 교수. 포스텍 학생들은 그의 철학 강의를 곤혹스럽지만 최고의 지적 희열을 안겨주는 명강의라고 이야기한다. 이진우 교수의 포스텍 철학 강의를 바탕으로 집필한 이 책은 마르크스, 니체, 프로이트, 하이데거, 비트겐슈타인, 호르크하이머, 아도르노, 사르트르, 베냐민, 포퍼, 아렌트 등 정답의 시대를 성찰한 ‘의심의 학파’ 11인이 무엇을 의심하고 어떻게 질문을 던졌는지 살펴본다. 모두가 정답이라고 확신한 것을 의심했던 현대철학자들의 사상은 과학의 시대를 살고 있는 우리에게 인간과 삶의 의미를 곱씹는 계기를 마련해줄 것이다.</p>
			<p>21세기는 과학의 시대다. 현대 과학은 다른 학문을 지배하며 끊임없이 정답을 추구한다. 하지만 철학은 정답에 대한 의심에서 시작한다. 정답을 확신하는 사람은 질문하지 않지만, 의심하는 사람은 끊임없이 묻는다. 삶의 의미를 찾기 위해 올바른 질문을 제기하는 것이 철학이며, 과학의 시대에 철학의 쓸모는 바로 여기서 비롯된다. 정답을 찾는 데 익숙한 공대생에게 스스로 의심하고 질문하는 방법을 가르치고 있는 철학자 이진우 교수. 포스텍 학생들은 그의 철학 강의를 곤혹스럽지만 최고의 지적 희열을 안겨주는 명강의라고 이야기한다. 이진우 교수의 포스텍 철학 강의를 바탕으로 집필한 이 책은 마르크스, 니체, 프로이트, 하이데거, 비트겐슈타인, 호르크하이머, 아도르노, 사르트르, 베냐민, 포퍼, 아렌트 등 정답의 시대를 성찰한 ‘의심의 학파’ 11인이 무엇을 의심하고 어떻게 질문을 던졌는지 살펴본다. 모두가 정답이라고 확신한 것을 의심했던 현대철학자들의 사상은 과학의 시대를 살고 있는 우리에게 인간과 삶의 의미를 곱씹는 계기를 마련해줄 것이다.</p>
		</div>
	</div>
</div>
<!-- /even-grid -->


<h3 class="hb1 h3">이미지 small-12 medium-8 large-5 column | 텍스트 small-12 medium-12 large-7 column</h3>


<!-- even-grid -->
<div class="even-grid gap4pct text-align-center-small text-align-left-large">
	<div class="small-12 medium-8 large-5 column">
		<div class="wrap1">
			<img src="/_res/@m/_img.ex/brothers-457237_1280.jpg" alt="★대체텍스트필수" />
		</div>
	</div>
	<div class="small-12 medium-12 large-7 column text-align-left-small">
		<div class="wrap1">
			<p class="mgt0">21세기는 과학의 시대다. 현대 과학은 다른 학문을 지배하며 끊임없이 정답을 추구한다. 하지만 철학은 정답에 대한 의심에서 시작한다. 정답을 확신하는 사람은 질문하지 않지만, 의심하는 사람은 끊임없이 묻는다. 삶의 의미를 찾기 위해 올바른 질문을 제기하는 것이 철학이며, 과학의 시대에 철학의 쓸모는 바로 여기서 비롯된다. 정답을 찾는 데 익숙한 공대생에게 스스로 의심하고 질문하는 방법을 가르치고 있는 철학자 이진우 교수. 포스텍 학생들은 그의 철학 강의를 곤혹스럽지만 최고의 지적 희열을 안겨주는 명강의라고 이야기한다. 이진우 교수의 포스텍 철학 강의를 바탕으로 집필한 이 책은 마르크스, 니체, 프로이트, 하이데거, 비트겐슈타인, 호르크하이머, 아도르노, 사르트르, 베냐민, 포퍼, 아렌트 등 정답의 시대를 성찰한 ‘의심의 학파’ 11인이 무엇을 의심하고 어떻게 질문을 던졌는지 살펴본다. 모두가 정답이라고 확신한 것을 의심했던 현대철학자들의 사상은 과학의 시대를 살고 있는 우리에게 인간과 삶의 의미를 곱씹는 계기를 마련해줄 것이다.</p>
			<p>21세기는 과학의 시대다. 현대 과학은 다른 학문을 지배하며 끊임없이 정답을 추구한다. 하지만 철학은 정답에 대한 의심에서 시작한다. 정답을 확신하는 사람은 질문하지 않지만, 의심하는 사람은 끊임없이 묻는다. 삶의 의미를 찾기 위해 올바른 질문을 제기하는 것이 철학이며, 과학의 시대에 철학의 쓸모는 바로 여기서 비롯된다. 정답을 찾는 데 익숙한 공대생에게 스스로 의심하고 질문하는 방법을 가르치고 있는 철학자 이진우 교수. 포스텍 학생들은 그의 철학 강의를 곤혹스럽지만 최고의 지적 희열을 안겨주는 명강의라고 이야기한다. 이진우 교수의 포스텍 철학 강의를 바탕으로 집필한 이 책은 마르크스, 니체, 프로이트, 하이데거, 비트겐슈타인, 호르크하이머, 아도르노, 사르트르, 베냐민, 포퍼, 아렌트 등 정답의 시대를 성찰한 ‘의심의 학파’ 11인이 무엇을 의심하고 어떻게 질문을 던졌는지 살펴본다. 모두가 정답이라고 확신한 것을 의심했던 현대철학자들의 사상은 과학의 시대를 살고 있는 우리에게 인간과 삶의 의미를 곱씹는 계기를 마련해줄 것이다.</p>
		</div>
	</div>
</div>
<!-- /even-grid -->





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