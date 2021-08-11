<?php

class character
{
    const CHARACTER_RACE = [
        'Human','Elf','Hobbit','Dwarf','Maiar','Ent','Orcs','Dragon','Great Spiders','Black Uruk','Ainur','God','Men','Half-elven','Goblin','Orc','Balrogs'
    ];

    private $name;
    private $race;
    private $realm;

    public function setRace($race) {
        // const inside class called with self:: , it is work like $this
        if(in_array(explode(",",$race)[0], self::CHARACTER_RACE)) {
            $this->race = $race;
        }
    }

    public function getRace()
    {
        return $this->race;
    }

    public function  setRealm($realm) {
        if($realm == '' || $realm == NULL) {
            $this->realm = "Unknown";
        }else {
            $this->realm = $realm;
        }
    }

    public function getRealm()
    {
        return $this->realm;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}