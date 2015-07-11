<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class PaamayimNekudotayimToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class PaamayimNekudotayimToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = '::', $lineNumber = null)
    {
        parent::__construct(T_PAAMAYIM_NEKUDOTAYIM, $value, $lineNumber);
    }
}
