<?php

namespace EPWT\CodeFactory\Token;

use EPWT\CodeFactory\CustomTokens;

/**
 * Class CommaToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class CommaToken extends Token
{
    /**
     * @param string $value
     * @param int|null $lineNumber
     */
    public function __construct($value = ',', $lineNumber = null)
    {
        parent::__construct(CustomTokens::T_COMMA, $value, $lineNumber);
    }
}
