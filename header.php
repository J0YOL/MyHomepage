<div id="head">
    <div id="logo"><a href="/"><h5>My WebPage</h5></a></div>
    <nav id="top_menu">
        <ul>
            <?php session_start();
                if(!isset($_SESSION['userid'])) { 
                    $userid="";
                    $username="";
                    ?>
            <li><a href="/login/login_form.html">Login</a></li>
            <?php } else {  
                $userid = $_SESSION["userid"]; 
                $username = $_SESSION['username']; ?> 
                <li><a href="/login/logout.php">Logout</a></li>
                <li><a href="/login/member_modify_form.php">정보수정</a></li>
            <?php } ?>
        </ul>
    </nav>
</div>  
<div class="header_shadow"></div>
<nav id="main_menu">
    <ul>
        <li><a href="/AboutMe/school.php">About Me</a>
            <ul class="sub_menu">
                <li><a href="/AboutMe/school.php">School</a></li>
                <li><a href="/AboutMe/middle.php">Middle School</a></li>
                <li><a href="/AboutMe/high.php">High School</a></li>
                <li><a href="/AboutMe/university.php">University</a></li>
                <li><a href="/AboutMe/family.php">Family</a></li>
                <li><a href="/AboutMe/friend.php">Friend</a></li>
            </ul>
        </li>
        <li><a href="/work/work_board_list.php">Work</a>
            <ul class="sub_menu">
                <li><a href="/work/GMS.php">Game Maker Studio</a></li>
                <li><a href ="/work/3D_RPG.php">3D RPG</a></li>
                <li><a href="/work/Donut.php">Donut</a></li>
                <li><a href="/work/winAPI.php">WinAPI</a></li>
                <li><a href="/work/Raspberry.php">Raspberry Pi</a></li>
            </ul>
        </li>
        <li><a href="/Tour/all.php">Tour</a>
            <ul class="sub_menu">
                <li><a href="/Tour/Hukuoka.php">Hukuoka</a></li>
                <li><a href ="/Tour/Jeju.php">Jeju-Island</a></li>
                <li><a href="/Tour/Pohang.php">Pohang</a></li>
                <li><a href="/Tour/Busan.php">Busan</a></li>
            </ul>
        </li>
        <li><a href="/Favorite/all.php">Favorite</a>
            <ul class="sub_menu">
                <li><a href = "/Favorite/Game.php">Game</a></li>
                <li><a href = "/Favorite/diary.php">Diary Decoration</a></li>
                <li><a href = "/Favorite/food.php">Food</a></li>
            </ul>
        </li>
        <li><a href="/Visitor/Visitor_board_list.php">Visitor</a></li>
    </ul>
</nav>
