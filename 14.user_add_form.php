<html>
    <head><title>新增使用者</title></head>
    <body>
<?php        
    error_reporting(0);#隱藏錯誤訊息
    session_start();#檢查使用者是否登入
    if (!$_SESSION["id"]) {
        echo "請登入帳號";#若未登入顯示請登入
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";#3秒後跳至2.login.html
    }
    else{    #若已登入表單提交至 15.user_add.php，包含「帳號」和「密碼」輸入欄。有「新增」（提交）和「清除」（重置）按鈕。
        echo "
            <form action=15.user_add.php method=post>
                帳號：<input type=text name=id><br>
                密碼：<input type=text name=pwd><p></p>
                <input type=submit value=新增> <input type=reset value=清除>
            </form>
        ";
    }
?>
    </body>
</html>
