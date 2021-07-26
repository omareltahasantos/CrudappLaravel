<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel en minutos</title>
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
    <ul class="menu">
        <li><a href="{{ route('index') }}">Home</a></li>
    </ul> 




        <div>
            @yield('content')

        </div>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                //alert("Settings page was loaded");

                $('[data-toggle="tooltip"]').tooltip();
	
                    // Select/Deselect checkboxes
                    var checkbox = $('table tbody input[type="checkbox"]');
                    $("#selectAll").click(function(){
                        if(this.checked){
                            checkbox.each(function(){
                                this.checked = true;                        
                            });
                        } else{
                            checkbox.each(function(){
                                this.checked = false;                        
                            });
                        } 
                    });
                    checkbox.click(function(){
                        if(!this.checked){
                            $("#selectAll").prop("checked", false);
                        }
                    });

                    $(".close").click(function(){
                        window.location.href = 'https://localhost/crudApplication/public/index'; 

                    })
            });

            
        </script>
</body>
</html>