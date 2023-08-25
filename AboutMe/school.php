<!DOCTYPE html>
<html lang="kor">
    <head>
        <title>나만의 홈페이지</title>
        <link rel="stylesheet" type="text/css" href="../CSS/common.css">
        <link rel="stylesheet" type="text/css" href="../CSS/main.css">
        <link rel="stylesheet" type="text/css" href="../CSS/subpage.css?ver='1'">    
        <link rel="stylesheet" href="../css/subpage_common.css">
        <link rel="stylesheet" href="../CSS/school_table.css">
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
			<h4>School</h4>
			<ul>
				<li>HOME ></li>
				<li> About Me ></li>
				<li id="other_color"> Shool</li>
            </ul>
            </div>
            
            <article id="sub_text">
                <div>
                    <h2>SCHOOL</h2>
                    <p id="title">나만의 홈페이지 만들기 My WebPage</p>
                </div>
                <br>
                <table border = "1">
                    <tr id="title">  
                        <th>시기</th>
                        <th>학교전경</th>
                        <th>학교이름</th>
                    </tr>
                    <tr>
                        <td>중학교</td>
                        <td><img id="school_img" src="/Img/AboutMe/middle.jpg"></td>
                        <td><a href="./middle.php">경상중학교 </a></td>
                    </tr>
                    <tr>
                        <td>고등학교</td>
                        <td><img id="school_img" src="/Img/AboutMe/high.jpg"></td>
                        <td><a href="./high.php">원화여자고등학교</a></td>
                    </tr>
                    <tr>
                        <td>대학교</td>
                        <td><img id="school_img" src="/Img/AboutMe/university.jpg"></td>
                        <td><a href="./university.php">계명대학교</a></td>
                    </tr>
                </table>
                <ul id="left">
                    <li>학교이름을 클릭하면 해당 링크로 이동합니다.</li>
                </ul>
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