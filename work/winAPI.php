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
			<h4>WinAPI</h4>
			<ul>
				<li>HOME >&nbsp;</li>
				<li> Work>&nbsp; </li>
				<li id="other_color"> WinAPI</li>
            </ul>
            </div>
            <!--여기 바꿔야 할 부분-->
            <input type="button" value="목록보기" onclick="location.href='work_board_list.php'">
            <article id="sub_text">
                <div>
                <h2>WinAPI</h2>
                <p id="title">나만의 홈페이지 만들기 My WebPage</p>
                <p id="break"><br></p>
			
				<p><span>개발 환경없이도 게임을 제작하기 위해 했던 개발</span></p>
                <p>이전에는 '유니티'라는 개발 환경에서만 게임을 제작해봤었다.</p>
                <p>처음으로 Visual Studio, C++만을 사용해서 게임을 제작해봤다.</p>
                </div>
            </article>
            <article id="Game_img">
                <a href="https://drive.google.com/file/d/1YW47CitAopJmtfG3YeeScChOffAXAzB2/view?usp=sharing"><img src="/Img/work/flatform.jpg"></a>
            </article>
            <article id="sub_text">
                <div id="Game">
                    <h2>게임 제작 과정 및 소감</h2>
                    <p id="break"></p>
                    <p><span>창을 띄우는 것조차 시간이 걸렸었던 winAPI 게임 제작 과정..</span></p>
                    <p>유니티로 하면 바로 이미지를 불러올 수도 있지만,</p>
                    <p>이는 파일의 경로를 입력해서 직접 이미지의 배경을 삭제하는 함수까지 제작해서 사용해야 했다.</p>
                    <p>아무런 도움없이 개발했던 작품이라 다른 작품보다 초라해보이지만, 가장 능력을 향상시켜준 작품이라 생각한다.</p>
                    <p>크게 게임시작화면, 플레이어가 맵을 제작할 수 있도록 한 맵툴, 충돌처리, 목표지점까지 가는 플랫폼게임으로 이루어져 있다.</p>
                    <p>사실 플랫폼게임의 개발비중보다 맵툴의 개발비중이 높았다.</p>
                </div>
                <ul id="left">
                    <li>그림을 누르면 해당 게임의 파일 링크로 넘어갑니다.</li>
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