<?php
/**
 * @copyright	Copyright (C) 2015 Javier Cruz Lora. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
abstract class mod_f5showslideHelper
{	
	public static function getList(&$params, $module)
	{
		$document = JFactory::getDocument();
		$results = array();
		$results["f5SlideTransAuto"] = htmlspecialchars($params->get('f5SlideTransAuto'));
		$results["f5SlideTransType"] = htmlspecialchars($params->get('f5SlideTransType'));
		$results["f5TransSpeed"] = htmlspecialchars($params->get('f5TransSpeed'));
		$results["f5TransTime"] = htmlspecialchars($params->get('f5TransTime'));
		$results["f5SlideWidthWindow"] = htmlspecialchars($params->get('f5SlideWidthWindow'));
		$results["f5SlideAllWindow"] = htmlspecialchars($params->get('f5SlideAllWindow'));
		$results["f5Slidetop"] = htmlspecialchars($params->get('f5Slidetop'));
		$results["f5SlideShowArrow"] = htmlspecialchars($params->get('f5SlideShowArrow'));
		$results["f5SlideShowDownArrow"] = htmlspecialchars($params->get('f5SlideShowDownArrow'));
		$results["f5SlideAnimateDownArrow"] = htmlspecialchars($params->get('f5SlideAnimateDownArrow'));
		$results["f5SlideShowIdicators"] = htmlspecialchars($params->get('f5SlideShowIdicators'));
		$results["f5SlideFixedIdicators"] = htmlspecialchars($params->get('f5SlideFixedIdicators'));
		$results["f5SlideArrowIdicators"] = htmlspecialchars($params->get('f5SlideArrowIdicators'));
		$results["f5SlideShowRigthLeft"] = htmlspecialchars($params->get('f5SlideShowRigthLeft'));
		$results["f5SlideOpacity"] = htmlspecialchars($params->get('f5SlideOpacity'));
		$results["f5SlidePadding"] = htmlspecialchars($params->get('f5SlidePadding'));
		$results["f5SlidePaddingHeight"] = htmlspecialchars($params->get('f5SlidePaddingHeight'));
		$results["f5ModuleBackgroundColor"] = htmlspecialchars($params->get('f5ModuleBackgroundColor'));
		$results["f5ModuleBackgroundImage"] = $params->get('f5ModuleBackgroundImage');
		$results["f5ModuleBackgroundAnimate"] = $params->get('f5ModuleBackgroundAnimate');
		$results["f5BackgroundAnimateSpeed"] = $params->get('f5BackgroundAnimateSpeed');
		$results["f5SlideWidth"] = htmlspecialchars($params->get('f5SlideWidth'));
		$results["f5SlidePercentWidth"] = htmlspecialchars($params->get('f5SlidePercentWidth'));
		$results["f5SlideRatio"] = htmlspecialchars($params->get('f5SlideRatio'));
		$results["f5SlideHeight"] = htmlspecialchars($params->get('f5SlideHeight'));
		$results["f5DefaultFont"] = htmlspecialchars($params->get('f5DefaultFont'));
		$results["f5GoogleFont"] = htmlspecialchars($params->get('f5GoogleFont'));
		$results["f5ColtrolColorSlide"] = htmlspecialchars($params->get('f5ColtrolColorSlide'));
		$results["f5LoadShow"] = htmlspecialchars($params->get('f5LoadShow'));
		$results["f5LineTimeShow"] = htmlspecialchars($params->get('f5LineTimeShow'));
		$results["f5LineTimeColor"] = htmlspecialchars($params->get('f5LineTimeColor'));
		$results["f5LinetimeHeight"] = htmlspecialchars($params->get('f5LinetimeHeight'));
		$datos = json_decode($params->get('f5multifieldshow'),true);
		 $i=0;
            foreach ($datos as $item) {
				$z=0;
				foreach ($item as $element) {
					$results[0][$i][$z]["f5SelectType"]= isset($datos[$i][$z]["f5SelectType"]) ? htmlspecialchars($datos[$i][$z]["f5SelectType"]) : null;
					$results[0][$i][$z]["f5SlideName"]= isset($datos[$i][$z]["f5SlideName"]) ? htmlspecialchars($datos[$i][$z]["f5SlideName"]) : null ;
					$results[0][$i][$z]["f5TransTimeSlide"]= isset($datos[$i][$z]["f5TransTimeSlide"]) ? htmlspecialchars($datos[$i][$z]["f5TransTimeSlide"]) : null ;
					$results[0][$i][$z]["f5OnceSlideTransType"]= isset($datos[$i][$z]["f5OnceSlideTransType"]) ? htmlspecialchars($datos[$i][$z]["f5OnceSlideTransType"]) : null ;
					$results[0][$i][$z]["f5OnceSlideTransTime"]= isset($datos[$i][$z]["f5OnceSlideTransTime"]) ? htmlspecialchars($datos[$i][$z]["f5OnceSlideTransTime"]) : null ;
					$results[0][$i][$z]["f5Name"]= isset($datos[$i][$z]["f5Name"]) ? htmlspecialchars($datos[$i][$z]["f5Name"]) : null ;
					$results[0][$i][$z]["f5Img"]= isset($datos[$i][$z]["f5Img"]) ? htmlspecialchars($datos[$i][$z]["f5Img"]) : null ;
					$results[0][$i][$z]["f5BackgrColor"]= isset($datos[$i][$z]["f5BackgrColor"]) ? htmlspecialchars($datos[$i][$z]["f5BackgrColor"]) : null ;
					$results[0][$i][$z]["f5Text"]= isset($datos[$i][$z]["f5Text"]) ? htmlspecialchars($datos[$i][$z]["f5Text"]) : null ;
					$results[0][$i][$z]["f5Html"]= isset($datos[$i][$z]["f5Html"]) ? htmlspecialchars($datos[$i][$z]["f5Html"]) : null ;
					$results[0][$i][$z]["f5SelectVideo"]= isset($datos[$i][$z]["f5SelectVideo"]) ? htmlspecialchars($datos[$i][$z]["f5SelectVideo"]) : null ;
					$results[0][$i][$z]["f5AlignText"]= isset($datos[$i][$z]["f5AlignText"]) ? htmlspecialchars($datos[$i][$z]["f5AlignText"]) : null ;
					$results[0][$i][$z]["f5UrlVideo"]= isset($datos[$i][$z]["f5UrlVideo"]) ? htmlspecialchars($datos[$i][$z]["f5UrlVideo"]) : null ;
					$results[0][$i][$z]["f5WidthBackgr"]= isset($datos[$i][$z]["f5WidthBackgr"]) ? htmlspecialchars($datos[$i][$z]["f5WidthBackgr"]) : null ;
					$results[0][$i][$z]["f5SelectTypeFont"]= isset($datos[$i][$z]["f5SelectTypeFont"]) ? htmlspecialchars($datos[$i][$z]["f5SelectTypeFont"]) : null ;
					$results[0][$i][$z]["f5GoogleTypeFont"]= isset($datos[$i][$z]["f5GoogleTypeFont"]) ? htmlspecialchars($datos[$i][$z]["f5GoogleTypeFont"]) : null ;
					$results[0][$i][$z]["f5WidthText"]= isset($datos[$i][$z]["f5WidthText"]) ? htmlspecialchars($datos[$i][$z]["f5WidthText"]) : null ;
					$results[0][$i][$z]["f5WidthHtml"]= isset($datos[$i][$z]["f5WidthHtml"]) ? htmlspecialchars($datos[$i][$z]["f5WidthHtml"]) : null ;
					$results[0][$i][$z]["f5WidthImg"]= isset($datos[$i][$z]["f5WidthImg"]) ? htmlspecialchars($datos[$i][$z]["f5WidthImg"]) : null ;
					$results[0][$i][$z]["f5WidthVideo"]= isset($datos[$i][$z]["f5WidthVideo"]) ? htmlspecialchars($datos[$i][$z]["f5WidthVideo"]) : null ;
					$results[0][$i][$z]["f5RatioVideo"]= isset($datos[$i][$z]["f5RatioVideo"]) ? htmlspecialchars($datos[$i][$z]["f5RatioVideo"]) : null ;
					$results[0][$i][$z]["f5HeightBackgr"]= isset($datos[$i][$z]["f5HeightBackgr"]) ? htmlspecialchars($datos[$i][$z]["f5HeightBackgr"]) : null ;
					$results[0][$i][$z]["f5HeightText"]= isset($datos[$i][$z]["f5HeightText"]) ? htmlspecialchars($datos[$i][$z]["f5HeightText"]) : null ;
					$results[0][$i][$z]["f5HeightHtml"]= isset($datos[$i][$z]["f5HeightHtml"]) ? htmlspecialchars($datos[$i][$z]["f5HeightHtml"]) : null ;
					$results[0][$i][$z]["f5HeightImg"]= isset($datos[$i][$z]["f5HeightImg"]) ? htmlspecialchars($datos[$i][$z]["f5HeightImg"]) : null ;
					$results[0][$i][$z]["f5HeightVideo"]= isset($datos[$i][$z]["f5HeightVideo"]) ? htmlspecialchars($datos[$i][$z]["f5HeightVideo"]) : null ;
					$results[0][$i][$z]["f5PrevImg"]= isset($datos[$i][$z]["f5PrevImg"]) ? htmlspecialchars($datos[$i][$z]["f5PrevImg"]) : null ;
					$results[0][$i][$z]["f5ImgVideo"]= isset($datos[$i][$z]["f5ImgVideo"]) ? htmlspecialchars($datos[$i][$z]["f5ImgVideo"]) : null ;
					$results[0][$i][$z]["f5Autoplay"]= isset($datos[$i][$z]["f5Autoplay"]) ? htmlspecialchars($datos[$i][$z]["f5Autoplay"]) : null ;
					$results[0][$i][$z]["f5Controls"]= isset($datos[$i][$z]["f5Controls"]) ? htmlspecialchars($datos[$i][$z]["f5Controls"]) : null ;
					$results[0][$i][$z]["f5AutoplayNext"]= isset($datos[$i][$z]["f5AutoplayNext"]) ? htmlspecialchars($datos[$i][$z]["f5AutoplayNext"]) : null ;
					$results[0][$i][$z]["f5SizeText"]= isset($datos[$i][$z]["f5SizeText"]) ? htmlspecialchars($datos[$i][$z]["f5SizeText"]) : null ;
					$results[0][$i][$z]["f5ColorText"]= isset($datos[$i][$z]["f5ColorText"]) ? htmlspecialchars($datos[$i][$z]["f5ColorText"]) : null ;
					$results[0][$i][$z]["f5OpacityBackgr"]= isset($datos[$i][$z]["f5OpacityBackgr"]) ? htmlspecialchars($datos[$i][$z]["f5OpacityBackgr"]) : null ;
					$results[0][$i][$z]["f5OpacityImg"]= isset($datos[$i][$z]["f5OpacityImg"]) ? htmlspecialchars($datos[$i][$z]["f5OpacityImg"]) : null ;
					$results[0][$i][$z]["f5OpacityText"]= isset($datos[$i][$z]["f5OpacityText"]) ? htmlspecialchars($datos[$i][$z]["f5OpacityText"]) : null ;
					$results[0][$i][$z]["f5PositionTopSelect"]= isset($datos[$i][$z]["f5PositionTopSelect"]) ? htmlspecialchars($datos[$i][$z]["f5PositionTopSelect"]) : null ;
					$results[0][$i][$z]["f5PositionTopPx"]= isset($datos[$i][$z]["f5PositionTopPx"]) ? htmlspecialchars($datos[$i][$z]["f5PositionTopPx"]) : null ;
					$results[0][$i][$z]["f5PositionLeftSelect"]= isset($datos[$i][$z]["f5PositionLeftSelect"]) ? htmlspecialchars($datos[$i][$z]["f5PositionLeftSelect"]) : null ;
					$results[0][$i][$z]["f5PositionLeftPx"]= isset($datos[$i][$z]["f5PositionLeftPx"]) ? htmlspecialchars($datos[$i][$z]["f5PositionLeftPx"]) : null ;
					$results[0][$i][$z]["f5SelectTypeIn"]= isset($datos[$i][$z]["f5SelectTypeIn"]) ? htmlspecialchars($datos[$i][$z]["f5SelectTypeIn"]) : null ;
					$results[0][$i][$z]["f5SelectTypeOut"]= isset($datos[$i][$z]["f5SelectTypeOut"]) ? htmlspecialchars($datos[$i][$z]["f5SelectTypeOut"]) : null ;
					$results[0][$i][$z]["f5InTimeTransition"]= isset($datos[$i][$z]["f5InTimeTransition"]) ? htmlspecialchars($datos[$i][$z]["f5InTimeTransition"]) : null ;
					$results[0][$i][$z]["f5InTimeSlide"]= isset($datos[$i][$z]["f5InTimeSlide"]) ? htmlspecialchars($datos[$i][$z]["f5InTimeSlide"]) : null ;
					$results[0][$i][$z]["f5VisibilityTime"]= isset($datos[$i][$z]["f5VisibilityTime"]) ? htmlspecialchars($datos[$i][$z]["f5VisibilityTime"]) : null ;
					$results[0][$i][$z]["f5OutTimeTransition"]= isset($datos[$i][$z]["f5OutTimeTransition"]) ? htmlspecialchars($datos[$i][$z]["f5OutTimeTransition"]) : null ;
					$results[0][$i][$z]["f5UrlBackgr"]= isset($datos[$i][$z]["f5UrlBackgr"]) ? htmlspecialchars($datos[$i][$z]["f5UrlBackgr"]) : null ;
					$results[0][$i][$z]["f5UrlImg"]= isset($datos[$i][$z]["f5UrlImg"]) ? htmlspecialchars($datos[$i][$z]["f5UrlImg"]) : null ;
					$results[0][$i][$z]["f5UrlText"]= isset($datos[$i][$z]["f5UrlText"]) ? htmlspecialchars($datos[$i][$z]["f5UrlText"]) : null ;
					$z++;
				}
				$i++;
            }
		
		$results["f5IdModule"] = $module->id;
		$f5Options = $results;
		if(($results["f5ModuleBackgroundColor"])==='0'){
			$f5LoadBackgroundColor = '#000';
		}else{
			$f5LoadBackgroundColor = $results["f5ModuleBackgroundColor"];
		}
		if($results["f5LoadShow"] == 'true'){
			if($results["f5SlideAllWindow"] == 'true'){
				$f5LoadSlide = $f5LoadSlide = '$(".f5ShowFullModule").css("width", $(window).width());$(".f5ShowFullModule").css("height", $(window).height());';
			}else{
				$f5LoadSlide = 'var f5WhidthModule = $(".f5ShowFullModule").parent().width();$(".f5ShowFullModule").css("width", f5WhidthModule);$(".f5ShowFullSlide").css("height", "'.$results["f5SlideHeight"].'");';
			}
		}else{
			$f5LoadSlide = 'var f5WhidthModule = $(".f5ShowFullModule").parent().width();$(".f5ShowFullModule").css("width", f5WhidthModule);$(".f5ShowFullModule").css("height", "'.$results["f5SlideHeight"].'");';
		}
		$f5showslideconfig[$module->id]  = '(function($){'.$f5LoadSlide.';$(document).ready(function(){var f5jqueryuiinterval= setInterval(function(){if ($.isFunction($.widget )){$(".slideshow'.$module->id.'").f5showslide({opts:'.json_encode($results).',f5SlideTransAuto:'.$results["f5SlideTransAuto"].',f5baseurl:"'.JURI::root().'",f5SlideTransType:"'.$results["f5SlideTransType"].'",f5TransSpeed:'.$results["f5TransSpeed"].',f5SlideWidthWindow:'.$results["f5SlideWidthWindow"].',f5SlideAllWindow:'.$results["f5SlideAllWindow"].',f5Slidetop:"'.$results["f5Slidetop"].'",f5SlideShowArrow:'.$results["f5SlideShowArrow"].',f5SlideShowDownArrow:'.$results["f5SlideShowDownArrow"].',f5SlideAnimateDownArrow:'.$results["f5SlideAnimateDownArrow"].',f5SlideShowIdicators:'.$results["f5SlideShowIdicators"].',f5SlideShowRigthLeft:'.$results["f5SlideShowRigthLeft"].',f5TransTime:'.$results["f5TransTime"].',f5SlidePercentWidth:"'.$results["f5SlidePercentWidth"].'",f5SlideWidth:"'.$results["f5SlideWidth"].'",f5SlideHeight:"'.$results["f5SlideHeight"].'",f5DefaultFont:"'.$results["f5DefaultFont"].'",f5GoogleFont:"'.$results["f5GoogleFont"].'",f5ColtrolColorSlide:"'.$results["f5ColtrolColorSlide"].'",f5SlideOpacity:"'.$results["f5SlideOpacity"].'", f5SlidePadding:"'.$results["f5SlidePadding"].'", f5SlidePaddingHeight:"'.$results["f5SlidePaddingHeight"].'",f5ModuleBackgroundColor:"'.$results["f5ModuleBackgroundColor"].'",f5ModuleBackgroundImage:"'.$results["f5ModuleBackgroundImage"].'",f5ModuleBackgroundAnimate:"'.$results["f5ModuleBackgroundAnimate"].'",f5LoadShow:'.$results["f5LoadShow"].',f5BackgroundAnimateSpeed:"'.$results["f5BackgroundAnimateSpeed"].'",f5SlideArrowIdicators:"'.$results["f5SlideArrowIdicators"].'",f5SlideFixedIdicators:"'.$results["f5SlideFixedIdicators"].'",f5LineTimeShow:"'.$results["f5LineTimeShow"].'",f5LineTimeColor:"'.$results["f5LineTimeColor"].'",f5LinetimeHeight:"'.$results["f5LinetimeHeight"].'"});$(".f5ShowFullModule .slideshow").css("display", "block");clearInterval(f5jqueryuiinterval);}},100);$("#f5ShowFullModule" + '.$module->id.').removeClass("f5Load");});
		})(jQuery);';
		foreach ($f5showslideconfig as $item) {
			$document->addScriptDeclaration($item);
		}
		return $results;
	}
}