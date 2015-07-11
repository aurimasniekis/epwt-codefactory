<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class SrEqualToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class SrEqualToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = '>>=', $lineNumber = null)
    {
        parent::__construct(T_SR_EQUAL, $value, $lineNumber);
    }
}
