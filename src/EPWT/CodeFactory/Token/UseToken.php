<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class UseToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class UseToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'use', $lineNumber = null)
    {
        parent::__construct(T_USE, $value, $lineNumber);
    }
}
