<?php

    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        if (!mysqli_query($conn, "update bulletin set title='{$_POST['title']}',content='{$_POST['content']}',time='{$_POST['time']}',type={$_POST['type']} where bid='{$_POST['bid']}'")){
            echo "修改錯誤";#根據表單提交的bid更新對應佈告，執行失敗顯示修改錯誤
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";#三秒後跳至11.bulletin.php
        }else{
            echo "修改成功，三秒鐘後回到佈告欄列表";#執行成功顯示修改成功，三秒鐘後回到佈告欄列表
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";#三秒後跳至11.bulletin.php
        }
    }

?>
