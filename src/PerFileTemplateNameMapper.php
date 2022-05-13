<?php

namespace Walnut\Lib\TemplateRenderer;

final class PerFileTemplateNameMapper implements TemplateNameMapper {
	public function __construct(
		private readonly string $baseDir,
		private readonly string $fileExtension = 'php'
	) { }

	public function fileNameFor(string $key): string {
		return "$this->baseDir/$key.$this->fileExtension";
	}
}
