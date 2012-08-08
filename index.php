<!DOCTYPE HTML PUBLIC
	"-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html401/loose.dtd">
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Form</title>
	</head>
	<body>
		<div id="main">
			<div id="form">
				<form method="GET" action="answerMod.php">
					<fieldset>
						<legend>Search Form</legend>
						<!--Set up labels and text fields for wine name, winery name,
							min. in stock, max ordered and cost range.-->
						<p>Wine Name:	<input type="text" name="wineName" value=""></p>
						<p>Winery Name:	<input type="text" name="wineryName" value=""></p>
						<!--Dynamic code for region name -->
						<p>
							<!--Seting up labels and dynamic drop down lists for region name,
								grape variety, years from and years to-->
							<!--Dynamic code for grape variety-->
							<label for="regionName">Region Name:</label>
							<select name="regionName" value="value">
								<option id="0" value=""/>
								<?php
								//connect to database, run the query to get all the region info from
								//database. Iterate through the array and then display the elements
								//inside the list
									require("db1.php");
									$getAllRegions = mysql_query("SELECT * FROM region");
									while($viewAllRegions = mysql_fetch_array($getAllRegions)){
								?>
								<option id="<?php echo $viewAllRegions ['region_id']; ?>">
								<?php echo $viewAllRegions ['region_name'] ?>
								</option>
								<?php } ?>
							</select>
						</p>
						
						<!--Dynamic code for grape variety-->
						<p>
							<label for="grapeVariety">Grape Variety:</label>
							<select name="grapeVariety" value="value">
							<option id="0" value=""/>
								<?php
								//connect to database, run the query to get all the grape variety info
								//from database. Iterate through the array and then display the elements
								//inside the list
									$getGrapeVariety = mysql_query("SELECT * FROM grape_variety");
									while($viewGrapeVariety = mysql_fetch_array($getGrapeVariety)){
								?>
								<option id="<?php echo $viewGrapeVariety ['variety_id']; ?>">
								<?php echo $viewGrapeVariety ['variety'] ?>
								</option>
								<?php } ?>
							</select>
						</p>
						
						<!--Dynamic code for year "From"-->
						<p>
							<label for="yearFrom">Year From:</label>
							<select name="yearFrom" value="value">
							<option id="0" value=""/>
								<?php
								//connect to database, run the query to get all the year info from
								//database. Iterate through the array and then display the elements
								//inside the list
									$getYearFrom = mysql_query("SELECT wine_id, year FROM wine");
									while($viewYearFrom = mysql_fetch_array($getYearFrom)){
								?>
								<option id="<?php echo $viewYearFrom ['wine_id']; ?>">
								<?php echo $viewYearFrom ['year'] ?>
								</option>
								<?php } ?>
							</select>
						</p>
						
						<!--Dynamic code for year "To"-->
						<p>
							<label for="yearTo">Year To:</label>
							<select name="yearTo" value="value">
							<option id="0" value=""/>
								<?php
								//connect to database, run the query to get all the year info from
								//database. Iterate through the array and then display the elements
								//inside the list
									$getYearTo = mysql_query("SELECT wine_id, year FROM wine");
									while($viewYearTo = mysql_fetch_array($getYearTo)){
								?>
								<option id="<?php echo $viewYearTo ['wine_id']; ?>">
								<?php echo $viewYearTo ['year'] ?>
								</option>
								<?php } ?>
							</select>
						</p>

						<p>Min. in stock: 	<input type="text" name="min" value=""></p>
						<p>Max. ordered:	<input type="text" name="max" value=""></p>
						<p>Cost Range:	<input type="text" name="costRange" value=""></p>	
							<label></label>
							<input type="submit" name="submit" value="Search"/>
						</p>
					</fieldset>
				</form>
			</div><!-- end form -->
		</div><!--  end main-->
	</body><!--  end body-->
</html><!--  end html-->
