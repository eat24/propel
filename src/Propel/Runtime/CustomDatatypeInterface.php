<?php

namespace Propel\Runtime;

/**
 * Interface CustomDataTypeInterface
 * @package Propel\Runtime
 *
 * A custom data type allows you to define custom serialization and deserialization
 * in Propel, allowing you to have fine grained control over exactly what is
 * going into your setters, how they get to the database, and how data flows from
 * the database to column getters.
 * Custom data types give you a simple strategy to extend propel to support
 * data types such as Postgres json, hstore throughout your stack.
 */
interface CustomDataTypeInterface {
    /**
     * @param $instance - An instance of your custom type
     * @return mixed
     */
    public static function __serializeToDatabase($instance);

    /**
     * @param $data - The database representation of your objet
     * @return mixed
     */
    public static function __deserializeFromDatabase($data);

    /**
     * The PDO type to bind your __serializeToDatabase value as
     * http://php.net/manual/en/pdo.constants.php
     * @return integer - a PDO::PARAM_* constant
     */
    public static function __getPdoType();

    public static function __serializeFilterBy($data = null, $comparison = null);
}
