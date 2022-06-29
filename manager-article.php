<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>線上投稿</title>
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
          <h2>線上投稿</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="manager.php">管理者</a></li>
            <li>線上投稿</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
          <br><br>
            <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">文章</th>
                    <th scope="col">配稿狀態</th>
                    <th scope="col">回覆意見</th>
                    <th scope="col">送出意見</th>
                    <th scope="col">刪除</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                    $link = mysqli_connect("localhost", "root", "12345678", "mamba");
                
                
                    $sql = "select * from article";
                    $result = mysqli_query($link, $sql);
                
                    while ($record = mysqli_fetch_row($result))
                    {
                        echo "<tr><td>$record[0]</td><td><a href='./portfolio/portfolio.php?id=$record[0]'>$record[1]</a></td><td>";
                        if ($record[6] == NULL || $record[7] == NULL)
                        {
                            echo "已配稿";
                        }
                        else
                        {
                            echo "未配稿";
                        }
                        echo "</td>";
                        if ($record[8] == NULL)
                        {
                            echo "<td><form method = 'post' action = './managerreply.php'>
                            <input type='hidden' name = 'articleid' value = '$record[0]'>
                                <select name = managerreply>
                                
                                    <option value = 'null' selected>請選擇</option>
                                    <option value = '接受'>接受</option>
                                    <option value = '小幅修正'>小幅修正</option>
                                    <option value = '大幅修正'>大幅修正</option>
                                    <option value = '拒絕'>拒絕</option>
                                </select>
                            </td>
                            <td><label>
                                <svg xmlns='http://www.w3.org/2000/svg' width='1.5em' height='1.5em' fill='currentColor' class='bi bi-envelope' viewBox='0 0 16 16'>
  <path d='M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z'/>
</svg><input type='submit' name = 'submit' style='display:none;'><label></form>
                            </td>
                            <td><a href='./deletearticle.php?articlename=$record[1]'>
                            <svg width='1.5em' height='1.5em' viewBox='0 0 16 16' class='bi bi-trash' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                              <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                              <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                            </svg></a></td></tr>";
                        }
                        else
                        {
                            echo "<td>$record[8]</td><td></td>
                            <td><a href='./deletearticle.php?articlename=$record[1]'>
                            <svg width='1.5em' height='1.5em' viewBox='0 0 16 16' class='bi bi-trash' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                              <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                              <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                            </svg></a></td></tr>";
                        }
                        
                        
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