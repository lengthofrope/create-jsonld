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
 * A service provided by a government organization, e.g. food stamps, veterans benefits, etc.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class GovernmentServiceSchema extends ServiceSchema
{
    public static function factory(): GovernmentServiceSchema
    {
        return new GovernmentServiceSchema('https://schema.org/', 'GovernmentService');
    }

    /**
     * The operating organization, if different from the provider.  This enables the representation of services that are provided by an organization, but operated by another organization like a subcontractor.
     *
     * @param $serviceOperator 
     * @return static
     **/
    public function setServiceOperator($serviceOperator): static {
        $this->properties['serviceOperator'] = $serviceOperator;

        return $this;
    }

    /**
     * @return 
     **/
    public function getServiceOperator() {
        return $this->properties['serviceOperator'];
    }

    /**
     * Indicates a legal jurisdiction, e.g. of some legislation, or where some government service is based.
     *
     * @param $jurisdiction |
     * @return static
     **/
    public function setJurisdiction($jurisdiction): static {
        $this->properties['jurisdiction'] = $jurisdiction;

        return $this;
    }

    /**
     * @return |
     **/
    public function getJurisdiction() {
        return $this->properties['jurisdiction'];
    }


}
