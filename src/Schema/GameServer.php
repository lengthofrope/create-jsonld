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
 * Server that provides game interaction in a multiplayer game.
 *
 * @see https://schema.org/GameServer
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class GameServer extends Intangible
{
    public static function factory(): GameServer
    {
        return new GameServer('https://schema.org/', 'GameServer');
    }

    /**
     * Number of players on the server.
     *
     * @param $playersOnline \LengthOfRope\JSONLD\DataType\TypeInteger
     * @return static
     **/
    public function setPlayersOnline($playersOnline): static {
        $this->properties['playersOnline'] = $playersOnline;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeInteger
     **/
    public function getPlayersOnline() {
        return $this->properties['playersOnline'];
    }
    /**
     * Video game which is played on this server.
     *
     * @param $game \LengthOfRope\JSONLD\Schema\VideoGame
     * @return static
     **/
    public function setGame($game): static {
        $this->properties['game'] = $game;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\VideoGame
     **/
    public function getGame() {
        return $this->properties['game'];
    }
    /**
     * Status of a game server.
     *
     * @param $serverStatus \LengthOfRope\JSONLD\Schema\GameServerStatus
     * @return static
     **/
    public function setServerStatus($serverStatus): static {
        $this->properties['serverStatus'] = $serverStatus;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\GameServerStatus
     **/
    public function getServerStatus() {
        return $this->properties['serverStatus'];
    }
}
