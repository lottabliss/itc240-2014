
<!doctype html><!--ok to add cookie here-->
<html>
	<head>
		<script src="js/jquery-1.11.0.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/jquery.ui.core.js"></script>
		<script src="js/jquery.ui.spinner.js"></script>
		<script src="js/jquery.ui.datepicker.js"></script>
<!--I'm so sorry- looks like the following darn script won't load and work unless it is on the page, makes it hard to read!>	
		<script>	
		window.onload = function()
		{
			document.getElementById("sortby").onchange = showHideOther;
			showHideOther();

		}

		function showHideOther()
		{ 	
			var selectBox = document.getElementById("sortby");
			var catagoryBlock = document.getElementById("sortbycatagory");
			var dayBlock = document.getElementById("sortbyday");
			var locationBlock = document.getElementById("sortbylocation");
			var whatBlock = document.getElementById("whatitis");
			var sortDropDown = selectBox[selectBox.selectedIndex].value.toLowerCase();
			
			if(sortDropDown == "0")
			{
				catagoryBlock.className = "show";
				dayBlock.className = "hidden";
				locationBlock.className = "hidden";
				whatBlock.innerHTML = ("Sort By Catagory");
				//now it is not hidden because it has no class at all.
			}
			
			else if(sortDropDown == "1")
			{
				catagoryBlock.className = "hidden";
				dayBlock.className = "show";
				locationBlock.className = "hidden";
				whatBlock.innerHTML = ("Sort By Day");
			}
			else 
			{
				catagoryBlock.className = "hidden";
				dayBlock.className = "hidden";
				locationBlock.className = "show";
				whatBlock.innerHTML = ("Sort By Location");
			}
			
		}	

</script>
		<script type="text/javaScript">
			function alertfunny(){
				alert("ha ha, I'm not that good! Maybe next lesson? :)");
			}

			function changeClass(){
			document.getElementById("rightno").setAttribute("id", "righto");
			}
			function closeit(){
			document.getElementById("righto").setAttribute("id", "rightno");
			}
		</script>
		<script type="text/javaScript">
			$(document).ready(function(){
			$("#contact-form").validate();
			$("#datepicker").datepicker();
			});
		</script>

	<style>
		body {
			background: black;
			color: grey;
			font-family:"Trebuchet MS";
			font-variant:small-caps;
			font-weight: bold;
		}
		.hidden{
			display:none;
		}
		.show{
			display:block;
		}
		
		a {
			color: #000000;
/*how do I get rid of the underline again?*/
		}
		#righto{
			position:absolute;
			left:60%;
			top:8%;
			display:block;
			float:right;
			max-width:500px;
			padding-right:10px;
		}

		#rightno{
			display:none;
		}
		h1{
			padding:2%;
			font-family:"Trebuchet MS";
			background-color:grey;
			text-align:center;
			border:2px solid #bf000f;
		}
		#roundy {
			min-width: 300px;
			max-width: 300px;
			border: 5px solid #bf000f;
			border-radius: 4px;
			background-color: grey;
			color: #000000;
			float: left  :

		}
		input, button, textarea {
			color: black;
			border: 1px solid #556677;
			border-radius: 3px;
			padding-left: 5px;
			padding-right: 15px;
			padding-top: 2px;
		}
		/*needs to be mobilized*/
		</style>
		</head>
		<body>

		<form id="contact-form" method="post" action="index.html">
		<div id="roundy">
			<h1>Expense-O-Rama</h1>
			<input type="submit" value="Add Expense">
			<a href="#"><input type="button" value="View Expenses" onClick="changeClass();" /></a>
				<br><label for="type">type of expense:</label>
				<p>
					<input type="radio" name="typeofexpense" value="snacks" required>
					snacks(includes lattes)
					<br>
					<input type="radio" name="typeofexpense" value="utilitybills" required>
					utility bills
					<br>
					<input type="radio" name="typeofexpense" value="merchandise" required>
					merchandise
					<br>
					<input type="radio" name="typeofexpense" value="parking/transportation" required>
					parking
					<br>
					<input type="radio" name="typeofexpense" value="rent" required>
					rent
					<br>
					<input type="radio" name="typeofexpense" value="advertising" required>
					advertising
					<br>
					<input type="radio" name="typeofexpense" value="other" required>
					other
				</p>
				<p>
				<table>
					<tr>
					<td><label for="expense">detail:</label>	
					</td>
					<td><input type="text" name="expense">	
					</td>
					</tr>
					<tr>
					<td>location of expense:
					</td>
					<td><label for="location" class="error"><select>
							<option name="location" value="work">work</option>
							<option name="location" value="home">home</option>
							<option name="location" value="outside">en route</option>
							<option name="location" value="clienthome">clienthome</option>
							<option name="location" value="other">other</option>
						</select> </label>	
					</td>
					</tr>
					<tr>
					<td>amount of expense:	
					</td>
					<td><label for "amount" class="error">
						<input id="spinner" value="01.00" type="number" name="money" placeholder="amount" required>
					</label>
					</td>
					</tr>
					<tr>
					<td><label for "date">date of Expense:</label>
					</td>
					<td><input id="datepicker" type="date" name="date" placeholder="date" required></label>			
					</td>
					</tr>
					<tr>
					<td><label>comments: 
					</td>
					<td><textarea id="comments"></textarea> </label>
					</td>
					</tr>
				</table>
			</div><!--end of roundy-->
		</form>
<div id="rightno">EXPENSES
	<input type="button" value="close" onClick="closeit();" /></a>
		<div>
			Sort by:<form>
						<select id="sortby">
							<option value="0">Catagory</option>
							<option value="1">Day</option>
				            <option value="2">Location</option>
			          	</select>
			          </form>
<p id="whatitis">how will you sort?</p>
<div id="sortbycatagory" class="">
	THIS IS SORT BY CATAGORY

<div id="sortbylocation" class="">
	THIS IS SORT BY LOCATION



</div>
<div id="sortbyday" class=""><!--not sure if I could do week/month with an extra drop down-->
	THIS IS SORT BY DATE
</div>

	</body>
</html>

<p><input type="button" value="show pie chart" onClick="alertfunny();"></input></p>
</div></div>
