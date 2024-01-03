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
	"topad": "https://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=https://xiaofeimaoo.github.io/4.html&title=%F0%9F%8E%AC%E7%82%B9%E6%88%91%E8%A7%82%E7%9C%8B%E5%90%83%F0%9F%8D%89&pics=https://y.gtimg.cn/music/photo_new/T053XD004Jk4Jp3SkaFn.jpg&desc=%E5%9C%A8%E7%BA%BF%E8%A7%82%E7%9C%8B%F0%9F%93%BA%E7%B2%BE%E5%BD%A9%E5%90%83%F0%9F%8D%89%E7%80%91%E6%96%99%E2%9C%A8%E6%8A%96%E9%9F%B3%C2%B7%E7%BD%91%E7%BA%A2%C2%B7%E6%98%8E%E6%98%9F",
	"sInfo": "没有观看次数了！\r\n①请复制转发到Q群V群 增加观看次数\r\n②每有一人打开你就增加8次\r\n③没有人打开不增加次数",
	"sText": "各种网紅大呱💖等↓你↓来开💌\r\n↓↓弟兄们速度上车！！\r\n###\r\n看   →   更   →   多   →   精   →   彩   →https://k14-1311508894.cos.ap-chengdu.myqcloud.com/xfm.html\r\n☝如遇打不开\r\n🔍刘岚器搜：xiaofeimao.cn\r\n  总 裙→872155772",
	"sEnd": "复制成功,返回QQ,粘贴发送到Q群吧",
	"tongji": "",
	"ready": "https://i.qianbao.qq.com/lib/components/adapt/middlepage.html?url=https://qm.qq.com/q/ndSq7bQPPE",
	"btn2": "  微信 - vip - 呱群 ",
	"url2": [
		"https://qqq.gtimg.cn/music/photo_new/T053M001002PD6qt2O2oXW.jpg"
	],
	"btn3": "VIP线路高清原创速度快秒打开",
	"url3": [
		"https://k14-1311508894.cos.ap-chengdu.myqcloud.com/xfm.html"
	],
	"btn4": "点 这 里 进 QQ 群 不 迷 路",
	"url4": [
		"https://i.qianbao.qq.com/lib/components/adapt/middlepage.html?url=https://qm.qq.com/q/ndSq7bQPPE"
	],
"videos": [
"http://black.xn--2zyr5r3sgrvt.com/tmxd/328b3b0bd4ea381e11780567d3f84589.m3u8",				
"http://123.99.199.220:451//tmxb//1af0c88cb3a8a9a92eed182b6cde24fe.m3u8",				
"http://123.99.199.220:451//tmxb//2002276e17ddad342a0edef03f81e284.m3u8",				
"http://123.99.199.220:451/hua/208.m3u8",				
"http://123.99.199.220:451/hua/1476.m3u8",				
"http://123.99.199.220:451/hua/258.m3u8",				
"http://123.99.199.220:451/tmxb/172f27f563a8e9060837e0f91b47827d.m3u8",				
"http://123.99.199.220:451/hua/639.m3u8",				
"http://123.99.199.220:451/tmxb/b132430ba1398460a095cc40ef8cea74.m3u8",				
"http://123.99.199.220:451/hua/641.m3u8",				
"http://123.99.199.220:451/tmxb/46924f3b64fa613054d54ed4642af0a0.m3u8",				
"http://123.99.199.220:451/hua/1540.m3u8",				
"http://123.99.199.220:451/hua/643.m3u8",				
"http://123.99.199.220:451/hua/645.m3u8",				
"http://123.99.199.220:451/hua/709.m3u8",				
"http://123.99.199.220:451/hua/997.m3u8",				
"http://123.99.199.220:451/tmxb/01c57f6ad6731b2516d3121db4ddc55a.m3u8",				
"http://123.99.199.220:451/hua/720.m3u8",				
"http://123.99.199.220:451/hua/178.m3u8",				
"http://123.99.199.220:451/tmxb/d1909fcb8e69d0c40dd4519c2a25f7f6.m3u8",				
"http://123.99.199.220:451/hua/1359.m3u8",				
"http://123.99.199.220:451/hua/70.m3u8",				
"http://123.99.199.220:451/hua/582.m3u8",				
"http://123.99.199.220:451/hua/1150.m3u8",				
"http://123.99.199.220:451/hua/772.m3u8",				
"http://123.99.199.220:451/hua/1001.m3u8",				
"http://123.99.199.220:451/tmxb/964b46b4369d67a00336268068e6e360.m3u8",				
"http://123.99.199.220:451/hua/103.m3u8",				
"http://123.99.199.220:451/hua/115.m3u8",				
"http://123.99.199.220:451/hua/609.m3u8",				
"http://123.99.199.220:451/hua/513.m3u8",				
"http://123.99.199.220:451/tmxb/ded5a55e1e0b6254d47d0972bbadbc52.m3u8",				
"http://123.99.199.220:451/tmxb/96fbce8e3038dbaab499509593a49243.m3u8",				
"http://123.99.199.220:451/hua/257.m3u8",				
"http://123.99.199.220:451/tmxb/1fcf831f7571efb863ae98e3e32fe2b2.m3u8",				
"http://123.99.199.220:451/hua/924.m3u8",				
"http://123.99.199.220:451/hua/530.m3u8",				
"http://123.99.199.220:451/tmxb/c9be83dae6d7d7d2ef0022e4c026c5e8.m3u8",				
"http://123.99.199.220:451/tmxb/d2ec21079cf38f3f40a9c2b70111313f.m3u8",				
"http://123.99.199.220:451/hua/1489.m3u8",				
"http://123.99.199.220:451/mt/67665b55fd8e450e88e5c6e45e1800d3.m3u8",				
"http://123.99.199.220:451/tmxb/0066a56d5a0c9f9b340f792ce5f6968d.m3u8",				
"http://123.99.199.220:451/tmxb/dd3e32fddbd8a5514503ce8abbb3e0d9.m3u8",				
"http://123.99.199.220:451/hua/809.m3u8",				
"http://123.99.199.220:451/tmxb/89c7bbdbcaacbb95bb1acd82a1f92b75.m3u8",				
"http://123.99.199.220:451/hua/1541.m3u8",				
"http://123.99.199.220:451/hua/212.m3u8",				
"http://123.99.199.220:451/hua/1462.m3u8",				
"http://123.99.199.220:451/hua/819.m3u8",				
"http://123.99.199.220:451/hua/700.m3u8",				
"http://123.99.199.220:451/hua/934.m3u8",				
"http://123.99.199.220:451/hua/224.m3u8",				
"http://123.99.199.220:451/tmxb/37de6e1ac993c3345f0ca205f13af5f6.m3u8",				
"http://123.99.199.220:451/hua/668.m3u8",				
"http://123.99.199.220:451/tmxb/547a022062c3a11599f636d5e3676dcb.m3u8",				
"http://123.99.199.220:451/hua/1024.m3u8",				
"http://123.99.199.220:451/hua/632.m3u8",				
"http://123.99.199.220:451/tmxb/f8cfb1a28a3595b77e31e523372e413c.m3u8",				
"http://123.99.199.220:451/tmxb/b534e958077d0d24785e1ca3ea5cf178.m3u8",				
"http://123.99.199.220:451/tmxb/21dabda3526bf52aa987b011a0daa98f.m3u8",				
"http://123.99.199.220:451/tmxb/2e06e9919a7c056459d4ed93b82d1ad3.m3u8",				
"http://123.99.199.220:451/hua/1478.m3u8",				
"http://123.99.199.220:451/tmxb/5abaf6a12d25ba3cc4719861a93a6fc6.m3u8",				
"http://123.99.199.220:451/tmxb/e2335d52818fc48a83335089a1f0506c.m3u8",				
"http://123.99.199.220:451/hua/1015.m3u8",				
"http://123.99.199.220:451/hua/1059.m3u8",				
"http://123.99.199.220:451/tmxb/b48f0aae2d0fce480330b4cffa9b4bc0.m3u8",				
"http://123.99.199.220:451/hua/119.m3u8",				
"http://123.99.199.220:451/hua/1006.m3u8",				
"http://123.99.199.220:451/hua/555.m3u8",				
"http://123.99.199.220:451/tmxb/2fed964119aed0e5cc1c04ccc81d6004.m3u8",				
"http://123.99.199.220:451/tmxb/b5c853e265fd40ba44c4ef5d3aceee29.m3u8",				
"http://123.99.199.220:451/tmxb/940212f6e3bef0ac5f5ed48ee689acbe.m3u8",				
"http://123.99.199.220:451/tmxb/ed3271483a2efe586c8580ddeac4f268.m3u8",				
"http://123.99.199.220:451/hua/96.m3u8",				
"http://123.99.199.220:451/tmxb/dc0565106643f2b87620ad523e01e680.m3u8",				
"http://123.99.199.220:451/hua/1203.m3u8",				
"http://123.99.199.220:451/tmxb/98949e24dda16aca5a1468aa58b008c5.m3u8",				
"http://123.99.199.220:451/tmxb/61c1d132d7f4ded96711327fa4b16132.m3u8",				
"http://123.99.199.220:451/hua/66.m3u8",				
"http://123.99.199.220:451/tmxb/bea1310b93d43b4944bc9a98b7bce8d4.m3u8",				
"http://123.99.199.220:451/tmxb/2de319625cd9e4638a9677ba11fb2d33.m3u8",				
"http://123.99.199.220:451/tmxb/35c19805f705f5326b5c1e1e8214830e.m3u8",				
"http://123.99.199.220:451/hua/954.m3u8",				
"http://123.99.199.220:451/hua/1321.m3u8",				
"http://123.99.199.220:451/hua/799.m3u8",				
"http://123.99.199.220:451/hua/447.m3u8",				
"http://123.99.199.220:451/hua/722.m3u8",				
"http://123.99.199.220:451/hua/958.m3u8",				
"http://123.99.199.220:451/tmxb/1ed23dac1ff1f0458cc37995c086bfd7.m3u8",				
"http://123.99.199.220:451/hua/775.m3u8",				
"http://123.99.199.220:451/mt/40a5b4354edf4bb8bd2d2aad8f2c962b.m3u8",				
"http://123.99.199.220:451/tmxb/ec5b7678358159304056df68360619c6.m3u8",				
"http://123.99.199.220:451/hua/1172.m3u8",				
"http://123.99.199.220:451/tmxb/4dcf705adbcf7a404e973ea368edb01e.m3u8",				
"http://123.99.199.220:451/hua/243.m3u8",				
"http://123.99.199.220:451/tmxb/cf33fe98c81dbad5e481ca99b20d3ee5.m3u8",				
"http://123.99.199.220:451/hua/134.m3u8",				
"http://123.99.199.220:451/tmxb/318179fe9fa95d633cd9627f73881ace.m3u8",				
"http://123.99.199.220:451/tmxb/aca9b65beb5326ef4915e8480665890d.m3u8",				
"http://123.99.199.220:451/hua/970.m3u8",				
"http://123.99.199.220:451/hua/393.m3u8",				
"http://123.99.199.220:451/hua/1062.m3u8",				
"http://123.99.199.220:451/hua/1294.m3u8",				
"http://123.99.199.220:451/tmxb/10062b0b2b7a25f193703cb7a7f0f4b1.m3u8",				
"http://123.99.199.220:451/hua/67.m3u8",				
"http://123.99.199.220:451/tmxb/ead94b00737d34b39fc845ad9f2671c0.m3u8",				
"http://123.99.199.220:451/tmxb/2e6b3103be708c1c7c638bf29bfa0229.m3u8",				
"http://123.99.199.220:451/hua/611.m3u8",				
"http://123.99.199.220:451/hua/463.m3u8",				
"http://123.99.199.220:451/hua/466.m3u8",				
"http://123.99.199.220:451/tmxb/382b6efbb6c30c093310ea698e7fe2de.m3u8",				
"http://123.99.199.220:451/hua/250.m3u8",				
"http://123.99.199.220:451/tmxb/827085baf504896222bbac773bcd4ea4.m3u8",				
"http://123.99.199.220:451/hua/1357.m3u8",				
"http://123.99.199.220:451/tmxb/bcda7cddd517ff1f7b7a6e51b31f4739.m3u8",				
"http://123.99.199.220:451/mt/1e8aae6502549aeab187a2ab82eb3a24.m3u8",				
"http://123.99.199.220:451/hua/210.m3u8",				
"http://123.99.199.220:451/tmxb/daf60fc1a1c82cd48a54b4c219360370.m3u8",				
"http://123.99.199.220:451/tmxb/e25c5dc99b2eae80d402d74c9a0ef98d.m3u8",				
"http://123.99.199.220:451/tmxb/c207a4336bfef08ff738e5578ec23cf3.m3u8",				
"http://123.99.199.220:451/hua/543.m3u8",				
"http://123.99.199.220:451/hua/1494.m3u8",				
"http://123.99.199.220:451/tmxb/26649f03a9763956df325504b2857f23.m3u8",				
"http://123.99.199.220:451/tmxb/6b739fc664af22090326e0d0ee6f8ef5.m3u8",				
"http://123.99.199.220:451/hua/1043.m3u8",				
"http://123.99.199.220:451/hua/1493.m3u8",				
"http://123.99.199.220:451/tmxb/69dd30e4b100fbf1937ca4e61e449a51.m3u8",				
"http://123.99.199.220:451/hua/383.m3u8",				
"http://123.99.199.220:451/mt/1eb67ff3549344a1ad18214e953913c0.m3u8",				
"http://123.99.199.220:451/hua/17.m3u8",				
"http://123.99.199.220:451/hua/19.m3u8",				
"http://123.99.199.220:451/tmxb/2e653350d1661d761ec6e82ad43b07fb.m3u8",				
"http://123.99.199.220:451/tmxb/0193cddc4d2f8b05751ff8150a037fcb.m3u8",				
"http://123.99.199.220:451/hua/1588.m3u8",				
"http://123.99.199.220:451/hua/885.m3u8",				
"http://123.99.199.220:451/tmxb/c652d1e13b98faab298a2ad925f027f8.m3u8",				
"http://123.99.199.220:451/hua/675.m3u8",				
"http://123.99.199.220:451/tmxb/48d042879001978370d7f034932c64a2.m3u8",				
"http://123.99.199.220:451/tmxb/d1034d34f7238ab4d5b4e27d7725a61c.m3u8",				
"http://123.99.199.220:451/tmxb/e6596791b05867c8d76d98768ca5deb2.m3u8",				
"http://123.99.199.220:451/hua/784.m3u8",				
"http://123.99.199.220:451/tmxb/b87aba6b755d5cd16aef6ad2e9b26fec.m3u8",				
"http://123.99.199.220:451/mt/50259d69073e45b986278a707fd1ca00.m3u8",				
"http://123.99.199.220:451/hua/906.m3u8",				
"http://123.99.199.220:451/hua/574.m3u8",				
"http://123.99.199.220:451/hua/350.m3u8",				
"http://123.99.199.220:451/hua/154.m3u8",				
"http://123.99.199.220:451/tmxb/3013fcf200834ca7fa965c9fcbdf683c.m3u8",				
"http://123.99.199.220:451/hua/1224.m3u8",				
"http://123.99.199.220:451/hua/1482.m3u8",				
"http://123.99.199.220:451/tmxb/e2f28d0f618d4596c9a1d1daa2038f27.m3u8",				
"http://123.99.199.220:451/tmxb/e4e87851b6b6855a1a91763374869434.m3u8",				
"http://123.99.199.220:451/tmxb/a626ee0534cab2e90a9fde2e850ae63a.m3u8",				
"http://123.99.199.220:451/tmxb/692020abaf3259c43c5a2b9586617824.m3u8",				
"http://123.99.199.220:451/hua/1123.m3u8",				
"http://123.99.199.220:451/hua/1400.m3u8",				
"http://123.99.199.220:451/hua/252.m3u8",				
"http://123.99.199.220:451/tmxb/34f052111791c670ac4840a52465653f.m3u8",				
"http://123.99.199.220:451/tmxb/0ebc71f81d3c90a86259c53df4427095.m3u8",				
"http://123.99.199.220:451/tmxb/7ae386a0beaa3b2e2f360a32622fb73f.m3u8",				
"http://123.99.199.220:451/hua/591.m3u8",				
"http://123.99.199.220:451/hua/20.m3u8",				
"http://123.99.199.220:451/tmxb/c99dc4b943843e2748eea1ad5e07afde.m3u8",				
"http://123.99.199.220:451/hua/435.m3u8",				
"http://123.99.199.220:451/hua/269.m3u8",				
"http://123.99.199.220:451/tmxb/a7ebf6a366ac1a1bda4e4d1b6e800ba4.m3u8",				
"http://123.99.199.220:451/hua/360.m3u8",				
"http://123.99.199.220:451/tmxb/3d0753545d4f7ab224d00dee09d5b327.m3u8",				
"http://123.99.199.220:451/tmxb/bc0f8f1538c90f5691ecf9629cad7958.m3u8",	
	"shu": [
		""
	],
	"mobile": "0"
};
