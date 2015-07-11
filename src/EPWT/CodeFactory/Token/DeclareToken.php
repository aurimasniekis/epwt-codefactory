<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class DeclareToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class DeclareToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'declare', $lineNumber = null)
    {
        parent::__construct(T_DECLARE, $value, $lineNumber);
    }
}
