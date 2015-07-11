<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class ConcatEqualToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class ConcatEqualToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = '.=', $lineNumber = null)
    {
        parent::__construct(T_CONCAT_EQUAL, $value, $lineNumber);
    }
}
