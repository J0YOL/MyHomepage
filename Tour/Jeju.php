<!DOCTYPE html>
<html lang="kor">
    <head>
        <title>나만의 홈페이지</title>
        <link rel="stylesheet" type="text/css" href="../CSS/common.css">
        <link rel="stylesheet" type="text/css" href="../CSS/main.css">
        <link rel="stylesheet" type="text/css" href="../CSS/subpage.css?ver='1'">    
        <link rel="stylesheet" type="text/css" href="../CSS/tour.css">
        <link rel="stylesheet" href="../css/subpage_common.css">
        <link rel="stylesheet" href="../CSS/work_table.css">
    </head>
    <body>
      <div id="wrap">
        <header>
            <?php include("../header.php"); ?>
        </header>
        <div class="sub_contents">
		<aside class="left_menu">
           <?php include("left_menu.html"); ?>
		</aside>

		<section class="sub_sections">
            <div class="sub_header">
                <h4>Juju Island</h4>
                <ul>
                    <li>HOME >&nbsp;</li>
                    <li> Tour >&nbsp;</li>
                    <li id="other_color"> Juju Island</li>
                </ul>
            </div>
            <input type="button" value="목록보기" onclick="location.href='all.php'">
            
            <div class="Tour_case">
                <h2 id="Tour_title">친구들과의 첫 비행기</h2>
                <p id="Tour_detail">공항가는 길부터 설렘가득!</p>
                <p id="Tour_detail">제주도도 다들 오랜만에 가기에 설레었던 길이다.</p>
                <img id="Tour_img_two" src="../Img/Tour/Jeju/air01.JPG">
                <img id="Tour_img_two" src="../Img/Tour/Jeju/air02.JPG">        
            </div>
            <div class="Tour_case">
                <h2 id="Tour_title">3박동안 우리가 머문 숙소</h2>
                <p id="Tour_detail">제주공항 근처에 있던 가성비 숙소!</p>
                <p id="Tour_detail">3박하는 내내 비가 와서 내부시설인 수영장을 못 누린게 슬프지만 침대가 아주 좋았던 기억이 있다.</p>
                <img id="Tour_img_two" src="../Img/Tour/Jeju/room01.JPG">
                <img id="Tour_img_two" src="../Img/Tour/Jeju/room02.JPG">        
            </div>
            <div class="Tour_case">
                <h2 id="Tour_title">동문시장</h2>
                <p id="Tour_detail">우리 숙소에서 5분거리였던 동문시장!</p>
                <p id="Tour_detail">야시장에서 맛나보이는 음식을 전부 사서 술과 함께 숙소에서 맛있게 먹었당!</p>
                <img id="Tour_img_two" src="../Img/Tour/Jeju/dongmun01.JPG">
                <img id="Tour_img_two" src="../Img/Tour/Jeju/dongmun02.JPG">        
            </div>
            <div class="Tour_case">
                <h2 id="Tour_title">제주 흑돼지</h2>
                <p id="Tour_detail">정말 맛있었던 제주 흑돼지!</p>
                <p id="Tour_detail">가게에서 계란찜을 서비스로 줬던 좋은 기억이 있다!</p>
                <img id="Tour_img_two" src="../Img/Tour/Jeju/food01.JPG">
                <img id="Tour_img_two" src="../Img/Tour/Jeju/food02.JPG">        
            </div>
            <div class="Tour_case">
                <h2 id="Tour_title">제주 스위스마을</h2>
                <p id="Tour_detail">알록달록 귀여웠던 제주 스위스 마을</p>
                <p id="Tour_detail">하지만 비가 너무 많이 와서 이쁜 사진도, 오래 즐기지도 못했다..</p>
                <img id="Tour_img_two" src="../Img/Tour/Jeju/Italy02.JPG">
                <img id="Tour_img_two" src="../Img/Tour/Jeju/ltaly01.JPG">        
            </div>
           
            <article class="question">
                <p><span>Tel :</span> 010-4199-8878 &nbsp &nbsp <span>E-mail :</span>&nbsp whdlthf0529@naver.com</p>
            </article>
        </section>
        
        <div class="clear"></div>
        </div>
        <footer>
            <?php include("../footer.html"); ?>
        </footer>
      </div>
    </body>
</html>