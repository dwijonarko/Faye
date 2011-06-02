<?php
	defined('__SITE_PATH') or exit('NO DIRECT SCRIPT ACCESS ALLOWED.');

	class UIBreadcrumb extends ul {
		public $separator = ' » ';
		
		public function __construct($lists = array(), $attr = array()) {
			parent::__construct($attr);
			
			$this->addClass('UI-Breadcrumb');			
			foreach($lists as $link => $list) {
				HTML('li')->append(
					HTML('a', array('href' => $link))->append(
						$list
					)
				)->appendTo($this);
				
				$this->append($this->separator);
			}
		}
		
		protected function getStyles() {
			return array_merge(parent::getStyles(), array(
				'UI/UI.css',
			));
		}
		
		public function render() {
			$this->removeLastChild();
			
			return parent::render();
		}
	}