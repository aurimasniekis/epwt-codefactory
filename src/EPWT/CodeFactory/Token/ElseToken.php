<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class ElseToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class ElseToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'else', $lineNumber = null)
    {
        parent::__construct(T_ELSE, $value, $lineNumber);
    }
}
