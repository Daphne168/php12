<?php

$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>檔案上傳</title>
</head>
<body>
<h1>檔案上傳</h1>
<form name="form1" method="post" action="upload_save.php" enctype="multipart/form-data"> 
  <input type="hidden" name="MAX_FILE_SIZE" value="500000"> 
  檔案：<input type="file" name="file"><br>
  <input type="submit" value="上傳">
</form>
</body>
</html>
HEREDOC;

echo $html;
?>