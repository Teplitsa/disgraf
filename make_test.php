<?
include "../system/connect.php";
include "../system/functions.php";
$access = new access();    
$access->access_page(0);
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Дисграф - тестирование</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1000">
    <link rel="stylesheet" href="../css/lk.css">
  <link href="../css/webflow.css" rel="stylesheet" type="text/css">
  <link href="../css/lk_main.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <header>
      <div class="wrapper">
        <nav>
          <ul>
            <li><a  href="../landing.php#service">о сервисе</a></li>
            <li> <a href="../landing.php#about_us">о нас</a></li>
            <li> <a href="../landing.php#technique">методики</a></li>
            <li> <a href="../landing.php#partners">партнёрам</a></li>
            <li> <a href="../landing.php#contact">контакты</a></li>
          </ul>
        </nav>
        <div class="icons_header">
          <!--<div class="icons_element"><a href="#"></a></div>
          <div class="icons_element"><a href="#"></a></div>
          <div class="icons_element"><a href="#"></a></div>-->
        </div>
        <a href="../system/ask.php?req=ask_exit_panel" style="color: white;">Выйти</a>
      </div>
    </header>
    <div class="content">
      <div class="profile">
          <div class="profile_block">
            <div class="background_profile_panel"></div>
            <div class="profile_panel" style="position: relative;">
              <div class="profile_panel_avatar">
                <!--<div class="panel_avatar_img"><img src="../img/icon_avatar.jpg" alt=""></div>-->
                <p><? echo $_SESSION['first_name'].' '.$_SESSION['last_name']  ?></p>
              </div>
              <div class="profile_panel_options">
                <ul style="padding-left: 0px; ">
                  <li><a class="active" href="#">Тестирование</a></li>
                  <li><a href="statistic.php">Статистика</a></li>
                  <li><a href="consult.php">Консультация</a></li>
                  <li><a href="lit.php">Литература</a></li>
                </ul>
              </div>
            </div>
    <div class="section">
    <div class="div-block">
      <h1 class="heading">Тестирование</h1>
      <h3 id="for_header" class="heading-2"></h3>
    </div>
    <div class="full_test">
      <div class="test" id="for_test" data-ix="on-next">
        <p>По результатам тестирования мы выясним определяющий вид дисграфии и дадим дальнейшие рекомендации!</p>
        <a class="submit-button w-button button" style="float:none;" onClick='$.post("../system/ask.php",{req:"test_send",block:1},new_test_response); block_1--;'>Пройти тест</a>
      </div>
    </div>
  </div>
              <div class="pluso" data-background="transparent" data-options="big,square,line,horizontal,counter,theme=01" data-services="vkontakte,odnoklassniki,facebook,twitter" data-url="http://disgraf.ru" data-image="http://artemy.pro/img/logo_icon.png" data-title="Пройди тест на дисграфию" style="margin-top: 50px;" data-description="лплалала"></div>
                    </div>
                </div>
            </div>
          </div>
          <div id="hiddent_b" style="visibility: hidden;">
      <br><br><a class="submit-button w-button button" style="float:none;" href="statistic.php">Статистика</a>
  </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="../js/jquery.inputmask.bundle.js"></script>
    <script type="text/javascript" src="../js/index.js"></script>
    <script type="text/javascript">(function() {
  if (window.pluso)if (typeof window.pluso.start == "function") return;
  if (window.ifpluso==undefined) { window.ifpluso = 1;
    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
  }})();</script>
    <!--<script src="../js/webflow.js" type="text/javascript"></script>-->
    <!--<script src="../js/modernizr.js" type="text/javascript"></script>-->
    <script src="../js/test.js" type="text/javascript"></script>
  </body>
</html>