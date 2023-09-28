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
    }
    
    public function print()
    {
        echo "$this->method $this->url $this->payload";
    }
}
