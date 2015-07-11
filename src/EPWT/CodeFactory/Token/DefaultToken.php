<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class DefaultToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class DefaultToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'default', $lineNumber = null)
    {
        parent::__construct(T_DEFAULT, $value, $lineNumber);
    }
}
