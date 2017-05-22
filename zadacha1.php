<?php
//---------------------Вывод на прямую.
function generator(){
    yield from  [
        "key1" => 5,
        "key2" => 6,
        "key3" => 7,
        "key4" => 8,
        "key5" => 9,
        "key6" => 10,
        "key7" => 11,
    ];
    yield from [20,40,60,80,100];
}
$generatorObject = generator();
foreach ($generatorObject as $val){
    echo '<br>' . var_export($val);
}

//----------------------------(Из файла.)
function generator2($file)
{
    if (($f = fopen($file, 'r'))!== false){
        while ($line = fgets($f)) {
            yield $line;
        }
        fclose($f);
    }
}
$generator = generator2("vopros_otvet.txt");
foreach ($generator as $key => $line) {
    echo $line . '<br>';
}










