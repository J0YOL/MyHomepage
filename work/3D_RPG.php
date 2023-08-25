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
			<h4>3D RPG</h4>
			<ul>
				<li>HOME >&nbsp;</li>
				<li> Work >&nbsp;</li>
				<li id="other_color"> 3D RPG</li>
            </ul>
            </div>
            <!--여기 바꿔야 할 부분-->
            <input type="button" value="목록보기" onclick="location.href='work_board_list.php'">
            <article id="sub_text">
                <div>
                <h2>3D RPG</h2>
                <p id="title">나만의 홈페이지 만들기 My WebPage</p>
                <p id="break"><br></p>
			
				<p><span>최적화의 중요성을 알기위해 제작한 게임</span></p>
                <p>본래 '3D게임프로그래밍'의 기말프로젝트로 제작했던 게임이다.</p>
                <p>약 1년뒤에 학원에서 최적화의 중요성을 배웠고 몸소 느끼기 위해 다시 건들였던 게임인 만큼 애정이 가는 작품이다.</p>
                <p>3D게임으로 제작한 RPG Game인 만큼 여러 컨텐츠의 요소가 담겨있는 게임이다.</p>
                </div>
            </article>
            <article id="Game_img">
                <a href="https://drive.google.com/file/d/1g_Ic-LdBtVx2x9grA7LHGVb_MQUbxPSc/view?usp=sharing"><img src="/Img/work/3d_Rpg.jpg"></a>
            </article>
            <article id="sub_text">
                <div id="Game">
                    <h2>게임 제작 과정 및 소감</h2>
                    <p id="break"></p>
                    <p>장기적으로 여유를 가지고 제작한 게임이기에 많은 어려움은 겪지 않았다.</p>
                    <p>최적화가 중요하다는 사실은 분명히 알고있지만, 이론으로가 아닌 실습으로 중요성을 느끼고 싶었다.</p>
                    <p>그래서 성능이 좋은 PC보다는 모바일에서 플레이할 수 있도록 UI를 설정했다.</p>
                    <p>이렇게 제작한 모바일 게임은 더 극적으로 느끼기 위해 옛날 기종의 핸드폰에서 플레이를 진행했다.</p>
                    <p>프레임 끊김현상이 잘 느껴졌고 최적화의 중요성을 직접 깨달았다.</p>
                    <p>깨달음을 바탕으로 최적화를 진행하여 프레임끊김현상을 완화했다.</p>
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