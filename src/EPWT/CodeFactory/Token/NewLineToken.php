<?php

namespace EPWT\CodeFactory\Token;

use EPWT\CodeFactory\CustomTokens;

/**
 * Class NewLineToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class NewLineToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = "\n", $lineNumber = null)
    {
        parent::__construct(CustomTokens::T_NEW_LINE, $value, $lineNumber);
    }
}
