<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class BreakToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class BreakToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'break', $lineNumber = null)
    {
        parent::__construct(T_BREAK, $value, $lineNumber);
    }
}
