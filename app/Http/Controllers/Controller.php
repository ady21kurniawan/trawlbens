<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $code = 200;
    protected $message = "success";
    protected $data = [];


    protected function set_code($code)
    {
        $this->code = $code;
        return $this;
    }

    protected function set_message($message)
    {
        $this->message = $message;
        return $this;
    }

    protected function set_data($data)
    {
        $this->data = $data;
        return $this;
    }

    protected function response_json( array $data , $code=200, $message='success')
    {
        if(count($data) == 1)
        {
            $data = $this->convert_to_object($data);      
        }

        return json_encode([
            "code" => $code ?? $this->code,
            "message" => $message ?? $this->message,
            "data" => $data ?? $this->data
        ]);
    }

    protected function convert_to_object($data)
    {
        if( is_array($data[0]) )
        {
            $props = array_keys( $data[0]);
        }else{
            $props = get_object_vars($data[0]);
            $props = array_keys($props);
        }
        
        $result = new \stdClass();
        foreach( $props as $key)
        {
            if( is_array($data[0]))
            {
                $result->$key = $data[0][$key];
                continue;
            }
            $result->$key = $data[0]->$key;
        }
        return $result;
    }
}
