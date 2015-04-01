<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CSC DoCreator</title>
<link id="page_favicon" href="images/favicon.ico" rel="icon" type="image/x-icon" />
<link href="CSS/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 
include('header.php'); 
include('docbody.php'); 
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
