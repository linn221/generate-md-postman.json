<?php
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);

// error_reporting(E_ERROR | E_PARSE);
require "vendor/autoload.php";
require "Request.php";

function pout(string $s)
{
    echo "$s\n";
}

function generate_md(stdClass $data, string $heading = "", string $bullet = "")
{
    // if $data has item, it is a folder, loop each of them, prnting the folder name in H2
    // BASE case
    if (!is_null($data->item))
    {
        // if a folder only have a single item,
        // no need to update bullet, append a decimal
        // bulleting is, well, hurt
        if (count($data->item) == 1)
        {
            $item = $data->item[0];
            $title = "$heading# $bullet $item->name";
            pout($title);
            // RECURSIVE call
            generate_md($item, $heading, $bullet);
            return;
        }

        // if not
        // append a number, and keep incrementing
        foreach ($data->item as $index => $item)
        {
            $index++;
            $title = "$heading# $bullet$index. $item->name";
            pout($title);
            // RECURSIVE call
            generate_md($item, $heading.'#', $bullet . "$index.");
        }
        // line break after echoing a folder's inside
        // but not after echoing a folder's subfolders, tough to explain
        $last_item = $data->item[count($data->item) - 1];
        if (is_null($last_item->item))
        {
            pout('----------------------------');
        }
        return;
    }

    // if $data has request, it is a request, create an instance and print the md, return;
    // base case
    $request = new Request($data);
    pout($request);
}

// if (count($argv) <= 1) {
//     echo 'run me with json file name appended (php main.php postman.json)';
//     $argv[1] = 'postman.json';
//     // exit();
// }
$fileName = $_GET['file_name'] ?? 'postman.json';
$postman = json_decode(file_get_contents($fileName));
generate_md($postman);