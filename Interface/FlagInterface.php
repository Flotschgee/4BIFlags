<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 05.12.2017
 * Time: 09:03
 */

namespace HTL3R\Flagstore\Interfaces;

interface FlagInterface{
    /**
     * @return float
     */
    public function getArea() : float;

    public function __toString() : string;
}