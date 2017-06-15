/*
 * 继承 Example
 *
 * This is a extend example for apiDoc.
 * Documentation blocks without @api (like this block) will be ignored.
 */

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
 * @api {get/post} /user/:id  获取用户信息
 * @apiName  user-info
 * @apiGroup User2
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
 * @api {get} /user/name 修改用户信息
 * @apiName user-edit
 * @apiGroup User2
 *
 * @apiParam {int} id 用户ID
 * @apiSuccess {String} firstname 用户姓
 * @apiSuccess {String} lastname  用户名
 *
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK
 *
 * @apiUse UserNotFoundError
 */