<?php

    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); //使用 mysqli_query() 執行 SQL 更新語句，將從表單提交的標題、內容、時間和類型更新到 "bulletin" 表格中的指定佈告編號。
        if (!mysqli_query($conn, "update bulletin set title='{$_POST['title']}',content='{$_POST['content']}',time='{$_POST['time']}',type={$_POST['type']} where bid='{$_POST['bid']}'")){
            echo "修改錯誤"; //如果更新失敗，則顯示消息 "修改錯誤"，並通過 meta 標籤在 3 秒後重新導向到 "11.bulletin.php" 頁面。
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }else{
            echo "修改成功，三秒鐘後回到佈告欄列表"; //如果更新成功，則顯示消息 "修改成功，三秒鐘後回到佈告欄列表"，並通過 meta 標籤在 3 秒後重新導向到 "11.bulletin.php" 頁面。
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }
    }

?>
