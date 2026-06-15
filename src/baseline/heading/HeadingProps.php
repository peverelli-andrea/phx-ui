<?php

namespace AndreaPeverelli\PhxUi\baseline\heading;

use AndreaPeverelli\PhxCore\CommonProps;

final class HeadingProps
{
	final public function __construct(
		public ?CommonProps $common_props = null,
		public HeadingLevel $level = HeadingLevel::H1,
		public string $content = "",
	)
	{
		if ($common_props === null) {
			$common_props = new CommonProps();
		}
	}
}
