<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class TraitToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class TraitToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'trait', $lineNumber = null)
    {
        parent::__construct(T_TRAIT, $value, $lineNumber);
    }
}
