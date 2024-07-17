!function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):(e=e||self).FlowPaperPublication=t()}(this,function(){"use strict";var e=function(e){this.elementsArray=[],this.embeds={},this.elementId=-1,void 0===e&&(e={}),window.addEventListener("message",this._receiveMessage.bind(this),!1)};return e.prototype._receiveMessage=function(e){var t=e.data;if(t&&t.publicationUrl&&-1!==t.publicationUrl.indexOf(e.origin))for(var i in this.embeds)this.embeds[i].contentWindow.postMessage(JSON.stringify({auth:this.embeds[i].url,loc:window.location.href}),this.embeds[i].url)},e.prototype._getElementsByClass=function(e,t){if(void 0===t&&(t=window.document),"function"==typeof t.getElementsByClassName)return t.getElementsByClassName(e);var i=[],n=t.getElementsByTagName("*");for(var o in n)if(Object.prototype.hasOwnProperty.call(n,o)&&"object"===s(n[o])){var r=Object.prototype.hasOwnProperty.call(n[o],"className")?n[o].className:n[o].getAttribute("className"),a=null===r?[]:r.split(" ");-1!==this._indexOf(a,e)&&i.push(n[o])}return i},e.prototype.parseAllEmbeds=function(){for(var e=this._getElementsByClass("fp-embed"),t=0;t<e.length;t++){var i=e[t];0>this._indexOf(this.elementsArray,i)&&this._parseEmbed(i)}},e.prototype.endsWith=function(e,t){return e.substr(e.length-t.length)===t},e.prototype._parseEmbed=function(e){e.getAttribute("data-fp-version");var t=e.getAttribute("href"),i=e.getAttribute("data-fp-width"),n=e.getAttribute("data-fp-height"),o=e.getAttribute("lightbox");this._ajax(t+(this.endsWith(t,"/")?"":"/")+"docs/oembed.js",function(t){if(t){var i=JSON.parse(t);e.innerHTML=i.html}}),this.storeEmbed({elementId:this._getNextElementId(),element:e,width:i,height:n,lightbox:o,embedPublicationUrl:t})},e.prototype._getNextElementId=function(){return this.elementId++,this.elementId},e.prototype.storeEmbed=function(e){var t=window.document.createElement("div"),i=this;t.style.width=e.width||"100%",t.style.height=e.height||"100%",e.element.parentNode.appendChild(t),i.embeds[e.elementId]={id:e.elementId,url:e.embedPublicationUrl,element:e.element,container:t,link:e.linkElement,image:e.image,isProtected:e.isProtected,wheel:e.wheel,urlHash:e.urlHash,thumbnailUrl:e.thumbnailUrl,lightbox:e.lightbox},i._resizeEmbed(e.element,t,e.linkElement,e.embedPublicationUrl,e.elementId)},e.prototype._resizeEmbed=function(e,t,i,n,o){this._runPayload(t,n,o,e)},e.prototype._runPayload=function(e,t,i,n){if("true"==this.embeds[i].lightbox)this.embeds[i].element.setAttribute("data-lity","");else{var o=window.document.createElement("iframe");o.style.width="100%",o.style.height="100%",o.setAttribute("type","text/html"),o.setAttribute("scrolling","no"),o.setAttribute("frameborder","0"),o.setAttribute("allowfullscreen","allowfullscreen"),o.setAttribute("allow","accelerometer; autoplay; encrypted-media; fullscreen; gyroscope; picture-in-picture;"),o.setAttribute("src",t),n.style.display="none",e.appendChild(o),this.embeds[i].contentWindow=o.contentWindow}},e.prototype._ajax=function(e,t,i,n){var o=new XMLHttpRequest;try{o.open(i?"POST":"GET",e,1),o.setRequestHeader("X-Requested-With","XMLHttpRequest"),o.setRequestHeader("Content-type","application/json"),n&&(o.timeout=n),o.onreadystatechange=function(){o.readyState>3&&t&&t(o.responseText,o)},o.send(i)}catch(r){window.console&&console.error(r)}},e.prototype._indexOf=function(e,t){if(null===e)return -1;for(var i=e.length,n=0;n<i;n++)if(n in e&&e[n]===t)return n;return -1},new e().parseAllEmbeds()});var lityCss=".lity{z-index:9990;position:fixed;top:0;right:0;bottom:0;left:0;white-space:nowrap;background:#0b0b0b;background:rgba(0,0,0,0.9);outline:none !important;opacity:0;-webkit-transition:opacity .3s ease;-o-transition:opacity .3s ease;transition:opacity .3s ease}.lity.lity-opened{opacity:1}.lity.lity-closed{opacity:0}.lity *{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.lity-wrap{z-index:9990;position:fixed;top:0;right:0;bottom:0;left:0;text-align:center;outline:none !important}.lity-wrap:before{content:'';display:inline-block;height:100%;vertical-align:middle;margin-right:-0.25em}.lity-loader{z-index:9991;color:#fff;position:absolute;top:50%;margin-top:-0.8em;width:100%;text-align:center;font-size:14px;font-family:Arial,Helvetica,sans-serif;opacity:0;-webkit-transition:opacity .3s ease;-o-transition:opacity .3s ease;transition:opacity .3s ease}.lity-loading .lity-loader{opacity:1}.lity-container{z-index:9992;position:relative;text-align:left;vertical-align:middle;display:inline-block;white-space:normal;max-width:100%;max-height:100%;outline:none !important}.lity-content{z-index:9993;width:100%;-webkit-transform:scale(1);-ms-transform:scale(1);-o-transform:scale(1);transform:scale(1);-webkit-transition:-webkit-transform .3s ease;transition:-webkit-transform .3s ease;-o-transition:-o-transform .3s ease;transition:transform .3s ease;transition:transform .3s ease, -webkit-transform .3s ease, -o-transform .3s ease}.lity-loading .lity-content,.lity-closed .lity-content{-webkit-transform:scale(.8);-ms-transform:scale(.8);-o-transform:scale(.8);transform:scale(.8)}.lity-content:after{content:'';position:absolute;left:0;top:0;bottom:0;display:block;right:0;width:auto;height:auto;z-index:-1;-webkit-box-shadow:0 0 8px rgba(0,0,0,0.6);box-shadow:0 0 8px rgba(0,0,0,0.6)}.lity-close{z-index:9994;width:35px;height:35px;position:fixed;right:0;top:0;-webkit-appearance:none;cursor:pointer;text-decoration:none;text-align:center;padding:0;color:#fff;font-style:normal;font-size:35px;font-family:Arial,Baskerville,monospace;line-height:35px;text-shadow:0 1px 2px rgba(0,0,0,0.6);border:0;background:none;outline:none;-webkit-box-shadow:none;box-shadow:none}.lity-close::-moz-focus-inner{border:0;padding:0}.lity-close:hover,.lity-close:focus,.lity-close:active,.lity-close:visited{text-decoration:none;text-align:center;padding:0;color:#fff;font-style:normal;font-size:35px;font-family:Arial,Baskerville,monospace;line-height:35px;text-shadow:0 1px 2px rgba(0,0,0,0.6);border:0;background:none;outline:none;-webkit-box-shadow:none;box-shadow:none}.lity-close:active{top:1px}.lity-image img{max-width:100%;display:block;line-height:0;border:0}.lity-iframe .lity-container,.lity-youtube .lity-container,.lity-vimeo .lity-container,.lity-facebookvideo .lity-container,.lity-googlemaps .lity-container{width:100%;max-width:964px}.lity-iframe-container{width:100%;height:0;padding-top:56.25%;overflow:auto;pointer-events:auto;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-overflow-scrolling:touch}.lity-iframe-container iframe{position:absolute;display:block;top:0;left:0;width:100%;height:100%;-webkit-box-shadow:0 0 8px rgba(0,0,0,0.6);box-shadow:0 0 8px rgba(0,0,0,0.6);background:#000}.lity-hide{display:none}";document.head.appendChild(document.createElement("style")).innerHTML=lityCss,function(e,t){"function"==typeof define&&define.amd?define(["jquery"],function(i){return t(e,i)}):"object"==typeof module&&"object"==typeof module.exports?module.exports=t(e,require("jquery")):e.lity=t(e,e.jQuery||e.Zepto)}("undefined"!=typeof window?window:this,function(e,t){"use strict";function i(e){var t=g();return P&&e.length?(e.one(P,t.resolve),setTimeout(t.resolve,500)):t.resolve(),t.promise()}function n(e,i,n){if(1===arguments.length)return t.extend({},e);if("string"==typeof i){if(void 0===n)return void 0===e[i]?null:e[i];e[i]=n}else t.extend(e,i);return this}function o(e){for(var t,i=decodeURI(e.split("#")[0]).split("&"),n={},o=0,r=i.length;o<r;o++)i[o]&&(n[(t=i[o].split("="))[0]]=t[1]);return n}function r(e,i){return e+(e.indexOf("?")>-1?"&":"?")+t.param(i)}function a(e,t){var i=e.indexOf("#");return -1===i?t:(i>0&&(e=e.substr(i)),t+e)}function l(e,i){var n=t('<img src="'+e+'" alt="'+(i.opener()&&i.opener().data("lity-desc")||"Image with no description")+'"/>'),o=g(),r=function(){o.reject(t('<span class="lity-error"></span>').append("Failed loading image"))};return n.on("load",function(){if(0===this.naturalWidth)return r();o.resolve(n)}).on("error",r),o.promise()}function d(e){return'<div class="lity-iframe-container"><iframe frameborder="0" allowfullscreen allow="autoplay; fullscreen" src="'+e+'"/></div>'}function c(){return y.documentElement.clientHeight?y.documentElement.clientHeight:Math.round(b.height())}function u(e){var t,i,n,o,r=f();r&&(27===e.keyCode&&r.options("esc")&&r.close(),9===e.keyCode&&(t=e,i=r,n=i.element().find(_),o=n.index(y.activeElement),t.shiftKey&&o<=0?(n.get(n.length-1).focus(),t.preventDefault()):t.shiftKey||o!==n.length-1||(n.get(0).focus(),t.preventDefault())))}function p(){t.each(v,function(e,t){t.resize()})}function f(){return 0===v.length?null:v[0]}function m(e,o,r,a){var l,d,f,m,h,_,E,z,C,A,j,P=this,O=!1,T=!1;o=t.extend({},k,o),d=t(o.template),P.element=function(){return d},P.opener=function(){return r},P.options=t.proxy(n,P,o),P.handlers=t.proxy(n,P,o.handlers),P.resize=function(){O&&!T&&f.css("max-height",c()+"px").trigger("lity:resize",[P])},P.close=function(){if(O&&!T){T=!0,(e=P).element().attr(x,"true"),1===v.length&&($.removeClass("lity-active"),b.off({resize:p,keydown:u})),(n=(v=t.grep(v,function(t){return e!==t})).length?v[0].element():t(".lity-hidden")).removeClass("lity-hidden").each(function(){var e=t(this),i=e.data(w);i?e.attr(x,i):e.removeAttr(x),e.removeData(w)});var e,n,o=g();if(a&&(y.activeElement===d[0]||t.contains(d[0],y.activeElement)))try{a.focus()}catch(r){}return f.trigger("lity:close",[P]),d.removeClass("lity-opened").addClass("lity-closed"),i(f.add(d)).always(function(){f.trigger("lity:remove",[P]),d.remove(),d=void 0,o.resolve()}),o.promise()}},l=(m=e,h=P,_=o.handlers,E=o.handler,C="inline",A=t.extend({},_),E&&A[E]?(z=A[E](m,h),C=E):(t.each(["inline","iframe"],function(e,t){delete A[t],A[t]=_[t]}),t.each(A,function(e,t){return!t||!(!t.test||t.test(m,h))||(!1!==(z=t(m,h))?(C=e,!1):void 0)})),{handler:C,content:z||""}),d.attr(x,"false").addClass("lity-loading lity-opened lity-"+l.handler).appendTo("body").focus().on("click","[data-lity-close]",function(e){t(e.target).is("[data-lity-close]")&&P.close()}).trigger("lity:open",[P]),j=P,1===v.unshift(j)&&($.addClass("lity-active"),b.on({resize:p,keydown:u})),t("body > *").not(j.element()).addClass("lity-hidden").each(function(){var e=t(this);void 0===e.data(w)&&e.data(w,e.attr(x)||null)}).attr(x,"true"),t.when(l.content).always(function e(n){f=t(n).css("max-height",c()+"px"),d.find(".lity-loader").each(function(){var e=t(this);i(e).always(function(){e.remove()})}),d.removeClass("lity-loading").find(".lity-content").empty().append(f),O=!0,f.trigger("lity:ready",[P])})}function h(e,i,n){e.preventDefault?(e.preventDefault(),e=(n=t(this)).data("lity-target")||n.attr("href")||n.attr("src")):n=t(n);var o=new m(e,t.extend({},n.data("lity-options")||n.data("lity"),i),n,y.activeElement);if(!e.preventDefault)return o}if(t===undefined){return}var y=e.document,b=t(e),g=t.Deferred,$=t("html"),v=[],x="aria-hidden",w="lity-"+x,_='a[href],area[href],input:not([disabled]),select:not([disabled]),textarea:not([disabled]),button:not([disabled]),iframe,object,embed,[contenteditable],[tabindex]:not([tabindex^="-"])',k={esc:!0,handler:null,handlers:{image:l,inline:function e(i,n){var o,r,a;try{o=t(i)}catch(l){return!1}return!!o.length&&(r=t('<i style="display:none !important"></i>'),a=o.hasClass("lity-hide"),n.element().one("lity:remove",function(){r.before(o).remove(),a&&!o.closest(".lity-content").length&&o.addClass("lity-hide")}),o.removeClass("lity-hide").after(r))},youtube:function e(i){var n=z.exec(i);return!!n&&d(a(i,r("https://www.youtube"+(n[2]||"")+".com/embed/"+n[4],t.extend({autoplay:1},o(n[5]||"")))))},vimeo:function e(i){var n=C.exec(i);return!!n&&d(a(i,r("https://player.vimeo.com/video/"+n[3],t.extend({autoplay:1},o(n[4]||"")))))},googlemaps:function e(t){var i=A.exec(t);return!!i&&d(a(t,r("https://www.google."+i[3]+"/maps?"+i[6],{output:i[6].indexOf("layer=c")>0?"svembed":"embed"})))},facebookvideo:function e(i){var n=j.exec(i);return!!n&&(0!==i.indexOf("http")&&(i="https:"+i),d(a(i,r("https://www.facebook.com/plugins/video.php?href="+i,t.extend({autoplay:1},o(n[4]||""))))))},iframe:d},template:'<div class="lity" role="dialog" aria-label="Dialog Window (Press escape to close)" tabindex="-1"><div class="lity-wrap" data-lity-close role="document"><div class="lity-loader" aria-hidden="true">Loading...</div><div class="lity-container"><div class="lity-content"></div><button class="lity-close" type="button" aria-label="Close (Press escape to close)" data-lity-close>&times;</button></div></div></div>'},E=/(^data:image\/)|(\.(png|jpe?g|gif|svg|webp|bmp|ico|tiff?)(\?\S*)?$)/i,z=/(youtube(-nocookie)?\.com|youtu\.be)\/(watch\?v=|v\/|u\/|embed\/?)?([\w-]{11})(.*)?/i,C=/(vimeo(pro)?.com)\/(?:[^\d]+)?(\d+)\??(.*)?$/,A=/((maps|www)\.)?google\.([^\/\?]+)\/?((maps\/?)?\?)(.*)/i,j=/(facebook\.com)\/([a-z0-9_-]*)\/videos\/([0-9]*)(.*)?$/i,P=function(){var e=y.createElement("div"),t={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd otransitionend",transition:"transitionend"};for(var i in t)if(void 0!==e.style[i])return t[i];return!1}();return l.test=function(e){return E.test(e)},h.version="2.4.1",h.options=t.proxy(n,h,k),h.handlers=t.proxy(n,h,k.handlers),h.current=f,t(y).on("click.lity","[data-lity]",h),h});