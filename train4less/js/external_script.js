/*#### Nav Burger ####*/

$("#togglemenu").click(function(){
			$("#nav ul").toggle();
		});	
	

		/** Jquery Event  if user resize the screen **/
		$(window).resize(function()
		{
			if ($(window).width() > 800) {
				$("#nav ul").show();
			}
			else
			{
				$("#nav ul").hide();				
			}
		})

/*#### Nav Burger ####*/





function showCard(object)
	{
		var card = object.value;
				
		switch(card)
		{
			case "visa":
				document.getElementById("visa").style.border="2px solid #c86caa";
				document.getElementById("visa").style.padding="2px";
				document.getElementById("master").style.border="none";
				document.getElementById("americanExpress").style.border="none";
				document.getElementById("paypal").style.border="none";
				document.getElementById("bitcoin").style.border="none";
				break;
			case "master":
				document.getElementById("master").style.border="2px solid #c86caa";
				document.getElementById("master").style.padding="2px";	
                document.getElementById("visa").style.border="none";
				document.getElementById("americanExpress").style.border="none";
				document.getElementById("paypal").style.border="none";
				document.getElementById("bitcoin").style.border="none";
				break;
			case "americanExpress":
				document.getElementById("americanExpress").style.border="2px solid #c86caa";
				document.getElementById("americanExpress").style.padding="2px";
				document.getElementById("master").style.border="none";
				document.getElementById("visa").style.border="none";
				document.getElementById("paypal").style.border="none";
				document.getElementById("bitcoin").style.border="none";
				break;
				
			case "paypal":
			    document.getElementById("paypal").style.border="2px solid #c86caa";
				document.getElementById("paypal").style.padding="2px";
				document.getElementById("master").style.border="none";
				document.getElementById("americanExpress").style.border="none";
				document.getElementById("visa").style.border="none";
				document.getElementById("bitcoin").style.border="none";
						
			    break;
			case "bitcoin":
			    document.getElementById("bitcoin").style.border="2px solid #c86caa";
				document.getElementById("bitcoin").style.padding="2px";
				document.getElementById("master").style.border="none";
				document.getElementById("americanExpress").style.border="none";
				document.getElementById("visa").style.border="none";
				document.getElementById("paypal").style.border="none";
						
			    break;
			default:
			    document.getElementById("bitcoin").style.border="none";
				document.getElementById("master").style.border="none";
				document.getElementById("americanExpress").style.border="none";
				document.getElementById("visa").style.border="none";
				document.getElementById("paypal").style.border="none";
						
				break;
		}
		
	}
	
	
