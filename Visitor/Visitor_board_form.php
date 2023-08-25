<!DOCTYPE html>
<html>
    <head> 
        <title>나만의 홈페이지</title>
        <link rel="stylesheet" type="text/css" href="../CSS/common.css">
        <link rel="stylesheet" type="text/css" href="../CSS/main.css">
        <link rel="stylesheet" type="text/css" href="../CSS/subpage.css">
        <link rel="stylesheet" type="text/css" href="../CSS/visitor.css">
        <link rel="stylesheet" href="../css/subpage_common.css">
    </head>
<body>
	<div id="wrap">
		<header>
			<?php include("../header.php");?>
		</header>  
       
		<div class="sub_contents">
			<aside class="left_menu">
                <?php include ("left_menu.html"); ?>
            </aside>
			<section class="sub_sections">
                <div class="sub_header">
                    <h3>Visitor</h3>
                    <ul>
                        <li>HOME></li>
                        <li>Visitor ></li>
                        <li id="other_color">작성하기</li>
                    </ul>
				</div>
				<form name="board_form" method="post" action="../bbs/board_insert.php" enctype="multipart/form-data">
					<table id="board">
						<thead>
							<tr>
								<th>이름</th>
								<td><?=$username?></td>
							</tr>
							<tr>
								<th>제목</th>
								<td><input name="subject" type="text" required></td>
							</tr>
							<tr id="text_area">
								<th>내용</th>
								<td><textarea name="content" required></textarea></td>
							</tr>
							<tr>
								<th>첨부 파일</th>
								<td><input type="file" name="upfile"></td>
							</tr>
						</thead>
					</table>
					<ul class="buttons">
						<li><input type="submit" value="등록"></li>
						<li><input type="button" value="목록" type="button" onclick="location.href='Visitor_board_list.php'"></input></li>
					</ul>
				</form>
                <article class="question">
                    <p><span>Tel :</span> 010-4199-8878 &nbsp &nbsp <span>E-mail :</span>&nbsp whdlthf0529@naver.com</p>
                </article>
			</section>	<!-- board_box -->
		</div>
		<footer>
			<?php include("../footer.html");?>
		</footer>
	</div>
</body>
</html>
