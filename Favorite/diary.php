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
                <h4>Diary Decoration</h4>
                <ul>
                    <li>HOME >&nbsp;</li>
                    <li> Favorite >&nbsp;</li>
                    <li id="other_color"> Diary Decoration</li>
                </ul>
            </div>
            <input type="button" value="목록보기" onclick="location.href='all.php'">
            <div id="Favorite_title">
                <h2>My Diary</h2>
            </div>
            <article id="img_slide">
                <div id="slider">
                    <figure>
                        <img src="../Img/Favorite/Diary/diary01.jpeg" alt>
                        <img src="../Img/Favorite/Diary/diary02.jpeg" alt>
                        <img src="../Img/Favorite/Diary/diary03.jpeg" alt>
                        <img src="../Img/Favorite/Diary/diary04.jpeg" alt>
                        <img src="../Img/Favorite/Diary/diary05.jpeg" alt>
                        <img src="../Img/Favorite/Diary/diary06.jpeg" alt>
                        <img src="../Img/Favorite/Diary/diary07.jpeg" alt>
                        <img src="../Img/Favorite/Diary/diary08.jpeg" alt>
                        <img src="../Img/Favorite/Diary/diary09.jpeg" alt>
                        <img src="../Img/Favorite/Diary/diary10.jpeg" alt>
                        <img src="../Img/Favorite/Diary/diary11.jpeg" alt>
                        <img src="../Img/Favorite/Diary/diary12.jpeg" alt>
                    </figure>
                </div>
            </article>
            <article id="sub_text">
                <div>
                    <h2>My Favorite Diary</h2>
                    <p id="title">나만의 홈페이지 만들기 My Webpage</p>
                    <p id="break"><br></p>

                    <p><span>2021년부터 시작한 취미인 다이어리꾸미기!</span></p>
                    <p>원래 일기는 잔잔하게 기록 남기기 용으로 했었지만, 한 유튜브 영상을 보고 본격적으로 꾸미게된다.</p>
                    <p>생각보다 비용이 많이 드는 취미지만, 다꾸로 한권을 다 꾸미게 되면 정말 뿌듯하다.</p>
                </div>
            </article>
            <article id="img_slide">
                <div id="slider">
                    <figure>
                        <img src="../Img/Favorite/Diary/diary12.jpeg" alt>
                        <img src="../Img/Favorite/Diary/diary11.jpeg" alt>
                        <img src="../Img/Favorite/Diary/diary10.jpeg" alt>
                        <img src="../Img/Favorite/Diary/diary09.jpeg" alt>
                        <img src="../Img/Favorite/Diary/diary08.jpeg" alt>
                        <img src="../Img/Favorite/Diary/diary07.jpeg" alt>
                        <img src="../Img/Favorite/Diary/diary06.jpeg" alt>
                        <img src="../Img/Favorite/Diary/diary05.jpeg" alt>
                        <img src="../Img/Favorite/Diary/diary04.jpeg" alt>
                        <img src="../Img/Favorite/Diary/diary03.jpeg" alt>
                        <img src="../Img/Favorite/Diary/diary02.jpeg" alt>
                        <img src="../Img/Favorite/Diary/diary01.jpeg" alt>
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