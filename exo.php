<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
/* 
echo "Exercice PHP";

for ($a = 1;  $a < 150; $a += 2) {
    echo "<br>" . $a;
} */

/* $text = "Je dois faire des sauvegardes régulières de mes fichiers";

for ($i = 1; $i <= 500; $i++) {
    echo "<br>" . "$i . $text";
} */


?>


<table border=1>

		<tr>

			<th>0</th>

			<?php for ($i = 1; $i <= 9; $i++): ?>

				<th><?= $i ?></th>

			<?php endfor; ?>

		</tr>

		<?php for ($i = 1; $i <= 9; $i++): ?>

			<tr>

				<th><?= $i ?></th>

				<?php for ($j = 1; $j <= 9; $j++): ?>

					<td><?= $i * $j ?></td>

				<?php endfor; ?>

			</tr>

		<?php endfor; ?>

	</table>


</body>
</html>