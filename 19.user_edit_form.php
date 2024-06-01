<html>
    <head><title>修改使用者</title></head>
    <body>
    <?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'"); //mysqli_query(): 執行 SQL 查詢以從資料庫中獲取指定帳號的使用者記錄。
        $row=mysqli_fetch_array($result); //使用 mysqli_fetch_array() 從查詢結果中獲取一行記錄。
//在表單中顯示帳號和密碼的值，並將帳號設置為只讀。使用者可以輸入新的密碼。
//表單的提交目標為 "20.user_edit.php"，使用 POST 方法提交。
        echo "
        <form method=post action=20.user_edit.php>
            <input type=hidden name=id value={$row['id']}>
            帳號：{$row['id']}<br> 
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>
            <input type=submit value=修改>
        </form>
        ";
    }
    ?>
    </body>
</html>
