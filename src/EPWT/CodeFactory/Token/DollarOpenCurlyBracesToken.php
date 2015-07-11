<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class DollarOpenCurlyBracesToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class DollarOpenCurlyBracesToken extends Token
{
    /**
     * @param int|null $lineNumber
     */
    public function __construct($lineNumber = null)
    {
        parent::__construct(T_DOLLAR_OPEN_CURLY_BRACES, '${', $lineNumber);
    }
}
