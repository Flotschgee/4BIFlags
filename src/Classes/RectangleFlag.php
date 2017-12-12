<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 05.12.2017
 * Time: 08:59
 */

namespace HTL3R\Flags\FlagTypes;

use HTL3R\Flagstore\Interfaces as FlagInt;

class RectangleFlag extends Flag implements FlagInterface {


    public function getArea() : float{
        return $this->width * $this->height;
    }
}