<?php

use kbATeam\MarkdownTable\Column;
use kbATeam\MarkdownTable\Table;

require_once 'vendor/autoload.php';

class Request
{
    private
        $method,
        $url,
        $payload,
        $description,
        $mode;

    public static $globals = [
        '{{pos_url}}' => 'https://c.mmsdev.site/api/v1',
        '{{password}}' => 'password'
    ];

    private static function render(array $data, $key): string
    {
        extract($data);
        switch ($key) {
            case 'url':
                $result = <<<URL

*$method*
```http
$url
```
$description

URL;
                break;
            case 'payload':
                $result = <<<PAYLOAD

*$method*
```http
$url
```
[*$mode*]

$table_string
$description

PAYLOAD;
                break;
        }
        return $result;
    }

    public function __toString()
    {
        $url = $this->url;
        $method = $this->method;
        $mode = $this->mode;
        if ($this->description) {
            $description = "Note:\n$this->description";
        } else {
            $description = '';
        }

        if (empty($this->payload)) {
            $str = self::render(compact('url', 'method', 'description'), 'url');
        } else {
            $table_string = $this->generatePayloadTable();
            $str = self::render(compact('url', 'method', 'mode', 'table_string', 'description'), 'payload');
        }

        return $str;
    }

    private function generatePayloadTable() : string
    {
        if ($this->mode == 'formdata' || $this->mode == 'urlencoded') {
            // turn stdClass object into asssociative array
            $data = json_decode(json_encode($this->payload), true);
            $table = new Table();
            $table->addColumn('key', new Column('Key', Column::ALIGN_LEFT));
            $table->addColumn('type', new Column('Type', Column::ALIGN_LEFT));
            $table->addColumn('value', new Column('Value', Column::ALIGN_LEFT));
            $table_string = $table->getString($data);
        } else if ($this->mode == 'raw') {
            // return $this->payload;
            // yellow?
            $raw_json = json_encode(json_decode($this->payload, true), JSON_PRETTY_PRINT);
            $table_string = <<<JSON
```json
$raw_json
```

JSON;
        }
        return $table_string;
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
        // $this->name = $request->name;
        $details = $request->request;
        $this->method = $details->method;
        $this->url = $details->url->raw;
        $this->description = $details->description;

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
}
