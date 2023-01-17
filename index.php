<?php

/**
*    Design patterns / Behavioral patterns / Strategy
*    Паттерны проектирования / Поведенческие паттерны / Стратегия
*/

include("FlyInterface.php");
include("QuackInterface.php");
include("FlyWithWings.php");
include("FlyWithoutWings.php");
include("Duck.php");
include("RedHeadDuck.php");
include("HighQuack.php");
include("LowQuack.php");

$red_head_duck = new RedHeadDuck();
$red_head_duck->fly();
$red_head_duck->quack();