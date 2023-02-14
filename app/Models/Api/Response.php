<?php

namespace App\Models\Api;

class Response
{
    public $message;
    public $data;
    public $status;

    public function __construct($status, $message = '', $data = null)
    {
        $this->status = $status;
        $this->message = $message;
        $this->data = $data;
    }
}
