<?php

namespace EPWT\CodeFactory\Token;

use EPWT\CodeFactory\CustomTokens;

/**
 * Class LeftCurlyBracketToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class LeftCurlyBracketToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = '{', $lineNumber = null)
    {
        parent::__construct(CustomTokens::T_LEFT_CURLY_BRACKET, $value, $lineNumber);
    }
}
