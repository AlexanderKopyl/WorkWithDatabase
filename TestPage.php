<html>  
<head>  
<meta http-equiv="Content-Type" content="text/html; Charset=UTF-8">  
</head>  
  
<body>  
      
    <div id="content"></div>  
      <script src="jquery-3.3.1.min.js"></script>
            <script src="jquery.maskedinput.js"></script>
    <script>  
        function show()  
        {  
            $.ajax({  
                url: "time.php",  
                cache: false,  
                success: function(html){  
                    $("#content").html(html);  
                }  
            });  
        }  
      
        $(document).ready(function(){  
            show();  
            setInterval('show()',1000);  
        });  
    </script>  
      
</body>  
</html>  