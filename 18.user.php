<html>
    <head><title>使用者管理</title></head> //標題設置為 "使用者管理"。
    <body> 
    <?php
        error_reporting(0);
        session_start();
        if (!$_SESSION["id"]) {
            echo "請登入帳號";
            echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; //檢查是否有有效的 session，如果沒有，則顯示一條消息 "請登入帳號"，並且通過 meta 標籤在 3 秒後重新導向到登錄頁面 "2.login.html"。
        }
        else{   
            echo "<h1>使用者管理</h1> //在頁面上顯示 "使用者管理" 的標題，並提供一個鏈接用於新增使用者和返回佈告欄列表。
                [<a href=14.user_add_form.php>新增使用者</a>] [<a href=11.bulletin.php>回佈告欄列表</a>]<br>
                <table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";
            
            $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); //mysqli_connect(): 建立到資料庫的連接。使用了 "db4free.net" 作為主機名，"immust" 作為用戶名，"immustimmust" 作為密碼，"immust" 作為資料庫名稱。
            $result=mysqli_query($conn, "select * from user"); //mysqli_query(): 執行 SQL 查詢以從資料庫中獲取所有使用者的記錄。
            while ($row=mysqli_fetch_array($result)){
                echo "<tr><td><a href=19.user_edit_form.php?id={$row['id']}>修改</a>||<a href=17.user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>"; //提供 "修改" 和 "刪除" 的鏈接，以便進行相應的操作。
            }
            echo "</table>";
        }
    ?> 
    </body>
</html>
