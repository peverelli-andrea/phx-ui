<?php

namespace AndreaPeverelli\PhxUi\baseline\heading;

use AndreaPeverelli\PhxUi\baseline\Heading;
use AndreaPeverelli\PhxCore\Render;
use AndreaPeverelli\PhxCore\CommonProps;
use AndreaPeverelli\PhxCore\TestSuite;

final class Tests
{
	final private function __construct() {}

	final public static function run(): void
	{
		TestSuite::init(test_name: "Divisor");

		$id = uniqid();

		$got = (new Heading(new HeadingProps(
			common_props: new CommonProps(id: $id),
			level: HeadingLevel::H1,
			content: "H1 Test",
		)))->render();

		$expect = new Render(
			html: <<<HTML
			<h1 id="$id">H1 Test</h1>
			HTML,
		);

		TestSuite::test(got: $got, expect: $expect);
	}
}
