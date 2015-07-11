<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class EvalToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class EvalToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'eval', $lineNumber = null)
    {
        parent::__construct(T_EVAL, $value, $lineNumber);
    }
}
