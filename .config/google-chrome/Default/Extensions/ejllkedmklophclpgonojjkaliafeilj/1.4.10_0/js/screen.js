!function(){var e="undefined"!=typeof chrome?chrome:"undefined"!=typeof browser?browser:void 0,t=new Image,n=new Image,i=document.getElementById("target"),c=document.createElement("canvas"),d=document.getElementById("download"),o=document.getElementById("print"),a=document.getElementById("crop"),r=document.getElementById("controls"),l=document.getElementById("cropControls"),h=document.getElementById("confirmControls"),u=document.getElementById("crop-back"),m=document.getElementById("crop-forward"),s=document.getElementById("crop-stop"),g=document.getElementById("confirm-crop"),v=document.getElementById("cancel-crop"),f=document.getElementById("instruction"),w=document.getElementById("boxclose"),E=document.getElementById("copyToClipboard"),p=i.getContext("2d"),y=[],I=0,L=null,x=null,b=!1,B=new Image;function k(e,t){e.className.indexOf(t)>=0||(e.className=e.className+" "+t)}function M(e,t){e.className=e.className.replace(new RegExp("\\b"+t+"\\b","g"),"")}function R(){y=[],I=0,L=null,x=null,b=!1,n=new Image,M(i,"crop"),k(l,"hide"),k(h,"hide"),M(r,"hide"),i.removeEventListener("mousedown",D),i.removeEventListener("touchstart",D),i.removeEventListener("mousemove",N),i.removeEventListener("touchmove",N),i.removeEventListener("mouseup",W),i.removeEventListener("touchend",W);var e=t.naturalWidth,c=t.naturalHeight;const d={width:Math.max(document.documentElement.clientWidth||0,window.innerWidth||0),height:Math.max(document.documentElement.clientHeight||0,window.innerHeight||0)};i.width=d.width>e?e:d.width,i.height=d.height-60>c?c:d.height-60,p.drawImage(t,0,0,e,c,0,0,i.width,i.height);const o=i.toDataURL(i);B.src=o}function X(){p.clearRect(0,0,i.width,i.height),p.drawImage(c,0,0)}function Y(){c.width=i.width,c.height=i.height,c.getContext("2d").drawImage(i,0,0)}function C(e,t){var n=i.getBoundingClientRect();return{x:Math.round(e)-n.left*(i.width/n.width),y:Math.round(t)-n.top*(i.height/n.height)}}function D(e){e.preventDefault(),k(h,"hide"),X(),L=C(void 0===e.clientX?e.touches[0].clientX:e.clientX,void 0===e.clientY?e.touches[0].clientY:e.clientY),b=!0,H()}function H(){p.save(),p.globalAlpha=.5,p.fillStyle="black",p.fillRect(0,0,i.width,i.height),p.restore()}function N(e){e.preventDefault();var t=C(void 0===e.clientX?e.touches[0].clientX:e.clientX,void 0===e.clientY?e.touches[0].clientY:e.clientY);if(b){var n=Math.min(L.x,t.x),i=Math.max(L.x,t.x),c=Math.min(L.y,t.y),d=Math.max(L.y,t.y);X(),H(),p.save(),p.beginPath(),p.rect(n,c,i-n,d-c),p.clip(),p.drawImage(B,0,0),p.restore()}}function W(e){e.preventDefault();var t=void 0===e.clientX?e.changedTouches[0].clientX:e.clientX,n=void 0===e.clientY?e.changedTouches[0].clientY:e.clientY;x=C(t,n),b=!1,h.style.top=n+"px",h.style.left=t+"px",M(h,"hide")}function U(){y.length&&0!==I?M(u,"disabled"):k(u,"disabled"),y.length&&I!==y.length-1?M(m,"disabled"):k(m,"disabled")}t.addEventListener("load",R,!1),e.runtime.onMessage.addListener((function(e,n,i){"update_url"===e.method&&(t.src=e.url,i({success:!0}))})),d.addEventListener("click",(function(){var e=document.createElement("a");e.download="screenshot",e.href=t.src,document.body.appendChild(e),e.click(),document.body.removeChild(e)})),o.addEventListener("click",(function(){window.print()})),E.addEventListener("click",(function(){k(f,"visible")})),w.addEventListener("click",(function(){M(f,"visible")})),a.addEventListener("click",(function(){k(i,"crop"),M(l,"hide"),k(r,"hide"),I=0,(y=[]).push(i.toDataURL()),n.src=t.src,Y(),H(),i.addEventListener("mousedown",D),i.addEventListener("touchstart",D),i.addEventListener("mousemove",N),i.addEventListener("touchmove",N),i.addEventListener("mouseup",W),i.addEventListener("touchend",W),U()})),g.addEventListener("click",(function(){var e=Math.min(L.x,x.x),t=Math.max(L.x,x.x),c=Math.min(L.y,x.y),d=Math.max(L.y,x.y);k(h,"hide");var o=new Image;o.src=i.toDataURL(),o.onload=function(){p.clearRect(0,0,i.width,i.height),i.width=t-e,i.height=d-c,p.drawImage(o,e,c,t-e,d-c,0,0,t-e,d-c),Y(),y.push(i.toDataURL()),I=y.length-1,n.src=y[I],U()}})),v.addEventListener("click",(function(){k(h,"hide"),X()})),u.addEventListener("click",(function(){if(y.length&&0!==I){var e=y[--I],t=new Image;t.src=e,n.src=e,t.onload=function(){p.clearRect(0,0,i.width,i.height),i.width=t.naturalWidth,i.height=t.naturalHeight,p.drawImage(t,0,0),Y()},U()}})),m.addEventListener("click",(function(){if(y.length&&I!==y.length-1){var e=y[++I],t=new Image;t.src=e,n.src=e,t.onload=function(){p.clearRect(0,0,i.width,i.height),i.width=t.naturalWidth,i.height=t.naturalHeight,p.drawImage(t,0,0),Y()},U()}})),s.addEventListener("click",(function(){t.src===y[I]?R():t.src=y[I]}))}();