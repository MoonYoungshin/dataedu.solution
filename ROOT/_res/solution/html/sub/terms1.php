<!DOCTYPE html>
<?php
/**
 * 20221026 | @m | 최초작성
 * 20221028 | @m | 요구반영. 결함개선. 고도화.
 * 20221104 | @m |
 * 20221202 | @m |
 */

include "../../share/inc/connect.php"; // 접속경로 (( "../../share/inc/connect.php"
?>
<html lang="ko">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="author" content="데이터에듀">
<meta name="keywords" content="데이터에듀 솔루션 API">
<meta name="description" content="데이터에듀 솔루션 API">
<title>이용약관 | 데이터에듀 API</title>

<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/html_head.php"; ?>

</head>
<body class="type2">
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_header.php"; ?>
<!-- #body_content -->
<div id="body_content">
<!-- container -->
<div class="container clearfix">





<!-- cp1tabs1 -->
<div id="cp1tabs1" class="cp1tabs1">
	<ul>
	<li class="m1 column on"><a href="terms1.php"><span class="t1">이용약관</span><i class="ic1"></i></a></li>
	<li class="m3 column"><a href="privacy1.php"><span class="t1">개인정보처리방침</span><i class="ic1"></i></a></li>
	</ul>
</div>
<!-- /cp1tabs1 -->


<!-- cp1view1 -->
<div class="cp1view1">

	<h2 class="hb2 h2">이용약관</h2>

	<div class="tar">
		2022.11.25
	</div>
	<br />

	<h3 class="hb2 h3">제 1장. 총칙 </h3>

	<h4 class="hb2 h4">제 1조 (목적)</h4>
	이 이용약관은 ㈜데이터에듀(이하 “회사”라 합니다.)의 API 플랫폼 서비스인 데이터에듀 에이아이(DATAEDU AI) 서비스(이하 “서비스”라 합니다.)를 이용하는 회원과 제공자인 ㈜데이터에듀 사이의 권리 및 의무를 규정하는 것을 그 목적으로 합니다.<br>

	<h4 class="hb2 h4">제 2조 (용어의 정의)</h4>
	1.	“서비스”라 함은 구현되는 단말기와 상관없이 회원 혹은 웹사이트 방문자가 이용할 수 있는 체험하기 등 개발 지원을 위해 회사가 회원에게 제공하는 모든 인공지능 서비스를 의미합니다.<br>
	2.	“회원”이라 함은 회사의 서비스에 접속하여 회원등록을 한 자로서, 본 약관에 따라 회사가 제공하는 API 서비스를 이용하는 자를 말합니다.<br>
	3.	“API”라 함은 Application Programming Interface의 약자로 회원이 본인의 시스템을 통해 회사가 제공하는 다양한 인공지능 기술을 이용하기 위한 인터페이스를 의미하며, “API 서비스”란 회사가 그와 같은 API를 회원에게 제공하는 것을 의미합니다.<br>

	<h4 class="hb2 h4">제 3조 (약관의 효력 및 변경)</h4>
	1.	회사는 이 약관의 내용을 회원이 쉽게 알 수 있도록 초기화면 또는 링크로 연결된 화면에 게시하거나 기타의 방법으로 회원에게 공지함으로 효력이 발생합니다.<br>
	2.	회사는 약관의 규제에 관한 법률, 정보통신망 이용 촉진 및 정보보호 등에 관한 법률(이하 정보통신망법) 등 관련법을 위배하지 않는 범위에서 약관의 내용을 개정할 수 있습니다.<br>
	3.	회사가 약관을 개정할 경우에는 적용일자 및 개정사유를 명시하여 현행약관과 함께 제1항의 방식에 따라 개정약관 적용일자 7일 전부터 적용일자 전일까지 공지합니다. 단, 회원에게 불리한 약관 개정의 경우에 공지 외에 일정기간 전자우편 또는 로그인 시의 팝업 등의 전자적 수단을 통해 개별적으로 명확히 통지하도록 합니다.<br>
	4.	회사가 전항에 따라 개정약관을 공지 또는 통지하면서 회원에게 위 기간 내에 의사표시를 하지 않으면 의사표시가 표명된 것으로 본다는 뜻을 명확하게 공지 또는 통지하였음에도 회원이 명시적으로 거부 의사표시를 하지 않은 경우, 회원이 개정약관에 동의한 것으로 간주합니다.<br>
	5.	회원이 개정된 약관에 동의하지 않을 경우 회사는 개정 약관의 내용을 적용할 수 없으며, 회사 또는 회원이 이용계약을 해지할 수 있습니다.<br>

	<h4 class="hb2 h4">제 4조 (약관 외 준칙)</h4>
	1.	회사는 필요의 경우 특정 서비스에 대한 별도의 약관 또는 개별 정책을 정할 수 있으며, 본 약관과 별도의 약관 또는 개별정책의 내용이 상충되는 경우에는 별도의 약관 또는 개별 정책을 우선으로 합니다.<br>
	2.	본 약관에 명시되지 않은 사항에 대해서는 관계법령 또는 회사가 제공하는 부가서비스에 관한 별도의 약관 또는 이용지침 등의 규정에 따릅니다.<br>

	<br>
	<h3 class="hb2 h3">제 2장. 서비스 제공 및 이용</h3>

	<h4 class="hb2 h4">제 5조 (이용 계약의 성립)</h4>
	1.	서비스 이용계약은 회원이 되고자 하는 자(이하 “가입신청자”) 약관의 내용에 동의를 한 다음 회원가입신청을 하고 회사가 이러한 신청에 대하여 승낙함으로써 체결됩니다.<br>
	2.	회사는 가입신청자의 신청에 대하여 서비스 이용을 승낙함을 원칙으로 합니다. 다만, 회사는 다음 각 호에 해당하는 신청에 대해 승낙을 하지 않거나 사후에 이용계약을 해지할 수 있습니다.<br>
	<div class="mgl1em">
		①	실명이 아니거나 또는 타인의 명의를 사용하여 신청한 경우<br>
		②	허위 정보를 기재하거나, 회사가 제시하는 내용을 기재하지 않은 경우<br>
		③	악성 프로그램 및 버그를 이용하거나 시스템 취약점을 악용하는 등 부정한 방법을 서비스에 사용한 경우<br>
		④	부정한 행위나 과정을 통해 공공질서 및 미풍양속에 저해되는 활동을 하는 경우<br>
		⑤	영리를 추구할 목적으로 서비스를 악용하는 경우<br>
		⑥	이용자의 귀책사유로 인하여 승인이 불가능하거나 기타 규정한 제반 사항을 위반하며 신청하는 경우<br>
	</div>
	3.	제 1항에 따른 신청에 있어 회사는 회원의 종류에 따라 전문기관을 통해 실명확인 및 본인인증을 요청할 수 있습니다.<br>
	4.	회사는 서비스 관련 서리의 여유가 없거나 기술상 서비스 제공이 곤란한 경우 승낙을 유보할 수 있습니다.<br>
	5.	회사는 본 조 제 1항, 2항, 3항, 4항에 의해 회원가입이 거절, 유보, 철회된 경우, 원칙적으로 가입신청자가 기재한 연락처로 통지하여야 합니다. 가입신청자의 부정확한 기재사항으로 인한 연락처의 불명으로 통지를 하지 못하였을 경우 회사는 그에 대한 책임이 없으며, 가입신청자는 문의를 통해 확인을 할 의무가 있습니다.<br>

	<h4 class="hb2 h4">제 6조 (회원에 대한 통지 및 공지)</h4>
	1.	회사는 회원이 회원가입 신청시 등록한 이메일 또는 휴대전화 등 회원이 수신에 동의한 수단을 활용하여 회원에 대한 각종 고지나 통지를 이행할 수 있습니다.<br>
	2.	회원에게 공통적으로 적용되는 내용을 고지 또는 통지할 경우, 회사는 1주일 이상 웹사이트 화면에 게시하거나 로그인 시의 팝업 등의 전자적 수단을 통해 공지함으로써 회원에 대한 개별 고지나 통지를 갈음할 수 있습니다. 다만, 회원의 권리나 의무에 중대한 영향을 미치는 사항일 경우 게시기간을 연장하여 공지합니다.<br>

	<h4 class="hb2 h4">제 7조 (회원 정보 입력 및 변경)</h4>
	1.	회원은 개인정보관리 페이지를 통하여 언제든지 본인의 개인정보를 열람하고 수정할 수 있습니다. 다만, 서비스 관리를 위해 필요한 이메일과 이름은 수정이 불가능 합니다.<br>
	2.	회원은 회원가입신청 시 기재한 사항이 변경되었을 경우 온라인으로 수정을 하거나 서비스 내 문의창구 및 기타 방법으로 회사에 대하여 그 변경사항을 알려야 합니다.<br>
	3.	제 2항의 변경사항을 회사에 알리지 않아 발생하는 불이익에 대하여 회사는 책임을 지지 않습니다.<br>

	<h4 class="hb2 h4">제 8조 (데이터의 저장 및 활용)</h4>
	1.	회원이 등록한 데이터(음성입력, 파일 등)에 대한 권리는 기본적으로 회원 본인에게 있습니다.<br>
	2.	회사는 회원에게 더 나은 서비스를 제공하기 위해 회원이 서비스를 이용하는 과정에서 입력하는 데이터를 저장하여 서비스 품질 개선 및 성능 향상 그리고 회원에 대한 서비스의 고도화 및 최적화 등의 목적으로 활용할 수 있습니다.<br>

	<h4 class="hb2 h4">제 9조 (서비스 관련 권리 및 관리)</h4>
	1.	서비스 저작권(프로그램의 소스코드, 실행파일 및 UI/UX, 삽입된 이미지 등 프로그램과 관련된 모든 저작물을 포함함)은 회사(혹은 원저작자)에게 있으며, 이용자는 본 이용약관에서 정한 바에 따른 제한적 사용권만을 취득할 뿐, 그 외 서비스에 대한 어떠한 권리도 취득하지 않습니다.<br>
	2.	서비스에 삽입되는 모든 서비스 관련 등록 상표권은 회사에게 있으며, 회원은 해당 상표권들에 대해 어떠한 권리도 취득할 수 없습니다.<br>
	3.	본 이용약관의 어떠한 내용도 약관에서 정한바에 따른 제한적 사용권을 넘어 회사의 소스코드, 실행파일 및 UI/UX, 혹은 서비스의 상표명, 서비스 마크, 로고 및 고유한 브랜드 표시를 사용할 권리를 회원에게 부여하는 것으로 해석되지 않습니다.<br>

	<h4 class="hb2 h4">제 10조 (개인정보의 보호, 로그 정보의 보관 및 활용 등)</h4>
	1.	회사는 서비스를 운영함에 있어 회원에 대한 각종 고지사항의 전달, 이용실태에 대한 조사를 위해 회원의 연락처 등 개인정보를 보관합니다.<br>
	2.	회사는 개인정보 수집 및 이용동의에 따라 회원부터 수집한 정보만을 보관하며, 회사 내부의 개인정보 처리방침에 따라 이를 철저히 관리합니다.<br>
	3.	회사는 서비스 제공을 종국적으로 중단하거나 회원이 개인정보 수집 및 이용동의를 철회한 경우에는 지체없이 회원의 개인정보를 파기합니다.<br>
	4.	회사는 기타 개인정보보호 법령에서 정한 내용을 준수합니다.<br>
	5.	회사는 API 서비스를 제공함에 따라 발생하는 로그정보를 해지신청 시점까지 보관할 수 있으며, 그와 같이 보관하고 있는 회원 로그정보를 서비스 성능향상을 위한 연구 용도 및 서비스 만족도 향상을 위해 활용할 수 있습니다.<br>

	<h4 class="hb2 h4">제 11조 (서비스의 제공 변경 및 중지)</h4>
	1.	회사는 안정적인 서비스 제공을 위하여 운영상, 기술상의 필요에 따라 제공하고 있는 서비스의 전부 또는 일부를 변경할 수 있습니다.<br>
	2.	서비스를 구성하고 있는 제 3자에게 기술적 문제나 운영상 문제 등이 발생하면 서비스는 언제든 중단될 수 있으며, 회사는 이에 대한 책임을 지지 않습니다.<br>
	3.	회사는 서비스의 내용, 이용방법, 이용시간에 대하여 변경이 있는 경우에는 변경사유, 변경될 서비스의 내용 및 적용일자를 명시하여 변경 전에 해당 서비스 초기화면에 공지합니다.<br>
	4.	회사는 무료로 제공되는 서비스의 일부 또는 전부를 회사의 정책 및 운영의 필요상 수정, 중단, 변경할 수 있으며, 이에 대하여 관련법에 특별한 규정이 없는 한 회원에게 별도의 보상을 하지 않습니다.<br>
	5.	회사는 컴퓨터 등 정보통신설비의 보수점검, 교체 및 고장, 통신두절 또는 운영상 상당한 이유가 있는 경우 서비스의 제공을 일시적으로 중단할 수 있습니다. 이 경우 회사는 제 6조에서 정한 방법으로 회원에게 통지합니다. 다만, 회사가 사전에 통지할 수 없는 부득이한 사유가 있는 경우, 해당 사유가 해소된 후 즉시 사후에 통지할 수 있습니다.<br>
	6.	회사는 서비스의 제공에 필요한 경우 정기점검을 실시할 수 있으며, 정기점검시간은 웹사이트를 통해 공지한 바에 따릅니다.<br>

	<h4 class="hb2 h4">제 12조 (서비스 이용계약의 해지 및 손해배상)</h4>
	1.	회원은 언제든지 이용계약 해지 신청을 할 수 있으며, 회사는 관련법령 등이 정하는 바에 따라 이를 즉시 처리하여야 합니다.<br>
	2.	회원이 이용계약을 해지할 경우, 회사는 관련법령 및 개인정보처리방침에 따라 회원 정보를 보유하는 경우를 제외하고는 해지 즉시 회원의 모든 데이터를 삭제합니다.<br>
	3.	이용계약 해지로 인해 발생한 불이익에 대한 책임은 회원 본인이 부담하여야 하며, 이용계약이 종료되면 회사는 회원에게 부가적으로 제공한 각종 혜택을 회수할 수 있습니다.<br>
	4.	회사 또는 회원이 본 약관의 규정을 위반함으로 인하여 발생하게 되는 경우, 본 약관을 위반한 당사자는 다른 당사자에게 발생한 손해를 배상해야 합니다.<br>

	<h4 class="hb2 h4">제 13조 (서비스 회원 행동규범 및 서비스 이용제한)</h4>
	1.	회사는 회원이 본 약관의 의무를 위반하거나 서비스의 정상적인 운영을 방해한 경우, 경고, 일시정지, 영구이용정지 등 서비스 이용을 제한할 수 있습니다.<br>
	2.	회사는 전항에도 불구하고 아래 관련법령에 따른 각 호를 위반하는 사유가 발생하거나 확인이 된 경우 즉시 영구이용정지를 할 수 있습니다. 본 항에 따른 영구이용정지 시 서비스 이용을 통해 획득한 수익 등 기타 혜택 등도 모두 소멸되며, 회사는 이에 대해 별도로 보상하지 않습니다.<br>
	<div class="mgl1em">
		①	타인의 아이디(ID)와 비밀번호를 도용하는 행위<br>
		②	주민등록법을 위반한 명의도용 및 결제도용을 한 경우<br>
		③	저작권법 및 컴퓨터프로그램보호법을 위반한 불법프로그램의 제공 및 운영방해를 한 경우<br>
		④	정보통신망법을 위반한 불법통신 및 해킹, 악성프로그램의 배포, 접속권한 초과행위 등의 행위를 한 경우<br>
		⑤	서비스를 통하여 전송된 내용의 출처를 위장하는 행위<br>
	</div>
	3.	회사가 서비스 이용을 제한하거나 이용계약을 해지하는 경우, 서비스 이용 제한 또는 해지 사유를 본 약관에 따라 회원에게 통지합니다.<br>
	4.	회원은 본 조항에 따른 이용제한 또는 이용계약의 해지에 대해 회사가 정한 절차에 따른 이의신청을 할 수 있습니다. 이 때, 이의가 정당하다고 회사가 인정하는 경우 회사는 즉시 서비스의 이용을 재개합니다.<br>
	5.	회사의 서비스 이용제한 또는 이용계약의 해지에 정당한 사유가 있는 경우에 회사는 서비스 이용제한 또는 이용계약의 해지로 인하여 회원이 입은 손해를 배상하지 않습니다.<br>

	<br>
	<h3 class="hb2 h3">제 3장. 의무 및 책임</h3>

	<h4 class="hb2 h4">제 14조 (회사의 의무)</h4>
	1.	회사는 관련법령과 본 약관이 금지하거나 미풍양속에 반하는 행위를 하지 않으며, 계속적이고 안정적으로 서비스를 제공하기 위하여 최선을 다하여 노력합니다.<br>
	2.	회사는 회원이 안전하게 서비스를 이용할 수 있도록 개인정보보호를 위한 보안시스템을 갖추며, 개인정보처리방침을 공지하고 이를 준수합니다.<br>
	3.	회사는 서비스 이용과 관련하여 회원으로부터 제기된 의견이나 불만이 정당하다고 판단될 경우에는 이를 수용하고 처리할 의무가 있습니다. 또한 회원이 제기한 의견이나 불만사항에 대해서는 전자우편이나 게시판을 활용해 해당 회원에게 처리과정 및 결과를 전달합니다.<br>

	<h4 class="hb2 h4">제 15조 (회원의 의무)</h4>
	1.	회원은 이 약관에 의하여 회원의 정보를 제공하여야 하는 경우에는 진실되고 적법한 정보를 제공하여야 하며, 허위 또는 불법 정보 제공으로 인해 발생한 불이익에 대해서는 보호받지 못합니다.<br>
	2.	회원은 이 약관 및 회사가 서비스에서 고지하는 내용을 준수하여야 하며, 이 약관 및 고지내용을 위반하거나 이행하지 아니하여 발생하는 모든 손실, 손해에 대하여 책임을 부담할 수 있습니다.<br>
	3.	회원이 본인의 계정 정보를 소홀히 관리하거나, 제3자에게 이용을 승낙함으로써 발생하는 손해에 대한 책임은 회원 본인에게 책임이 있습니다.<br>
	4.	회원이 다음 행위를 행하는 경우 회사는 제20조에 따라 서비스 이용을 제한할 수 있으며, 이 경우 발생하는 모든 책임은 회원에게 있습니다. 회사는 필요한 경우 회원의 금지행위 사실을 관련 정부기관 또는 사법기관에 통지할 수 있습니다.<br>
	<div class="mgl1em">
		①	타인의 개인 정보, 결제수단, 외부계정 등을 도용하여 서비스를 이용하는 행위 또는 제3자에게 접속권한을 부여하는 행위<br>
		②	신청 또는 변경 시 허위 내용을 등록하는 행위<br>
		③	회사의 임직원, 운영자, 기타 관계자를 사칭하는 행위<br>
		④	일체의 가공행위를 통하여 서비스를 복제, 분해 또는 모방 기타 변형하는 행위<br>
		⑤	회사의 서버에 부하를 일으켜 회사의 정상적인 활동을 방해하는 행위<br>
		⑥	회사 및 기타 제3자의 저작권 등 지적재산권에 대한 침해하는 행위<br>
		⑦	회사 및 기타 제3자의 명예를 손상시키거나 업무를 방해하는 행위<br>
		⑧	회사의 동의 없이 영리, 영업, 광고, 정치활동 등을 목적으로 서비스를 사용하는 행위<br>
		⑨	전산, 정보기기의 오작동을 유발시킬 수 있는 컴퓨터 바이러스, 해킹, 악성코드 등의 프로그램을 유포하는 행위<br>
		⑩	이 약관에 위배되는 내용을 회사에 요구하는 행위<br>
		⑪	기타 불법적이거나 부당한 행위<br>
	</div>

	<h4 class="hb2 h4">16조 (회사의 책임 제한)</h4>
	1.	회사는 무료로 제공되는 서비스의 완전성, 무결성, 적절성 등을 보증하지 않습니다.<br>
	2.	회사는 서비스를 통해 무료로 제공되는 각종 컨텐츠의 정확성, 적절성 등을 보증하지 않으며, 제공되는 컨텐츠는 회사의 사정에 따라 변경될 수 있습니다.<br>
	3.	회원은 서비스를 자신의 책임하에 본 이용약관 및 관계법령을 준수하여 적법하게 이용해야 하며, 회사가 회원의 서비스를 위한 위법행위에 대해 책임을 지지는 않습니다.<br>
	4.	회사는 제 3의 개발자로 하여금 서비스에서 이용 가능한 API를 개발∙배포하도록 허락할 수 있습니다. 각 API는 그 개발자의 책임으로 제공되는 서비스이므로, API 개발∙배포∙이용과정에서 발생하는 일체의 문제에 대한 책임은 그 담당 개발자가 지며, 회사는 원칙적으로 이에 대한 책임을 지지 않습니다. 또한 회사는 위법하거나 제 3자의 권리를 침해하는 내용을 제공하거나 정상적으로 동작하지 않는 등 회사의 API 운영정책을 위배하는 서비스에 대해서는 그 제공을 중단시킬 수 있습니다.<br>
	5.	제 3의 개발자가 개발∙배포한 API를 통해 전자상거래 등에서의 소비자보호에 관한 법률 상의 통신판매 또는 통신판매중개가 이루어지는 경우, 회사는 통신판매의 당사자 또는 통신판매중개자가 아니므로, 해당 API를 통해 이루어진 거래에 대한 책임을 지지 않습니다.<br>

	<br>
	<h3 class="hb2 h3">제 4장 서비스 유지보수 및 장애처리</h3>

	<h4 class="hb2 h4">제 17조 (개인정보의 보호 및 관리)</h4>
	1.	회사는 고객에게 서비스를 제공하기 위해 필수적인 서버 등의 장비에 대해 항상 고객들이 이용하기에 적절한 수준으로 유지 및 보수할 책임이 있습니다.<br>
	2.	고객은 시스템 보안을 위해 필요한 조치(패치 작업, 보안 조치 등)를 다하여야 합니다.<br>

	<h4 class="hb2 h4">제 18조 (보안상 긴급상황)</h4>
	1.	보안상 심각하고 시급을 요하는 프로그램의 결함이나 장애 또는 그에 준하는 사건이 발생하면 회사에서 고객의 해당 부분을 일괄적으로 패치 작업할 수 있습니다.<br>
	2.	보안상 심각하고 시급을 요하는 경우 회사는 고객의 인증관련 정보를 응급 변경할 수 있습니다.<br>
	3.	본 조의 제 1항 및 제 2항의 긴급상황 대처 전 회사는 공지나 이메일을 통해 고객에게 이를 알려야 합니다. 만약 상황이 긴급하여 이를 알리기 어려움이 있다면, 회사는 조치를 끝낸 후라도 이를 공지나 이메일을 통해 고객에게 알려야 합니다.<br>

	<br>
	<h3 class="hb2 h3">제 5장 기타</h3>

	<h4 class="hb2 h4">제 19조 (개인정보의 보호 및 관리)</h4>
	1.	회사는 개인정보 보호법 등 관련 법령에서 정하는 바에 따라 회원의 개인정보를 보호하기 위해 노력합니다. 개인정보 보호 및 사용에 대해서는 관련 법령 및 개인정보처리방침이 적용됩니다.<br>
	2.	회사는 회원의 귀책사유로 인하여 노출된 회원의 회원정보를 포함한 모든 정보에 대해서 일체의 책임을 지지 않습니다.<br>
	3.	회사는 정보통신망 이용촉진 및 정보보호 등에 관한 법률 및 동법 시행령에 따라 1년 이상 서비스를 이용하지 않은 회원의 개인정보를 보호하기 위해 개인정보 파기 등의 필요한 조치를 취합니다. 또한 회사는 객관적으로 계정정보 도용 피해가 우려되는 경우에는 회원정보의 보호 및 운영의 효율성을 위해 임시조치, 이용제한, 계정정보 삭제 등 필요한 조치를 취할 수 있습니다.<br>
	4.	회사는 회원의 분쟁대응 및 분쟁예방을 지원하기 위하여 고객이 업로드한 데이터(음성 및 동영상)의 인식 처리결과에 대한 데이터(인식 결과 및 실행 로그)를 인식 시점으로부터 3일간 보관하며, 보관 기간 이후에는 삭제합니다.<br>
	5.	회원은 서비스 이용권한, 기타 이용계약상 지위를 타인에게 양도, 증여, 담보제공 등의 처분행위를 할 수 없습니다.<br>
	6.	회사는 귀책사유 없는 이메일 또는 비밀번호의 유출, 양도, 대여로 인한 손실이나 손해에 대하여 책임을 지지 않습니다.<br>

	<h4 class="hb2 h4">제 20조 (부정이용 금지 및 차단)</h4>
	1.	회사는 다음 각호에 해당하는 경우를 부정 이용행위로 봅니다.<br>
	<div class="mgl1em">
		①	동일한 ID로 2대 이상의 기기에서 동시접속이 발생하는 경우<br>
		②	동일한 ID로 다수의 PC 또는 IP에서 서비스를 이용하는 경우<br>
		③	서비스 이용 중, 복제프로그램을 실행하는 경우<br>
	</div>
	2.	회사는 전항에 따른 부정 회원이 발견되었을 경우, 다음 각호에 따른 조치를 취할 수 있습니다.<br>
	<div class="mgl1em">
		①	1차 발견 시, 전자우편, 팝업창을 통하여 경고합니다.<br>
		②	2차 발견 시, 강제 탈퇴 처리하며 회사의 법률 대리인을 통한 고발조치와 민사소송을 진행하게 됩니다.<br>
	</div>
	3.	회원은 전항 제 2호의 조치를 이유로, 서비스 이용기간의 연장을 요구할 수 없습니다.<br>
	4.	회원은 회사로부터 본 조의 제 2항 조치에 이의가 있는 경우, 회사의 법률 대리인을 통해 소명할 수 있습니다.<br>
	5.	부정이용 식별방법 및 차단<br>
	<div class="mgl1em">
		①	회사는 회원의 서비스 이용 중에 수집ㆍ확인된 IP정보 등의 자료를 토대로, 서버를 통하여 부정이용 여부를 분류, 확인합니다.<br>
		②	회사는 이용자가 서비스 이용 중에 복제프로그램을 실행시키거나 동일한 ID로 동시 접속을 하는 경우, 서비스 이용 접속을 강제로 종료시킵니다.<br>
	</div>

	<h4 class="hb2 h4">제 21조 (면책)</h4>
	1.	회사는 다음 각 호의 어느 하나에 해당하는 사유에 의해 회원에게 손해가 발생한 경우 손해 배상을 하지 않으며 책임이 면제됩니다.<br>
	<div class="mgl1em">
		①	통신망의 사용불가 및 장애, 천재지변 또는 국가비상사태, 정전 및 이에 준하는 불가항력 상황이 발생한 경우<br>
		②	회원의 고의나 과실 등의 귀책사유에 의한 경우<br>
		③	서비스의 장애가 타 사업자가 제공하는 서비스에 의한 경우<br>
		④	서비스 점검이 불가피하여 사전에 공지한 경우로 회사의 고의, 과실이 없는 경우<br>
		⑤	홈페이지에 사전 공지된 정기점검으로 서비스를 중지했을 경우<br>
		⑥	회원의 스마트기기, PC 등의 각종 유무선 장치 사용 환경으로부터 문제가 발생하는 경우<br>
		⑦	회원 또는 제 3자가 서비스와 관련하여 게재한 정보, 자료, 사실의 신뢰도, 정확성 등의 내용인 경우<br>
		⑧	회원간 또는 회원과 제 3자 상호간에 서비스를 매개로 하여 거래 등을 한 경우<br>
		⑨	기타 회사의 고의 또는 과실이 아닌 사유로 서비스 장애가 발생하거나 회원의 정보 또는 자료에 손상이 있는 경우<br>
	</div>
	2.	회사는 회원의 귀책사유로 인한 서비스 이용의 중지, 사용제한, 데이터 삭제, 장애, 불이익에 대하여는 책임을 지지 않습니다.<br>
	3.	회사는 무료로 제공되는 서비스 이용과 관련하여 관련법령에 특별한 규정이 없는 한 책임을 지지 않습니다.<br>

	<h4 class="hb2 h4">제 22조 (재판권 및 준거법)</h4>
	1.	본 약관은 대한민국법령에 의하여 규정되고 이행됩니다.<br>
	2.	본 약관에 명시되지 않은 상황에 대해서는 관련법령에 의하고, 법에 명시되지 않은 부분에 대하여는 관습에 의합니다.<br>
	3.	회사와 회원간 발생한 분쟁에 관한 소송은 제소 당시의 회사의 주소에 의한 관할 지방법원을 전속관할로 합니다.<br>
	4.	해외에 주소나 거소가 있는 회원의 경우 회사와 회원간 발생한 분쟁에 관한 소송은 전항에도 불구하고 대한민국 서울중앙지방법원을 관할법원으로 합니다.<br>

</div>
<!-- /cp1view1 -->





</div>
<!-- /container -->
</div>
<!-- /#body_content -->
<?php include $_SERVER['DOCUMENT_ROOT'].$sitePath."/share/inc/sub_footer.php"; ?>
</body>
</html>