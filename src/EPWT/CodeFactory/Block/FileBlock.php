<?php

namespace EPWT\CodeFactory\Block;

use EPWT\CodeFactory\Block\Namespaces\NamespaceBlock;
use EPWT\CodeFactory\Block\Namespaces\UseBlock;
use EPWT\CodeFactory\Token\NewLineToken;
use EPWT\CodeFactory\Token\OpenTagToken;

/**
 * Class FileBlock
 * @package EPWT\CodeFactory\Block
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class FileBlock extends BaseBlock
{
    /**
     * @var string
     */
    protected $filename;

    /**
     * @var NamespaceBlock
     */
    protected $namespace;

    /**
     * @var UseBlock[]
     */
    protected $uses;

    /**
     * @var BlockInterface[]
     */
    protected $body;

    public function __construct($filename = null, $namespace = null)
    {
        $this->filename = $filename;
        $this->namespace = $namespace;
        $this->uses = [];

        $this->body = [];
    }

    /**
     * @param BlockInterface $block
     */
    public function add(BlockInterface $block)
    {
        $this->body[] = $block;
    }

    /**
     * @return NamespaceBlock
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * @param NamespaceBlock $namespace
     *
     * @return $this
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;

        return $this;
    }

    /**
     * @param UseBlock $use
     *
     * @return $this
     */
    public function addUse(UseBlock $use)
    {
        $this->uses[] = $use;

        return $this;
    }

    /**
     * @return UseBlock[]
     */
    public function getUses()
    {
        return $this->uses;
    }

    /**
     * @param UseBlock[]|UseBlock $uses
     *
     * @return $this
     */
    public function setUses($uses)
    {
        if (false === is_array($uses)) {
            $this->uses = [$uses];
        } else {
            $this->uses = $uses;
        }

        return $this;
    }

    public function generate()
    {
        $tokens = [];

        /**
         * FileBlock header
         */
        $tokens = array_merge(
            $tokens,
            $this->generateHeader()
        );

        /**
         * FileBlock namespace
         */
        $tokens = array_merge(
            $tokens,
            $this->generateNamespace()
        );

        /**
         * FileBlock uses
         */
        $tokens = array_merge(
            $tokens,
            $this->generateUses()
        );

        /**
         * FileBlock body
         */
        $tokens = array_merge(
            $tokens,
            $this->generateBody()
        );

        return $tokens;
    }

    protected function generateHeader()
    {
        return [
            new OpenTagToken(),
            new NewLineToken()
        ];
    }

    protected function generateNamespace()
    {
        $tokens = [];

        if ($this->namespace) {
            $tokens   = $this->namespace->generate();
            $tokens[] = new NewLineToken();
            $tokens[] = new NewLineToken();
        }

        return $tokens;
    }

    protected function generateUses()
    {
        $tokens = [];

        foreach ($this->uses as $use) {
            $tokens = array_merge($tokens, $use->generate());
            $tokens[] = new NewLineToken();
        }

        if (count($this->uses) > 0) {
            $tokens[] = new NewLineToken();
        }

        return $tokens;
    }

    protected function generateBody()
    {
        $tokens = [];

        foreach ($this->body as $block) {
            $tokens = array_merge(
                $tokens,
                $block->generate()
            );
        }

        return $tokens;
    }
}
