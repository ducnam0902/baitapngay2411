<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculation</title>
</head>
<body>
	<form action="" method="POST">
		<h1>Calculation</h1>
		<div style="float:left;">
			<input type="text" placeholder="Số hạng thứ nhất" name="sohang1">
			<select name="option">
				<option value="1">+</option>
				<option value="2">-</option>
				<option value="3">*</option>
				<option value="4">/</option>
			</select>
			<input type="text" placeholder="Số hạng thứ hai" name="sohang2">
		</div>
		<button> Calculate</button>
	</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

	$option = $_POST['option'];
	$sohang1= is_numeric($_POST['sohang1'])?$_POST['sohang1']:' ';
	$sohang2= is_numeric($_POST['sohang2'])?$_POST['sohang2']:' ';

	if($sohang1==' ' || $sohang2==' '){
		echo 'Giá trị bạn vừa nhập không phải là số. Vui lòng kiểm tra lại';
	}else{
		switch ($option) {
			case '1':
				$result=$sohang1+$sohang2;
				echo 'Kết quả '.$sohang1.'+'.$sohang2.'='.$result;
			break;
			case '2':
				$result=$sohang1-$sohang2;
				echo 'Kết quả '.$sohang1.'-'.$sohang2.'='.$result;
			break;
			case '3':
				$result=$sohang1*$sohang2;
				echo 'Kết quả '.$sohang1.'*'.$sohang2.'='.$result;
			break;
			case '4':
				$result=$sohang1/$sohang2;
				echo 'Kết quả '.$sohang1.'/'.$sohang2.'='.$result;
			break;
			default:
			break;
		}

	}
	
}

?>
<?php
/*Function is used for finding min of array*/
function minarray($mang){
	$isnumber=0;
	for($i=1;$i<count($mang);$i++){
		if(!is_numeric($mang[$i])){
			$isnumber=1;
			break;
		}
	}
	if($isnumber==0){
		$min=$mang[0];
		for($i=1;$i<count($mang);$i++){
			if($min>$mang[$i]){
				$min=$mang[$i];
			}
		}
		return $min;
	}
	else{
		return 'false';
	}
}
/*function is used for finding max of array*/
function maxarray($mang){
	$isnumber=0;
	for($i=1;$i<count($mang);$i++){
		if(!is_numeric($mang[$i])){
			$isnumber=1;
			break;
		}
	}
	if($isnumber==0){
		$max=$mang[0];
		for($i=1;$i<count($mang);$i++){
			if($max<$mang[$i]){
				$max=$mang[$i];
			}
		}
		return $max;
	}
	else{
		return 'false';
	}
}










//echo ' '.'<br/>'.'<br/>';

$mang=[3,4,5,-99,5,9,6,-201,-99,1000];
echo 'Mảng đã cho là ';
foreach( $mang as $item){
	echo $item.' ';
} 

echo '<br/>';

$min_mang= minarray($mang);
if($min_mang=='false'){
	echo 'Mang đã nhập có kí tự không phải là số. Vui lòng kiểm tra lại';
}
else
	echo 'Giá trị nhỏ nhất của mảng là '.$min_mang. "<br/>";

$max_mang= maxarray($mang);
if($max_mang=='false'){
	echo 'Mang đã nhập có kí tự không phải là số. Vui lòng kiểm tra lại';
}
else
	echo 'Giá trị nhỏ nhất của mảng là '.$max_mang. "<br/>";


?>