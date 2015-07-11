<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class FuncCToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class FuncCToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = '__FUNCTION__', $lineNumber = null)
    {
        parent::__construct(T_FUNC_C, $value, $lineNumber);
    }
}
