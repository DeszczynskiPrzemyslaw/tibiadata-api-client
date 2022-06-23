<?php

namespace TibiaDataApi\Contents;

use TibiaDataApi\TibiaDataApiException;

abstract class Content
{
    public function __construct($data)
    {
        if (is_string($data)) {
            throw new TibiaDataApiException('Too many requests.');
        } else {
            foreach ($data as $field => $value) {
                $this->{$field} = $value;
            }
        }

        $this->setup();
    }


    protected function setup(): void
    {
        // override me
    }

    protected function cast($field, $class): void
    {
        if ($this->$field) {
            $this->$field = new $class($this->$field);
        }
    }

    protected function castArray($field, $class): void
    {
        if (is_array($this->$field)) foreach ($this->$field as $k => $v) {
            if ($this->$field[$k]) {
                $this->$field[$k] = new $class($this->$field[$k]);
            }
        }
    }
}
