(function(){var n=this,aa=function(a,b,c){return a.call.apply(a.bind,arguments)},ba=function(a,b,c){if(!a)throw Error();if(2<arguments.length){var d=Array.prototype.slice.call(arguments,2);return function(){var c=Array.prototype.slice.call(arguments);Array.prototype.unshift.apply(c,d);return a.apply(b,c)}}return function(){return a.apply(b,arguments)}},p=function(a,b,c){p=Function.prototype.bind&&-1!=Function.prototype.bind.toString().indexOf("native code")?aa:ba;return p.apply(null,arguments)},ca=function(a,
b){var c=Array.prototype.slice.call(arguments,1);return function(){var b=c.slice();b.push.apply(b,arguments);return a.apply(this,b)}},da=Date.now||function(){return+new Date};var v=(new Date).getTime();var ea=function(){},x=function(a,b,c){switch(typeof b){case "string":fa(b,c);break;case "number":c.push(isFinite(b)&&!isNaN(b)?b:"null");break;case "boolean":c.push(b);break;case "undefined":c.push("null");break;case "object":if(null==b){c.push("null");break}if(b instanceof Array){var d=b.length;c.push("[");for(var e="",f=0;f<d;f++)c.push(e),x(a,b[f],c),e=",";c.push("]");break}c.push("{");d="";for(e in b)b.hasOwnProperty(e)&&(f=b[e],"function"!=typeof f&&(c.push(d),fa(e,c),c.push(":"),x(a,f,c),d=
","));c.push("}");break;case "function":break;default:throw Error("Unknown type: "+typeof b);}},A={'"':'\\"',"\\":"\\\\","/":"\\/","\b":"\\b","\f":"\\f","\n":"\\n","\r":"\\r","\t":"\\t","\x0B":"\\u000b"},ga=/\uffff/.test("\uffff")?/[\\\"\x00-\x1f\x7f-\uffff]/g:/[\\\"\x00-\x1f\x7f-\xff]/g,fa=function(a,b){b.push('"');b.push(a.replace(ga,function(a){if(a in A)return A[a];var b=a.charCodeAt(0),e="\\u";16>b?e+="000":256>b?e+="00":4096>b&&(e+="0");return A[a]=e+b.toString(16)}));b.push('"')};var ha=/&/g,ia=/</g,ja=/>/g,ka=/"/g,la=/'/g,B={"\x00":"\\0","\b":"\\b","\f":"\\f","\n":"\\n","\r":"\\r","\t":"\\t","\x0B":"\\x0B",'"':'\\"',"\\":"\\\\"},C={"'":"\\'"};var ma=document,D=window;var E=function(a,b){for(var c in a)Object.prototype.hasOwnProperty.call(a,c)&&b.call(null,a[c],c,a)},F=function(a){return!!a&&"function"==typeof a&&!!a.call},na=function(a,b){if(!(2>arguments.length))for(var c=1,d=arguments.length;c<d;++c)a.push(arguments[c])},G=function(a,b){if(!(1E-4>Math.random())){var c=Math.random();if(c<b){try{var d=new Uint16Array(1);window.crypto.getRandomValues(d);c=d[0]/65536}catch(e){c=Math.random()}return a[Math.floor(c*a.length)]}}return null},oa=function(a){a.google_unique_id?
++a.google_unique_id:a.google_unique_id=1},pa=function(a){a=a.google_unique_id;return"number"==typeof a?a:0},qa=function(a){var b=a.length;if(0==b)return 0;for(var c=305419896,d=0;d<b;d++)c^=(c<<5)+(c>>2)+a.charCodeAt(d)&4294967295;return 0<c?c:4294967296+c},ra=function(a){for(var b=[],c=0;a&&25>c;++c){var d=9!=a.nodeType&&a.id,d=d?"/"+d:"",e;t:{var f=a.parentElement;e=a.nodeName.toLowerCase();if(f)for(var f=f.childNodes,g=0,l=0;l<f.length;++l){var k=f[l];if(k.nodeName&&k.nodeName.toLowerCase()==
e){if(a==k){e="."+g;break t}++g}}e=""}b.push((a.nodeName&&a.nodeName.toLowerCase())+d+e);a=a.parentElement}return b.join()},sa=function(){var a=D,b=[];if(a)try{for(var c=a.parent,d=0;c&&c!=a&&25>d;++d){for(var e=c.frames,f=0;f<e.length;++f)if(a==e[f]){b.push(f);break}a=c;c=a.parent}}catch(g){}return b.join()},ta=function(a,b,c){b=[b.google_ad_slot,b.google_ad_format,b.google_ad_type,b.google_ad_width,b.google_ad_height];if(c){c=[];for(var d=0;a&&25>d;a=a.parentNode,++d)c.push(9!=a.nodeType&&a.id||
"");(a=c.join())&&b.push(a)}else b.push(ra(a)),b.push(sa());return qa(b.join(":")).toString()},H=function(a){try{return!!a.location.href||""===a.location.href}catch(b){return!1}};var ua={google_analytics_domain_name:!0,google_analytics_uacct:!0},va=function(a){a.google_page_url&&(a.google_page_url=String(a.google_page_url));var b=[];E(a,function(a,d){if(null!=a){var e;try{var f=[];x(new ea,a,f);e=f.join("")}catch(g){}e&&na(b,d,"=",e,";")}});return b.join("")};var I=!0,wa={},ya=function(a,b,c,d){var e,f=I;try{e=c()}catch(g){try{var l,k=g.toString();g.name&&-1==k.indexOf(g.name)&&(k+=": "+g.name);g.message&&-1==k.indexOf(g.message)&&(k+=": "+g.message);if(g.stack){var h=g.stack;c=k;try{-1==h.indexOf(c)&&(h=c+"\n"+h);for(var m;h!=m;)m=h,h=h.replace(/((https?:\/..*\/)[^\/:]*:\d+(?:.|\n)*)\2/,"$1");k=h.replace(/\n */g,"\n")}catch(q){k=c}}l=k;k="";g.fileName&&(k=g.fileName);h=-1;g.lineNumber&&(h=g.lineNumber);var w;t:{try{w=d?d():"";break t}catch(y){}w=""}f=
b(a,l,k,h,w)}catch(r){xa({context:"protectAndRun",msg:r.toString()+"\n"+(r.stack||"")})}if(!f)throw g;}return e},Aa=function(a,b,c,d,e){a={context:a,msg:b.substring(0,512),eid:e&&e.substring(0,40),file:c,line:d.toString(),url:ma.URL.substring(0,512),ref:ma.referrer.substring(0,512)};za(a);xa(a);return I},xa=function(a){if(0.01>Math.random()){a="/pagead/gen_204?id=jserror"+Ba(a);a="http"+("https:"==D.location.protocol?"s":"")+"://pagead2.googlesyndication.com"+a;a=a.substring(0,2E3);D.google_image_requests||
(D.google_image_requests=[]);var b=D.document.createElement("img");b.src=a;D.google_image_requests.push(b)}},za=function(a){var b=a||{};E(wa,function(a,d){b[d]=D[a]})},J=function(a,b){return ca(ya,a,Aa,b,void 0)},Ba=function(a){var b="";E(a,function(a,d){if(0===a||a)b+="&"+d+"="+("function"==typeof encodeURIComponent?encodeURIComponent(a):escape(a))});return b};var K=function(a){a=parseFloat(a);return isNaN(a)||1<a||0>a?0:a},Ca=/^([\w-]+\.)*([\w-]{2,})(\:[0-9]+)?$/,Da=function(a,b){if(!a)return b;var c=a.match(Ca);return c?c[0]:b};var Ea=K("0.15"),Fa=K("0"),Ga=K(""),Ha=K("0.001"),Ia=K("0.2"),Ja=K("0.001");var Ka=/^true$/.test("true")?!0:!1;var La=function(){return Da("","pagead2.googlesyndication.com")};I=!/^true$/.test("false");wa={client:"google_ad_client",format:"google_ad_format",slotname:"google_ad_slot",output:"google_ad_output",ad_type:"google_ad_type",async_oa:"google_async_for_oa_experiment",zrtm:"google_ad_handling_mode",dimpr:"google_always_use_delayed_impressions_experiment",peri:"google_top_experiment"};var L=/([0-9.]+)px/,M=[{width:120,height:240,format:"vertical"},{width:120,height:600,format:"vertical"},{width:125,height:125,format:"rectangle"},{width:160,height:600,format:"vertical"},{width:180,height:150,format:"rectangle"},{width:200,height:200,format:"rectangle"},{width:234,height:60,format:"horizontal"},{width:250,height:250,format:"rectangle"},{width:300,height:250,format:"rectangle"},{width:300,height:600,format:"vertical"},{width:320,height:50,format:"horizontal"},{width:336,height:280,
format:"rectangle"},{width:468,height:60,format:"horizontal"},{width:728,height:90,format:"horizontal"},{width:970,height:90,format:"horizontal"}],Ma=function(a,b){for(var c=["width","height"],d=0;d<c.length;d++){var e="google_ad_"+c[d];if(!b.hasOwnProperty(e)){var f=L.exec(a[c[d]]);f&&(b[e]=Math.round(f[1]))}}},Oa=function(a,b,c){M.sort(function(a,b){return a.width-b.width||a.height-b.height});"auto"==b&&(b=0.25>a/Na(c)?"vertical":"horizontal,rectangle");for(c=M.length;c--;)if(M[c].width<=a&&-1!=
b.indexOf(M[c].format))return M[c];return null},Na=function(a){a=a.document;return a.documentElement.clientWidth||a.body.clientWidth};var Pa=function(a,b,c){var d=["<iframe"],e;for(e in a)a.hasOwnProperty(e)&&na(d,e+"="+a[e]);d.push('style="left:0;position:absolute;top:0;"');d.push("></iframe>");b="border:none;height:"+c+"px;margin:0;padding:0;position:relative;visibility:visible;width:"+b+"px;background-color:transparent";return['<ins style="display:inline-table;',b,'"><ins id="',a.id+"_anchor",'" style="display:block;',b,'">',d.join(" "),"</ins></ins>"].join("")};var N=null,Qa=function(){if(!N){for(var a=window,b=a,c=0;a!=a.parent;)if(a=a.parent,c++,H(a))b=a;else break;N=b}return N};var O=function(a,b,c){c||(c=Ka?"https":"http");return[c,"://",a,b].join("")};var Ra=/\.((google(|groups|mail|images|print))|gmail)\./,Sa=function(a){try{var b=Ra.test(a.location.host);return!(!a.postMessage||!a.localStorage||!a.JSON||b)}catch(c){return!1}};var P=function(a){this.b=a;a.google_iframe_oncopy||(a.google_iframe_oncopy={handlers:{},upd:p(this.m,this)});this.j=a.google_iframe_oncopy},Ta;var Q="var i=this.id,s=window.google_iframe_oncopy,H=s&&s.handlers,h=H&&H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&&d&&(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}";
/[&<>"']/.test(Q)&&(-1!=Q.indexOf("&")&&(Q=Q.replace(ha,"&amp;")),-1!=Q.indexOf("<")&&(Q=Q.replace(ia,"&lt;")),-1!=Q.indexOf(">")&&(Q=Q.replace(ja,"&gt;")),-1!=Q.indexOf('"')&&(Q=Q.replace(ka,"&quot;")),-1!=Q.indexOf("'")&&(Q=Q.replace(la,"&#39;")));Ta=Q;P.prototype.set=function(a,b){this.j.handlers[a]=b;this.b.addEventListener&&this.b.addEventListener("load",p(this.k,this,a),!1)};
P.prototype.k=function(a){a=this.b.document.getElementById(a);try{var b=a.contentWindow.document;if(a.onload&&b&&(!b.body||!b.body.firstChild))a.onload()}catch(c){}};P.prototype.m=function(a,b){var c=Ua("rx",a),d;t:{if(a&&(d=a.match("dt=([^&]+)"))&&2==d.length){d=d[1];break t}d=""}d=(new Date).getTime()-d;c=c.replace(/&dtd=(\d+|M)/,"&dtd="+(1E4>d?d+"":"M"));this.set(b,c);return c};var Ua=function(a,b){var c=RegExp("\\b"+a+"=(\\d+)"),d=c.exec(b);d&&(b=b.replace(c,a+"="+(+d[1]+1||1)));return b};var R,S,T,U,Va=function(){return n.navigator?n.navigator.userAgent:null};U=T=S=R=!1;var V;if(V=Va()){var Wa=n.navigator;R=0==V.lastIndexOf("Opera",0);S=!R&&(-1!=V.indexOf("MSIE")||-1!=V.indexOf("Trident"));T=!R&&-1!=V.indexOf("WebKit");U=!R&&!T&&!S&&"Gecko"==Wa.product}var Xa=S,Ya=U,Za=T;var W;if(R&&n.opera){var $a=n.opera.version;"function"==typeof $a&&$a()}else Ya?W=/rv\:([^\);]+)(\)|;)/:Xa?W=/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/:Za&&(W=/WebKit\/(\S+)/),W&&W.exec(Va());var X,Y=function(a){this.c=[];this.b=a||window;this.a=0;this.d=null;this.e=0},ab=function(a,b){this.l=a;this.i=b};Y.prototype.o=function(a,b){0!=this.a||0!=this.c.length||b&&b!=window?this.h(a,b):(this.a=2,this.g(new ab(a,window)))};Y.prototype.h=function(a,b){this.c.push(new ab(a,b||this.b));Z(this)};Y.prototype.p=function(a){this.a=1;if(a){var b=J("sjr::timeout",p(this.f,this,!0));this.d=this.b.setTimeout(b,a)}};
Y.prototype.f=function(a){a&&++this.e;1==this.a&&(null!=this.d&&(this.b.clearTimeout(this.d),this.d=null),this.a=0);Z(this)};Y.prototype.q=function(){return!(!window||!Array)};Y.prototype.r=function(){return this.e};Y.prototype.nq=Y.prototype.o;Y.prototype.nqa=Y.prototype.h;Y.prototype.al=Y.prototype.p;Y.prototype.rl=Y.prototype.f;Y.prototype.sz=Y.prototype.q;Y.prototype.tc=Y.prototype.r;var Z=function(a){var b=J("sjr::tryrun",p(a.n,a));a.b.setTimeout(b,0)};
Y.prototype.n=function(){if(0==this.a&&this.c.length){var a=this.c.shift();this.a=2;var b=J("sjr::run",p(this.g,this,a));a.i.setTimeout(b,0);Z(this)}};Y.prototype.g=function(a){this.a=0;a.l()};
var bb=function(a){try{return a.sz()}catch(b){return!1}},cb=function(a){return!!a&&("object"==typeof a||"function"==typeof a)&&bb(a)&&F(a.nq)&&F(a.nqa)&&F(a.al)&&F(a.rl)},$=function(){if(X&&bb(X))return X;var a=Qa(),b=a.google_jobrunner;return cb(b)?X=b:a.google_jobrunner=X=new Y(a)},db=function(a,b){$().nq(a,b)},eb=function(a,b){$().nqa(a,b)};var fb={"120x90":!0,"160x90":!0,"180x90":!0,"200x90":!0,"468x15":!0,"728x15":!0},gb=function(){var a="script";return["<",a,' src="',O(La(),"/pagead/js/r20140304/r20140226/show_ads_impl.js",""),'"></',a,">"].join("")},hb=function(a,b,c,d){return function(){var e=!1;d&&$().al(3E4);var f=a.document.getElementById(b);f&&!H(f.contentWindow)&&3==a.google_top_js_status&&
(a.google_top_js_status=6);try{if(H(a.document.getElementById(b).contentWindow)){var g=a.document.getElementById(b).contentWindow,l=g.document;l.body&&l.body.firstChild||(l.open(),g.google_async_iframe_close=!0,l.write(c))}else{var k=a.document.getElementById(b).contentWindow,h;f=c;f=String(f);if(f.quote)h=f.quote();else{g=['"'];for(l=0;l<f.length;l++){var m=f.charAt(l),q=m.charCodeAt(0),w=g,y=l+1,r;if(!(r=B[m])){var s;if(31<q&&127>q)s=m;else{var u=m;if(u in C)s=C[u];else if(u in B)s=C[u]=B[u];else{var t=
u,z=u.charCodeAt(0);if(31<z&&127>z)t=u;else{if(256>z){if(t="\\x",16>z||256<z)t+="0"}else t="\\u",4096>z&&(t+="0");t+=z.toString(16).toUpperCase()}s=C[u]=t}}r=s}w[y]=r}g.push('"');h=g.join("")}k.location.replace("javascript:"+h)}e=!0}catch(vb){k=Qa().google_jobrunner,cb(k)&&k.rl()}e&&(e=Ua("google_async_rrc",c),(new P(a)).set(b,hb(a,b,e,!1)))}},ib=function(a){var b=["<iframe"];E(a,function(a,d){null!=a&&b.push(" "+d+'="'+a+'"')});b.push("></iframe>");return b.join("")},jb=function(a,b,c,d){d=d?'"':
"";var e=d+"0"+d;a.width=d+b+d;a.height=d+c+d;a.frameborder=e;a.marginwidth=e;a.marginheight=e;a.vspace=e;a.hspace=e;a.allowtransparency=d+"true"+d;a.scrolling=d+"no"+d},lb=function(a,b,c){kb(a,b,c,function(a,b,f){a=a.document;for(var g=b.id,l=0;!g||a.getElementById(g);)g="aswift_"+l++;b.id=g;b.name=g;g=Number(f.google_ad_width);l=Number(f.google_ad_height);16==f.google_reactive_ad_format?(f=a.createElement("div"),f.innerHTML=Pa(b,g,l),c.appendChild(f.firstChild)):c.innerHTML=Pa(b,g,l);return b.id})},
kb=function(a,b,c,d){var e="script",f=b.google_ad_width,g=b.google_ad_height,l={};jb(l,f,g,!0);l.onload='"'+Ta+'"';d=d(a,l,b);l=b.google_override_format||!fb[b.google_ad_width+"x"+b.google_ad_height]&&"aa"==b.google_loader_used?G(["c","e"],Ia):null;var k=b.google_ad_output,h=b.google_ad_format;h||"html"!=k&&null!=k||(h=b.google_ad_width+"x"+b.google_ad_height,"e"==l&&(h+="_as"));k=!b.google_ad_slot||b.google_override_format||!fb[b.google_ad_width+"x"+b.google_ad_height]&&"aa"==b.google_loader_used;
h=h&&k?h.toLowerCase():"";b.google_ad_format=h;h=ta(c,b,!0);b.google_ad_unit_key=h;h=a.google_adk2_experiment=a.google_adk2_experiment||G(["C","E"],Ha)||"N";"E"==h?b.google_ad_unit_key_2=ta(c,b):"C"==h&&(b.google_ad_unit_key_2="ctrl");c=va(b);h=Sa(a);k=a.document;k=3==({visible:1,hidden:2,prerender:3,preview:4}[k.webkitVisibilityState||k.mozVisibilityState||k.visibilityState||""]||0);!h||k||void 0!==a.google_ad_handling_mode||a.google_async_for_oa_experiment||(a.google_ad_handling_mode=G(["XN","AZ",
"S"],Fa)||G(["EI"],Ga));h=a.google_ad_handling_mode?String(a.google_ad_handling_mode):null;if(Sa(a)&&1==a.google_unique_id&&"XN"!=h&&"S"!=h){var k="zrt_ads_frame"+a.google_unique_id,m;m=b.google_page_url;if(!m){r:{m=a.document;var q=f||a.google_ad_width,w=g||a.google_ad_height;if(a.top==a)m=!1;else{var y=m.documentElement;if(q&&w){var r=1,s=1;a.innerHeight?(r=a.innerWidth,s=a.innerHeight):y&&y.clientHeight?(r=y.clientWidth,s=y.clientHeight):m.body&&(r=m.body.clientWidth,s=m.body.clientHeight);if(s>
2*w||r>2*q){m=!1;break r}}m=!0}}m=m?a.document.referrer:a.document.URL}m=encodeURIComponent(m);q=null;if("PC"==h||"EI"==h||"AZ"==h){switch(h){case "EI":q="I";break;case "AZ":q="Z";break;default:q="K"}q=q+"-"+(m+"/"+b.google_ad_unit_key+"/"+a.google_unique_id)}b={};jb(b,f,g,!1);b.style="display:none";f=q;b.id=k;b.name=k;f=O(Da("","googleads.g.doubleclick.net"),["/pagead/html/r20140304/r20140226/zrt_lookup.html",
f?"#"+encodeURIComponent(f):""].join(""));b.src=f;f=ib(b)}else f=null;g=(new Date).getTime();b=a.google_top_experiment;k=a.google_async_for_oa_experiment;m=a.google_always_use_delayed_impressions_experiment;q=a.google_sra_delay_branch;l=["<!doctype html><html><body>",f,"<",e,">",c,"google_show_ads_impl=true;google_unique_id=",a.google_unique_id,';google_async_iframe_id="',d,'";google_start_time=',v,";",b?'google_top_experiment="'+b+'";':"",h?'google_ad_handling_mode="'+h+'";':"",k?'google_async_for_oa_experiment="'+
k+'";':"",m?'google_always_use_delayed_impressions_experiment="'+m+'";':"",q?'google_sra_delay_branch="'+q+'";':"",l?'google_append_as_for_format_override="'+l+'";':"","google_bpp=",g>v?g-v:1,";google_async_rrc=0;</",e,">",gb(),"</body></html>"].join("");(a.document.getElementById(d)?db:eb)(hb(a,d,l,!0))},mb=Math.floor(1E6*Math.random()),nb=function(a){for(var b=a.data.split("\n"),c={},d=0;d<b.length;d++){var e=b[d].indexOf("=");-1!=e&&(c[b[d].substr(0,e)]=b[d].substr(e+1))}b=c[3];if(c[1]==mb&&(window.google_top_js_status=
4,a.source==top&&0==b.indexOf(a.origin)&&(window.google_top_values=c,window.google_top_js_status=5),window.google_top_js_callbacks)){for(a=0;a<window.google_top_js_callbacks.length;a++)window.google_top_js_callbacks[a]();window.google_top_js_callbacks.length=0}},ob=function(a,b){var c=navigator;if(a&&b&&c){try{var d=qa([b,c.plugins&&c.plugins.length,a.screen&&a.screen.height,(new Date).getTimezoneOffset(),c.userAgent].join())}catch(e){return}c=d/4294967296;if(c<Ja){d=["1h","12h","24h"];d=d[Math.floor(c/
Ja*d.length)];a.google_per_pub_requested=da();a.google_per_pub_branch=d;var f=a.document,c=f.createElement("script");c.src=O(La(),"/pagead/js/per_pub_"+d+".js?client="+b);d=f.getElementsByTagName("script")[0];d.parentNode.insertBefore(c,d)}}};var pb=function(a){return/(^| )adsbygoogle($| )/.test(a.className)&&"done"!=a.getAttribute("data-adsbygoogle-status")},rb=function(a,b,c){oa(c);qb(a,b,c);var d=c.getComputedStyle?c.getComputedStyle(a,null):a.currentStyle;if(!d||"none"!=d.display||"on"==b.google_adtest||0<b.google_reactive_ad_format){1==pa(c)&&ob(c,b.google_ad_client);E(ua,function(a,d){b[d]=b[d]||c[d]});b.google_loader_used="aa";if((d=b.google_ad_output)&&"html"!=d)throw Error("No support for google_ad_output="+d);ya("aa::main",Aa,
function(){lb(c,b,a)})}else c.document.createComment&&a.appendChild(c.document.createComment("No ad requested because of display:none on the adsbygoogle tag"))},qb=function(a,b,c){for(var d=a.attributes,e=d.length,f=0;f<e;f++){var g=d[f];if(/data-/.test(g.nodeName)){var l=g.nodeName.replace("data","google").replace(/-/g,"_");b.hasOwnProperty(l)||(g=g.nodeValue,"google_reactive_ad_format"==l&&(g=+g,g=isNaN(g)?null:g),null===g||(b[l]=g))}}d=b.google_ad_format;if("auto"==d||/^((^|,) *(horizontal|vertical|rectangle) *)+$/.test(d)){d=
a.offsetWidth;e=b.google_ad_format;c=Oa(d,e,c);if(!c)throw Error("Cannot find a responsive size for a container of width="+d+"px and data-ad-format="+e);b.google_ad_height=c.height;b.google_ad_width=300<d&&300<c.height?c.width:1200<d?1200:Math.round(d);a.style.height=b.google_ad_height+"px";b.google_ad_resizable=!0;delete b.google_ad_format;b.google_loader_features_used=128}else L.test(a.style.width)&&L.test(a.style.height)?Ma(a.style,b):(c=c.getComputedStyle?c.getComputedStyle(a,null):a.currentStyle,
a.style.width=c.width,a.style.height=c.height,Ma(c,b),b.google_loader_features_used=256)},sb=function(a){for(var b=document.getElementsByTagName("ins"),c=0,d=b[c];c<b.length;d=b[++c])if(pb(d)&&(!a||d.id==a))return d;return null},tb=function(a){var b=a.element;a=a.params||{};if(b){if(!pb(b)&&(b=b.id&&sb(b.id),!b))throw Error("adsbygoogle: 'element' has already been filled.");if(!("innerHTML"in b))throw Error("adsbygoogle.push(): 'element' is not a good DOM element.");}else if(b=sb(),!b)throw Error("adsbygoogle.push(): All ins elements in the DOM with class=adsbygoogle already have ads in them.");
var c=window;b.setAttribute("data-adsbygoogle-status","done");rb(b,a,c)},ub=function(){if(!window.google_top_experiment&&!window.google_top_js_status){var a=window;if(2!==(a.top==a?0:H(a.top)?1:2))window.google_top_js_status=0;else if(top.postMessage){var b;try{b=D.top.frames.google_top_static_frame?!0:!1}catch(c){b=!1}if(b){if(window.google_top_experiment=G(["jp_c","jp_zl","jp_wfpmr","jp_zlt","jp_wnt"],Ea),"jp_c"!==window.google_top_experiment){a=window;a.addEventListener?a.addEventListener("message",
nb,!1):a.attachEvent&&a.attachEvent("onmessage",nb);window.google_top_js_status=3;a={0:"google_loc_request",1:mb};b=[];for(var d in a)b.push(d+"="+a[d]);top.postMessage(b.join("\n"),"*")}}else window.google_top_js_status=2}else window.google_top_js_status=1}if((d=window.adsbygoogle)&&d.shift)for(b=20;(a=d.shift())&&0<b--;)try{tb(a)}catch(e){throw window.setTimeout(ub,0),e;}window.adsbygoogle={push:tb}};ub();})();
