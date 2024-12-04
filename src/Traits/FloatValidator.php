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

trait FloatValidator
{
    private ?float $value = null;

    /**
     * setValue
     *
     * @param $value
     * @return static
     **/
    public function setValue(float $value): static
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
        if (!is_float($this->value)) {
            return false;
        }

        return true;
    }

    /**
     * getValue
     *
     * @return bool
     **/
    public function getValue(): bool
    {
        if (!$this->validate()) {
            throw new TypeError(sprintf(
                'Expected a float, got %s instead.',
                is_object($this->value) ? get_class($this->value) : gettype($this->value)
            ));
        }

        return $this->value;
    }
}