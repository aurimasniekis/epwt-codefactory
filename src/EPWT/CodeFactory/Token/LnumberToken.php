<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class LnumberToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class LnumberToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = '0', $lineNumber = null)
    {
        parent::__construct(T_LNUMBER, $value, $lineNumber);
    }
}
