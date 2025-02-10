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
 * A program with both an educational and employment component. Typically based at
 * a workplace and structured around work-based learning, with the aim of
 * instilling competencies related to an occupation. WorkBasedProgram is used to
 * distinguish programs such as apprenticeships from school, college or other
 * classroom based educational programs.
 *
 * @see https://schema.org/WorkBasedProgram
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class WorkBasedProgram extends EducationalOccupationalProgram
{
    public static function factory(): WorkBasedProgram
    {
        return new WorkBasedProgram('https://schema.org/', 'WorkBasedProgram');
    }

    /**
     * The estimated salary earned while in the program.
     *
     * @param $trainingSalary \LengthOfRope\JSONLD\Schema\MonetaryAmountDistribution
     * @return static
     **/
    public function setTrainingSalary($trainingSalary): static {
        $this->properties['trainingSalary'] = $trainingSalary;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MonetaryAmountDistribution
     **/
    public function getTrainingSalary() {
        return $this->properties['trainingSalary'];
    }
    /**
     * A category describing the job, preferably using a term from a taxonomy such as
     * [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html),
     * [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or
     * similar, with the property repeated for each applicable value. Ideally the
     * taxonomy should be identified, and both the textual label and formal code for
     * the category should be provided.
     *
     * Note: for historical reasons, any textual label and formal code provided as a
     * literal may be assumed to be from O*NET-SOC.
     *
     * @param $occupationalCategory \LengthOfRope\JSONLD\Schema\CategoryCode|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setOccupationalCategory($occupationalCategory): static {
        $this->properties['occupationalCategory'] = $occupationalCategory;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CategoryCode|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getOccupationalCategory() {
        return $this->properties['occupationalCategory'];
    }
}
