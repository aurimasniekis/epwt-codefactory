<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class ObjectOperatorToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class ObjectOperatorToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = '->', $lineNumber = null)
    {
        parent::__construct(T_OBJECT_OPERATOR, $value, $lineNumber);
    }
}
