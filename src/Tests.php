<?php

namespace AndreaPeverelli\PhxUi;

require_once("../vendor/autoload.php");

use AndreaPeverelli\PhxUi\baseline\Tests as BaselineTests;

echo "#####################\n";
echo "# PHX-UI UNIT TESTS #\n";
echo "#####################\n";
echo "\n";

BaselineTests::run();
