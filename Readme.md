# PHP Template Renderer
This is a very basic template renderer that uses PHP as a template engine.

## Examples
The usage is straightforward

```php
$renderer = new PhpTemplateRenderer(
	new PerFileTemplateNameMapper('templates', 'php')
);

$pageData = ['some data'];
$renderedContent = $renderer->render('page', $pageData);
```
