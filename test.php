<?php
//   $my_text = 'The quick grey [squirrel].';
//  preg_match('#\[(.*?)\]#', $my_text, $match);
//   print $match[1]."\n";
//  $i = 0;
//  while ($i < 6) {
//     if($i++ == 3) break;
//  }
//  echo "loop stopped at $i by break statement";


// $text = 'Enter Your Name {ResetLink} <a href="{My Name}">My Name</a>';

// $text = str_replace("{","<span translate='no'>{",$text);
// $text = str_replace("}","}</span>",$text);


// $text = str_replace('href="<span translate=\'no\'>{',"href=\"{",$text);
// $text = str_replace('}</span>"','}"',$text);




// $target = 'hi';

// $api_key = 'AIzaSyCn1qREyTLdoxJu09iTVFYEZjK0PE927R8';
// $url = 'https://www.googleapis.com/language/translate/v2?key=' . $api_key . '&q=' . rawurlencode($text);
// $url .= '&target='.$target;
// // if($source){
// // $url .= '&source='.$source;
// // }

// $ch = curl_init($url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// $response = curl_exec($ch);

// curl_close($ch);
// $obj =json_decode($response,true); //true converts stdClass to associative array.

// $translated = $obj['data']['translations'][0]['translatedText'];
// echo "=====>".$translated;




// for($i=0; $i<10; $i++){
//     echo "<br/>shrikant";
//     sleep(1);
//     flush();
//     ob_flush();
// }


//  $data = [
//      ['name' => 'Ado', 'cars' => 2],
//      ['name' => 'BBB', 'cars' => 14],
//      ['name' => 'CCC', 'cars' => 6],
//      ['name' => 'DDD', 'cars' => 12]
//  ];
 
//  function sortByCars($x, $y) {
//      return $x['cars'] <=> $y['cars'];
//  }
 
//  usort($data, 'sortByCars');
 
//  print_r($data);


  
// Original input string 
$original_string = "India To Become World's Fifth
                        Largest Economy In 2018.";
  
// Replace string
$replace_string = '5th'; 
  
  
// This function call will not show the expected output as the
// function interpret the number to ordinal value of character.
echo str_replace('Fifth',$replace_string, $original_string);
?>

