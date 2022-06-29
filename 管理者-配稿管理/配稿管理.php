<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>配稿管理</title>
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
                              </li>
                          </ul>";
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
                              </li>
                          </ul>";
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
                            </li>
                          </ul>";
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
          <h2>配稿管理</h2>
          <ol>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../manager.php">管理者</a></li>
            <li>配稿管理</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->


    <section class="inner-page">
      <div class="container">
          
        <a href="./%E5%AF%A9%E7%A8%BF%E8%80%85%E6%B8%85%E5%96%AE.php"><button class="list">審稿者清單</button></a>
          
        <br><br><br>
        
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">文章</th>
                    <th scope="col">配稿狀態</th>
                    <th scope="col">審稿者1</th>
                    <th scope="col">審稿者2</th>
                    <th scope="col">確認</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                    $link = mysqli_connect("localhost", "root", "12345678", "mamba");        
                
                    $sql1 = "SELECT COUNT(*) FROM `user` WHERE auth='審稿者'";
                    $resultt = mysqli_query($link, $sql1);
                    $record = mysqli_fetch_row($resultt);
                
                    $sql = "select username from user where auth = '審稿者'";
                    $result = mysqli_query($link, $sql);
                    $reviewerarr = array();
                    $i = 0;
                    while ($recorddd = mysqli_fetch_row($result))
                    {
                        $reviewerarr[$i] = $recorddd[0];
                        $i++;
                    }
                    
                    $sql2 = "select * from article";
                    $result1 = mysqli_query($link, $sql2);
                
                    while ($recordd = mysqli_fetch_row($result1))
                    {
                        echo "<tr><td>$recordd[0]</td><td><a href='../portfolio/portfolio.php?id=$recordd[0]'>$recordd[1]</a></td>";
                        if ($recordd[5] == NULL || $recordd[6] == NULL)
                        {
                            echo "<td>未配稿</td>";
                            echo "<form method='post' action=./doc.php>
                            <input type='hidden' name='articlename' value='$recordd[1]'>";
                            echo "<td>
                                <select name='reviewer1'>
                                    <option value='NULL' selected>請選擇</option>";
                            for ($i = 0; $i < $record[0]; $i++)
                            {
                                echo "<option value='$reviewerarr[$i]'>$reviewerarr[$i]</option>";
                            }
                                    
                            echo "</select></td>";
                            echo "<td>
                                <select name='reviewer2'>
                                    <option value='NULL' selected>請選擇</option>";
                            for ($i = 0; $i < $record[0]; $i++)
                            {
                                echo "<option value='$reviewerarr[$i]'>$reviewerarr[$i]</option>";
                            }
                            echo "</select></td>";
                            
                            echo "<td><label><svg width='1.5em' height='1.5em' viewBox='0 0 16 16' class='bi bi-check-circle' fill='currentColor' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/><path fill-rule='evenodd' d='M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z'/></svg>
                            <input type='submit' value='提交' name='submit' style='display:none;'></label></td></form></tr>";
                        }
                    
                        else
                        {
                            echo "<td>已配稿</td>";
                            echo "<td>$recordd[6]</td><td>$recordd[7]</td></tr>";
                        }
                        ;
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