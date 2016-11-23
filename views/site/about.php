<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
      <style>
                body {
                        background: #fff;
                }
		.casilla {
			width: 150px;
			height: 150px;
			text-align: center;
			line-height: 150px;
			font-size: 36pt;
			float: left;
			color: #1b1b1b;
		}
		.casilla:nth-child(even) {
			background: #141414;
			color: white;
		}
		.tablero {
			background: #f7f7f7;
			width: 1050px;
			overflow: hidden;
			margin: auto;
			box-shadow: 0px 0px 20px #ccc;
		}
	</style>
<div class="site-about">
    <h1></h1>

    <div class="tablero">
		<?php
		$i = 1;
		while ($i <= 35) {
			echo "<div class=\"casilla\">".$i."</div>";
			$i++;
		}
		?>
	</div>

   
</div>
