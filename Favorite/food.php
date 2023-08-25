<!DOCTYPE html>
<html lang="kor">
    <head>
        <title>나만의 홈페이지</title>
        <link rel="stylesheet" type="text/css" href="../CSS/common.css">
        <link rel="stylesheet" type="text/css" href="../CSS/main.css">
        <link rel="stylesheet" type="text/css" href="../CSS/subpage.css?ver='1'">  
        <link rel="stylesheet" type="text/css" href="../CSS/Favorite.css">    
        <link rel="stylesheet" type="text/css" href="../CSS/photo.css"> 
        <link rel="stylesheet" type="text/css" href="../CSS/subpage_common.css">
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
                <h4>Food</h4>
                <ul>
                    <li>HOME >&nbsp;</li>
                    <li> Favorite >&nbsp;</li>
                    <li id="other_color"> Food</li>
                </ul>
            </div>
            <input type="button" value="목록보기" onclick="location.href='all.php'">
            <div id="Favorite_title">
                <h2>Food in Daegu</h2>
            </div>
           
            <table id="photo_table">
                <tr>
                    <th><h2>한식</h2></th>
                </tr>
                <tr>
                    <td>
                        <img id="image" src="../Img/Favorite/Food/food01.jpeg">
                        <h4>걸리버막창</h4>
                        <p id="date">북구 옥산로 53</p>
                    </td>
                    <td>
                        <img id="image" src="../Img/Favorite/Food/food02.jpg">
                        <h4>신라식당</h4>
                        <p id="date">중구 중앙대로 406-8</p>
                    </td>
                    <td>
                        <img id="image" src="../Img/Favorite/Food/food03.jpg">
                        <h4>전주소반</h4>
                        <p id="date">중구 중앙대로 412-26</p>
                    </td>
                </tr>
                <tr>
                    <th><h2>일식</h2></th>
                </tr>
                <tr>
                    <td>
                        <img id="image" src="../Img/Favorite/Food/food04.jpg">
                        <h4>스시준</h4>
                        <p id="date">중구 동성로3길 40 1층</p>
                    </td>
                    <td>
                        <img id="image" src="../Img/Favorite/Food/food05.jpg">
                        <h4>대쿠이</h4>
                        <p id="date">남구 중앙대로51길 38-2 1층</p>
                    </td>
                    <td>
                        <img id="image" src="../Img/Favorite/Food/food11.jpg">
                        <h4>든해</h4>
                        <p id="date">중구 동성로 34-2 1층</p>
                    </td>
                </tr>
                <tr>
                    <th><h2>양식</h2></th>
                </tr>
                <tr>
                    <td>
                        <img id="image" src="../Img/Favorite/Food/food07.jpg">
                        <h4>해쉬</h4>
                        <p id="date">달서구 계대동문로3안길 13-26</p>
                    </td>
                    <td>
                        <img id="image" src="../Img/Favorite/Food/food08.jpg">
                        <h4>빠레뜨 한남</h4>
                        <p id="date">중구 동성로2길 58 2층</p>
                    </td>
                    <td>
                        <img id="image" src="../Img/Favorite/Food/food12.jpg">
                        <h4>DISH UP</h4>
                        <p id="date">중구 달구벌대로 2125-7S</p>
                    </td>
                </tr>
                <tr>
                    <th><h2>디저트</h2></th>
                </tr>
                <tr>
                    <td>
                        <img id="image" src="../Img/Favorite/Food/food06.jpg">
                        <h4>루시드</h4>
                        <p id="date">중구 동성로4길 94</p>
                    </td>
                    <td>
                        <img id="image" src="../Img/Favorite/Food/food09.jpg">
                        <h4>할타보카</h4>
                        <p id="date">수성구 교학로 3 금탑아파트 상가 4호</p>
                    </td>
                    <td>
                        <img id="image" src="../Img/Favorite/Food/food10.jpg">
                        <h4>큐케이</h4>
                        <p id="date">남구 중앙대로49길 54</p>
                    </td>
                </tr>
            </table>
           
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