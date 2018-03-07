<?php 
	$db = mysqli_connect('localhost','root','');
		mysqli_select_db($db,'WMI TEst');
	$sql = "SELECT * FROM `Info`";
	$result = mysqli_query($db, $sql);
	$info = mysqli_fetch_all($result, MYSQL_ASSOC);

	
foreach ($info as $key => $val) {

        ?>
        <script>
        	$('a.deleteButton').click(function(e){
			 		
			 		// e.preventDefault();
        		$.ajax({
        			url: 'indexDB.php',
        			type: 'POST',
        			dataType: 'html',
        			success:function(){
        				console.log('work');
        			}
        		})
        		.done(function() {
        			console.log("success");
        		})
        		.fail(function() {
        			console.log("error");
        		})
        		.always(function() {
        			console.log("complete");
        		});
        		
        		});
      			


			</script>
        </script>
		<div id="<?php echo $info[$key]['id'];?>">        
            <ul >
                    <li><?php echo $info[$key]['fio'];?>
                    </li>
                    <li><?php echo $info[$key]['tel'];?></li>
						<li><?php echo $info[$key]['email'];?></li>
						
                </ul>
                   <a class ="deleteButton"href="http://educationwmi/?id=<?php echo $info[$key]['id'];?>">Удалить пользователя</a>


		</div>


      			
		
 
<?php 
    }



?>

