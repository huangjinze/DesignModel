<?php
/**
 * Created by PhpStorm.
 * User: huang
 * Date: 2017/7/1
 * Time: 17:44
 */

namespace App;
use App\IGiveGift;

class Proxy implements IGiveGift
{
    protected $gg;
    function __construct(Person $mm)
    {
        $this->gg = new Pursuit($mm);
    }

    public function giveDolls()
    {
        $this->gg->giveDolls();
    }

    public function giveFlowers()
    {
        $this->gg->giveFlowers();
    }

    public function giveChocolate()
    {
        $this->gg->giveChocolate();
    }

}