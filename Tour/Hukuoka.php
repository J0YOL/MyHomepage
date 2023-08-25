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
                <h4>Hukuoka</h4>
                <ul>
                    <li>HOME >&nbsp;</li>
                    <li> Tour >&nbsp;</li>
                    <li id="other_color"> Hukuoka</li>
                </ul>
            </div>
            <input type="button" value="목록보기" onclick="location.href='all.php'">
           <!--드디어 짰다..!-->
            <div class="Tour_case">
                <h2 id="Tour_title">일본에서의 첫 디저트!</h2>
                <p id="Tour_detail">후쿠오카 첫 날에 비가 와서 살짝 슬펐지만, 그래도 분위기있어 괜찮았다.</p>
                <p id="Tour_detail">숙소에 짐두자마자 처음으로 간 디저트 집</p>
                <img id="Tour_img_two" src="../Img/Tour/Hukuoka/Hukuoka_desert01.JPG">
                <img id="Tour_img_two" src="../Img/Tour/Hukuoka/Hukuoka_desert02.JPG">        
            </div>
            <div class="Tour_case">
                <h2 id="Tour_title">일본에서의 첫 식사!</h2>
                <p id="Tour_detail">일본하면 생각나는 전골 중 하나인 곱창전골을 먹었다.</p>
                <p id="Tour_detail">한국과는 다르게 국물은 먹는 것이 아니라 당황했던 기억이 남아있다.</p>
                <img id="Tour_img_two" src="../Img/Tour/Hukuoka/Hukuoka_food01.JPG">
                <img id="Tour_img_two" src="../Img/Tour/Hukuoka/Hukuoka_food02.JPG">        
            </div>
            <div class="Tour_case">
                <h2 id="Tour_title">숙소에 있던 우유 자판기!</h2>
                <p id="Tour_detail">짱구 애니메이션에 꼭 나오는 그 우유 자판기!!</p>
                <p id="Tour_detail">심지어 흰우유도 달달구리하고 너무 맛있었다ㅎㅎ</p>
                <img id="Tour_img_two" src="../Img/Tour/Hukuoka/milk01.JPG">
                <img id="Tour_img_two" src="../Img/Tour/Hukuoka/milk03.JPG">        
            </div>
            <div class="Tour_case">
                <h2 id="Tour_title">'이상한 나라의 앨리스' 컨셉샵!</h2>
                <p id="Tour_detail">일본여행지에서 가장 기분 좋았던 컨셉샵이었다.</p>
                <p id="Tour_detail">기대안하고 갔던 곳인데 동심유발이라서 설레고 재밌었다!</p>
                <img id="Tour_img_two" src="../Img/Tour/Hukuoka/Allis02.JPG">
                <img id="Tour_img_two" src="../Img/Tour/Hukuoka/Allis03.JPG">        
            </div>
            <div class="Tour_case">
                <h2 id="Tour_title">살짝 후회되는 야끼니꾸</h2>
                <p id="Tour_detail">이 날 그 전에 너무 많이 먹어서 당시에 별로 많이 못 먹었다..</p>
                <p id="Tour_detail">고기는 정말 맛있었는데 많이 못 먹어서 후회가 된다..</p>
                <img id="Tour_img_two" src="../Img/Tour/Hukuoka/beaf01.JPG">
                <img id="Tour_img_two" src="../Img/Tour/Hukuoka/beaf02.JPG">        
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