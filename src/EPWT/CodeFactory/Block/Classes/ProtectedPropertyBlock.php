<?php

namespace EPWT\CodeFactory\Block\Classes;

use EPWT\CodeFactory\Token\StringToken;

/**
 * Class ProtectedPropertyBlock
 * @package EPWT\CodeFactory\Block\Classes
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class ProtectedPropertyBlock extends PropertyBlock
{
    public function __construct($name, $value = null)
    {
        parent::__construct($name, $value);

        $this->type = new StringToken('protected');
    }
}
