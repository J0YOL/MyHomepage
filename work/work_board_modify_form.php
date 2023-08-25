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
					<h3>Work</h3>
					<ul>
						<li>HOME></li>
						<li>Work ></li>
						<li id="other_color">수정하기</li>
					</ul>
				</div>
				<?php
					$num  = $_GET["num"];
					$page = $_GET["page"];
					
					$con = mysqli_connect("localhost", "user1", "12345", "sample");
					$sql = "select * from work where num=$num";
					$result = mysqli_query($con, $sql);
					$row = mysqli_fetch_array($result);
					$name       = $row["name"];
					$subject    = $row["subject"];
					$content    = $row["content"];		
					$file_name  = $row["file_name"];
				?>
				<form name="board_form" method="post" action="../bbs/work_board_modify.php?num=<?=$num?>&page=<?=$page?>" enctype="multipart/form-data">
					<table id="board">
						<tbody>
							<tr>
								<td>이름</td>
								<td><?=$name?></td>
							</tr>
							<tr id="text_area">
								<td>게임 이름</td>
								<td><input name="subject" type="text" value="<?=$subject?>" required></td>
							</tr>
							<tr>
								<td>게임 내용</td>
								<td><textarea name="content" required><?=$content?></textarea></td>
							</tr>
						</tbody>
					</table>
					<ul class="buttons">
						<li><input type="submit" value="수정"></li>
						<li><input type="button" value="목록" onclick="location.href='work_board_list.php'"></input></li>
					</ul>
				</form>
			</section>
		</div> <!-- board_box -->
		<footer>
			<?php include("../footer.html");?>
		</footer>
	</div>
</body>
</html>
