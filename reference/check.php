<?php
	$words = $_POST['word'];
	$class = $_POST['classnum'];
 	require_once('./library.php');
	$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
	$result = mysqli_query($con, "SELECT * FROM Notes WHERE class = '$class'");
	$count = 0;
	while($row = mysqli_fetch_array($result))
	{
		$noteid = $row['note_id'];
		$text = $row['topic'];
		$t_part = explode(' ', $text);	
		$t_part = array_unique($t_part);
		$w_part = explode(' ', $words);	
		$w_part = array_unique($w_part);
		$common = (double)sizeof(array_intersect($t_part, $w_part));
		//$common/sizeof($words) >= 0.5
		$size = sizeof($t_part);
		$re = (float)$common/(float)$size;
		
		if($re >=0.4 AND $count <=10)
		{
			$count  = $count +1;
			$result2 = mysqli_query($con, "SELECT COUNT(id) FROM comment WHERE noteid = '$noteid'");
			$num = mysqli_fetch_array($result2);
			$reply = $num[0];
			if ($reply == 0)
			{
				$reply = "no answer yet";
			}
			else 
			{
				$reply = $reply." answers";
			}
			echo <<<EOD
			<div class="qsrow" style="-webkit-user-select: none;">
				<a class="link" href="#" style="-webkit-user-select: none;">{$text}
					<span class="ac-gray" style="-webkit-user-select: none;">{$reply}</span>
				</a>
			</div>
EOD;
		}
	}
?>