<?php

namespace nlib\Missing\Exceptions;

use Exception;
use nlib\Missing\Traits\MissingTrait;

class MissingException extends Exception {

    use MissingTrait;

    public function __construct(array $missings, string $endpoint = __CLASS__) { $this->setMissings($missings)->setEndpoint($endpoint); }
}