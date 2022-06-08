<?php

namespace TibiaDataApi\Contents;

abstract class Content
{
    public function __construct($data)
    {
        foreach ($data as $field => $value) {
            $this->{$field} = $value;
        }

        $this->setup();
    }


    protected function setup(): void
    {
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