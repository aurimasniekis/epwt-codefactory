<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class TraitCToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class TraitCToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = '__TRAIT__', $lineNumber = null)
    {
        parent::__construct(T_TRAIT_C, $value, $lineNumber);
    }
}
