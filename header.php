<?php
session_start();
if (!isset($_SESSION['sAccount']))
    header('Location: login.php');

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/dashbord.css">
    <title>後台管理系統</title>
</head>




<script>
    function redirectDialog(filename, mode, msg) {
        alert(msg);

        location.replace(filename + "?mode=" + mode);
    }
    function deleteConfirm(filename, id) {
        if (confirm("警告：\n  確定刪除編號為 " + id + " 的資料嗎?") == 1)
            location.replace(filename + "?mode=delete&id=" + id);
        else
            return false;
    }

</script>


<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    </header>
    
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="./index.php" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span
                        class="nav_logo-name">後台管理系統</span> </a>
                <div class="nav_list"> <a href="./index.php" class="nav_link "> <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">管理者首頁</span> </a> <a href="./data.php" class="nav_link"> <i
                            class='bx bx-user nav_icon'></i> <span class="nav_name">資料庫資訊</span> </a> <a href="./member.php"
                        class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span
                            class="nav_name">會員資料管理</span> </a> <a href="./processing.php" class="nav_link"> <i
                            class='bx bx-bookmark nav_icon'></i> <span class="nav_name">檔案處理資訊</span> </a> <a href="./upload.php"
                        class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">檔案上傳存檔</span> </a>
                    <a href="./counter.php" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span
                            class="nav_name">計數器</span> </a> </div>
            </div> <a href="./login.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                    class="nav_name">登出</span> </a>
        </nav>
    </div>

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 p-0 ">
                        <div class="page-header">
                            <div class="page-title">
                                <h4>
                                    <?= $_SESSION['mname'] ?>您好！登入時間：
                                    <?= $_SESSION['sLogintime'] ?>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-content"></div>
