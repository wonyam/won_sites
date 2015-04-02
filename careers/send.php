<?php
/*
if(!isset($_POST['is_ajax'])) exit;
if(!isset($_POST['user_id'])) exit;
if(!isset($_POST['user_pw'])) exit;
$is_ajax=$_POST['is_ajax'];
$user_id = $_POST['user_id'];
$user_pw = $_POST['user_pw'];
$members = array('user1'=>array('pw'=>'pw1', 'name'=>'한놈'),
        'user2'=>array('pw'=>'pw2', 'name'=>'두시기'),
        'user3'=>array('pw'=>'pw3', 'name'=>'석삼'));
 
if(!$is_ajax) exit;
if(!isset($members[$user_id])) exit;
if($members[$user_id]['pw'] != $user_pw) exit;
setcookie('user_id',$user_id);
setcookie('user_name',$members[$user_id]['name']);
echo "success";	
*/
/*
if(!isset($_POST['is_ajax'])) exit;
if(!$is_ajax) exit;
if(!isset($_POST['name'])) exit;
if(!isset($_POST['phone'])) exit;
if(!isset($_POST['email'])) exit;
if(!isset($_POST['applyfor'])) exit;
if(!isset($_POST['availability'])) exit;
if(!isset($_POST['when'])) exit;
if(!isset($_POST['experience'])) exit;
if(!isset($_POST['transportation'])) exit;
*/
$err_yn = "0";
$smode = $_POST['smode'];
$sname = $_POST['sname'];
if (empty($sname)) {
	$err_message = "Please input your name.<br/>";
  $err_yn = "1";
}
$phone = $_POST['phone'];
if (empty($phone)) {
	$err_message = $err_message."Please input your phone number.<br/>";
  $err_yn = "1";
}
$email = $_POST['email'];
if (empty($email)) {
	$err_message = $err_message."Please input your email.<br/>";
  $err_yn = "1";
}

if($err_yn == "1") {
	$err_message = "Please input required information.";
}
$applyfor = $_POST['applyfor'];
$availability = $_POST['availability'];
$when = $_POST['when'];
$experience = $_POST['experience'];
$transportation = $_POST['transportation'];

/*
if (empty($applyfor)) {
	$err_message = $err_message."Please choose position applying for.<br/>";
}
if (empty($availability)) {
	$err_message = $err_message."Please choose availability.<br/>";
}
if (empty($when)) {
	$err_message = $err_message."Please input start date to work<br/>";
}
if (empty($experience)) {
	$err_message = $err_message."Please input years of experience<br/>";
}
if (empty($transportation)) {
	$err_message = $err_message."Please input about transportation<br/>";
}
*/

echo $err_message;

if(empty($err_message)) {

		$subject = "[Career application] $sname($applyfor, $availability)";
		$body = "";
		/*
		$body .= "Name : $sname<br>";
		$body .= "Phone number : $phone<br>";
		$body .= "Email : $email<br>";
		$body .= "Position applying for : $applyfor<br>";
		$body .= "<b>Availability</b><br>";
		$body .= "Are you looking for...? : $availability<br>";
		$body .= "When are you available to start work? : $when<br>";
		$body .= "Years of experience? : $experience<br>";
		$body .= "Do you have transportation? : $transportation<br>";
		*/
		
		$body .= "<html>";
		$body .= "<head>";
		$body .= "<title>Career application</title>";
		$body .= "</head>";
		$body .= "<body>";
		$body .= "<div style='width:500px'>";
		$body .= "<h4 style='padding-bottom:12px;margin-bottom:12px;border-bottom:1px solid #dcdcdc;'><b>Personal Information</b></h4>";
		$body .= "<table style='width:95%;'>";
		$body .= "<tr>";
		$body .= "<th><label for='name'><b>Name:</b></label></th>";
		$body .= "<td>".$sname."</td>";
		$body .= "<th><label for='phone'><b>Phone number:</b></label></th>";
		$body .= "<td>".$phone."</td>";
		$body .= "</tr>";
		$body .= "<tr>";
		$body .= "<th><label for='email'><b>Email:</b></label></th>";
		$body .= "<td>".$email."</td>";
		$body .= "</tr>";
		$body .= "</table>";
		$body .= "<div style='height:20px;'></div>";
		$body .= "<h4 style='padding-bottom:12px;margin-bottom:12px;border-bottom:1px solid #dcdcdc;'><b>Position applying for</b></h4>";
		$body .= "<div style='padding: 0 0 0 20px;'>";
		$body .= "".$applyfor."";
		$body .= "</div>";
		$body .= "<div style='height:20px;'></div>";
		$body .= "<h4 style='padding-bottom:12px;margin-bottom:12px;border-bottom:1px solid #dcdcdc;'><b>Availability</b></h4>";
		$body .= "<div>";
		$body .= "<table style='width:95%;'>";
		$body .= "<tr>";
		$body .= "<td><div style='padding: 5px 0 5px 5px;'><b>Are you looking for...?</b> ".$availability." </div>";
		$body .= "</td>";
		$body .= "</tr>";
		$body .= "<tr>";
		$body .= "<td><div for='when' style='padding: 5px 0 5px 5px;'><b>When are you available to start work?</b> ".$when."</div>";
		$body .= "</td>";
		$body .= "</tr>";
		$body .= "<tr>";
		$body .= "<td>";
		$body .= "<div for='experience' style='padding: 5px 0 5px 5px;'><b>Years of experience?</b> ".$experience."</div>";
		$body .= "</td>";
		$body .= "</tr>";
		$body .= "<tr>";
		$body .= "<td>";
		$body .= "<div for='transportation' style='padding: 5px 0 5px 5px;'><b>Do you have transportation?</b> ".$transportation."</div>";
		$body .= "</td>";
		$body .= "</tr>";
		$body .= "</table>";
		$body .= "</div>";
		$body .= "</body>";
		$body .= "</html>";
		
		//$admin_email = "받을 메일주소 입력";
		//$admin_email = "hr@kapstoneservices.com";
		$admin_email = "hyewon@mozaiccreative.ca";
		//$bcc = "보조 이메일 주소";
		//$bcc = "wonyam@gmail.com";
		
		if($smode == "send") {
			//파일첨부 시작
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
			//파일첨부 끝
			
			mailer($name, $email, $admin_email, $subject, $body, $type=1, $attach);
			echo "success";	
			//echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=euc-kr\">";
			//echo("<script>alert('폼메일이 발송되었습니다.');</script>");
			//echo("<script>location.href='form.php';</script>");
		}
	}


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