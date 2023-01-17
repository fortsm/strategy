<?php
class LowQuack implements QuackInterface
{
    public function quack()
    {
        echo "I quack quietly\r\n";
    }
}