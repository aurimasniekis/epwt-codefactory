<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class GotoToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class GotoToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'goto', $lineNumber = null)
    {
        parent::__construct(T_GOTO, $value, $lineNumber);
    }
}
