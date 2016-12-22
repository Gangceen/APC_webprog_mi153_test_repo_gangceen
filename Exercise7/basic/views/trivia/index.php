<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<html>
<head>
<style>
body{


}</style>
</head>
<body>
<br>
<br>
<h1>Trivia</h1>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function()
{
	$("#show").click(function(){
		$("answers").toggle(500);
	});
});
</script>
<?php foreach ($trivia as $trivias): ?>
    <li>
        <?= Html::encode("{$trivias->trivia}") ?>:
        <h5>Answer: </h5>
        <answers style=display:none><?= Html::encode("({$trivias->answer})") ?></answers>
    </li>
    <br>
<?php endforeach; ?>
<button id="show">SEE ANSWERS</button>
</body>

