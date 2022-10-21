<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
<?php
    $user = "pranon";
    $arr = array("HOME","Member","About","Contact");
?>
    <h1>ยินดีต้อนรับadmin</h1>    
 <h1>{{$user}}</h1>

    @if ($user == "pranon")
        <h1>ผู้ใช้ท่านนี้เป็น admin</h1>
    @else 
     <h1>ไม่ใช่ admin</h1>
    @endif

    @foreach ($arr as $menu)
    <a href="">{{$menu}}</a>       
    @endforeach


</body>
</html>