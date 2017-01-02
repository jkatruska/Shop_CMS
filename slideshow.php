        <div id="slideshow">
        	<ul id="slider">
             <?php 
				include "connect.php";
				$query = mysql_query("SELECT * FROM slideshow WHERE id=1");
				while ($row = mysql_fetch_assoc($query)){
					$images[] = $row ['image'];
				}
				foreach ($images as $image){
					echo '<li class="slide active-slide">';
					echo '<img src="data:image/jpeg;base64,' . base64_encode($image). '" class="img">';
					echo '</li>';
				}
				unset($GLOBALS['images']);
				$query = mysql_query("SELECT * FROM slideshow WHERE id != 1");
				while ($row = mysql_fetch_assoc($query)){
				$images[] = $row ['image'];
				}
				foreach ($images as $image){	
					echo '<li class="slide">';
					echo '<img src="data:image/jpeg;base64,' . base64_encode($image). '" class="img">';
					echo '</li>';				
				}	
			?>
            </ul> <!--end slider-->
            <img id="arrow-prev" src="img/arrow-prev.png"><!--prev arrow-->
            <ul id="low-slider">            
             <?php 
			 	unset($GLOBALS['images']);
				$query = mysql_query("SELECT * FROM slideshow WHERE id=1");
				while ($row = mysql_fetch_assoc($query)){
					$images[] = $row ['image'];
				}
				foreach ($images as $image){
					echo '<li class="low-slide inline-stroke">';
					echo '<img src="data:image/jpeg;base64,' . base64_encode($image). '" class="img-low">';
					echo '</li>';
				}
				unset($GLOBALS['images']);
				$query = mysql_query("SELECT * FROM slideshow WHERE id != 1");
				while ($row = mysql_fetch_assoc($query)){
				$images[] = $row ['image'];
				}
				foreach ($images as $image){	
					echo '<li class="low-slide">';
					echo '<img src="data:image/jpeg;base64,' . base64_encode($image). '" class="img-low">';
					echo '</li>';				
				}			
			?>
            </ul> <!--end low-slider-->
            <img id="arrow-next" src="img/arrow-next.png"><!--next arrow-->
        </div> <!--end slideshow-->
