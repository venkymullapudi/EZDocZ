<?php
$doctype=$_POST['doctype'];
$docname=$_POST['docname'];

require_once 'PHPWORD/PHPWord.php';

$PHPWord = new PHPWord();

$section = $PHPWord->createSection();

$heading_1=$_POST['heading_1'];
$content_2=$_POST['content_2'];
$subheading_3=$_POST['subheading_3'];
$content_4=$_POST['content_4'];

$PHPWord->addFontStyle('rStyle', array('bold'=>true, 'italic'=>true, 'size'=>16));
$PHPWord->addParagraphStyle('pStyle', array('align'=>'left', 'spaceAfter'=>100));
$section->addText("$heading_1", 'rStyle', 'pStyle');

$PHPWord->addFontStyle('crStyle', array('bold'=>false, 'italic'=>false, 'size'=>11));
$PHPWord->addParagraphStyle('cpStyle', array('align'=>'left', 'spaceAfter'=>100));
$section->addText("$content_2", 'crstyle', 'cpStyle');
$section->addTextBreak(2);

$PHPWord->addFontStyle('rStyle', array('bold'=>true, 'italic'=>true, 'size'=>16));
$PHPWord->addParagraphStyle('pStyle', array('align'=>'Left', 'spaceAfter'=>100));
$section->addText("$subheading_3", 'rStyle', 'pStyle');
$section->addText("$content_4", 'crstyle', 'cpStyle');

$objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');
$objWriter->save('WordDocs/'. $docname . '.docx');

?>
