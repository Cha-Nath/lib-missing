<?php

namespace nlib\Missing\Interfaces;

interface MissingTraitInterface {
    
    /**
     *
     * @param array $keys
     * @param array $array
     * @return boolean
     */
    public function is_missing(array $keys, array $array) : bool;

    /**
     *
     * @return array
     */    
    public function getMissings() : array;

    /**
     *
     * @return string
     */
    public function getThrow() : string;

    /**
     *
     * @param [type] $missing
     * @return self
     */
    public function addMissing($missing);

    /**
     *
     * @param array $missings
     * @return self
     */
    public function setMissings(array $missings);

    /**
     *
     * @param string $throw
     * @return self
     */
    public function setThrow(string $throw);
}