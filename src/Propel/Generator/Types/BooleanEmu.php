<?php

namespace Propel\Generator\Types;

class BooleanEmu extends PropelType {
    public static $name = 'BOOLEAN_EMU';
    public static $phpType = 'boolean';
    public static $pdoType = \PDO::PARAM_BOOL;

    /**
     * Returns whether or not the type is a boolean type.
     *
     * @return boolean
     */
    public static function isBooleanType() {
        return true;
    }

}
