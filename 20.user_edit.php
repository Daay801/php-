<?php
//這段 PHP 腳本用於處理修改使用者密碼的請求
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) { // 啟動了一個新的 session 或者重用了現有的 session。

//檢查是否有有效的 session，如果沒有，則顯示一條消息 "請登入帳號"，並且通過 meta 標籤在 3 秒後重新導向到登錄頁面 "2.login.html"。


        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; 


    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); //建立到資料庫的連接。使用了 "db4free.net" 作為主機名，"immust" 作為用戶名，"immustimmust" 作為密碼，"immust" 作為資料庫名稱。
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){ //使用 mysqli_query() 執行 SQL 更新語句，將指定使用者的密碼更新為表單提交的新密碼。
            echo "修改錯誤";
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>"; //如果更新失敗，則顯示消息 "修改錯誤"，並通過 meta 標籤在 3 秒後重新導向到 "18.user.php" 頁面。
        }else{
            echo "修改成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
        }
    }
//這個腳本用於從資料庫中更新指定使用者的密碼，並提供相應的反饋消息。
?>
