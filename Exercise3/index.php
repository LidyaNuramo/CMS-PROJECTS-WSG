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
					<th colspan='3'>Most recent posts:</th>
				</tr>
			</thead>
				<?php 
				$where['id']= "";
				$database=new Database();
				$results=$database->getRows("messages","*",$where,"AND","id DESC");
				$num=1;
				foreach($results as $result){?>
					<tr class="chat">
						<td><?php echo $result['nick']; ?> : </td>
						<td><?php echo $result['message']; ?></td>
						<td><?php echo $result['datetime']; ?></td>
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
							<?php 
								if(!isset($_SESSION['nickname'])){
								?>	
									<input type="text" name="user" maxlength="10" size="10" required>
								<?php
								}
								else{
								?>
									<input type="text" name="user" maxlength="10" size="10" value="<?php echo $_SESSION['nickname'];?>" readonly="true" style="background-color: rgb(190,190,190);" required>
								<?php
								}
							?>
							
						</div>
						<br>
						<div class="form-row" style="font-size: 14pt;">
							<label for="name" class="col-sm-2 col-form-label">Post:</label>
							<input type="text" name="post" maxlength="90" size="90" required>
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
