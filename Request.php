<?php

use kbATeam\MarkdownTable\Column;
use kbATeam\MarkdownTable\Table;

class Request
{
    private
        $name,
        $method,
        $url,
        $payload,
        $description,
        $mode;

    public static $globals = [
        '{{pos_url}}' => 'https://c.mmsdev.site/api/v1',
        '{{password}}' => 'password'
    ];

    public function render()
    {
        $url = $this->url;
        $method = $this->method;
        $mode = $this->mode;
        $description = $this->description;
        $payload = $this->payload;

        $md = '';
        if (empty($mode)) {
            $md = <<<GET
method: *$method*
```http
$url
```
$description

GET;
        } else {
            $md = <<<POST
method: *$method*
```http
$url
```
payload: *$mode*

$payload
$description

POST;
        }

        return $md;
    }

    private function replaceGlobals()
    {
        foreach (self::$globals as $old => $new) {
            $this->url = str_replace($old, $new, $this->url);
            if (is_array($this->payload)) {
                foreach ($this->payload as $input) {
                    $input->value = str_replace($old, $new, $input->value);
                }
            } else {
                $this->payload = str_replace($old, $new, $this->payload);
            }
        }
    }


    public function __construct($request)
    {
        $this->name = $request->name;
        $details = $request->request;
        $this->method = $details->method;
        $this->url = $details->url->raw;

        // body
        if ($details->body->mode) {
            $this->mode = $details->body->mode;
            if ($this->mode == 'formdata') {
                $this->payload = $details->body->formdata;
            } else if ($this->mode == 'raw') {
                $this->payload = $details->body->raw;
            } else if ($this->mode == 'urlencoded') {
                $this->payload = $details->body->urlencoded;
            }
        }

        $this->replaceGlobals();
    }

    public function print()
    {
        echo "$this->method $this->url $this->payload";
    }

    public function markdown()
    {
        $data = [];
        $data['url'] = $this->url;
        $data['method'] = $this->method;
        $data['url'] = $this->url;
    }
}

        // $backtip = '```';
        // $md = "";
        // $md .= "method: *$this->method*\n";
        // $md .= "$backtip http\n";
        // $md .= "$this->url\n";
        // $md .= "$backtip\n";
        // if ($this->payload) {
        //     $md .= "Payload: **$this->mode**\n";
        //     if (is_array($this->payload)) {
        //         $md .= "\n| Arguments     | Type     | Value          |\n";
        //         $md .= "| :------------ | :------- | :------------- |\n";
        //         foreach ($this->payload as $row) {
        //             $md .= "|`$row->key`|`$row->type`| $row->value\n";
        //         }
        //     } else {
        //     }
        // }