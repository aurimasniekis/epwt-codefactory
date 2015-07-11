<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class EndForeachToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class EndForeachToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'endforeach', $lineNumber = null)
    {
        parent::__construct(T_ENDFOREACH, $value, $lineNumber);
    }
}
