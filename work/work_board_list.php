<!DOCTYPE html>
<html lang="kor">
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
                    <h3>All Works</h3>
                    <ul>
                        <li>HOME></li>
                        <li>Work ></li>
                        <li id="other_color">All Works</li>
                    </ul>
                </div>
				<li><input type="button" value="글쓰기" onclick="location.href='work_board_form.php'"></input></li>
   				<table id="board_work">
				   <thead>
                        <tr>
                            <th>No.</th>
                            <th>게임이름</th>
                            <th>작성자</th>
                        </tr>
                    </thead>
					<tbody>
						<?php
							if (isset($_GET["page"]))
								$page = $_GET["page"];
							else
								$page = 1;

							$con = mysqli_connect("localhost", "user1", "12345", "sample");
							$sql = "select * from work order by num desc";
							$result = mysqli_query($con, $sql);
							$total_record = mysqli_num_rows($result); // 전체 글 수

							$scale = 10;

							// 전체 페이지 수($total_page) 계산 
							if ($total_record % $scale == 0)     
								$total_page = floor($total_record/$scale);      
							else
								$total_page = floor($total_record/$scale) + 1; 
						
							// 표시할 페이지($page)에 따라 $start 계산  
							$start = ($page - 1) * $scale;      

							$number = $total_record - $start;

							for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
							{
								mysqli_data_seek($result, $i);
								// 가져올 레코드로 위치(포인터) 이동
								$row = mysqli_fetch_array($result);
								// 하나의 레코드 가져오기
								$num         = $row["num"];
								$id          = $row["id"];
								$name        = $row["name"];
								$subject     = $row["subject"];
								$regist_day  = $row["regist_day"];
								$hit         = $row["hit"];
								if ($row["file_name"])
									$file_image = "<img src='../img/community/icon_file.gif'>";
								else
									$file_image = " ";
						?>
						<tr>
                            <td><?=$number?></td>
                            <td><a href="work_board_view.php?num=<?=$num?>&page=<?=$page?>"><?=$subject?></a></td>
                            <td><?=$name?></td>
                        </tr>
					</tbody>
					<?php
						$number--;
					}
					mysqli_close($con);
					?>
	    		</table>
				<div id="page">
                    <ul>
                        <?php
                        if($total_page>=2 && $page>=2){
                            $new_page=$page-1;
                            echo"<li id ='btn'><a href='work_board_list.php?page=$new_page'>< 이전</a></li>";
                        }
                        else
                            echo"<li id ='btn'><a href=''>< 이전</a></li>";
                        for($i=1;$i<=$total_page;$i++){
                            if($page==$i){
                                echo"<li id='now_page'>$i</li>";
                            }
                            else{
                                echo"<li id='next_page'><a href='work_board_list.php?page=$i'>$i</a></li>";
                            }
                        }
                        if($total_page>=2 && $page!=$total_page){
                            $new_page=$page+1;
                            echo"<li id=btn><a href='work_board_list.php?page=$new_page'>다음 ></a></li>";
                        }
                        else
                            echo"<li id=btn><a href=''>다음 ></a></li>";
                        ?>
                    </ul>
            </div>
            <article class="question">
                <p><span>Tel :</span> 010-4199-8878 &nbsp &nbsp <span>E-mail :</span>&nbsp whdlthf0529@naver.com</p>
            </article>
			</section> 
		</div> <!-- board_box -->
		<footer>
			<?php include("../footer.html");?>
		</footer>
	</div>
</body>
</html>
