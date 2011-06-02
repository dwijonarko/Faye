<?php
	defined('__SITE_PATH') or exit('NO DIRECT SCRIPT ACCESS ALLOWED.');

	App::import('utility.*');
    App::import('libraries.*');
	App::import('libraries.UI.*');

	class IndexController extends Controller {
		public function index() {
            $product = new Product;
            $product->where(1);
			$crud = new CRUDe($product);
            
            $crudPage = $this->view->load('CRUD');
            $crudPage->CRUD_FORM = $crud->insert();
            
            echo $crudPage;
		}
	}