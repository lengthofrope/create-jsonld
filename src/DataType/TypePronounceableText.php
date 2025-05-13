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

namespace LengthOfRope\JSONLD\DataType;

use LengthOfRope\JSONLD\Interfaces\IValidator;
use LengthOfRope\JSONLD\Traits;

/**
 * Data type: PronounceableText.
 *
 * @see https://schema.org/PronounceableText
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class TypePronounceableText extends TypeText implements IValidator
{
    use Traits\PronounceableTextValidator;

    public static function factory(): TypePronounceableText
    {
        return new TypePronounceableText('https://schema.org/', 'PronounceableText');
    }

    /**
     * Text value being annotated.
     *
     * @param $textValue 
     * @return static
     **/
    public function setTextValue($textValue): static {
        $this->properties['textValue'] = $textValue;

        return $this;
    }

    /**
     * @return 
     **/
    public function getTextValue() {
        return $this->properties['textValue'];
    }
    /**
     * The language of the content or performance or used in an action. Please use one
     * of the language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     *
     * @param $inLanguage |
     * @return static
     **/
    public function setInLanguage($inLanguage): static {
        $this->properties['inLanguage'] = $inLanguage;

        return $this;
    }

    /**
     * @return |
     **/
    public function getInLanguage() {
        return $this->properties['inLanguage'];
    }
    /**
     * Representation of a text [[textValue]] using the specified
     * [[speechToTextMarkup]]. For example the city name of Houston in IPA:
     * /ˈhjuːstən/.
     *
     * @param $phoneticText 
     * @return static
     **/
    public function setPhoneticText($phoneticText): static {
        $this->properties['phoneticText'] = $phoneticText;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPhoneticText() {
        return $this->properties['phoneticText'];
    }
    /**
     * Form of markup used. eg. [SSML](https://www.w3.org/TR/speech-synthesis11) or
     * [IPA](https://www.wikidata.org/wiki/Property:P898).
     *
     * @param $speechToTextMarkup 
     * @return static
     **/
    public function setSpeechToTextMarkup($speechToTextMarkup): static {
        $this->properties['speechToTextMarkup'] = $speechToTextMarkup;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSpeechToTextMarkup() {
        return $this->properties['speechToTextMarkup'];
    }

    /**
     * Retrieve the elements (and all childrens) as an array
     *
     * @return array
     */
    public function getDataArray()
    {
        $arr = parent::getDataArray();

        $arr['@value'] = $this->getValue();

        return $arr;
    }
}
