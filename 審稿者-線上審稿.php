<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>審稿清單</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

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
  ?>
</head>

<body>
   <!-- ======= Header ======= -->
   <header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.php"><span>輔仁管理評論</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">首頁</a></li>
          
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
                            <li class='drop-down'><a href='contributor.php'>投稿者</a>
                                <ul>
                                  <li><a href='投稿者-新增投稿.php'>新增投稿</a></li>
                                  <li><a href='contributor-articlelist.php'>投稿清單</a></li>
                                </ul>
                            </li></ul>";
                }
                else if ($_SESSION["auth"] == "審稿者")
                {
                    echo "<ul>
                            <li class='drop-down'><a href='contributor.php'>投稿者</a>
                                <ul>
                                  <li><a href='投稿者-新增投稿.php'>新增投稿</a></li>
                                  <li><a href='contributor-articlelist.php'>投稿清單</a></li>
                                </ul>
                            </li>
                            <li class='drop-down'><a href='reviewer.php'>審稿者</a>
                                <ul>
                                  <li><a href='審稿者-線上審稿.php'>線上審稿</a></li>
                                </ul>
                            </li></ul>";
                }
                else if ($_SESSION["auth"] == "管理者")
                {
                    echo "<ul>
                            <li class='drop-down'><a href='contributor.php'>投稿者</a>
                                <ul>
                                  <li><a href='投稿者-新增投稿.php'>新增投稿</a></li>
                                  <li><a href='contributor-articlelist.php'>投稿清單</a></li>
                                </ul>
                            </li>
                            <li class='drop-down'><a href='reviewer.php'>審稿者</a>
                                <ul>
                                  <li><a href='審稿者-線上審稿.php'>線上審稿</a></li>
                                </ul>
                            </li>
                            <li class='drop-down'><a href='manager.php'>管理者</a>
                                <ul>
                                  <li><a href='./%E7%AE%A1%E7%90%86%E8%80%85-%E5%B8%B3%E8%99%9F%E7%AE%A1%E7%90%86/accountmanage.php'>帳號管理</a></li>
                                  <li><a href='./%E7%AE%A1%E7%90%86%E8%80%85-%E9%85%8D%E7%A8%BF%E7%AE%A1%E7%90%86/配稿管理.php'>配稿管理</a></li>
                                  <li><a href='./manager-article.php'>線上投稿</a></li>
                                </ul>
                            </li></ul>";
                }
                else
                {
                    echo "<script>alert('Something wrong!');
             window.location.href='./login/loginindex.php';
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
          <h2>審稿清單</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="reviewer.php">審稿者</a></li>
            <li>審稿清單</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->


    <section class="inner-page">
      <div class="container">
        
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">文章</th>
                    <th scope="col">下載檔案</th>
                    <th scope="col">回覆文章</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $link = mysqli_connect("localhost", "root", "12345678", "mamba");
                    $sql = "select * from article where reviewer1 = '$username' or reviewer2 = '$username'";
                    $rs = mysqli_query($link, $sql);
                    while ($record = mysqli_fetch_row($rs))
                    {
                        echo "<tr><th>$record[0]</th><td><a href='./portfolio/portfolio.php?id=$record[0]'>$record[1]</a></td>
                        <td><a href='http://www.management.fju.edu.tw/zh-tw/down.php?hFFile=tw_books_caty01601373662.pdf' download='第27卷第3期'><svg width='2em' height='1.5em' viewBox='0 0 16 16' class='bi bi-download' fill='currentColor' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z'/><path fill-rule='evenodd' d='M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z'/></svg></a></td>
                        <td><a href='審稿者-回覆投稿.php?articlename=$record[1]'><svg width='1.5em' height='1.5em' viewBox='0 0 16 16' class='bi bi-reply' fill='currentColor' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M9.502 5.013a.144.144 0 0 0-.202.134V6.3a.5.5 0 0 1-.5.5c-.667 0-2.013.005-3.3.822-.984.624-1.99 1.76-2.595 3.876C3.925 10.515 5.09 9.982 6.11 9.7a8.741 8.741 0 0 1 1.921-.306 7.403 7.403 0 0 1 .798.008h.013l.005.001h.001L8.8 9.9l.05-.498a.5.5 0 0 1 .45.498v1.153c0 .108.11.176.202.134l3.984-2.933a.494.494 0 0 1 .042-.028.147.147 0 0 0 0-.252.494.494 0 0 1-.042-.028L9.502 5.013zM8.3 10.386a7.745 7.745 0 0 0-1.923.277c-1.326.368-2.896 1.201-3.94 3.08a.5.5 0 0 1-.933-.305c.464-3.71 1.886-5.662 3.46-6.66 1.245-.79 2.527-.942 3.336-.971v-.66a1.144 1.144 0 0 1 1.767-.96l3.994 2.94a1.147 1.147 0 0 1 0 1.946l-3.994 2.94a1.144 1.144 0 0 1-1.767-.96v-.667z'/></svg></a></td>";
                    }
                    mysqli_close($link);
                ?>
            </tbody>
          </table>
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
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>