<!DOCTYPE html>

<?php
function tableLine()
{
	for($i = 1; $i <= 100; $i++)
	{
		
		for($j = 1; $j <= 100; $j++)
		{
			if(($j-1)%100 == 0)
			{
			echo "<tr>".PHP_EOL;
			}
		  echo "<td>".$i * $j."</td>".PHP_EOL; 
		}

	}
}
?>
