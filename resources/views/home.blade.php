<h4>this is homepage</h4>
<?php
print_r($data);
?>
{{$str}}
@foreach($data as $key=>$value)
@continue($value > 5)
{{$value}}
@endforeach