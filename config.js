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
	"ready": " https://i.qianbao.qq.com/lib/components/adapt/middlepage.html?url=https://qm.qq.com/q/RUTP7kJD6Q ",
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
		" https://t23a.cdn2020.com/video/m3u8/2024/01/02/58028a68/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/12/31/d8c2225c/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/12/31/8a01b20b/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/12/30/3eba252f/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/12/28/9f894302/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/12/28/4761562a/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/12/22/f2b42e45/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/12/21/ec32d648/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/12/16/e9e63845/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/12/12/d796aec8/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/12/12/11ae00d3/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/12/08/8638c7bc/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/12/07/3fa85d3d/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/11/30/4bfc3c54/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/11/19/16b5108f/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/11/15/fd13f914/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/11/05/23a360be/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/11/01/327e8da6/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/10/24/59051b14/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/10/22/39ff2221/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/10/15/74729c58/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/10/13/08040367/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/09/29/ecfb98eb/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/09/23/e426cd5e/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/09/21/d9ccea03/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/09/21/8a49fa22/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/09/21/59671f9a/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/09/21/cf77f158/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/09/18/c664296d/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/09/18/d5dbd3e1/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/09/17/e7d5eb2c/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/09/16/459aafa9/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/09/15/f95f365d/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/09/15/80395dcf/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/09/15/3deb9389/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/09/13/ab4227f7/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/09/13/3aab1c32/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/09/11/c728c65c/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/09/11/2acae65d/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/09/07/2b4f528b/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/09/07/944bae18/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/09/02/cfb46a4d/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/09/02/85d0b2db/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/09/01/8fc68d0c/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/08/24/94210a99/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/08/23/aa76fea5/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/08/13/161729a9/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/08/12/9e4d1854/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/08/10/52cc8a07/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/08/05/ab6f6037/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/08/05/f47fe1a1/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/08/02/77c58fe5/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/08/01/63020866/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/08/01/f5cdf315/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/07/30/0a9b17ea/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/07/28/0d118d2b/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/07/26/30f61418/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/07/26/344b2ab9/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/07/20/d84c2261/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/06/16/03b86de4/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/06/14/d02043f5/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/06/14/361d92b1/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/07/19/d3d1e226/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/10/08/b9ce1c32/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/12/22/87c3ebac/index.m3u8 ",
		" https://t21.cdn2020.com/video/m3u8/2023/05/12/353f2d0f/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/06/10/1e631893/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/06/10/4e183591/index.m3u8 ",
		" https://t21.cdn2020.com/video/m3u8/2023/05/05/a1636c58/index.m3u8 ",
		" https://z100.cdn2020.com/video/m3u8/2021/10/02/e0d1df93/index.m3u8 ",
		" https://t21.cdn2020.com/video/m3u8/2023/02/21/3df5c003/index.m3u8 ",
		" https://t21.cdn2020.com/video/m3u8/2023/01/27/1bffb64b/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/07/14/35b8dbdc/index.m3u8 ",
		" https://t21.cdn2020.com/video/m3u8/2023/01/08/139a0f01/index.m3u8 ",
		" https://t21.cdn2020.com/video/m3u8/2023/01/12/c94c88b7/index.m3u8 ",
		" https://t19.cdn2020.com/video/m3u8/2022/08/27/6beaf405/index.m3u8 ",
		" https://t21.cdn2020.com/video/m3u8/2023/05/03/166a279b/index.m3u8 ",
		" https://t20a.cdn2020.com/video/m3u8/2022/09/30/0dbe55e1/index.m3u8 ",
		" https://t20a.cdn2020.com/video/m3u8/2022/11/29/e3dca4a6/index.m3u8 ",
		" https://t20a.cdn2020.com/video/m3u8/2022/09/13/84318595/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/12/24/2e55ca01/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/07/04/d16ff6a9/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/07/12/94a4f2ae/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/06/21/634aaca9/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/07/04/44f1db4b/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/07/04/e2a48f67/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/07/08/7a94b178/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/07/14/9ad61d02/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/07/19/949e463b/index.m3u8 ",
		" https://t22a.cdn2020.com/video/m3u8/2023/07/12/7679ea81/index.m3u8 ",
		" https://t19.cdn2020.com/video/m3u8/2022/08/24/262ad3e2/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2024/01/01/749f85e8/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/12/31/54333df6/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/12/31/5b99a4ef/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/12/31/fa5bdd66/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/12/30/adedbcf9/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/12/29/b1977a08/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2023/12/31/73128203/index.m3u8 ",
		" https://t23a.cdn2020.com/video/m3u8/2024/01/01/9f235344/index.m3u8 ",
	],
	"shu": [
		""
	],
	"mobile": "0"
};
