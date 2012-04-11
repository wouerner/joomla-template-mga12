<?php
/**
 * @version                $Id: index.php 21518 2011-06-10 21:38:12Z chdemko $
 * @package                Joomla.Site
 * @subpackage	Templates.beez_20
 * @copyright        Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license                GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

// check modules
$showRightColumn        = ($this->countModules('position-3') or $this->countModules('position-6') or $this->countModules('position-8'));
$showbottom                        = ($this->countModules('position-9') or $this->countModules('position-10') or $this->countModules('position-11'));
$showleft                        = ($this->countModules('position-4') or $this->countModules('position-7') or $this->countModules('position-5'));

if ($showRightColumn==0 and $showleft==0) {
        $showno = 0;
}

JHtml::_('behavior.framework', true);

// get params
$color              = $this->params->get('templatecolor');
$logo               = $this->params->get('logo');
$navposition        = $this->params->get('navposition');
$app                = JFactory::getApplication();
$doc				= JFactory::getDocument();
$templateparams     = $app->getTemplate(true)->params;

$doc->addScript($this->baseurl.'/templates/beez_20/javascript/md_stylechanger.js', 'text/javascript', true);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
        <head>
                <jdoc:include type="head" />
                <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
                <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/mga12/css/dimensao.css" type="text/css" media="screen,projection" />
                <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/mga12/css/blog.css" type="text/css" media="screen,projection" />
                <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/mga12/css/menu.css" type="text/css" media="screen,projection" />
<?php
        $files = JHtml::_('stylesheet','templates/beez_20/css/general.css',null,false,true);
        if ($files):
                if (!is_array($files)):
                        $files = array($files);
                endif;
                foreach($files as $file):
?>
                <link rel="stylesheet" href="<?php echo $file;?>" type="text/css" />
<?php
                 endforeach;
        endif;
?>
<?php			if ($this->direction == 'rtl') : ?>
<?php				if (file_exists(JPATH_SITE . '/templates/beez_20/css/' . $color . '_rtl.css')) :?>
<?php				endif; ?>
<?php			endif; ?>
                <!--[if lte IE 6]>
                <link href="<?php echo $this->baseurl ?>/templates/beez_20/css/ieonly.css" rel="stylesheet" type="text/css" />

                <?php if ($color=="personal") : ?>
                <style type="text/css">
                #line
                {      width:98% ;
                }
                .logoheader
                {
                        height:200px;

                }
                #header ul.menu
                {
                display:block !important;
                      width:98.2% ;


                }
                 </style>
                <?php endif;  ?>
                <![endif]-->
                <!--[if IE 7]>
                        <link href="<?php echo $this->baseurl ?>/templates/beez_20/css/ie7only.css" rel="stylesheet" type="text/css" />
                <![endif]-->
                <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/beez_20/javascript/hide.js"></script>

                <script type="text/javascript">
                        var big ='<?php echo (int)$this->params->get('wrapperLarge');?>%';
                        var small='<?php echo (int)$this->params->get('wrapperSmall'); ?>%';
                        var altopen='<?php echo JText::_('TPL_BEEZ2_ALTOPEN',true); ?>';
                        var altclose='<?php echo JText::_('TPL_BEEZ2_ALTCLOSE',true); ?>';
                        var bildauf='<?php echo $this->baseurl ?>/templates/beez_20/images/plus.png';
                        var bildzu='<?php echo $this->baseurl ?>/templates/beez_20/images/minus.png';
                        var rightopen='<?php echo JText::_('TPL_BEEZ2_TEXTRIGHTOPEN',true); ?>';
                        var rightclose='<?php echo JText::_('TPL_BEEZ2_TEXTRIGHTCLOSE'); ?>';
                        var fontSizeTitle='<?php echo JText::_('TPL_BEEZ2_FONTSIZE'); ?>';
                        var bigger='<?php echo JText::_('TPL_BEEZ2_BIGGER'); ?>';
                        var reset='<?php echo JText::_('TPL_BEEZ2_RESET'); ?>';
                        var smaller='<?php echo JText::_('TPL_BEEZ2_SMALLER'); ?>';
                        var biggerTitle='<?php echo JText::_('TPL_BEEZ2_INCREASE_SIZE'); ?>';
                        var resetTitle='<?php echo JText::_('TPL_BEEZ2_REVERT_STYLES_TO_DEFAULT'); ?>';
                        var smallerTitle='<?php echo JText::_('TPL_BEEZ2_DECREASE_SIZE'); ?>';
                </script>

        </head>

        <body>

<div id="todo">

<!-- Inicio : Cabeçalho -->
<div id="cabecalho">
</div>
<!-- Fim : Cabeçalho -->


<!-- Inicio: Navegação dos Menus -->
 <div id="menu">
	<jdoc:include type="modules" name="menu" />
</div>


<?php if($this->countModules('menu_usuario')) : ?>
<div id="menu_usuario">
				<jdoc:include type="modules" name="menu_usuario" />
	</div>
<?php endif; ?>

<!-- Fim : Navegação dos Menus -->



<!-- Inicio : Conteudo -->
<div id="conteudo">
	<?php if($this->countModules('slideshow')) : ?>
		<div id="slideshow">
				<jdoc:include type="modules" name="slideshow" />
		</div>
	<?php endif; ?>

	<?php if($this->countModules('palavraCelula')) : ?>
		<div id="palavraCelula">
			<h2>Palavra de CÃ©lula</h2>
			<jdoc:include type="modules" name="palavraCelula" />
		</div>
	<?php endif; ?>

	<?php if($this->countModules('banner')) : ?>
		<div id="banner">
			<jdoc:include type="modules" name="banner" />
		</div>
	<?php endif; ?>


<div id="texto">	
<?php if($this->countModules('social')):?>	
			<jdoc:include type="modules" name="social" />
			<?php endif;?>
			<jdoc:include type="message" />
			<jdoc:include type="component" />

</div>
<!-- Fim : Conteudo -->

<!--Social -->


<?php if($this->countModules('facebook')) : ?>
	<div id="facebook">
				<jdoc:include type="modules" name="facebook" />
	</div>
<?php endif; ?>

<?php if($this->countModules('twitter')) : ?>
	<div id="twitter">
				<jdoc:include type="modules" name="twitter" />
	</div>
<?php endif; ?>


<!-- Inicio : Rodape  -->
<div id="rodape">
<?php if($this->countModules('rodape')):?>	
<p>
<jdoc:include type="modules" name="rodape" />
</p>
<?php endif;?>

<!-- Fim : Rodape -->
</div>
<jdoc:include type="modules" name="debug" />

<!-- fim do velho conteudo -->

        </body>
</html>
