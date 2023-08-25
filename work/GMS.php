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
			<h4>GameMaker Studio</h4>
			<ul>
				<li>HOME >&nbsp;</li>
				<li> Work >&nbsp;</li>
				<li id="other_color"> GameMaker Studio</li>
            </ul>
            </div>
            <!--여기 바꿔야 할 부분-->
            <input type="button" value="목록보기" onclick="location.href='work_board_list.php'">
            <article id="sub_text">
                <div>
                <h2>GameMaker Studio</h2>
                <p id="title">나만의 홈페이지 만들기 My WebPage</p>
                <p id="break"><br></p>
			
				<p><span>팀프로젝트로 진행한 나의 첫 작품</span></p>
                <p>GameMakerStudio의 개발환경으로 2인1조로 제작한 게임</p>
                <p>개발과 협동에 어색해 게임다운 게임은 아니지만, 첫 작품이라 의미가 깊은 작품이다.</p>
                </div>
            </article>
            <article id="Game_img">
                <a href="https://drive.google.com/file/d/1HKNnkHlaRfuOuRlrFZWJyW9Ha0RRYEUb/view?usp=sharing"><img src="/Img/work/10min.jpg"></a>
            </article>
            <article id="sub_text">
                <div id="Game">
                    <h2>게임 제작 과정 및 소감</h2>
                    <p id="break"></p>
                    <p><span>2인1조의 팀프로젝트였지만 거의 혼자 만들었던 작품</span></p>
                    <p>1학년때 컴퓨터 언어도 처음으로 배웠던 연도인 만큼 개발에 있어서도 서툴었다.</p>
                    <p>팀의 인원이 2명밖에 없었지만, 그 조차도 이끌기 힘들었다.</p>
                    <p>그래서 혼자서 처음부터 끝까지 서툰 실력으로 제작했던 게임이다.</p>
                    <p>이 서툰 작품으로 전시회까지 진행했던 수업이라 다른 조의 게임을 보고 본인의 부족함을 뼈저리게 느꼈다.</p>
                    <p>그래서 게임을 개발할 때 본인의 능력을 향상하고자 노력하고 있다.</p>
                </div>
                <ul id="left">
                    <li>그림을 누르면 해당 게임의 파일 링크로 넘어갑니다.</li>
                    <li>해당 작품은 원본 파일이 존재하지 않아 그 당시의 게임소개 PPT링크로 이동합니다.</li>
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