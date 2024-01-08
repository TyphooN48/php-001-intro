<?
//Task 2
//вывод номер строки и названия файла
echo 'File name: ' . basename(__FILE__) . ', Line: ' . __LINE__ ;
echo "\n";

//многострочная переменная
echo <<<END
    Test
        Test2
Test3\n
END;

//Две простые переменные
$a='Рыба';
$b='человек';

echo "$a рыбою сыта, а $b человеком";
echo "\n\n";

//Task 2
$variable = 3.14;
//  $variable = 3;
//  $variable = 'one';
//  $variable = true;
//  $variable = null;
//  $variable = [];

//  Ваш программный код, в котором переменной $type
//  присваивается одно из значений: bool, float, 
//  int, string, null или other

$type = null;
if(is_bool($variable)) {
    $type = 'bool';
} elseif(is_float($variable)) {
    $type = 'float';
} elseif(is_int($variable)) {
    $type = 'int';
} elseif(is_string($variable)) {
    $type = 'string';
} elseif(is_null($variable)) {
    $type = 'null';
} elseif($variable === []) {
    $type = 'other';
}
echo "type is $type";

/*$type = null;
switch (true) {
    case is_bool($variable):
        $type = 'bool';
        break;
    case is_float($variable):
        $type = 'float';
        break;
    case is_int($variable):
        $type = 'int';
        break;
    case is_string($variable):
        $type = 'string';
        break;
    case is_null($variable):
        $type = 'null';
        break;
    default:
        $type = 'other';
}
echo "type is $type";*/