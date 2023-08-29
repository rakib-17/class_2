<?php
    // echo "Hello World";

    // $firstName="Abbas Ali";
    // $lastName="Rakib";

    // echo "$firstName.$lastName";

    // $banglaSub="100";
    // $englishSub="80";
    // $mathSub="65";

    // $results= $banglaSub+$englishSub+$mathSub;

    // echo $results;

    // $total="90";
    // $spend="75";

    // $have= $total-$spend;

    // echo $have;

    ?>

    <h2> Class-2 HOME WORK</h2>
    <h3> DATE: 29/07/2023</h3>
    <h4> Topic: Create Some Function </h4>

<?php
    function sum($userName, $banglaSub, $englishSub, $mathSub){
        $results= $banglaSub+$englishSub+$mathSub;
        echo "$userName mark is $results";
        echo "<br>";
    }

    sum('Rakib', '95','70','79',);
    sum('Ananda', '90','87','75',);
    sum('Hasnat', '94','75','87',);
    sum('Sayem', '89','77','99',);
    echo "<br>";

    function minus($product, $total, $spend){
        $lMoney= $total - $spend;
        echo "After Buy $product, left money is $lMoney";
        echo "<br>";
    }
    
    minus('Pencil','100','77');
    minus('Book', '100','55');
    minus('Scale', '100','66');
    echo "<br>";

    function multiply($name, $taka, $howMuch){
            $something= $taka * $howMuch;
            echo "Buy $name $something Taka";
            echo "<br>";
    }

    multiply('Book', "75", '7');
    multiply('Pen', '10', '3');
    multiply('Bag', '1150', '1');
    multiply('Note Book', '80', '4');
    echo "<br>";

    function division($number1, $number2, $number3){
        $final= $number1 / $number2 / $number3;
        echo "The Answer is $final";
        echo "<br>";
    }

    division('300', '55', '12');
    division('1500', '90', '10');
    division('70587', '118', '57');
        echo "<br>";

    function power($base, $power){
        $function= $base ** $power;
        echo "Mathmatical Number is $function";
        echo "<br>";
    }

    power('14', '5');
    power('20', '9');
    power('110', '7');
    echo "<br>";

    function modulus($fNum, $lNum){
        $flFinal= $fNum % $lNum;
        echo "Modulus Number Is $flFinal"; 
        echo "<br>";
    }

    modulus('45', '13');
    modulus('107', '14');
    modulus('77', '5');
    modulus('200', '20');
    echo "<br>";

    function output($myName){
        echo strtoupper($myName);
        echo "<br>";
    }

    output('abbas ali rakib');
    output('nur mostakim');
    output('shah hasnat');
    output('anondo roy');
    output('hemel arefin');
    echo "<br>";

    function assignment($sumAs, $sumBs){
        $inTotal= $sumAs += $sumBs;
        echo "Assaignment Output is $inTotal";
        echo "<br>";
    }

    assignment('10', '8');
    assignment('40', '45');
    assignment('109', '77');
    assignment('580', '79');
    assignment('297', '187');
    echo "<br>";

    
    function mainus($minMs, $minOs){
        $aMin= $minMs -= $minOs;
        echo "Minus Assain is $aMin";
        echo "<br>";
    }
    
    mainus('30', '5');
    mainus('60', '3');
    mainus('95', '9');
    mainus('205', '35');
    mainus('548', '70');
    echo "<br>";

    function multi($mlNum, $mlNum2){
        $output= $mlNum *= $mlNum2;
        echo "Multiplay Assaignment Number $output";
        echo "<br>";
    }

    multi('40', '5');
    multi('80', '8');
    multi('100', '10');
    multi('150', '15');
    multi('220', '31');
    echo "<br>";