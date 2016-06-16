<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>2-2</title>
	<script type='text/javascript'>
			$(function () {

    // 第一階層對應第二階層
    $('#area').cascade('#area', {
    ajax: {
        type: "post",
        url:  '2-2.php',
        data: { act: 'first', val: $('#YourLocation').val() }
    },
    template: function(item) { return "<option value='" + item.Value + "'>" + item.Text + "</option>"; },
    match: function(selectedValue) { return this.When == selectedValue; }
    });
		</script>
</head>
<body>
	<!--使用ajax從後台抓出資料-->
	<form>
	<!--此為範例 請自行修改-->
		<select name="YourLocation">
　			<option value="Taipei">台北市</option>
			<option value="Tainan">台南市</option>
　			<option value="Kaohsiung">高雄市</option>
		</select>
		<select name="area" id="area">
			
		</select>
	</form>
	<!--3-3題-->縣市+區域<input type="text" id="address"></br>
	<!--加分題(需chrome可用)--><input type="button" value="下載">
	<?php
	$conni=mysqli_connect('localhost','root','classforphp','2');	
	                                   //"帳號"    "密碼"   "資料庫名稱"
	mysqli_query($conni,"SET NAMES 'UTF8'");
	mysqli_query($conni,"SET CHARACTER SET UTF8");
	mysqli_query($conni,"SET CHARACTER_SET_RESULTS=UTF8'");
	mysqli_query($conni,"SET character_set_connection=utf8, character_set_results=utf8, character_set_client=binary");

	?>
</body>
</body>
</html>


