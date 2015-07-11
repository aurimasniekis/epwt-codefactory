<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class EncapsedAndWhitespaceToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class EncapsedAndWhitespaceToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = null, $lineNumber = null)
    {
        parent::__construct(T_ENCAPSED_AND_WHITESPACE, $value, $lineNumber);
    }
}
