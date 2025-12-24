<?php 

abstract class Rencontre{
    protected string $phase;
    
    abstract public function flipCoin();

    abstract public function calculDuree();
}