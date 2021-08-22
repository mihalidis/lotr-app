<?php
namespace LotrApp\Classes;

class Quote
{
    private $dialog;
    private $movie;
    private $character;

    public function getDialog()
    {
        return $this->dialog;
    }

    public function setDialog($dialog)
    {
        $this->dialog = $dialog;
    }

    public function setMovie($quoteMovieID, $movies)
    {
        // quote's movie id
        $movieID = $quoteMovieID;
        // find quote's movie object placement in movies array with spesific quote's movieID
        $moviePlacementInArray = array_search($movieID, array_column($movies["docs"], '_id'));
        //Get movie name based on placement in Movies array
        $movieName = $movies["docs"][$moviePlacementInArray]['name'];

        $this->movie = $movieName;
    }

    public function getMovie()
    {
        return $this->movie;
    }

    public function setCharacter($quoteCharacterID, $characters)
    {
        $characterID = $quoteCharacterID;
        $characterPlacementInArray = array_search($characterID, array_column($characters["docs"], '_id'));
        $characterName = $characters["docs"][$characterPlacementInArray]['name'];

        $this->character = $characterName;
    }

    public function getCharacter()
    {
        return $this->character;
    }
}