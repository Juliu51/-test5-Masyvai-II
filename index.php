<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

////////////1///////////////
echo "1 UZDAVINYS";
echo '<br>';
$arr = [];

for ($i=0; $i < 10; $i++) { 
    $tmp = [];
    for ($a=0; $a < 5; $a++) { 
        $tmp[] = rand(5,25);
    }
    $arr[]= $tmp;
}
print_r($arr);

////////////2a///////////////
echo '<hr>';
echo "2 UZDAVINYS";
echo '<br>';

$count = 0;

for ($i=0; $i < count($arr); $i++) { 
    
    for ($b=0; $b < 5; $b++) { 
               if(($arr[$i][$b]) > 10) {
            $count++;
                    }
}
}
echo "Didesniu uz 10 yra: " . $count;

////////////2a///////////////
echo '<hr>';
echo '<br>';

$maxVal = 0;

for ($i=0; $i < count($arr); $i++) { 
    for ($a=0; $a < count($arr[$i]); $a++) { 
        if($arr[$i][$a] > $maxVal){
            $maxVal = $arr[$i][$a];
        }
    }
}
echo "Didziausia elemento reiksme: " . $maxVal;

////////////2c///////////////
echo '<hr>';
echo '<br>';

for ($i=0; $i < count($arr[0]); $i++) { 
    $sum = 0;
    for ($a=0; $a < count($arr); $a++) { 
        $sum += $arr[$a][$i];
    }
    echo $sum . " ";
}
////////////2d///////////////
echo '<hr>';
echo '<br>';

for ($i=0; $i < count($arr); $i++){ 
    for ($a=0; $a < 2; $a++) { 
        $arr[$i][] = rand(5,25) ;
    }
}

print_r($arr);

////////////2e///////////////
echo '<hr>';
echo '<br>';

$sumuMasyvas = [];
$counterArr = count($arr);

for ($i=0; $i < $counterArr; $i++) { 
    $suma = 0;
    for ($a=0; $a < 7; $a++) { 
        $suma += $arr[$i][$a];
    }
    $sumuMasyvas[] = $suma;
}

print_r($sumuMasyvas);
////////////3///////////////
echo '<hr>';
echo "3 UZDAVINYS";
echo '<br>';

$arr3 = [];

for ($i=0; $i < 10; $i++) { 
    $rand = rand(2,20);
    for ($a=0; $a < $rand; $a++) { 
        $arr3[$i][] = chr(rand(65,90));
    }
    sort($arr3[$i]);
    print_r($arr3[$i]);
}



echo '<br>';
echo '<br>';
// ////////////4///////////////
// echo '<hr>';
// echo "4 UZDAVINYS";
// echo '<br>';

// $arr3 = [];
// for ($i=0; $i < count($arr3); $i++) { 
// for ($a=0; $a < count($arr3); $a++) { 
//     if(count($arr3[$i]) < count($arr3[$a])){
//             $tmpArr = $arr3[$i+1];
//             $arr3[$i] = $arr3[$a];
//             $arr3[$a] = $tmpArr;
//     }
// }
// print_r($arr3[$i]);
// }

// echo '<br>';
// echo '<br>';
////////////5///////////////
echo '<hr>';
echo "5 UZDAVINYS";
echo '<br>';
$arr5 = [];
$arr5ID = [];

for ($i=0; $i < 30; $i++) { 
    $id = rand(1,10000);
   if(in_array($id,[$arr5ID])){
       $i--;
       continue;
   }
   $arr5ID = $id;
    $arr5[] = ['user_id' => $id, 'place_in_row' => rand(0,100)];
}
print_r($arr5);


echo '<br>';
echo '<br>';
////////////6///////////////
echo '<hr>';
echo "6 UZDAVINYS";
echo '<br>';
for ($i=0; $i < count($arr5) ; $i++) { 
    for ($a=$i+1; $a < count($arr5) ; $a++) { 
        if($arr5[$i]['user_id'] > $arr5[$a]['user_id']){
            $tmp = $arr5[$i]['user_id'];
            $arr5[$i]['user_id'] = $arr5[$a]['user_id'];
            $arr5[$a]['user_id'] = $tmp;
        }
}
}
print_r($arr5);
echo '<br>';
echo '<br>';

for ($i=0; $i < count($arr5) ; $i++) { 
    for ($a=$i+1; $a < count($arr5) ; $a++) { 
        if($arr5[$i]['place_in_row'] < $arr5[$a]['place_in_row']){
            $tmp = $arr5[$i]['place_in_row'];
            $arr5[$i]['place_in_row'] = $arr5[$a]['place_in_row'];
            $arr5[$a]['place_in_row'] = $tmp;
        }
}
}
print_r($arr5);
echo '<br>';
echo '<br>';
// ////////////7///////////////
echo '<hr>';
echo "7 UZDAVINYS";
echo '<br>';

for ($i=0; $i < count($arr5); $i++) { 
    $arr5[$i]['name'] = RandomString(rand(5,15));
    $arr5[$i]['surname'] = RandomString(rand(5,15));
}

print_r($arr5);

function RandomString($length = 10) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

// ////////////8///////////////
echo '<hr>';
echo "8 UZDAVINYS";
echo '<br>';
$arr8 = [];


for ($i=0; $i < 10; $i++) { 
    $rnd = rand(0,5);
    if($rnd == 0) {
        $arr8[] = rand(0,10);
        continue;
    }
    $tmp = [];
    for ($i=0; $i < $rnd; $i++) { 
        $tmp[] = rand(0,10);
    }
    $arr8[] = $tmp;
}

print_r($arr8);

// ////////////9///////////////
echo '<hr>';
echo "9 UZDAVINYS";
echo '<br>';

//Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą taip, 
//kad pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu reikšmė yra masyvas, 
//to masyvo reikšmių sumos.

$value = 0;
$suma1 = 0;


for ($i=0; $i < count($arr8); $i++) { 
  if(!is_array($arr8[$i])) {
    $suma1 += $arr8[$i];
  } else {  $zx = count($arr8[$i]);
  for ($j=0; $j < $zx; $j++) {
    $value += $arr8[$i][$j];
  }
}
}
echo "Viso masyvo suma yra: " . $suma1 + $value;
echo '<hr>';
$value2 = 0;
$suma2 = 0;
for ($i=0; $i < count($arr8); $i++) { 
    $value2 = 0;
    if(is_array($arr8[$i])) {
     $zx = count($arr8[$i]);
    for ($j=0; $j < $zx; $j++) {
      $value2 += $arr8[$i][$j];    
    }
      $arr8[$i] = $value2;
  }
  }

for ($i=0; $i < count($arr8) ; $i++) { 
    for ($a=$i+1; $a < count($arr8) ; $a++) { 
        if($arr8[$i] > $arr8[$a]){
            $tmp = $arr8[$i];
            $arr8[$i]= $arr8[$a];
            $arr8[$a]= $tmp;
        }
}
}
echo '<br>';
echo 'isrusiuotas masyvas nuo maziausio iki didziausio: ';
echo '<br>';
print_r($arr8);

// ////////////10///////////////
echo '<hr>';
echo "10 UZDAVINYS";
echo '<br>';

$masyvas = [];
$counteris = 10;


for ($i=0; $i < $counteris; $i++) { 
    
    for ($a=0; $a < $counteris; $a++) { 
        for ($b=0; $b < 2; $b++) { 
            $masyvas[$i][$a][$b]['value'] = RndSim(1);
            $masyvas[$i][$a][$b]['color'] = "#".substr(md5(rand()), 0, 6);
         
        }
            }
}

// print_r($masyvas);

function RndSim($length = 10) {
    $characters = '#%+*@裡,';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;

    function rand_color() {
        return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
    }
}
?>
</body>
</html>