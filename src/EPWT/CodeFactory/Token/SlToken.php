<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class SlToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class SlToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = '<<', $lineNumber = null)
    {
        parent::__construct(T_SL, $value, $lineNumber);
    }
}
