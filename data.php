<?php 
$version = 1;
$articles = [
    ["id" => 0,"name" => "Tartelette", "price" => 2.6],
    ["id" => 1,"name" => "Pain maya", "price" => 2.4],
    ["id" => 2,"name" => "Pain aux céréales", "price" => 2.4],
    ["id" => 3, "name" => "Pain aux raisins", "price" => 1.5],
    ["id" => 4, "name" => "Pain aux fruits", "price" => 2.4]
    ];

$orders = [
    ["name" => $articles[2]["name"], "price" => $articles[2]["price"], "number" => 1],
    ["name" => $articles[3]["name"], "price" => $articles[3]["price"], "number" => 2],
    ["name" => $articles[4]["name"], "price" => $articles[4]["price"], "number" => 1],
    ["name" => $articles[0]["name"], "price" => $articles[0]["price"], "number" => 1],
    ["name" => $articles[1]["name"], "price" => $articles[1]["price"], "number" => 1],
];
?>

