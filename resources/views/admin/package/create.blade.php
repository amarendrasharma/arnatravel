<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

</head>

<body>
	<!-- Include stylesheet -->
	asasas
	<!-- Create the editor container -->
	<form>

		<div id="editor">
			<p>Hello World!</p>
			<p>Some initial <strong>bold</strong> text</p>
			<p><br></p>
		</div>
	</form>

	<!-- Include the Quill library -->
	<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

	<!-- Initialize Quill editor -->
	<script>
		var quill = new Quill('#editor', {
    theme: 'snow'
  });
	</script>
</body>

</html>