<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class TryToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class TryToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'try', $lineNumber = null)
    {
        parent::__construct(T_TRY, $value, $lineNumber);
    }
}
