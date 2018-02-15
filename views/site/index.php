<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Gallery Video';
?>
<div class="site-index">
<?php foreach($data as $datas):?>
	<div class="movie-card">
		<div class="movie-header gambar" style="background:url(<?php echo $datas->link_image;?>)">
			<div class="header-icon-container">
            <a href="index.php?r=site/view&id=<?php echo $datas->id ;?>"/>
					<i class="material-icons header-icon"></i>
				</a>
			</div>
		</div><!--movie-header-->
		<div class="movie-content">
			<div class="movie-content-header">
			 <a href="index.php?r=site/view&id=<?php echo $datas->id ;?>"/>
					<h3 class="movie-title"><?php echo $datas->judul?></h3>
				</a>
				<div class="imax-logo"></div>
			</div>
			<div class="movie-info">
				<div class="info-section">
					<label>Desc</label>
					<span class="anu"><?php echo $datas->deskripsi?></span>
				</div><!--date,time-->
			</div>
		</div><!--movie-content-->
	</div><!--movie-card-->
<?php endforeach?>	

<div class="container">
   <div class="pager">
   <?php echo \yii\widgets\LinkPager::widget([
       'pagination' => $pager
   ]);
   ?>
   </div>
</div>
