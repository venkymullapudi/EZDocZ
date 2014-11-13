<style>
#body_wrap {
    padding-left: 20px;
	padding-right: 20px;
	padding-bottom: 20px;
	padding-top: 40px;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

</style>
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>
<script src="js/form.js" type="text/javascript"></script>
<link href="CSS/form.css" rel="stylesheet" type="text/css">
<div id="body_wrap">
<h2><a style="color:black;font-family: Helvetica Neue, Helvetica, Arial;">

<div class="main_content">
<div class="two">
<h4>Document Fields</h4>
<button onclick="nameFunction()">Heading</button>
<button onclick="emailFunction()">Sub-Heading</button>
<button onclick="contactFunction()">Sub-Sub-Heading</button>
<button onclick="textareaFunction()">Content</button>
<button onclick="resetElements()">Reset</button>
</div>

<div class="three">
<!-- <h2>Your Dynamic Documentation!</h2> -->
<form action="document.php" id="mainform" method="post" name="mainform">
Document Type
<select name="doctype">
<option>Evaluation Document</option>
<option>White Paper</option>
<option>Configuration Guide</option>
<option>Plan Guide</option>
<option>Deployment Guide</option>
<option>User Guide</option>
<option>Quick Guide</option>
</select>
<input type="text" placeholder="Document Name" name="docname" size="30" />
<!-- <textarea>Content</textarea>  -->
<span id="myForm"></span>
<p></p><input type="submit" value="Submit">
</form>
</div>

</div>
</body>
</html>

</div>