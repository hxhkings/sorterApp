<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="form-horizontal">
			<input type="hidden" name="mykey" value = "abcdefg123">
			<div class="form-group">
				<label><h4>String to Sort</h4></label>
				<?php 
					$userInput = new \App\Builder\UserInput;
				?>
				<input type="text" name="userinput" placeholder="Type the string to sort" class="form-control" value = "<?php echo isset($_POST['userinput']) ? 
				  $userInput->setStringToSort($_POST['userinput'])->getStringToSort() : ''; ?>">
			</div>	
			<div class="form-group">
				<h4>Select a sorting algorithm:</h4>
				<select name="strategy[]" class="form-control">
					<option value="Bubble">Bubble Sort</option>
					<option value="Merge">Merge Sort</option>
				</select>
			</div>
			<div class="form-group">
				<button type="submit" name="sort" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-sort-by-alphabet"> Sort </span></button>
			</div>	
		</form>

		<h4>Sorted String: </h4>
		<?php
			if (isset($_POST['mykey'])) {
				if ($_POST['mykey'] == 'abcdefg123') {
					$userInput->setSortingStrategy($_POST['strategy'][0]);
					echo (new \App\Factory\SortingFactory($userInput))->doStringSorting();
				}
			}
		?>
	</div>
</div>