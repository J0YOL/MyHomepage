<!DOCTYPE html>
<html lang="kor">
    <head>
        <title>나만의 홈페이지</title>
        <link rel="stylesheet" type="text/css" href="../CSS/common.css">
        <link rel="stylesheet" type="text/css" href="../CSS/main.css">
        <link rel="stylesheet" type="text/css" href="../CSS/subpage.css?ver='1'">    
        <link rel="stylesheet" type="text/css" href="../CSS/tour.css">
        <link rel="stylesheet" href="../css/subpage_common.css">
        <link rel="stylesheet" href="../CSS/work_table.css">
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
                <h4>All Tour</h4>
                <ul>
                    <li>HOME >&nbsp;</li>
                    <li> Tour >&nbsp;</li>
                    <li id="other_color"> All Tour</li>
                </ul>
                </div>
                <div class="Tour">
                    <div id="Tour_title">
                        <h2>BEST TOUR</h2>
                    </div>
                    <div id="all_tour">
                        <div id="left">
                            <div class="image">
                                <img id="tour_right" src="../Img/Tour/all_hukuoka.jpg">
                            </div>
                            <div class="text">
                                <h5><a href="./Hukuoka.php">언니랑 단둘이 간 첫여행</a></h5>
                                <div class="detail">
                                    <p>후쿠오카 / 자유여행 2박3일</p>
                                    <a href="./Hukuoka.php"><input type="button" value="여행보기" class="button_tour"></a>
                                </div>                   
                            </div>                             
                        </div>
                        <div id="right">
                            <div class="image">
                                <img id="tour_right" src="../Img/Tour/all_jeju.jpg">
                            </div>
                            <div class="text">
                                <h5><a href="./Jeju.php">고등학교 친구들과 함께 간 여행</a></h5>
                                <div class="detail">
                                    <p>제주도 / 자유여행 3박4일</p>
                                    <a href="./Jeju.php"><input type="button" value="여행보기" class="button_tour"></a>
                                </div>                   
                            </div>                             
                        </div>
                    </div>
                    <div id="all_tour">
                        <div id="left">
                            <div class="image">
                                <img id="tour_right" src="../Img/Tour/all_pohang.jpg">
                            </div>
                            <div class="text">
                                <h5><a href="./Pohang.php">Nature Pool Villa에서의 하룻밤</a></h5>
                                <div class="detail">
                                    <p>포항 / 호캉스 1박2일</p>
                                    <a href="./Pohang.php"><input type="button" value="여행보기" class="button_tour"></a>
                                </div>                   
                            </div>                             
                        </div>
                        <div id="right">
                            <div class="image">
                                <img id="tour_right" src="../Img/Tour/all_busan.jpg">
                            </div>
                            <div class="text">
                                <h5><a href="./Busan.php">막내와 단둘이 함께한 여행><</a></h5>
                                <div class="detail">
                                    <p>부산 / 자유여행 1박2일</p>
                                    <a href="./Busan.php"><input type="button" value="여행보기" class="button_tour"></a>
                                </div>                   
                            </div>                             
                        </div>
                    </div>
                </div>
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