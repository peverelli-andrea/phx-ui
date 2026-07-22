<?php

namespace AndreaPeverelli\PhxUi\baseline\heading;

use AndreaPeverelli\PhxUi\Baseline\Heading;
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

		$heading = new Heading();
		$heading->registerProps(new HeadingProps(
			common_props: new CommonProps(id: $id),
			level: HeadingLevel::H1,
			content: "H1 Test",
		));
		$got = $heading->render();

		$expect = new Render(
			html: <<<HTML
			<h1 id="$id" class="phx_proportional_not_emphasized_title_large phx_on_surface_color">H1 Test</h1>
			HTML,
			classes: [
				"phx_proportional_not_emphasized_title_large",
				"phx_on_surface_color",
			],
			css: [
				<<<CSS
				@font-face {
					font-family: Google Sans;
					src: url(/asssets/fonts/google-sans-medium.woff2) format(woff2),url(/assets/fonts/google-sans-medium.woff) format(woff);
				}
				CSS,
				<<<CSS
				.phx_proportional_not_emphasized_title_large {
					font-family: Google Sans;
					font-weight: 400;
					line-height: 28px;
					font-size: 22px;
					letter-spacing: 0;
				}
				CSS,
				<<<CSS
				.phx_on_surface_color {
					color: #1D1B20;
				}

				@media (prefers-contrast: more) {
					.phx_on_surface_color {
						color: #000000;
					}
				}

				@media (prefers-color-scheme: dark) {
					.phx_on_surface_color {
						color: #E6E0E9;
					}
				}

				@media (prefers-color-scheme: dark) and (prefers-contrast: more) {
					.phx_on_surface_color {
						color: #FFFFFF;
					}
				}
				CSS,
			],
		);

		TestSuite::test(got: $got, expect: $expect);
	}
}
