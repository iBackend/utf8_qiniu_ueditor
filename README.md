#Ueditor结合七牛云存储上传图片、附件和图片在线管理的实现

#####(1)安装使用

>[1]下载安装包-并解压到自己的目录

>[2]修改配置文件
  - 修改Ueditor根目录下的ueditor.config.js其中的配置如下
	,imagePath:"七牛分配的域名或者你绑定的域名"
	,savePath: ['your bucket']

	,filePath:"七牛分配的域名或者你绑定的域名"   
	,imageManagerPath:"七牛分配的域名或者你绑定的域名"
  
  - 修改根目录下/php/conf.php中的代码
  	$QINIU_ACCESS_KEY	= 'your ak';
	$QINIU_SECRET_KEY	= 'your sk';

	$BUCKET = "your bucket";

>[3]OK了，下边就是你添加ueditor在你的网站上了，跟官方配置是一样的

###效果图

