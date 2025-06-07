<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $sql="delete from user where id='{$_GET["id"]}'";#從user表格中刪除指定id使用者，id從URL參數取得
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            echo "使用者刪除錯誤";#執行失敗
        }else{
            echo "使用者刪除成功";#執行成功
        }
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";#無論失敗成功三秒後跳至18.user.php
    }
?>
