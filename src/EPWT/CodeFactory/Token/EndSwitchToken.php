<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class EndSwitchToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class EndSwitchToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'endswitch', $lineNumber = null)
    {
        parent::__construct(T_ENDSWITCH, $value, $lineNumber);
    }
}
