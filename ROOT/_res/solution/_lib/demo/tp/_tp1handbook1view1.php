<!DOCTYPE html>
<?php
/**
 * 20220223 | @m | connect.php 추가
 */

include "../../../share/inc/connect.php"; // 접속경로 (( "../../share/inc/connect.php"
?>
<html lang="ko">
<head>
<?php $d1n=1;$d2n=1;$d3n=1;$d4n=1;$d5n=1;$d6n=1; 
$pageTitle="민원안내 상세"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>
</head>
<body class="<?=$bodyClass?>">
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">
<!-- width1s2 -->
<div class="width1s2">





<h1 class="hb1 h1">민원안내 상세</h1>


<h2 class="hb1 h2">위임장</h2>


<table class="t3 w100 lhD small-is-block">
	<caption>
		<strong class="h1 blind">위임장</strong>
		<span class="summary1 blind">: 민원내용, 처리주무부서, 연락처, 제출처, 처리기간, 민원이 갖추어야 할 사항(구비서류), 민원처리흐름도, 수수료, 기타비용, 부서에서 하는일(심사기준), 처리요령 및 유의사항, 관련법규, 최종수정일, 사이트바로가기, 민원서식, 첨부파일</span>
	</caption>
	<col style="width:20%;" /><col style="width:40%;" /><col style="width:12%;" /><col style="width:28%;" />
	<tbody class="tttal ttvam">
	<tr class="first">
	<th scope="row" class="item"><label>민원내용</label></th>
	<td colspan="3"></td>
	</tr>
	<tr>
	<th scope="row" class="item"><label>처리주무부서</label></th>
	<td colspan="3">보건행정과</td>
	</tr>
	<tr>
	<th scope="row" class="item"><label>연락처</label> </th>
	<td></td>
	<th scope="row" class="item"><label>제출처</label> </th>
	<td>보건행정과 각 담당</td>
	</tr>
	<tr>
	<th scope="row" class="item"><label>처리기간</label></th>
	<td colspan="3"></td>
	</tr>
	<tr>
	<th scope="row" class="item"><label>민원이 갖추어야 할 사항<span class="dpib">(구비서류)</span></label></th>
	<td colspan="3">위임하는 사람의 신분등 앞,뒤 복사후 여백에 이름 및 자필서명
	<br />
	※ 자필서명 예) 홍길동 : 홍길동(O), 홍(X), 책임을 분명히 하기 위해 자기의 이름을 적는 것<br />
	</td>
	</tr>
	<tr>
	<th scope="row" class="item"><label>민원처리흐름도</label></th>
	<td colspan="3"></td>
	</tr>
	<tr>
	<th scope="row" class="item"><label>수수료</label></th>
	<td></td>
	<th scope="row" class="item"><label>기타비용</label></th>
	<td></td>
	</tr>
	<tr>
	<th scope="row" class="item"><label>부서에서 하는일<span class="dpib">(심사기준)</span></label></th>
	<td colspan="3"></td>
	</tr>
	<tr>
	<th scope="row" class="item"><label>처리요령 및 유의사항</label></th>
	<td colspan="3"></td>
	</tr>
	<tr>
	<th scope="row" class="item"><label>관련법규</label> </th>
	<td colspan="3"></td>
	</tr>
	<tr>
	<th scope="row" class="item"><label>최종수정일</label> </th>
	<td colspan="3" class="text"></td>
	</tr>
	<tr>
	<th scope="row" class="item"><label>사이트바로가기</label></th>
	<td colspan="3">
		<a href="http://eminwon.jinju.go.kr/" target="_blank" rel="noopener" title="새 창" class="button small info">전자민원</a>
		<a href="http://www.scourt.go.kr/main/Main.work" target="_blank" rel="noopener" title="새 창" class="button small info">대법원</a>
		<a href="http://nts.go.kr/" target="_blank" rel="noopener" title="새 창" class="button small info">국세청</a>
		<a href="http://www.customs.go.kr/civilhome/index.jsp" target="_blank" rel="noopener" title="새 창" class="button small info">관세청</a>
		<a href="http://www.jinju.go.kr" target="_blank" rel="noopener" title="새 창" class="button small info">시청</a>
	</td>
	</tr>
	<tr>
	<th scope="row" class="item">민원서식</th>
	<td colspan="3">
	<a href="201507141047481.hwp" title="민원서식 다운로드"><img src="<?=$sitePath?>/img/board/icon/ic16_hwp.png" alt="hwp 파일 첨부" class="vam" /> 201507141047481.hwp</a><br />
	<a href="AbcdeFghijk.hwp" title="민원서식 다운로드"><img src="<?=$sitePath?>/img/board/icon/ic16_hwp.png" alt="hwp 파일 첨부" class="vam" /> AbcdeFghijk.hwp</a><br />
	</td>
	</tr>
	<tr class="last">
	<th scope="row" class="item">첨부파일</th>
	<td colspan="3" class="text">
	</td>
	</tr>
	</tbody>
</table>


<!-- infomenu1 -->
<div class="infomenu1">
	<p class="center">
		<a href="?" class="button large">목록</a>
	</p>
</div>
<!-- /infomenu1 -->





</div>
<!-- /width1s2 -->
</div>
<!-- /container -->
</div>
<!-- /#body_content -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/wing.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_footer.php"; ?>
</body>
</html>