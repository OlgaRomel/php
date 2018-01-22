<?php
$arr = ['a', 'b', 'c', 'd', 'e'];
	$result = array_replace($arr, [0=>'!', 2=>'!!']);
	var_dump($result);
	
$res = array_chunk($arr, 2);
var_dump($res);

$arr2 = [3, 1, 6, 0, 4, 5];
foreach ($arr2 as $var) {
	$res2 += $var**2;
}
echo "resultat zadachi #2 $res2 <br>";
	

for ($i =1 ; $i<=10; $i++) {
    echo "<br>";
    for ($j = 1; $j<=10; $j++){
        echo $i*$j ." ";
    }
}

 echo "<br><br>zd # 4<br><br>";

for ($x=0; $x<15; $x++) {
    echo "<br>";
    for ($y=0; $y<=$x; $y++){
         echo "* ";
    }
}


$height=15;

//for ($i = 0; $i < $height; $i++)
//    {
//        echo "<br>";
//        for ($j = 1; $j < $height - i; $j++)
//        {
//            echo " ";
//        }   
// 
//        for ($j = $height - 2 * $i; $j <= $height; $j++)
//        {
//            echo "*";
//        }           
//    }


 echo "<br><br>zd # 5<br><br>";

$days = ["Пн", "Вт", "Ср", "Чт", "Пт", "Сб", "Вс"];

foreach ($days as $day => $val) {
    if ($day++ == date(N)) {
        echo "<b> $val </b>  ";
    } else {
        echo "$val ";
    }
}
unset($val);

 echo "<br><br>zd # 6<br><br>";

//$arr_num = range(0, 30);

//if ((in_array ("3", ) == !false) && is_int($num/5)) {
//        
//}

foreach (range(0, 30) as $num) {
    //var_dump(strpos($num, "3"));
    if ((strpos($num, "3") !== false) && !is_int($num/5)){ //($num%5 !== 0)){
        echo $num ." <br>";
    }
}


 echo "<br><br>zd # 7<br><br>";

//Отсортировать массив по 'price'
     
$arr_price = [
    '1'=> [
        'price' => 10,
        'count' => 2
        ],
    '2'=> [
        'price' => 5,
        'count' => 5
        ],
    '3'=> [
        'price' => 8,
        'count' => 5
        ],
    '4'=> [
        'price' => 12,
        'count' => 4
        ],
    '5'=> [
        'price' => 8,
        'count' => 4
        ],
];

//array_multisort($arr_price)

$sortArr = $arr_price;
foreach($arr_price as $key=>$val){
    $sortArr[$key] = $val['price'];
}
array_multisort($sortArr,$arr_price);
var_dump ($arr_price);
?>
