<?php 
require_once 'PHPMailerAutoload.php';
include "dbconfig.php";

$sql="SELECT * FROM `social_link`";
$res=mysqli_query($con,$sql);
$row_link=mysqli_fetch_assoc($res);

$serv=str_replace("www.", "", $_SERVER['HTTP_HOST']);
$serv=str_replace(".net", "", $serv);
$serv=str_replace(".com", "", $serv);

$message="
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<!-- If you delete this tag, the sky will fall on your head -->
<meta name=\"viewport\" content=\"width=device-width\" />

<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
<title>".$_POST['subject']." | ".$_POST['name']."</title>
	
<style>
/* ------------------------------------- 
		GLOBAL 
------------------------------------- */
* { 
	margin:0;
	padding:0;
}
* { font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; }

img { 
	max-width: 100%; 
}
.collapse {
	margin:0;
	padding:0;
}
body {
	-webkit-font-smoothing:antialiased; 
	-webkit-text-size-adjust:none; 
	width: 100%!important; 
	height: 100%;
}


/* ------------------------------------- 
		ELEMENTS 
------------------------------------- */
a { color: #2BA6CB;}

.btn {
	text-decoration:none;
	color: #FFF;
	background-color: #666;
	padding:10px 16px;
	font-weight:bold;
	margin-right:10px;
	text-align:center;
	cursor:pointer;
	display: inline-block;
}

p.callout {
	padding:15px;
	background-color:#ECF8FF;
	margin-bottom: 15px;
}
.callout a {
	font-weight:bold;
	color: #2BA6CB;
}

table.social {
/* 	padding:15px; */
	background-color: #ebebeb;
	
}
.social .soc-btn {
	padding: 3px 7px;
	font-size:12px;
	margin-bottom:10px;
	text-decoration:none;
	color: #FFF;font-weight:bold;
	display:block;
	text-align:center;
}
a.fb { background-color: #3B5998!important; }
a.tw { background-color: #1daced!important; }
a.gp { background-color: #DB4A39!important; }
a.ms { background-color: #000!important; }

.sidebar .soc-btn { 
	display:block;
	width:100%;
}

/* ------------------------------------- 
		HEADER 
------------------------------------- */
table.head-wrap { width: 100%;}

.header.container table td.logo { padding: 15px; }
.header.container table td.label { padding: 15px; padding-left:0px;}


/* ------------------------------------- 
		BODY 
------------------------------------- */
table.body-wrap { width: 100%;}


/* ------------------------------------- 
		FOOTER 
------------------------------------- */
table.footer-wrap { width: 100%;	clear:both!important;
}
.footer-wrap .container td.content  p { border-top: 1px solid rgb(215,215,215); padding-top:15px;}
.footer-wrap .container td.content p {
	font-size:10px;
	font-weight: bold;
	
}


/* ------------------------------------- 
		TYPOGRAPHY 
------------------------------------- */
h1,h2,h3,h4,h5,h6 {
font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; line-height: 1.1; margin-bottom:15px; color:#000;
}
h1 small, h2 small, h3 small, h4 small, h5 small, h6 small { font-size: 60%; color: #6f6f6f; line-height: 0; text-transform: none; }

h1 { font-weight:200; font-size: 44px;}
h2 { font-weight:200; font-size: 37px;}
h3 { font-weight:500; font-size: 27px;}
h4 { font-weight:500; font-size: 23px;}
h5 { font-weight:900; font-size: 17px;}
h6 { font-weight:900; font-size: 14px; text-transform: uppercase; color:#444;}

.collapse { margin:0!important;}

p, ul { 
	margin-bottom: 10px; 
	font-weight: normal; 
	font-size:14px; 
	line-height:1.6;
}
p.lead { font-size:17px; }
p.last { margin-bottom:0px;}

ul li {
	margin-left:5px;
	list-style-position: inside;
}

/* ------------------------------------- 
		SIDEBAR 
------------------------------------- */
ul.sidebar {
	background:#ebebeb;
	display:block;
	list-style-type: none;
}
ul.sidebar li { display: block; margin:0;}
ul.sidebar li a {
	text-decoration:none;
	color: #666;
	padding:10px 16px;
/* 	font-weight:bold; */
	margin-right:10px;
/* 	text-align:center; */
	cursor:pointer;
	border-bottom: 1px solid #777777;
	border-top: 1px solid #FFFFFF;
	display:block;
	margin:0;
}
ul.sidebar li a.last { border-bottom-width:0px;}
ul.sidebar li a h1,ul.sidebar li a h2,ul.sidebar li a h3,ul.sidebar li a h4,ul.sidebar li a h5,ul.sidebar li a h6,ul.sidebar li a p { margin-bottom:0!important;}



/* --------------------------------------------------- 
		RESPONSIVENESS
		Nuke it from orbit. It's the only way to be sure. 
------------------------------------------------------ */

/* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
.container {
	display:block!important;
	max-width:600px!important;
	margin:0 auto!important; /* makes it centered */
	clear:both!important;
}

/* This should also be a block element, so that it will fill 100% of the .container */
.content {
	padding:15px;
	max-width:600px;
	margin:0 auto;
	display:block; 
}

/* Let's make sure tables in the content area are 100% wide */
.content table { width: 100%; }


/* Odds and ends */
.column {
	width: 300px;
	float:left;
}
.column tr td { padding: 15px; }
.column-wrap { 
	padding:0!important; 
	margin:0 auto; 
	max-width:600px!important;
}
.column table { width:100%;}
.social .column {
	width: 280px;
	min-width: 279px;
	float:left;
}

/* Be sure to place a .clear element after each set of columns, just to be safe */
.clear { display: block; clear: both; }


/* ------------------------------------------- 
		PHONE
		For clients that support media queries.
		Nothing fancy. 
-------------------------------------------- */
@media only screen and (max-width: 600px) {
	
	a[class='btn'] { display:block!important; margin-bottom:10px!important; background-image:none!important; margin-right:0!important;}

	div[class='column'] { width: auto!important; float:none!important;}
	
	table.social div[class='column'] {
		width:auto!important;
	}

}
</style>

</head>
 
<body style=\"background:#eee\">
<br>


<!-- BODY -->
<table class=\"body-wrap\">
	<tr>
		<td></td>
		<td class=\"container\" bgcolor=\"#FFFFFF\">

			<div class=\"content\">
			<table>
				<tr>
					<td>
						
    					<h3>".$serv."</h3>
						
						<!-- A Real Hero (and a real human being) -->
						<p><img src=\"https://www.bargreen.com/skin/frontend/ultimo/bargreen/images/thanksforcontact.jpg\" /></p><!-- /hero -->
						
						<!-- Callout Panel -->
						<p class=\"callout\">
							Watch ".$serv." provides you Live Sports Stream Service
						</p><!-- /Callout Panel -->
						
						<h3></h3>
						<p>Thank you for contacting us. One of our support team member will get in touch with you as soon as possible. We really appreciate your cooperation.</p>
						<p>This is an auto generated message please don’t reply to it.</p>
						<p>Best Regards,</p>
						<p>".$serv."</p>
												
						<br/>
						<br/>							
												
						<!-- social & contact -->
						<table class=\"social\" width=\"100%\">
							<tr>
								<td>
									
									<!--- column 1 -->
									<table align=\"left\" class=\"column\">
										<tr>
											<td>
												<h5 >Connect with Us:</h5>
												<p ><a href='".$row_link['facebook']."' class=\"soc-btn fb\">Facebook</a> 
												<a href='".$row_link['twitter']."' class=\"soc-btn tw\">Twitter</a> 
												<a href='".$row_link['google']."' class=\"soc-btn gp\">Google+</a></p>
											</td>
										</tr>
									</table><!-- /column 1 -->	
									
									<!--- column 2 -->
									<table align=\"left\" class=\"column\">
										<tr>
											<td>				
																			
												<h5>Contact Info:</h5>												
												<p>Phone: <strong>+1-631-440-3811</strong><br/>
                                                Email: <strong><a href='mailito:".$emails."'>".$emails."</a></strong></p>
                
											</td>
										</tr>
									</table><!-- /column 2 -->
									
									<span class=\"clear\"></span>	
									
								</td>
							</tr>
						</table><!-- /social & contact -->
					
					
					</td>
				</tr>
			</table>
			</div>
									
		</td>
		<td></td>
	</tr>
</table><!-- /BODY -->

<!-- FOOTER -->
<table class=\"footer-wrap\">
	<tr>
		<td></td>
		<td class=\"container\">
			
				<!-- content -->
				<div class=\"content\">
				<table>
				<tr>
					<td align=\"center\">
						<p>
							<a href=\"#\">Terms</a> |
							<a href=\"#\">Privacy</a> |
							<a href=\"#\"><unsubscribe>Unsubscribe</unsubscribe></a>
						</p>
					</td>
				</tr>
			</table>
				</div><!-- /content -->
				
		</td>
		<td></td>
	</tr>
</table><!-- /FOOTER -->

</body>
</html>
";

$server =  str_replace("www.", "", $_SERVER['HTTP_HOST']);

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'mail.'.$server;
$mail->Port = 465;
$mail->SMTPSecure = "ssl";
$mail->SMTPAuth = true;

$sql = "SELECT * FROM `smtp` WHERE email='$emails'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);

    $mail->Username = "contact@tvcnw.com";
    $mail->Password = "he@3#Q;5dW8^";
    
$host=str_replace("www.", "", $_SERVER['HTTP_HOST']);
$host=str_replace(".com", "", $host);
$host=str_replace(".net", "", $host);
$host=strtoupper($host);
$mail->setFrom($row['email'], $host);
$_POST['email'];
$mail->addAddress("contact@tvcnw.com", "test");


if ($mail->addReplyTo($_POST['email'])) {
    $mail->Subject = 'Thanks for Contact Us';
    //$mail->WordWrap = 50000;               // set word wrap
    $mail->Priority = 1; 
    $mail->IsHTML(true); 
    $mail->Body    = $message;
    $mail->AltBody = $message;
        if (!$mail->send()) {
           $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            $msg = 'Message sent! Thanks for contacting us.';
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }

    
    ///////////////////////////////////////////////////////////////////////////
$server =  str_replace("www.", "", $_SERVER['HTTP_HOST']);

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'mail.'.$server;
$mail->Port = 465;
$mail->SMTPSecure = "ssl";
$mail->SMTPAuth = true;

$sql = "SELECT * FROM `smtp` WHERE email='$emails'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);

    $mail->Username = $row['email'];
    $mail->Password = $row['password'];
    
$host=str_replace("www.", "", $_SERVER['HTTP_HOST']);
$host=str_replace(".com", "", $host);
$host=str_replace(".net", "", $host);
$host=strtoupper($host);
$mail->setFrom($row['email'], $host);

$mail->addAddress($row['email'], $_POST['name']);

if ($mail->addReplyTo($_POST['email'])) {
    $mail->Subject = 'Thanks for Contact Us';
    //$mail->WordWrap = 50000;               // set word wrap
    $mail->Priority = 1; 
    $mail->IsHTML(true); 
    $mail->Body    = $_POST['msg'];
    $mail->AltBody = $_POST['msg'];
        if (!$mail->send()) {
            $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            $msg = 'Message sent! Thanks for contacting us.';
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }
?>