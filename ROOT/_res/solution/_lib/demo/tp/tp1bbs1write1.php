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
$pageTitle="글작성1"; ?>
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





<h1 class="hb1 h1">글작성1</h1>


<div class="ofh mgt2em">
	<h3 class="hb1 h3 fl mg0">신청자정보입력</h3>
	<p class="tar"><em class="required" title="필수항목">*</em> 는 필수 입력 <span class="dpib">항목입니다.</span></p>
</div>


<!-- panel1 -->
<div class="panel1 bg-default shadow">


<!-- writeform1 -->
<table class="writeform1 t01 tdpdlr2pct thcv0 bdsd fsxd">
	<caption class="pd0">
		<strong class="h1 blind">작성 폼</strong>
		<span class="summary1 blind"><!-- : ★표요약,구조,탐색방법 (아이디, 암호, 암호 확인, 이름, …) th 항목 모두 나열하세요. --></span>
	</caption>
	<col style="width:8em;" /><col />
	<tbody>
	<tr>
	<th scope="row"><label for="★1id">아이디 <em class="required" title="필수항목">*</em></label></th>
	<td>
		<input type="text" id="★1id" lang="en" />
		<a href="?" target="_blank" onclick="window.open(this.href,'','location=0,directories=0,resizable=1,status=0,toolbar=0,menubar=0,scrollbars=1,width=500,height=500,left=' + ((screen.availWidth-500)/2) + ',top=' + ((screen.availHeight-500)/2) + ''); return false;" title="새 창" class="button secondary">
			중복확인
		</a>
	</td>
	</tr>
	<tr>
	<th scope="row"><label for="★1password">암호 <em class="required" title="필수항목">*</em></label></th>
	<td>
		<div class="explain form-text1 dpb"><!-- [WA] 입력 전에 설명한다! -->
			※ 8자 이상. 영문자 숫자 특수문자 혼용
		</div>
		<input type="password" id="★1password" placeholder="a-z0-9!~)" lang="en" />
	</td>
	</tr>
	<tr>
	<th scope="row"><label for="★1password-check">암호 확인 <em class="required" title="필수항목">*</em></label></th>
	<td>
		<div class="w1explain"><!-- 폼콘트롤 우측 설명 배치 -->
			<div class="explain">
				※ 암호를 한번 더 입력하세요.
			</div>
			<input type="password" id="★1password-check" lang="en" class="mgr075em" />
		</div>
	</td>
	</tr>
	<tr>
	<th scope="row"><label for="★1name1">이름 <em class="required" title="필수항목">*</em></label></th>
	<td><input type="text" id="★1name1" placeholder="실명" /></td>
	</tr>
	<tr>
	<th scope="row"><span class="form-static1">성별</span></th>
	<td>
		<span class="dpib mgr075em">
			<input type="radio" name="★1gender1" id="★1gender1e0" checked="checked" /><label for="★1gender1e0" class="form-static1">남성</label>
		</span>
		<span class="dpib">
			<input type="radio" name="★1gender1" id="★1gender1e1" /><label for="★1gender1e1" class="form-static1">여성</label>
		</span>
	</td>
	</tr>
	<tr>
	<th scope="row"><label for="★1birthday1">생년월일</label></th>
	<td><input type="tel" id="★1birthday1" placeholder="19920522" /></td>
	</tr>
	<tr>
	<th scope="row"><label for="★1birthday2y">생년월일</label></th>
	<td>
		<span class="dpib">
			<select id="★1birthday2y" title="년">
				<option value="">년</option>
				<option value="2019">2019</option>
			</select><label for="★1birthday2y" class="mgl025em mgr05em">년</label>
		</span>
		<span class="dpib">
			<select id="★1birthday2m" title="월">
				<option value="">월</option>
				<option value="12">12</option>
			</select><label for="★1birthday2m" class="mgl025em mgr05em">월</label>
		</span>
		<span class="dpib">
			<select id="★1birthday2d" title="일">
				<option value="">일</option>
				<option value="31">31</option>
			</select><label for="★1birthday2d" class="mgl025em mgr05em">일</label>
		</span>
	</td>
	</tr>
	<tr>
	<th scope="row"><label for="★1email1">메일주소</label></th>
	<td><input type="text" id="★1email1" placeholder="account@emailserver.com" class="w100" lang="en" /></td>
	</tr>
	<tr>
	<th scope="row"><label for="★1email2">이메일</label></th>
	<td>
		<input type="text" id="★1email2" placeholder="account@emailserver.com" class="w100" lang="en" />
		<span class="dpib">
			<input type="checkbox" id="★1receiveEmail1" value="1" checked="checked" /><label for="★1receiveEmail1">응답메일 수신</label>
		</span>
	</td>
	</tr>
	<tr>
	<th scope="row"><label for="★1email3">이메일</label></th>
	<td>
		<input type="text" id="★1email3" placeholder="account" title="이메일 계정" class="ime-mode-inactive" />
		<span class="vam">@</span>
		<input type="text" id="★1email3inputEmailServer" placeholder="emailserver.com" title="이메일 서버 직접 입력" class="ime-mode-inactive" />
		<select id="★1email3selectEmailServer" title="이메일 서버" class="mgr05em">
			<option value="">직접 입력</option>
			<option value="naver.com">naver.com</option>
			<option value="daum.net">daum.net</option>
			<option value="gmail.com">gmail.com</option>
		</select>
		<span class="dpib">
			<input type="checkbox" id="★1receiveEmail2" value="1" checked="checked" /><label for="★1receiveEmail2">응답메일 수신</label>
		</span>
	</td>
	</tr>
	<tr>
	<th scope="row"><label for="★1homepage1">홈페이지</label></th>
	<td><input type="text" id="★1homepage1" placeholder="http://www.homepage.com/" class="w100" /></td>
	</tr>
	<tr>
	<th scope="row"><label for="★1phone1">전화번호</label></th>
	<td>
		<input type="text" id="★1phone1" size="4" maxlength="4" title="국번" />
		<span class="vam">-</span>
		<input type="text" id="★1phone1-mid" size="4" maxlength="4" title="중간 번호" />
		<span class="vam">-</span>
		<input type="text" id="★1phone1-last" size="4" maxlength="4" title="끝 번호" />
	</td>
	</tr>
	<tr>
	<th scope="row"><label for="★1phone2">전화번호</label></th>
	<td><input type="tel" id="★1phone2" /></td>
	</tr>
	<tr>
	<th scope="row"><label for="★1mphone1">휴대전화</label></th>
	<td>
		<input type="text" id="★1mphone1" size="3" maxlength="3" placeholder="010" title="서비스 번호" />
		<span class="vam">-</span>
		<input type="text" id="★1mphone1-mid" size="4" maxlength="4" placeholder="0000" title="중간 번호" />
		<span class="vam">-</span>
		<input type="text" id="★1mphone1-last" size="4" maxlength="4" placeholder="0000" title="끝 번호" />
	</td>
	</tr>
	<tr>
	<th scope="row"><label for="★1mphone2">휴대전화</label></th>
	<td>
		<select id="★1mphone2" title="서비스 번호">
		<option value="010">010</option>
		<option value="011">011</option>
		<option value="016">016</option>
		<option value="019">019</option>
		</select>
		<span class="vam">-</span>
		<input type="text" id="★1mphone2-mid" size="4" maxlength="4" placeholder="0000" title="중간 번호" />
		<span class="vam">-</span>
		<input type="text" id="★1mphone2-last" size="4" maxlength="4" placeholder="0000" title="끝 번호" />
	</td>
	</tr>
	<tr>
	<th scope="row"><label for="★1phone3">연락처 <em class="required" title="필수항목">*</em></label></th>
	<td>
		<input type="text" id="★1phone3" size="4" maxlength="4" title="연락처(휴대전화) 국번(서비스 번호)" />
		-
		<input type="text" id="★1phone3-mid" size="4" maxlength="4" title="연락처(휴대전화) 중간 번호" />
		-
		<input type="text" id="★1phone3-last" size="4" maxlength="4" title="연락처(휴대전화) 끝 번호" />
	</td>
	</tr>
	<tr>
	<th scope="row"><label for="★1zipcode1">주소</label></th>
	<td>
		<div class="w1explain type2">
			<div class="explain">
				※ 우편번호 링크를 통해서 입력하세요.
			</div>
			<span class="dpib mgr075em">
				<input type="text" id="★1★1zipcode1" size="3" maxlength="3" placeholder="000" title="우편번호 앞자리" />
				<span class="vam">-</span>
				<input type="text" id="★1★1zipcode1-last" size="3" maxlength="3" placeholder="000" title="우편번호 뒷자리" />
				<a href="../tp/tp1popup1zipcode2.jsp" target="_blank" onclick="window.open(this.href,'','location=0,directories=0,resizable=1,status=0,toolbar=0,menubar=0,scrollbars=1,width=480,height=640,left=' + ((screen.availWidth-480)/2) + ',top=' + ((screen.availHeight-640)/2) + ''); return false;" title="새 창" class="button">
					우편번호
				</a>
			</span>
		</div>
		<input type="text" id="★1★1address1" placeholder="상세 주소" title="상세 주소" class="w100" />
	</td>
	</tr>
	<tr>
	<th scope="row"><label for="★1★2zipcode1">주소<span class="dpib">(소재지)</span></label></th>
	<td>
		<input type="text" id="★1★2zipcode1" size="3" maxlength="3" placeholder="000" title="우편번호 앞자리" />
		<span class="vam">-</span>
		<input type="text" id="★1★2zipcode1-last" size="3" maxlength="3" placeholder="000" title="우편번호 뒷자리" />
		<a href="../tp/tp1popup1zipcode2.jsp" target="_blank" onclick="window.open(this.href,'','location=0,directories=0,resizable=1,status=0,toolbar=0,menubar=0,scrollbars=1,width=480,height=640,left=' + ((screen.availWidth-480)/2) + ',top=' + ((screen.availHeight-640)/2) + ''); return false;" title="새 창" class="button secondary">
			우편번호 검색
		</a>
		<input type="text" id="★1★2address1" placeholder="기본 주소" title="기본 주소" class="w100" />
		<input type="text" id="★1★2address1-d" placeholder="상세 주소" title="상세 주소" class="w100" />
	</td>
	</tr>
	<tr>
	<th scope="row"><label for="★1zipcode1">주소</label></th>
	<td>
		<div class="w1explain"><!-- 폼콘트롤 우측 설명 배치 -->
			<div class="explain">
				※ 우편번호 링크를 통해서 입력하세요.
			</div>
			<span class="dpib mgr075em">
				<input type="text" id="★1zipcode1" size="7" maxlength="7" readonly="readonly" title="우편번호" />
				<a href="../tp/tp1popup1zipcode2.jsp" target="_blank" rel="noopener" title="새 창" class="button secondary"
					onclick="window.open(this.href,'','location=0,directories=0,resizable=1,status=0,toolbar=0,menubar=0,scrollbars=1,width=480,height=640,left=' + ((screen.availWidth-480)/2) + ',top=' + ((screen.availHeight-640)/2) + ''); return false;">
					우편번호 <span class="blind">검색</span>
				</a>
			</span>
		</div>
		<input type="text" id="★1address1" placeholder="기본 주소" title="기본 주소" class="w100" />
		<input type="text" id="★1address1-d" placeholder="상세 주소" title="상세 주소" class="w100" />
	</td>
	</tr>

	<tr class="ttvam"><!-- ☆세로중앙정렬 -->
	<th scope="row"><label for="★1temp1" class="form-text1 mg0"><em class="em1">일이삼사오륙칠팔구십일이삼사오륙칠 일이삼사오륙칠팔구십일이삼사오륙칠</em></label></th>
	<td><input type="text" id="★1temp1" value="" /> </td>
	</tr>
	<tr>
	<th scope="row"><label for="★1subject">제목</label></th>
	<td><input type="text" id="★1subject" value="" class="w100" /></td>
	</tr>
	<tr>
	<th scope="row"><label for="★1textarea1">내용</label></th>
	<td>
		<div class="explain form-text1">※ 개인정보보호를 위해 주민번호, 주소, 전화번호 등은 내용에 남기지 마십시오.</div>
		<textarea id="★1textarea1" rows="5" cols="80" class="w100"></textarea>
	</td>
	</tr>
	<tr>
	<th scope="row"><span class="form-static1">첨부파일</span></th>
	<td>
		<div>
			<label for="★1file01">첨부파일1 :</label>
			<input type="file" id="★1file01" />
		</div>
		<div>
			<label for="★1file02">첨부파일2 :</label>
			<input type="file" id="★1file02" />
		</div>
	</td>
	</tr>
	<tr>
	<th scope="row"><label for="★1file1">첨부파일1</label></th>
	<td>
		<input type="file" id="★1file1" class="mgr075em" />
		<div class="explain form-text1">
			<em class="em2">이미지는 웹 접근성을 위해 적절한 대체텍스트를 제공해야 합니다.</em>
		</div>
		<textarea id="★1file1alt1" rows="2" cols="80" class="w100" placeholder="첨부파일1 대체텍스트" title="첨부파일1 대체텍스트"></textarea>
	</td>
	</tr>
	<tr>
	<th scope="row"><label for="★1file2">첨부파일2</label></th>
	<td><input type="file" id="★1file2" /></td>
	</tr>
	<tr>
	<th scope="row" class="vam"><label for="★1file2alt1" class="mgtb0">첨부파일2 <span class="dpib">대체텍스트</span></label></th>
	<td class="vam">
		<textarea id="★1file2alt1" rows="2" cols="80" class="w100" placeholder="첨부파일2 대체텍스트" title="첨부파일2 대체텍스트"></textarea>
	</td>
	</tr>
	<tr>
	<th scope="row"><label for="★1cite1">출처</label></th>
	<td><input type="text" id="★1cite1" class="w100" /></td>
	</tr>

	<tr>
	<th scope="row"><span class="form-static1">답변요청</span></th>
	<td>
		<div class="explain form-static1">답변요청을 하시겠습니까? &nbsp;&nbsp;</div>
		<span class="dpib vam">
			<input type="radio" name="★1radio2" id="★1radio2e0" checked="checked" /><label for="★1radio2e0">예</label>
			&nbsp;&nbsp;
			<input type="radio" name="★1radio2" id="★1radio2e1" /><label for="★1radio2e1">아니요</label>
		</span>
	</td>
	</tr>
	<tr>
	<th scope="row"><span class="form-static1">공개/비공개 <span class="dpib">선택</span></span></th>
	<td>
		<span class="dpib vam">
			<input type="radio" name="★1radio3" id="★1radio3e0" checked="checked" /><label for="★1radio3e0">공개</label>
		</span>
		<span class="form-static1">&nbsp;&nbsp;</span>
		<span class="dpib vam">
			<input type="radio" name="★1radio3" id="★1radio3e1" /><label for="★1radio3e1">비공개</label>
		</span>
	</td>
	</tr>
	<tr>
	<th scope="row"><span class="form-static1">내 권한</span></th>
	<td>
		<span class="dpib vam">
			<input type="checkbox" name="★1checkbox2" id="★1checkbox2e0" checked="checked" /><label for="★1checkbox2e0"> 조회</label>
		</span>
		<span class="form-static1">&nbsp;&nbsp;</span>
		<span class="dpib vam">
			<input type="checkbox" name="★1checkbox2" id="★1checkbox2e1" class="fl" /><label for="★1checkbox2e1" class="dpb ofh form-text1"> 작성/편집/수정/삭제</label>
		</span>
	</td>
	</tr>
	<tr>
	<th scope="row"><span class="form-static1">정보공개</span></th>
	<td>
		<span class="explain form-text1">일반인에게</span>
		<label for="★1openinfo" class="blind">공개옵션</label>
		&nbsp;
		<select id="★1openinfo" title="공개옵션">
		<option value="">공개</option>
		<option value="">비공개</option>
		</select>
		&nbsp;
		<span class="explain form-text1">하시겠습니까?</span>
	</td>
	</tr>
	<tr>
	<th scope="row"><span class="form-static1 blind">개인정보 수집 동의</span></th>
	<td>
		<span class="dpib form-text1 wwbw wbka">
			<input type="checkbox" name="★1checkbox3" id="★1checkbox3e0" class="fl" /><label for="★1checkbox3e0" class="dpb ofh form-text1"> 개인정보 수집에 동의합니다.</label>
		</span>
	</td>
	</tr>
	</tbody>
</table>
<!-- /writeform1 -->


<!-- infomenu1 -->
<div class="infomenu1 mg0 dott">
	<p class="center mgt1em mgb1em">
		<button type="submit" value="submit" class="button large submit">저장하기</button>
		<a href="?#★" class="button large default">취소하기</a>
	</p>
</div>
<!-- /infomenu1 -->


</div>
<!-- /panel1 -->


<?php //include "./tp1bbs1_foot_inc.php"?>





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