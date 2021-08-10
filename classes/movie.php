<?php

class movie
{
    private $name;
    private $budgetInMillions;
    private $academyAwardNominations;
    private $academyAwardWins;
    private $rottenTomatoesScore;

    public function getName() {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getBudgetInMillions()
    {
        return $this->budgetInMillions;
    }
    public function setBudgetInMillions($budgetInMillions)
    {
        $this->budgetInMillions = $budgetInMillions;
    }

    public function getAcademyAwardNominations()
    {
        return $this->academyAwardNominations;
    }
    public function setAcademyAwardNominations($academyAwardNominations)
    {
        $this->academyAwardNominations = $academyAwardNominations;
    }

    public function getAcademyAwardWins()
    {
        return $this->academyAwardWins;
    }
    public function setAcademyAwardWins($academyAwardWins)
    {
        $this->academyAwardWins = $academyAwardWins;
    }

    public function getRottenTomatoesScore()
    {
        return $this->rottenTomatoesScore;
    }
    public function setRottenTomatoesScore($rottenTomatoesScore)
    {
        $this->rottenTomatoesScore = $rottenTomatoesScore;
    }
}