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
 * The act of conveying information to another person via a communication medium (instrument) such as speech, email, or telephone conversation.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class CommunicateAction extends InteractAction
{
    public static function factory(): CommunicateAction
    {
        return new CommunicateAction('https://schema.org/', 'CommunicateAction');
    }

    /**
     * A sub property of instrument. The language used on this action.
     *
     * @param $language 
     * @return static
     **/
    public function setLanguage($language): static {
        $this->properties['language'] = $language;

        return $this;
    }

    /**
     * @return 
     **/
    public function getLanguage() {
        return $this->properties['language'];
    }

    /**
     * A sub property of participant. The participant who is at the receiving end of the action.
     *
     * @param $recipient |||
     * @return static
     **/
    public function setRecipient($recipient): static {
        $this->properties['recipient'] = $recipient;

        return $this;
    }

    /**
     * @return |||
     **/
    public function getRecipient() {
        return $this->properties['recipient'];
    }

    /**
     * The subject matter of the content.
     *
     * @param $about 
     * @return static
     **/
    public function setAbout($about): static {
        $this->properties['about'] = $about;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAbout() {
        return $this->properties['about'];
    }

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
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


}