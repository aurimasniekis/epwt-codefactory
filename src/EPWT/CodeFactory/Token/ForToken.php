<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class ForToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class ForToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'for', $lineNumber = null)
    {
        parent::__construct(T_FOR, $value, $lineNumber);
    }
}
