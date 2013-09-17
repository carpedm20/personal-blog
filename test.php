<?
include 'app/includes/Markdown.php';
use \Michelf\Markdown;

$content = Markdown::defaultTransform(file_get_contents('test.md'));
print $content[0];
$lines = file('test.md', FILE_IGNORE_NEW_LINES);
print $lines[0];
//print $content;
//echo $content;
?>
