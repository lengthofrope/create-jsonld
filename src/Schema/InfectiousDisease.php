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
 * An infectious disease is a clinically evident human disease resulting from the
 * presence of pathogenic microbial agents, like pathogenic viruses, pathogenic
 * bacteria, fungi, protozoa, multicellular parasites, and prions. To be considered
 * an infectious disease, such pathogens are known to be able to cause this
 * disease.
 *
 * @see https://schema.org/InfectiousDisease
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class InfectiousDisease extends MedicalCondition
{
    public static function factory(): InfectiousDisease
    {
        return new InfectiousDisease('https://schema.org/', 'InfectiousDisease');
    }

    /**
     * The class of infectious agent (bacteria, prion, etc.) that causes the disease.
     *
     * @param $infectiousAgentClass 
     * @return static
     **/
    public function setInfectiousAgentClass($infectiousAgentClass): static {
        $this->properties['infectiousAgentClass'] = $infectiousAgentClass;

        return $this;
    }

    /**
     * @return 
     **/
    public function getInfectiousAgentClass() {
        return $this->properties['infectiousAgentClass'];
    }
    /**
     * How the disease spreads, either as a route or vector, for example 'direct
     * contact', 'Aedes aegypti', etc.
     *
     * @param $transmissionMethod 
     * @return static
     **/
    public function setTransmissionMethod($transmissionMethod): static {
        $this->properties['transmissionMethod'] = $transmissionMethod;

        return $this;
    }

    /**
     * @return 
     **/
    public function getTransmissionMethod() {
        return $this->properties['transmissionMethod'];
    }
    /**
     * The actual infectious agent, such as a specific bacterium.
     *
     * @param $infectiousAgent 
     * @return static
     **/
    public function setInfectiousAgent($infectiousAgent): static {
        $this->properties['infectiousAgent'] = $infectiousAgent;

        return $this;
    }

    /**
     * @return 
     **/
    public function getInfectiousAgent() {
        return $this->properties['infectiousAgent'];
    }
}
