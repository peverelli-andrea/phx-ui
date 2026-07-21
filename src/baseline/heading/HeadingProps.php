<?php

namespace AndreaPeverelli\PhxUi\baseline\heading;

use AndreaPeverelli\PhxCore\CommonProps;
use AndreaPeverelli\PhxCore\ColorScheme;
use AndreaPeverelli\PhxCore\Typo;
use AndreaPeverelli\PhxCore\TypoRole;
use AndreaPeverelli\PhxCore\TypoSubRole;

final class HeadingProps
{
	final public function __construct(
		public ?CommonProps $common_props = null,
		public HeadingLevel $level = HeadingLevel::H1,
		public ?Typo $typo = null,
		public ColorScheme $color = ColorScheme::ON_SURFACE,
		public string $content = "",
	)
	{
		if ($common_props === null) {
			$this->common_props = new CommonProps();
		}

		if ($typo === null) {
			$this->typo = new Typo(
				role: TypoRole::TITLE,
				sub_role: TypoSubRole::LARGE,
			);
		}
	}
}
