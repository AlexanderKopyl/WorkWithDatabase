<?php 
require_once 'indexDB.php';
require_once 'indclude/database.php';
require_once 'indclude/function.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<title>Document</title>
</head>
<body>
	<div class="box">
		<form>
				<label>ФИО:</label><br>
				<input id="fio" type="text" name="fio" required="" placeholder="Копыл Александр Евгеньевичь"><br>
				<label>Телефон:</label><br>
				<input id="tel" type="text" name="tel" required="" placeholder="+38(063)067-44-53"><br>
				<label>E-mail:</label><br>
				<input id="email" type="text" name="email" required="" placeholder="Kopul@ua.fm"><br>
				<input id="submit" type="submit" name="submit" value="Отправить">
		</form>
	</div>
			
				
			<div class="information">	
			</div>
			<img id="upload"style="width: 100px; height: 100px; display: none;" src="image_upload.gif" alt="">
			<script src="jquery-3.3.1.min.js"></script>
			<script src="jquery.maskedinput.js"></script>
			
			<script>
				
				$("#tel").mask("+38(099) 999-9999");
				$(document).ready(function(){
					$('#submit').bind("click", function(e){
						for (var i = 0; i < $('.mail').length; i++) {
						var val  = $('.mail')[i].childNodes[0].data;
						var email = "Email:" + $('#email').val();
					if( val === email ){
						$('#email').css({
							'border-color':'red'
						})

					}else{
						$('#email').css({
							'border-color':'black'
						})
					}
					
				}
						e.preventDefault();
						var fio = $('#fio').val();
						var tel = $('#tel').val();
						var email = $('#email').val();
				
						 
						$.ajax({
							url: 'content.php',
							type: 'POST',
							data: ({ fio: fio, tel: tel, email: email }),
							dataType: 'html',
							beforeSend: funcBefore,
							success: function(){
								console.log("work");
								$('img').hide();
									// $(".information").html(data)
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
				});
				function funcBefore(){
					$('img').show(),
					$(".information").text('Ожидание данных...')
				}
				function show()  
        {  
            $.ajax({  
                url: "time.php",  
                cache: false,  
                success: function(html){  
                    $(".information").html(html);  
                }  
            });  
        };
      
        	 
    
        $(document).ready(function(){  
			
            show();  
             setInterval('show()',2000);  
        });  


        	
			</script>

</body>
</html>