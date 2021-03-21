<?php 
session_start();
$subjects = $_SESSION['subjects'];
echo "<pre>";
print_r($subjects);
echo "</pre>";
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<title>Bài tập 03</title>
</head>

<style type="text/css">
	.gt{
		font-size: 25px;
	}
	
</style>
<body>
	
	<table cellpadding="15px" cellspacing="1px" border="1px"  width="55%" hight= auto;>
		<div class="container-fluid">
			<h4 style="text-align: center;">
				---Documents---
			</h4>
			<a href="upload.php" class="btn btn-primary">Upload document</a>
			<thead>
				<tr align="center" class="gt">
					<td>No</td>
					<td>Name</td>
					<td>Dowload</td>
					<td>#</td>
				</tr>
			</thead>
			<tbody>
				<?php 
				foreach ($subjects as $key=> $subject) {
					

					?>
					<tr>
						<td><?= $key ?></td>
						<td><?= $subject['name'] ?></td>
						<td>
							<a class="btn btn-primary" href="doc/<?= $subject['file_name'] ?>">Download</a>
						</td>
						<td>
							<a class="btn btn-danger" href="remove.php?id=<?=$key?>">Remove</a>
						</td>

					</tr>
					<?php 
				}
				?>

			</tbody>

		</table>
	</div>

</body>
</html>