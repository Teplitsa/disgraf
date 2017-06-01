(function() {
  if (window.pluso)if (typeof window.pluso.start == "function") return;
  if (window.ifpluso==undefined) { window.ifpluso = 1;
    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
  }})();
  
        var full_points = [0,0,0,0];
        var quest_count = 0;
        var block_1 = 3;
        var block_2 = 3;
        var block_3 = 2;
        var old_q = "";
        var points = [0,0,0,0];
        
        
        function new_test_response(data)
        {
            quest_count++;
            var arr = data.split('|');
            document.getElementById("for_header").innerHTML = 'Вопрос '+quest_count+': '+arr[0];
            document.getElementById("for_test").innerHTML = arr[1];
            old_q = old_q+'|'+arr[2];
        }
        
        function send_ans(data)
        {
            $.post("../system/ask.php",data,respond_test);
        }
        
        function send_result(block1,block2,block3)
        {
            $.post("../system/ask.php",{req:'result_send',block1:block1,block2:block2,block3:block3});
        }
        
        function respond_test(data)
        {
            var arr = data.split('|');
            points[arr[4]]=points[arr[4]]+parseInt(arr[0]); 
            full_points[arr[4]] = full_points[arr[4]]+parseInt(arr[5]); 
            quest_count++;
            if (arr[1]!='0')
            {
                document.getElementById("for_header").innerHTML = 'Вопрос '+quest_count+': '+arr[1];
                document.getElementById("for_test").innerHTML = arr[2];
                old_q = old_q+'|'+arr[3];
            } else
            {
                var block_1_perc = points[1]/full_points[1];
                var block_2_perc = points[2]/full_points[2];
                var block_3_perc = points[3]/full_points[3];
                var show_text = "";
                
                if (block_1_perc<0.15)
                {
                    show_text=show_text+"Аграмматическая дисграфия. Обязательная консультация с логопедом, психологом и неврологом!";
                } else if (block_1_perc<0.5)
                {
                    show_text=show_text+"Аграмматическая дисграфия. Стоит обратиться к логопеду для дальнейших консультаций";
                } else if (block_1_perc<0.75)
                {
                    show_text=show_text+"Подозрения на аграмматическую дисграфию. Нужно уделить особое внимание таким разделам как: словообразование, изменение слов по роду, числу и падежам. Также стоит побольше контактировать с внешним миром, а именно: больше разговаривай со старшими, они помогут тебе подсказывать, где и в каком месте ты совершил ошибку и как ее исправить; больше читай вслух-так ты сможешь контролировать правильность прочитанного; также больше времени можно оставить на подобные упражнения. Если твои усилия малоэффективны, то стоит обратиться к логопеду";
                } else if (block_1_perc>=0.75)
                {
                    show_text=show_text+"Нет подозрений на аграмматическую дисграфию! Продолжай в том же духе!";
                }
                
                show_text=show_text+"<br><br>";
                if (block_2_perc<0.15)
                {
                    show_text=show_text+"Дисграфия на почве языкового анализа и синтеза. Обязательная консультация с логопедом, психологом и неврологом!";
                } else if (block_2_perc<0.5)
                {
                    show_text=show_text+"Дисграфия на почве языкового анализа и синтеза. Стоит обратиться к логопеду для дальнейших консультаций";
                } else if (block_2_perc<0.75)
                {
                    show_text=show_text+"Существует подозрение на дисграфию на почве языкового анализа и синтеза. Стоит обратить внимание на развитие фонематического восприятия, фонематического анализа и синтеза, развитие навыков слогового анализа и синтеза, а также оттачивать навык самоконтроля за собственной письменной продукцией. Тебе помогут упражнения: составление предложений по опорным картинкам, придумывание предложений по сюжетной картинке и подсчету количества слов в нем, чаще разбирай предложения на части речи, составляй графические схемы. Если твои усилия малоэффективны, то стоит обратиться к логопеду";
                } else if (block_2_perc>=0.75)
                {
                    show_text=show_text+"Нет подозрений на дисграфию на почве языкового анализа и синтеза! Продолжай в том же духе! ";
                }
                
                show_text=show_text+"<br><br>";
                if (block_3_perc<0.25)
                {
                    show_text=show_text+"Акустическая дисграфия. Комплексная работа с логопедом над всеми разделами фонематического распознавания.";
                } else if (block_3_perc<0.5)
                {
                    show_text=show_text+"Акустическая дисграфия. Логопеду стоит обратить внимание на стойкие повторяющиеся ошибки ребенка, выражающиеся в смешении и замене согласных оппозиционных букв, искажении звуко слоговой структуры, нарушении слитности написания отдельных слов в предложении, аграмматизмах.";
                } else if (block_3_perc<0.75)
                {
                    show_text=show_text+"Подозрение на акустическую дисграфию. Стоит обратить внимание на парные ударные гласные, проходить упражнения на различия парных акустических звуков и фонематическое распознавание";
                } else if (block_3_perc>=0.75)
                {
                    show_text=show_text+"Нет подозрений на акустическую дисграфию. Продолжай в том же духе!";
                }
                send_result(block_1_perc,block_2_perc,block_3_perc);
                
                document.getElementById("for_header").innerHTML = 'Тест окончен';
                document.getElementById("for_test").innerHTML = show_text+document.getElementById("hiddent_b").innerHTML+'<div class="pluso" data-background="transparent" data-options="big,square,line,horizontal,counter,theme=01" data-services="vkontakte,odnoklassniki,facebook,twitter" data-url="http://disgraf.ru" data-image="http://artemy.pro/img/logo_icon.png" data-title="Пройди тест на дисграфию" data-description="лплалала"></div>';
                
            }
        }
        
        function count_text_points(id_test,count)
        {
            var str='|';
            for (i = 0; i < count; i++)
            {
                str=str+document.getElementById('ans_'+i).value+'|';
                if (document.getElementById('ans_'+i).value.replace(/\s/g, '')=='')
                {
                    alert('Пожалуйста, заполните все поля');
                    return;
                }
            }
            str = str.replace(/\s/g, '');
            str = str.toLowerCase();
            block = 0;
            if (block_1>0)
            {
                block_1--;
                block = 1;
            } else if (block_2>0)
            {
                block_2--;
                block = 2;
            } else if (block_3>0)
            {
                block_3--;
                block = 3;
            } else
            {
                block = 0;
            }
            var data = {req:'text_test_ans',id:id_test,ans:str,block:block,old_q:old_q};
            send_ans(data);
        }