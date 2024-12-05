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
 * A subscription which allows a user to access media including audio, video,
 * books, etc.
 *
 * @see https://schema.org/MediaSubscription
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MediaSubscription extends Intangible
{
    public static function factory(): MediaSubscription
    {
        return new MediaSubscription('https://schema.org/', 'MediaSubscription');
    }

    /**
     * An Offer which must be accepted before the user can perform the Action. For
     * example, the user may need to buy a movie before being able to watch it.
     *
     * @param $expectsAcceptanceOf \LengthOfRope\JSONLD\Schema\Offer
     * @return static
     **/
    public function setExpectsAcceptanceOf($expectsAcceptanceOf): static {
        $this->properties['expectsAcceptanceOf'] = $expectsAcceptanceOf;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Offer
     **/
    public function getExpectsAcceptanceOf() {
        return $this->properties['expectsAcceptanceOf'];
    }
    /**
     * The Organization responsible for authenticating the user's subscription. For
     * example, many media apps require a cable/satellite provider to authenticate your
     * subscription before playing media.
     *
     * @param $authenticator \LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setAuthenticator($authenticator): static {
        $this->properties['authenticator'] = $authenticator;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getAuthenticator() {
        return $this->properties['authenticator'];
    }
}
