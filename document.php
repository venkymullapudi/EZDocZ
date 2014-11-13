<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CSC DoCreator</title>
<link id="page_favicon" href="images/favicon.ico" rel="icon" type="image/x-icon" />
<link href="CSS/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include('header.php'); ?>
<?php
$doctype=$_POST['doctype'];
$docname=$_POST['docname'];

require_once 'PHPWORD/PHPWord.php';
// New Word Document
$PHPWord = new PHPWord();
// New portrait section
$section = $PHPWord->createSection();

$heading_1=$_POST['heading_1'];
$content_2=$_POST['content_2'];
$subheading_3=$_POST['subheading_3'];
$content_4=$_POST['content_4'];

/* To get all $_POST data
foreach ($_POST as $key => $value)
 echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br>";
*/

/* FOR XML
echo "<p>";
echo $docname;
echo $doctype;
echo ".docx";
echo "</p>";

echo "<div></div>";
ob_start();
echo "<?xml version='1.0' encoding='us-ascii'?>";
echo "<slideshow title='$docname' date='Date of Documentation' author='Venky' >";
//$p=1;
//$i=10;

//while ($p <= $i)
//{ 
echo "<item>$heading_1</item>";
echo "<item>$content_3</item>";
echo "<item>$subheading_4</item>";
echo "<item>$content_5</item>";
$contents = ob_get_flush();
$file="XMLS/$docname.xml";
file_put_contents($file,$contents);
//$p++;
//}
*/

// Add text elements
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


// Save File
$objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');
$objWriter->save('WordDocs/'. $docname . '.docx');

/*
echo '<script language="javascript">';
echo 'alert("Succesfully Created the File $docname.docx")';
echo '</script>';
*/
?>

<script type="text/javascript">
alert("Succesfully Created the File <?php echo $docname; ?>.docx");

</script>

<center>
<h1>
	 <a style="color:red"> Download the document as</a>
	 <a style="font-family: Helvetica Neue, Helvetica, Arial; color:white; background:red;" href="WordDocs/<?php echo "$docname.docx"; ?>">.DOCX</a>
</h1>
</center>
<?php include('footer.php'); ?>
</body>
</html>