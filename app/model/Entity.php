<?php

namespace Casopisy;

/**
 * Description of Entity
 *
 * @author Jakub Vrána
 */
class Entity extends \Nette\Object implements \IteratorAggregate, \ArrayAccess {

    private $data;

    public function __construct($data) {
        $this->data = (array)$data;
    }

    public function getData() {
        return $this->data;
    }

    public function __set($key, $value) {
        $this->data[$key] = $value;
    }

    public function &__get($key) {
        if (array_key_exists($key, $this->data)) {
            return $this->data[$key];
        }

        return parent::__get($key);
    }

    public function getIterator() {
        return new \ArrayIterator($this->data);
    }

    /**
     * Stores value in column.
     * @param  string column name
     * @param  string value
     * @return void
     */
    public function offsetSet($key, $value) {
        $this->__set($key, $value);
    }

    /**
     * Returns value of column.
     * @param  string column name
     * @return string
     */
    public function offsetGet($key) {
        return $this->__get($key);
    }

    /**
     * Tests if column exists.
     * @param  string column name
     * @return bool
     */
    public function offsetExists($key) {
        return $this->__isset($key);
    }

    /**
     * Removes column from data.
     * @param  string column name
     * @return void
     */
    public function offsetUnset($key) {
        $this->__unset($key);
    }

}
