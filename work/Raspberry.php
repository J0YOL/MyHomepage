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
			<h4>Raspberry Pi</h4>
			<ul>
				<li>HOME >&nbsp;</li>
				<li> Work >&nbsp;</li>
				<li id="other_color"> Raspberry Pi</li>
            </ul>
            </div>
            <!--여기 바꿔야 할 부분-->
            <input type="button" value="목록보기" onclick="location.href='work_board_list.php'">
            <article id="sub_text">
                <div>
                <h2>Raspberry Pi</h2>
                <p id="title">나만의 홈페이지 만들기 My WebPage</p>
                <p id="break"><br></p>
			
				<p><span>현재 '실감유저인터페이스'수업에서 진행 중인 프로젝트</span></p>
                <p>처음으로 라즈베리파이라는 하드웨어 소품을 가지고 진행 중인 프로젝트이다.</p>
                <p>우리 팀은 이로 레트로 풍의 게임기를 제작 중이며 웹캠 기능도 추가할 예정이다.</p>
                </div>
            </article>
            <article id="Game_img">
                <a href="https://blog.naver.com/whdlthf0529/222722802421"><img src="/Img/work/pi.jpg"></a>
            </article>
            <article id="sub_text">
                <div id="Game">
                    <h2>게임 제작 과정 및 소감</h2>
                    <p id="break"></p>
                    <p>한 학기, 심지어 처음 1달은 코로나가 심각한 달이었어서 짧은 기간동안 제작해야 한다.</p>
                    <p>현재 '버블보블' '레트로 축구게임'의 오픈소스를 가져와 우리의 입맛대로 기능을 변경했다.</p>
                    <p>입력 키는 조이스틱으로 하려고 했으나 현재 알 수 없는 오류가 생겼다.</p>
                    <p>계속 이런 상태이면 키보드로 전향을 할 예정이나 최대한 조이스틱의 오류를 해결할 것이다.</p>
                    <p>여기에 특정 점수가 넘으면 사진을 찍을 수 있도록 웹캡 기능을 추가할 것이다.</p>
                    <p>6월 5일에 1차적으로 종료를 하고 사용자 피드백을 받아 수정해나갈 계획이다.</p>
                </div>
                <ul id="left">
                    <li>그림을 누르면 해당 게임의 파일 링크로 넘어갑니다.</li>
                    <li>해당 작품은 현재 진행 중인 프로젝트임으로 개발진행보고를 하는 블로그로 이동합니다.</li>
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