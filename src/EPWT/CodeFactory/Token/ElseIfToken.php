<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class ElseIfToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class ElseIfToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'elseif', $lineNumber = null)
    {
        parent::__construct(T_ELSEIF, $value, $lineNumber);
    }
}
