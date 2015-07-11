<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class WhileToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class WhileToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'while', $lineNumber = null)
    {
        parent::__construct(T_WHILE, $value, $lineNumber);
    }
}
