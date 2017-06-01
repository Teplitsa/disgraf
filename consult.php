<?
include "../system/connect.php";
include "../system/functions.php";
$access = new access();    
$access->access_page(0);
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Дисграф - консультация</title>
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
            <div class="profile_panel" style="position: fixed;">
              <div class="profile_panel_avatar">
                <!--<div class="panel_avatar_img"><img src="../img/icon_avatar.jpg" alt=""></div>-->
                <p><? echo $_SESSION['first_name'].' '.$_SESSION['last_name']  ?></p>
              </div>
              <div class="profile_panel_options">
                <ul style="padding-left: 0px; ">
                  <li><a href="make_test.php#">Тестирование</a></li>
                  <li><a href="statistic.php">Статистика</a></li>
                  <li><a class="active" href="#">Консультация</a></li>
                  <li><a href="lit.php">Литература</a></li>
                </ul>
              </div>
            </div>
    <div class="section">
    <div class="div-block">
      <h1 class="heading">Консультация</h1>
      <h3 id="for_header" class="heading-2"></h3>
    </div>
    <div class="full_test">
    <P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT SIZE=4><B>Коррекция
        дисграфии </B></FONT></FONT></FONT>
    </P>
    <P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >Дисграфия
        представляет собой частичное расстройство
        процесса письма, которое связано с
        нарушением либо неполным формированием
        психических функций, отвечающих за
        контроль и реализацию письменной речи.
        Данная патология проявляется повторяющимися
        стойкими ошибками на письме, которые
        не могут быть устранены самостоятельно
        без специального обучения. Подобные
        нарушения выступают серьезным препятствием
        для овладения грамоты ребенком, поэтому
        коррекция дисграфии является тем
        необходимым шагом, который должны
        предпринять родители как можно раньше.</FONT></FONT></FONT></P>
    <P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT SIZE=4><B>Коррекция
        дисграфии у младших школьников </B></FONT></FONT></FONT>
    </P>
    <P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >Довольно
        часто дисграфия у детей сочетается с
        таким явлением, как дислексия, которое
        проявляется нарушениями процесса
        чтения. В основе дислексии также лежат
        недоразвитость внимания, сложность
        распознавания букв и пространственного
        восприятия. Обычно дисграфия проявляется
        пропусками букв и слогов. Это свидетельствует
        о том, что ребенок не вычленяет на слух
        гласные или некоторые согласные звуки.
        Если родители замечают у своего ребенка
        подобные признаки, необходимо
        незамедлительно начинать лечение
        патологии. Коррекция дисграфии у младших
        школьников предполагает, в первую
        очередь, работу с детским психологом и
        логопедом. Психолог должен помочь
        ребенку преодолеть сложности в отношениях
        в семье и в школе, а логопед разрабатывает
        план лечения болезни. Он строится в
        соответствии с механизмом и формой
        нарушения письма. Если же говорить об
        общих способах коррекции дисграфии у
        младших школьников, то среди них можно
        выделить следующие наиболее эффективные:</FONT></FONT></FONT></P>
    <P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >-Устранение
        нарушений в звукопроизношении и
        фонематических процессах и работа над
        обогащением словарного запаса у младшего
        школьника; </FONT></FONT></FONT>
    </P>
    <P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >-Акцент
        на формирование грамматической стороны
        речи; </FONT></FONT></FONT>
    </P>
    <P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >-Развитие
        аналитико-синтетической деятельности;
    </FONT></FONT></FONT>
    </P>
    <P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >-Занятия,
        направленные на улучшение пространственного
        и слухового восприятия; </FONT></FONT></FONT>
    </P>
    <P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >-Занятия,
        развивающие память и мышление; </FONT></FONT></FONT>
    </P>
    <P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >-Развитие
        двигательной сферы; </FONT></FONT></FONT>
    </P>
    <P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >-Занятия
        для улучшения связной речи; </FONT></FONT></FONT>
    </P>
    <P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >-Письменные
        упражнения для закрепления полученных
        навыков. </FONT></FONT></FONT>
    </P>
    <P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >Кроме
        того, при коррекции дисграфии у младших
        школьников нередко назначаются курсы
        медикаментозной терапии и некоторые
        виды реабилитационного лечения. Среди
        последних чаще всего используются
        физиотерапия, гидротерапия и массажные
        процедуры. </FONT></FONT></FONT>
    </P>
    <P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >Коррекция
        оптической дисграфии </FONT></FONT></FONT>
    </P>
    <P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >Специалисты
        различают несколько видов дисграфии: </FONT></FONT></FONT>
    </P>
    <P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >-Артикулярно-акустическую,
        при которой наблюдаются нарушения
        звукопроизношения, фонематического
        восприятия и артикуляции;</FONT></FONT></FONT></P>
    <P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >-Акустическую,
        для которой характерны проблемы с
        фонемным распознаванием; </FONT></FONT></FONT>
    </P>
    <P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >-Аграмматическую,
        обусловленную недостаточным развитием
        лексико-грамматической стороны речи;</FONT></FONT></FONT></P>
    <P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >-Дисграфию,
        связанную с проблемами языкового анализа
        и синтеза; Оптическую, указывающую на
        нарушения зрительно-пространственных
        представлений. </FONT></FONT></FONT>
    </P>
    <P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >Последний
        вид характеризуется неустойчивостью
        зрительных впечатлений, приводя к
        специфическим ошибкам, когда не
        распознаются отдельные буквы и непривычные
        шрифты. Такое неправильное восприятие
        выражается смешением букв при письме.
        Е. В. Мазанова в своей книге “Коррекция
        оптической дисграфии” для лечения
        заболевания предлагает проведение
        коррекционно-логопедической работы по
        данным основным направлениям:</FONT></FONT></FONT></P>
    <P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >-Расширение
        объема зрительной памяти ребенка;</FONT></FONT></FONT></P>
    <P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >-Овладение
        графической символизацией; </FONT></FONT></FONT>
    </P>
    <P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >-Развитие
        зрительного восприятия, анализа и
        синтеза; </FONT></FONT></FONT>
    </P>
    <P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >-Развитие
        слухового анализа и синтеза;</FONT></FONT></FONT></P>
    <P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >-Развитие
        зрительного гнозиса (узнавание цвета,
        величины и формы);</FONT></FONT></FONT></P>
    <P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >-Формирование
        временных и пространственных представлений;
    </FONT></FONT></FONT>
    </P>
    <P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >-Формирование
        графомоторных навыков; </FONT></FONT></FONT>
    </P>
    <P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >-Дифференциация
        букв, которые имеют кинетическое и
        оптическое сходство. Коррекция оптической
        дисграфии включает множество различных
        упражнений, которые способствуют
        вышеназванным направлениям. К примеру,
        для развития зрительного гнозиса
        специалистами рекомендуется называние
        контурных, перечеркнутых и наложенных
        изображений предметов, а также их
        дорисовка. Для улучшения цветового
        восприятия практикуются такие упражнения,
        как называние цветов на картинках, их
        группировка по цветовому фону или
        оттенкам, закрашивание различных
        геометрических фигур в конкретные цвета
        по заданию. Коррекция дисграфии, по
        Мазановой, включает также упражнения
        по узнаванию букв. Так, можно предложить
        ребенку найти определенную букву среди
        ряда других, определить буквы, которые
        расположены неправильно, определить
        буквы, наложенные друг на друга и т. д.
        Следующим этапом выступает развитие
        зрительной памяти и пространственного
        восприятия. В данном случае при коррекции
        дисграфии, по Мазановой, проводятся
        такие упражнения, как запоминание
        картинки или предметов, их расположение
        и воспроизведение через определенное
        время. Пространственная ориентация же
        требует нескольких видов ориентировки:
</FONT></FONT></FONT>
</P>
<P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >В
        собственном теле (включая дифференциацию
        левых и правых частей); </FONT></FONT></FONT>
</P>
<P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >В
        окружающем мире; </FONT></FONT></FONT>
</P>
<P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >На
        листе бумаги. </FONT></FONT></FONT>
</P>
<P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >Мазанова
        для коррекции дисграфии также рекомендует
        уделять большое внимание дифференциации
        букв, которая включает изолированное
        написание их: </FONT></FONT></FONT>
</P>
<P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >-В
        слогах; </FONT></FONT></FONT>
</P>
<P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >-В
        словах; </FONT></FONT></FONT>
</P>
<P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >-В
        словосочетаниях; </FONT></FONT></FONT>
</P>
<P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >-В
        предложениях; </FONT></FONT></FONT>
</P>
<P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >-В
        тексте. </FONT></FONT></FONT>
</P>
<P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT SIZE=4><B>Коррекция
        дисграфии и дислексии </B></FONT></FONT></FONT>
</P>
<P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >Коррекция
        дисграфии и дислексии, как правило,
        делится на 4 основных этапа: </FONT></FONT></FONT>
</P>
<P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >-Диагностический;
</FONT></FONT></FONT>
</P>
<P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >-Подготовительный;
</FONT></FONT></FONT>
</P>
<P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >-Коррекционный;
</FONT></FONT></FONT>
</P>
<P STYLE="margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >-Оценочный.
</FONT></FONT></FONT>
</P>
<P STYLE="margin-bottom: 0.14in"><A NAME="_GoBack"></A><FONT COLOR="#000000"><FONT FACE="Trebuchet MS, serif"><FONT  >Первый
        этап коррекции дисграфии и дислексии
        предполагает выявление данных расстройств
        у детей с помощью диктантов, обследования
        состояния лексико-грамматической
        стороны речи и анализа его результатов.
        Второй этап направлен на общее развитие
        ручной моторики, пространственно-временных
        представлений, памяти и мышления. Для
        третьего этапа коррекции дисграфии и
        дислексии характерно преодоление
        дисграфических нарушений. Работа в
        данном случае реализуется преимущественно
        на синтаксическом, лексическом и
        фонетическом уровнях и нередко направлена
        на устранение проблем со связной речью,
        чтением и звукопроизношением. Последний
        этап методики призван оценить результаты
        коррекции дисграфии и дислексии, поэтому
        на нем обычно проводится повторная
        проверка навыков письма и чтения, а
        также анализ всевозможных письменных
        работ детей.<BR><BR></FONT></FONT></FONT><BR><BR>
</P>
    </div>
  </div>
                    </div>
                </div>
            </div>
          </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="../js/jquery.inputmask.bundle.js"></script>
    <script type="text/javascript" src="../js/index.js"></script>
    <!--<script src="../js/webflow.js" type="text/javascript"></script>-->
    <!--<script src="../js/modernizr.js" type="text/javascript"></script>-->
  </body>
</html>