<html>
    <head><title>使用者管理</title></head>
    <body>
    <?php
        error_reporting(0);
        session_start();
        if (!$_SESSION["id"]) {
            echo "請登入帳號";
            echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
        }
        else{   
            echo "<h1>使用者管理</h1>
                [<a href=14.user_add_form.php>新增使用者</a>] [<a href=11.bulletin.php>回佈告欄列表</a>]<br>
                <table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";#顯示標題使用者管理和兩個連結新增使用者連接到14.user_add_form.php，回佈告欄列表連接到11.bulletin.php
            
            $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");#連接到資料庫
            $result=mysqli_query($conn, "select * from user");#執行SQL查詢取得所有使用者資料
            while ($row=mysqli_fetch_array($result)){
                echo "<tr><td><a href=19.user_edit_form.php?id={$row['id']}>修改</a>||<a href=17.user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            }#每行顯示使用者的修改連接至(19.user_edit_form.php)和刪除(17.user_delete.php)，以及帳號和密碼
            echo "</table>";
        }
    ?> 
    </body>
</html>
