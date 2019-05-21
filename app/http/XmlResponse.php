<?php
/**
 * Created by PhpStorm.
 * User: owonnarr
 * Date: 20.05.19
 * Time: 9:49
 */

namespace App\http;

use DOMDocument;
use App\http\contracts\ResponseInterface;

class XmlResponse implements ResponseInterface
{
    private $dom;

    public function __construct()
    {
        $this->dom = new DomDocument('1.0', 'UTF-8');
    }

    /**
     * @param int $code
     * @param string $codeDescription
     * @param string $transactionId
     */
    public function sold(int $code, string $codeDescription, string $transactionId)
    {
        $userInfo = $this->dom->appendChild($this->dom->createElement('userInfo'));
        $userAttributes = $this->dom->createAttribute('version');
        $userAttributes->value = '1.6';
        $userInfo->appendChild($userAttributes);

        $returnCode = $userInfo->appendChild($this->dom->createElement('returnCode'));
        $returnCode->nodeValue = $code;

        $codeDescr = $userInfo->appendChild($this->dom->createElement('codeDescription'));
        $codeDescr->nodeValue = $codeDescription;

        $trId = $userInfo->appendChild($this->dom->createElement('transactionId'));
        $trId->nodeValue = $transactionId;

        $this->dom->formatOutput = true;
        echo $this->dom->saveXML();
    }

    /**
     * @param int $code
     * @param string $codeDescription
     */
    public function reject(int $code, string $codeDescription)
    {
        $userInfo = $this->dom->appendChild($this->dom->createElement('userInfo'));
        $userAttributes = $this->dom->createAttribute('version');
        $userAttributes->value = '1.6';
        $userInfo->appendChild($userAttributes);

        $returnCode = $userInfo->appendChild($this->dom->createElement('returnCode'));
        $returnCode->nodeValue = $code;

        $codeDescr = $userInfo->appendChild($this->dom->createElement('codeDescription'));
        $codeDescr->nodeValue = $codeDescription;

        $this->dom->formatOutput = true;
        echo $this->dom->saveXML();
    }

    /**
     * @param int $code
     * @param string $codeDescription
     * @param string $error
     */
    public function error(int $code, string $codeDescription, string $error)
    {
        $userInfo = $this->dom->appendChild($this->dom->createElement('userInfo'));
        $userAttributes = $this->dom->createAttribute('version');
        $userAttributes->value = '1.6';
        $userInfo->appendChild($userAttributes);

        $returnCode = $userInfo->appendChild($this->dom->createElement('returnCode'));
        $returnCode->nodeValue = $code;

        $codeDescr = $userInfo->appendChild($this->dom->createElement('codeDescription'));
        $codeDescr->nodeValue = $codeDescription;

        $trId = $userInfo->appendChild($this->dom->createElement('returnError'));
        $trId->nodeValue = $error;

        $this->dom->formatOutput = true;
        echo $this->dom->saveXML();
    }
}