<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $sql="insert into bulletin(title, content, type, time) 
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')"; //mysqli_connect(): 建立到資料庫的連接。使用了 "db4free.net" 作為主機名，"immust" 作為用戶名，"immustimmust" 作為密碼，"immust" 作為資料庫名稱。

//構建一個 SQL 語句，將從表單提交的標題、內容、類型和時間插入到 "bulletin" 表格中。
        if (!mysqli_query($conn, $sql)){
            echo "新增命令錯誤"; //如果插入失敗，則顯示消息 "新增命令錯誤"。


        }
        else{
            echo "新增佈告成功，三秒鐘後回到網頁"; 
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; //如果插入成功，則顯示消息 "新增佈告成功，三秒鐘後回到網頁"，並通過 meta 標籤在 3 秒後重新導向到 "11.bulletin.php" 頁面。
        }
    }
?>
