		</div>
	</div>

	<?php

	//Custom CSS/JS
	foreach(Config::get("output_styles") as $style_file){
		echo $style_file;
	}
	foreach(Config::get("output_scripts") as $script_file){
		echo $script_file;
	}
	?>

	<!-- Console -->
	<?php
		if(Config::Get("debug")){
			require(VIEW."template/common/Console.php");
		}
	?>


	<br><br>
	<footer class="page-footer red lighten-2">
    
	    <div class="container">
            <div class="row">
    	        <div class="col l6 s12">
                	<h5 class="white-text">Footer Content</h5>
                	<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
              	<div class="col l4 offset-l2 s12">
                	<h5 class="white-text">Links</h5>
					<ul>
					<li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
					<li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
					<li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
					<li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
					</ul>
              	</div>
            </div>
        </div>

        <div class="footer-copyright">
            <div class="container">

				© <span id="year_copyright"></span> Copyright Text
				
				<a class="grey-text text-lighten-4 right" href="#!">More Links</a>

				<script> 
					//Year span
					let year = new Date();
					year = year.getFullYear();
					document.getElementById("year_copyright").innerHTML = year;

					//Sidenav
					var elems = document.querySelectorAll('.sidenav');
    				var instances = M.Sidenav.init(elems, {});
				</script>
            </div>
        </div>
    
	</footer>

</body>
</html>