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
                <h4>Busan</h4>
                <ul>
                    <li>HOME >&nbsp;</li>
                    <li> Tour >&nbsp;</li>
                    <li id="other_color"> Busan</li>
                </ul>
            </div>
            <input type="button" value="목록보기" onclick="location.href='all.php'">
            
            <div class="Tour_case">
                <h2 id="Tour_title">광안리가 한 눈에 보이는 숙소</h2>
                <p id="Tour_detail">광안리에 있는 전망좋고 가성비도 좋은 숙소!</p>
                <p id="Tour_detail">숙소에 들어가서 커튼을 치자마자 너무 예쁜 경치에 감동했다.</p>
                <img id="Tour_img_two" src="../Img/Tour/Busan/room01.jpeg">
                <img id="Tour_img_two" src="../Img/Tour/Busan/room02.JPG">        
            </div>
            <div class="Tour_case">
                <h2 id="Tour_title">저녁으로 바닷가 조개구이</h2>
                <p id="Tour_detail">부산가면 항상 한 번씩은 먹게되는 조개구이!</p>
                <p id="Tour_detail">바로 앞에 바다가 보이고 싱싱한 조개를 구어먹는.. 너무 행복했다!</p>
                <img id="Tour_img_two" src="../Img/Tour/Busan/sea_food01.jpeg">
                <img id="Tour_img_two" src="../Img/Tour/Busan/sea_food02.jpeg">        
            </div>
            <div class="Tour_case">
                <h2 id="Tour_title">광안리가 보이는 카페</h2>
                <p id="Tour_detail">광안리 바로 앞에 있는 인스타 감성의 카페를 갔다.</p>
                <p id="Tour_detail">대구에 체인점이 있지만, 창문에 바다가 보여서 그런지 완전 색다른 느낌이었다.</p>
                <img id="Tour_img_two" src="../Img/Tour/Busan/cafe01.JPG">
                <img id="Tour_img_two" src="../Img/Tour/Busan/cafe02.JPG">        
            </div>
            <div class="Tour_case">
                <h2 id="Tour_title">스카이캡슐</h2>
                <p id="Tour_detail">단둘이 들어가서 자유롭게 떠들고 놀 수 있었던 스카이캡슐!</p>
                <p id="Tour_detail">시간대비 가격은 솔직히 많이 비쌌지만, 한 번쯤은 타볼만했다.</p>
                <img id="Tour_img_two" src="../Img/Tour/Busan/trail01.jpg">
                <img id="Tour_img_two" src="../Img/Tour/Busan/trail02.JPG">        
            </div>
            <div class="Tour_case">
                <h2 id="Tour_title">마지막 남은 사진들</h2>
                <p id="Tour_detail">폴라로이드를 들고다녔던 1박2일 여행</p>
                <p id="Tour_detail">핸드폰 카메라가 아닌 오프라인으로 이렇게 흔적이 남는 사진을 찍어서 특별했다.</p>
                <img id="Tour_img_two" src="../Img/Tour/Busan/picture01.jpeg">
                <img id="Tour_img_two" src="../Img/Tour/Busan/picture02.jpeg">        
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