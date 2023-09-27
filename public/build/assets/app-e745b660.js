/*!
 * Cropper.js v1.6.1
 * https://fengyuanchen.github.io/cropperjs
 *
 * Copyright 2015-present Chen Fengyuan
 * Released under the MIT license
 *
 * Date: 2023-09-17T03:44:19.860Z
 */function Pt(a,t){var e=Object.keys(a);if(Object.getOwnPropertySymbols){var i=Object.getOwnPropertySymbols(a);t&&(i=i.filter(function(n){return Object.getOwnPropertyDescriptor(a,n).enumerable})),e.push.apply(e,i)}return e}function Jt(a){for(var t=1;t<arguments.length;t++){var e=arguments[t]!=null?arguments[t]:{};t%2?Pt(Object(e),!0).forEach(function(i){wi(a,i,e[i])}):Object.getOwnPropertyDescriptors?Object.defineProperties(a,Object.getOwnPropertyDescriptors(e)):Pt(Object(e)).forEach(function(i){Object.defineProperty(a,i,Object.getOwnPropertyDescriptor(e,i))})}return a}function wt(a){"@babel/helpers - typeof";return wt=typeof Symbol=="function"&&typeof Symbol.iterator=="symbol"?function(t){return typeof t}:function(t){return t&&typeof Symbol=="function"&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},wt(a)}function mi(a,t){if(!(a instanceof t))throw new TypeError("Cannot call a class as a function")}function Ht(a,t){for(var e=0;e<t.length;e++){var i=t[e];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(a,ii(i.key),i)}}function vi(a,t,e){return t&&Ht(a.prototype,t),e&&Ht(a,e),Object.defineProperty(a,"prototype",{writable:!1}),a}function wi(a,t,e){return t=ii(t),t in a?Object.defineProperty(a,t,{value:e,enumerable:!0,configurable:!0,writable:!0}):a[t]=e,a}function ti(a){return bi(a)||yi(a)||xi(a)||Di()}function bi(a){if(Array.isArray(a))return bt(a)}function yi(a){if(typeof Symbol<"u"&&a[Symbol.iterator]!=null||a["@@iterator"]!=null)return Array.from(a)}function xi(a,t){if(a){if(typeof a=="string")return bt(a,t);var e=Object.prototype.toString.call(a).slice(8,-1);if(e==="Object"&&a.constructor&&(e=a.constructor.name),e==="Map"||e==="Set")return Array.from(a);if(e==="Arguments"||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(e))return bt(a,t)}}function bt(a,t){(t==null||t>a.length)&&(t=a.length);for(var e=0,i=new Array(t);e<t;e++)i[e]=a[e];return i}function Di(){throw new TypeError(`Invalid attempt to spread non-iterable instance.
In order to be iterable, non-array objects must have a [Symbol.iterator]() method.`)}function Ei(a,t){if(typeof a!="object"||a===null)return a;var e=a[Symbol.toPrimitive];if(e!==void 0){var i=e.call(a,t||"default");if(typeof i!="object")return i;throw new TypeError("@@toPrimitive must return a primitive value.")}return(t==="string"?String:Number)(a)}function ii(a){var t=Ei(a,"string");return typeof t=="symbol"?t:String(t)}var ut=typeof window<"u"&&typeof window.document<"u",P=ut?window:{},Nt=ut&&P.document.documentElement?"ontouchstart"in P.document.documentElement:!1,At=ut?"PointerEvent"in P:!1,y="cropper",St="all",ei="crop",ai="move",ri="zoom",$="e",K="w",F="s",z="n",et="ne",at="nw",rt="se",nt="sw",yt="".concat(y,"-crop"),Yt="".concat(y,"-disabled"),S="".concat(y,"-hidden"),Xt="".concat(y,"-hide"),Mi="".concat(y,"-invisible"),dt="".concat(y,"-modal"),xt="".concat(y,"-move"),st="".concat(y,"Action"),lt="".concat(y,"Preview"),Rt="crop",ni="move",oi="none",Dt="crop",Et="cropend",Mt="cropmove",Tt="cropstart",zt="dblclick",Ti=Nt?"touchstart":"mousedown",Ci=Nt?"touchmove":"mousemove",Oi=Nt?"touchend touchcancel":"mouseup",Wt=At?"pointerdown":Ti,Ut=At?"pointermove":Ci,jt=At?"pointerup pointercancel":Oi,Vt="ready",Gt="resize",$t="wheel",Ct="zoom",Kt="image/jpeg",Ni=/^e|w|s|n|se|sw|ne|nw|all|crop|move|zoom$/,Ai=/^data:/,Si=/^data:image\/jpeg;base64,/,Ri=/^img|canvas$/i,si=200,hi=100,qt={viewMode:0,dragMode:Rt,initialAspectRatio:NaN,aspectRatio:NaN,data:null,preview:"",responsive:!0,restore:!0,checkCrossOrigin:!0,checkOrientation:!0,modal:!0,guides:!0,center:!0,highlight:!0,background:!0,autoCrop:!0,autoCropArea:.8,movable:!0,rotatable:!0,scalable:!0,zoomable:!0,zoomOnTouch:!0,zoomOnWheel:!0,wheelZoomRatio:.1,cropBoxMovable:!0,cropBoxResizable:!0,toggleDragModeOnDblclick:!0,minCanvasWidth:0,minCanvasHeight:0,minCropBoxWidth:0,minCropBoxHeight:0,minContainerWidth:si,minContainerHeight:hi,ready:null,cropstart:null,cropmove:null,cropend:null,crop:null,zoom:null},Ii='<div class="cropper-container" touch-action="none"><div class="cropper-wrap-box"><div class="cropper-canvas"></div></div><div class="cropper-drag-box"></div><div class="cropper-crop-box"><span class="cropper-view-box"></span><span class="cropper-dashed dashed-h"></span><span class="cropper-dashed dashed-v"></span><span class="cropper-center"></span><span class="cropper-face"></span><span class="cropper-line line-e" data-cropper-action="e"></span><span class="cropper-line line-n" data-cropper-action="n"></span><span class="cropper-line line-w" data-cropper-action="w"></span><span class="cropper-line line-s" data-cropper-action="s"></span><span class="cropper-point point-e" data-cropper-action="e"></span><span class="cropper-point point-n" data-cropper-action="n"></span><span class="cropper-point point-w" data-cropper-action="w"></span><span class="cropper-point point-s" data-cropper-action="s"></span><span class="cropper-point point-ne" data-cropper-action="ne"></span><span class="cropper-point point-nw" data-cropper-action="nw"></span><span class="cropper-point point-sw" data-cropper-action="sw"></span><span class="cropper-point point-se" data-cropper-action="se"></span></div></div>',Li=Number.isNaN||P.isNaN;function p(a){return typeof a=="number"&&!Li(a)}var Ft=function(t){return t>0&&t<1/0};function mt(a){return typeof a>"u"}function q(a){return wt(a)==="object"&&a!==null}var Bi=Object.prototype.hasOwnProperty;function Q(a){if(!q(a))return!1;try{var t=a.constructor,e=t.prototype;return t&&e&&Bi.call(e,"isPrototypeOf")}catch{return!1}}function A(a){return typeof a=="function"}var _i=Array.prototype.slice;function ci(a){return Array.from?Array.from(a):_i.call(a)}function E(a,t){return a&&A(t)&&(Array.isArray(a)||p(a.length)?ci(a).forEach(function(e,i){t.call(a,e,i,a)}):q(a)&&Object.keys(a).forEach(function(e){t.call(a,a[e],e,a)})),a}var x=Object.assign||function(t){for(var e=arguments.length,i=new Array(e>1?e-1:0),n=1;n<e;n++)i[n-1]=arguments[n];return q(t)&&i.length>0&&i.forEach(function(r){q(r)&&Object.keys(r).forEach(function(o){t[o]=r[o]})}),t},ki=/\.\d*(?:0|9){12}\d*$/;function J(a){var t=arguments.length>1&&arguments[1]!==void 0?arguments[1]:1e11;return ki.test(a)?Math.round(a*t)/t:a}var Pi=/^width|height|left|top|marginLeft|marginTop$/;function W(a,t){var e=a.style;E(t,function(i,n){Pi.test(n)&&p(i)&&(i="".concat(i,"px")),e[n]=i})}function Hi(a,t){return a.classList?a.classList.contains(t):a.className.indexOf(t)>-1}function O(a,t){if(t){if(p(a.length)){E(a,function(i){O(i,t)});return}if(a.classList){a.classList.add(t);return}var e=a.className.trim();e?e.indexOf(t)<0&&(a.className="".concat(e," ").concat(t)):a.className=t}}function k(a,t){if(t){if(p(a.length)){E(a,function(e){k(e,t)});return}if(a.classList){a.classList.remove(t);return}a.className.indexOf(t)>=0&&(a.className=a.className.replace(t,""))}}function Z(a,t,e){if(t){if(p(a.length)){E(a,function(i){Z(i,t,e)});return}e?O(a,t):k(a,t)}}var Yi=/([a-z\d])([A-Z])/g;function It(a){return a.replace(Yi,"$1-$2").toLowerCase()}function Ot(a,t){return q(a[t])?a[t]:a.dataset?a.dataset[t]:a.getAttribute("data-".concat(It(t)))}function ht(a,t,e){q(e)?a[t]=e:a.dataset?a.dataset[t]=e:a.setAttribute("data-".concat(It(t)),e)}function Xi(a,t){if(q(a[t]))try{delete a[t]}catch{a[t]=void 0}else if(a.dataset)try{delete a.dataset[t]}catch{a.dataset[t]=void 0}else a.removeAttribute("data-".concat(It(t)))}var li=/\s\s*/,fi=function(){var a=!1;if(ut){var t=!1,e=function(){},i=Object.defineProperty({},"once",{get:function(){return a=!0,t},set:function(r){t=r}});P.addEventListener("test",e,i),P.removeEventListener("test",e,i)}return a}();function B(a,t,e){var i=arguments.length>3&&arguments[3]!==void 0?arguments[3]:{},n=e;t.trim().split(li).forEach(function(r){if(!fi){var o=a.listeners;o&&o[r]&&o[r][e]&&(n=o[r][e],delete o[r][e],Object.keys(o[r]).length===0&&delete o[r],Object.keys(o).length===0&&delete a.listeners)}a.removeEventListener(r,n,i)})}function L(a,t,e){var i=arguments.length>3&&arguments[3]!==void 0?arguments[3]:{},n=e;t.trim().split(li).forEach(function(r){if(i.once&&!fi){var o=a.listeners,s=o===void 0?{}:o;n=function(){delete s[r][e],a.removeEventListener(r,n,i);for(var l=arguments.length,h=new Array(l),c=0;c<l;c++)h[c]=arguments[c];e.apply(a,h)},s[r]||(s[r]={}),s[r][e]&&a.removeEventListener(r,s[r][e],i),s[r][e]=n,a.listeners=s}a.addEventListener(r,n,i)})}function tt(a,t,e){var i;return A(Event)&&A(CustomEvent)?i=new CustomEvent(t,{detail:e,bubbles:!0,cancelable:!0}):(i=document.createEvent("CustomEvent"),i.initCustomEvent(t,!0,!0,e)),a.dispatchEvent(i)}function di(a){var t=a.getBoundingClientRect();return{left:t.left+(window.pageXOffset-document.documentElement.clientLeft),top:t.top+(window.pageYOffset-document.documentElement.clientTop)}}var vt=P.location,zi=/^(\w+:)\/\/([^:/?#]*):?(\d*)/i;function Qt(a){var t=a.match(zi);return t!==null&&(t[1]!==vt.protocol||t[2]!==vt.hostname||t[3]!==vt.port)}function Zt(a){var t="timestamp=".concat(new Date().getTime());return a+(a.indexOf("?")===-1?"?":"&")+t}function ot(a){var t=a.rotate,e=a.scaleX,i=a.scaleY,n=a.translateX,r=a.translateY,o=[];p(n)&&n!==0&&o.push("translateX(".concat(n,"px)")),p(r)&&r!==0&&o.push("translateY(".concat(r,"px)")),p(t)&&t!==0&&o.push("rotate(".concat(t,"deg)")),p(e)&&e!==1&&o.push("scaleX(".concat(e,")")),p(i)&&i!==1&&o.push("scaleY(".concat(i,")"));var s=o.length?o.join(" "):"none";return{WebkitTransform:s,msTransform:s,transform:s}}function Wi(a){var t=Jt({},a),e=0;return E(a,function(i,n){delete t[n],E(t,function(r){var o=Math.abs(i.startX-r.startX),s=Math.abs(i.startY-r.startY),d=Math.abs(i.endX-r.endX),l=Math.abs(i.endY-r.endY),h=Math.sqrt(o*o+s*s),c=Math.sqrt(d*d+l*l),f=(c-h)/h;Math.abs(f)>Math.abs(e)&&(e=f)})}),e}function ft(a,t){var e=a.pageX,i=a.pageY,n={endX:e,endY:i};return t?n:Jt({startX:e,startY:i},n)}function Ui(a){var t=0,e=0,i=0;return E(a,function(n){var r=n.startX,o=n.startY;t+=r,e+=o,i+=1}),t/=i,e/=i,{pageX:t,pageY:e}}function U(a){var t=a.aspectRatio,e=a.height,i=a.width,n=arguments.length>1&&arguments[1]!==void 0?arguments[1]:"contain",r=Ft(i),o=Ft(e);if(r&&o){var s=e*t;n==="contain"&&s>i||n==="cover"&&s<i?e=i/t:i=e*t}else r?e=i/t:o&&(i=e*t);return{width:i,height:e}}function ji(a){var t=a.width,e=a.height,i=a.degree;if(i=Math.abs(i)%180,i===90)return{width:e,height:t};var n=i%90*Math.PI/180,r=Math.sin(n),o=Math.cos(n),s=t*o+e*r,d=t*r+e*o;return i>90?{width:d,height:s}:{width:s,height:d}}function Vi(a,t,e,i){var n=t.aspectRatio,r=t.naturalWidth,o=t.naturalHeight,s=t.rotate,d=s===void 0?0:s,l=t.scaleX,h=l===void 0?1:l,c=t.scaleY,f=c===void 0?1:c,m=e.aspectRatio,g=e.naturalWidth,b=e.naturalHeight,v=i.fillColor,M=v===void 0?"transparent":v,C=i.imageSmoothingEnabled,D=C===void 0?!0:C,H=i.imageSmoothingQuality,R=H===void 0?"low":H,u=i.maxWidth,w=u===void 0?1/0:u,T=i.maxHeight,I=T===void 0?1/0:T,Y=i.minWidth,j=Y===void 0?0:Y,V=i.minHeight,X=V===void 0?0:V,_=document.createElement("canvas"),N=_.getContext("2d"),G=U({aspectRatio:m,width:w,height:I}),ct=U({aspectRatio:m,width:j,height:X},"cover"),pt=Math.min(G.width,Math.max(ct.width,g)),gt=Math.min(G.height,Math.max(ct.height,b)),Lt=U({aspectRatio:n,width:w,height:I}),Bt=U({aspectRatio:n,width:j,height:X},"cover"),_t=Math.min(Lt.width,Math.max(Bt.width,r)),kt=Math.min(Lt.height,Math.max(Bt.height,o)),pi=[-_t/2,-kt/2,_t,kt];return _.width=J(pt),_.height=J(gt),N.fillStyle=M,N.fillRect(0,0,pt,gt),N.save(),N.translate(pt/2,gt/2),N.rotate(d*Math.PI/180),N.scale(h,f),N.imageSmoothingEnabled=D,N.imageSmoothingQuality=R,N.drawImage.apply(N,[a].concat(ti(pi.map(function(gi){return Math.floor(J(gi))})))),N.restore(),_}var ui=String.fromCharCode;function Gi(a,t,e){var i="";e+=t;for(var n=t;n<e;n+=1)i+=ui(a.getUint8(n));return i}var $i=/^data:.*,/;function Ki(a){var t=a.replace($i,""),e=atob(t),i=new ArrayBuffer(e.length),n=new Uint8Array(i);return E(n,function(r,o){n[o]=e.charCodeAt(o)}),i}function qi(a,t){for(var e=[],i=8192,n=new Uint8Array(a);n.length>0;)e.push(ui.apply(null,ci(n.subarray(0,i)))),n=n.subarray(i);return"data:".concat(t,";base64,").concat(btoa(e.join("")))}function Fi(a){var t=new DataView(a),e;try{var i,n,r;if(t.getUint8(0)===255&&t.getUint8(1)===216)for(var o=t.byteLength,s=2;s+1<o;){if(t.getUint8(s)===255&&t.getUint8(s+1)===225){n=s;break}s+=1}if(n){var d=n+4,l=n+10;if(Gi(t,d,4)==="Exif"){var h=t.getUint16(l);if(i=h===18761,(i||h===19789)&&t.getUint16(l+2,i)===42){var c=t.getUint32(l+4,i);c>=8&&(r=l+c)}}}if(r){var f=t.getUint16(r,i),m,g;for(g=0;g<f;g+=1)if(m=r+g*12+2,t.getUint16(m,i)===274){m+=8,e=t.getUint16(m,i),t.setUint16(m,1,i);break}}}catch{e=1}return e}function Qi(a){var t=0,e=1,i=1;switch(a){case 2:e=-1;break;case 3:t=-180;break;case 4:i=-1;break;case 5:t=90,i=-1;break;case 6:t=90;break;case 7:t=90,e=-1;break;case 8:t=-90;break}return{rotate:t,scaleX:e,scaleY:i}}var Zi={render:function(){this.initContainer(),this.initCanvas(),this.initCropBox(),this.renderCanvas(),this.cropped&&this.renderCropBox()},initContainer:function(){var t=this.element,e=this.options,i=this.container,n=this.cropper,r=Number(e.minContainerWidth),o=Number(e.minContainerHeight);O(n,S),k(t,S);var s={width:Math.max(i.offsetWidth,r>=0?r:si),height:Math.max(i.offsetHeight,o>=0?o:hi)};this.containerData=s,W(n,{width:s.width,height:s.height}),O(t,S),k(n,S)},initCanvas:function(){var t=this.containerData,e=this.imageData,i=this.options.viewMode,n=Math.abs(e.rotate)%180===90,r=n?e.naturalHeight:e.naturalWidth,o=n?e.naturalWidth:e.naturalHeight,s=r/o,d=t.width,l=t.height;t.height*s>t.width?i===3?d=t.height*s:l=t.width/s:i===3?l=t.width/s:d=t.height*s;var h={aspectRatio:s,naturalWidth:r,naturalHeight:o,width:d,height:l};this.canvasData=h,this.limited=i===1||i===2,this.limitCanvas(!0,!0),h.width=Math.min(Math.max(h.width,h.minWidth),h.maxWidth),h.height=Math.min(Math.max(h.height,h.minHeight),h.maxHeight),h.left=(t.width-h.width)/2,h.top=(t.height-h.height)/2,h.oldLeft=h.left,h.oldTop=h.top,this.initialCanvasData=x({},h)},limitCanvas:function(t,e){var i=this.options,n=this.containerData,r=this.canvasData,o=this.cropBoxData,s=i.viewMode,d=r.aspectRatio,l=this.cropped&&o;if(t){var h=Number(i.minCanvasWidth)||0,c=Number(i.minCanvasHeight)||0;s>1?(h=Math.max(h,n.width),c=Math.max(c,n.height),s===3&&(c*d>h?h=c*d:c=h/d)):s>0&&(h?h=Math.max(h,l?o.width:0):c?c=Math.max(c,l?o.height:0):l&&(h=o.width,c=o.height,c*d>h?h=c*d:c=h/d));var f=U({aspectRatio:d,width:h,height:c});h=f.width,c=f.height,r.minWidth=h,r.minHeight=c,r.maxWidth=1/0,r.maxHeight=1/0}if(e)if(s>(l?0:1)){var m=n.width-r.width,g=n.height-r.height;r.minLeft=Math.min(0,m),r.minTop=Math.min(0,g),r.maxLeft=Math.max(0,m),r.maxTop=Math.max(0,g),l&&this.limited&&(r.minLeft=Math.min(o.left,o.left+(o.width-r.width)),r.minTop=Math.min(o.top,o.top+(o.height-r.height)),r.maxLeft=o.left,r.maxTop=o.top,s===2&&(r.width>=n.width&&(r.minLeft=Math.min(0,m),r.maxLeft=Math.max(0,m)),r.height>=n.height&&(r.minTop=Math.min(0,g),r.maxTop=Math.max(0,g))))}else r.minLeft=-r.width,r.minTop=-r.height,r.maxLeft=n.width,r.maxTop=n.height},renderCanvas:function(t,e){var i=this.canvasData,n=this.imageData;if(e){var r=ji({width:n.naturalWidth*Math.abs(n.scaleX||1),height:n.naturalHeight*Math.abs(n.scaleY||1),degree:n.rotate||0}),o=r.width,s=r.height,d=i.width*(o/i.naturalWidth),l=i.height*(s/i.naturalHeight);i.left-=(d-i.width)/2,i.top-=(l-i.height)/2,i.width=d,i.height=l,i.aspectRatio=o/s,i.naturalWidth=o,i.naturalHeight=s,this.limitCanvas(!0,!1)}(i.width>i.maxWidth||i.width<i.minWidth)&&(i.left=i.oldLeft),(i.height>i.maxHeight||i.height<i.minHeight)&&(i.top=i.oldTop),i.width=Math.min(Math.max(i.width,i.minWidth),i.maxWidth),i.height=Math.min(Math.max(i.height,i.minHeight),i.maxHeight),this.limitCanvas(!1,!0),i.left=Math.min(Math.max(i.left,i.minLeft),i.maxLeft),i.top=Math.min(Math.max(i.top,i.minTop),i.maxTop),i.oldLeft=i.left,i.oldTop=i.top,W(this.canvas,x({width:i.width,height:i.height},ot({translateX:i.left,translateY:i.top}))),this.renderImage(t),this.cropped&&this.limited&&this.limitCropBox(!0,!0)},renderImage:function(t){var e=this.canvasData,i=this.imageData,n=i.naturalWidth*(e.width/e.naturalWidth),r=i.naturalHeight*(e.height/e.naturalHeight);x(i,{width:n,height:r,left:(e.width-n)/2,top:(e.height-r)/2}),W(this.image,x({width:i.width,height:i.height},ot(x({translateX:i.left,translateY:i.top},i)))),t&&this.output()},initCropBox:function(){var t=this.options,e=this.canvasData,i=t.aspectRatio||t.initialAspectRatio,n=Number(t.autoCropArea)||.8,r={width:e.width,height:e.height};i&&(e.height*i>e.width?r.height=r.width/i:r.width=r.height*i),this.cropBoxData=r,this.limitCropBox(!0,!0),r.width=Math.min(Math.max(r.width,r.minWidth),r.maxWidth),r.height=Math.min(Math.max(r.height,r.minHeight),r.maxHeight),r.width=Math.max(r.minWidth,r.width*n),r.height=Math.max(r.minHeight,r.height*n),r.left=e.left+(e.width-r.width)/2,r.top=e.top+(e.height-r.height)/2,r.oldLeft=r.left,r.oldTop=r.top,this.initialCropBoxData=x({},r)},limitCropBox:function(t,e){var i=this.options,n=this.containerData,r=this.canvasData,o=this.cropBoxData,s=this.limited,d=i.aspectRatio;if(t){var l=Number(i.minCropBoxWidth)||0,h=Number(i.minCropBoxHeight)||0,c=s?Math.min(n.width,r.width,r.width+r.left,n.width-r.left):n.width,f=s?Math.min(n.height,r.height,r.height+r.top,n.height-r.top):n.height;l=Math.min(l,n.width),h=Math.min(h,n.height),d&&(l&&h?h*d>l?h=l/d:l=h*d:l?h=l/d:h&&(l=h*d),f*d>c?f=c/d:c=f*d),o.minWidth=Math.min(l,c),o.minHeight=Math.min(h,f),o.maxWidth=c,o.maxHeight=f}e&&(s?(o.minLeft=Math.max(0,r.left),o.minTop=Math.max(0,r.top),o.maxLeft=Math.min(n.width,r.left+r.width)-o.width,o.maxTop=Math.min(n.height,r.top+r.height)-o.height):(o.minLeft=0,o.minTop=0,o.maxLeft=n.width-o.width,o.maxTop=n.height-o.height))},renderCropBox:function(){var t=this.options,e=this.containerData,i=this.cropBoxData;(i.width>i.maxWidth||i.width<i.minWidth)&&(i.left=i.oldLeft),(i.height>i.maxHeight||i.height<i.minHeight)&&(i.top=i.oldTop),i.width=Math.min(Math.max(i.width,i.minWidth),i.maxWidth),i.height=Math.min(Math.max(i.height,i.minHeight),i.maxHeight),this.limitCropBox(!1,!0),i.left=Math.min(Math.max(i.left,i.minLeft),i.maxLeft),i.top=Math.min(Math.max(i.top,i.minTop),i.maxTop),i.oldLeft=i.left,i.oldTop=i.top,t.movable&&t.cropBoxMovable&&ht(this.face,st,i.width>=e.width&&i.height>=e.height?ai:St),W(this.cropBox,x({width:i.width,height:i.height},ot({translateX:i.left,translateY:i.top}))),this.cropped&&this.limited&&this.limitCanvas(!0,!0),this.disabled||this.output()},output:function(){this.preview(),tt(this.element,Dt,this.getData())}},Ji={initPreview:function(){var t=this.element,e=this.crossOrigin,i=this.options.preview,n=e?this.crossOriginUrl:this.url,r=t.alt||"The image to preview",o=document.createElement("img");if(e&&(o.crossOrigin=e),o.src=n,o.alt=r,this.viewBox.appendChild(o),this.viewBoxImage=o,!!i){var s=i;typeof i=="string"?s=t.ownerDocument.querySelectorAll(i):i.querySelector&&(s=[i]),this.previews=s,E(s,function(d){var l=document.createElement("img");ht(d,lt,{width:d.offsetWidth,height:d.offsetHeight,html:d.innerHTML}),e&&(l.crossOrigin=e),l.src=n,l.alt=r,l.style.cssText='display:block;width:100%;height:auto;min-width:0!important;min-height:0!important;max-width:none!important;max-height:none!important;image-orientation:0deg!important;"',d.innerHTML="",d.appendChild(l)})}},resetPreview:function(){E(this.previews,function(t){var e=Ot(t,lt);W(t,{width:e.width,height:e.height}),t.innerHTML=e.html,Xi(t,lt)})},preview:function(){var t=this.imageData,e=this.canvasData,i=this.cropBoxData,n=i.width,r=i.height,o=t.width,s=t.height,d=i.left-e.left-t.left,l=i.top-e.top-t.top;!this.cropped||this.disabled||(W(this.viewBoxImage,x({width:o,height:s},ot(x({translateX:-d,translateY:-l},t)))),E(this.previews,function(h){var c=Ot(h,lt),f=c.width,m=c.height,g=f,b=m,v=1;n&&(v=f/n,b=r*v),r&&b>m&&(v=m/r,g=n*v,b=m),W(h,{width:g,height:b}),W(h.getElementsByTagName("img")[0],x({width:o*v,height:s*v},ot(x({translateX:-d*v,translateY:-l*v},t))))}))}},te={bind:function(){var t=this.element,e=this.options,i=this.cropper;A(e.cropstart)&&L(t,Tt,e.cropstart),A(e.cropmove)&&L(t,Mt,e.cropmove),A(e.cropend)&&L(t,Et,e.cropend),A(e.crop)&&L(t,Dt,e.crop),A(e.zoom)&&L(t,Ct,e.zoom),L(i,Wt,this.onCropStart=this.cropStart.bind(this)),e.zoomable&&e.zoomOnWheel&&L(i,$t,this.onWheel=this.wheel.bind(this),{passive:!1,capture:!0}),e.toggleDragModeOnDblclick&&L(i,zt,this.onDblclick=this.dblclick.bind(this)),L(t.ownerDocument,Ut,this.onCropMove=this.cropMove.bind(this)),L(t.ownerDocument,jt,this.onCropEnd=this.cropEnd.bind(this)),e.responsive&&L(window,Gt,this.onResize=this.resize.bind(this))},unbind:function(){var t=this.element,e=this.options,i=this.cropper;A(e.cropstart)&&B(t,Tt,e.cropstart),A(e.cropmove)&&B(t,Mt,e.cropmove),A(e.cropend)&&B(t,Et,e.cropend),A(e.crop)&&B(t,Dt,e.crop),A(e.zoom)&&B(t,Ct,e.zoom),B(i,Wt,this.onCropStart),e.zoomable&&e.zoomOnWheel&&B(i,$t,this.onWheel,{passive:!1,capture:!0}),e.toggleDragModeOnDblclick&&B(i,zt,this.onDblclick),B(t.ownerDocument,Ut,this.onCropMove),B(t.ownerDocument,jt,this.onCropEnd),e.responsive&&B(window,Gt,this.onResize)}},ie={resize:function(){if(!this.disabled){var t=this.options,e=this.container,i=this.containerData,n=e.offsetWidth/i.width,r=e.offsetHeight/i.height,o=Math.abs(n-1)>Math.abs(r-1)?n:r;if(o!==1){var s,d;t.restore&&(s=this.getCanvasData(),d=this.getCropBoxData()),this.render(),t.restore&&(this.setCanvasData(E(s,function(l,h){s[h]=l*o})),this.setCropBoxData(E(d,function(l,h){d[h]=l*o})))}}},dblclick:function(){this.disabled||this.options.dragMode===oi||this.setDragMode(Hi(this.dragBox,yt)?ni:Rt)},wheel:function(t){var e=this,i=Number(this.options.wheelZoomRatio)||.1,n=1;this.disabled||(t.preventDefault(),!this.wheeling&&(this.wheeling=!0,setTimeout(function(){e.wheeling=!1},50),t.deltaY?n=t.deltaY>0?1:-1:t.wheelDelta?n=-t.wheelDelta/120:t.detail&&(n=t.detail>0?1:-1),this.zoom(-n*i,t)))},cropStart:function(t){var e=t.buttons,i=t.button;if(!(this.disabled||(t.type==="mousedown"||t.type==="pointerdown"&&t.pointerType==="mouse")&&(p(e)&&e!==1||p(i)&&i!==0||t.ctrlKey))){var n=this.options,r=this.pointers,o;t.changedTouches?E(t.changedTouches,function(s){r[s.identifier]=ft(s)}):r[t.pointerId||0]=ft(t),Object.keys(r).length>1&&n.zoomable&&n.zoomOnTouch?o=ri:o=Ot(t.target,st),Ni.test(o)&&tt(this.element,Tt,{originalEvent:t,action:o})!==!1&&(t.preventDefault(),this.action=o,this.cropping=!1,o===ei&&(this.cropping=!0,O(this.dragBox,dt)))}},cropMove:function(t){var e=this.action;if(!(this.disabled||!e)){var i=this.pointers;t.preventDefault(),tt(this.element,Mt,{originalEvent:t,action:e})!==!1&&(t.changedTouches?E(t.changedTouches,function(n){x(i[n.identifier]||{},ft(n,!0))}):x(i[t.pointerId||0]||{},ft(t,!0)),this.change(t))}},cropEnd:function(t){if(!this.disabled){var e=this.action,i=this.pointers;t.changedTouches?E(t.changedTouches,function(n){delete i[n.identifier]}):delete i[t.pointerId||0],e&&(t.preventDefault(),Object.keys(i).length||(this.action=""),this.cropping&&(this.cropping=!1,Z(this.dragBox,dt,this.cropped&&this.options.modal)),tt(this.element,Et,{originalEvent:t,action:e}))}}},ee={change:function(t){var e=this.options,i=this.canvasData,n=this.containerData,r=this.cropBoxData,o=this.pointers,s=this.action,d=e.aspectRatio,l=r.left,h=r.top,c=r.width,f=r.height,m=l+c,g=h+f,b=0,v=0,M=n.width,C=n.height,D=!0,H;!d&&t.shiftKey&&(d=c&&f?c/f:1),this.limited&&(b=r.minLeft,v=r.minTop,M=b+Math.min(n.width,i.width,i.left+i.width),C=v+Math.min(n.height,i.height,i.top+i.height));var R=o[Object.keys(o)[0]],u={x:R.endX-R.startX,y:R.endY-R.startY},w=function(I){switch(I){case $:m+u.x>M&&(u.x=M-m);break;case K:l+u.x<b&&(u.x=b-l);break;case z:h+u.y<v&&(u.y=v-h);break;case F:g+u.y>C&&(u.y=C-g);break}};switch(s){case St:l+=u.x,h+=u.y;break;case $:if(u.x>=0&&(m>=M||d&&(h<=v||g>=C))){D=!1;break}w($),c+=u.x,c<0&&(s=K,c=-c,l-=c),d&&(f=c/d,h+=(r.height-f)/2);break;case z:if(u.y<=0&&(h<=v||d&&(l<=b||m>=M))){D=!1;break}w(z),f-=u.y,h+=u.y,f<0&&(s=F,f=-f,h-=f),d&&(c=f*d,l+=(r.width-c)/2);break;case K:if(u.x<=0&&(l<=b||d&&(h<=v||g>=C))){D=!1;break}w(K),c-=u.x,l+=u.x,c<0&&(s=$,c=-c,l-=c),d&&(f=c/d,h+=(r.height-f)/2);break;case F:if(u.y>=0&&(g>=C||d&&(l<=b||m>=M))){D=!1;break}w(F),f+=u.y,f<0&&(s=z,f=-f,h-=f),d&&(c=f*d,l+=(r.width-c)/2);break;case et:if(d){if(u.y<=0&&(h<=v||m>=M)){D=!1;break}w(z),f-=u.y,h+=u.y,c=f*d}else w(z),w($),u.x>=0?m<M?c+=u.x:u.y<=0&&h<=v&&(D=!1):c+=u.x,u.y<=0?h>v&&(f-=u.y,h+=u.y):(f-=u.y,h+=u.y);c<0&&f<0?(s=nt,f=-f,c=-c,h-=f,l-=c):c<0?(s=at,c=-c,l-=c):f<0&&(s=rt,f=-f,h-=f);break;case at:if(d){if(u.y<=0&&(h<=v||l<=b)){D=!1;break}w(z),f-=u.y,h+=u.y,c=f*d,l+=r.width-c}else w(z),w(K),u.x<=0?l>b?(c-=u.x,l+=u.x):u.y<=0&&h<=v&&(D=!1):(c-=u.x,l+=u.x),u.y<=0?h>v&&(f-=u.y,h+=u.y):(f-=u.y,h+=u.y);c<0&&f<0?(s=rt,f=-f,c=-c,h-=f,l-=c):c<0?(s=et,c=-c,l-=c):f<0&&(s=nt,f=-f,h-=f);break;case nt:if(d){if(u.x<=0&&(l<=b||g>=C)){D=!1;break}w(K),c-=u.x,l+=u.x,f=c/d}else w(F),w(K),u.x<=0?l>b?(c-=u.x,l+=u.x):u.y>=0&&g>=C&&(D=!1):(c-=u.x,l+=u.x),u.y>=0?g<C&&(f+=u.y):f+=u.y;c<0&&f<0?(s=et,f=-f,c=-c,h-=f,l-=c):c<0?(s=rt,c=-c,l-=c):f<0&&(s=at,f=-f,h-=f);break;case rt:if(d){if(u.x>=0&&(m>=M||g>=C)){D=!1;break}w($),c+=u.x,f=c/d}else w(F),w($),u.x>=0?m<M?c+=u.x:u.y>=0&&g>=C&&(D=!1):c+=u.x,u.y>=0?g<C&&(f+=u.y):f+=u.y;c<0&&f<0?(s=at,f=-f,c=-c,h-=f,l-=c):c<0?(s=nt,c=-c,l-=c):f<0&&(s=et,f=-f,h-=f);break;case ai:this.move(u.x,u.y),D=!1;break;case ri:this.zoom(Wi(o),t),D=!1;break;case ei:if(!u.x||!u.y){D=!1;break}H=di(this.cropper),l=R.startX-H.left,h=R.startY-H.top,c=r.minWidth,f=r.minHeight,u.x>0?s=u.y>0?rt:et:u.x<0&&(l-=c,s=u.y>0?nt:at),u.y<0&&(h-=f),this.cropped||(k(this.cropBox,S),this.cropped=!0,this.limited&&this.limitCropBox(!0,!0));break}D&&(r.width=c,r.height=f,r.left=l,r.top=h,this.action=s,this.renderCropBox()),E(o,function(T){T.startX=T.endX,T.startY=T.endY})}},ae={crop:function(){return this.ready&&!this.cropped&&!this.disabled&&(this.cropped=!0,this.limitCropBox(!0,!0),this.options.modal&&O(this.dragBox,dt),k(this.cropBox,S),this.setCropBoxData(this.initialCropBoxData)),this},reset:function(){return this.ready&&!this.disabled&&(this.imageData=x({},this.initialImageData),this.canvasData=x({},this.initialCanvasData),this.cropBoxData=x({},this.initialCropBoxData),this.renderCanvas(),this.cropped&&this.renderCropBox()),this},clear:function(){return this.cropped&&!this.disabled&&(x(this.cropBoxData,{left:0,top:0,width:0,height:0}),this.cropped=!1,this.renderCropBox(),this.limitCanvas(!0,!0),this.renderCanvas(),k(this.dragBox,dt),O(this.cropBox,S)),this},replace:function(t){var e=arguments.length>1&&arguments[1]!==void 0?arguments[1]:!1;return!this.disabled&&t&&(this.isImg&&(this.element.src=t),e?(this.url=t,this.image.src=t,this.ready&&(this.viewBoxImage.src=t,E(this.previews,function(i){i.getElementsByTagName("img")[0].src=t}))):(this.isImg&&(this.replaced=!0),this.options.data=null,this.uncreate(),this.load(t))),this},enable:function(){return this.ready&&this.disabled&&(this.disabled=!1,k(this.cropper,Yt)),this},disable:function(){return this.ready&&!this.disabled&&(this.disabled=!0,O(this.cropper,Yt)),this},destroy:function(){var t=this.element;return t[y]?(t[y]=void 0,this.isImg&&this.replaced&&(t.src=this.originalUrl),this.uncreate(),this):this},move:function(t){var e=arguments.length>1&&arguments[1]!==void 0?arguments[1]:t,i=this.canvasData,n=i.left,r=i.top;return this.moveTo(mt(t)?t:n+Number(t),mt(e)?e:r+Number(e))},moveTo:function(t){var e=arguments.length>1&&arguments[1]!==void 0?arguments[1]:t,i=this.canvasData,n=!1;return t=Number(t),e=Number(e),this.ready&&!this.disabled&&this.options.movable&&(p(t)&&(i.left=t,n=!0),p(e)&&(i.top=e,n=!0),n&&this.renderCanvas(!0)),this},zoom:function(t,e){var i=this.canvasData;return t=Number(t),t<0?t=1/(1-t):t=1+t,this.zoomTo(i.width*t/i.naturalWidth,null,e)},zoomTo:function(t,e,i){var n=this.options,r=this.canvasData,o=r.width,s=r.height,d=r.naturalWidth,l=r.naturalHeight;if(t=Number(t),t>=0&&this.ready&&!this.disabled&&n.zoomable){var h=d*t,c=l*t;if(tt(this.element,Ct,{ratio:t,oldRatio:o/d,originalEvent:i})===!1)return this;if(i){var f=this.pointers,m=di(this.cropper),g=f&&Object.keys(f).length?Ui(f):{pageX:i.pageX,pageY:i.pageY};r.left-=(h-o)*((g.pageX-m.left-r.left)/o),r.top-=(c-s)*((g.pageY-m.top-r.top)/s)}else Q(e)&&p(e.x)&&p(e.y)?(r.left-=(h-o)*((e.x-r.left)/o),r.top-=(c-s)*((e.y-r.top)/s)):(r.left-=(h-o)/2,r.top-=(c-s)/2);r.width=h,r.height=c,this.renderCanvas(!0)}return this},rotate:function(t){return this.rotateTo((this.imageData.rotate||0)+Number(t))},rotateTo:function(t){return t=Number(t),p(t)&&this.ready&&!this.disabled&&this.options.rotatable&&(this.imageData.rotate=t%360,this.renderCanvas(!0,!0)),this},scaleX:function(t){var e=this.imageData.scaleY;return this.scale(t,p(e)?e:1)},scaleY:function(t){var e=this.imageData.scaleX;return this.scale(p(e)?e:1,t)},scale:function(t){var e=arguments.length>1&&arguments[1]!==void 0?arguments[1]:t,i=this.imageData,n=!1;return t=Number(t),e=Number(e),this.ready&&!this.disabled&&this.options.scalable&&(p(t)&&(i.scaleX=t,n=!0),p(e)&&(i.scaleY=e,n=!0),n&&this.renderCanvas(!0,!0)),this},getData:function(){var t=arguments.length>0&&arguments[0]!==void 0?arguments[0]:!1,e=this.options,i=this.imageData,n=this.canvasData,r=this.cropBoxData,o;if(this.ready&&this.cropped){o={x:r.left-n.left,y:r.top-n.top,width:r.width,height:r.height};var s=i.width/i.naturalWidth;if(E(o,function(h,c){o[c]=h/s}),t){var d=Math.round(o.y+o.height),l=Math.round(o.x+o.width);o.x=Math.round(o.x),o.y=Math.round(o.y),o.width=l-o.x,o.height=d-o.y}}else o={x:0,y:0,width:0,height:0};return e.rotatable&&(o.rotate=i.rotate||0),e.scalable&&(o.scaleX=i.scaleX||1,o.scaleY=i.scaleY||1),o},setData:function(t){var e=this.options,i=this.imageData,n=this.canvasData,r={};if(this.ready&&!this.disabled&&Q(t)){var o=!1;e.rotatable&&p(t.rotate)&&t.rotate!==i.rotate&&(i.rotate=t.rotate,o=!0),e.scalable&&(p(t.scaleX)&&t.scaleX!==i.scaleX&&(i.scaleX=t.scaleX,o=!0),p(t.scaleY)&&t.scaleY!==i.scaleY&&(i.scaleY=t.scaleY,o=!0)),o&&this.renderCanvas(!0,!0);var s=i.width/i.naturalWidth;p(t.x)&&(r.left=t.x*s+n.left),p(t.y)&&(r.top=t.y*s+n.top),p(t.width)&&(r.width=t.width*s),p(t.height)&&(r.height=t.height*s),this.setCropBoxData(r)}return this},getContainerData:function(){return this.ready?x({},this.containerData):{}},getImageData:function(){return this.sized?x({},this.imageData):{}},getCanvasData:function(){var t=this.canvasData,e={};return this.ready&&E(["left","top","width","height","naturalWidth","naturalHeight"],function(i){e[i]=t[i]}),e},setCanvasData:function(t){var e=this.canvasData,i=e.aspectRatio;return this.ready&&!this.disabled&&Q(t)&&(p(t.left)&&(e.left=t.left),p(t.top)&&(e.top=t.top),p(t.width)?(e.width=t.width,e.height=t.width/i):p(t.height)&&(e.height=t.height,e.width=t.height*i),this.renderCanvas(!0)),this},getCropBoxData:function(){var t=this.cropBoxData,e;return this.ready&&this.cropped&&(e={left:t.left,top:t.top,width:t.width,height:t.height}),e||{}},setCropBoxData:function(t){var e=this.cropBoxData,i=this.options.aspectRatio,n,r;return this.ready&&this.cropped&&!this.disabled&&Q(t)&&(p(t.left)&&(e.left=t.left),p(t.top)&&(e.top=t.top),p(t.width)&&t.width!==e.width&&(n=!0,e.width=t.width),p(t.height)&&t.height!==e.height&&(r=!0,e.height=t.height),i&&(n?e.height=e.width/i:r&&(e.width=e.height*i)),this.renderCropBox()),this},getCroppedCanvas:function(){var t=arguments.length>0&&arguments[0]!==void 0?arguments[0]:{};if(!this.ready||!window.HTMLCanvasElement)return null;var e=this.canvasData,i=Vi(this.image,this.imageData,e,t);if(!this.cropped)return i;var n=this.getData(t.rounded),r=n.x,o=n.y,s=n.width,d=n.height,l=i.width/Math.floor(e.naturalWidth);l!==1&&(r*=l,o*=l,s*=l,d*=l);var h=s/d,c=U({aspectRatio:h,width:t.maxWidth||1/0,height:t.maxHeight||1/0}),f=U({aspectRatio:h,width:t.minWidth||0,height:t.minHeight||0},"cover"),m=U({aspectRatio:h,width:t.width||(l!==1?i.width:s),height:t.height||(l!==1?i.height:d)}),g=m.width,b=m.height;g=Math.min(c.width,Math.max(f.width,g)),b=Math.min(c.height,Math.max(f.height,b));var v=document.createElement("canvas"),M=v.getContext("2d");v.width=J(g),v.height=J(b),M.fillStyle=t.fillColor||"transparent",M.fillRect(0,0,g,b);var C=t.imageSmoothingEnabled,D=C===void 0?!0:C,H=t.imageSmoothingQuality;M.imageSmoothingEnabled=D,H&&(M.imageSmoothingQuality=H);var R=i.width,u=i.height,w=r,T=o,I,Y,j,V,X,_;w<=-s||w>R?(w=0,I=0,j=0,X=0):w<=0?(j=-w,w=0,I=Math.min(R,s+w),X=I):w<=R&&(j=0,I=Math.min(s,R-w),X=I),I<=0||T<=-d||T>u?(T=0,Y=0,V=0,_=0):T<=0?(V=-T,T=0,Y=Math.min(u,d+T),_=Y):T<=u&&(V=0,Y=Math.min(d,u-T),_=Y);var N=[w,T,I,Y];if(X>0&&_>0){var G=g/s;N.push(j*G,V*G,X*G,_*G)}return M.drawImage.apply(M,[i].concat(ti(N.map(function(ct){return Math.floor(J(ct))})))),v},setAspectRatio:function(t){var e=this.options;return!this.disabled&&!mt(t)&&(e.aspectRatio=Math.max(0,t)||NaN,this.ready&&(this.initCropBox(),this.cropped&&this.renderCropBox())),this},setDragMode:function(t){var e=this.options,i=this.dragBox,n=this.face;if(this.ready&&!this.disabled){var r=t===Rt,o=e.movable&&t===ni;t=r||o?t:oi,e.dragMode=t,ht(i,st,t),Z(i,yt,r),Z(i,xt,o),e.cropBoxMovable||(ht(n,st,t),Z(n,yt,r),Z(n,xt,o))}return this}},re=P.Cropper,ne=function(){function a(t){var e=arguments.length>1&&arguments[1]!==void 0?arguments[1]:{};if(mi(this,a),!t||!Ri.test(t.tagName))throw new Error("The first argument is required and must be an <img> or <canvas> element.");this.element=t,this.options=x({},qt,Q(e)&&e),this.cropped=!1,this.disabled=!1,this.pointers={},this.ready=!1,this.reloading=!1,this.replaced=!1,this.sized=!1,this.sizing=!1,this.init()}return vi(a,[{key:"init",value:function(){var e=this.element,i=e.tagName.toLowerCase(),n;if(!e[y]){if(e[y]=this,i==="img"){if(this.isImg=!0,n=e.getAttribute("src")||"",this.originalUrl=n,!n)return;n=e.src}else i==="canvas"&&window.HTMLCanvasElement&&(n=e.toDataURL());this.load(n)}}},{key:"load",value:function(e){var i=this;if(e){this.url=e,this.imageData={};var n=this.element,r=this.options;if(!r.rotatable&&!r.scalable&&(r.checkOrientation=!1),!r.checkOrientation||!window.ArrayBuffer){this.clone();return}if(Ai.test(e)){Si.test(e)?this.read(Ki(e)):this.clone();return}var o=new XMLHttpRequest,s=this.clone.bind(this);this.reloading=!0,this.xhr=o,o.onabort=s,o.onerror=s,o.ontimeout=s,o.onprogress=function(){o.getResponseHeader("content-type")!==Kt&&o.abort()},o.onload=function(){i.read(o.response)},o.onloadend=function(){i.reloading=!1,i.xhr=null},r.checkCrossOrigin&&Qt(e)&&n.crossOrigin&&(e=Zt(e)),o.open("GET",e,!0),o.responseType="arraybuffer",o.withCredentials=n.crossOrigin==="use-credentials",o.send()}}},{key:"read",value:function(e){var i=this.options,n=this.imageData,r=Fi(e),o=0,s=1,d=1;if(r>1){this.url=qi(e,Kt);var l=Qi(r);o=l.rotate,s=l.scaleX,d=l.scaleY}i.rotatable&&(n.rotate=o),i.scalable&&(n.scaleX=s,n.scaleY=d),this.clone()}},{key:"clone",value:function(){var e=this.element,i=this.url,n=e.crossOrigin,r=i;this.options.checkCrossOrigin&&Qt(i)&&(n||(n="anonymous"),r=Zt(i)),this.crossOrigin=n,this.crossOriginUrl=r;var o=document.createElement("img");n&&(o.crossOrigin=n),o.src=r||i,o.alt=e.alt||"The image to crop",this.image=o,o.onload=this.start.bind(this),o.onerror=this.stop.bind(this),O(o,Xt),e.parentNode.insertBefore(o,e.nextSibling)}},{key:"start",value:function(){var e=this,i=this.image;i.onload=null,i.onerror=null,this.sizing=!0;var n=P.navigator&&/(?:iPad|iPhone|iPod).*?AppleWebKit/i.test(P.navigator.userAgent),r=function(l,h){x(e.imageData,{naturalWidth:l,naturalHeight:h,aspectRatio:l/h}),e.initialImageData=x({},e.imageData),e.sizing=!1,e.sized=!0,e.build()};if(i.naturalWidth&&!n){r(i.naturalWidth,i.naturalHeight);return}var o=document.createElement("img"),s=document.body||document.documentElement;this.sizingImage=o,o.onload=function(){r(o.width,o.height),n||s.removeChild(o)},o.src=i.src,n||(o.style.cssText="left:0;max-height:none!important;max-width:none!important;min-height:0!important;min-width:0!important;opacity:0;position:absolute;top:0;z-index:-1;",s.appendChild(o))}},{key:"stop",value:function(){var e=this.image;e.onload=null,e.onerror=null,e.parentNode.removeChild(e),this.image=null}},{key:"build",value:function(){if(!(!this.sized||this.ready)){var e=this.element,i=this.options,n=this.image,r=e.parentNode,o=document.createElement("div");o.innerHTML=Ii;var s=o.querySelector(".".concat(y,"-container")),d=s.querySelector(".".concat(y,"-canvas")),l=s.querySelector(".".concat(y,"-drag-box")),h=s.querySelector(".".concat(y,"-crop-box")),c=h.querySelector(".".concat(y,"-face"));this.container=r,this.cropper=s,this.canvas=d,this.dragBox=l,this.cropBox=h,this.viewBox=s.querySelector(".".concat(y,"-view-box")),this.face=c,d.appendChild(n),O(e,S),r.insertBefore(s,e.nextSibling),k(n,Xt),this.initPreview(),this.bind(),i.initialAspectRatio=Math.max(0,i.initialAspectRatio)||NaN,i.aspectRatio=Math.max(0,i.aspectRatio)||NaN,i.viewMode=Math.max(0,Math.min(3,Math.round(i.viewMode)))||0,O(h,S),i.guides||O(h.getElementsByClassName("".concat(y,"-dashed")),S),i.center||O(h.getElementsByClassName("".concat(y,"-center")),S),i.background&&O(s,"".concat(y,"-bg")),i.highlight||O(c,Mi),i.cropBoxMovable&&(O(c,xt),ht(c,st,St)),i.cropBoxResizable||(O(h.getElementsByClassName("".concat(y,"-line")),S),O(h.getElementsByClassName("".concat(y,"-point")),S)),this.render(),this.ready=!0,this.setDragMode(i.dragMode),i.autoCrop&&this.crop(),this.setData(i.data),A(i.ready)&&L(e,Vt,i.ready,{once:!0}),tt(e,Vt)}}},{key:"unbuild",value:function(){if(this.ready){this.ready=!1,this.unbind(),this.resetPreview();var e=this.cropper.parentNode;e&&e.removeChild(this.cropper),k(this.element,S)}}},{key:"uncreate",value:function(){this.ready?(this.unbuild(),this.ready=!1,this.cropped=!1):this.sizing?(this.sizingImage.onload=null,this.sizing=!1,this.sized=!1):this.reloading?(this.xhr.onabort=null,this.xhr.abort()):this.image&&this.stop()}}],[{key:"noConflict",value:function(){return window.Cropper=re,a}},{key:"setDefaults",value:function(e){x(qt,Q(e)&&e)}}]),a}();x(ne.prototype,Zi,Ji,te,ie,ee,ae);var it=function(a,t){var e=this;KTUtil.data(a).has("image-input")?e=KTUtil.data(a).get("image-input"):initialize(),e.getInputElement=function(){return e.inputElement},e.getElement=function(){return e.element},e.destroy=function(){KTUtil.data(e.element).remove("image-input")},e.on=function(i,n){return KTEventHandler.on(e.element,i,n)},e.one=function(i,n){return KTEventHandler.one(e.element,i,n)},e.off=function(i,n){return KTEventHandler.off(e.element,i,n)},e.trigger=function(i,n){return KTEventHandler.trigger(e.element,i,n,e,n)}};it.getInstance=function(a){return a!==null&&KTUtil.data(a).has("image-input")?KTUtil.data(a).get("image-input"):null};it.createInstances=function(a="[data-mn-image-input]"){var t=document.querySelectorAll(a);if(t&&t.length>0)for(var e=0;e<t.length;e++)new it(t[e])};it.init=function(){it.createInstances()};it.init();
