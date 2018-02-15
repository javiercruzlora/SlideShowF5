<?php
/**
 * @copyright	Copyright (C) 2015 Javier Cruz Lora. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
$doc = JFactory::getDocument();
?>
<div class ="f5ShowFullModule <?php if ($list["f5LoadShow"] == 1) { ?><?php if ($list["f5SlideAllWindow"]) { ?>f5LoadAll<?php }else{ ?>f5Load<?php } ?><?php } ?>" id = "f5ShowFullModule<?php echo $module->id ?>" style=" opacity: <?php echo $list["f5SlideOpacity"]; ?>; <?php if ($list["f5ModuleBackgroundImage"]) {?> background-image: url("<?php echo $list["f5ModuleBackgroundImage"];?>") <?php } elseif ($list["f5ModuleBackgroundColor"]) {?> background-color: <?php echo $list["f5ModuleBackgroundColor"]; } else{} ?>;">
<div class ="f5ShowFullSlide" id = "f5ShowFullSlide<?php echo $module->id ?>">
<?php if ($list["f5LineTimeShow"] == 1) { ?>
<div id="lineload<?php echo $module->id ?>"><div class="lineload"><span style="width:10%"></span></div></div>
<?php } ?>
    <ul class="slideshow<?php echo $module->id ?> slideshow">
        <?php 
		   $slide = $list[0];
            $i=0;
            foreach ($slide as $item) {
				if (!empty($list["f5GoogleFont"])) { 
					$doc->addStyleSheet( '//fonts.googleapis.com/css?family='.$list["f5GoogleFont"].'' );
				}
				if (!empty($slide[$i][0]["f5GoogleTypeFont"])) { 
					$doc->addStyleSheet( '//fonts.googleapis.com/css?family='.$slide[$i][0]["f5GoogleTypeFont"].'' );
				}
				?>
				<li class="f5SlideLi f5SlideLi<?php echo $module->id ?> <?php if ($i == 0) {echo 'active';}; ?>" id="f5SlideLi<?php echo $i ?>" data-slide="<?php echo $i; ?>">
                    <div class="f5ShowSlideDivLi">
						<?php if ($slide[$i][0]["f5SelectType"] == 1) { ?>
                        
                        <div <?php if ($slide[$i][0]["f5UrlBackgr"]) { ?>onclick="location.href='http://www.<?php echo $slide[$i][0]["f5UrlBackgr"]; ?>';"<?php } ?> class = "f5FirstDivElement" style=" <?php if ($slide[$i][0]["f5UrlBackgr"]) { ?>cursor: pointer;<?php } ?> width: 100%; height:100%; background:<?php echo $slide[$i][0]["f5BackgrColor"]; ?>; opacity:<?php echo $slide[$i][0]["f5OpacityBackgr"]; ?>">
    				</div>
                        <?php } ?>
                        <?php if ($slide[$i][0]["f5SelectType"] == 2) { ?>
                                    <div <?php if ($slide[$i][0]["f5UrlImg"]) { ?>onclick="location.href='http://www.<?php echo $slide[$i][0]["f5UrlImg"]; ?>';"<?php } ?> id = 'f5FirstDivImage<?php echo $module->id ?>' class= "f5FirstDivImage" width="100%" style="background-image: url(<?php echo $slide[$i][0]["f5Img"]; ?>); background-size:cover; background-position:center; opacity:<?php echo $slide[$i][0]["f5OpacityImg"]; ?>;"></div>
                        <?php } ?>
                         <?php if ($slide[$i][0]["f5SelectType"] == 5) { ?>
                                    <?php echo $slide[$i][0]["f5Html"]; ?>
                        <?php } ?>
                    </div>
                </li>
				<?php
				$i++;
            }
            ?>
    </ul>
     </div>
         <?php if ($list["f5SlideShowIdicators"] == 1) { ?>
        <ol class="f5slide-indicators">
            <?php
            $z=0;
            foreach ($list[0] as $item) { ?>
                <li data-target="#myCarousel" data-indicators="<?php echo $z; ?>" class = "itemidicators<?php echo $z; ?> <?php if ($z == 0) {echo 'active';}; ?>"></li>
            <?php
                $z++;
            } ?>
        </ol>
     <?php } ?>
</div>