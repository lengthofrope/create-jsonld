<?php

/*
 * The MIT License
 *
 * Copyright 2016 LengthOfRope, Bas de Kort <bdekort@gmail.com>.
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
 * The ConstraintNode type is provided to support usecases in which a node in a structured data graph is described with properties which appear to describe a single entity, but are being used in a situation where they serve a more abstract purpose. A [[ConstraintNode]] can be described using [[constraintProperty]] and [[numConstraints]]. These constraint properties can serve a
 *     variety of purposes, and their values may sometimes be understood to indicate sets of possible values rather than single, exact and specific values.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ConstraintNodeSchema extends IntangibleSchema
{
    public static function factory()
    {
        return new ConstraintNodeSchema('https://schema.org/', 'ConstraintNode');
    }

    /**
     * Indicates the number of constraints property values defined for a particular [[ConstraintNode]] such as [[StatisticalVariable]]. This helps applications understand if they have access to a sufficiently complete description of a [[StatisticalVariable]] or other construct that is defined using properties on template-style nodes.
     *
     * @param $numConstraints 
     **/
    public function setNumConstraints($numConstraints) {
        $this->properties['numConstraints'] = $numConstraints;

        return $this;
    }

    /**
     * @return 
     **/
    public function getNumConstraints() {
        return $this->properties['numConstraints'];
    }

    /**
     * Indicates a property used as a constraint. For example, in the definition of a [[StatisticalVariable]]. The value is a property, either from within Schema.org or from other compatible (e.g. RDF) systems such as DataCommons.org or Wikidata.org. 
     *
     * @param $constraintProperty |
     **/
    public function setConstraintProperty($constraintProperty) {
        $this->properties['constraintProperty'] = $constraintProperty;

        return $this;
    }

    /**
     * @return |
     **/
    public function getConstraintProperty() {
        return $this->properties['constraintProperty'];
    }


}
