<?php /**  * @copyright	Copyright (C) 2010 JoomlaThemes.co - All Rights Reserved. **/
defined( '_JEXEC' ) or die( 'Restricted access' );
define( 'YOURBASEPATH', dirname(__FILE__) );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<?php require(YOURBASEPATH . DS . "functions.php"); ?>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/styles.css" type="text/css" />
</head>
<body class="background">    
<div id="main">
	<div id="wrapper">
	    <div id="header-wrapper"><div id="header">
        	<?php if ($this->countModules('logo')) : ?>
                <div class="logo">
                	<jdoc:include type="modules" name="logo" style="none" />
                </div>
            <?php else : ?>
            	<a href="<?php echo $this->baseurl ?>/"><img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/logo.png" border="0" class="logo"></a>
            <?php endif; ?>
            <div class="clr"></div>
            <?php if ($this->countModules('top')) : ?>
                <div class="top">
                    <jdoc:include type="modules" name="top"  style="none"/>
                </div>
            <?php endif; ?>                                      
        </div></div>
        	<?php if ($this->countModules('menu')) : ?>
        	<div id="navr"><div id="navl"><div id="nav">
		    	<jdoc:include type="modules" name="menu" style="none" />
			</div></div></div>
        	<?php endif; ?>         
  		<div id="message">
		    <jdoc:include type="message" />
		</div>
 		<div id="main-content">
        <div class="full">
					<?php if ($this->countModules('user1 or user2 or user3')) : ?>
                    <div id="mods1" class="spacer<?php echo $mainmod1_width; ?>">
                        <jdoc:include type="modules" name="user1" style="jaw" />
                        <jdoc:include type="modules" name="user2" style="jaw" />
                        <jdoc:include type="modules" name="user3" style="jaw" />
                    </div>
                    <?php endif; ?>            
                    <div id="comp_<?php echo $compwidth ?>">
                        <jdoc:include type="component" />
                        <?php include "html/template.php"; ?>
                    </div>
                    <?php if ($this->countModules('left')) : ?>
                    <div id="rightbar-w">
                    <div id="topr"><div id="topl"><div id="topc"></div></div></div>
                    <div id="rightbar">
                        <jdoc:include type="modules" name="left" style="jaw" />
                    </div>
                    <div id="botr"><div id="botl"><div id="botc"></div></div></div>
                    </div>
                    <?php endif; ?>                
		<div class="clr"></div>
        </div>
        </div>
		<?php if ($this->countModules('user4 or user5 or user6')) : ?>
		<div id="mods2" class="spacer<?php echo $mainmod2_width; ?>">
			<jdoc:include type="modules" name="user4" style="jaw" />
			<jdoc:include type="modules" name="user5" style="jaw" />
			<jdoc:include type="modules" name="user6" style="jaw" />
		</div>
		<?php endif; ?>
  </div>
<div id="botr"><div id="botl"><div id="botc"></div></div></div>  
</div>

<?php if ($this->countModules('user7 or user8 or user9 or user10')) : ?>
<div id="footer">
	<div class="footer-pad">        
        <div id="topr"><div id="topl"><div id="topc"></div></div></div>
		<div id="mods3" class="spacer<?php echo $mainmod3_width; ?>">
			<jdoc:include type="modules" name="user7" style="jaw" />
			<jdoc:include type="modules" name="user8" style="jaw" />
			<jdoc:include type="modules" name="user9" style="jaw" />
            <jdoc:include type="modules" name="user10" style="jaw" />
		</div>
        <div id="botr"><div id="botl"><div id="botc"></div></div></div>
  </div>    
</div>        
<?php endif; ?>
<div id="bottom">
        <?php if ($this->countModules('copyright')) : ?>
            <div class="copy">
                <jdoc:include type="modules" name="copyright"/>
            </div>
        <?php endif; ?>
            <div class="design">
            <a href="http://joomlathemes.co" target="_blank" title="free joomla templates">Joomla Template</a> designed by <a href="http://joomla-hosting.co" target="_blank" title="joomla hosting">Joomla Host</a></div>        
</div>
</body>
</html>