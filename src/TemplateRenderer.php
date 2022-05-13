<?php

namespace Walnut\Lib\TemplateRenderer;

interface TemplateRenderer {
	public function canRenderTemplate(string $templateName): bool;
	/**
	 * @param string $templateName
	 * @param mixed $viewModel
	 * @return string
	 */
	public function render(string $templateName, mixed $viewModel = null): string;
}
