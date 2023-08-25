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
			<h4>Donut</h4>
			<ul>
				<li>HOME >&nbsp;</li>
				<li> Work >&nbsp;</li>
				<li id="other_color"> Donut</li>
            </ul>
            </div>
            <!--여기 바꿔야 할 부분-->
            <input type="button" value="목록보기" onclick="location.href='work_board_list.php'">
            <article id="sub_text">
                <div>
                <h2>Donut</h2>
                <p id="title">나만의 홈페이지 만들기 My WebPage</p>
                <p id="break"><br></p>
			
				<p><span>처음으로 내가 팀을 주도해서 자율적으로 제작한 게임</span></p>
                <p>나와 같은 관심 분야를 가진 친구를 모아서 제작한 게임이다.</p>
                <p>예상치 못한 컨셉의 게임이지만, 굉장히 귀엽고 키치한 느낌의 캐주얼 게임이다.</p>
                </div>
            </article>
            <article id="Game_img">
                <a href="https://drive.google.com/file/d/1UGn92cN-1T9SYt83PjACJSPBEebygshJ/view?usp=sharing"><img src="/Img/work/Donut.jpg"></a>
            </article>
            <article id="sub_text">
                <div id="Game">
                    <h2>게임 제작 과정 및 소감</h2>
                    <p id="break"></p>
                    <p>관심 분야의 사람들이 모인 만큼 의사소통과 협력을 하는 점에서 문제없이 진행되었다.</p>
                    <p>이는 처음에 공모전과 출시를 목표로 제작이 되었다.</p>
                    <p>이 팀에는 기획자가 없어 레벨 디자인이 아직 미완성 단계이지만, 1차 출시를 경험한 작품이다.</p>
                    <p>현재는 이 게임을 출품할만한 공모전을 발견해 준비하고 있는 단계이다.</p>
                    <p>추후에 시간이 된다면, 레벨 디자인을 제대로 해서 다시 출시할 계획이다.</p>
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