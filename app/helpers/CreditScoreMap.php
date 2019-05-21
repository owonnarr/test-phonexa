<?php
/**
 * Created by PhpStorm.
 * User: owonnarr
 * Date: 20.05.19
 * Time: 21:51
 */

namespace App\helpers;


trait CreditScoreMap
{
    /**
     * get value credit score
     * @param string $key
     * @return int
     */
    public function getCreditScoreValue(string $key)
    {
        switch (mb_strtolower($key)) {
            case 'good':
                return 700;
                break;
            case 'bad':
                return 300;
                break;
        }
    }
}