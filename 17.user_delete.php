<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); //mysqli_connect(): 這一行建立了到資料庫的連結。使用了 "db4free.net" 作為主機名，"immust" 作為用戶名，"immustimmust" 作為密碼，"immust" 作為資料庫名稱。這裡使用了 MySQLi 函數來建立連結。
        $sql="delete from user where id='{$_GET["id"]}'";
        #echo $sql;
        if (!mysqli_query($conn,$sql)){ //如果刪除成功，則顯示消息 "使用者刪除成功"；如果刪除失敗，則顯示消息 "使用者刪除錯誤"。
            echo "使用者刪除錯誤";
        }else{
            echo "使用者刪除成功";
        }
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
    }
?>
