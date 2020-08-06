<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="js/menu-highlighter.js"></script>
<script src="js/navbar-scroll.js"></script>


<script>
	var addButton = document.getElementById("add-new");
	var deleteButton = document.getElementById("delete");
	var editButton = document.getElementById("edit");
	
	$(document).ready(function(){
		$("#modify-done").click( function(){ 

			if(addButton.style.display != "none"){
				addButton.style.display = "none";
				deleteButton.style.display = "none";
				editButton.style.display = "none";
			}
			else{
				addButton.style.display = "block";
				deleteButton.style.display = "block";
				editButton.style.display = "block";
			}
		});
	});
</script>