<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class RequireOnceToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class RequireOnceToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'require_once', $lineNumber = null)
    {
        parent::__construct(T_REQUIRE_ONCE, $value, $lineNumber);
    }
}
