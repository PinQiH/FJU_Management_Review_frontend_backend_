<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>輔仁管理評論</title>
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
          <li><a href="#about">成立宗旨</a></li>
          <li><a href="#portfolio">刊物瀏覽</a></li>
          <li><a href="#services">徵稿啟示</a></li>
          <li><a href="#team">投稿/訂閱方式</a></li>
          <li><a href="#faq">評審程序</a></li>
          <li><a href="#contact">聯繫我們</a></li>
        <?php
            if ($_SESSION["loggedin"] == true)
            {
                echo "<li class='drop-down'><a href=''>";
                $username = $_SESSION["username"];
                echo $username;
                  
                echo "</a>";
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
              
              echo "</li>";
              echo "<li><a href='./login/logout.php'>會員登出</a></li>";
            }
            else
            {
                echo "<li><a href='./login/loginindex.php'>使用者登入</a></li>";
            }
        ?>
          
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('assets/img/slide/3.png');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">歡迎 輔大管理評論系統</h2>
                <p class="animate__animated animate__fadeInUp">天主教輔仁大學
                  為追求真、善、美、聖，全人教育之師生共同體，
                  致力於中華文化與基督信仰之交融，
                  以基督博愛精神，
                  獻身於學術研究與弘揚真理，
                  促進社會永續均衡發展，
                  增進人類社會福祉，
                  以達到知人、知物、知天之合一理想。
                  
                  </p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">更多</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('assets/img/slide/1.png');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">歡迎 輔大管理評論系統</h2>
                <p class="animate__animated animate__fadeInUp">一、 人性尊嚴<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;肯定人性尊嚴，尊重天賦人權。<br>
                   
                  二、 人生意義<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;探討生命意義，建立完整價值體系。<br>
                   
                  三、 教學研究<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;尊重學術自由與學術倫理，推動知識整合。</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">更多</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('assets/img/slide/2.png');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">歡迎 輔大管理評論系統</h2>
                <p class="animate__animated animate__fadeInUp">四、 團結關懷<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;提昇群己關係，發展關懷文化。<br>
                   
                  五、 文化交流<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;增進文化交流，培育人文精神。<br>
                   
                  六、 宗教精神<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;鼓勵師生了解基督信仰，促進理性、信仰與宗教之交談及合作。<br>
                   
                  七、 服務人群<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;發揮仁愛精神，秉持正義，邁向世界大同。</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">更多</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->
    
  <!-- Icons Grid -->
  <section id="icon" class="features-icons bg-light text-center">
    <div class="container">
      <table style="width:100%">
        <tr>
          <th><a href=""><img src="assets/img/1-removebg-preview.png" height="125px" width="125px" ></a></th>
          <th><a href=""><img src="assets/img/2-removebg-preview.png" height="125px" width="125px"></a></th> 
          <th><a href=""><img src="assets/img/3-removebg-preview.png" height="125px" width="125px"></a></th>
        </tr>
        <tr>
          <td>投稿者</td>
          <td>審稿者</td>
          <td>管理者</td>
        </tr>
      </table>
    </div>
  </section>

  <main id="main">

    <!---About us------->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-6 video-box">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=zipBJc8qrNA" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="section-title">
              <h2>成立宗旨</h2>
              <p>為提高本院教師研究水準及提供校內外學術論文發表園地，本院於八十二學年度創辦「輔仁管理評論」。本期刊創刊號於八十三年六月出刊，採全年收稿，不設截稿日期，隨到隨審，一年出刊三次。截至目前為止，第二十三卷第二期已於105年5月出刊。</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->


    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
          <h2>刊物瀏覽</h2>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">全部</li>
              <li data-filter=".filter-manage">管理與政策</li>
              <li data-filter=".filter-international">國際企業</li>
              <li data-filter=".filter-marketing">行銷管理</li>
              <li data-filter=".filter-trading">國際貿易</li>
              <li data-filter=".filter-produce">生產與作業管理</li>
              <li data-filter=".filter-statistic">統計</li>
              <li data-filter=".filter-human">人力資源管理</li>
              <li data-filter=".filter-number">數量方法</li>
              <li data-filter=".filter-information">資訊管理</li>
              <li data-filter=".filter-accounting">會計</li>
              <li data-filter=".filter-finance">財務管理</li>
              <li data-filter=".filter-check">審計</li> 
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-international">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>國際交換生選擇學校之關鍵因素<br>-使用層級分析法</h4>
                <p>隨著教育的普及，現今大學國際交換生體制...</p>
                <div class="portfolio-links">
                  <a href="./portfolio/portfolio1.html" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-international">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>無套利評價方法：跨國移動平均<br>交換選擇權</h4>
                <p>本文提供了跨國移動平均交換選擇權的分析公式...</p>
                <div class="portfolio-links">
                  <a href="./portfolio/portfolio2.html" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-manage">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>互聯網金融對中國上市商業銀行<br>衝擊之研究</h4>
                <p>近年來隨著互聯網金融業務持續發展...</p>
                <div class="portfolio-links">
                  <a href="./portfolio/portfolio3.html" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-international">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>金融產品創新及其定價：移動平均<br>交換選擇權</h4>
                <p>本文探討金融產品創新及其定價...</p>
                <div class="portfolio-links">
                  <a href="./portfolio/portfolio4.html" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>
        
       
            
        
          <div class="col-lg-4 col-md-6 portfolio-item filter-manage">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>價格高估、投資人交易行為與現金<br>增資異常現象之探討</h4>
                <p>本文分別以配對公司市價淨值法(PBR_M)與歷史股價市價淨值法(PBR_H)...</p>
                <div class="portfolio-links">
                  <a href="./portfolio/portfolio5.html" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-manage">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>公司治理美學資本與組織文化、利害關係人認同關聯之研究</h4>
                <p>在講求美學經濟的時代，多數人認為透過...</p>
                <div class="portfolio-links">
                  <a href="./portfolio/portfolio6.html" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-human">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>《合作的艱難》勞動合作社的比較<br>利益－以勞動者觀點出發</h4>
                <p>本研究源於勞動彈性化擴大非典就業及普遍性...</p>
                <div class="portfolio-links">
                  <a href="./portfolio/portfolio7.html" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-manage">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>價值導向之企業管理：以新加坡Consulus創新顧問公司為例</h4>
                <p>跳脫傳統企業經營管理以創造財富為核心價值...</p>
                <div class="portfolio-links">
                  <a href="./portfolio/portfolio8.html" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-manage">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>福建省鄉村樂齡學堂發展與推行模式之解析</h4>
                <p>福建省是中國大陸第一個頒布終身教育...</p>
                <div class="portfolio-links">
                  <a href="./portfolio/portfolio9.html" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>
        
        
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->
      
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>徵稿啟事</h2>
        </div>

        <p>
          <ul>
            <li>主辦單位：輔仁大學管理學院</li>
            <li>徵稿時程：隨到隨審</li>
            <li>徵稿範圍：歡迎與管理領域有關之分析性或實證研究論文，範圍包括</li>
                <ul>
                  <li>管理與政策</li>
                  <li>資訊管理</li>
                  <li>行銷管理</li>
                  <li>會計、審計</li>
                  <li>生產與作業管理</li>
                  <li>統計、數量方法</li>
                  <li>人力資源管理</li>
                  <li>國際企業、國際貿易</li>
                  <li>財務管理</li>
                  <li>管理經濟、產業經濟</li>
              </ul>
            <li>本刊為學術性期刊，自2005年起一年三期，於每年一月、五月及九月出版。同時為響應節能減碳，自第17卷起已不再接受紙版訂閱，且自第18卷起已停止紙版印刷。本刊所有已刊登之文章皆已彙整於本院網站，歡迎上網查閱相關資訊。</li>
            <li>本刊自12卷1期起，與華藝數位藝術股份有限公司合作建置電子期刊。</li>
            <li>文字：稿件應以中文或英文書寫，並各附300字以內之中文及英文摘要，以及五個以下關鍵字。</li>
            <li>打字、編排：中英文文稿皆須電腦打字，所存之文字檔（含圖表），必須為Microsoft Word 軟體可讀取(For IBM PC)。 </li>
            <li>來稿請將檔案寄送到本刊公用電子郵件信箱（請準備2份pdf檔案，其中1份載明作者相關資料，另一份無須載明）。寄送後懇請以電話確認。</li>
            <li>文長：文（含圖表）以10,000～12,000字左右為原則。</li>
            <li>來稿一經刊登，文責由作者自負，並同意本刊為發行紙版及網路電子期刊所必要之重製、散佈及公開傳輸；除作者自行出版外，本刊嚴禁一稿多投。 </li>
          </ul>
          收件信箱：fjreview@mail.fju.edu.tw&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          聯絡人 ：輔仁大學管理學院 邱瑞真秘書&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          電　話 ：(02) 2905-3985&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          傳　真 ：(02) 2905-2186&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
        </div>
      </section><!-- End Services Section -->


    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container">
        
        
        <article>
          <div class="section-title">
          <h2>訂閱方式</h2>
          </div>
          <p><br>
            『輔仁管理評論』已停止接受紙版訂閱：<br>
            為因應網路時代，『輔仁管理評論』已經全面數位化，期望藉此推廣期刊內容並提升能見度。同時為響應節能減碳
            本刊已大幅減發紙版印量，並決定從第17卷起不再接受紙版訂閱。本刊所有已刊登之文章皆已彙整於本院網站
            <a href="http://www.management.fju.edu.tw/">（http://www.management.fju.edu.tw/）</a>，歡迎上網查閱相關資訊。<br><br><br>
          
            =======================================================<br><br>
            出版者 ：輔仁大學管理學院<br><br>
            編輯者 ：「輔仁管理評論」編輯委員會<br><br>
            地　址 ：(24205)新北市新莊區中正路510號<br><br>
            電　話 ：(02)2905-3985<br><br>
            傳　真 ：(02)2905-2186<br><br><br>
          </p>
        </article> 
        
        <article>
          <div class="section-title">
          <h2>投稿方式</h2>
          </div>
          <p><br><br>
            來稿請將檔案寄送到本刊公用電子郵件信箱<br>（請準備2份pdf檔案，其中1份載明作者相關資料，另一份無須載明）。<br><br>
            寄送後懇請以電話確認，謝謝配合辦理！
            <br><br><br><br>
            =======================================================<br><br>        
  
            收件電子郵件信箱：fjreview@mail.fju.edu.tw<br><br>
            聯絡人 ：輔仁大學管理學院 邱瑞真秘書<br><br>
            電　話 ：(02) 2905-3985<br><br>
            傳　真 ：(02) 2905-2186<br><br>
          </p>
        </article>
      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>評審程序</h2>
        </div>

        <p>
          <ul>
            <li>來稿之評審由編輯委員及相關研究領域之學者擔任。</li>
            <li>總編輯就來稿性質，諮詢各領域之編輯委員決定評審人。</li>
            <li>來稿由兩位專家學者雙向匿名評審；每位評審於評審意見表上就研究主旨與架構、研究方法（包括研究設計、資料收集、抽樣設計、分析方法…等）、<br>
              文獻探討與文字運用、學術或實務貢獻等陳述意見，並於下述四項勾選其中一項：
              <ul>
                <li> 原稿不必修改，直接刊登</li>
                <li> 原稿須略加修改且對提出之問題有滿意答覆後再審</li>
                <li> 原稿須大幅修改後再審</li>
                <li> 原稿不宜採用（敬請說明建議）</li>
              </ul>
            </li>
            <li>處理方式：  
              <table text-align: center; style="width:50%; border: 1px solid black;
              border-collapse: collapse;">
                <tr text-align: center; style="border: 1px solid black;
                border-collapse: collapse;">
                  <td text-align: center; style="border: 1px solid black;
                  border-collapse: collapse;" rowspan="2" colspan="2">處理方式</td>
                  <td style="border: 1px solid black;
                  border-collapse: collapse; text-align: center;" colspan="4">第二位評審意見</td>
                </tr>
                <tr style="border: 1px solid black;
                border-collapse: collapse;">
                  <td style="border: 1px solid black;
                  border-collapse: collapse;">刊　　登</td>
                  <td style="border: 1px solid black;
                  border-collapse: collapse;">略加修改</td>
                  <td style="border: 1px solid black;
                  border-collapse: collapse;">大幅修改</td>
                  <td style="border: 1px solid black;
                  border-collapse: collapse;">退　　稿</td>
                </tr>
                <tr style="border: 1px solid black;
                border-collapse: collapse;">
                  <td style="border: 1px solid black;
                  border-collapse: collapse;" rowspan="4">第<br>一<br>位<br>評<br>審<br>意<br>見</td>
                  <td style="border: 1px solid black;
                  border-collapse: collapse;">刊　　登</td>
                  <td style="border: 1px solid black;
                  border-collapse: collapse;">刊　　登</td>
                  <td style="border: 1px solid black;
                  border-collapse: collapse;">寄回修改</td>
                  <td style="border: 1px solid black;
                  border-collapse: collapse;">寄回修改</td>
                  <td style="border: 1px solid black;
                  border-collapse: collapse;">第三位評審</td>
                </tr>
                <tr style="border: 1px solid black;
                border-collapse: collapse;">
                  <td style="border: 1px solid black;
                  border-collapse: collapse;">略加修改</td>
                  <td style="border: 1px solid black;
                  border-collapse: collapse;">寄回修改</td>
                  <td style="border: 1px solid black;
                  border-collapse: collapse;">寄回修改</td>
                  <td style="border: 1px solid black;
                  border-collapse: collapse;">寄回修改</td>
                  <td style="border: 1px solid black;
                  border-collapse: collapse;">第三位評審</td>
                </tr>
                <tr style="border: 1px solid black;
                border-collapse: collapse;">
                  <td style="border: 1px solid black;
                  border-collapse: collapse;">大幅修改</td>
                  <td style="border: 1px solid black;
                  border-collapse: collapse;">寄回修改</td>
                  <td style="border: 1px solid black;
                  border-collapse: collapse;">寄回修改</td>
                  <td style="border: 1px solid black;
                  border-collapse: collapse;">退　　稿</td>
                  <td style="border: 1px solid black;
                  border-collapse: collapse;">退　　稿</td>
                </tr>
                <tr style="border: 1px solid black;
                border-collapse: collapse;">
                  <td style="border: 1px solid black;
                  border-collapse: collapse;">退　　稿</td>
                  <td style="border: 1px solid black;
                  border-collapse: collapse;">第三位評審</td>
                  <td style="border: 1px solid black;
                  border-collapse: collapse;">第三位評審</td>
                  <td style="border: 1px solid black;
                  border-collapse: collapse;">退　　稿</td>
                  <td style="border: 1px solid black;
                  border-collapse: collapse;">退　　稿</td>
                </tr>
              </table>
            </li>
            <li>各項評審意見將函送投稿人，並說明處理方式。</li>
        </p>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>聯絡我們</h2>
        </div>

        <div class="row">

          <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>聯絡地址</h3>
              <p>(24205)新北市新莊區中正路510號</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>fjreview@mail.fju.edu.tw</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3>連絡電話</h3>
              <p>電話 : (02)2905-3985<br>傳真 : (02)2905-2186</p>
            </div>
          </div>

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="姓名" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="信箱" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="主題" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="內容"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">載入中</div>
                <div class="error-message"></div>
                <div class="sent-message">謝謝!您的信件已送出!</div>
              </div>
              <div class="text-center"><button type="submit">送出</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->
    
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