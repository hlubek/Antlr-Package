<?php
namespace Antlr\Runtime\Tree;

class TreePattern extends CommonTree
{

    public $label;
    public $hasTextArg;

    public function __construct(Token $payload)
    {
        parent::__construct(null, $token);
    }

    public function toString()
    {
        if ($this->label != null) {
            return "%" + $this->label + ":" + parent::toString();
        } else {
            return parent::toString();
        }
    }

}