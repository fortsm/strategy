<?php
class Duck
{
    private FlyInterface $flyBehavior;
    private QuackInterface $quackBehavior;
    public function setFly(FlyInterface $flyBehavior): void
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuack(QuackInterface $quackBehavior): void
    {
        $this->quackBehavior = $quackBehavior;
    }

    public function fly() {
        return $this->flyBehavior->fly();
    }

    public function quack() {
        return $this->quackBehavior->quack();
    }
}