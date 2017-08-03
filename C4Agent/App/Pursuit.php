<?php
/**
 * Created by PhpStorm.
 * User: huang
 * Date: 2017/7/1
 * Time: 16:40
 */

namespace App;

use App\IGiveGift;
class Pursuit implements IGiveGift
{
    protected $mm;
    function __construct(Person $mm)
    {
        $this->mm = $mm;
    }
    
    public function giveDolls()
    {
        fwrite(STDOUT, "{$this->mm->getName()} 送你洋娃娃");
    }
    
    public function giveFlowers()
    {
        fwrite(STDOUT,"{$this->mm->getName()} 送你鲜花");
    }
    
    public function giveChocolate()
    {
        fwrite(STDOUT,"{$this->mm->getName()} 送你巧克力");
    }
    
}