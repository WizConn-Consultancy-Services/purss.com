<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd"><html lang="en-US"><head><!-- IMP: Copyright 2001, The Horde Project. IMP is under the GPL. --><!-- Horde Project: http://horde.org/ | IMP: http://horde.org/imp/ --><!--    GNU Public License: http://www.fsf.org/copyleft/gpl.html   -->

<title>Mail :: Welcome</title><link href="login.php_files/css.css" rel="stylesheet" type="text/css"><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-color: #4F87BF;
}
-->
</style></head>



<body onload="setFocus()">
<script language="JavaScript" type="text/javascript">
<!--

function setFocus()
{
    document.implogin.imapuser.focus();
}

function submit_login()
{
    if (document.implogin.server[document.implogin.server.selectedIndex].value.substr(0, 1) == "_") {
        return false;
    }
    if (document.implogin.imapuser.value == "") {
        alert('Please provide your username and password');
        document.implogin.imapuser.focus();
        return false;
    } else if (document.implogin.pass.value == "") {
        alert('Please provide your username and password');
        document.implogin.pass.focus();
        return false;
    } else {
        return true;
    }
}
//-->
</script>

<script language="JavaScript1.2" type="text/javascript">
<!--
function enter_key_trap(e)
{
    var keyPressed;

    if (document.layers) {
        keyPressed = String.fromCharCode(e.which);
    } else if (document.all) {
        keyPressed = String.fromCharCode(window.event.keyCode);
    } else if (document.getElementById) {
        keyPressed = String.fromCharCode(e.keyCode);
    }

    if ((keyPressed == "\r" || keyPressed == "\n") && (submit_login())) {
        document.implogin.submit();
    }
}
//-->
</script>

<form action="http://65.19.179.2/horde/imp/redirect.php" method="post" name="implogin">
<input type="hidden" name="actionID" value="105">
<input type="hidden" name="url" value="">
<input type="hidden" name="mailbox" value="INBOX">

<table align="center" border="0" width="300">
<tbody><tr>
  <td align="center" colspan="2" class="header">
  Welcome to the Purss Family Web Mail Portal </td>
</tr>
        <tr>
          <td colspan="2"><font color="#ffffff">
To access your Web Mail enter the following:<br>
Email Address: &lt;username&gt;@purss.com<br>
Password: &lt;password&gt;<br>
Mail Server: mail.purss.com</font>
</td>
        </tr>
<tr>
    <td align="right" class="light"><b>Email Address</b></td>
    <td align="left"><input type="text" tabindex="1" name="imapuser" value="****@purss.com"></td>
    </tr>
<tr>
    <td align="right" class="light"><b>Password</b></td>
    <td align="left"><input type="password" tabindex="2" name="pass"></td>
</tr>

<tr>
    <td align="right" class="light"><b>Mail Server</b></td>
    <td class="light" align="left">
        <input name="server" type="text" tabindex="3" value="mail.purss.com">
    </td>
</tr>

<tr>
    <td><input type="hidden" name="folders" value=""></td>
</tr>

<tr>
    <td align="right" class="light"><b>Language</b></td>
    <td align="left" class="light"><select name="new_lang" onchange="selectLang()"><option value="zh_CN">Chinese (Simplified)</option><option value="zh_TW">Chinese (Traditional)</option><option value="cs_CZ">Czech</option><option value="da_DK">Dansk</option><option value="de_DE">Deutsch</option><option value="en_GB">English (GB)</option><option value="en_US" selected="selected">English (US)</option><option value="es_ES">Español</option><option value="et_EE">Eesti</option><option value="fr_FR">Français</option><option value="el_GR">Greek</option><option value="it_IT">Italiano</option><option value="ja_JP">Japanese</option><option value="ko_KR">Korean</option><option value="nl_NL">Nederlands</option><option value="nb_NO">Norsk bokmål</option><option value="pl_PL">Polski</option><option value="pt_PT">Português</option><option value="pt_BR">Português Brasileiro</option><option value="ru_RU">Russian (Windows)</option><option value="ru_RU.KOI8-R">Russian (KOI8-R)</option><option value="sk_SK">Slovak</option><option value="fi_FI">Suomi</option><option value="sv_SE">Svenska</option><option value="uk_UA">Ukranian</option></select></td>
</tr>

<tr>
    <td> </td>
    <td align="left" class="light"><input type="submit" class="button" name="button" tabindex="4" value="Log in" onclick="return submit_login();"></td>
</tr>

</tbody></table>
</form>

<script language="JavaScript" type="text/javascript">
<!--


function selectLang()
{
    // We need to reload the login page here, but only if the user hasn't
    // already entered a username and password.
    if (document.implogin.imapuser.value == '' &&
        document.implogin.pass.value == '') {
        var lang_page = 'login.php?new_lang=' + document.implogin.new_lang[document.implogin.new_lang.selectedIndex].value;
        self.location = lang_page;
    }
}

//-->
</script>

<script language="JavaScript1.2" type="text/javascript">
<!--
// Setup the enter keytrap code
if (window.document.captureEvents != null) {
    window.document.captureEvents(Event.KEYPRESS);
    window.document.onkeypress = enter_key_trap;
}
//-->
</script>
<!-- This file contains any "Message Of The Day" Type information -->
<!-- It will be included below the log-in form on the login page. -->
<script language="JavaScript" type="text/javascript">
<!--
if (parent.frames.horde_main) parent.document.title = 'Mail :: Welcome';
//-->
</script>
</body></html>