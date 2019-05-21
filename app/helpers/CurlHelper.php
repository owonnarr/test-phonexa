<?php
/**
 * Created by PhpStorm.
 * User: owonnarr
 * Date: 19.05.19
 * Time: 21:35
 */

namespace App\helpers;

class CurlHelper
{
    /**
     * send POST request to http://phonexa/response
     * @param string $data
     * @param string $contentType
     * @param string $type
     * @param string $url
     * @return bool|string
     */
    public function sendPost(string $data, string $contentType, string $type, string $url = 'http://phonexa/response')
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, [$type => $data]);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Cache-Control: no-cache",
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);
        curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');

        $response = curl_exec($ch);

        switch ($type) {
            case 'xml':
                $xml = $this->getXmlResponse($response);

                if (isset($xml->codeDescription)) {
                    $response = (string) $xml->codeDescription;
                }
                break;
            case 'json':
                $data = $this->convertJsonToArray($response);

                if (isset($data['SubmitDataResult'])) {
                    $response = (string) $data['SubmitDataResult'];
                }
                break;
        }

        curl_close($ch);
        echo $response;
    }

    /**
     * convert response to xml obj
     * @param string $response
     * @return \SimpleXMLElement
     */
    public function getXmlResponse(string $response)
    {
        return simplexml_load_string($response);
    }

    /**
     * convert json response to array
     * @param string $json
     * @return mixed
     */
    public function convertJsonToArray(string $json)
    {
        return json_decode($json, true);
    }
}