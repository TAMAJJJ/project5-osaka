<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="js/menu-highlighter.js"></script>
<script src="js/navbar-scroll.js"></script>


<script>
	var addButton = document.getElementById("add-new");
	var deleteButton = document.getElementsByClassName("delete");
	var editButton = document.getElementsByClassName("edit");
	var doneButton = document.getElementById("done");
	
	$(document).ready(function(){
		$("#done").click( function(){ 
			if(addButton.style.display != "none"){
				addButton.style.display = "none";
				doneButton.style.display = "none";
				for(i = 0; i < deleteButton.length; i++){
					deleteButton[i].style.display = "none";
					editButton[i].style.display = "none";
				}
			}
		});
		$("#modify").click( function(){
			if(doneButton.style.display == "none"){
				doneButton.style.display = "block";

				addButton.style.display = "block";
				for(i = 0; i < deleteButton.length; i++){
					deleteButton[i].style.display = "block";
					editButton[i].style.display = "block";
				}
				
			}
		});
	});
</script>