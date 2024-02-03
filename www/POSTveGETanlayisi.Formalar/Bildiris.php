<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bildirisler</title>
	<style type="text/css">
		table, tr, th,td
		{
			border: solid 1px;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<?php //Get metodunun istifade qaydasi ?>
<label>Musterinin adi: <?php echo $_GET['Ad']; ?></label>
<br>
<textarea disabled style="resize: none; height: 300px; width:300px;"><?php echo $_GET['Mesaj']; ?></textarea>
<br>
<?php //cedvellerle is ?>
<h1>Cedvel seklinde tesvir</h1>
<table>
	<tr>
		<th>Ad</th>
		<th>Mesaj</th>
	</tr>
	<tr>
		<td> <?php echo $_GET['Ad']; ?> </td>
		<td><?php echo $_GET['Mesaj']; ?></td>
	</tr>
</table>
</body>
</html>