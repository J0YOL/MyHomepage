<!DOCTYPE html>
<html lang="kor">
    <head>
        <title>나만의 홈페이지</title>
        <link rel="stylesheet" type="text/css" href="../CSS/common.css">
        <link rel="stylesheet" type="text/css" href="../CSS/main.css">
        <link rel="stylesheet" type="text/css" href="../CSS/subpage.css?ver='1'">    
        <link rel="stylesheet" type="text/css" href="../CSS/photo.css">
        <link rel="stylesheet" type="text/css" href="../css/subpage_common.css">
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
			<h4>Friend</h4>
			<ul>
				<li>HOME ></li>
				<li> About Me ></li>
				<li id="other_color"> Friend</li>
            </ul>
            </div>
            <article id="img_slide">
                <div id="slider">
                    <figure>
                        <img src="../Img/AboutMe/friend/friends1.JPG" alt>
                        <img src="../Img/AboutMe/friend/friends2.JPG" alt>
                        <img src="../Img/AboutMe/friend/friends3.JPG" alt>
                        <img src="../Img/AboutMe/friend/friends4.JPG" alt>
                        <img src="../Img/AboutMe/friend/friends5.JPG" alt>
                        <img src="../Img/AboutMe/friend/friends6.jpg" alt>
                        <img src="../Img/AboutMe/friend/friends7.JPG" alt>
                        <img src="../Img/AboutMe/friend/friends8.JPG" alt>
                        <img src="../Img/AboutMe/friend/friends9.JPG" alt>
                        <img src="../Img/AboutMe/friend/friends10.JPG" alt>
                        <img src="../Img/AboutMe/friend/friends11.jpg" alt>
                        <img src="../Img/AboutMe/friend/friends12.jpg" alt>
                    </figure>
                </div>
            </article>
            <p id="break"><br></p>
            <!--photo table-->
            <table id="photo_table">
                    <tr>
                        <td>
                            <img id="image" src="../Img/AboutMe/friend1.jpg">
                            <h4><a href="/AboutMe/middle.php">임하진</a></h4>
                            <p id="date"><span>알게된 시기: </span>2013.03.02</p>
                            <p id="date"><span>별명: </span>임하, 갑오징어 등</p>
                        </td>
                        <td>
                            <img id="image" src="../Img/AboutMe/friend2.jpg">
                            <h4><a href="/AboutMe/middle.php">채수빈</a></h4>
                            <p id="date"><span>알게된 시기: </span>2013.03.02</p>
                            <p id="date"><span>별명: </span>채수, 꼴뚜기 등</p>
                        </td>
                        <td>
                            <img id="image" src="../Img/AboutMe/friend3.JPG">
                            <h4><a href="/AboutMe/high.php">이지현</a></h4>
                            <p id="date"><span>알게된 시기: </span>2017.03.02 </p>
                            <p id="date"><span>별명: </span>막내, 일루와 등</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img id="image" src="../Img/AboutMe/friend4.jpg">
                            <h4><a href="/AboutMe/high.php">정다정</a></h4>
                            <p id="date"><span>알게된 시기: </span>2017.03.02</p>
                            <p id="date"><span>별명: </span>다앙이, 첫째 등</p>
                        </td>
                        <td>
                            <img id="image" src="../Img/AboutMe/friend5.jpg">
                            <h4><a href="/AboutMe/university.php">김지윤</a></h4>
                            <p id="date"><span>알게된 시기: </span>2019.03.02</p>
                            <p id="date"><span>별명: </span>지윤지윤, 공주님 등</p>
                        </td>
                    </tr>
                </table>
           
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