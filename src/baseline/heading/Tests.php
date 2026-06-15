<?php

namespace AndreaPeverelli\PhxUi\baseline\heading;

use AndreaPeverelli\PhxUi\baseline\Heading;
use AndreaPeverelli\PhxCore\Render;

final class Tests
{
	final private function __construct() {}

	final public static function run(): void
	{
		echo "Divisor:\n";

		$heading = (new Heading(new HeadingProps(
			level: HeadingLevel::H1,
			content: "H1 Test",
		)))->render();

		$expect = new Render(
			html: <<<HTML
			<h1>H1 Test</h1>
			HTML,
		);

		if($heading == $expect) {
			echo "Default - \033[92mPass\033[0m\n";
			return;
		}

		echo "Default - \033[91mFail\033[0m\n";
		return;
	}
}
