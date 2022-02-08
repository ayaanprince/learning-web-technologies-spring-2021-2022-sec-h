<?php
  function print_pattern($num)
  {
  	for($i=0;$i<$num;$i++)
  	{
  		for($j=0;$j<$i;$j++)
  		{
  			echo "*";
  		}
  		echo"\n";
  	}
  }
  $num=5;
  print_pattern($num);


    function print_pattern2($sum)
  {
  	for($i=sum;$i>0;$i--)
  	{
  		for($j=0;$j<$i;$j++)
  		{
  			echo "1,2,3";
  		}
  		echo"\n";
  	}
  }
  $sum=5;
  print_pattern2($sum);


?>