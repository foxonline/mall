<?php
//非法访问
if (!defined('CO_BASE_CHECK')){
	header('HTTP/1.1 404 Not Found');
	header('Status: 404 Not Found');
	exit;
}

/**
 * Goods首页_控制器
 *
 * @package
 * @author			B.I.T
 * @copyright		Copyright (c) 2018 - 2019.
 * @license
 * @link
 * @since				Version 1.19
 */
include_once realpath(__DIR__.'/../').'/core/SELLER_Session.php';
include_once realpath(__DIR__.'/../').'/core/common.php';
// ------------------------------------------------------------------------
class GoodsController extends CO_Controller{
	
	protected $goods_model;
	
	/**
	 * 控制器初始化
	 */
	protected function _init(){
		//mw会话管理包
		$this->session=new SELLER_Session();
		//检验登录状态
		@checkonline($_SESSION['seller']['id']);
		$this->goods_model = $this->GetModel('Goods');
		//加载语言包
		$this->GetLang('sys');
	}
	
	/**
	 * 默认程序入口
	 */
	function run(){	
		$this->goods_index();
	}
	function goods_add(){
		//导航定位
		$this->session->set('left_menu_action', 'goods/goods_add');
		$data['brand'] = $this->goods_model->get_brands($_SESSION['seller']['id']);
		$data['unit'] = $this->goods_model->get_units($_SESSION['seller']['id']);
		$data['attr_key'] = $this->goods_model->get_attrs_key($_SESSION['seller']['id']);
		$data['category'] = $this->goods_model->get_categorys($_SESSION['seller']['id']);
		$this->render('goods/add',$data);
	}

	function ajax_get_attr_value(){
		$attr_key_id = $this->input->post('attr_id');
		$data = $this->goods_model->get_attrs_value($_SESSION['seller']['id'],$attr_key_id);
		echo json_encode($data);
	}

	function ajax_get_templet_key(){
		$category_id = $this->input->post('category_id');
		$data = $this->goods_model->get_templet_key($_SESSION['seller']['id'],$category_id);
		echo json_encode($data);
	}

	function goods_index(){
		//导航定位
		$this->session->set('left_menu_action', 'goods/goods_index');
		$this->render('goods/index');
	}

	function goods_category(){
		//导航定位
		$this->session->set('left_menu_action', 'goods/goods_category');
		$this->render('goods/category');
	}


	function getThemesUrl(){
		return HTTP_ROOT_PATH.'/'.VIEW_THEMES_PATH_NAME.'/'.$this->getThemes();
	}
}
?>