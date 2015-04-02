<?php
header('Content-Type: application/json');

$smode 							= $_POST['smode'];
$cname 							= $_POST['cname'];
$caddress 					= $_POST['caddress'];
$phone 							= $_POST['phone'];
$email 							= $_POST['email'];
$construction 			= $_POST['construction'];
$janitorial 				= $_POST['janitorial'];
/*
$certi_name				  = $_POST['certi_name'];
$certi_acquired 		= $_POST['certi_acquired'];
$certi_expiration 	= $_POST['certi_expiration'];
$equipment 					= $_POST['equipment'];
$labour 						= $_POST['labour'];
$provinces 					= $_POST['provinces'];
$insurance 					= $_POST['insurance'];
$wcb 								= $_POST['wcb'];
*/

$err_yn = "0";

//if (empty($sname)||empty($lname)) {
if (empty($cname)) {
	$err_message_cname = "Please input your company name.<br/>";
	$err_yn = "1";
}
if (empty($caddress)) {
	$err_message_caddress = "Please input your company adress.<br/>";
	$err_yn = "1";
}
if (empty($phone)) {
	$err_message_phone = "Please input your phone number.<br/>";
	$err_yn = "1";
}
if (empty($email)) {
	$err_message_email = "Please input your email.<br/>";
	$err_yn = "2";
}
if (!empty($construction)) {
	$construction_val 	= implode(" | ", $construction);
}
if (!empty($janitorial)) {
	$janitorial_val 		= implode(" | ", $janitorial);
}

//echo $err_message;
$data = array(
    'Id'  => 0,
    'err_message_cname' => $err_message_cname,
    'err_message_caddress' => $err_message_caddress,
    'err_message_phone' => $err_message_phone,
    'err_message_email' => $err_message_email
);

//if(empty($err_message)) {
if($err_yn == "0") {

		$subject = "[SUB-CONTRACTOR REGISTRATION] $cname ";
		$body = "";
		
		$body .= "<html>";
		$body .= "<head>";
		$body .= "<title>Career application</title>";
		$body .= "</head>";
		$body .= "<body>";
		$body .= "<div style='width:500px'>";
		
		
		$body .= "<h4 style='padding-bottom:12px;margin-bottom:12px;border-bottom:1px solid #dcdcdc;font-weight:bold;'>Company Information</h4>";
		$body .= "<table style='width:100%;'>";
		$body .= "<tr>";
		$body .= "<td><b>Name of Company:</b> ".$cname."</td>";
		$body .= "</tr>";
		$body .= "<tr>";
		$body .= "<td><b>Company Address:</b> ".$caddress."</td>";
		$body .= "</tr>";
		$body .= "<tr>";
		$body .= "<td>";
		$body .= "<table style='width:100%;'>";
		$body .= "<tr>";
		$body .= "<td><b>Phone:</b> ".$phone."</td>";
		$body .= "<td><b>Email:</b> ".$email."</td>";
		$body .= "</tr>";
		$body .= "</table>";
		$body .= "</td>";
		$body .= "</tr>";
		$body .= "</table>";
		$body .= "<div style='height:20px'></div>";
		$body .= "<h4 style='padding-bottom:12px;margin-bottom:12px;border-bottom:1px solid #dcdcdc;font-weight:bold;'>What type of work do you normally perform</h4>";
		$body .= "<table style='width:100%'>";
		$body .= "<tr>";
		$body .= "<td style='width:23%;'>";
		$body .= "<b>Construction: </b>";
		$body .= "</td>";
		$body .= "<td style='width:77%;'>".$construction_val."</td>";
		$body .= "</tr>";
		$body .= "<tr>";
		$body .= "<td colspan='2'>";
		$body .= "<div style='height:10px;'></div>";
		$body .= "<div style='border-style:dashed;border-width:1px;border-color: #dcdcdc;'></div>";
		$body .= "<div style='height:10px;'></div>";
		$body .= "</td>";
		$body .= "</tr>";
		$body .= "<tr>";
		$body .= "<td style='width:23%;'>";
		$body .= "<b>Janitorial & Clean Air:</b>";
		$body .= "</td>";
		$body .= "<td style='width:77%;'>".$janitorial_val."</td>";
		$body .= "</tr>";
		$body .= "</table>";
		
		/*
		$body .= "<div style='height:20px'></div>";
		$body .= "<h4 style='padding-bottom:12px;margin-bottom:12px;border-bottom:1px solid #dcdcdc;font-weight:bold;'>Other (please list)</h4>";
		$body .= "<table style='width:100%'>";
		$body .= "<tr>";
		$body .= "<td><b>Certification:</b>";
		$body .= "<table style='width:100%'>";
		$body .= "<tr>";
		$body .= "<td>".$certi_name."</td>";
		$body .= "<td>";
		$body .= "(Acquired Date: ".$certi_acquired.", ";
		$body .= "Expiration Date: ".$certi_expiration.")";
		$body .= "</td>";
		$body .= "</tr>";
		$body .= "</table>";
		$body .= "</td>";
		$body .= "</tr>";
		$body .= "<tr>";
		$body .= "<td><b>Equipment available and quantities:</b><br /> ".$equipment."</td>";
		$body .= "</tr>";
		$body .= "<tr>";
		$body .= "<td><b>Labour availability and quantities:</b><br /> ".$labour."</td>";
		$body .= "</tr>";
		$body .= "<tr>";
		$body .= "<td><b>What Provinces can you work in?</b><br /> ".$provinces."</td>";
		$body .= "</tr>";
		$body .= "<tr>";
		$body .= "<td><b>Do you have General Liability Insurance? </b><br /> ".$insurance."</td>";
		$body .= "</tr>";
		$body .= "<tr>";
		$body .= "<td><b>Do you have valid WCB for your employee?</b><br /> ".$wcb."</td>";
		$body .= "</tr>";
		$body .= "</table>";
		*/
		
		$body .= "</div>";
		$body .= "</body>";
		$body .= "</html>";
		
		//$admin_email = "받을 메일주소 입력";
		$admin_email = "hr@kapstoneservices.com";
		//$admin_email = "hyewon@mozaiccreative.ca";
		//$bcc = "보조 이메일 주소";
		//$bcc = "hyewon@mozaiccreative.ca";
		
		if($smode == "send") {
			//파일첨부 시작
			/*
			for($i=1;$i<=2;$i++) {
				$file[$i] = $_FILES['userfile'.$i]['name'];
				
				$target[$i] = "/tmp/".$file;
		
				if (move_uploaded_file($_FILES['userfile'.$i]['tmp_name'], $target[$i])) {
					chmod("$target[$i]", 0777);
				}
				
				$attach[$i] = attach_file($file[$i], $target[$i]);
				//업로드 파일을 삭제한다.
				@unlink($target[$i]);
			}
			*/
			//파일첨부 끝
			
			mailer($name, $email, $admin_email, $subject, $body, $type=1, $attach);
			//echo "success";	
			//array_push($data, "success" => 'Y');  
			//echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=euc-kr\">";
			//echo("<script>alert('폼메일이 발송되었습니다.');</script>");
			//echo("<script>location.href='form.php';</script>");
		}
	}
	$data['process'] = $err_yn;
	echo json_encode($data);

// type : text=0, html=1, text+html=2
function mailer($from_name, $from_email, $to_email, $subject, $content, $type=1, $file="") {
	$conf['charset'] = "euc-kr";

	//$from_name   = "=?$conf[charset]?B?" . base64_encode($from_name) . "?=";
	//$subject = "=?$conf[charset]?B?" . base64_encode($subject) . "?=";

	$header  = "Return-Path: <$from_email>\n";
	$header .= "From: $from_name <$from_email>\n";
	$header .= "Reply-To: <$from_email>\n";
	$header .= "MIME-Version: 1.0\n";

	if ($file != "") {
		$boundary = uniqid("http://localhost");
		$header .= "Content-type: MULTIPART/MIXED; BOUNDARY=\"$boundary\"\n\n";
		$header .= "--$boundary\n";
	}

	if ($type) {
		$header .= "Content-Type: TEXT/HTML; charset=$conf[charset]\n";
		if ($type == 2) $content = nl2br($content);
	} else {
		$header .= "Content-Type: TEXT/PLAIN; charset=$conf[charset]\n";
		$content = stripslashes($content);
	}
	$header .= "Content-Transfer-Encoding: BASE64\n\n";
	$header .= chunk_split(base64_encode($content)) . "\n";

	for($i=1;$i<=3;$i++) {
		if($file[$i]['name'] == '') continue;
		$file_name = $file[$i]['name'];
		$header .= "\n--$boundary\n";
		$header .= "Content-Type: application/octet-stream\n";
		$header .= "Content-Transfer-Encoding: BASE64\n";
		$header .= "Content-Disposition: attachment; filename=\"$file_name\"\n";

		$header .= "\n";
		$header .= base64_encode($file[$i]['data']);
		$header .= "\n";
	}

	$header .= "--$boundary--\n\n";
	//1번.
	@mail($to_email, $subject, "", $header);

	//서버 환경에 따라서 아래처럼 옵션값을 넣어줘야 발송이 되는 호스팅이 있습니다.
	//1번으로 발송이 안 될 경우 2번처럼 해보세요.(1번 주석처리, 2번 주석 제거)

	//2번.
	//@mail($to_email, $subject, "", $header,'-f'.$from_email);
}
// 파일을 첨부함
function attach_file($file_name, $file) {
	$fp = @fopen($file, "r");
	$tmpfile = array(
		"name" => $file_name,
		"data" => @fread($fp, @filesize($file)));
	@fclose($fp);
	return $tmpfile;
}
?>