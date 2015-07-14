<?php

namespace EPWT\CodeFactory\Block\Namespaces;

use EPWT\CodeFactory\Block\BaseBlock;
use EPWT\CodeFactory\Token\LeftCurlyBracketToken;
use EPWT\CodeFactory\Token\NamespaceToken;
use EPWT\CodeFactory\Token\SemicolonToken;
use EPWT\CodeFactory\Token\WhitespaceToken;

/**
 * Class NamespaceBlock
 * @package EPWT\CodeFactory\Block\Namespaces
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class NamespaceBlock extends BaseBlock
{
    /**
     * @var ClassBlock
     */
    protected $class;

    /**
     * @param string|ClassBlock $class
     */
    public function __construct($class = null)
    {
        if (is_string($class)) {
            $class = new ClassBlock($class);
        }

        $this->class = $class;
    }

    public function generate()
    {
        $tokens = [];

        $tokens[] = new NamespaceToken();
        $tokens[] = new WhitespaceToken();

        $tokens = array_merge($tokens, $this->class->generate());

        $tokens[] = new SemicolonToken();

        return $tokens;
    }
}

