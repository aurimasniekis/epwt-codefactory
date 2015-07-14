<?php

namespace EPWT\CodeFactory\Block\Namespaces;

use EPWT\CodeFactory\Block\BaseBlock;
use EPWT\CodeFactory\Token\AsToken;
use EPWT\CodeFactory\Token\SemicolonToken;
use EPWT\CodeFactory\Token\StringToken;
use EPWT\CodeFactory\Token\UseToken;
use EPWT\CodeFactory\Token\WhitespaceToken;

/**
 * Class UseBlock
 * @package EPWT\CodeFactory\Block
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class UseBlock extends BaseBlock
{
    /**
     * @var ClassBlock
     */
    protected $class;

    /**
     * @var string
     */
    protected $alias;

    /**
     * @param string|ClassBlock $class
     * @param string|null $alias
     */
    public function __construct($class, $alias = null)
    {
        if (is_string($class)) {
            $class = new ClassBlock($class);
        }

        $this->class = $class;
        $this->alias = $alias;
    }

    /**
     * {@inheritdoc)
     */
    public function generate()
    {
        $tokens = [];

        $tokens[] = new UseToken();
        $tokens[] = new WhitespaceToken();
        $tokens = array_merge($tokens, $this->class->generate());

        if ($this->alias) {
            $tokens[] = new WhitespaceToken();
            $tokens[] = new AsToken();
            $tokens[] = new WhitespaceToken();
            $tokens[] = new StringToken($this->alias);
        }

        $tokens[] = new SemicolonToken();

        return $tokens;
    }

}
