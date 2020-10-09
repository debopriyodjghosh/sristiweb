<?php
include_once 'db.php'; 
            	    $query = $conn->query("SELECT * FROM initiatieve ORDER BY uploaded_on DESC");
            	    if($query->num_rows > 0){
                        while($row = $query->fetch_assoc()){
                            $imageURL = 'https://www.shibpursristi.org/web/project_image/'.$row["file_name"];
                                $date = $row["date"];
                                $place = $row["place"];
                                $title = $row["title"];
                                $category = $row["category"];
                                $description = $row["description"];
                                $short_description = $row["short_description"];
                            
            	?>
	<html>
	    
	   <head>
	       
	   </head>
	   <body>
	       	<img src="<?php echo $imageURL; ?>" alt="" />
	       	<?php
	       	echo $category;
            echo $p_id;
            echo $date;
            echo $place;
            echo $title;
            echo $category;
            echo $description;
            echo $short_description;
            ?>
	   </body>
	</html>

	
	
	<?php }
            }else{ ?>
                <p>No image(s) found...</p>
            <?php } ?>
	