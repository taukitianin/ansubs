<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Проверка PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="wrapper">
  
  <div class="top">
    
  </div>
  
  <ul class="navigation">
    <li><a href="" >Английский</a>
    <ul>
        <li><a href="">Словарь</a></li>
        <li><a href="">Глаголы</a></li>
        <li><a href="">Фразовые глаголы</a></li>
        <li><a href="">Местоимения</a></li>
        <li><a href="">Времена</a></li>
    </ul></li>
    <li><a href="" >CSS HTML</a></li>
    <li><a href="" >Java Script</a>
      <ul>
        <li><a href="" >Основы</a></li>
        <li><a href="" >Node.JS</a></li>
        </li>
      </ul>
    </li>
    <li><a href="" >PHP</a></li>
    <li><a href="" >Java</a></li>
    <li><a href="">Общее</a>
        <ul>
            <li><a href="">Сети</a></li>
            <li><a href="">Алгоритмы и структуры данных</a></li>
            <li><a href="">Регулярные выражения</a></li>
            <li><a href="">Булева алгебра</a></li>
            <li><a href="">Операционные системы</a></li>
        </ul>
    </li>
    <div class="clear"></div>
  </ul>
  
  <div class="footer">
    <h1 class="pageTitle">Dropdown navigation</h1>
    
  
<?php 
include 'worder.php';
$delSpecChars = array('', '\r', '\n', '\0', '');


      

//$newWords = getWords('got.txt');
//$myWords = getWords('myvoc.txt');
/*

$delAll = array_merge($delSpecChars,$myWords );
$wordsF = array_diff($newWords, $delAll);
unset($newWords);
$voc = array_count_values($wordsF);
unset($wordsF);
arsort($voc);
echo "всего слов ". count($voc)."<hr>";
 
foreach($voc as $key => $val){
    echo "$val \t $key <br>";
}
*/
$voc =  getPhrasalVerb('got.txt');
      echo "Всего глаголов ".count($voc)." шт<br>";
foreach($voc as $key => $vol){
    echo "Глагол '$key' встречается $vol раз <br>";
}

?>
</div>
  
</div>































</body>
</html>