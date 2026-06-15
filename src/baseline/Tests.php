<?php

namespace AndreaPeverelli\PhxUi\baseline;

use AndreaPeverelli\PhxUi\baseline\heading\Tests as HeadingTests;

final class Tests
{
	final private function __construct() {}

	final public static function run(): void
	{
		echo "--------------------------------\n";
		echo "# Baseline components unit tests\n";
		echo "--------------------------------\n";
		echo "\n";

		HeadingTests::run();
	}
}
