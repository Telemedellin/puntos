<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="telemedellin.tv">

	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link href='http://fonts.googleapis.com/css?family=Economica:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
	<link rel="icon" href="/images/favicon.ico" />
	<!--[if LTE IE 8]>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr.custom.95570.js"></script>
	<![endif]-->
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div class="container">
	<header>
		<div class="row">
			<div class="col-sm-8 col-md-8">
				<div id="logo"><?php echo CHtml::link( CHtml::image(Yii::app()->request->baseUrl . '/images/logo.png', 'Viaja a Suiza con Medellín 2018'), CHtml::normalizeUrl(Yii::app()->request->baseUrl) ); ?></div>
			</div>
			<div class="col-sm-4 col-md-4">
				<div class="row">
					<div class="ctn-btnParticipar col-sm-12 col-xs-6">
						<div class="btnParticipar"> Admin </a>
					</div>
					<div class="ctn_mainmenu col-sm-12 col-xs-6">
						<div id="mainmenu">
							<?php $this->widget('zii.widgets.CMenu',array(
								'items'=>array(
									array('label'=>'Inicio', 'url'=>array('/admin/administrator/'), 'linkOptions' => array('class' => 'item1')),
									array('label'=>'Nuevo', 'url'=>array('/admin/administrator/create/'), 'linkOptions' => array('class' => 'item1')),
									array('label'=>'Ranking', 'url'=>array('/ranking'), 'linkOptions' => array('class' => 'item1')),
								),
							)); ?>
						</div>
					</div>
				</div>
			</div>
		</div>

	</header>
	<div class="ctn_main">
        <div id="content-page">
            <?php echo $content; ?>
        </div>
        <div id="progress"></div>
	</div>
	<footer class="container-fluid ctn_footer">
		<div  class="row">
			<a class="tm" href="http://www.telemedellin.tv" target="_blank">Telemedellín</a>
			<?php echo CHtml::link( 'Términos y condiciones', array('/terminos-y-condiciones'), array('class' => 'terminos' ) ); ?> <span>contacto@concursomedellin2018.com</span>
		</div>
	</footer>
</div>

<?php Yii::app()->getClientScript()->registerCoreScript('jquery'); ?>
<?php Yii::app()->getClientScript()->registerScriptFile( Yii::app()->getBaseUrl().'/css/libs/bootstrap/js/bootstrap.min.js' , CClientScript::POS_END);?>
<?php Yii::app()->getClientScript()->registerScriptFile( Yii::app()->getBaseUrl().'/js/script.js' , CClientScript::POS_END);?>


</body>
</html>
