<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About the user';
$this->params['breadcrumbs'][] = $this->title;
?>
	<style>
		table, th, td {
			border: 4px solid black;
			color: #0039e6;
			height: 10%
			width: 50%;
		}
	</style>
<div class="site-about">
			<table id="table" align="center">
			<tr>
				<th>Field</th>
				<th>Information</th>
			</tr>
			<tr>
				<td>Name</td>
				<td>Gabriel Angelo Agito Ngceen</td>
			</tr>
			<tr>
				<td>Nickname:</td>
				<td>Gabby/Gab</td>
			</tr>
			<tr>
				<td>Birthdate:</td>
				<td>January 1, 2000</td>
			</tr>
			<tr>
				<td>Age:</td>
				<td>16</td>
			</tr>
			<tr>
				<td>Course:</td>
				<td>BS Information Technology, Specializing in mobile and internet technology</td>
			</tr>
			</table>
</div>
