<?php

namespace System;

class Container
{
    protected array $instanceBindings = [];

    /**
     * Binds a value to a parameter in the prepared statement.
     *
     * @param string $key The parameter identifier (e.g., ':name').
     * @param mixed $value The value to bind to the parameter.
     * @return mixed Returns true on success or false on failure.
     */
    public function bind($key, $resolver)
    {
        $this->instanceBindings[$key] = $resolver;
    }

    /**
     * Resolves the given value or closure.
     *
     * If the provided value is a closure|method|function, it will be executed and 
     * its result returned. Otherwise, the value itself is returned.
     *
     * @param mixed $value The value or closure to resolve.
     * @return mixed The resolved value.
     */
    public function resolve($key)
    {
        if (!array_key_exists($key, $this->instanceBindings)) {
            throw new \Exception("No entry found for '{$key}' in the container.");
        }
        
        $resolver = $this->instanceBindings[$key];

        return call_user_func($resolver);
    }
}