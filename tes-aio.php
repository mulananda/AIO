<?php
// 1
    $a = array("M" => "Mango", "A" => "Apple", "Me" => "Melon", "O" => "Orange", "P" => "Pineapple");
    $b = array("M" => "Mango", "P" => "Pineapple", "Pe" => "pears");

    // a
    array_push($a, ["B" => "Banana"]);
    echo '<pre>';
    echo "No1 A ";
    print_r($a);

    // b
    $result = array_merge($a, $b);
    echo '<pre>';
    echo "No1 B ";
    print_r($result); 

    // c
    array_push($a, ["Pe" => "pears"]);
    echo '<pre>';
    echo "No1 C ";
    print_r($a);


// 2
    $d = array(["Code" => "2000000001", "Name" => "PT. Tulus Maju"] );
    $f = array("Customer" => "2000000001 - Skyputra");
    array_push($d[0], $f);
    echo '<pre>';
    echo "No 2 ";
    print_r($d);
?>