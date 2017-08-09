<?php
//載入 db.php 檔案，讓我們可以透過它連接資料庫
//require_once 'php/db.php';
?>
<!DOCTYPE html>
<html lang="zh-TW">
  <head>
    <title>作品網站</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- 給行動裝置或平板顯示用，根據裝置寬度而定，初始放大比例 1 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 載入 bootstrap 的 css 方便我們快速設計網站-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style1.css"/>
    <link rel="shortcut icon" href="images/smartphone.png">
  </head>

  <body>
    <!-- 頁首 -->

    <div class="jumbotron">
      <div class="container">
        <!-- 建立第一個 row 空間，裡面準備放格線系統 -->
        <div class="row">
          <!-- 在 xs 尺寸，佔12格，可參考 http://getbootstrap.com/css/#grid 說明-->
          <div class="col-xs-12">
            <!--網站標題-->
            <h1 class="text-center">斑斑的奇幻學習里程</h1>

            <!-- 選單 -->
            <ul class="nav nav-pills">
              <li role="presentation" class="active"><a href="index.php">首頁</a></li>
              <li role="presentation"><a href="article_list.php">所有文章</a></li>
              <li role="presentation"><a href="work_list.php">所有作品</a></li>
              <li role="presentation"><a href="about.php">關於我們</a></li>
              <li role="presentation"><a href="register.php">註冊</a></li>
            </ul> 
          </div>
        </div>
      </div>
    </div>
    <!-- 網站內容 -->
    <div class="content">
      <div class="container">
        <!-- 建立第一個 row 空間，裡面準備放格線系統 -->
        <div class="row">
          <!-- 在 xs 尺寸，佔12格，可參考 http://getbootstrap.com/css/#grid 說明-->
          <div class="col-xs-12">
            <div class="alert alert-success text-center" role="alert">
              歡迎來到我的個人網站，這裡紀錄著我的在學的作品。希望會喜歡。
            </div>
              <ul class="nav nav-pills" role="tablist">
              <li role="presentation" class="active"><a href="index.php">Home <span class="badge">42</span></a></li>
              <li role="presentation"><a href="about.php">Profile</a></li>
              <li role="presentation"><a href="mailto:tn00371361@gmail.com">Messages <span class="badge">10</span></a></li>
              </ul>
              <img src="https://scontent-tpe1-1.xx.fbcdn.net/v/t1.0-9/20622148_1693250404021558_1391393867026271937_n.jpg?oh=277cdb261fa0851330759b5970bf6493&oe=5A28AD0C" alt="ME" style="width:350px;height:500px;">
          </div>
        </div>
      </div>
    </div>

    <!-- 頁底 -->
    <div class="footer">
      <div class="container">
        <!-- 建立第一個 row 空間，裡面準備放格線系統 -->
        <div class="row">
          <!-- 在 xs 尺寸，佔12格，可參考 http://getbootstrap.com/css/#grid 說明-->
          <div class="col-xs-12">
            <p class="text-center">
              &copy; <?php echo date("Y")?>--<?php echo date("M")?>--<?php echo date("D")?>
              窩在家版權公司所有.
            </p>
          </div>
        </div>
      </div>

    </div>

    <?php
    //結束mysql連線
    //mysql_close();
    ?>
  </body>
</html>
