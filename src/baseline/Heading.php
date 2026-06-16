<?php

namespace AndreaPeverelli\PhxUi\baseline;

use AndreaPeverelli\PhxCore\Component;
use AndreaPeverelli\PhxCore\Render;
use AndreaPeverelli\PhxUi\baseline\heading\HeadingProps;

final class Heading extends Component
{
	final public function __construct(?HeadingProps $props = null)
	{
		if(!$props) $props = new HeadingProps();

		$this->registerComponent(props: $props);
	}

	final public function render(): Render
	{
		$heading_level = $this->props["default"]->level->value;
		$content = $this->props["default"]->content;

		$this->makeAttributes();
		$attributes = $this->attributes["default"];
		
		return new Render(
			html: <<<HTML
			<$heading_level$attributes>$content</$heading_level>
			HTML,
		);
	}
}
