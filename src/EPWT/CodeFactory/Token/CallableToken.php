<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class CallableToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class CallableToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'callable', $lineNumber = null)
    {
        parent::__construct(T_CALLABLE, $value, $lineNumber);
    }
}
