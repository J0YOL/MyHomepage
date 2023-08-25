<!DOCTYPE html>
<html lang="kor">
    <head>
        <title>나만의 홈페이지</title>
        <link rel="stylesheet" type="text/css" href="../CSS/common.css">
        <link rel="stylesheet" type="text/css" href="../CSS/main.css">
        <link rel="stylesheet" type="text/css" href="../CSS/subpage.css?ver='1'">    
        <link rel="stylesheet" href="../css/subpage_common.css">
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
			<h4>University</h4>
			<ul>
				<li>HOME ></li>
				<li> About Me ></li>
				<li id="other_color"> University</li>
            </ul>
            </div>

            <article id="sub_text">
                <div>
                <h2>University</h2>
                <p id="title">나만의 홈페이지 만들기 My WebPage</p>
                <p id="break"><br></p>
			
				<p><span>나의 20살, 21살, 그리고 현재에도 재학 중인 학교</span></p>
                <p>자유로운 분위기의 대학 생활, 자유로운 만큼 더 책임감있게 이끌어야하는 시기이다.</p>
                </div>
            </article>
            <article id="school_img">
                <img src="../Img/AboutMe/university01.JPG">
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