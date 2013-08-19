<?php

/*
 * This file is part of the Ladybug package.
 *
 * (c) Raul Fraile <raulfraile@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladybug\Type\Extended;

use Ladybug\Type\RenderizableTypeInterface;

abstract class BaseType implements ExtendedTypeInterface, RenderizableTypeInterface
{

    const TYPE_ID = 'base';

    protected $id;

    protected $key;

    protected $data;

    protected $level;

    protected $title;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->id = uniqid('ext_' . static::TYPE_ID . '_');
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getParameters()
    {
        return array(
            'var' => $this
        );
    }

    public function setKey($key)
    {
        $this->key = $key;
    }

    public function getKey()
    {
        return $this->key;
    }

    public function getTemplateName()
    {
        return static::TYPE_ID;
    }

    public function setLevel($level)
    {
        $this->level = $level;
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function isComposed()
    {
        return false;
    }

    public function __clone()
    {
        $this->id = uniqid('ext_' . static::TYPE_ID . '_');
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getInlineValue()
    {
        return null;
    }

    public function getType()
    {
        return static::TYPE_ID;
    }

}
