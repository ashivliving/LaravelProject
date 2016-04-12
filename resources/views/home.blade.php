<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	{!! Form::open(array('url' => 'foo/bar')) !!}
    <?php  echo Form::text('username');
    			echo Form::submit('Click Me!');?>
   {!! Form::close() !!}

</body>
</html>
	