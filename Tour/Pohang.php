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
                <h4>Pohang</h4>
                <ul>
                    <li>HOME >&nbsp;</li>
                    <li> Tour >&nbsp;</li>
                    <li id="other_color"> Pohang</li>
                </ul>
            </div>
            <input type="button" value="목록보기" onclick="location.href='all.php'">
           
            <div class="Tour_case">
                <h2 id="Tour_title">KTX안에서</h2>
                <p id="Tour_detail">중학교 친구들이랑 오랜만에 만나서 기차안에서도 너무 신난 상태였다.</p>
                <p id="Tour_detail">터널에 들어가서 어두웠던 밖을 배경삼아 거울셀카처럼 사진을 호다닥!</p>
                <img id="Tour_img_two" src="../Img/Tour/Pohang/trail01.JPG">
                <img id="Tour_img_two" src="../Img/Tour/Pohang/trail02.JPG">        
            </div>
            <div class="Tour_case">
                <h2 id="Tour_title">Nature Pool Villa</h2>
                <p id="Tour_detail">저 당시 한 명은 직장인, 한 명은 재수생이였을 때 다들 너무 낡고 지친 상태라,, 펜션을 빌렸다.</p>
                <p id="Tour_detail">비싼만큼 힐링을 제대로 할 수 있었던 우리의 숙소! 또 가고 싶다..</p>
                <img id="Tour_img_two" src="../Img/Tour/Pohang/room01.JPG">
                <img id="Tour_img_two" src="../Img/Tour/Pohang/room02.JPG">        
            </div>
            <div class="Tour_case">
                <h2 id="Tour_title">파자마입고 침대에서!</h2>
                <p id="Tour_detail">하루종일 펜션에서 힐링할 예정이라 도착하자마자 파자마로 갈아입었다.</p>
                <p id="Tour_detail">새하얀 침대에 앉아 사이좋게 다같이 찰칵!</p>
                <img id="Tour_img_two" src="../Img/Tour/Pohang/bed01.JPG">
                <img id="Tour_img_two" src="../Img/Tour/Pohang/bed02.JPG">        
            </div>
            <div class="Tour_case">
                <h2 id="Tour_title">바베큐 파티!</h2>
                <p id="Tour_detail">포항도착해서 바로 이마트가서 샀던 고기들을 맛있게 구어먹었다.</p>
                <p id="Tour_detail">저 날따라 너무 잘 들어가서 고기가 부족했지만, 근처에 마트가 없어서 포기했던..</p>
                <img id="Tour_img_two" src="../Img/Tour/Pohang/meat01.JPG">
                <img id="Tour_img_two" src="../Img/Tour/Pohang/meat02.JPG">        
            </div>
            <div class="Tour_case">
                <h2 id="Tour_title">마지막 딤섬으로 마무리</h2>
                <p id="Tour_detail">하루종일 힐링해서 가득 채운 에너지로 대구에 도착해서 신세계 백화점을 갔다.</p>
                <p id="Tour_detail">'딤딤섬'집에서 점심을 먹으며 이 여정을 마무리 지었다!</p>
                <img id="Tour_img_two" src="../Img/Tour/Pohang/last01.JPG">
                <img id="Tour_img_two" src="../Img/Tour/Pohang/last02.JPG">        
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