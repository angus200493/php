<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $sql="delete from bulletin where bid='{$_GET["bid"]}'";#根據URL參數刪除指定bid的佈告
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            echo "佈告刪除錯誤";#執行失敗顯示佈告刪除錯誤
        }else{
            echo "佈告刪除成功";#成功顯示刪除成功
        }
        echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";#無論成功或失敗三秒後跳至11.bulletin.php
    }
?>
