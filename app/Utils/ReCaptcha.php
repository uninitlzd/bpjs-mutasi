<?php
/**
 * Created by PhpStorm.
 * User: Edo
 * Date: 02/08/2018
 * Time: 2:03
 */

namespace App\Utils;


use GuzzleHttp\Client;

class ReCaptcha
{
    public function validate(
        $attribute,
        $value,
        $parameters,
        $validator
    ){

        $client = new Client();

        $response = $client->post(
            'https://www.google.com/recaptcha/api/siteverify',
            ['form_params'=>
                [
                    'secret'=> '6Ld1vWcUAAAAAGQoNkrrpz6W59MjQ-VTX2KuEMsc',
                    'response'=>$value
                ]
            ]
        );

        $body = json_decode((string)$response->getBody());
        return $body->success;
    }
}
