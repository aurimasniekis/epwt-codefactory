<?php

namespace EPWT\CodeFactory\Token;

use EPWT\CodeFactory\CustomTokens;

/**
 * Class GreaterThanToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class GreaterThanToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = '>', $lineNumber = null)
    {
        parent::__construct(CustomTokens::T_GREATER_THAN, $value, $lineNumber);
    }
}
