<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class BadCharacterToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class BadCharacterToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = null, $lineNumber = null)
    {
        parent::__construct(T_BAD_CHARACTER, $value, $lineNumber);
    }
}
