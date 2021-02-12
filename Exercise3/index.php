<?php
    include '../DB/main.php';
	include('../DB/process.php');
	include('../header.php');
?>
	<br>
	<br>
	<br>

	<table  class="table table-bordered table-secondary">
		<tbody>
            <thead class="thead-dark">
				<tr>
					<th colspan='3'>Posts:</th>
				</tr>
			</thead>
				<?php 
				$where['id']= "";
				$database=new Database();
				$results=$database->getRow("messages","*",$where,"AND","id DESC");
				$num=1;
				foreach($results as $result){?>
					<tr class="chat">
						<td><? echo $result['nick']; ?> : </td>
						<td><? echo $result['message']; ?></td>
						<td><? echo $result['datetime']; ?></td>
					</tr>
				<?php
					$num = $num + 1;
					if ($num == 6){
						break;
					}
				}
				?>
			<tr>
				<td colspan="3">
					<form class="form-group row" method="POST" action="../DB/process.php?action=addpost">
						<div class="form-row" style="font-size: 14pt;">
							<label for="name" class="col-sm-2 col-form-label">Nickname:</label>
							<input type="text" name="user" maxlength="10" size="10">
						</div>
						<br>
						<div class="form-row" style="font-size: 14pt;">
							<label for="name" class="col-sm-2 col-form-label">Post:</label>
							<input type="text" name="post" maxlength="90" size="90">
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

	<br>
	<br>
	<br>
	<br>
	<br>		
<?php
	include('../footer.php');
?>
