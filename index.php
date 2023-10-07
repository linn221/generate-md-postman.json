<?php
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);

// error_reporting(E_ERROR | E_PARSE);
require "vendor/autoload.php";
require "Request.php";

$fileName = $argv[1] ?? 'postman.json';
if (!is_file($fileName)) {
    echo "run me with json file name appended => \n";
    echo ">php main.php postman.json >README.md\n";
    echo "Failed reading postman.json file by default...\n";
    exit();
}
echo <<<COMMENT
<!-- API Documentation generated with https://github.com/linn221/generate-md-postman.json -->

COMMENT;
$postman = json_decode(file_get_contents($fileName));
generate_md($postman);

function pout(string $s)
{
    echo "$s\n";
}

function generate_md(stdClass $data, string $heading = "", string $bullet = "")
{

    // base case
    // if $data has no more items
    if (is_null($data->item)) {
        $request = new Request($data);
        pout($request);
        return;
    }

    // if $data has item, it is a folder, loop each of them, prnting the folder name in H2, or greater
    if (!is_null($data->item)) {
        if (count($data->item) == 1) {
            // if a folder only have a single item,
            // no need to update bullet / append a decimal
            $item = $data->item[0];
            $title = "$heading# $item->name";
            pout($title);
            // RECURSIVE call
            generate_md($item, $heading . '#', $bullet);
            return;
        }

        // if not, append a number, and keep incrementing
        foreach ($data->item as $index => $item) {
            $index++;
            $title = "$heading# $bullet$index. $item->name";
            pout($title);
            // RECURSIVE call
            generate_md($item, $heading . '#', $bullet . "$index.");
        }
        // line break after echoing a folder's inside
        // but not after echoing a folder's subfolders, tough to explain
        $last_item = $data->item[count($data->item) - 1];
        if (is_null($last_item->item)) {
            pout('----------------------------');
        }
        return;
    }
}
