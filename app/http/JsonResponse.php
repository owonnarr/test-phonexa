<?php
/**
 * Created by PhpStorm.
 * User: owonnarr
 * Date: 20.05.19
 * Time: 9:52
 */

namespace App\http;

use App\http\contracts\ResponseInterface;

class JsonResponse implements ResponseInterface
{
    /**
     * sold - json response
     * @param int $code
     * @param string $codeDescription
     * @param string $transactionId
     * @return false|string
     */
    public function sold(int $code, string $codeDescription, string $transactionId) :string
    {
        $response = ['SubmitDataResult' => $codeDescription];
        echo json_encode($response);
    }

    /**
     * reject - json response
     * @param int $code
     * @param string $codeDescription
     * @return false|string
     */
    public function reject(int $code, string $codeDescription) :string
    {
        $response = ['SubmitDataResult' => $codeDescription];
        echo json_encode($response);
    }

    /**
     * error - json response
     * @param int $code
     * @param string $codeDescription
     * @param string $error
     * @return false|string
     */
    public function error(int $code, string $codeDescription, string $error) :string
    {
        $response = [
            'SubmitDataResult' => $codeDescription,
            'SubmitDataErrorMessage' => $error
        ];
        echo json_encode($response);
    }
}