<?php

namespace App\controllers;

use Engine\Controller;
use App\http\Request;
use App\helpers\CurlHelper;

class IndexController extends Controller
{
    const XML_TYPE = 'application/xml; charset=utf-8';
    const JSON_TYPE = 'application/json; charset=utf-8';

    public function index()
    {
        $request = new Request();
        $curl = new CurlHelper();

        # Запросы можно отправлять в (json и xml формате данных), сейчас включен
        # json формат, чтобы поменять форматы расскоментируйте 2 строки кода ниже

//        $requestXML = $request->getPreparedXMLData($this->getUserData());
//        $curl->sendPost($requestXML, self::XML_TYPE, 'xml');

        # send POST (type xml) - при переключении формата закомментируйте эти 2 строки кода
        $requestJson = $request->getPreparedJsonData($this->getUserData());
        $curl->sendPost($requestJson, self::JSON_TYPE, 'json');
    }

    /**
     * get user data
     * @return array
     */
    public function getUserData() :array
    {
        return [
            "firstName" => "Vasya",
            "lastName" => "Pupkin",
            "dateOfBirth" => "1984-07-31",
            "salary"    	=> "1000",
            "creditScore" => "bad"
        ];
    }
}