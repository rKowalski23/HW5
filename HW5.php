<?php 

function writeln($line_in) 
{
  echo $line_in.'<br/>';
}

$null_var = NULL;
$empty_var = '';
$set_var = 'Set';

$var_array = array($null_var, $empty_var, $set_var);

foreach ($var_array as $value)
{
	if (isset($value) == true)
	{
		writeln('This value is set');
	}elseif (empty($value) == true) 
	{
		writeln('This value is empty');
	}elseif (is_null($value) == true) 
	{
		writeln('This value is NULL');
	}
}

foreach ($var_array as $value)
{
	switch (isset($value))
	{
		case true:
			writeln('This value is set');
			break;
		case false:
			continue;
	}
	switch (empty($value))
	{
		case true:
			writeln('This value is empty');
			break;
		case false:
			continue;
	}
	switch (is_null($value))
	{
		case true:
			writeln('This value is NULL');
			break;
		case false:
			continue;
	}
}






?>
