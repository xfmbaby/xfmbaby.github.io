//参数代码
	setTimeout(function() {
    var visitCount = getCookie('visitCount');
    if (!visitCount) {
        visitCount = 0;
        triggerPopup(visitCount);
    } else {
        visitCount++;
        setCookie('visitCount', visitCount, 365);

        if (visitCount % 5 === 0) {
            triggerPopup(visitCount);
        }
    }
}, 20000);

function triggerPopup(count) {
    alert('管理员提示:\n选择【群聊】\n分享到【1个QQ群或微信群聊】\n即可解锁全部资源\n因为系统原因请立马转发此页到小号关闭此页就找不到了');
}

function setCookie(name, value, days) {
    var expires = '';
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = '; expires=' + date.toGMTString();
    }
    document.cookie = name + '=' + value + expires + '; path=/';
}

function getCookie(name) {
    var nameEQ = name + '=';
    var cookies = document.cookie.split(';');
    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
        while (cookie.charAt(0) === ' ') {
            cookie = cookie.substring(1, cookie.length);
        }
        if (cookie.indexOf(nameEQ) === 0) {
            return cookie.substring(nameEQ.length, cookie.length);
        }
    }
    return null;
}

window.alert = function (name) {
  const iframe = document.createElement('IFRAME');
  iframe.style.display = 'none';
  iframe.setAttribute('src', 'data:text/plain,');
  document.documentElement.appendChild(iframe);
  window.frames[0].window.alert(name);
  iframe.parentNode.removeChild(iframe);
};

var conf = {
	"path": "0",
	"census": "1",
	"deny": "0",
	"vdef": "8",
	"vadd": "8",
	"cache": "86400",
	"adth1": "分享好友后获得+8次的刷新机会<br><br>提示朋友打开才管用呦！<br><img src=\"images/here.png\" style=\"width:90%;margin-top:13px;border-radius:5px;\">",
	"adthe": "分享好友后获得+8次的刷新机会<br><br>提示朋友打开才管用呦！",
	"title": [
		"❀小肥猫全网最新精品合集❀"
	],
	"topad": "https://15.lanzouj.com/s/xfm01",
	"sInfo": "没有观看次数了！\r\n①请复制转发到Q群V群 增加观看次数\r\n②每有一人打开你就增加8次\r\n③没有人打开不增加次数",
	"sText": "各种网紅大呱💖等↓你↓来开💌\r\n↓↓弟兄们速度上车！！\r\n###\r\n看   →   更   →   多   →   精   →   彩   →https://kkk12-1311508894.cos.ap-chengdu.myqcloud.com/xfm.html\r\n☝如遇打不开\r\n🔍刘岚器搜：xiaofeimao.cn",
	"sEnd": "复制成功,返回QQ,粘贴发送到Q群吧",
	"tongji": "",
	"ready": "https://i.qianbao.qq.com/lib/components/adapt/middlepage.html?url=https://qm.qq.com/q/RUTP7kJD6Q,
	"btn2": "  微信 - vip - 呱群 ",
	"url2": [
		"https://os.i.gtimg.cn/music/photo_new/T053XD006001Tbi4f1nngT2.jpg"
	],
	"btn3": "VIP线路高清原创速度快秒打开",
	"url3": [
		"https://kkk12-1311508894.cos.ap-chengdu.myqcloud.com/xfm.html"
	],
	"btn4": "点 这 里 进 QQ 群 不 迷 路",
	"url4": [
		"https://i.qianbao.qq.com/lib/components/adapt/middlepage.html?url=https://qm.qq.com/q/RUTP7kJD6Q"
	],
"videos": [
		" https://t23a.cdn2020.com/video/m3u8/2024/01/02/4a02bc03/index.m3u8 ",
	],
	"shu": [
		""
	],
	"mobile": "0"
};
