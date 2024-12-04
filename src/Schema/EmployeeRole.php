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
 * A subclass of OrganizationRole used to describe employee relationships.
 *
 * @see https://schema.org/EmployeeRole
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class EmployeeRole extends OrganizationRole
{
    public static function factory(): EmployeeRole
    {
        return new EmployeeRole('https://schema.org/', 'EmployeeRole');
    }

    /**
     * The currency (coded using [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217))
     * used for the main salary information in this job posting or for this employee.
     *
     * @param $salaryCurrency 
     * @return static
     **/
    public function setSalaryCurrency($salaryCurrency): static {
        $this->properties['salaryCurrency'] = $salaryCurrency;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSalaryCurrency() {
        return $this->properties['salaryCurrency'];
    }
    /**
     * The base salary of the job or of an employee in an EmployeeRole.
     *
     * @param $baseSalary ||
     * @return static
     **/
    public function setBaseSalary($baseSalary): static {
        $this->properties['baseSalary'] = $baseSalary;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getBaseSalary() {
        return $this->properties['baseSalary'];
    }
}
