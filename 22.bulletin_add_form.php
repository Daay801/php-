<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=23.bulletin_add.php>
                    標    題：<input type=text name=title><br> //標題：使用 <input type=text name=title> 元素輸入。
                    內    容：<br><textarea name=content rows=20 cols=20></textarea><br> 內容：使用 <textarea name=content rows=20 cols=20></textarea> 元素輸入。
                    佈告類型：<input type=radio name=type value=1>系上公告  佈告類型：使用 <input type=radio> 元素選擇，有三個選項：系上公告、獲獎資訊、徵才資訊。

                            <input type=radio name=type value=2>獲獎資訊
                            <input type=radio name=type value=3>徵才資訊<br>
                    發布時間：<input type=date name=time><p></p> 發布時間：使用 <input type=date> 元素輸入。

                    <input type=submit value=新增佈告> <input type=reset value=清除>  提供了兩個按鈕：一個用於提交表單，另一個用於清除已輸入的內容。
                </form>
            </body>
        </html>
        ";
    }
?>
