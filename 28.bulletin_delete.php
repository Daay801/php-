<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; //檢查是否有有效的 session，如果沒有，則顯示一條消息 "請登入帳號"，並且通過 meta 標籤在 3 秒後重新導向到登錄頁面 "2.login.html"。
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $sql="delete from bulletin where bid='{$_GET["bid"]}'";
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            echo "佈告刪除錯誤";
        }else{
            echo "佈告刪除成功";
        }//如果刪除失敗，則顯示消息 "佈告刪除錯誤"。 //如果刪除成功，則顯示消息 "佈告刪除成功"。
        echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; //通過 meta 標籤在 3 秒後重新導向到 "11.bulletin.php" 頁面。
    }
?>
