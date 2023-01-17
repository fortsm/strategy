<?php
class RedHeadDuck extends Duck
{
    public function __construct() {
//        $this->setFly(new FlyWithWings());
        $this->setFly(new FlyWithoutWings());

//        $this->setQuack(new HighQuack());
        $this->setQuack(new LowQuack());
    }
}