<?php
    include '../DB/main.php';
	include('../DB/process.php');
	include('../header.php');
?>
	<br>
	<br>
	<br>

	<div class="container" style="margin-left: 100 px;">
		<img class="img-fluid" src="graph.php" style="width:100%;height:100%;">
	</div>

	<br>
	<br>

	<div class="container" style="margin-left: 100 px;">
		<table  class="table table-bordered table-secondary" style="margin-left: 200 px;width: 50%">
			<tbody>
				<thead class="thead-dark">
					<tr>
						<th colspan='2'>Add to graph:</th>
					</tr>
				</thead>
				<tr>
					<td colspan="2">
						<form class="form-group row" method="POST" action="../DB/process.php?action=addgraph">
							<div class="form-row" style="font-size: 14pt;">
								<label for="name" class="col-sm-2 col-form-label">X1:</label>
								<input type="text" name="x1" maxlength="10" size="10" required>
							</div>
							<br>
							<div class="form-row" style="font-size: 14pt;">
								<label for="name" class="col-sm-2 col-form-label">X2:</label>
								<input type="text" name="x2" maxlength="10" size="10" required>
							</div>
							<br>
							<div class="form-row" style="font-size: 14pt;">
								<label for="name" class="col-sm-2 col-form-label">X3:</label>
								<input type="text" name="x3" maxlength="10" size="10" required>
							</div>
							<br>
							<div class="form-row" style="font-size: 14pt;">
								<label for="name" class="col-sm-2 col-form-label">X4:</label>
								<input type="text" name="x4" maxlength="10" size="10" required>
							</div>
							<br>
							<div class="form-row" style="font-size: 14pt;">
								<label for="name" class="col-sm-2 col-form-label">X5:</label>
								<input type="text" name="x5" maxlength="10" size="10" required>
							</div>
							<br>
							<div class="form-row">
								<button type="submit" class="btn btn-primary" id="submit">Submit</button>
							</div>
						</form>
					</td>
				</tr>
			</tbody>
		</table>
	</div>

	<br>
	<br>
	<br>
	<br>
	<br>		
<?php
	include('../footer.php');
?>
