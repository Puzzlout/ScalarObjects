<?php

/**
 * Interface IBoolean provides the methods for boolean value manipulations.
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/Puzzlout/Objects
 * @since Version 1.0.0
 * @package IBoolean
 */

namespace Puzzlout\Objects\Interfaces;

use Puzzlout\Objects\Types\Boolean;

interface IBoolean {

    /**
     * Get the value of the instance of a class.
     */
    public function Equals(Boolean $value);
}
