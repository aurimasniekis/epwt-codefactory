<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class CloneToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class CloneToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'clone', $lineNumber = null)
    {
        parent::__construct(T_CLONE, $value, $lineNumber);
    }
}
