<?php
	/**
	* CSS Parser for CSS Compatability API
	* @author: Sam Bennett
	* @version: 0.1
	*/
	require_once 'rules.php';

	class cssParser {
		protected static $_instance;
		private static $used = array();
		private static $usedDisplay = array();
		private static $rules = array();
		private static $aSelectors = array();
		private static $rawCSS;
		public static $atCSS;
		public static $selectorsCSS;

		public function __construct() {
			global $rules;
			self::$rules = $rules;
			self::$rawCSS = file_get_contents('css.css');
			/* Remove Comments */
			self::$rawCSS = preg_replace('!/\*.*?\*/!s', '', self::$rawCSS);
		}

		public static function getInstance() {
			if(!self::$_instance) self::$_instance = new self();
			return self::$_instance;
		}
		public function getAtRules() {
			self::$atCSS = "";
			$tmpRules = array_merge(self::$rules['at-rules']['2.1'], self::$rules['at-rules']['3']);
			self::$used['at-types'] = array();
			self::$usedDisplay['at-types'] = array();
			foreach($tmpRules as $k => $v) {
				preg_match($v, self::$rawCSS, $matches);
				if(count($matches) > 0) {
					if(!in_array($k, self::$used['at-types'])) {
						self::$used['at-types'][] = $k;
						$tmpData = explode("{", $matches[0]);
						$matches[0] = preg_replace("/(.*?){/", "", $matches[0], 1);
						$matches[0] = preg_replace("/([}]*)$/", "", $matches[0], 1);
						$matches[0] = preg_replace("/(\t){1}/mi", "", $matches[0]);
						self::$usedDisplay['at-types'][] = array("type" => $k, "data" => $tmpData[0], "contents" => str_replace("\r\n", "", $matches[0]));
						self::$atCSS = self::$atCSS . $matches[0];
					}
				}
			}
		}
		public function getSelectors() {
			/* SELECTORS */
			self::addToUsed('selectors');
			/* COMBINATORS */
			self::addToUsed('combinators');
			/* ATTRIBUTE SELECTORS */
			self::addToUsed('attribute_selectors');
			/* PSEUDO CLASSES */
			self::addToUsed('pseudo_classes');
			/* PSEUDO ELEMENTS */
			self::addToUsed('pseudo_elements');
		}
		private static function addToUsed($name) {
			$tmpRules = array_merge(self::$rules[$name]['2.1'], self::$rules[$name]['3']);
			self::$used[$name] = array();
			self::$usedDisplay[$name] = array();
			foreach(self::$aSelectors as $i => $html) {
				foreach($tmpRules as $k => $v) {
					@preg_match($v, $html, $matches);
					if(!empty($matches) && !in_array($k, self::$used[$name])) {
						self::$used[$name][] = $k;
						self::$usedDisplay[$name][] = array("type" => $k, "data" => $html);
					}
				}
			}
		}
		public function preSelcCSS() {
			self::getAtRules();
			$tempCSS = self::$rawCSS;
			/* Remove at-types */
			$tmpRules = array_merge(self::$rules['at-rules']['2.1'], self::$rules['at-rules']['3']);
			foreach($tmpRules as $k => $v) $tempCSS = preg_replace($v, "", $tempCSS);
			$tempCSS = $tempCSS . self::$atCSS;
			/* Clean CSS */
			$tempCSS = preg_replace('/\n\s*\n/', "\n", $tempCSS); // ?
			/* Compress */
			$tempCSS = str_replace("\t", "", $tempCSS);
			$tempCSS = str_replace("\n", "", $tempCSS);
			$tempCSS = str_replace("\r", "", $tempCSS);
			/* Uncompress */
			$tempCSS = str_replace("}", "}\n", $tempCSS);
			/* Remove properties */
			$tempCSS = preg_replace('/\{[^\}]+\}/', '', $tempCSS);
			$tempCSS = preg_replace('/\t[a-zA-Z .-]*/', '', $tempCSS); // ?
			/* Clean CSS */
			self::$aSelectors = explode("\n", trim($tempCSS));
			foreach (self::$aSelectors as $k => $v) self::$aSelectors[$k] = trim($v);
			/* Store Selectors */
			self::$selectorsCSS = implode("\n", self::$aSelectors);
		}
		public function atCSS() {
			return self::$atCSS;
		}
		public function selCSS() {
			return self::$selectorsCSS;
		}
		public function rawCSS() {
			return self::$rawCSS;
		}
		public function used() {
			return self::$usedDisplay;
		}
	}
?>