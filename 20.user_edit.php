<?php

    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){
            echo "修改錯誤";#若SQL執行失敗，顯示修改錯誤
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";#三秒後跳轉18.user.php
        }else{
            echo "修改成功，三秒鐘後回到網頁";#若SQL執行成功顯示三秒鐘後回到網頁
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";#三秒後跳轉18.user.php
        }
    }

?>
