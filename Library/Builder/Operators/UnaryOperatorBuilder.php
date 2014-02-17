<?php

/*
 +--------------------------------------------------------------------------+
 | Zephir Language                                                          |
 +--------------------------------------------------------------------------+
 | Copyright (c) 2013-2014 Zephir Team and contributors                     |
 +--------------------------------------------------------------------------+
 | This source file is subject the MIT license, that is bundled with        |
 | this package in the file LICENSE, and is available through the           |
 | world-wide-web at the following url:                                     |
 | http://zephir-lang.com/license.html                                      |
 |                                                                          |
 | If you did not receive a copy of the MIT license and are unable          |
 | to obtain it through the world-wide-web, please send a note to           |
 | license@zephir-lang.com so we can mail you a copy immediately.           |
 +--------------------------------------------------------------------------+
*/

namespace Zephir\Builder\Operators;

/**
 * UnaryOperatorBuilder
 *
 * Allows to manually build a unary operator AST node
 */
class UnaryOperatorBuilder
{

    protected $operator;

    protected $file;

    protected $line;

    protected $char;

    public function __construct($operator, $rightExpression, $file = null, $line = 0, $char = 0)
    {
        $this->operator = $operator;
        $this->rightExpression = $rightExpression;
        $this->file = $file;
        $this->line = $line;
        $this->char = $char;
    }

    public function get()
    {
        return array(
            'type'       => $this->operator,
            'right'      => $this->rightExpression->get(),
            'file'       => $this->file,
            'line'       => $this->line,
            'char'       => $this->char
        );
    }
}
