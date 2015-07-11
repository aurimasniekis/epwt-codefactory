<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class OpenTagWithEchoToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class OpenTagWithEchoToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = '<?=', $lineNumber = null)
    {
        parent::__construct(T_OPEN_TAG_WITH_ECHO, $value, $lineNumber);
    }
}
