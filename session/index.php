<?php
session_start();

$ss_usertype = isset($_SESSION["usertype"]) ? $_SESSION["usertype"] : "";
$ss_usercode = isset($_SESSION["usercode"]) ? $_SESSION["usercode"] : "";


switch($ss_usertype)
{
   case "ADMIN" :
   case "MEMBER" :
        $msg = '<font color="#FF0000">Hi，' . $ss_usercode . '<a href="logout.php">登出</a>' . ' 您好!</font>';
        break;
        
   default:
        $msg = '你尚未登入系統，請<a href="login.php">按這裡</a>登入！';
}


$html = <<< HEREDOC
<html><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>登入登出權限控制範例</title>
</head>
<body>

<p>{$msg}</p>
<p>
主功能表如下
<br><a href="page_a.php">page_a</a>---任何人使用的網頁
<br><a href="page_b.php">page_b</a>---會員使用的網頁
<br><a href="page_c.php">page_c</a>---系統管理者使用的網頁
<br>
</p>

</body>
</html>
HEREDOC;

echo $html;
?>