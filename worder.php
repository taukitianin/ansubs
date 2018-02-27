<?php 
function getWords($inpFile){
    $words = array();
    // Шаг 1 добавить проверку файла
    // Шаг 2 открываем файл и считываем его в массив
    $handle = fopen("$inpFile", "r");
    $words = array();
    $delChars = "#[\?\.0-9,\-:;>!]#";
    if($handle) {
        $i = 0;
        while($buf = fgets($handle)){
          $strF = preg_replace($delChars, "", $buf);
          $bufL = strtolower($strF);
          $exp = explode(" ", $bufL);
          foreach($exp as $val){
          $words[$i] = trim($val);
            $i++;
            }
        }
    }
    fclose($handle);    
return $words;
    
}
function myPhrVerbs($inpFile){
    $oneString = strtolower(file_get_contents("$inpFile"));
    $patt = "#-1\"\>[a-z\s]*\<#";
    $arrayPatt = array();
    $count = preg_match_all($patt, $oneString, $arrayPatt);
    $phrVerbs = array();
    $dellChars = "#[-1\"\>\<]#";
    for($i=0;$i<count($arrayPatt[0]);$i++){
        $phrVerbs[$i] = preg_replace($dellChars, "", $arrayPatt[0][$i]);
       
    }
    return $phrVerbs;
}
function getPhrasalVerb($inpFile){
   // $patternPhVerb = '#[\.]#';
    $explode = '#[\.,\!\?\"]#';
    $delChars = "#[\?\.0-9,\-:;>!]#";
    $oneString = file_get_contents("$inpFile");
    $oneString = strtolower($oneString);
    $phrVerbs = myPhrVerbs('phrazverb.txt');
    $arrVerbs= array();
    foreach($phrVerbs as $value){
        $countPhVerb = substr_count($oneString, $value);
        if($countPhVerb>0){
        $arrVerbs[$value] = $countPhVerb;
        }
    }
    arsort($arrVerbs);
    return $arrVerbs;
    
    
    
    
    
    
    /*
    
    
    
    
    
    
   // удаляю переносы
    
   $oneString = preg_replace("#\n#", " ", $oneString);
     // добавляю переносы по знакам понктуации
      $multiString = preg_replace($explode, "\n", $oneString);
      //удаляю цифры и спец символы
    $multiString = preg_replace($delChars, "", $multiString);
      //взрываю строку в массив
    $arrStr = explode("\n", $multiString);
      //удоляю из строк пробелы по краям  
      $niceStr = array();
      $i = 0;
    foreach($arrStr as $string){
       $niceStr[$i] = trim($string);
       $i++;
    }
    //удаляю пустые строки
    $multiString = array_diff($niceStr, array(""));
   
  
    
    
    
   
    foreach($multiString as $value){
        echo "$value <br>";
   }
    
    
    */
    
    
}






?>