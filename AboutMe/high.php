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
			<h4>High School</h4>
			<ul>
				<li>HOME ></li>
				<li> About Me ></li>
				<li id="other_color"> High School</li>
            </ul>
            </div>
            <article id="sub_text">
                <div>
                <h2>High School</h2>
                <p id="title">나만의 홈페이지 만들기 My WebPage</p>
                <p id="break"><br></p>
			
				<p><span>나의 17살, 18살, 19살의 대부분을 차지한 시설</span></p>
                <p>학업 스트레스때문에 당시에는 힘들었지만 지금 생각하면 나름 즐거웠던 시절</p>
                <p>친구들이랑 같이 있어서 버틸 수 있었던 시기이다!</p>
                </div>
            </article>
            <article id="school_img">              
                <img src="../Img/AboutMe/high01.JPG">               
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