<?php
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */
?>

	<header class="main-header">
	<nav class="navbar navbar-static-top">
		<div class="container">
		<div class="navbar-header">
			<a href="index.php" class="navbar-brand">
				<div class="row">
					<div class="responsive">
						<div class="col-xs-1">
							<?= Html::img('@web/images/makarti.png', ['style' => 'width: 40px; margin-top: -5px']); ?>
							<div>&nbsp;</div>
						</div>
					</div>
					<div class="col-xs-11">
						<div class="responsive-show">
							<div class="row">
								<div class="col-xs-3">
									<?= Html::img('@web/images/makarti.png', ['style' => 'width: 40px; margin-top: -5px']); ?>
								</div>
								<div class="col-xs-9">
									<span class="responsive">Sistem Informasi Pelayanan Kerumahtanggaan</span> <b> SiPEKA LAN RI</b> <div>&nbsp;</div>
								</div>
							</div>
						</div>
						<div class="responsive">
							<span class="responsive">Sistem Informasi Pelayanan Kerumahtanggaan</span> <b> SiPEKA</b> <div>&nbsp;</div>
						</div>
					</div>
				</div>
			</a>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
			<i class="fa fa-bars"></i>
			</button>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse pull-right" id="navbar-collapse">
			<ul class="nav navbar-nav">
			<li><a href="<?= Url::to(['site/index']); ?>"> <i class="fa fa-home"></i> Home </a></li>
			<li><a href="<?= Url::to(['site/tentang']); ?>"> <i class="fa fa-info-circle"></i> Tentang SiPEKA </a></li>
			<li><a href="<?= Url::to(['site/regulasi']); ?>"><i class="fa fa-legal"></i> Regulasi</a></li>

			</ul>
			<form class="navbar-form navbar-left" role="search">
			<?= Html::beginForm(['site/pencarian'], 'get', ['enctype' => 'multipart/form-data','class'=>'navbar-form navbar-left']) ?>
			<?php if (isset($_GET['kode_pelacakan'])){
				$kode_pelacakan = $_GET['kode_pelacakan']; 
			} else{
				$kode_pelacakan = null;
			}
			?>
			<div class="form-group">
				<input style="width: 140px" type="text" class="form-control" name="kode_pelacakan" value="<?= $kode_pelacakan ?>" id="navbar-search-input" placeholder=" Kode Pelacakan">
				<button type="submit" class="btn btn-warning btn-flat">
    				<i class="fa fa-search"></i>
				</button>
			</div>
			<?= Html::endForm() ?>
		</div>

		<!-- /.navbar-custom-menu -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	</header>
