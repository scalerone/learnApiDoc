<?php
/** 
 * @apiDefine CODE_200
 * @apiSuccessExample {json} Response 200 Example
 *   HTTP/1.1 200 OK
 *   {
 *     "code": 200,
 *     "data": {},
 *     "msg": "xxx",
 *     "url":""
 *   }
 */

/**
 * @apiDefine CODE_500
 * @apiErrorExample {json} Response 5XX Example
 *   HTTP/1.1 500 Internal Server Error
 *   {
 *     "code": 500
 *     "msg": "xxx"
 *   }
 */

/**
 * @apiDefine Data
 *
 * @apiParam {string} [firstname]  Optional Firstname of the User.
 * @apiParam {string} lastname     Mandatory Lastname.
 * @apiParam {string} country="cn" Mandatory with default value "DE".
 * @apiParam {number} [age=18]     Optional Age with default 18.
 */

/**
 * @api {POST} /api/test/hello[/:id] 继承例子example.php
 * @apiName test api
 * @apiGroup Hello World
 * @apiVersion 1.0.0
 * @apiDescription just a test
 * @apiPermission anyone
 * @apiSampleRequest http://test.github.com
 *
 * @apiParam {number} [id] any id
 * @apiUse Data
 *
 *
 * @apiUse CODE_200
 * @apiUse CODE_500
 */