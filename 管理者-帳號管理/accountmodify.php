<?php
    $link = mysqli_connect("localhost", "root", "12345678", "mamba");
    $id = $_GET['id'];
    $method = $_GET["method"];
    $sql_updatequery = "select * from user where userid = '$id'";
    $rs = mysqli_query($link, $sql_updatequery);
    while ($record = mysqli_fetch_row($rs))
    {
        $userid = $record[0];
        $uname = $record[1];
        $auth = $record[2];
        $profession = $record[3];
        $email = $record[4];
        $phone = $record[5];
        $password = $record[6];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>帳號管理</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mamba - v2.4.1
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <?php
    session_start();
    if ($_SESSION["auth"]=="投稿者")
    {
      echo "<script>alert('您的權限不符');
      window.location.href='contributor.php';
      </script>";
    }
    else if ($_SESSION["auth"]=="審稿者")
    {
      echo "<script>alert('您的權限不符');
      window.location.href='reviewer.php';
      </script>";
    }
  ?>
</head>

<body>
    
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="../index.php"><span>輔仁管理評論</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="../index.php">首頁</a></li>
          <li class="drop-down">
              <a href="">
              <?php
                    $username = $_SESSION["username"];
                    echo $username;
                ?>
              </a>
                          <?php
                if ($_SESSION["auth"] == "投稿者")
                {
                    echo "<ul>
                            <li class='drop-down'><a href='../contributor.php'>投稿者</a>
                                <ul>
                                  <li><a href='../投稿者-新增投稿.php'>新增投稿</a></li>
                                  <li><a href='../contributor-articlelist.php'>投稿清單</a></li>
                                </ul>
                              </li></ul>";
                }
                else if ($_SESSION["auth"] == "審稿者")
                {
                    echo "<ul>
                            <li class='drop-down'><a href='../contributor.php'>投稿者</a>
                                <ul>
                                  <li><a href='../投稿者-新增投稿.php'>新增投稿</a></li>
                                  <li><a href='../contributor-articlelist.php'>投稿清單</a></li>
                                </ul>
                              </li>
                            <li class='drop-down'><a href='../reviewer.php'>審稿者</a>
                                <ul>
                                  <li><a href='../審稿者-線上審稿.php'>線上審稿</a></li>
                                </ul>
                              </li></ul>";
                }
                else if ($_SESSION["auth"] == "管理者")
                {
                    echo "<ul>
                            <li class='drop-down'><a href='../contributor.php'>投稿者</a>
                                <ul>
                                  <li><a href='../投稿者-新增投稿.php'>新增投稿</a></li>
                                  <li><a href='../contributor-articlelist.php'>投稿清單</a></li>
                                </ul>
                              </li>
                            <li class='drop-down'><a href='../reviewer.php'>審稿者</a>
                                <ul>
                                  <li><a href='../審稿者-線上審稿.php'>線上審稿</a></li>
                                </ul>
                              </li>
                            <li class='drop-down'><a href='../manager.php'>管理者</a>
                                <ul>
                                  <li><a href='../%E7%AE%A1%E7%90%86%E8%80%85-%E5%B8%B3%E8%99%9F%E7%AE%A1%E7%90%86/accountmanage.php'>帳號管理</a></li>
                                  <li><a href='../%E7%AE%A1%E7%90%86%E8%80%85-%E9%85%8D%E7%A8%BF%E7%AE%A1%E7%90%86/配稿管理.php'>配稿管理</a></li>
                                  <li><a href='../manager-article.php'>線上投稿</a></li>
                                </ul>
                            </li></ul>";
                }
                else
                {
                    echo "<script>alert('Something wrong!<br>');
                     window.location.href='../login/loginindex.php';
                    </script>"; 
                }
              ?>
          </li>
          <li><a href="./login/logout.php">會員登出</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
    
  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>修改帳號</h2>
          <ol>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../manager.php">管理者</a></li>
            <li><a href="./accountmanage.php">帳號管理</a></li>
            <li>修改帳號</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    
    <section class="about">
      <div class="container">
<form method="post" action="updateaccount.php" onsubmit="return validateForm()">
    <input type=hidden name="method" value="<?php echo $method ?>">
    <input type=hidden name="userid" value="<?php echo $userid ?>">
  <div class="containerrr">
    <table align="center">
        <tr>
            <td><label for="username"><b>姓名</b></label></td>
            <td colspan="2" align="left"><input type="text" placeholder="Enter Name" name="username" id="username" value="<?php echo $uname ?>"required></td>
        </tr>
        <tr>
            <td><label for="auth"><b>權限</b></label></td>
            <td colspan="2" align="left">
            <?php
                if ($auth == "管理者")
                {
                    echo 
                    '<input type="radio" name="auth" id="auth" value="管理者" checked>管理者
                    <input type="radio" name="auth" id="auth" value="投稿者">投稿者
                    <input type="radio" name="auth" id="auth" value="審核者">審稿者';
                }
                if ($auth == "投稿者")
                {
                    echo 
                    '<input type="radio" name="auth" id="auth" value="管理者">管理者
                    <input type="radio" name="auth" id="auth" value="投稿者" checked>投稿者
                    <input type="radio" name="auth" id="auth" value="審核者">審稿者';
                }
                if ($auth == "審稿者")
                {
                    echo 
                    '<input type="radio" name="auth" id="auth" value="管理者">管理者
                    <input type="radio" name="auth" id="auth" value="投稿者">投稿者
                    <input type="radio" name="auth" id="auth" value="審核者" checked>審稿者';
                }
            ?>
            </td>
        </tr>
        <tr>
            <td><label for="profession"><b>專業</b></label></td>
            <td colspan="2" align="left"><br>
                <input type="checkbox" name="profession[]" id="profession" value="管理與政策">管理與政策
                <input type="checkbox" name="profession[]" id="profession" value="國際企業">國際企業
                <input type="checkbox" name="profession[]" id="profession" value="行銷管理">行銷管理
                <input type="checkbox" name="profession[]" id="profession" value="國際貿易">國際貿易
                <input type="checkbox" name="profession[]" id="profession" value="生產與作業管理">生產與作業管理<br>
                <input type="checkbox" name="profession[]" id="profession" value="統計">統計
                <input type="checkbox" name="profession[]" id="profession" value="人力資源管理">人力資源管理
                <input type="checkbox" name="profession[]" id="profession" value="數量方法">數量方法
                <input type="checkbox" name="profession[]" id="profession" value="資訊管理">資訊管理
                <input type="checkbox" name="profession[]" id="profession" value="會計">會計
                <input type="checkbox" name="profession[]" id="profession" value="財務管理">財務管理
                <input type="checkbox" name="profession[]" id="profession" value="審計">審計
            </td>
        </tr>
        <tr>
            <td><label for="email"><b>Email</b></label></td>
            <td colspan="2" align="left"><input type="email" placeholder="Enter Email" name="email" id="email" value="<?php echo $email ?>"required></td>
        </tr>
        <tr>
            <td><label for="phone"><b>電話</b></label></td>
            <td colspan="2" align="left"><input type="tel" placeholder="Enter phone" name="phone" id="phone"  value="<?php echo $phone ?>" required></td>
        </tr>
        <tr>
            <td><label for="password"><b>密碼</b></label></td>
            <td colspan="2" align="left"><input type="password" placeholder="Enter Password (length>6)" name="password" id="password"  value="<?php echo $password ?>" required></td>
        </tr>
        <tr>
            <td colspan="3"><input type="submit" value="修改" name="submit"></td>
        </tr>
    </table>
  </div>
</form>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>輔仁大學管理學院</h3>
            <p>242062 新北市新莊區中正路510號<br><br>
              <strong>Phone : </strong>(02)2905-3985<br>
              <strong>Fax : </strong>(02)2905-2186<br>
              <strong>Email : </strong>fjreview@mail.fju.edu.tw<br>
            </p>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/management.fju.edu.tw" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://instagram.com/fjcuma1969" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>相關連結</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="http://alumni.fju.edu.tw/">輔仁大學校友資料庫</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="http://www.grb.gov.tw/">政府研究資訊系統</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>相關連結</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="http://research.fju.edu.tw/admin/login">研究人才資料庫</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://ulist.moe.gov.tw/">大專院校一覽表查詢系統</a></li>
            </ul>
            
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>站內搜尋</h4>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="搜尋">
            </form>
            <div class="copyright">
              &copy; Copyright <strong><span>Mamba</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/ -->
              Designed by GuGuMeow_Xiaoma
            </div>
          </div>

        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>