<!DOCTYPE html>
<html lang="kor">
    <head>
        <title>나만의 홈페이지</title>
        <link rel="stylesheet" type="text/css" href="../CSS/common.css">
        <link rel="stylesheet" type="text/css" href="../CSS/main.css">
        <link rel="stylesheet" type="text/css" href="../CSS/subpage.css?ver='1'">    
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
			<h4>Middle School</h4>
			<ul>
				<li>HOME ></li>
				<li> About Me ></li>
				<li id="other_color"> Middle Shool</li>
            </ul>
            </div>
            <!--여기 바꿔야 할 부분-->
            <article id="sub_text">
                <div>
                <h2>Middle School</h2>
                <p id="title">나만의 홈페이지 만들기 My WebPage</p>
                <p id="break"><br></p>
			
				<p><span>나의 14살, 15살, 16살의 대부분을 차지한 시설</span></p>
                <p>초등학교보다는 친구들과의 공유하는 시간이 늘어나 더 재밌는 추억이 많던 시절</p>
                <p>아무 것도 안해도 친구들이랑만 있어도 너무 즐거웠던 시기이다.</p>
                </div>
            </article>
            <article id="school_img">             
                <img src="../Img/AboutMe/middle05.jpg">            
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