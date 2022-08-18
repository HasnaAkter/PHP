<!-- <h1>this is my page</h1>

@php 

$num1=10;
$num2=10;
$result=$num1+$num2;
echo($result);

@endphp

@php 

$num1=10;
$num2=10;
$result=$num1-$num2;
echo($result);

@endphp

@php 

$num1=10;
$num2=10;
$result=$num1*$num2;
echo($result);

@endphp

@php 

$num1=10;
$num2=10;
$result=$num1/$num2;
echo($result);

@endphp


@php 

echo time();

@endphp -->


@include('subview.Menu')
<br><br><br><br><br>

<h1>My Name is Hena.</h1>
<h1>This is my menue part,</h1>
<h1>Okay now try it.</h1>
<h1>this is okay,</h1>
<h1>Done</h1>
<br><br><br><br><br><br><br><br><br><br>
@include('subview.Footer',['subkey'=>"All right by Hena"])