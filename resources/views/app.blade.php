<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
@include('includes.head')
    
</head>

<body>
    <div id="app">
       
            <div style="margin-top:20px;"></div>
            <router-view></router-view>
            
            
    </div>
     

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>