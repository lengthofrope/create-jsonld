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

namespace LengthOfRope\JSONLD\Schema;

/**
 * The act of expressing a preference from a set of options or a large or unbounded
 * set of choices/options.
 *
 * @see https://schema.org/ChooseAction
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ChooseAction extends AssessAction
{
    public static function factory(): ChooseAction
    {
        return new ChooseAction('https://schema.org/', 'ChooseAction');
    }

    /**
     * A sub property of object. The options subject to this action.
     *
     * @param $option \LengthOfRope\JSONLD\Schema\Thing|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setOption($option): static {
        $this->properties['option'] = $option;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Thing|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getOption() {
        return $this->properties['option'];
    }
    /**
     * A sub property of object. The options subject to this action.
     *
     * @param $actionOption \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\Thing
     * @return static
     **/
    public function setActionOption($actionOption): static {
        $this->properties['actionOption'] = $actionOption;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\Thing
     **/
    public function getActionOption() {
        return $this->properties['actionOption'];
    }
}
