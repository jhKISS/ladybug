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

class ContainerType extends BaseType
{
    const TYPE_ID = 'container';

    public function load($var, $level = 1)
    {

    }

    public function setData($data)
    {
        $data->setLevel($this->level + 1);

        parent::setData($data);
    }

}
