<?php
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);

// error_reporting(E_ERROR | E_PARSE);
require "vendor/autoload.php";
require "Request.php";


function generate_md(stdClass $data, string $append = "")
{
    // if $data has item, it is a folder, loop each of them, prnting the folder name in H2
    if (!is_null($data->item)) {
        foreach ($data->item as $item) {
            $bullet = $append . "#";
            $heading = "$bullet $item->name";
            echo "\n$heading\n";
            generate_md($item, $bullet);
        }
        // line break after echoing a folder's inside
        // but not after echoing a folder's subfolders, tough to explain
        $last_item = $data->item[count($data->item) - 1];
        if (is_null($last_item->item)) {
            echo "---------------------------\n";
        }
        return;
    }
    // if $data has request, it is a request, create an instance and print the md, return;
    $request = new Request($data);
    echo $request;
}

// if (count($argv) <= 1) {
//     echo 'run me with json file name appended (php main.php postman.json)';
//     $argv[1] = 'postman.json';
//     // exit();
// }
$fileName = $_GET['file_name'] ?? 'postman.json';
$postman = json_decode(file_get_contents($fileName));
generate_md($postman);