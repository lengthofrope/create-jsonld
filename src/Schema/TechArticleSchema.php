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
 * A technical article - Example: How-to (task) topics, step-by-step, procedural troubleshooting, specifications, etc.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class TechArticleSchema extends ArticleSchema
{
    public static function factory(): TechArticleSchema
    {
        return new TechArticleSchema('https://schema.org/', 'TechArticle');
    }

    /**
     * Proficiency needed for this content; expected values: 'Beginner', 'Expert'.
     *
     * @param $proficiencyLevel 
     * @return static
     **/
    public function setProficiencyLevel($proficiencyLevel): static {
        $this->properties['proficiencyLevel'] = $proficiencyLevel;

        return $this;
    }

    /**
     * @return 
     **/
    public function getProficiencyLevel() {
        return $this->properties['proficiencyLevel'];
    }

    /**
     * Prerequisites needed to fulfill steps in article.
     *
     * @param $dependencies 
     * @return static
     **/
    public function setDependencies($dependencies): static {
        $this->properties['dependencies'] = $dependencies;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDependencies() {
        return $this->properties['dependencies'];
    }


}
