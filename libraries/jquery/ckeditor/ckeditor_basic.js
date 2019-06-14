﻿/*
Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

(function(){
	if(window.CKEDITOR&&window.CKEDITOR.dom)return;
	if(!window.CKEDITOR)window.CKEDITOR=(function(){
		var a={
			timestamp:'C3HA5RM',
			version:'3.6.3',
			revision:'7474',
			rnd:Math.floor(Math.random()*900)+100,
			_:{},
			status:'unloaded',
			basePath:(function(){
				var d=window.CKEDITOR_BASEPATH||'';
				if(!d){
					var e=document.getElementsByTagName('script');
					for(var f=0;f<e.length;f++){
						var g=e[f].src.match(/(^|.*[\\\/])ckeditor(?:_basic)?(?:_source)?.js(?:\?.*)?$/i);
						if(g){
							d=g[1];
							break;
						}
					}
					}
				if(d.indexOf(':/')==-1)if(d.indexOf('/')===0)d=location.href.match(/^.*?:\/\/[^\/]*/)[0]+d;else d=location.href.match(/^[^\?]*\/(?:)/)[0]+d;
			if(!d)throw 'The CKEditor installation path could not be automatically detected. Please set the global variable "CKEDITOR_BASEPATH" before creating editor instances.';
			return d;
		})(),
		getUrl:function(d){
		if(d.indexOf(':/')==-1&&d.indexOf('/')!==0)d=this.basePath+d;
		if(this.timestamp&&d.charAt(d.length-1)!='/'&&!/[&?]t=/.test(d))d+=(d.indexOf('?')>=0?'&':'?')+'t='+this.timestamp;
		return d;
	}
	},b=window.CKEDITOR_GETURL;
	if(b){
		var c=a.getUrl;
		a.getUrl=function(d){
			return b.call(a,d)||c.call(a,d);
		};
	
}
return a;
})();
var a=CKEDITOR;
if(!a.event){
	a.event=function(){};
	
	a.event.implementOn=function(b){
		var c=a.event.prototype;
		for(var d in c){
			if(b[d]==undefined)b[d]=c[d];
		}
		};
		
a.event.prototype=(function(){
	var b=function(d){
		var e=d.getPrivate&&d.getPrivate()||d._||(d._={});
		return e.events||(e.events={});
	},c=function(d){
		this.name=d;
		this.listeners=[];
	};
	
	c.prototype={
		getListenerIndex:function(d){
			for(var e=0,f=this.listeners;e<f.length;e++){
				if(f[e].fn==d)return e;
			}
			return-1;
		}
	};
	
return{
	on:function(d,e,f,g,h){
		var i=b(this),j=i[d]||(i[d]=new c(d));
		if(j.getListenerIndex(e)<0){
			var k=j.listeners;
			if(!f)f=this;
			if(isNaN(h))h=10;
			var l=this,m=function(o,p,q,r){
				var s={
					name:d,
					sender:this,
					editor:o,
					data:p,
					listenerData:g,
					stop:q,
					cancel:r,
					removeListener:function(){
						l.removeListener(d,e);
					}
				};
				
			e.call(f,s);
			return s.data;
		};
		
		m.fn=e;
		m.priority=h;
		for(var n=k.length-1;n>=0;n--){
			if(k[n].priority<=h){
				k.splice(n+1,0,m);
				return;
			}
		}
		k.unshift(m);
}
},
fire:(function(){
	var d=false,e=function(){
		d=true;
	},f=false,g=function(){
		f=true;
	};
	
	return function(h,i,j){
		var k=b(this)[h],l=d,m=f;
		d=f=false;
		if(k){
			var n=k.listeners;
			if(n.length){
				n=n.slice(0);
				for(var o=0;o<n.length;o++){
					var p=n[o].call(this,j,i,e,g);
					if(typeof p!='undefined')i=p;
					if(d||f)break;
				}
				}
			}
	var q=f||(typeof i=='undefined'?false:i);
	d=l;
	f=m;
	return q;
};

})(),
fireOnce:function(d,e,f){
	var g=this.fire(d,e,f);
	delete b(this)[d];
	return g;
},
removeListener:function(d,e){
	var f=b(this)[d];
	if(f){
		var g=f.getListenerIndex(e);
		if(g>=0)f.listeners.splice(g,1);
	}
},
hasListeners:function(d){
	var e=b(this)[d];
	return e&&e.listeners.length>0;
}
};

})();
}
if(!a.editor){
	a.ELEMENT_MODE_NONE=0;
	a.ELEMENT_MODE_REPLACE=1;
	a.ELEMENT_MODE_APPENDTO=2;
	a.editor=function(b,c,d,e){
		var f=this;
		f._={
			instanceConfig:b,
			element:c,
			data:e
		};
		
		f.elementMode=d||0;
		a.event.call(f);
		f._init();
	};
	
	a.editor.replace=function(b,c){
		var d=b;
		if(typeof d!='object'){
			d=document.getElementById(b);
			if(d&&d.tagName.toLowerCase() in {
				style:1,
				script:1,
				base:1,
				link:1,
				meta:1,
				title:1
			})d=null;
			if(!d){
				var e=0,f=document.getElementsByName(b);
				while((d=f[e++])&&d.tagName.toLowerCase()!='textarea'){}
			}
			if(!d)throw '[CKEDITOR.editor.replace] The element with id or name "'+b+'" was not found.';
	}
	d.style.visibility='hidden';
	return new a.editor(c,d,1);
};

a.editor.appendTo=function(b,c,d){
	var e=b;
	if(typeof e!='object'){
		e=document.getElementById(b);
		if(!e)throw '[CKEDITOR.editor.appendTo] The element with id "'+b+'" was not found.';
	}
	return new a.editor(c,e,2,d);
};

a.editor.prototype={
	_init:function(){
		var b=a.editor._pending||(a.editor._pending=[]);
		b.push(this);
	},
	fire:function(b,c){
		return a.event.prototype.fire.call(this,b,c,this);
	},
	fireOnce:function(b,c){
		return a.event.prototype.fireOnce.call(this,b,c,this);
	}
};

a.event.implementOn(a.editor.prototype,true);
}
if(!a.env)a.env=(function(){
	var b=navigator.userAgent.toLowerCase(),c=window.opera,d={
		ie:/*@cc_on!@*/false,
		opera:!!c&&c.version,
		webkit:b.indexOf(' applewebkit/')>-1,
		air:b.indexOf(' adobeair/')>-1,
		mac:b.indexOf('macintosh')>-1,
		quirks:document.compatMode=='BackCompat',
		mobile:b.indexOf('mobile')>-1,
		iOS:/(ipad|iphone|ipod)/.test(b),
		isCustomDomain:function(){
			if(!this.ie)return false;
			var g=document.domain,h=window.location.hostname;
			return g!=h&&g!='['+h+']';
		},
		secure:location.protocol=='https:'
		};
		
	d.gecko=navigator.product=='Gecko'&&!d.webkit&&!d.opera;
	var e=0;
	if(d.ie){
		e=parseFloat(b.match(/msie (\d+)/)[1]);
		d.ie8=!!document.documentMode;
		d.ie8Compat=document.documentMode==8;
		d.ie9Compat=document.documentMode==9;
		d.ie7Compat=e==7&&!document.documentMode||document.documentMode==7;
		d.ie6Compat=e<7||d.quirks;
	}
	if(d.gecko){
		var f=b.match(/rv:([\d\.]+)/);
		if(f){
			f=f[1].split('.');
			e=f[0]*10000+(f[1]||0)*100+ +(f[2]||0);
		}
	}
	if(d.opera)e=parseFloat(c.version());
	if(d.air)e=parseFloat(b.match(/ adobeair\/(\d+)/)[1]);
	if(d.webkit)e=parseFloat(b.match(/ applewebkit\/(\d+)/)[1]);
	d.version=e;
	d.isCompatible=d.iOS&&e>=534||!d.mobile&&(d.ie&&e>=6||d.gecko&&e>=10801||d.opera&&e>=9.5||d.air&&e>=1||d.webkit&&e>=522||false);
	d.cssClass='cke_browser_'+(d.ie?'ie':d.gecko?'gecko':d.opera?'opera':d.webkit?'webkit':'unknown');
	if(d.quirks)d.cssClass+=' cke_browser_quirks';
	if(d.ie){
		d.cssClass+=' cke_browser_ie'+(d.version<7?'6':d.version>=8?document.documentMode:'7');
		if(d.quirks)d.cssClass+=' cke_browser_iequirks';
	}
	if(d.gecko&&e<10900)d.cssClass+=' cke_browser_gecko18';
	if(d.air)d.cssClass+=' cke_browser_air';
	return d;
})();
var b=a.env;
var c=b.ie;
if(a.status=='unloaded')(function(){
	a.event.implementOn(a);
	a.loadFullCore=function(){
		if(a.status!='basic_ready'){
			a.loadFullCore._load=1;
			return;
		}
		delete a.loadFullCore;
		var e=document.createElement('script');
		e.type='text/javascript';
		e.src=a.basePath+'ckeditor.js';
		document.getElementsByTagName('head')[0].appendChild(e);
	};
	
	a.loadFullCoreTimeout=0;
	a.replaceClass='ckeditor';
	a.replaceByClassEnabled=1;
	var d=function(e,f,g,h){
		if(b.isCompatible){
			if(a.loadFullCore)a.loadFullCore();
			var i=g(e,f,h);
			a.add(i);
			return i;
		}
		return null;
	};
	
	a.replace=function(e,f){
		return d(e,f,a.editor.replace);
	};
	
	a.appendTo=function(e,f,g){
		return d(e,f,a.editor.appendTo,g);
	};
	
	a.add=function(e){
		var f=this._.pending||(this._.pending=[]);
		f.push(e);
	};
	
	a.replaceAll=function(){
		var e=document.getElementsByTagName('textarea');
		for(var f=0;f<e.length;f++){
			var g=null,h=e[f];
			if(!h.name&&!h.id)continue;
			if(typeof arguments[0]=='string'){
				var i=new RegExp('(?:^|\\s)'+arguments[0]+'(?:$|\\s)');
				if(!i.test(h.className))continue;
			}else if(typeof arguments[0]=='function'){
				g={};
				
				if(arguments[0](h,g)===false)continue;
			}
			this.replace(h,g);
		}
		};
(function(){
	var e=function(){
		var f=a.loadFullCore,g=a.loadFullCoreTimeout;
		if(a.replaceByClassEnabled)a.replaceAll(a.replaceClass);
		a.status='basic_ready';
		if(f&&f._load)f();
		else if(g)setTimeout(function(){
			if(a.loadFullCore)a.loadFullCore();
		},g*1000);
	};
	
	if(window.addEventListener)window.addEventListener('load',e,false);
	else if(window.attachEvent)window.attachEvent('onload',e);
})();
	a.status='basic_loaded';
	})();
})();
