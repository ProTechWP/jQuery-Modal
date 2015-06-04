<!-- Author: Dau Lam -->
<!-- Note: Script to handle form submission (from index_c.html) -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Compound Calculator</title>
	<style type="text/css">
		body { 		margin: 0 20px; }
		.error { 	color: red; }
		table { 	width: 50%; }
		.solution { font-weight: bold; }
	</style>
</head>
<body>
	<h1>Compound Interest Calculator</h1>
	<p>Results</p>

	<?php 
	if (!$_GET) { 
		echo "<p class='error'>You must submit the values through <a href='index_c.html'>here</a>";
	} elseif ($_GET[principal] == NULL) { 
		echo "<p class='error'>Empty values, please resubmit: <a href='index_c.html'>here</a>";
	} else {
		//Forumula: A = (P + ma)(1 + r/n)^(nt)
		$p = (float)$_GET["principal"];
		$ma = (float)$_GET["addition"];
		$r = (float)$_GET["rate"] * 0.01;
		$n = (float)$_GET["compound"];
		$t = (float)$_GET["time"];
		$result = pow((1 + ($r/$n)), ($n*$t));
		$result *= ($p + $ma);
		?>
		<table class="result" border="1">
			<tr>
				<td>Principal:</td>
				<td><?php echo sprintf('%0.2f', $p); ?></td>
			</tr>
			<tr>
				<td>Monthly Addition:</td>
				<td><?php echo sprintf('%0.2f', $ma); ?></td>
			</tr>
			<tr>
				<td>Years to Grow:</td>
				<td><?php echo sprintf('%0.2f', $t); ?></td>
			</tr>
			<tr>
				<td>Interest Rate:</td>
				<td><?php echo sprintf('%0.2f', $r); ?></td>
			</tr>
			<tr>
				<td>Compound Interest:</td>
				<td><?php echo $n; ?></td>
			</tr>
			<tr class="solution">
				<td>Future Value:</td>
				<td><?php echo sprintf('%0.2f', round($result, 2)); ?></td>
			</tr>
		</table>
		<p><a href="index_c.html">Back</a></p>
		<?php
	}
	?>


</body>
</html>