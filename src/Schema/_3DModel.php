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
 * A 3D model represents some kind of 3D content, which may have [[encoding]]s in
 * one or more [[MediaObject]]s. Many 3D formats are available (e.g. see
 * [Wikipedia](https://en.wikipedia.org/wiki/Category:3D_graphics_file_formats));
 * specific encoding formats can be represented using the [[encodingFormat]]
 * property applied to the relevant [[MediaObject]]. For the
 * * case of a single file published after Zip compression, the convention of
 * appending '+zip' to the [[encodingFormat]] can be used. Geospatial, AR/VR,
 * artistic/animation, gaming, engineering and scientific content can all be
 * represented using [[3DModel]].
 *
 * @see https://schema.org/3DModel
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class _3DModel extends MediaObject
{
    public static function factory(): _3DModel
    {
        return new _3DModel('https://schema.org/', '3DModel');
    }

    /**
     * Whether the 3DModel allows resizing. For example, room layout applications often
     * do not allow 3DModel elements to be resized to reflect reality.
     *
     * @param $isResizable 
     * @return static
     **/
    public function setIsResizable($isResizable): static {
        $this->properties['isResizable'] = $isResizable;

        return $this;
    }

    /**
     * @return 
     **/
    public function getIsResizable() {
        return $this->properties['isResizable'];
    }
}
