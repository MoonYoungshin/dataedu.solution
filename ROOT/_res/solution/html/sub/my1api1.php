<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221211 | @m | 요구반영. 결함개선. 고도화.
 * 20221216 | @m | 
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
<title>API 사용정보 | 데이터에듀 API</title>

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
	<h2 class="h1">API 사용정보</h2>
</div>
<!-- /cp1hg1 -->


<!-- cp1view1 -->
<div class="cp1view1">


<!-- cp1api1use1 -->
<div class="cp1api1use1">
	<div class="di1">
		<div class="dt1">
			<h3 class="hb2 h3">API ID,Key</h3>
		</div>
		<div class="dd1">
			<span class="t1">ID</span>
			<span class="t2">dolearn5ga3eea6d1f0c6</span>
		</div>
		<div class="dd1">
			<span class="t1">KEY</span>
			<span class="t2">08cae58dd38043b4a8fc1caa010f3c84</span>
		</div>
	</div>
</div>
<!-- /cp1api1use1 -->


<!-- cp1api1use1 type2 -->
<div class="cp1api1use1 type2">
	<div class="di1">
		<div class="dt1">
			<h3 class="hb2 h3">API 전체 사용량</h3>
		</div>
		<div class="dd1">
			<span class="t1">서비스 기간 : </span>
			<span class="t2">2022.12.10 - 2022.12.16 ( 07일 )</span>
		</div>
	</div>
</div>
<!-- /cp1api1use1 -->


<!-- cp1use1chart1 -->
<div class="cp1use1chart1">

	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script> -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script> -->

	<!-- 최신버전 v4.0.1 (20221216현재) -->
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<!-- 툴팁값 표시 not working -->
	<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>

	<script>/*<![CDATA[*/

		// 차트 기본값 전체 (이후 코드 적용). 20221211. 20221216 @m.
			// Chart.js v4.0.1
			Chart.defaults.font.color = '#fff';
			Chart.defaults.font.weight = '500';
			Chart.defaults.font.size = 14;
			Chart.defaults.font.family = "'Apple SD Gothic Neo', Roboto, Lato, 'Open Sans',OpenSans, 'Malgun Gothic', sans-serif";
			Chart.defaults.font.lineHeight = 1.2;

			// 범례 차트 간격 조정 not working
			Chart.Legend.fit = function() {
				this.height += 12;
			};

	/*]]>*/</script>

	<div class="w1myChart1">
		<div class="tg1">
			<span class="t1">총 사용량</span>
			<span class="t2">80%</span>
		</div>
		<canvas id="myChart1" width="400" height="400"></canvas>
	</div>

	<script>/*<![CDATA[*/
		/** ◇◆ 차트 :: 도넛. 20221211. 20221216. @m.
		 * Chart.js v2.9.4 )) v4.0.1
		 */
		(function(){

			var ctx = document.getElementById('myChart1').getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'doughnut',
				data: {
					labels: ['Audio', 'Vision', 'Language', 'Education', 'Video'],
					datasets: [{
						label: ' ',
						data: [30, 25, 20, 10, 15],
						borderWidth: 2,
						borderColor: '#fff',
						backgroundColor: ['#15a4e4', '#fe62c0', '#ffc328', '#ffadea', '#5056ff']
					}]
				},
				options: {
					plugins: {
						title: { // 제목
							display: false,
							color: '#222',
							font: {
								weight: '600',
								size: 18
							},
							text: '총 사용량'
						},
						legend: { // 범례
							display: true,
							//position: 'bottom',
							labels: {
								usePointStyle: true,
								boxWidth: 6,
								boxHeight: 6,
								color: '#222',
								font: {
									weight: '600',
									size: 14
								},
								padding: 14,
							}
						},
						tooltip: {
							usePointStyle: true,
							boxWidth: 10,
							boxHeight: 10,
							padding: 14
						}
					},
					animation: {
						duration: 200, // ms
					}
				}
			});

		})();
	/*]]>*/</script>


</div>
<!-- /cp1use1chart1 -->


<h3 class="hb2 h3">API 서비스별 사용량</h3>


<!-- cp1use1table1 -->
<div class="cp1use1table1">

	<table class="t1 w100 ttpdlr2pct lhD tttac ttvam ttwa-small-only">
		<caption>
			<strong class="h1 blind">API 서비스별 사용량</strong>
			<span class="summary1 blind">: 분류, 사용 서비스, 사용한 양 / 제공량, 사용 비율</span>
		</caption>
		<thead>
		<tr>
		<th scope="col">분류</th>
		<th scope="col">사용 서비스</th>
		<th scope="col">사용한 양 <span class="dpib">/ 제공량</span></th>
		<th scope="col">사용 비율</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>Audio API</td>
		<td><a href="#layer1detail1" class="a1 toggle" data-send-focus="that" title="상세 창 여닫기"><span class="t1">음성합성</span></a></td>
		<td>3  /  100</td>
		<td>0%</td>
		</tr>
		<tr>
		<td>Audio API</td>
		<td><a href="#layer1detail1" class="a1 toggle" data-send-focus="that" title="상세 창 여닫기"><span class="t1">음성인식</span></a></td>
		<td>1 / </td>
		<td>0%</td>
		</tr>
		<tr>
		<td>Vision API</td>
		<td><a href="#layer1detail1" class="a1 toggle" data-send-focus="that" title="상세 창 여닫기"><span class="t1">이미지 텍스트 인식</span></a></td>
		<td>1 / </td>
		<td>0%</td>
		</tr>
		<tr>
		<td>Vision API</td>
		<td><a href="#layer1detail1" class="a1 toggle" data-send-focus="that" title="상세 창 여닫기"><span class="t1">얼굴 인식</span></a></td>
		<td>1 / </td>
		<td>0%</td>
		</tr>
		<tr>
		<td>Vision API</td>
		<td><a href="#layer1detail1" class="a1 toggle" data-send-focus="that" title="상세 창 여닫기"><span class="t1">얼굴 모자이크</span></a></td>
		<td>1 / </td>
		<td>0%</td>
		</tr>
		<tr>
		<td>Language API</td>
		<td><a href="#layer1detail1" class="a1 toggle" data-send-focus="that" title="상세 창 여닫기"><span class="t1">문장교정</span></a></td>
		<td>1 / </td>
		<td>0%</td>
		</tr>
		<tr>
		<td>Language API</td>
		<td><a href="#layer1detail1" class="a1 toggle" data-send-focus="that" title="상세 창 여닫기"><span class="t1">한글발음화</span></a></td>
		<td>1 / </td>
		<td>0%</td>
		</tr>
		<tr>
		<td>Language API</td>
		<td><a href="#layer1detail1" class="a1 toggle" data-send-focus="that" title="상세 창 여닫기"><span class="t1">자연어 이해</span></a></td>
		<td>1 / </td>
		<td>0%</td>
		</tr>
		<tr>
		<td>Language API</td>
		<td><a href="#layer1detail1" class="a1 toggle" data-send-focus="that" title="상세 창 여닫기"><span class="t1">AI 독해</span></a></td>
		<td>1 / </td>
		<td>0%</td>
		</tr>
		</tbody>
	</table>

</div>
<!-- /cp1use1table1 -->


<!-- infomenu1 -->
<div class="infomenu1">

	<!-- pagination -->
	<div class="pagination" title="페이지 수 매기기">
		<span class="control">
			<!-- <span class="m first"><a title="처음 페이지"><i class="ic">처음</i></a></span> -->
			<span class="m prev"><a title="이전 페이지"><i class="ic">이전</i></a></span>
		</span>
		<span class="pages">
			<span class="m on"><a title="현재 1 페이지">1</a></span>
			<span class="m"><a href="?" title="2 페이지">2</a></span>
			<span class="m"><a href="?" title="3 페이지">3</a></span>
			<span class="m"><a href="?" title="4 페이지">4</a></span>
			<span class="m"><a href="?" title="5 페이지">5</a></span>
			<!-- <span class="m"><a href="?" title="6 페이지">6</a></span>
			<span class="m"><a href="?" title="7 페이지">7</a></span>
			<span class="m"><a href="?" title="8 페이지">8</a></span>
			<span class="m"><a href="?" title="9 페이지">9</a></span>
			<span class="m"><a href="?" title="10 페이지">10</a></span> -->
		</span>
		<span class="control">
			<span class="m next"><a href="?" title="다음 페이지"><i class="ic">다음</i></a></span>
			<!-- <span class="m last"><a href="?" title="마지막 페이지"><i class="ic">마지막</i></a></span> -->
		</span>
	</div>
	<!-- /pagination -->

</div>
<!-- /infomenu1 -->


</div>
<!-- /cp1view1 -->


<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/html/sub/inc_layer1detail1.php"; ?>


<script>/*<![CDATA[*/
	$(function(){
		// 레이어팝업 바로 확인
		//$('[href="#layer1detail1"]').first().triggerHandler('click');
		

		/** ◇◆ 클릭한 사용 서비스를 레이어창 제목으로. 20221211. 20221216. @m
		 */
		$('.cp1use1table1 [href="#layer1detail1"]').on('click', function(){
			//console.log( $(this).find('.t1').text() );
			$( $(this).attr('href') ).find('.tt1').text( $(this).find('.t1').text() );
		});


	});
/*]]>*/</script>





</div>
<!-- /container -->
</div>
<!-- /#body_content -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_footer.php"; ?>
</body>
</html>