<?php
session_start();
require 'db_open.php';
$varErrmessage = "";
$varAccount = "";
$varPassword = "";

if (isset($_GET['st'])) { //logout 時會給的變數
    if ($_GET['st'] == "logout") {
        unset($_SESSION['sAccount']);
    }
}

if (isset($_POST['usrAccount'])) { //使用者輸入帳號後，帳號密碼的判斷
    $varAccount = $_POST['usrAccount'];
    $varPassword = $_POST['usrPassword'];
    $sql = "SELECT mname,passwd FROM member where mid='$varAccount'"; // 指定SQL查詢字串
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) == 0) {
        $varErrmessage = "請輸入正確帳號";
    } else {
        $row = mysqli_fetch_assoc($result);
        if ($varPassword == $row['passwd']) {
            $_SESSION['sAccount'] = $varAccount;
            $_SESSION['mname'] = $row['mname'];
            date_default_timezone_set('Asia/Taipei');
            $_SESSION['sLogintime'] = date("F j, Y, g:i a");
            mysqli_close($link); // 關閉資料庫連接
            echo $total_records;
            header('Location: index.php');
        } else
            $varErrmessage = "請輸入正確密碼";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>後台管理系統</title>
</head>

<body>
    <section>
        <div class="container">
            <div class="user signinBx">
                <div class="imgBx"><img src="images/1.webp" alt=""></div>
                <div class="formBx">
                    <form method="post" action="login.php">
                        <h2>會員登入</h2>
                        <input type="text" name="usrAccount" placeholder="帳號" value="<?= $varAccount ?>">
                        <input type="password" name="usrPassword" placeholder="密碼" value="<?= $varPassword ?>">
                        <input type="submit" name="" value="登入">
                        
                        <p class="signup">還不是會員?<a href="#" onclick="toggleForm();">按這裡註冊</a></p>
                        <div>
                            <label>
                                <?= $varErrmessage ?>
                            </label>
                            <label class="pull-right">
                                <a href="send-password.php">忘記密碼？</a>
                            </label>
                        </div>
                    </form>
                </div>

            </div>
            <div class="user signupBx">
                <div class="formBx">
                    <form action="">
                        <h2>會員註冊</h2>
                        <input type="text" name="" placeholder="帳號">
                        <input type="email" name="" placeholder="信箱">
                        <input type="password" name="" placeholder="密碼">
                        <input type="password" name="" placeholder="確認密碼">
                        <input type="submit" name="" value="註冊">
                        <p class="signup">已經是會員?<a href="#" onclick="toggleForm();">按這裡登入</a></p>
                    </form>
                </div>
                <div class="imgBx"><img src="images/1.webp" alt=""></div>
            </div>
        </div>
    </section>


    <script>
        function toggleForm() {
            var container = document.querySelector('.container');
            container.classList.toggle('active')
        }
    </script>

</body>

</html>