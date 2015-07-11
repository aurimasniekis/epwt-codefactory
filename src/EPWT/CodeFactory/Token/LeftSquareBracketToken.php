<?php

namespace EPWT\CodeFactory\Token;

use EPWT\CodeFactory\CustomTokens;

/**
 * Class LeftSquareBracketToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class LeftSquareBracketToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = '[', $lineNumber = null)
    {
        parent::__construct(CustomTokens::T_LEFT_SQUARE_BRACKET, $value, $lineNumber);
    }
}
