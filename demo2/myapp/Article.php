<?php
namespace app\www\controller;

use app\www\model\ArticleModel;

/**
 * @title 资讯接口
 * @description 接口说明
 */
class Article extends BaseController
{

	public function _initialize(){
		parent::_initialize();

	}
	public function index(){

	    return $this->fetch();
	}
	/**
	 * @api {get} /article/listAjax 资讯列表接口
	 * @apiVersion 0.1.0
	 * @apiName article-list
	 * @apiGroup Article
	 * 
	 *
	 * @apiParam {int} page=1 页数
	 * @apiParam {int} [pageSize=10] 分页大小
	 * @apiParam {String} keyword  关键词
	 * @apiParam {String} sortType 排序类型
	 *
	 * @apiSuccess (data) {int} page 当前页
	 * @apiSuccess (data) {int} pcount 最后一页
	 * @apiSuccess (data) {int} count  总条数
	 * @apiSuccess (data) {array} data  数据
	 *
	 * @apiSuccessExample {json} 成功返回
	 *     HTTP/1.1 200 OK
	 *     {
	 *       "code": 200,
	 *       "data": {},
	 *       "msg": "xxx",
	 *       "url":""
	 *     }
	 * @apiErrorExample {json} 失败返回
	 *   HTTP/1.1 200 OK
	 *   {
	 *     "code": 5xx
	 *     "msg": "xxx"
	 *   }
	 *
	 */
	public function listAjax(){
		
	    $page = input('page/d',1);
	    $pageSize = input('pageSize/d',10);
	    $keyword = input('keyword/s','');
	    $sortType = input('sortType/s','');
	    $where = [];
	    $order = '';
	    if($keyword){
	       $where['a.title|a.content|'] =['like','%'.trim($keyword).'%'];
	    }
	    if($sortType){
	        $order = 'a.updated_at desc';
	    }
	    
        $articleModel = new ArticleModel();
	    $page  = $articleModel->getPageList($page,$pageSize,$where,'',$order);

	    return getJsonPage($page);		
	}
	
	public function detail($id){
	    if(empty($id)){
	      return  $this->fetch('/404');
	    }
	    $articleModel = new ArticleModel();
	    $data = $articleModel->getArticleById($id);
	    $this->assign('data',$data);
	    return $this->fetch();
	}
	
	public function hotlistAjax(){
	    $page = input('page/d',1);
	    $pageSize = input('pageSize/d',6);
	    $where['a.top'] = 1;
	    $articleModel = new ArticleModel();
	    $page  = $articleModel->getPageList($page,$pageSize,$where);
	
	    return getJsonPage($page);
	}
	
	

}