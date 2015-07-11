<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class EndWhileToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class EndWhileToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'endwhile', $lineNumber = null)
    {
        parent::__construct(T_ENDWHILE, $value, $lineNumber);
    }
}
