(function(){var w={},q,o,B,C;o={};var p;p={bind:function(b,a,c){if(b.addEventListener)return b.addEventListener(a,c,!1);else if(b.attachEvent)return b[a]=1,b.attachEvent("onpropertychange",function(b){if(b.propertyName===a)return c()});else throw Error("Attempt to attach custom event "+a+" to something which isn't a DOMElement");},fire:function(b,a){var c;if(b.addEventListener)return c=document.createEvent("HTMLEvents"),c.initEvent(a,!0,!0),document.dispatchEvent(c);else if(b.attachEvent){if(b[a])return b[a]++}else throw Error("Attempt to fire custom event "+
a+" on something which isn't a DOMElement");}};w.bind=p.bind;w.fire=p.fire;var u,v,x,k,y=Array.prototype.indexOf||function(b){for(var a=0,c=this.length;a<c;a++)if(this[a]===b)return a;return-1};q=u="http://livereload.com/protocols/official-6";o=v="http://livereload.com/protocols/official-7";k=function(){return function(b,a){this.message="LiveReload protocol error ("+b+') after receiving data: "'+a+'".'}}();var z;x=x=function(){function b(a){this.handlers=a;this.reset()}b.prototype.reset=function(){return this.protocol=
null};b.prototype.process=function(a){var c,b,e,f;try{if(this.protocol==null){if(a.match(/^!!ver:([\d.]+)$/))this.protocol=6;else if(b=this._parseMessage(a,["hello"]))if(b.protocols.length)if(y.call(b.protocols,v)>=0)this.protocol=7;else if(y.call(b.protocols,u)>=0)this.protocol=6;else throw new k("no supported protocols found");else throw new k("no protocols specified in handshake message");return this.handlers.connected(this.protocol)}else if(this.protocol===6){b=JSON.parse(a);if(!b.length)throw new k("protocol 6 messages must be arrays");
c=b[0];e=b[1];if(c!=="refresh")throw new k("unknown protocol 6 command");return this.handlers.message({command:"reload",path:e.path,liveCSS:(f=e.apply_css_live)!=null?f:!0})}else return b=this._parseMessage(a,["reload","alert"]),this.handlers.message(b)}catch(j){if(j instanceof k)return this.handlers.error(j);else throw j;}};b.prototype._parseMessage=function(a,b){var d,e;try{d=JSON.parse(a)}catch(f){throw new k("unparsable JSON",a);}if(!d.command)throw new k('missing "command" key',a);if(e=d.command,
y.call(b,e)<0)throw new k("invalid command '"+d.command+"', only valid commands are: "+b.join(", ")+")",a);return d};return b}();u=q;v=o;q=z=function(){function b(a,b,d,e){var f=this;this.options=a;this.WebSocket=b;this.Timer=d;this.handlers=e;this._uri="ws://"+this.options.host+":"+this.options.port+"/livereload";this._nextDelay=this.options.mindelay;this._connectionDesired=!1;this.protocol=0;this.protocolParser=new x({connected:function(a){f.protocol=a;f._handshakeTimeout.stop();f._nextDelay=f.options.mindelay;
f._disconnectionReason="broken";return f.handlers.connected(a)},error:function(a){f.handlers.error(a);return f._closeOnError()},message:function(a){return f.handlers.message(a)}});this._handshakeTimeout=new d(function(){if(f._isSocketConnected())return f._disconnectionReason="handshake-timeout",f.socket.close()});this._reconnectTimer=new d(function(){return!f._connectionDesired?void 0:f.connect()});this.connect()}b.prototype._isSocketConnected=function(){return this.socket&&this.socket.readyState===
this.WebSocket.OPEN};b.prototype.connect=function(){var a=this;this._connectionDesired=!0;if(!this._isSocketConnected())return this._reconnectTimer.stop(),this._disconnectionReason="cannot-connect",this.protocolParser.reset(),this.handlers.connecting(),this.socket=new this.WebSocket(this._uri),this.socket.onopen=function(b){return a._onopen(b)},this.socket.onclose=function(b){return a._onclose(b)},this.socket.onmessage=function(b){return a._onmessage(b)},this.socket.onerror=function(b){return a._onerror(b)}};
b.prototype.disconnect=function(){this._connectionDesired=!1;this._reconnectTimer.stop();if(this._isSocketConnected())return this._disconnectionReason="manual",this.socket.close()};b.prototype._scheduleReconnection=function(){if(this._connectionDesired&&!this._reconnectTimer.running)return this._reconnectTimer.start(this._nextDelay),this._nextDelay=Math.min(this.options.maxdelay,this._nextDelay*2)};b.prototype.sendCommand=function(a){return this.protocol==null?void 0:this._sendCommand(a)};b.prototype._sendCommand=
function(a){return this.socket.send(JSON.stringify(a))};b.prototype._closeOnError=function(){this._handshakeTimeout.stop();this._disconnectionReason="error";return this.socket.close()};b.prototype._onopen=function(){var a;this.handlers.socketConnected();this._disconnectionReason="handshake-failed";a={command:"hello",protocols:[u,v],ver:"2.0.8"};if(this.options.ext)a.ext=this.options.ext;if(this.options.extver)a.extver=this.options.extver;if(this.options.snipver)a.snipver=this.options.snipver;this._sendCommand(a);
return this._handshakeTimeout.start(this.options.handshake_timeout)};b.prototype._onclose=function(){this.protocol=0;this.handlers.disconnected(this._disconnectionReason,this._nextDelay);return this._scheduleReconnection()};b.prototype._onerror=function(){};b.prototype._onmessage=function(a){return this.protocolParser.process(a.data)};return b}();var r,F=function(b,a){return function(){return b.apply(a,arguments)}};o=r=function(){function b(a){this.func=a;this.running=!1;this.id=null;this._handler=
F(function(){this.running=!1;this.id=null;return this.func()},this)}b.prototype.start=function(a){this.running&&clearTimeout(this.id);this.id=setTimeout(this._handler,a);return this.running=!0};b.prototype.stop=function(){if(this.running)return clearTimeout(this.id),this.running=!1,this.id=null};return b}();r.start=function(b,a){return setTimeout(a,b)};var s;B=s=function(){function b(){this.host=null;this.port=35729;this.extver=this.ext=this.snipver=null;this.mindelay=1E3;this.maxdelay=6E4;this.handshake_timeout=
5E3}b.prototype.set=function(a,b){switch(typeof this[a]){case "undefined":break;case "number":return this[a]=+b;default:return this[a]=b}};return b}();s.extract=function(b){var a,c,d,e,f,j;j=b.getElementsByTagName("script");for(e=0,f=j.length;e<f;e++)if(b=j[e],(d=b.src)&&(c=d.match(/^[^:]+:\/\/(.*)\/z?livereload\.js(?:\?(.*))?$/))){d=new s;if(b=c[1].match(/^([^\/:]+)(?::(\d+))?$/))if(d.host=b[1],b[2])d.port=parseInt(b[2],10);if(c[2]){f=c[2].split("&");for(b=0,e=f.length;b<e;b++)c=f[b],(a=c.split("=")).length>
1&&d.set(a[0].replace(/-/g,"_"),a.slice(1).join("="))}return d}return null};(function(){var b,a,c,d,e,f;f=function(a){var b,m,g;(m=a.indexOf("#"))>=0?(b=a.slice(m),a=a.slice(0,m)):b="";(m=a.indexOf("?"))>=0?(g=a.slice(m),a=a.slice(0,m)):g="";return{url:a,params:g,hash:b}};c=function(a){a=f(a).url;a=a.indexOf("file://")===0?a.replace(/^file:\/\/(localhost)?/,""):a.replace(/^([^:]+:)?\/\/([^:\/]+)(:\d*)?\//,"/");return decodeURIComponent(a)};e=function(b,D,m){var g,c,h,i,d;g={score:0};for(i=0,d=D.length;i<
d;i++)c=D[i],h=a(b,m(c)),h>g.score&&(g={object:c,score:h});return g.score>0?g:null};a=function(a,b){var m,g,c,h,a=a.replace(/^\/+/,"").toLowerCase(),b=b.replace(/^\/+/,"").toLowerCase();if(a===b)return 1E4;m=a.split("/").reverse();g=b.split("/").reverse();h=Math.min(m.length,g.length);for(c=0;c<h&&m[c]===g[c];)++c;return c};d=function(b,c){return a(b,c)>0};b=[{selector:"background",styleNames:["backgroundImage"]},{selector:"border",styleNames:["borderImage","webkitBorderImage","MozBorderImage"]}];
C=function(){function a(b,m,c){this.window=b;this.console=m;this.Timer=c;this.document=this.window.document;this.importCacheWaitPeriod=200;this.plugins=[]}a.name="Reloader";a.prototype.addPlugin=function(a){return this.plugins.push(a)};a.prototype.analyze=function(){return results};a.prototype.reload=function(a,b){var c,l,h,i;this.options=b;if((c=this.options).stylesheetReloadTimeout==null)c.stylesheetReloadTimeout=15E3;i=this.plugins;for(l=0,h=i.length;l<h;l++)if(c=i[l],c.reload&&c.reload(a,b))return;
if(!b.liveCSS||!a.match(/\.css$/i)||!this.reloadStylesheet(a))if(b.liveImg&&a.match(/\.(jpe?g|png|gif)$/i))this.reloadImages(a);else return this.reloadPage()};a.prototype.reloadPage=function(){return this.window.document.location.reload()};a.prototype.reloadImages=function(a){var m,g,l,h,i,f,e,j,t;m=this.generateUniqueString();e=this.document.images;for(l=0,i=e.length;l<i;l++)if(g=e[l],d(a,c(g.src)))g.src=this.generateCacheBustUrl(g.src,m);if(this.document.querySelectorAll)for(i=0,e=b.length;i<e;i++){h=
b[i];g=h.selector;l=h.styleNames;t=this.document.querySelectorAll("[style*="+g+"]");for(f=0,j=t.length;f<j;f++)g=t[f],this.reloadStyleImages(g.style,l,a,m)}if(this.document.styleSheets){i=this.document.styleSheets;e=[];for(g=0,l=i.length;g<l;g++)h=i[g],e.push(this.reloadStylesheetImages(h,a,m));return e}};a.prototype.reloadStylesheetImages=function(a,c,g){var l,h,i,d,e,f;try{l=a!=null?a.cssRules:void 0}catch(j){}if(l)for(i=0,e=l.length;i<e;i++)switch(a=l[i],a.type){case CSSRule.IMPORT_RULE:this.reloadStylesheetImages(a.styleSheet,
c,g);break;case CSSRule.STYLE_RULE:for(d=0,f=b.length;d<f;d++)h=b[d].styleNames,this.reloadStyleImages(a.style,h,c,g);break;case CSSRule.MEDIA_RULE:this.reloadStylesheetImages(a,c,g)}};a.prototype.reloadStyleImages=function(a,b,g,l){var h,i,e,f,j,t=this;for(f=0,j=b.length;f<j;f++)i=b[f],e=a[i],typeof e==="string"&&(h=e.replace(/\burl\s*\(([^)]*)\)/,function(a,b){return d(g,c(b))?"url("+t.generateCacheBustUrl(b,l)+")":a}),h!==e&&(a[i]=h))};a.prototype.reloadStylesheet=function(a){var b,g,d,h,i,f,j,
k=this;d=function(){var a,b,c,d;c=this.document.getElementsByTagName("link");d=[];for(a=0,b=c.length;a<b;a++)g=c[a],g.rel==="stylesheet"&&!g.__LiveReload_pendingRemoval&&d.push(g);return d}.call(this);b=[];j=this.document.getElementsByTagName("style");for(i=0,f=j.length;i<f;i++)h=j[i],h.sheet&&this.collectImportedStylesheets(h,h.sheet,b);for(h=0,i=d.length;h<i;h++)g=d[h],this.collectImportedStylesheets(g,g.sheet,b);if(this.window.StyleFix&&this.document.querySelectorAll){j=this.document.querySelectorAll("style[data-href]");
for(i=0,f=j.length;i<f;i++)h=j[i],d.push(h)}this.console.log("LiveReload found "+d.length+" LINKed stylesheets, "+b.length+" @imported stylesheets");if(b=e(a,d.concat(b),function(a){return c(k.linkHref(a))}))b.object.rule?(this.console.log("LiveReload is reloading imported stylesheet: "+b.object.href),this.reattachImportedRule(b.object)):(this.console.log("LiveReload is reloading stylesheet: "+this.linkHref(b.object)),this.reattachStylesheetLink(b.object));else{this.console.log("LiveReload will reload all stylesheets because path '"+
a+"' did not match any specific one");for(a=0,b=d.length;a<b;a++)g=d[a],this.reattachStylesheetLink(g)}return!0};a.prototype.collectImportedStylesheets=function(a,b,c){var d,h,f,e;try{h=b!=null?b.cssRules:void 0}catch(j){}if(h&&h.length)for(b=f=0,e=h.length;f<e;b=++f)switch(d=h[b],d.type){case CSSRule.CHARSET_RULE:continue;case CSSRule.IMPORT_RULE:c.push({link:a,rule:d,index:b,href:d.href}),this.collectImportedStylesheets(a,d.styleSheet,c)}};a.prototype.waitUntilCssLoads=function(a,b){var c,d,f,e=
this;c=!1;d=function(){if(!c)return c=!0,b()};a.onload=function(){console.log("onload!");e.knownToSupportCssOnLoad=!0;return d()};this.knownToSupportCssOnLoad||(f=function(){return a.sheet?(console.log("polling!"),d()):e.Timer.start(50,f)})();return this.Timer.start(this.options.stylesheetReloadTimeout,d)};a.prototype.linkHref=function(a){return a.href||a.getAttribute("data-href")};a.prototype.reattachStylesheetLink=function(a){var b,c,d=this;if(!a.__LiveReload_pendingRemoval)return a.__LiveReload_pendingRemoval=
!0,a.tagName==="STYLE"?(b=this.document.createElement("link"),b.rel="stylesheet",b.media=a.media,b.disabled=a.disabled):b=a.cloneNode(!1),b.href=this.generateCacheBustUrl(this.linkHref(a)),c=a.parentNode,c.lastChild===a?c.appendChild(b):c.insertBefore(b,a.nextSibling),this.waitUntilCssLoads(b,function(){var c;c=/AppleWebKit/.test(navigator.userAgent)?5:200;return d.Timer.start(c,function(){var c;if(a.parentNode)return a.parentNode.removeChild(a),b.onreadystatechange=null,(c=d.window.StyleFix)!=null?
c.link(b):void 0})})};a.prototype.reattachImportedRule=function(a){var b,c,d,f,e,j,k,n=this;j=a.rule;c=a.index;a=a.link;e=j.parentStyleSheet;b=this.generateCacheBustUrl(j.href);d=j.media.length?[].join.call(j.media,", "):"";f='@import url("'+b+'") '+d+";";j.__LiveReload_newHref=b;k=this.document.createElement("link");k.rel="stylesheet";k.href=b;k.__LiveReload_pendingRemoval=!0;a.parentNode&&a.parentNode.insertBefore(k,a);return this.Timer.start(this.importCacheWaitPeriod,function(){k.parentNode&&
k.parentNode.removeChild(k);if(j.__LiveReload_newHref===b)return e.insertRule(f,c),e.deleteRule(c+1),j=e.cssRules[c],j.__LiveReload_newHref=b,n.Timer.start(n.importCacheWaitPeriod,function(){if(j.__LiveReload_newHref===b)return e.insertRule(f,c),e.deleteRule(c+1)})})};a.prototype.generateUniqueString=function(){return"livereload="+Date.now()};a.prototype.generateCacheBustUrl=function(a,b){var c,d,e;b==null&&(b=this.generateUniqueString());e=f(a);a=e.url;c=e.hash;d=e.params;this.options.overrideURL&&
a.indexOf(this.options.serverURL)<0&&(a=this.options.serverURL+this.options.overrideURL+"?url="+encodeURIComponent(a));e=d.replace(/(\?|&)livereload=(\d+)/,function(a,c){return""+c+b});e===d&&(e=d.length===0?"?"+b:""+d+"&"+b);return a+e+c};return a}()}).call(this);var n,E;z=q;r=o;s=B;E=C;q=n=function(){function b(a){var b=this;this.window=a;this.listeners={};this.plugins=[];this.pluginIdentifiers={};this.console=this.window.location.href.match(/LR-verbose/)&&this.window.console&&this.window.console.log&&
this.window.console.error?this.window.console:{log:function(){},error:function(){}};(this.WebSocket=this.window.WebSocket||this.window.MozWebSocket)?(this.options=s.extract(this.window.document))?(this.reloader=new E(this.window,this.console,r),this.connector=new z(this.options,this.WebSocket,r,{connecting:function(){},socketConnected:function(){},connected:function(a){var e;typeof(e=b.listeners).connect==="function"&&e.connect();b.log("LiveReload is connected to "+b.options.host+":"+b.options.port+
" (protocol v"+a+").");return b.analyze()},error:function(a){return a instanceof k?console.log(""+a.message+"."):console.log("LiveReload internal error: "+a.message)},disconnected:function(a,e){var f;typeof(f=b.listeners).disconnect==="function"&&f.disconnect();switch(a){case "cannot-connect":return b.log("LiveReload cannot connect to "+b.options.host+":"+b.options.port+", will retry in "+e+" sec.");case "broken":return b.log("LiveReload disconnected from "+b.options.host+":"+b.options.port+", reconnecting in "+
e+" sec.");case "handshake-timeout":return b.log("LiveReload cannot connect to "+b.options.host+":"+b.options.port+" (handshake timeout), will retry in "+e+" sec.");case "handshake-failed":return b.log("LiveReload cannot connect to "+b.options.host+":"+b.options.port+" (handshake failed), will retry in "+e+" sec.");case "manual":break;case "error":break;default:return b.log("LiveReload disconnected from "+b.options.host+":"+b.options.port+" ("+a+"), reconnecting in "+e+" sec.")}},message:function(a){switch(a.command){case "reload":return b.performReload(a);
case "alert":return b.performAlert(a)}}})):console.error("LiveReload disabled because it could not find its own <SCRIPT> tag"):console.error("LiveReload disabled because the browser does not seem to support web sockets")}b.prototype.on=function(a,b){return this.listeners[a]=b};b.prototype.log=function(a){return this.console.log(""+a)};b.prototype.performReload=function(a){var b,d;this.log("LiveReload received reload request for "+a.path+".");return this.reloader.reload(a.path,{liveCSS:(b=a.liveCSS)!=
null?b:!0,liveImg:(d=a.liveImg)!=null?d:!0,originalPath:a.originalPath||"",overrideURL:a.overrideURL||"",serverURL:"http://"+this.options.host+":"+this.options.port})};b.prototype.performAlert=function(a){return alert(a.message)};b.prototype.shutDown=function(){var a;this.connector.disconnect();this.log("LiveReload disconnected.");return typeof(a=this.listeners).shutdown==="function"?a.shutdown():void 0};b.prototype.hasPlugin=function(a){return!!this.pluginIdentifiers[a]};b.prototype.addPlugin=function(a){var b=
this;this.hasPlugin(a.identifier)||(this.pluginIdentifiers[a.identifier]=!0,a=new a(this.window,{_livereload:this,_reloader:this.reloader,_connector:this.connector,console:this.console,Timer:r,generateCacheBustUrl:function(a){return b.reloader.generateCacheBustUrl(a)}}),this.plugins.push(a),this.reloader.addPlugin(a))};b.prototype.analyze=function(){var a,b,d,e,f,j;if(this.connector.protocol>=7){d={};j=this.plugins;for(e=0,f=j.length;e<f;e++)a=j[e],d[a.constructor.identifier]=b=(typeof a.analyze===
"function"?a.analyze():void 0)||{},b.version=a.constructor.version;this.connector.sendCommand({command:"info",plugins:d,url:this.window.location.href})}};return b}();o=function(){function b(a,b){this.window=a;this.host=b}b.identifier="less";b.version="1.0";b.prototype.reload=function(a,b){if(this.window.less&&this.window.less.refresh){if(a.match(/\.less$/i))return this.reloadLess(a);if(b.originalPath.match(/\.less$/i))return this.reloadLess(b.originalPath)}return!1};b.prototype.reloadLess=function(){var a,
b,d,e;b=function(){var b,c,d,e;d=document.getElementsByTagName("link");e=[];for(b=0,c=d.length;b<c;b++)a=d[b],(a.href&&a.rel==="stylesheet/less"||a.rel.match(/stylesheet/)&&a.type.match(/^text\/(x-)?less$/))&&e.push(a);return e}();if(b.length===0)return!1;for(d=0,e=b.length;d<e;d++)a=b[d],a.href=this.host.generateCacheBustUrl(a.href);this.host.console.log("LiveReload is asking LESS to recompile all stylesheets");this.window.less.refresh(!0);return!0};b.prototype.analyze=function(){return{disable:!(!this.window.less||
!this.window.less.refresh)}};return b}();var A;p=w;n=window.LiveReload=new q(window);for(A in window)A.match(/^LiveReloadPlugin/)&&n.addPlugin(window[A]);n.addPlugin(o);n.on("shutdown",function(){return delete window.LiveReload});n.on("connect",function(){return p.fire(document,"LiveReloadConnect")});n.on("disconnect",function(){return p.fire(document,"LiveReloadDisconnect")});p.bind(document,"LiveReloadShutDown",function(){return n.shutDown()})})();
