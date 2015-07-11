<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class CurlyOpenToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class CurlyOpenToken extends Token
{
    /**
     * @param int|null $lineNumber
     */
    public function __construct($lineNumber = null)
    {
        parent::__construct(T_CURLY_OPEN, '{$', $lineNumber);
    }
}
