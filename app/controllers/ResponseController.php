<?php
/**
 * Created by PhpStorm.
 * User: owonnarr
 * Date: 19.05.19
 * Time: 22:04
 */

namespace App\controllers;

use App\http\{JsonResponse, XmlResponse };
use Engine\Request;

class ResponseController
{
    public function __construct()
    {
        $request = new Request();

        if (!$request->isPost()) {
            die('Запрос осуществлен недопустимым методом.');
        };
    }

    public function index()
    {
        if (isset($_POST['xml'])) {
            header("Content-type: application/xml; charset=utf-8");
            $xml = simplexml_load_string($_POST['xml']);
            $response = new XmlResponse();

            switch ($xml->creditScore) {
                case 700:
                    return $response->sold(200, 'Success', 'AC158457A800036886A03E7');
                    break;
                case 300:
                    return $response->reject(200, 'Reject');
                    break;
            }

        } elseif (isset($_POST['json'])) {
            header("Content-type: application/json; charset=utf-8");
            $data = json_decode($_POST['json'], true);
            $response = new JsonResponse();

            switch ($data['userInfo']['creditScore']) {
                case 700:
                    return $response->sold(200, 'Success', 'AC158457A800036886A03E7');
                    break;
                case 300:
                    return $response->reject(200, 'Reject');
                    break;
            }
        }
    }
}