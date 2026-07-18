<?php

namespace AndreaPeverelli\PhxUi\baseline;

use AndreaPeverelli\PhxCore\Component;
use AndreaPeverelli\PhxCore\Render;
use AndreaPeverelli\PhxCore\ColorMode;
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
		$props = $this->getProps();

		$this->useFont(typo: $props->typo);
		$this->useColor(color: $props->color, mode: ColorMode::COLOR);
		
		return $this->build(
			html: <<<HTML
			<@level()@attributes()>@content()</@level()>
			HTML,
		);
	}
}
