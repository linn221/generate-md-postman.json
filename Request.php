<?php

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


    private function replaceGlobals()
    {
        foreach (self::$globals as $old => $new) {
            $this->url = str_replace($old, $new, $this->url);
            if (is_array($this->payload)) {
                foreach($this->payload as $input) {
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
        dump($this);
    }
}
