<?php

namespace App\http;

use DOMDocument;
use App\helpers\CreditScoreMap;

class Request
{
    use CreditScoreMap;

    /**
     * prepared xml user data
     * @param array $userData
     * @return string
     */
    public function getPreparedXMLData(array $userData) :string
    {
        $dom = new DOMDocument();
        $userInfo = $dom->appendChild($dom->createElement('userInfo'));
        $userAttributes = $dom->createAttribute('version');
        $userAttributes->value = '1.6';
        $userInfo->appendChild($userAttributes);

        $firstName = $userInfo->appendChild($dom->createElement('firstName'));
        $firstName->nodeValue = isset($userData['firstName']) ? $userData['firstName'] : '';

        $lastName = $userInfo->appendChild($dom->createElement('lastName'));
        $lastName->nodeValue = isset($userData['lastName']) ? $userData['lastName'] : '';

        $salary = $userInfo->appendChild($dom->createElement('salary'));
        $salary->nodeValue = isset($userData['salary']) ? $userData['salary'] : '';

        $dateOfBirth = $userInfo->appendChild($dom->createElement('dateOfBirth'));
        $dateOfBirth->nodeValue = isset($userData['dateOfBirth']) ? $userData['dateOfBirth'] : '';

        $creditScore = $userInfo->appendChild($dom->createElement('creditScore'));
        $creditScore->nodeValue = isset($userData['creditScore']) ? $this->getCreditScoreValue($userData['creditScore']) : '';

        $dom->formatOutput = true;
        return $dom->saveXML();
    }

    /**
     * get prepared json user data
     * @param array $userData
     * @return false|string
     */
    public function getPreparedJsonData(array $userData)
    {
        if(isset($userData['creditScore'])) {
            $userData['creditScore'] = $this->getCreditScoreValue($userData['creditScore']);
        }

        $userData = [
          'userInfo' => $userData
        ];

        return json_encode($userData);
    }
}