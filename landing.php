<?
include "system/connect.php";
include "system/functions.php";
/*определение функций*/////////////////////////////////////////////////////////////////////////////////////
session_start();
function check_on_access()
{
	if (isset($_REQUEST[session_name()]))
	{
		$sesion = bd_ask('SELECT * FROM `session` where user = '.$_SESSION['id'],'');
		if ((time()-$sesion['session_time'])<(60*CONST_TIME) && $sesion['session_key'] == $_SESSION['key'])
		{
			header('Location: /cabinet/index.php');
		}
		else 
		{
		    $access = new access();    
		    $access->sesion_destroy();
		}
	}
}

function check_on_get_in()
{
	if ($_POST['username'] && $_POST['password'])
	{
	    $_POST['username'] = str_replace("+7", "", $_POST['username']);
	    $_POST['username'] = preg_replace('~\D+~','',$_POST['username']); 
		$user = bd_ask('SELECT * FROM `user` where phone = '.$_POST['username'],'');
		if ($user['password'] == $_POST['password'])
		{
			$access = new access();
            $access->sesion_start($user);
			header('Location: /cabinet/index.php');
		}
	}
}

/*тело*///////////////////////////////////////////////////////////////////////////////////////////////////
check_on_get_in();
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1000">
    <title>Дисграф</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <div class="sing-in">
      <div class="sing-in_block">
        <form action="#" method="post">
          <label>Заходи</label>
          <fieldset>
            <input type="text" data-inputmask="'mask' : '+7(999) 999 99 99'" placeholder="" name="username" id="phone">
            <label>Номер телефона							</label>
          </fieldset>
          <fieldset>
            <input type="password" name="password">
            <label>Пароль</label>
          </fieldset>
          <button>Войти						</button>
        </form><!--<a href="#">Забыл пароль?</a>-->
        <div class="close_popup"></div>
      </div>
    </div>
    <header>
      <div class="wrapper">
        <nav>
          <ul>
            <li><a class="active" href="#service">о сервисе</a></li>
            <li> <a href="#about_us">о нас</a></li>
            <li> <a href="#technique">методики</a></li>
            <li> <a href="#partners">партнёрам</a></li>
            <li> <a href="#contact">контакты</a></li>
          </ul>
        </nav>
        <? if ($_SESSION['id']) echo'<a href="/cabinet">'; ?><button class="open_form"><? if ($_SESSION['id']) {echo'личный кабинет';} else {echo'войти';} ?></button><? if ($_SESSION['id']) echo'</a>'; ?>
      </div>
    </header>
    <div class="content">
      <div class="content-header" id="service">
        <div class="wrapper">
          <div class="logo"><img src="img/logo_icon.png" alt=""></div>
          <p>Ваш ребенок допускает ошибки при письме? Учитель постоянно жалуется на невнимательность ребенка?<br><br>Дисграф поможет Вам и Вашему ребенку справиться с данным нарушением играючи!</p>
          <div class="arrow_down"><a href="#about_us"></a></div>
        </div>
      </div>
      <div class="content_info" id="about_us">
        <div class="content_info_block">
          <div class="content_info_text-info"></div>
          <div class="content_info_background"></div>
          <div class="wrapper">
            <div>
            <h1>У ребенка появились специфические ошибки при письме?</h1> 
              <p>Ребенок не дописывает окончания, путает слоги и буквы местами или нарушает правило глухости/звонкости звуков? Если у ребенка присутствуют именно эти затруднения, то можно говорить о дисграфии.</p>
              <a href="reg.php"><button class="more">Пройти тест</button></a>
            </div>
            <div class="content_info_popup">
              <div class="popup_block">
                <h1>Причины дисграфии</h1>
                <p>Дети, страдающие дисграфией, часто путают буквы «Р» и «Ь», «З» и «Э». Диктанты они пишут очень медленно, неровно, очень часто их почерк невозможно разобрать. Однако ошибки, которые дети допускают из-за незнания грамматики, не являются дисграфией.<br><br>Для того чтобы ребенок научился писать, он должен обладать средним интеллектом, воспринимать устную речь и запомнить написание букв. При неодинаковом формировании полушарий головного</p>
                <div class="close_popup"></div>
              </div>
            </div>
          </div>
          <div class="clear"></div>
        </div>
        <div class="content_info_block">
          <div class="content_info_text-info"></div>
          <div class="content_info_background"></div>
          <div class="wrapper">
            <div>
              <h1>Причины дисграфии</h1>
              <p>Дети при данном нарушении не пишут заглавные буквы, в диктантах они допускают большое количество ошибок. Так как их часто ругают за это, дети нервничают и иногда отказываются ходить на занятия. Они понимают, что становятся объектами насмешек со стороны сверстников, и замыкаются в себе.</p>
              <button class="more">Подробнее</button>
            </div>
            <div class="content_info_popup">
              <div class="popup_block">
                <h1>Причины дисграфии</h1>
                <p>Дети, страдающие дисграфией, часто путают буквы «Р» и «Ь», «З» и «Э». Диктанты они пишут очень медленно, неровно, очень часто их почерк невозможно разобрать. Однако ошибки, которые дети допускают из-за незнания грамматики, не являются дисграфией.<br><br>Для того чтобы ребенок научился писать, он должен обладать средним интеллектом, воспринимать устную речь и запомнить написание букв. При неодинаковом формировании полушарий головного</p>
                <div class="close_popup"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="content_info_block">
          <div class="content_info_text-info"></div>
          <div class="content_info_background"></div>
          <div class="wrapper">
            <div>
              <h1>Что делать?</h1>
              <p>Следует обратиться к логопеду за консультацией и заключением степени вида нарушения и пройти наш тест на выявление определяющего вида дисграфии. Тест включает в себя три блока заданий на разные виды дисграфии.</p>
              <a href="reg.php"><button class="more">Пройти тест</button></a>
            </div>
            <div class="content_info_popup">
              <div class="popup_block">
                <p>3 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ad error, beatae pariatur excepturi! Quos quasi temporibus perspiciatis dolorem vitae laboriosam voluptate. Facilis pariatur dolorem quisquam animi cupiditate consectetur eius esse consequatur omnis sed quibusdam maxime, earum odit exercitationem! Animi quia rem aut illo natus voluptas ut eius explicabo qui, repellat amet ipsam officia, autem enim recusandae sunt ipsum fugiat repudiandae tempora laborum. Pariatur nam est nihil non necessitatibus exercitationem totam qui mollitia sequi ullam nesciunt magni odit doloribus repellendus ducimus aliquid, facilis ipsam dolorum et explicabo cum! Ratione, totam.</p>
                <div class="close_popup"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="content_individual" id="technique">
        <div class="wrapper">
          <div class="content_individual_tital">
            <h1>индивидуальные методики</h1>
            <div class="individual_block-line">
              <div class="individual_line-move"></div>
            </div>
            <p>Методики разрабатываются лучшими специалистами- это совместная работа логопедов высшей категории, психологов, психиаторов и педагогов, имеющих огромный практический опыт взаимодействия с детьми-дисграфиками</p>
          </div>
          <div class="content_individual_age">
            <p>Тест актуален для детей от 6 лет</p>
            <h1>от 8 лет</h1>
          </div>
          <div class="content_individual_age">
            <p>Методики также разрабатываются для детей младшего подросткового возраста</p>
            <h1>до 14 лет</h1>
          </div>
        </div>
      </div>
      <div class="content_bottom" id="partners">
        <p>Мы открыты для сотрудничества с любыми детскими учреждениями. На сегодняшний день тестирование проводятся в МБОУ СОШ № 76 города Красноярска при административной поддержке МАУ "ЭГО"</p>
        <div class="content_bottom_info">
          <div class="content_bottom_info_block">
            <div class="mask_background"></div>
            <div class="content_bottom_element">
              <h1>Пройти тест определения <br> дисграфии</h1>
              <button onClick="window.location.href = 'test.php';">Выбрать</button>
            </div>
          </div>
          <div class="content_bottom_info_block">
            <div class="mask_background"></div>
            <div class="content_bottom_element">
              <h1>Воспользоваться </br> сервисом</h1>
              <button onClick="window.location.href = 'reg.php';">Выбрать</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer id="contact">
      <div class="wrapper">
        <div class="footer_block-link"><a href="#">Помочь проекту</a><a href="#">Мы на гитхабе</a>
          <p>2016-2017</p>
        </div>
        <div class="footer_block-support">
          <p>При поддержке</p>
          <div class="footer_block-support_logo"><a href="https://te-st.ru/"><img src="img/logo_footer.png" style="height: 110px;" alt=""></a></div>
        </div>
        <div class="footer_block-contacts">
          <div>
            <p>8(923)277-47-71</p>
            <p>alievasevil24@gmail.com</p>
          </div>
        </div>
      </div>
    </footer>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="js/jquery.inputmask.bundle.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = 'https://vk.com/rtrg?p=VK-RTRG-119678-eW60o';</script>
  </body>
</html>