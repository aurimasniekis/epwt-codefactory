<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class YieldToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class YieldToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'yield', $lineNumber = null)
    {
        parent::__construct(T_YIELD, $value, $lineNumber);
    }
}
