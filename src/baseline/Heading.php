<?php

namespace AndreaPeverelli\PhxUi\baseline;

use AndreaPeverelli\PhxCore\Component;
use AndreaPeverelli\PhxCore\Render;
use AndreaPeverelli\PhxUi\baseline\heading\HeadingProps;

final class Heading extends Component
{
	final public function __construct(?HeadingProps $props = null)
	{
		$this->props = $props ?? new HeadingProps();
	}

	final public function render(): Render
	{
		$heading_level = $this->props->level->value;
		$content = $this->props->content;
		
		return new Render(
			html: <<<HTML
			<$heading_level>$content</$heading_level>
			HTML,
		);
	}
}
