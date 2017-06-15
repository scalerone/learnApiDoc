/**
 * watch.js
 * Created by lincoln on 16-1-6.
 */
var gaze = require('gaze');
var exec = require('child_process').exec;
var fs = require('fs')


function init(){
    fs.mkdirSync('./api');
    fs.mkdirSync('./doc');
    createConfigureFile();
    beginWatch();
}
/**
{
  "name": "测试",
  "version": "0.0.1",
  "description": "API文档测试",
  "title": "API文档测试",
  "url" : "http://121.41.44.218",
  "sampleUrl" : "http://121.41.44.218",
  "template":{
    "forceLanguage":"zh-cn"
  }
}
*/

function createConfigureFile(){
    var configure = {
      "name": "测试",
      "version": "0.0.1",
      "description": "API文档测试",
      "title": "API文档测试",
      "url" : "http://xxxxxx",
      "sampleUrl" : "http://xxx",
      "template":{
        "forceLanguage":"zh-cn"
      }
    }
    fs.writeFileSync('./api/apidoc.json',JSON.stringify(configure));
}

function beginWatch(){
    gaze('./api/*.*',function(error,watcher){
     this.on('all', function(event, filepath) {
        console.log(filepath + ' was ' + event);
        runGeneartion();
      })
    });
}

function runGeneartion(){
    var com = exec('apidoc -i ./api -o ./doc ')
    com.stdout.on('data', function (data) {
        console.log("生成Api->"+data);
    });

    com.stderr.on('data', function (data) {
        console.log('生成错误啦->' + data);
    });
}

if(fs.existsSync('./api') && fs.existsSync('./doc')){
    beginWatch();
}else{
    init();
}