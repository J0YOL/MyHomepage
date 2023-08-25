<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>나만의 홈페이지</title>
    <link rel="stylesheet" href="./css/common.css?ver='1'">
    <link rel="stylesheet" href="./css/main.css?ver='1'">
    <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
    
</head>
<body>
    <div id="wrap">
        <header>
            <?php include("header.php"); ?>
        </header>
        <section id="image_slider">
            <div id="slider">
                <figure>
                    <img src="./Img/main/main_sky.jpg" alt>
                    <img src="./Img/main/main_water.jpg" alt>
                    <img src="./Img/main/main_sky.jpg" alt>
                    <img src="./Img/main/main_water.jpg" alt>
                    <img src="./Img/main/main_sky.jpg" alt>
                </figure>
            </div>
           
           <article id="slider_text">
               <ul>
                   <li>ENGINEERING UNIVERSITY</li>
                   <li>GAME SOFTWARE ENGINEERING</li>
                   <li>5585620 JOYSOL</li>
               </ul>
           </article>
           <article id="slider_img">
                <img src="./Img/main/my_pic.png" alt>
           </article>
        </section>
        <section id="main_contents">
            <article id="top_art">
                <h4>My Blog | <span>나의 일상을 담은 이야기</span></h4>
                <ul>
                    <li><a href="https://blog.naver.com/whdlthf0529/222364721707"><img src="./img/main/blog_1.jpg" alt=""></a></li>
                    <li><a href="https://blog.naver.com/whdlthf0529/222368802889"><img src="./img/main/blog_2.jpg" alt=""></a></li>
                    <li><a href="https://blog.naver.com/whdlthf0529/222370743622"><img src="./img/main/blog_3.jpg" alt=""></a></li>
                    <li><a href="https://blog.naver.com/whdlthf0529/222681611894"><img src="./img/main/blog_4.jpg" alt=""></a></li>
                </ul>
            </article>
            <article id="bottom_art">
                <ul>
                    <li>
                        <h4>Unity</h4>
                        <a href="/work/3D_RPG.php"><img src="./img/main/unity.jpg" alt=""></a>
                        <h3><a href="/work/3D_RPG.php">3D RPG</a> </h3>
                        <p> 최적화의 중요성을 깨닫기 위해 3D로 제작해본 게임!</p>
                        <p><b>제작기간 : 2021년 5월 ~ 2021년 7월 (현재 중단)</b></p>
                    </li>
                    <li>
                        <h4>WinAPI</h4>
                        <a href="/work/winAPI.php"><img src="./img/main/winApi.jpg" alt=""></a>
                        <h3><a href="/work/winAPI.php">Platform Game</a> </h3>
                        <p>툴에 의존하지 않고 Visual Studio로 오직 C++을 이용해서 제작해본 게임! </p>
                        <p><b>제작기간 : 2021년 3월 ~ 2021년 4월</b></p>            
                    </li>
                    <li>
                        <h4>Game Maker Studio</h4>
                        <a href="/work/GMS.php"><img src="./img/main/GMS.jpg" alt=""></a>
                        <h3><a href="/work/GMS.php">10 Minutes</a> </h3>
                        <p>10분안에 이 배에서 탈출해야 살아갈 수 있다! </p>
                        <p>과연 탈출할 수 있을 것인가!</p>
                        <p><b>제작기간 : 2019년 10월~ 2019년 12월</b></p>                
                    </li>
               </ul>
            </article>
        </section>    
        <footer>
            <?php include("footer.html"); ?>
        </footer>
    </div>
</body>
</html>