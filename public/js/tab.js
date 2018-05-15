// tab切换
function tab_change_log(url){
	// console.log(url);
	var tab_list = document.getElementById('tablist');
	var menu = document.getElementById('contenttext');
	var pre = tab_list.getElementsByTagName('li');
	var kind = menu.getElementsByTagName('section');
	// 全部隐藏
	for (var i = kind.length - 1; i > 0; i--) {
			 kind[i].style.display='none';
			// console.log(kind[i]);	
	}

	console.log(pre[0]);
	for (var i = pre.length - 1; i >= 0; i--) {
		if(pre[i] == url){
			console.log(kind[i]);
			 kind[i].style.display='block';
			// console.log(kind[i]);
			 break;

		}
	}
} 

// 滚动监听
window.onscroll = function(){ 
	var t = document.documentElement.scrollTop;  
	var p = document.getElementById('toup');
	console.log(p);
	if(t>=100){
		p.style.display='block';
	}else{
		p.style.display='none';
	}
}