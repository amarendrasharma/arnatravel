<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>

<body>


	<label for="file">File</label>
	<input type="file" name="file" multiple=true>
	<div id="show-details">
	</div>
	<script>
		let input = document.querySelector("input");
	console.log(Array.isArray(input.files));

		input.addEventListener('change',e=>{
			let files = Array.from(input.files);
			let file = {};
			for(let fileElement of Array.from(input.files)) {
				let reader = new FileReader();
				reader.addEventListener('load',()=>{
					console.log(reader.result.slice(0, 20))
				});
				reader.readAsText(fileElement);
			}
			files.forEach(element => {
				
				file.name = element.name;
				file.type = element.type;
				file.size = element.size;
				file.lastModifiedDate = element.lastModifiedDate;
				console.log(element.name);
				console.log(element.size);
				console.log(element.lastModified);
				console.log(element.lastModifiedDate);
			});
			console.log('file', file)
			const row = document.createElement('ul');
			row.innerHTML = ` <li>name:${file.name}</li>
									<li>type:${file.type}</li>
									<li>size:${file.size}</li>
									<li>Last Modified:${file.lastModifiedDate}</li>`;
		
			let showdetails = document.querySelector('#show-details');
			showdetails.appendChild(row);
		
		});
	</script>
</body>

</html>