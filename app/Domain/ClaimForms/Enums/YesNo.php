<?php

namespace App\Domain\ClaimForms\Enums;

/**
* Class YesNo.
*/
class YesNo{
    public const YES = 'Yes';
    public const NO = 'No';

    /**
    * @return mixed
    */
    public static function choices()
    {
        $choices = [];

        $choices['YES'] = self::YES;
        $choices['NO'] = self::NO;

        return $choices;
    }
}
