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
$pageTitle="캘린더_시간별예약현황달력"; ?>
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





<h1 class="hb1 h1">캘린더_시간별예약현황달력</h1>


<!-- reserve1calendar1 -->
<div class="reserve1calendar1">

	<div class="month">
		<strong class="h1" title="년.월">2020.<em class="em1">12</em></strong>
		<a href="#?" class="b1 prev"><i class="ic1"></i> <span class="blind">이전 달 보기</span></a>
		<a href="#?" class="b1 next"><i class="ic1"></i> <span class="blind">다음 달 보기</span></a>
		<a href="#?" class="button today default small round">오늘</a>
	</div>

	<!-- note1 -->
	<div class="note1">
		<div class="menu">
			<ul>
			<li><a class="st0"><b class="ic1" title="휴관일"><i class="dpn">[</i>휴<i class="dpn">]</i></b> <span class="t1">휴관일</span></a></li>
			<li><a class="st1"><b class="ic1" title="예약가능"><i class="dpn">[</i>예<i class="dpn">]</i></b> <span class="t1">예약가능</span></a></li>
			<li><a class="st2"><b class="ic1" title="예약완료"><i class="dpn">[</i>완<i class="dpn">]</i></b> <span class="t1">예약완료</span></a></li>
			<li><a class="st3"><b class="ic1" title="예약불가(운영 측 사정)"><i class="dpn">[</i>불<i class="dpn">]</i></b> <span class="t1">예약불가(운영 측 사정)</span></a></li>
			</ul>
		</div>
	</div>
	<!-- /note1 -->

	<table class="calendar1table1">
		<caption>
			<strong class="h1 blind">예약 현황 달력</strong>
			<span class="summary1 blind">: 링크를 통해서 예약 가능합니다.</span>
		</caption>
		<thead>
		<tr class="day">
		<th scope="col" class="sun">일</th>
		<th scope="col">월</th>
		<th scope="col">화</th>
		<th scope="col">수</th>
		<th scope="col">목</th>
		<th scope="col">금</th>
		<th scope="col" class="sat">토</th>
		</tr>
		</thead>
		<!-- ★(개발Hint!) -->
		<tbody>
		<tr>
		<td class="sun"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td><div class="cell">
			<div class="date" title="날짜">1</div>
			<div class="menu">
			<ul>
			<li><a href="?#★" class="st1"><b class="ic1" title="예약가능"><i class="dpn">[</i>예<i class="dpn">]</i></b> <span class="t1">09:00~12:00</span></a></li>
			<li><a href="?#★" class="st2"><b class="ic1" title="예약완료"><i class="dpn">[</i>완<i class="dpn">]</i></b> <span class="t1">13:00~17:00</span></a></li>
			<li><a href="?#★" class="st3"><b class="ic1" title="예약불가(운영 측 사정)"><i class="dpn">[</i>불<i class="dpn">]</i></b> <span class="t1">18:00~21:00</span></a></li>
			</ul>
			</div>
		</div></td>
		<td class="sat"><div class="cell">
			<div class="date" title="날짜">2</div>
			<div class="menu">
			<ul>
			<li><a href="?#★" class="st1"><b class="ic1" title="예약가능"><i class="dpn">[</i>예<i class="dpn">]</i></b> <span class="t1">09:00~12:00</span></a></li>
			<li><a href="?#★" class="st2"><b class="ic1" title="예약완료"><i class="dpn">[</i>완<i class="dpn">]</i></b> <span class="t1">13:00~17:00</span></a></li>
			<li><a href="?#★" class="st3"><b class="ic1" title="예약불가(운영 측 사정)"><i class="dpn">[</i>불<i class="dpn">]</i></b> <span class="t1">18:00~21:00</span></a></li>
			</ul>
			</div>
		</div></td>
		</tr>
		<tr>
		<td class="sun"><div class="cell">
			<div class="date" title="날짜">3</div>
			<div class="menu">
			<ul>
			<li><a href="?#★" class="st1"><b class="ic1" title="예약가능"><i class="dpn">[</i>예<i class="dpn">]</i></b> <span class="t1">09:00~12:00</span></a></li>
			<li><a href="?#★" class="st2"><b class="ic1" title="예약완료"><i class="dpn">[</i>완<i class="dpn">]</i></b> <span class="t1">13:00~17:00</span></a></li>
			<li><a href="?#★" class="st3"><b class="ic1" title="예약불가(운영 측 사정)"><i class="dpn">[</i>불<i class="dpn">]</i></b> <span class="t1">18:00~21:00</span></a></li>
			</ul>
			</div>
		</div></td>
		<td><div class="cell">
			<div class="date" title="날짜">4</div>
			<div class="menu">
			<ul>
			<li><a href="?#★" class="st0"><b class="ic1" title="휴관일"><i class="dpn">[</i>휴<i class="dpn">]</i></b></a></li>
			</ul>
			</div>
		</div></td>
		<td><div class="cell">
			<div class="date" title="날짜">5</div>
			<div class="menu">
			<ul>
			<li><a href="?#★" class="st1"><b class="ic1" title="예약가능"><i class="dpn">[</i>예<i class="dpn">]</i></b> <span class="t1">09:00~12:00</span></a></li>
			<li><a href="?#★" class="st2"><b class="ic1" title="예약완료"><i class="dpn">[</i>완<i class="dpn">]</i></b> <span class="t1">13:00~17:00</span></a></li>
			<li><a href="?#★" class="st3"><b class="ic1" title="예약불가(운영 측 사정)"><i class="dpn">[</i>불<i class="dpn">]</i></b> <span class="t1">18:00~21:00</span></a></li>
			</ul>
			</div>
		</div></td>
		<td><div class="cell">
			<div class="date" title="날짜">6</div>
			<div class="menu">
			<ul>
			<li><a href="?#★" class="st1"><b class="ic1" title="예약가능"><i class="dpn">[</i>예<i class="dpn">]</i></b> <span class="t1">09:00~12:00</span></a></li>
			<li><a href="?#★" class="st2"><b class="ic1" title="예약완료"><i class="dpn">[</i>완<i class="dpn">]</i></b> <span class="t1">13:00~17:00</span></a></li>
			<li><a href="?#★" class="st3"><b class="ic1" title="예약불가(운영 측 사정)"><i class="dpn">[</i>불<i class="dpn">]</i></b> <span class="t1">18:00~21:00</span></a></li>
			</ul>
			</div>
		</div></td>
		<td><div class="cell">
			<div class="date" title="날짜">7</div>
			<div class="menu">
			<ul>
			<li><a href="?#★" class="st1"><b class="ic1" title="예약가능"><i class="dpn">[</i>예<i class="dpn">]</i></b> <span class="t1">09:00~12:00</span></a></li>
			<li><a href="?#★" class="st2"><b class="ic1" title="예약완료"><i class="dpn">[</i>완<i class="dpn">]</i></b> <span class="t1">13:00~17:00</span></a></li>
			<li><a href="?#★" class="st3"><b class="ic1" title="예약불가(운영 측 사정)"><i class="dpn">[</i>불<i class="dpn">]</i></b> <span class="t1">18:00~21:00</span></a></li>
			</ul>
			</div>
		</div></td>
		<td class="hol"><div class="cell">
			<div class="date" title="날짜">8</div>
			<div class="menu">
			<ul>
			<li><a href="?#★" class="st1"><b class="ic1" title="예약가능"><i class="dpn">[</i>예<i class="dpn">]</i></b> <span class="t1">09:00~12:00</span></a></li>
			<li><a href="?#★" class="st2"><b class="ic1" title="예약완료"><i class="dpn">[</i>완<i class="dpn">]</i></b> <span class="t1">13:00~17:00</span></a></li>
			<li><a href="?#★" class="st3"><b class="ic1" title="예약불가(운영 측 사정)"><i class="dpn">[</i>불<i class="dpn">]</i></b> <span class="t1">18:00~21:00</span></a></li>
			</ul>
			</div>
		</div></td>
		<td class="sat hol"><div class="cell">
			<div class="date" title="날짜">9</div>
			<div class="menu">
			<ul>
			<li><a href="?#★" class="st1"><b class="ic1" title="예약가능"><i class="dpn">[</i>예<i class="dpn">]</i></b> <span class="t1">09:00~12:00</span></a></li>
			<li><a href="?#★" class="st2"><b class="ic1" title="예약완료"><i class="dpn">[</i>완<i class="dpn">]</i></b> <span class="t1">13:00~17:00</span></a></li>
			<li><a href="?#★" class="st3"><b class="ic1" title="예약불가(운영 측 사정)"><i class="dpn">[</i>불<i class="dpn">]</i></b> <span class="t1">18:00~21:00</span></a></li>
			</ul>
			</div>
		</div></td>
		</tr>
		<tr>
		<td class="sun hol"><div class="cell">
			<div class="date" title="날짜">10</div>
			<div class="menu">
			<ul>
			<li><a href="?#★" class="st1"><b class="ic1" title="예약가능"><i class="dpn">[</i>예<i class="dpn">]</i></b> <span class="t1">09:00~12:00</span></a></li>
			<li><a href="?#★" class="st2"><b class="ic1" title="예약완료"><i class="dpn">[</i>완<i class="dpn">]</i></b> <span class="t1">13:00~17:00</span></a></li>
			<li><a href="?#★" class="st3"><b class="ic1" title="예약불가(운영 측 사정)"><i class="dpn">[</i>불<i class="dpn">]</i></b> <span class="t1">18:00~21:00</span></a></li>
			</ul>
			</div>
		</div></td>
		<td><div class="cell">
			<div class="date" title="날짜">11</div>
			<div class="menu">
			<ul>
			<li><a href="?#★" class="st0"><b class="ic1" title="휴관일"><i class="dpn">[</i>휴<i class="dpn">]</i></b></a></li>
			</ul>
			</div>
		</div></td>
		<td><div class="cell">
			<div class="date" title="날짜">12</div>
			<div class="menu">
			<ul>
			<li><a href="?#★" class="st1"><b class="ic1" title="예약가능"><i class="dpn">[</i>예<i class="dpn">]</i></b> <span class="t1">09:00~12:00</span></a></li>
			<li><a href="?#★" class="st2"><b class="ic1" title="예약완료"><i class="dpn">[</i>완<i class="dpn">]</i></b> <span class="t1">13:00~17:00</span></a></li>
			<li><a href="?#★" class="st3"><b class="ic1" title="예약불가(운영 측 사정)"><i class="dpn">[</i>불<i class="dpn">]</i></b> <span class="t1">18:00~21:00</span></a></li>
			</ul>
			</div>
		</div></td>
		<td><div class="cell">
			<div class="date" title="날짜">13</div>
			<div class="menu">
			<ul>
			<li><a href="?#★" class="st1"><b class="ic1" title="예약가능"><i class="dpn">[</i>예<i class="dpn">]</i></b> <span class="t1">09:00~12:00</span></a></li>
			<li><a href="?#★" class="st2"><b class="ic1" title="예약완료"><i class="dpn">[</i>완<i class="dpn">]</i></b> <span class="t1">13:00~17:00</span></a></li>
			<li><a href="?#★" class="st3"><b class="ic1" title="예약불가(운영 측 사정)"><i class="dpn">[</i>불<i class="dpn">]</i></b> <span class="t1">18:00~21:00</span></a></li>
			</ul>
			</div>
		</div></td>
		<td><div class="cell">
			<div class="date" title="날짜">14</div>
			<div class="menu">
			<ul>
			<li><a href="?#★" class="st1"><b class="ic1" title="예약가능"><i class="dpn">[</i>예<i class="dpn">]</i></b> <span class="t1">09:00~12:00</span></a></li>
			<li><a href="?#★" class="st2"><b class="ic1" title="예약완료"><i class="dpn">[</i>완<i class="dpn">]</i></b> <span class="t1">13:00~17:00</span></a></li>
			<li><a href="?#★" class="st3"><b class="ic1" title="예약불가(운영 측 사정)"><i class="dpn">[</i>불<i class="dpn">]</i></b> <span class="t1">18:00~21:00</span></a></li>
			</ul>
			</div>
		</div></td>
		<td><div class="cell">
			<div class="date" title="날짜">15</div>
			<div class="menu">
			<ul>
			<li><a href="?#★" class="st1"><b class="ic1" title="예약가능"><i class="dpn">[</i>예<i class="dpn">]</i></b> <span class="t1">09:00~12:00</span></a></li>
			<li><a href="?#★" class="st2"><b class="ic1" title="예약완료"><i class="dpn">[</i>완<i class="dpn">]</i></b> <span class="t1">13:00~17:00</span></a></li>
			<li><a href="?#★" class="st3"><b class="ic1" title="예약불가(운영 측 사정)"><i class="dpn">[</i>불<i class="dpn">]</i></b> <span class="t1">18:00~21:00</span></a></li>
			</ul>
			</div>
		</div></td>
		<td class="sat"><div class="cell">
			<div class="date" title="날짜">16</div>
			<div class="menu">
			<ul>
			<li><a href="?#★" class="st1"><b class="ic1" title="예약가능"><i class="dpn">[</i>예<i class="dpn">]</i></b> <span class="t1">09:00~12:00</span></a></li>
			<li><a href="?#★" class="st2"><b class="ic1" title="예약완료"><i class="dpn">[</i>완<i class="dpn">]</i></b> <span class="t1">13:00~17:00</span></a></li>
			<li><a href="?#★" class="st3"><b class="ic1" title="예약불가(운영 측 사정)"><i class="dpn">[</i>불<i class="dpn">]</i></b> <span class="t1">18:00~21:00</span></a></li>
			</ul>
			</div>
		</div></td>
		</tr>
		<tr>
		<td class="sun"><div class="cell">
			<div class="date" title="날짜">17</div>
			<div class="menu">
			<ul>
			<li><a href="?#★" class="st1"><b class="ic1" title="예약가능"><i class="dpn">[</i>예<i class="dpn">]</i></b> <span class="t1">09:00~12:00</span></a></li>
			<li><a href="?#★" class="st2"><b class="ic1" title="예약완료"><i class="dpn">[</i>완<i class="dpn">]</i></b> <span class="t1">13:00~17:00</span></a></li>
			<li><a href="?#★" class="st3"><b class="ic1" title="예약불가(운영 측 사정)"><i class="dpn">[</i>불<i class="dpn">]</i></b> <span class="t1">18:00~21:00</span></a></li>
			</ul>
			</div>
		</div></td>
		<td><div class="cell">
			<div class="date" title="날짜">18</div>
			<div class="menu">
			<ul>
			<li><a href="?#★" class="st0"><b class="ic1" title="휴관일"><i class="dpn">[</i>휴<i class="dpn">]</i></b></a></li>
			</ul>
			</div>
		</div></td>
		<td><div class="cell">
			<div class="date" title="날짜">19</div>
			<div class="menu">
			<ul>
			<li><a href="?#★" class="st1"><b class="ic1" title="예약가능"><i class="dpn">[</i>예<i class="dpn">]</i></b> <span class="t1">09:00~12:00</span></a></li>
			<li><a href="?#★" class="st2"><b class="ic1" title="예약완료"><i class="dpn">[</i>완<i class="dpn">]</i></b> <span class="t1">13:00~17:00</span></a></li>
			<li><a href="?#★" class="st3"><b class="ic1" title="예약불가(운영 측 사정)"><i class="dpn">[</i>불<i class="dpn">]</i></b> <span class="t1">18:00~21:00</span></a></li>
			</ul>
			</div>
		</div></td>
		<td><div class="cell">
			<div class="date" title="날짜">20</div>
			<div class="menu">
			<ul>
			<li><a href="?#★" class="st1"><b class="ic1" title="예약가능"><i class="dpn">[</i>예<i class="dpn">]</i></b> <span class="t1">09:00~12:00</span></a></li>
			<li><a href="?#★" class="st2"><b class="ic1" title="예약완료"><i class="dpn">[</i>완<i class="dpn">]</i></b> <span class="t1">13:00~17:00</span></a></li>
			<li><a href="?#★" class="st3"><b class="ic1" title="예약불가(운영 측 사정)"><i class="dpn">[</i>불<i class="dpn">]</i></b> <span class="t1">18:00~21:00</span></a></li>
			</ul>
			</div>
		</div></td>
		<td><div class="cell">
			<div class="date" title="날짜">21</div>
			<div class="menu">
			<ul>
			<li><a href="?#★" class="st1"><b class="ic1" title="예약가능"><i class="dpn">[</i>예<i class="dpn">]</i></b> <span class="t1">09:00~12:00</span></a></li>
			<li><a href="?#★" class="st2"><b class="ic1" title="예약완료"><i class="dpn">[</i>완<i class="dpn">]</i></b> <span class="t1">13:00~17:00</span></a></li>
			<li><a href="?#★" class="st3"><b class="ic1" title="예약불가(운영 측 사정)"><i class="dpn">[</i>불<i class="dpn">]</i></b> <span class="t1">18:00~21:00</span></a></li>
			</ul>
			</div>
		</div></td>
		<td><div class="cell">
			<div class="date" title="날짜">22</div>
			<div class="menu">
			<ul>
			<li><a href="?#★" class="st1"><b class="ic1" title="예약가능"><i class="dpn">[</i>예<i class="dpn">]</i></b> <span class="t1">09:00~12:00</span></a></li>
			<li><a href="?#★" class="st2"><b class="ic1" title="예약완료"><i class="dpn">[</i>완<i class="dpn">]</i></b> <span class="t1">13:00~17:00</span></a></li>
			<li><a href="?#★" class="st3"><b class="ic1" title="예약불가(운영 측 사정)"><i class="dpn">[</i>불<i class="dpn">]</i></b> <span class="t1">18:00~21:00</span></a></li>
			</ul>
			</div>
		</div></td>
		<td class="sat"><div class="cell">
			<div class="date" title="날짜">23</div>
			<div class="menu">
			<ul>
			<li><a href="?#★" class="st1"><b class="ic1" title="예약가능"><i class="dpn">[</i>예<i class="dpn">]</i></b> <span class="t1">09:00~12:00</span></a></li>
			<li><a href="?#★" class="st2"><b class="ic1" title="예약완료"><i class="dpn">[</i>완<i class="dpn">]</i></b> <span class="t1">13:00~17:00</span></a></li>
			<li><a href="?#★" class="st3"><b class="ic1" title="예약불가(운영 측 사정)"><i class="dpn">[</i>불<i class="dpn">]</i></b> <span class="t1">18:00~21:00</span></a></li>
			</ul>
			</div>
		</div></td>
		</tr>
		<tr>
		<td class="sun"><div class="cell">
			<div class="date" title="날짜">24</div>
			<div class="menu">
			<ul>
			<li><a href="?#★" class="st1"><b class="ic1" title="예약가능"><i class="dpn">[</i>예<i class="dpn">]</i></b> <span class="t1">09:00~12:00</span></a></li>
			<li><a href="?#★" class="st2"><b class="ic1" title="예약완료"><i class="dpn">[</i>완<i class="dpn">]</i></b> <span class="t1">13:00~17:00</span></a></li>
			<li><a href="?#★" class="st3"><b class="ic1" title="예약불가(운영 측 사정)"><i class="dpn">[</i>불<i class="dpn">]</i></b> <span class="t1">18:00~21:00</span></a></li>
			</ul>
			</div>
		</div></td>
		<td><div class="cell">
			<div class="date" title="날짜">25</div>
			<div class="menu">
			<ul>
			<li><a href="?#★" class="st0"><b class="ic1" title="휴관일"><i class="dpn">[</i>휴<i class="dpn">]</i></b></a></li>
			</ul>
			</div>
		</div></td>
		<td><div class="cell">
			<div class="date" title="날짜">26</div>
			<div class="menu">
			<ul>
			<li><a href="?#★" class="st1"><b class="ic1" title="예약가능"><i class="dpn">[</i>예<i class="dpn">]</i></b> <span class="t1">09:00~12:00</span></a></li>
			<li><a href="?#★" class="st2"><b class="ic1" title="예약완료"><i class="dpn">[</i>완<i class="dpn">]</i></b> <span class="t1">13:00~17:00</span></a></li>
			<li><a href="?#★" class="st3"><b class="ic1" title="예약불가(운영 측 사정)"><i class="dpn">[</i>불<i class="dpn">]</i></b> <span class="t1">18:00~21:00</span></a></li>
			</ul>
			</div>
		</div></td>
		<td><div class="cell">
			<div class="date" title="날짜">27</div>
			<div class="menu">
			<ul>
			<li><a href="?#★" class="st1"><b class="ic1" title="예약가능"><i class="dpn">[</i>예<i class="dpn">]</i></b> <span class="t1">09:00~12:00</span></a></li>
			<li><a href="?#★" class="st2"><b class="ic1" title="예약완료"><i class="dpn">[</i>완<i class="dpn">]</i></b> <span class="t1">13:00~17:00</span></a></li>
			<li><a href="?#★" class="st3"><b class="ic1" title="예약불가(운영 측 사정)"><i class="dpn">[</i>불<i class="dpn">]</i></b> <span class="t1">18:00~21:00</span></a></li>
			</ul>
			</div>
		</div></td>
		<td><div class="cell">
			<div class="date" title="날짜">28</div>
			<div class="menu">
			<ul>
			<li><a href="?#★" class="st1"><b class="ic1" title="예약가능"><i class="dpn">[</i>예<i class="dpn">]</i></b> <span class="t1">09:00~12:00</span></a></li>
			<li><a href="?#★" class="st2"><b class="ic1" title="예약완료"><i class="dpn">[</i>완<i class="dpn">]</i></b> <span class="t1">13:00~17:00</span></a></li>
			<li><a href="?#★" class="st3"><b class="ic1" title="예약불가(운영 측 사정)"><i class="dpn">[</i>불<i class="dpn">]</i></b> <span class="t1">18:00~21:00</span></a></li>
			</ul>
			</div>
		</div></td>
		<td><div class="cell">
			<div class="date" title="날짜">29</div>
			<div class="menu">
			<ul>
			<li><a href="?#★" class="st1"><b class="ic1" title="예약가능"><i class="dpn">[</i>예<i class="dpn">]</i></b> <span class="t1">09:00~12:00</span></a></li>
			<li><a href="?#★" class="st2"><b class="ic1" title="예약완료"><i class="dpn">[</i>완<i class="dpn">]</i></b> <span class="t1">13:00~17:00</span></a></li>
			<li><a href="?#★" class="st3"><b class="ic1" title="예약불가(운영 측 사정)"><i class="dpn">[</i>불<i class="dpn">]</i></b> <span class="t1">18:00~21:00</span></a></li>
			</ul>
			</div>
		</div></td>
		<td class="sat"><div class="cell">
			<div class="date" title="날짜">30</div>
			<div class="menu">
			<ul>
			<li><a href="?#★" class="st1"><b class="ic1" title="예약가능"><i class="dpn">[</i>예<i class="dpn">]</i></b> <span class="t1">09:00~12:00</span></a></li>
			<li><a href="?#★" class="st2"><b class="ic1" title="예약완료"><i class="dpn">[</i>완<i class="dpn">]</i></b> <span class="t1">13:00~17:00</span></a></li>
			<li><a href="?#★" class="st3"><b class="ic1" title="예약불가(운영 측 사정)"><i class="dpn">[</i>불<i class="dpn">]</i></b> <span class="t1">18:00~21:00</span></a></li>
			</ul>
			</div>
		</div></td>
		</tr>
		<tr>
		<td class="sun"><div class="cell">
			<div class="date" title="날짜">31</div>
			<div class="menu">
			<ul>
			<li><a href="?#★" class="st1"><b class="ic1" title="예약가능"><i class="dpn">[</i>예<i class="dpn">]</i></b> <span class="t1">09:00~12:00</span></a></li>
			<li><a href="?#★" class="st2"><b class="ic1" title="예약완료"><i class="dpn">[</i>완<i class="dpn">]</i></b> <span class="t1">13:00~17:00</span></a></li>
			<li><a href="?#★" class="st3"><b class="ic1" title="예약불가(운영 측 사정)"><i class="dpn">[</i>불<i class="dpn">]</i></b> <span class="t1">18:00~21:00</span></a></li>
			</ul>
			</div>
		</div></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="sat"></td>
		</tr>
		<!-- ☆(코딩Hint!) 모바일에서 .cell 클릭하면 나옴. ex) -->
		<!-- <tr class="target">
		<td colspan="7">
			<div class="date blind" title="날짜">…</div>
			<div class="menu">…</div>
		</td>
		</tr> -->
		</tbody>
	</table>

</div>
<!-- /reserve1calendar1 -->

<script>/*<![CDATA[*/
	/** ◇◆ 달력셀클릭.아래TR생성.20150311.MoonYoungShin.
	 * Task) Advance
	 */
	(doTimeTableCell = function(){
		var $this = $('.reserve1calendar1 table.calendar1table1 td>.cell');
		var $that = $('.menu', $this);
		var $target = $('<tr class="target"><td colspan="7">' + '<div class="date blind">…</div><div class="menu">…</div>' + '</td></tr>');
		var $deco1 = $('<i class="deco1"></i>');
		$that.closest('td').css({background:'#fff'});
		var toggleTableCell = function(){

			// 대상(메뉴목록) 안보이면 기능 제거
			$that.filter(':visible').closest('tr').next('tr.target').detach().find('.date, .menu').empty();
			$that.filter(':visible').closest('.cell').attr({
				tabindex: '' // -1 하니 [CR] 에서 초점 보임.
			}).css({
				cursor: 'auto'
			}).off().find('.deco1').detach();

			// 대상(메뉴목록) 보이면 기능 동작
			$that.filter(':hidden').closest('.cell').attr({
				tabindex: '0'
			}).css({
				cursor: 'pointer'
			}).off().on('click keypress', function(){ // ☆ 키보드 누름에도 동작위해 keypress 추가
				// 토글) 날짜 비교로 활성 구분한다.
				if( $('>td .date', $target).text() != $('.date', $(this)).text() ){
					$(this).closest('tr').after($target);
					$('>td .date', $target).text( $('.date', $(this)).text() );
					$('>td .menu', $target).replaceWith( $('.menu', $(this)).clone() );
					$(this).append($deco1);
				}else{
					$target.detach().find('.date, .menu').empty();
					$deco1.detach();
				}
				return false;
			});

		};
		$(window).on('load resize', function(){
			toggleTableCell();
		});
	})();
/*]]>*/</script>





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