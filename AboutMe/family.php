<!DOCTYPE html>
<html lang="kor">
    <head>
        <title>나만의 홈페이지</title>
        <link rel="stylesheet" type="text/css" href="../CSS/common.css">
        <link rel="stylesheet" type="text/css" href="../CSS/main.css">
        <link rel="stylesheet" type="text/css" href="../CSS/subpage.css?ver='1'"> 
        <link rel="stylesheet" type="text/css" href="../CSS/photo.css">   
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
			<h4>Family</h4>
			<ul>
				<li>HOME ></li>
				<li> About Me ></li>
				<li id="other_color"> Family</li>
            </ul>
            </div>
            
            <article id="family_slide">
                <div id="slider">
                    <figure>
                        <img src="../Img/AboutMe/family/Family01.JPG" alt>
                        <img src="../Img/AboutMe/family/Family02.JPG" alt>
                        <img src="../Img/AboutMe/family/Family03.JPG" alt>
                        <img src="../Img/AboutMe/family/Family04.JPG" alt>
                        <img src="../Img/AboutMe/family/Family05.JPG" alt>
                        <img src="../Img/AboutMe/family/Family06.JPG" alt>
                        <img src="../Img/AboutMe/family/Family07.JPG" alt>
                        <img src="../Img/AboutMe/family/Family08.JPG" alt>
                        <img src="../Img/AboutMe/family/Family09.JPG" alt>
                        <img src="../Img/AboutMe/family/Family10.JPG" alt>
                        <img src="../Img/AboutMe/family/Family11.JPG" alt>
                        <img src="../Img/AboutMe/family/Family12.JPG" alt>
                    </figure>
                </div>
            </article>
            <p id="break"><br></p>
            <!--photo table-->
            <table id="photo_table">
                    <tr>
                        <td>
                            <img id="image" src="../Img/AboutMe/Family1.JPG">
                            <h4>한은숙</h4>
                            <p id="date"><span>나와의 관계: </span>모</p>
                        </td>
                        <td>
                            <img id="image" src="../Img/AboutMe/Family2.JPG">
                            <h4>조용준</h4>
                            <p id="date"><span>나와의 관계: </span>부</p>
                        </td>
                        <td>
                            <img id="image" src="../Img/AboutMe/Family3.JPG">
                            <h4>조아라</h4>
                            <p id="date"><span>나와의 관계: </span>자매</p>
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