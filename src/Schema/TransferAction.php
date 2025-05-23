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
 * The act of transferring/moving (abstract or concrete) animate or inanimate
 * objects from one place to another.
 *
 * @see https://schema.org/TransferAction
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class TransferAction extends Action
{
    public static function factory(): TransferAction
    {
        return new TransferAction('https://schema.org/', 'TransferAction');
    }

    /**
     * A sub property of location. The final location of the object or the agent after
     * the action.
     *
     * @param $toLocation \LengthOfRope\JSONLD\Schema\Place
     * @return static
     **/
    public function setToLocation($toLocation): static {
        $this->properties['toLocation'] = $toLocation;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Place
     **/
    public function getToLocation() {
        return $this->properties['toLocation'];
    }
    /**
     * A sub property of location. The original location of the object or the agent
     * before the action.
     *
     * @param $fromLocation \LengthOfRope\JSONLD\Schema\Place
     * @return static
     **/
    public function setFromLocation($fromLocation): static {
        $this->properties['fromLocation'] = $fromLocation;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Place
     **/
    public function getFromLocation() {
        return $this->properties['fromLocation'];
    }
}
