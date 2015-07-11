<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class DnumberToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class DnumberToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = '0.0', $lineNumber = null)
    {
        parent::__construct(T_DNUMBER, $value, $lineNumber);
    }
}
