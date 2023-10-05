<?php
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);

// error_reporting(E_ERROR | E_PARSE);
require "vendor/autoload.php";
require "Request.php";


function echoMd(string $s) {
    // echo $s;
    $parsedown = new Parsedown();
    echo $parsedown->text($s);
}

function md_generate(stdClass $data, string $append = "") {
    // if $data has item, it is a folder, loop each of them, prnting the folder name in H2
    if (!is_null($data->item)) {
        foreach($data->item as $item) {
            $bullet = $append . "#";
            $heading = "$bullet $item->name\n";
            echoMd($heading);
            // echo $heading;
            md_generate($item, $bullet);
        }
        echoMd("--------");

        return;
    }
    $request = new Request($data);
    // dump($request);
    $md = $request->render();
    // echo $md;
    echoMd($md);
    // $request->print();
    // if $data has request, it is a request, create an instance and print the md, return;
    // if (is_null($data->request)) {
    //     return md_generate($data->item);
    // }
}

// if (count($argv) <= 1) {
//     echo 'run me with json file name appended (php main.php postman.json)';
//     $argv[1] = 'postman.json';
//     // exit();
// }
$fileName = $_GET['file_name'] ?? 'postman.json';
$postman = json_decode(file_get_contents($fileName));
// $data = $postman->item[0];
// dd($postman);
// dump($postman);
md_generate($postman);
// dd($data);
// $folders = $data->item;
// foreach($folders as $folder) {
//     line("## $folder->name");
// }
// var_dump($postman);
// $data = $postman['item'][0];
// $request = $data->item[2]->item[0]->item[3];
// dump($request);
// $request = new Request($request);
// dd($request);
// $request->print();