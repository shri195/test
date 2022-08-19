<?php


class MagicMethod{

    function __call($name, $arguments)
    {
        echo "Name of method =>" . $name."\n";
        echo "<br/>Parameters provided\n";

        print_r($arguments);
        
    }

}

$obj = new MagicMethod;

$obj->name('abc', 'aaa');

$obj->shrikant('sssss', 'aaa');




// // take an array with some elements
// $array = array(10,7,9,5);
// // get the size of array
// $count = count($array);
// echo "<pre>";
// // Print array elements before sorting
// print_r($array);
// for ($i = 0; $i < $count; $i++) {
    
//     for ($j = $i + 1; $j < $count; $j++) {
        
//         if ($array[$i] > $array[$j]) {
            
//             $temp = $array[$i];
//             $array[$i] = $array[$j];
//             $array[$j] = $temp;
//         }
        
        
//     }
// }
// echo "Sorted Array:" . "<br/>";
// print_r($array);

?>