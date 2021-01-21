<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>將網頁上的資料儲存在瀏覽器</h1>
        <h2>請輸入姓名</h2>
        <input type="text" class="textContent">
        <input type="button" class="btnClass" value="點擊">
        <input type="button" class="btnCall" value="點擊呼叫名字">

        <script>
            var btn = document.querySelector('.btnClass');
            var call = document.querySelector('.btnCall');
            function saveName(e) {
                //宣告一個變數，綁定輸入欄，讀取&紀錄使用者輸入的文字
                var str = document
                    .querySelector('.textContent')
                    .value;
                localStorage.setItem('myName', str); //把輸入的內容存在瀏覽器
            }
            function callName(e) {
                str = localStorage.getItem('myName'); //取出已存在瀏覽器的資料
                alert('你的名字叫做' + str);
            }

            btn.addEventListener('click', saveName)
            call.addEventListener('click', callName)
        </script>

    </body>
</html>