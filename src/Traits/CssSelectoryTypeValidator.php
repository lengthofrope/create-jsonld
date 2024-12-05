<?php

/*
 * The MIT License
 *
 * Copyright 2024 LengthOfRope, Bas de Kort <bdekort@gmail.com>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 **/

namespace LengthOfRope\JSONLD\Traits;

use TypeError;

trait CssSelectoryTypeValidator
{
    private ?string $value = null;

    /**
     * setValue
     *
     * @param $value
     * @return static
     **/
    public function setValue(string $value): static
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Validate
     *
     * @return bool
     **/
    public function validate(): bool
    {
        // Validate if $this->value is formatted as a css selector
        if (!is_string($this->value)) {
            return false;
        }

        // Regular expression to validate CSS selectors
        $pattern = '/^[a-zA-Z0-9\-_#\.\s\[\]=\'":]+$/';

        if (!preg_match($pattern, $this->value)) {
            return false;
        }

        return true;
    }

    /**
     * getValue
     *
     * @return mixed
     **/
    public function getValue(): string
    {
        if (!$this->validate()) {
            throw new TypeError(sprintf(
                'Expected a css selector, got %s instead.',
                is_object($this->value) ? get_class($this->value) : gettype($this->value)
            ));
        }

        return $this->value;
    }
}
