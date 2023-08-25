<!DOCTYPE html>
<html lang="kor">
    <head>
        <title>나만의 홈페이지</title>
        <link rel="stylesheet" type="text/css" href="../CSS/common.css">
        <link rel="stylesheet" type="text/css" href="../CSS/main.css">
        <link rel="stylesheet" type="text/css" href="../CSS/subpage.css?ver='1'">  
        <link rel="stylesheet" type="text/css" href="../CSS/tour.css">     
        <link rel="stylesheet" href="../css/subpage_common.css">
        <link rel="stylesheet" href="../CSS/Favorite.css">
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
			<h4>All Favorite</h4>
			<ul>
				<li>HOME >&nbsp;</li>
				<li> Favorite >&nbsp;</li>
				<li id="other_color"> All Favorite</li>
            </ul>
            </div>
            <!--Here Favorite Order-->
            <div id="Favorite">
                <div class="image">
                    <img src="../Img/Favorite/all_game.jpg">
                </div>
                <div class="text">
                    <h5>나의 첫 번째 취미: 게임하기</h5>
                    <div class="detail">
                        <p>현재 가장 빠져서 플레이 중인 게임인 로스트아크!</p>
                        <a href="./Game.php"><input type="button" value="상세페이지 보기" class="button_favorite"></a>
                    </div>                   
                </div>                 
            </div>
            <div id="Favorite">
                <div class="image">
                    <img src="../Img/Favorite/all_diary.jpg">
                </div>
                <div class="text">
                    <h5>나의 두 번째 취미: 다이어리 꾸미기</h5>
                    <div class="detail">
                        <p>작년부터 시작해서 조금씩 작성 중인 나의 다꾸!</p>
                        <a href="./diary.php"><input type="button" value="상세페이지 보기" class="button_favorite"></a>
                    </div>                   
                </div>                 
            </div>
            <div id="Favorite">
                <div class="image">
                    <img src="../Img/Favorite/all_food.jpg">
                </div>
                <div class="text">
                    <h5>내가 가장 좋아하는 음식, 식당들을 모아놓은 곳</h5>
                    <div class="detail">
                        <p>한식처돌이의 대구 중심 맛집 정리</p>
                        <a href="./food.php"><input type="button" value="상세페이지 보기" class="button_favorite"></a>
                    </div>                   
                </div>                 
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