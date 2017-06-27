<?php
namespace app\www\controller;



class Demo
{


/**
 * @apiDefine UserNotFoundError
 *
 * @apiError UserNotFound The <code>id</code> of the User was not found
 *
 * @apiErrorExample Error-Response:
 *     HTTP/1.1 404 Not Found
 *     {
 *       "error": "用户未找到"
 *     }
 */

/**
 * @api {get/post} /demo/info  获取用户信息
 * @apiName  user-info
 * @apiGroup User
 *
 * @apiParam {int} id 用户ID
 *
 * @apiSuccess {String} firstname 用户姓
 * @apiSuccess {String} lastname  用户名
 *
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK
 *     {
 *       "firstname": "John",
 *       "lastname": "Doe"
 *     }
 *
 * @apiUse UserNotFoundError
 */

/**
 * @api {get} /demo/edit 修改用户信息
 * @apiName user-edit
 * @apiGroup User
 *
 * @apiParam {int} id 用户ID
 * @apiParam {String} firstname 用户姓
 * @apiSuccess {String} firstname 用户姓
 * @apiSuccess {String} lastname  用户名
 *
 * @apiSuccessExample {json} 成功返回
 *     HTTP/1.1 200 OK
 *     {
 *       "code": 200,
 *       "data": {},
 *       "msg": "xxx",
 *       "url":""
 *     }
 *
 * @apiUse UserNotFoundError
 */
	public function edit(){

		//todo


	}

	
	/**
	 * @api {get} /demo/list 列表接口
	 * @apiVersion 0.0.2
	 * @apiName article-list
	 * @apiGroup Home
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
	public function list(){
		
	    //todo
	    return '';	
	}
	
	
	
	

}