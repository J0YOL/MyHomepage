<!DOCTYPE html>
<html lang="kor">
    <head>
        <title>나만의 홈페이지</title>
        <link rel="stylesheet" type="text/css" href="../CSS/common.css">
        <link rel="stylesheet" type="text/css" href="../CSS/main.css">
        <link rel="stylesheet" type="text/css" href="../CSS/subpage.css?ver='1'">  
        <link rel="stylesheet" type="text/css" href="../CSS/Favorite.css">    
        <link rel="stylesheet" type="text/css" href="../CSS/photo.css"> 
        <link rel="stylesheet" type="text/css" href="../CSS/subpage_common.css">
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
                <h4>Game</h4>
                <ul>
                    <li>HOME >&nbsp;</li>
                    <li> Favorite >&nbsp;</li>
                    <li id="other_color"> Game</li>
                </ul>
            </div>
            <input type="button" value="목록보기" onclick="location.href='all.php'">
            <div id="Favorite_title">
                <h2>Lost Ark</h2>
            </div>
           
            <article id="img_slide">
                <div id="slider">
                    <figure>
                        <img src="../Img/Favorite/Game/game01.jpg" alt>
                        <img src="../Img/Favorite/Game/game02.jpg" alt>
                        <img src="../Img/Favorite/Game/game03.jpg" alt>
                        <img src="../Img/Favorite/Game/game04.jpg" alt>
                        <img src="../Img/Favorite/Game/game05.jpg" alt>
                        <img src="../Img/Favorite/Game/game06.jpg" alt>
                        <img src="../Img/Favorite/Game/game07.jpg" alt>
                        <img src="../Img/Favorite/Game/game08.jpg" alt>
                        <img src="../Img/Favorite/Game/game09.jpg" alt>
                        <img src="../Img/Favorite/Game/game10.jpg" alt>
                        <img src="../Img/Favorite/Game/game11.jpg" alt>
                        <img src="../Img/Favorite/Game/game12.jpg" alt>
                    </figure>
                </div>
            </article>
            <article id="sub_text">
                <div>
                    <h2>My Favorite Game</h2>
                    <p id="title">나만의 홈페이지 만들기 My Webpage</p>
                    <p id="break"><br></p>

                    <p><span>2021년부터 시작한 게임!</span></p>
                    <p>친구들과 무슨 게임을 할지 고민하던 중 그 당시 인기가 많은 게임인 로스트아크를 시작했다.</p>
                    <p>현재는 도화가와 서머너라는 캐릭터를 육성해며 친구들과 함께 즐기는 중이다.</p>
                </div>
            </article>
            <article id="img_slide">
                <div id="slider">
                    <figure>
                        <img src="../Img/Favorite/Game/game12.jpg" alt>
                        <img src="../Img/Favorite/Game/game09.jpg" alt>
                        <img src="../Img/Favorite/Game/game10.jpg" alt>
                        <img src="../Img/Favorite/Game/game11.jpg" alt>
                        <img src="../Img/Favorite/Game/game08.jpg" alt>
                        <img src="../Img/Favorite/Game/game07.jpg" alt>
                        <img src="../Img/Favorite/Game/game06.jpg" alt>
                        <img src="../Img/Favorite/Game/game05.jpg" alt>
                        <img src="../Img/Favorite/Game/game04.jpg" alt>
                        <img src="../Img/Favorite/Game/game03.jpg" alt>
                        <img src="../Img/Favorite/Game/game02.jpg" alt>
                        <img src="../Img/Favorite/Game/game01.jpg" alt>
                    </figure>
                </div>
            </article>
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