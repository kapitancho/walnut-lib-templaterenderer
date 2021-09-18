<?php

namespace Walnut\Lib\TemplateRenderer;

interface TemplateNameMapper {
	public function fileNameFor(string $key): string;
}