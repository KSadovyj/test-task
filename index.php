<?php
require('simple_html_dom.php');  
    
    // функция поиска
    function show($array){
        
        for($i=0;$i<count($array);$i++){                                 // проходим по массиву ссылок
            $html = file_get_html($array[$i]);                           // получаемы контент каждой страницы
            $result = $html->find('div.grid_4 div.prodtitle a[title]');  // ищем объекты с нужными нам тегами
            
            foreach($result as $show){                                   // выводим результат 
                echo $show->title.'<br>';   
             }
             echo '<hr>';
        }       
    }

    // ссылки на страницы, с которых будем доставать названия товаров
    $arr = array('http://midexpress.com.ua/smartfony-i-telefony.html',
                 'http://midexpress.com.ua/smartfony-i-telefony.html?start=12',
                 'http://midexpress.com.ua/smartfony-i-telefony.html?start=24');
    
    // вызов функции поиска
    show($arr);