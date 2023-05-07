<?php
    session_start();
    if (isset($_SESSION["userid"])) 
        $userid = $_SESSION["userid"];
    else 
        $userid = "";
        
    if (isset($_SESSION["username"])) 
        $username = $_SESSION["username"];
    else 
        $username = "";
?>	
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- The Open Graph Protocal -->
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="Heropy Coffee" />
  <meta property="og:title" content="Heropy Coffee Landing" />
  <meta property="og:description" content="헤로피커피는 세계에서 가장 큰 다국적 커피 전문점으로, 64개국에서 총 23,187개의 매점을 운영하고 있습니다." />
  <meta property="og:image" content="./images/for_seo.jpg" />
  <meta property="og:url" content="https://epic-darwin-271c77.netlify.app" />
  <!-- Twitter Cards -->
  <meta property="twitter:card" content="summary" />
  <meta property="twitter:site" content="Heropy Coffeee" />
  <meta property="twitter:title" content="Heropy Coffee Landing" />
  <meta property="twitter:description" content="헤로피커피는 세계에서 가장 큰 커피 전문점으로, 64개국에서 총 23,187개의 매점을 운영하고 있습니다." />
  <meta property="twitter:image" content="./images/for_seo.jpg" />
  <meta property="twitter:url" content="https://epic-darwin-271c77.netlify.app" />
  <title>BikeINTRO</title>
  <link rel="icon" href="favicon-removebg-preview.png" />
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css">
  <!--Google APIs-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet" />
  <link rel="stylesheet" href="./css/main.css">
  <!-- Swiper.js -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js" integrity="sha512-H6cPm97FAsgIKmlBA4s774vqoN24V5gSQL4yBTDOY2su2DeXZVhQPxFK4P6GPdnZqM9fg1G3cMv5wD7e6cFLZQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollToPlugin.min.js" integrity="sha512-agNfXmEo6F+qcj3WGryaRvl9X9wLMQORbTt5ACS9YVqzKDMzhRxY+xjgO45HCLm61OwHWR1Oblp4QSw/SGh9SA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js" integrity="sha512-8E3KZoPoZCD+1dgfqhPbejQBnQfBXe8FuwL4z/c8sTrgeDMFEnoyTlH3obB4/fV+6Sg0a0XF+L/6xS4Xx1fUEg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script defer src="./js/youtube.js"></script>
  <script defer src="./js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<!-- HEADER -->
<header>
  <div class="inner">
    <a href="/" class="logo">
      <img src="./images/logo.png" alt="Helmet" /> <!--로고 크기는 75*75-->
    </a>
    <div class="sub-menu">
        <ul class="menu">
            <?php
                 if(!$userid) {
            ?>                
              <li><a href="form.php">회원가입</a></li>
              <li><a href="login_form.php">로그인</a></li>
              <li><a href="php/10/freeboard/list.php">비회원 게시판</a></li>
            <?php
                } else {
                $logged = $username."(".$userid.")";
            ?>
            <li><a><?=$logged?></a></li>
            <li><a href="logout.php">로그아웃</a></li>
            <li><a href="modify_form.php">정보수정</a></li>
            <li><a href="php/12/memberboard/list.php">회원 게시판</a></li>
            <?php
                 }
             ?>
        </ul>
    </div>
        <ul class="main-menu">
      <li class="item">
        <div class="item__name">PURPOSE</div>
        <div class="item__contents">
          <div class="contents__menu">
            <ul class="inner">
              <li>
                <h4>클래식</h4>
                <ul>
                  <li>스탠다드</li>
                  <li>카페레이서</li>
                  <li>스크램블러</li>
                  <li>트래커</li>
                  <li>챠퍼</li>
                  <li>바버</li>
                  <li>ETC</li>
                </ul>
              </li>
              <li>
                <h4>온로드</h4>
                <ul>
                  <li>네이키드</li>
                  <li>모타드</li>
                  <li>스포츠</li>
                  <li>투어러</li>
                  <li>크루즈</li>
                  <li>언더본</li>
                  <li>스쿠터</li>
                  <li>ETC</li>
                </ul>
              </li>
              <li>
                <h4>듀얼퍼포즈</h4>
                <ul>
                  <li>듀얼스포츠</li>
                  <li>어드벤쳐</li>
                </ul>
              </li>
              <li>
                <h4>오프로드</h4>
                <ul>
                  <li>엔듀로</li>
                  <li>모토크로스</li>
                  <li>트라이얼</li>
                  </ul>
              </li>
            </ul>
          </div>
          <div class="contents__texture">
            <div class="inner">
              <h4>목적별 이륜차 소개</h4>
              <p>여러분들이 이륜차에 입문하려는 목적에 맞는 이륜차를 소개해드립니다</p>
            </div>
          </div>
        </div>
      </li>
      <li class="item">
        <div class="item__name">BRAND</div>
        <div class="item__contents">
          <div class="contents__menu">
            <ul class="inner">
              <li>
                <a href="https://www.bmwmotorcycles.com/en/home.html#/filter-all" target="_blank"><h4>BMW</h4></a>
                <ul>
                  <li>G 310 R</li>
                  <li>R nineT</li>
                  <li>R 18</li>
                  <li>R 1250 GS Adventure</li>
                  <li>S 1000 R</li>
                  <li>S 1000 RR</li>
                  <li>K 1600 GTL</li>
                </ul>
              </li>
              <li>
                <a href="https://www.suzuki.kr/allmodel" target="_blank"><h4>SUZUKI</h4></a>
                <ul>
                  <li>Address 125</li>
                  <li>Gsx-s125</li>
                  <li>Burgman 125</li>
                  <li>V-strome 250</li>
                  <li>HAYABUSA</li>
                </ul>
              </li>
              <li>
                <a href="https://www.harley-davidson.com/kr/ko/ motorcycles/index.html?format=json;i=1;locale=ko_KR;q1=bikes;sp_cs=UTF-8;x1=primaryCategoryCode" target="_blank"><h4>Harly-Davison</h4></a>
                <ul>
                  <a><li>Street750</li></a>
                  <li>Iron883</li>
                  <li>Sposter S</li>
                  <li>Sposter Forty-Eight</li>
                  <li>Nighster S</li>
                </ul>
              </li>
              <li>
                <a href="https://www.hondakorea.co.kr/motorcycle/main/main.do" target="_blank"><h4>HONDA</h4></a>
                <ul>
                  <li>Super Cub</li>
                  <a><li>Cbr125</li></a>
                  <li>PCX</li>
                  <li>Monkey125</li>
                  <li>MSX 125</li>
                  <li>CB125r</li>
                  <li>Rebel500</li>
                  <li>GoldWing</li>                  
                </ul>
              </li>
              <li>
                <a href="https://kawasakikorea.com/motorcycle" target="_blank"><h4>KAWASAKI</h4></a>
                <ul>
                  <a><li>z125</li></a>
                  <li>Ninja 400</li>
                  <li>Z650RS</li>
                  <li>W 800</li>
                  <li>Ninja H2</li>
                </ul>
              </li>
              <li>
                <a href="https://www.vespa.com/kr_KO/" target="_blank"><h4>VESPA</h4></a>
                <ul>
                  <li>GTS Super</li>
                  <li>PRIMSVERA</li>
                  <li>SPRINT</li>
                  <li>LX</li>
                  <a href="https://www.vespa.com/kr_KO/models/sei-giorni/" target="_blank"><li>Sei Giorni 300</li></a>
                </ul>
              </li>
              <li>
                <a href="https://ysk.co.kr" target="_blank"><h4>YAMAHA</h4></a>
                <ul>
                  <li>NMAX 125</li>
                  <li>TRICITY 125</li>
                  <li>MT-03</li>
                  <li>R3</li>
                  <li>SR400</li>
                  <li>XSR 900</li>                
                </ul>
              </li>
            </ul>
          </div>
          <div class="contents__texture">
            <div class="inner">
              <h4>브랜드별 이륜차 소개</h4>
              <p>이 밖에도 SYM, ROYAL ENFIELD, DUCATI, TRIUMPH 등 다양한 브랜드가 있습니다.</p>
            </div>
          </div>
        </div> 
      </li> 
      <li class="item">
        <div class="item__name">ENGINE DISPLACEMENT</div>
        <div class="item__contents">
          <div class="contents__menu">
            <ul class="inner">
              <li>
                <h4>저배기급 (~125CC)</h4>
                <ul>
                  <li>HONDA Super Cub</li>
                  <li>HONDA Cbr125</li>
                  <li>HONDA Pcx</li>
                  <li>VESPA Gts Super</li>
                  <li>SUZUKI Address 125</li>
                </ul>
              </li>
              <li>
                <h4>쿼터급 (~300CC)</h4>
                <ul>
                  <li>BMW 310 R</li>
                  <li>VESPA Sei-Gorni</li>
                </ul>
              </li>
              <li>
                <h4>미들급 (~600CC)</h4>
                <ul>
                  <li>HONDA Rabel 500</li>
                  <li>HARLY-DAVISON Iron 883</li>

                </ul>
              </li>
              <li>
                <h4>리터급 (~1000CC)</h4>
                <ul>
                  <li>HARLY-DAVISON Iron 883</li>
                  <li>BMW S1000 R</li>
                </ul>
              </li>
              <li>
                <h4>오버리터급 (1000CC~)</h4>
                <ul>
                  <li>SUZUKI V-Strom 1050</li>
                  <li>HONDA GoldWing</li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="contents__texture">
            <div class="inner">
              <h4>배기량별 이륜차 소개</h4>
              <p>배기량별로 입문하기 좋은 이륜차를 소개해드립니다.</p>
              <p>입문자들에겐 저배기급, 쿼터급을 추천해드립니다.</p>
            </div>
          </div>
        </div> 
      </li>
    </ul>
  </div>

  <!--BADGES-->
  <div class="badges">
    <div class="badge">
      <input id="make" placeholder="ex : bmw"><br>
      <input id="model" placeholder="ex : r nine t"><br>
      <button class="btn-success" id="search"> 검색 </button>
    </div>
  </div>

  
</header>

<!--VISUAL-->
<!--YOUTUBE VIDEO-->
<section class="youtube">
  <div class="youtube__area">
    <video src="videos/introLONG.MP4" autoplay muted width="1920" height="1080"></video>

  </div>
  <div class="youtube__cover"></div>
  <div class="inner">
  </div>
</section>

<!--NOTICE-->
<section class="notice">
  <div class="bg-left"></div>
  <div class="bg-right"></div>
  <div class="inner">
    <div class="inner__left">
      <h2>이륜차 안전교육</h2>
    </div>
    <div class="inner__right">
    </div>
  </div>
</section>

<!--PROMOTION-->
<section class="promotion">
  <div class="swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <video src="videos/save1.mp4" controls  width="820" height="450"></video>
        <p>안전영상1</p>
      </div>
      <div class="swiper-slide">
        <video src="videos/safe2.mp4" controls  width="820" height="450"></video>
        <p>안전영상2</p>
      </div>
      <div class="swiper-slide">
        <video src="videos/safe3.mp4" controls  width="820" height="450"></video>
        <p>안전영상3</p>
      </div>
    </div>
  </div>
  <div class="swiper-pagination"></div>
  <div class="swiper-button-prev">
    <span class="material-icons">arrow_back</span>
  </div>
  <div class="swiper-button-next">
    <span class="material-icons">arrow_forward</span>
  </div>
</section>

<!--AWARDS-->
<section class="awards">
  <div class="inner">
    <div class="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">     <!-- 192 * 40 -->
          <img src="images/HONDA.png" alt="HONDA" width="192" height="40"/>
        </div>
        <div class="swiper-slide">
          <img src="images/DUCATI.png" alt="DUCATI" width="192" height="40"/>
        </div>
        <div class="swiper-slide">
          <img src="images/Harley-Davidson.png" alt="Harley-Davidson" width="192" height="40"/>
        </div>
        <div class="swiper-slide">
          <img src="images/BMW.png" alt="BMW width="192" height="40"/>
        </div>
        <div class="swiper-slide">
          <img src="images/KAWASAKI.png" alt="KAWASAKI" width="192" height="40"/>
        </div>
        <div class="swiper-slide">
          <img src="./images/SUZUKI.png" alt="SUZUKI" width="192" height="40"/>
        </div>
        <div class="swiper-slide">
          <img src="./images/VESPA.png" alt="VESPA" width="192" height="40"/>
        </div>
        <div class="swiper-slide">
          <img src="./images/YAMAHA.png" alt="YAMAHA" width="192" height="40"/>
        </div>
        <div class="swiper-slide">
          <img src="./images/KTM.png" alt="KTM" width="192" height="40"/>
        </div>
        <div class="swiper-slide">
          <img src="./images/TRIUMPH.png" alt="TRIUMPH" width="192" height="40"/>
        </div>
      </div>
    </div>
    <div class="swiper-button-prev">
      <span class="material-icons">arrow_back</span>
    </div>
    <div class="swiper-button-next">
      <span class="material-icons">arrow_forward</span>
    </div>
  </div>
</section> 

<!--FOOTER-->
<footer>
  <div class="inner">
    <ul class="menu">
      <li><a href="javascript:void(0)" class="orange">개인정보처리방침</a></li>
      <li><a href="javascript:void(0)">영상정보처리기기 운영관리 방침</a></li>
      <li><a href="javascript:void(0)">홈페이지 이용약관</a></li>
      <li><a href="javascript:void(0)">위치정보 이용약관</a></li>
      <li><a href="javascript:void(0)">카드 이용약관</a></li>
      <li><a href="javascript:void(0)">윤리경영 핫라인</a></li>
    </ul>
    <div class="btn-group">
      <a href="map.html" class="btn btn--white">찾아오시는 길</a>
      <a href="openkakao.png" class="btn btn--white">신규입점제의</a>
      <a href="javascript:void(0)" class="btn btn--white">사이트 맵</a>
    </div>
    <div class="info">
      <span>사업자등록번호 123-45-678901</span>
      <span>(주)바이크인트로 코리아</span>
      <span>TEL : 02) 1234-5678 / FAX : 02) 1234-5678</span>
      <span>개인정보 책임자 : 오세화</span>
    </div>
    <p class="copyright">
      &copy; <span class="this-year"></span>
      BikeIntro Company. All Rights Reserved.
    </p>
    <!-- <img src="images/logo_text.png" alt="HEROPY COFFEE" class="logo" /> -->
  </div>
</footer>

<!--TO TOP BUTTON-->
<div id="to-top">
  <div class="material-icons">arrow_upward</div>
</div>

<script defer src="js/api.js"></script>
</body>
</html>