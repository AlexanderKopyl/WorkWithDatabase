<?php 
	$db = mysqli_connect('localhost','root','');
		mysqli_select_db($db,'WMI TEst');
	$sql = "SELECT * FROM `Info`";
	$result = mysqli_query($db, $sql);
	$info = mysqli_fetch_all($result, MYSQL_ASSOC);

	// href="http://educationwmi/?id=<?php echo $info[$key]['id'];
foreach ($info as $key => $val) {

        ?>
       
		<div class = "box_info">        
            <ul>
                    <li>FIO:<?php echo $info[$key]['fio'];?>
                    </li>Tel:<?php echo $info[$key]['tel'];?></li>
						<li class="mail">Email:<?php echo $info[$key]['email'];?></li>
						
                </ul>
                   <a href="#" class = "btn" id="<?php echo $info[$key]['id'];?>"">Удалить пользователя</a>


		</div>

 <script>
    $('.btn').click(function(e){
              var id = $(this).attr('id');
                e.preventDefault();
                $.ajax({
                    url: 'indexDB.php',
                    type: 'POST',
                    data: {id:id},                 
                    success:function(data){
                        console.log(data);
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
      			
		
 
<?php 
    }



?>

