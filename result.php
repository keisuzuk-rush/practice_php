<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>じゃんけんゲーム結果</title>
</head>
<body>
	<?php
		$your_choice = $_POST['hand'];
		
		$pc_hand = ["グー", "チョキ", "パー"];
		
		$count = count($pc_hand);
		
		$number = rand(0, $count - 1);
		
		$rand_choice = $pc_hand[$number];

		if ($your_choice == $rand_choice) {
			$result ='あいこ';
		} elseif ($your_choice == 'グー' && $rand_choice == 'チョキ') {
				$result = '勝ち';
		} elseif ($your_choice == 'チョキ' && $rand_choice == 'パー') {
				$result = '勝ち';
		} elseif ($your_choice == 'パー' && $rand_choice == 'グー') {
				$result = '勝ち';
		} else {
				$result = '負け';
		}

		echo '自分： '.$your_choice;
		echo '相手： '.$rand_choice.'<br>';
		echo '結果： '.$result;
		
	?>
	<form action="index.php">
		<input type="submit" value="再勝負">
	</form>
</body>
</html>