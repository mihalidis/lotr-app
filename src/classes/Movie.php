<?php
include "BudgetException.php";
class Movie
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
        if(is_numeric($budgetInMillions)) {
            $this->budgetInMillions = $budgetInMillions;
        } else {
            throw new budgetException("Budget has to be numeric");
        }

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