<html>
    <head><title>新增使用者</title></head>
    <body>
<?php        
    error_reporting(0); 這行設置了錯誤報告，將錯誤報告級別設置為 0，這樣 PHP 將不會報告任何錯誤。
    session_start(); 啟動了一個新的 session 或者重用了現有的 session。
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{    
        echo "
            <form action=15.user_add.php method=post>
                帳號：<input type=text name=id><br> 用於輸入新使用者的帳號。
                密碼：<input type=text name=pwd><p></p> 用於輸入新使用者的密碼。
                <input type=submit value=新增> 提交按鈕，用於提交新使用者的帳號和密碼。 <input type=reset value=清除>  清除按鈕，用於清空輸入的帳號和密碼。
            </form>
        ";
    }
?>
    </body>
</html>

這個 HTML 文件的主要功能是在用戶登錄後顯示一個表單，該表單用於新增使用者的帳號和密碼。如果用戶未登錄，則會顯示一條消息並重定向到登錄頁面。
