<?php
/**
 * Created by PhpStorm.
 * User: owonnarr
 * Date: 20.05.19
 * Time: 9:36
 */

namespace app\http\contracts;

interface ResponseInterface
{
    public function sold(int $code, string $codeDescription, string $transactionId);

    public function reject(int $code, string $codeDescription);

    public function error(int $code, string $codeDescription, string $error);

//    public function setContentType(string $type);
}