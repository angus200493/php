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
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";#執行SQL將表單提交的title、content、type 和 time 插入 bulletin 表格
        if (!mysqli_query($conn, $sql)){
            echo "新增命令錯誤";#若執行失敗顯示新增命令錯誤
        }
        else{
            echo "新增佈告成功，三秒鐘後回到網頁";#成功顯示新增佈告成功，三秒鐘後回到網頁
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";#三秒後挑轉至11.bulletin.php
        }
    }
?>
