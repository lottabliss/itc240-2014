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
		