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
                        <li id="other_color">내용보기</li>
                    </ul>
                </div>
				<div id="board_box">
					<?php
						$num  = $_GET["num"];
						$page  = $_GET["page"];

						$con = mysqli_connect("localhost", "user1", "12345", "sample");
						$sql = "select * from board where num=$num";
						$result = mysqli_query($con, $sql);

						$row = mysqli_fetch_array($result);
						$id      = $row["id"];
						$name      = $row["name"];
						$regist_day = $row["regist_day"];
						$subject    = $row["subject"];
						$content    = $row["content"];
						$file_name    = $row["file_name"];
						$file_type    = $row["file_type"];
						$file_copied  = $row["file_copied"];
						$hit          = $row["hit"];

						$content = str_replace(" ", "&nbsp;", $content);
						$content = str_replace("\n", "<br>", $content);

						$new_hit = $hit + 1;
						$sql = "update board set hit=$new_hit where num=$num";   
						mysqli_query($con, $sql);
					?>
				</div>
				
				<table id="board_view">
					<thead>
						<tr>
							<th><?=$subject?><th>
						</tr>
						<tr>
							<td><?=$name?> | <?=$regist_day?></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php
								if($file_name) {
									$real_name = $file_copied;
									$file_path = "../bbs/data/".$real_name;
									//$file_size = filesize($file_path);

									echo "<span>첨부파일.</span> $file_name &nbsp;&nbsp;&nbsp;&nbsp;
									<a href='download.php?num=$num&real_name=$real_name&file_name=$file_name&file_type=$file_type'>[저장]</a>";
								}
							?>
							 <td id="view_page"><?=$content?></td>
						</tr>
						<tr>
							<?php
								if($file_name){
									$real_name = $file_copied;
									$file_path = "../bbs/data/".$real_name;
									echo "<img src='$file_path' alt=''><br>";
								}
							?>
						</tr>
					</tbody>
				</table>
				<ul class="buttons">
					<li><input type="button" value="목록" onclick="location.href='Visitor_board_list.php?page=<?=$page?>'"></input></li>
					<li><input type="button" value="수정" onclick="location.href='Visitor_board_modify_form.php?num=<?=$num?>&page=<?=$page?>'"></input></li>
					<li><input type="button" value="삭제" onclick="location.href='/bbs/board_delete.php?num=<?=$num?>&page=<?=$page?>'"></input></li>
					<li><input type="button" value="글쓰기" onclick="location.href='Visitor_board_form.php'"></input></li>
				</ul>
			</section> <!-- board_box -->
		</div>
		<footer>
			<?php include("../footer.html");?>
		</footer>
	</div>
</body>
</html>
