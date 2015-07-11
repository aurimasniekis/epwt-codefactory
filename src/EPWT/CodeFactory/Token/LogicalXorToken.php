<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class LogicalXorToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class LogicalXorToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'xor', $lineNumber = null)
    {
        parent::__construct(T_LOGICAL_XOR, $value, $lineNumber);
    }
}
