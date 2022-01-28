<?php

$data = ["action" => "create"];

// if (isset($data["action"])) {
//     $action = $data["action"];
// } else {
//     $action = "Noting";
// }


// echo $action;


// 

$action = $data["action"] ?? "Nothing";


echo $action;
