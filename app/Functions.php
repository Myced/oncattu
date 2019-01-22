<?php
namespace App;
/**
 * @namespace
 */
class Functions
{

    public static function getMoney($money)
    {
        $regex = '/[\s\,\.\-]/';
        if(preg_match($regex, $money))
        {
            $filter = preg_filter($regex, '', $money);
        }
        else
        {
            $filter = $money;
        }

        return $filter;
    }

    public static function getUser()
    {
        return auth()->user();
    }
}


 ?>
