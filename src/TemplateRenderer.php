<?php

namespace Walnut\Lib\TemplateRenderer;

interface TemplateRenderer {
	/**
	 * @param string $templateName
	 * @param mixed $viewModel
	 * @return string
	 */
	public function render(string $templateName, mixed $viewModel = null): string;
}
