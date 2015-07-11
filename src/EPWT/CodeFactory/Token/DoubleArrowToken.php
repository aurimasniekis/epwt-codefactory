<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class DoubleArrowToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class DoubleArrowToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = '=>', $lineNumber = null)
    {
        parent::__construct(T_DOUBLE_ARROW, $value, $lineNumber);
    }
}
