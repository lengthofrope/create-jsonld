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
 * The act of editing a recipient by replacing an old object with a new object.
 *
 * @see https://schema.org/ReplaceAction
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ReplaceAction extends UpdateAction
{
    public static function factory(): ReplaceAction
    {
        return new ReplaceAction('https://schema.org/', 'ReplaceAction');
    }

    /**
     * A sub property of object. The object that replaces.
     *
     * @param $replacer 
     * @return static
     **/
    public function setReplacer($replacer): static {
        $this->properties['replacer'] = $replacer;

        return $this;
    }

    /**
     * @return 
     **/
    public function getReplacer() {
        return $this->properties['replacer'];
    }
    /**
     * A sub property of object. The object that is being replaced.
     *
     * @param $replacee 
     * @return static
     **/
    public function setReplacee($replacee): static {
        $this->properties['replacee'] = $replacee;

        return $this;
    }

    /**
     * @return 
     **/
    public function getReplacee() {
        return $this->properties['replacee'];
    }
}
