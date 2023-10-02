/*!
 * Cropper.js v1.6.1
 * https://fengyuanchen.github.io/cropperjs
 *
 * Copyright 2015-present Chen Fengyuan
 * Released under the MIT license
 *
 * Date: 2023-09-17T03:44:19.860Z
 */function kt(a,t){var e=Object.keys(a);if(Object.getOwnPropertySymbols){var i=Object.getOwnPropertySymbols(a);t&&(i=i.filter(function(o){return Object.getOwnPropertyDescriptor(a,o).enumerable})),e.push.apply(e,i)}return e}function Zt(a){for(var t=1;t<arguments.length;t++){var e=arguments[t]!=null?arguments[t]:{};t%2?kt(Object(e),!0).forEach(function(i){wi(a,i,e[i])}):Object.getOwnPropertyDescriptors?Object.defineProperties(a,Object.getOwnPropertyDescriptors(e)):kt(Object(e)).forEach(function(i){Object.defineProperty(a,i,Object.getOwnPropertyDescriptor(e,i))})}return a}function vt(a){"@babel/helpers - typeof";return vt=typeof Symbol=="function"&&typeof Symbol.iterator=="symbol"?function(t){return typeof t}:function(t){return t&&typeof Symbol=="function"&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},vt(a)}function mi(a,t){if(!(a instanceof t))throw new TypeError("Cannot call a class as a function")}function Pt(a,t){for(var e=0;e<t.length;e++){var i=t[e];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(a,ti(i.key),i)}}function vi(a,t,e){return t&&Pt(a.prototype,t),e&&Pt(a,e),Object.defineProperty(a,"prototype",{writable:!1}),a}function wi(a,t,e){return t=ti(t),t in a?Object.defineProperty(a,t,{value:e,enumerable:!0,configurable:!0,writable:!0}):a[t]=e,a}function Jt(a){return bi(a)||yi(a)||xi(a)||Di()}function bi(a){if(Array.isArray(a))return wt(a)}function yi(a){if(typeof Symbol<"u"&&a[Symbol.iterator]!=null||a["@@iterator"]!=null)return Array.from(a)}function xi(a,t){if(a){if(typeof a=="string")return wt(a,t);var e=Object.prototype.toString.call(a).slice(8,-1);if(e==="Object"&&a.constructor&&(e=a.constructor.name),e==="Map"||e==="Set")return Array.from(a);if(e==="Arguments"||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(e))return wt(a,t)}}function wt(a,t){(t==null||t>a.length)&&(t=a.length);for(var e=0,i=new Array(t);e<t;e++)i[e]=a[e];return i}function Di(){throw new TypeError(`Invalid attempt to spread non-iterable instance.
In order to be iterable, non-array objects must have a [Symbol.iterator]() method.`)}function Ei(a,t){if(typeof a!="object"||a===null)return a;var e=a[Symbol.toPrimitive];if(e!==void 0){var i=e.call(a,t||"default");if(typeof i!="object")return i;throw new TypeError("@@toPrimitive must return a primitive value.")}return(t==="string"?String:Number)(a)}function ti(a){var t=Ei(a,"string");return typeof t=="symbol"?t:String(t)}var dt=typeof window<"u"&&typeof window.document<"u",P=dt?window:{},Ot=dt&&P.document.documentElement?"ontouchstart"in P.document.documentElement:!1,Nt=dt?"PointerEvent"in P:!1,y="cropper",At="all",ii="crop",ei="move",ai="zoom",$="e",q="w",K="s",H="n",it="ne",et="nw",at="se",rt="sw",bt="".concat(y,"-crop"),Yt="".concat(y,"-disabled"),S="".concat(y,"-hidden"),Xt="".concat(y,"-hide"),Mi="".concat(y,"-invisible"),ft="".concat(y,"-modal"),yt="".concat(y,"-move"),ot="".concat(y,"Action"),ct="".concat(y,"Preview"),St="crop",ri="move",ni="none",xt="crop",Dt="cropend",Et="cropmove",Mt="cropstart",zt="dblclick",Ti=Ot?"touchstart":"mousedown",Ci=Ot?"touchmove":"mousemove",Oi=Ot?"touchend touchcancel":"mouseup",Ht=Nt?"pointerdown":Ti,Wt=Nt?"pointermove":Ci,Ut=Nt?"pointerup pointercancel":Oi,jt="ready",Vt="resize",Gt="wheel",Tt="zoom",$t="image/jpeg",Ni=/^e|w|s|n|se|sw|ne|nw|all|crop|move|zoom$/,Ai=/^data:/,Si=/^data:image\/jpeg;base64,/,Ri=/^img|canvas$/i,oi=200,si=100,qt={viewMode:0,dragMode:St,initialAspectRatio:NaN,aspectRatio:NaN,data:null,preview:"",responsive:!0,restore:!0,checkCrossOrigin:!0,checkOrientation:!0,modal:!0,guides:!0,center:!0,highlight:!0,background:!0,autoCrop:!0,autoCropArea:.8,movable:!0,rotatable:!0,scalable:!0,zoomable:!0,zoomOnTouch:!0,zoomOnWheel:!0,wheelZoomRatio:.1,cropBoxMovable:!0,cropBoxResizable:!0,toggleDragModeOnDblclick:!0,minCanvasWidth:0,minCanvasHeight:0,minCropBoxWidth:0,minCropBoxHeight:0,minContainerWidth:oi,minContainerHeight:si,ready:null,cropstart:null,cropmove:null,cropend:null,crop:null,zoom:null},Ii='<div class="cropper-container" touch-action="none"><div class="cropper-wrap-box"><div class="cropper-canvas"></div></div><div class="cropper-drag-box"></div><div class="cropper-crop-box"><span class="cropper-view-box"></span><span class="cropper-dashed dashed-h"></span><span class="cropper-dashed dashed-v"></span><span class="cropper-center"></span><span class="cropper-face"></span><span class="cropper-line line-e" data-cropper-action="e"></span><span class="cropper-line line-n" data-cropper-action="n"></span><span class="cropper-line line-w" data-cropper-action="w"></span><span class="cropper-line line-s" data-cropper-action="s"></span><span class="cropper-point point-e" data-cropper-action="e"></span><span class="cropper-point point-n" data-cropper-action="n"></span><span class="cropper-point point-w" data-cropper-action="w"></span><span class="cropper-point point-s" data-cropper-action="s"></span><span class="cropper-point point-ne" data-cropper-action="ne"></span><span class="cropper-point point-nw" data-cropper-action="nw"></span><span class="cropper-point point-sw" data-cropper-action="sw"></span><span class="cropper-point point-se" data-cropper-action="se"></span></div></div>',Li=Number.isNaN||P.isNaN;function u(a){return typeof a=="number"&&!Li(a)}var Ft=function(t){return t>0&&t<1/0};function gt(a){return typeof a>"u"}function F(a){return vt(a)==="object"&&a!==null}var Bi=Object.prototype.hasOwnProperty;function Q(a){if(!F(a))return!1;try{var t=a.constructor,e=t.prototype;return t&&e&&Bi.call(e,"isPrototypeOf")}catch{return!1}}function A(a){return typeof a=="function"}var _i=Array.prototype.slice;function hi(a){return Array.from?Array.from(a):_i.call(a)}function E(a,t){return a&&A(t)&&(Array.isArray(a)||u(a.length)?hi(a).forEach(function(e,i){t.call(a,e,i,a)}):F(a)&&Object.keys(a).forEach(function(e){t.call(a,a[e],e,a)})),a}var x=Object.assign||function(t){for(var e=arguments.length,i=new Array(e>1?e-1:0),o=1;o<e;o++)i[o-1]=arguments[o];return F(t)&&i.length>0&&i.forEach(function(r){F(r)&&Object.keys(r).forEach(function(n){t[n]=r[n]})}),t},ki=/\.\d*(?:0|9){12}\d*$/;function J(a){var t=arguments.length>1&&arguments[1]!==void 0?arguments[1]:1e11;return ki.test(a)?Math.round(a*t)/t:a}var Pi=/^width|height|left|top|marginLeft|marginTop$/;function W(a,t){var e=a.style;E(t,function(i,o){Pi.test(o)&&u(i)&&(i="".concat(i,"px")),e[o]=i})}function Yi(a,t){return a.classList?a.classList.contains(t):a.className.indexOf(t)>-1}function O(a,t){if(t){if(u(a.length)){E(a,function(i){O(i,t)});return}if(a.classList){a.classList.add(t);return}var e=a.className.trim();e?e.indexOf(t)<0&&(a.className="".concat(e," ").concat(t)):a.className=t}}function k(a,t){if(t){if(u(a.length)){E(a,function(e){k(e,t)});return}if(a.classList){a.classList.remove(t);return}a.className.indexOf(t)>=0&&(a.className=a.className.replace(t,""))}}function Z(a,t,e){if(t){if(u(a.length)){E(a,function(i){Z(i,t,e)});return}e?O(a,t):k(a,t)}}var Xi=/([a-z\d])([A-Z])/g;function Rt(a){return a.replace(Xi,"$1-$2").toLowerCase()}function Ct(a,t){return F(a[t])?a[t]:a.dataset?a.dataset[t]:a.getAttribute("data-".concat(Rt(t)))}function st(a,t,e){F(e)?a[t]=e:a.dataset?a.dataset[t]=e:a.setAttribute("data-".concat(Rt(t)),e)}function zi(a,t){if(F(a[t]))try{delete a[t]}catch{a[t]=void 0}else if(a.dataset)try{delete a.dataset[t]}catch{a.dataset[t]=void 0}else a.removeAttribute("data-".concat(Rt(t)))}var ci=/\s\s*/,li=function(){var a=!1;if(dt){var t=!1,e=function(){},i=Object.defineProperty({},"once",{get:function(){return a=!0,t},set:function(r){t=r}});P.addEventListener("test",e,i),P.removeEventListener("test",e,i)}return a}();function B(a,t,e){var i=arguments.length>3&&arguments[3]!==void 0?arguments[3]:{},o=e;t.trim().split(ci).forEach(function(r){if(!li){var n=a.listeners;n&&n[r]&&n[r][e]&&(o=n[r][e],delete n[r][e],Object.keys(n[r]).length===0&&delete n[r],Object.keys(n).length===0&&delete a.listeners)}a.removeEventListener(r,o,i)})}function L(a,t,e){var i=arguments.length>3&&arguments[3]!==void 0?arguments[3]:{},o=e;t.trim().split(ci).forEach(function(r){if(i.once&&!li){var n=a.listeners,s=n===void 0?{}:n;o=function(){delete s[r][e],a.removeEventListener(r,o,i);for(var l=arguments.length,h=new Array(l),c=0;c<l;c++)h[c]=arguments[c];e.apply(a,h)},s[r]||(s[r]={}),s[r][e]&&a.removeEventListener(r,s[r][e],i),s[r][e]=o,a.listeners=s}a.addEventListener(r,o,i)})}function tt(a,t,e){var i;return A(Event)&&A(CustomEvent)?i=new CustomEvent(t,{detail:e,bubbles:!0,cancelable:!0}):(i=document.createEvent("CustomEvent"),i.initCustomEvent(t,!0,!0,e)),a.dispatchEvent(i)}function fi(a){var t=a.getBoundingClientRect();return{left:t.left+(window.pageXOffset-document.documentElement.clientLeft),top:t.top+(window.pageYOffset-document.documentElement.clientTop)}}var mt=P.location,Hi=/^(\w+:)\/\/([^:/?#]*):?(\d*)/i;function Kt(a){var t=a.match(Hi);return t!==null&&(t[1]!==mt.protocol||t[2]!==mt.hostname||t[3]!==mt.port)}function Qt(a){var t="timestamp=".concat(new Date().getTime());return a+(a.indexOf("?")===-1?"?":"&")+t}function nt(a){var t=a.rotate,e=a.scaleX,i=a.scaleY,o=a.translateX,r=a.translateY,n=[];u(o)&&o!==0&&n.push("translateX(".concat(o,"px)")),u(r)&&r!==0&&n.push("translateY(".concat(r,"px)")),u(t)&&t!==0&&n.push("rotate(".concat(t,"deg)")),u(e)&&e!==1&&n.push("scaleX(".concat(e,")")),u(i)&&i!==1&&n.push("scaleY(".concat(i,")"));var s=n.length?n.join(" "):"none";return{WebkitTransform:s,msTransform:s,transform:s}}function Wi(a){var t=Zt({},a),e=0;return E(a,function(i,o){delete t[o],E(t,function(r){var n=Math.abs(i.startX-r.startX),s=Math.abs(i.startY-r.startY),d=Math.abs(i.endX-r.endX),l=Math.abs(i.endY-r.endY),h=Math.sqrt(n*n+s*s),c=Math.sqrt(d*d+l*l),f=(c-h)/h;Math.abs(f)>Math.abs(e)&&(e=f)})}),e}function lt(a,t){var e=a.pageX,i=a.pageY,o={endX:e,endY:i};return t?o:Zt({startX:e,startY:i},o)}function Ui(a){var t=0,e=0,i=0;return E(a,function(o){var r=o.startX,n=o.startY;t+=r,e+=n,i+=1}),t/=i,e/=i,{pageX:t,pageY:e}}function U(a){var t=a.aspectRatio,e=a.height,i=a.width,o=arguments.length>1&&arguments[1]!==void 0?arguments[1]:"contain",r=Ft(i),n=Ft(e);if(r&&n){var s=e*t;o==="contain"&&s>i||o==="cover"&&s<i?e=i/t:i=e*t}else r?e=i/t:n&&(i=e*t);return{width:i,height:e}}function ji(a){var t=a.width,e=a.height,i=a.degree;if(i=Math.abs(i)%180,i===90)return{width:e,height:t};var o=i%90*Math.PI/180,r=Math.sin(o),n=Math.cos(o),s=t*n+e*r,d=t*r+e*n;return i>90?{width:d,height:s}:{width:s,height:d}}function Vi(a,t,e,i){var o=t.aspectRatio,r=t.naturalWidth,n=t.naturalHeight,s=t.rotate,d=s===void 0?0:s,l=t.scaleX,h=l===void 0?1:l,c=t.scaleY,f=c===void 0?1:c,m=e.aspectRatio,g=e.naturalWidth,b=e.naturalHeight,v=i.fillColor,M=v===void 0?"transparent":v,C=i.imageSmoothingEnabled,D=C===void 0?!0:C,Y=i.imageSmoothingQuality,R=Y===void 0?"low":Y,p=i.maxWidth,w=p===void 0?1/0:p,T=i.maxHeight,I=T===void 0?1/0:T,X=i.minWidth,j=X===void 0?0:X,V=i.minHeight,z=V===void 0?0:V,_=document.createElement("canvas"),N=_.getContext("2d"),G=U({aspectRatio:m,width:w,height:I}),ht=U({aspectRatio:m,width:j,height:z},"cover"),pt=Math.min(G.width,Math.max(ht.width,g)),ut=Math.min(G.height,Math.max(ht.height,b)),It=U({aspectRatio:o,width:w,height:I}),Lt=U({aspectRatio:o,width:j,height:z},"cover"),Bt=Math.min(It.width,Math.max(Lt.width,r)),_t=Math.min(It.height,Math.max(Lt.height,n)),ui=[-Bt/2,-_t/2,Bt,_t];return _.width=J(pt),_.height=J(ut),N.fillStyle=M,N.fillRect(0,0,pt,ut),N.save(),N.translate(pt/2,ut/2),N.rotate(d*Math.PI/180),N.scale(h,f),N.imageSmoothingEnabled=D,N.imageSmoothingQuality=R,N.drawImage.apply(N,[a].concat(Jt(ui.map(function(gi){return Math.floor(J(gi))})))),N.restore(),_}var di=String.fromCharCode;function Gi(a,t,e){var i="";e+=t;for(var o=t;o<e;o+=1)i+=di(a.getUint8(o));return i}var $i=/^data:.*,/;function qi(a){var t=a.replace($i,""),e=atob(t),i=new ArrayBuffer(e.length),o=new Uint8Array(i);return E(o,function(r,n){o[n]=e.charCodeAt(n)}),i}function Fi(a,t){for(var e=[],i=8192,o=new Uint8Array(a);o.length>0;)e.push(di.apply(null,hi(o.subarray(0,i)))),o=o.subarray(i);return"data:".concat(t,";base64,").concat(btoa(e.join("")))}function Ki(a){var t=new DataView(a),e;try{var i,o,r;if(t.getUint8(0)===255&&t.getUint8(1)===216)for(var n=t.byteLength,s=2;s+1<n;){if(t.getUint8(s)===255&&t.getUint8(s+1)===225){o=s;break}s+=1}if(o){var d=o+4,l=o+10;if(Gi(t,d,4)==="Exif"){var h=t.getUint16(l);if(i=h===18761,(i||h===19789)&&t.getUint16(l+2,i)===42){var c=t.getUint32(l+4,i);c>=8&&(r=l+c)}}}if(r){var f=t.getUint16(r,i),m,g;for(g=0;g<f;g+=1)if(m=r+g*12+2,t.getUint16(m,i)===274){m+=8,e=t.getUint16(m,i),t.setUint16(m,1,i);break}}}catch{e=1}return e}function Qi(a){var t=0,e=1,i=1;switch(a){case 2:e=-1;break;case 3:t=-180;break;case 4:i=-1;break;case 5:t=90,i=-1;break;case 6:t=90;break;case 7:t=90,e=-1;break;case 8:t=-90;break}return{rotate:t,scaleX:e,scaleY:i}}var Zi={render:function(){this.initContainer(),this.initCanvas(),this.initCropBox(),this.renderCanvas(),this.cropped&&this.renderCropBox()},initContainer:function(){var t=this.element,e=this.options,i=this.container,o=this.cropper,r=Number(e.minContainerWidth),n=Number(e.minContainerHeight);O(o,S),k(t,S);var s={width:Math.max(i.offsetWidth,r>=0?r:oi),height:Math.max(i.offsetHeight,n>=0?n:si)};this.containerData=s,W(o,{width:s.width,height:s.height}),O(t,S),k(o,S)},initCanvas:function(){var t=this.containerData,e=this.imageData,i=this.options.viewMode,o=Math.abs(e.rotate)%180===90,r=o?e.naturalHeight:e.naturalWidth,n=o?e.naturalWidth:e.naturalHeight,s=r/n,d=t.width,l=t.height;t.height*s>t.width?i===3?d=t.height*s:l=t.width/s:i===3?l=t.width/s:d=t.height*s;var h={aspectRatio:s,naturalWidth:r,naturalHeight:n,width:d,height:l};this.canvasData=h,this.limited=i===1||i===2,this.limitCanvas(!0,!0),h.width=Math.min(Math.max(h.width,h.minWidth),h.maxWidth),h.height=Math.min(Math.max(h.height,h.minHeight),h.maxHeight),h.left=(t.width-h.width)/2,h.top=(t.height-h.height)/2,h.oldLeft=h.left,h.oldTop=h.top,this.initialCanvasData=x({},h)},limitCanvas:function(t,e){var i=this.options,o=this.containerData,r=this.canvasData,n=this.cropBoxData,s=i.viewMode,d=r.aspectRatio,l=this.cropped&&n;if(t){var h=Number(i.minCanvasWidth)||0,c=Number(i.minCanvasHeight)||0;s>1?(h=Math.max(h,o.width),c=Math.max(c,o.height),s===3&&(c*d>h?h=c*d:c=h/d)):s>0&&(h?h=Math.max(h,l?n.width:0):c?c=Math.max(c,l?n.height:0):l&&(h=n.width,c=n.height,c*d>h?h=c*d:c=h/d));var f=U({aspectRatio:d,width:h,height:c});h=f.width,c=f.height,r.minWidth=h,r.minHeight=c,r.maxWidth=1/0,r.maxHeight=1/0}if(e)if(s>(l?0:1)){var m=o.width-r.width,g=o.height-r.height;r.minLeft=Math.min(0,m),r.minTop=Math.min(0,g),r.maxLeft=Math.max(0,m),r.maxTop=Math.max(0,g),l&&this.limited&&(r.minLeft=Math.min(n.left,n.left+(n.width-r.width)),r.minTop=Math.min(n.top,n.top+(n.height-r.height)),r.maxLeft=n.left,r.maxTop=n.top,s===2&&(r.width>=o.width&&(r.minLeft=Math.min(0,m),r.maxLeft=Math.max(0,m)),r.height>=o.height&&(r.minTop=Math.min(0,g),r.maxTop=Math.max(0,g))))}else r.minLeft=-r.width,r.minTop=-r.height,r.maxLeft=o.width,r.maxTop=o.height},renderCanvas:function(t,e){var i=this.canvasData,o=this.imageData;if(e){var r=ji({width:o.naturalWidth*Math.abs(o.scaleX||1),height:o.naturalHeight*Math.abs(o.scaleY||1),degree:o.rotate||0}),n=r.width,s=r.height,d=i.width*(n/i.naturalWidth),l=i.height*(s/i.naturalHeight);i.left-=(d-i.width)/2,i.top-=(l-i.height)/2,i.width=d,i.height=l,i.aspectRatio=n/s,i.naturalWidth=n,i.naturalHeight=s,this.limitCanvas(!0,!1)}(i.width>i.maxWidth||i.width<i.minWidth)&&(i.left=i.oldLeft),(i.height>i.maxHeight||i.height<i.minHeight)&&(i.top=i.oldTop),i.width=Math.min(Math.max(i.width,i.minWidth),i.maxWidth),i.height=Math.min(Math.max(i.height,i.minHeight),i.maxHeight),this.limitCanvas(!1,!0),i.left=Math.min(Math.max(i.left,i.minLeft),i.maxLeft),i.top=Math.min(Math.max(i.top,i.minTop),i.maxTop),i.oldLeft=i.left,i.oldTop=i.top,W(this.canvas,x({width:i.width,height:i.height},nt({translateX:i.left,translateY:i.top}))),this.renderImage(t),this.cropped&&this.limited&&this.limitCropBox(!0,!0)},renderImage:function(t){var e=this.canvasData,i=this.imageData,o=i.naturalWidth*(e.width/e.naturalWidth),r=i.naturalHeight*(e.height/e.naturalHeight);x(i,{width:o,height:r,left:(e.width-o)/2,top:(e.height-r)/2}),W(this.image,x({width:i.width,height:i.height},nt(x({translateX:i.left,translateY:i.top},i)))),t&&this.output()},initCropBox:function(){var t=this.options,e=this.canvasData,i=t.aspectRatio||t.initialAspectRatio,o=Number(t.autoCropArea)||.8,r={width:e.width,height:e.height};i&&(e.height*i>e.width?r.height=r.width/i:r.width=r.height*i),this.cropBoxData=r,this.limitCropBox(!0,!0),r.width=Math.min(Math.max(r.width,r.minWidth),r.maxWidth),r.height=Math.min(Math.max(r.height,r.minHeight),r.maxHeight),r.width=Math.max(r.minWidth,r.width*o),r.height=Math.max(r.minHeight,r.height*o),r.left=e.left+(e.width-r.width)/2,r.top=e.top+(e.height-r.height)/2,r.oldLeft=r.left,r.oldTop=r.top,this.initialCropBoxData=x({},r)},limitCropBox:function(t,e){var i=this.options,o=this.containerData,r=this.canvasData,n=this.cropBoxData,s=this.limited,d=i.aspectRatio;if(t){var l=Number(i.minCropBoxWidth)||0,h=Number(i.minCropBoxHeight)||0,c=s?Math.min(o.width,r.width,r.width+r.left,o.width-r.left):o.width,f=s?Math.min(o.height,r.height,r.height+r.top,o.height-r.top):o.height;l=Math.min(l,o.width),h=Math.min(h,o.height),d&&(l&&h?h*d>l?h=l/d:l=h*d:l?h=l/d:h&&(l=h*d),f*d>c?f=c/d:c=f*d),n.minWidth=Math.min(l,c),n.minHeight=Math.min(h,f),n.maxWidth=c,n.maxHeight=f}e&&(s?(n.minLeft=Math.max(0,r.left),n.minTop=Math.max(0,r.top),n.maxLeft=Math.min(o.width,r.left+r.width)-n.width,n.maxTop=Math.min(o.height,r.top+r.height)-n.height):(n.minLeft=0,n.minTop=0,n.maxLeft=o.width-n.width,n.maxTop=o.height-n.height))},renderCropBox:function(){var t=this.options,e=this.containerData,i=this.cropBoxData;(i.width>i.maxWidth||i.width<i.minWidth)&&(i.left=i.oldLeft),(i.height>i.maxHeight||i.height<i.minHeight)&&(i.top=i.oldTop),i.width=Math.min(Math.max(i.width,i.minWidth),i.maxWidth),i.height=Math.min(Math.max(i.height,i.minHeight),i.maxHeight),this.limitCropBox(!1,!0),i.left=Math.min(Math.max(i.left,i.minLeft),i.maxLeft),i.top=Math.min(Math.max(i.top,i.minTop),i.maxTop),i.oldLeft=i.left,i.oldTop=i.top,t.movable&&t.cropBoxMovable&&st(this.face,ot,i.width>=e.width&&i.height>=e.height?ei:At),W(this.cropBox,x({width:i.width,height:i.height},nt({translateX:i.left,translateY:i.top}))),this.cropped&&this.limited&&this.limitCanvas(!0,!0),this.disabled||this.output()},output:function(){this.preview(),tt(this.element,xt,this.getData())}},Ji={initPreview:function(){var t=this.element,e=this.crossOrigin,i=this.options.preview,o=e?this.crossOriginUrl:this.url,r=t.alt||"The image to preview",n=document.createElement("img");if(e&&(n.crossOrigin=e),n.src=o,n.alt=r,this.viewBox.appendChild(n),this.viewBoxImage=n,!!i){var s=i;typeof i=="string"?s=t.ownerDocument.querySelectorAll(i):i.querySelector&&(s=[i]),this.previews=s,E(s,function(d){var l=document.createElement("img");st(d,ct,{width:d.offsetWidth,height:d.offsetHeight,html:d.innerHTML}),e&&(l.crossOrigin=e),l.src=o,l.alt=r,l.style.cssText='display:block;width:100%;height:auto;min-width:0!important;min-height:0!important;max-width:none!important;max-height:none!important;image-orientation:0deg!important;"',d.innerHTML="",d.appendChild(l)})}},resetPreview:function(){E(this.previews,function(t){var e=Ct(t,ct);W(t,{width:e.width,height:e.height}),t.innerHTML=e.html,zi(t,ct)})},preview:function(){var t=this.imageData,e=this.canvasData,i=this.cropBoxData,o=i.width,r=i.height,n=t.width,s=t.height,d=i.left-e.left-t.left,l=i.top-e.top-t.top;!this.cropped||this.disabled||(W(this.viewBoxImage,x({width:n,height:s},nt(x({translateX:-d,translateY:-l},t)))),E(this.previews,function(h){var c=Ct(h,ct),f=c.width,m=c.height,g=f,b=m,v=1;o&&(v=f/o,b=r*v),r&&b>m&&(v=m/r,g=o*v,b=m),W(h,{width:g,height:b}),W(h.getElementsByTagName("img")[0],x({width:n*v,height:s*v},nt(x({translateX:-d*v,translateY:-l*v},t))))}))}},te={bind:function(){var t=this.element,e=this.options,i=this.cropper;A(e.cropstart)&&L(t,Mt,e.cropstart),A(e.cropmove)&&L(t,Et,e.cropmove),A(e.cropend)&&L(t,Dt,e.cropend),A(e.crop)&&L(t,xt,e.crop),A(e.zoom)&&L(t,Tt,e.zoom),L(i,Ht,this.onCropStart=this.cropStart.bind(this)),e.zoomable&&e.zoomOnWheel&&L(i,Gt,this.onWheel=this.wheel.bind(this),{passive:!1,capture:!0}),e.toggleDragModeOnDblclick&&L(i,zt,this.onDblclick=this.dblclick.bind(this)),L(t.ownerDocument,Wt,this.onCropMove=this.cropMove.bind(this)),L(t.ownerDocument,Ut,this.onCropEnd=this.cropEnd.bind(this)),e.responsive&&L(window,Vt,this.onResize=this.resize.bind(this))},unbind:function(){var t=this.element,e=this.options,i=this.cropper;A(e.cropstart)&&B(t,Mt,e.cropstart),A(e.cropmove)&&B(t,Et,e.cropmove),A(e.cropend)&&B(t,Dt,e.cropend),A(e.crop)&&B(t,xt,e.crop),A(e.zoom)&&B(t,Tt,e.zoom),B(i,Ht,this.onCropStart),e.zoomable&&e.zoomOnWheel&&B(i,Gt,this.onWheel,{passive:!1,capture:!0}),e.toggleDragModeOnDblclick&&B(i,zt,this.onDblclick),B(t.ownerDocument,Wt,this.onCropMove),B(t.ownerDocument,Ut,this.onCropEnd),e.responsive&&B(window,Vt,this.onResize)}},ie={resize:function(){if(!this.disabled){var t=this.options,e=this.container,i=this.containerData,o=e.offsetWidth/i.width,r=e.offsetHeight/i.height,n=Math.abs(o-1)>Math.abs(r-1)?o:r;if(n!==1){var s,d;t.restore&&(s=this.getCanvasData(),d=this.getCropBoxData()),this.render(),t.restore&&(this.setCanvasData(E(s,function(l,h){s[h]=l*n})),this.setCropBoxData(E(d,function(l,h){d[h]=l*n})))}}},dblclick:function(){this.disabled||this.options.dragMode===ni||this.setDragMode(Yi(this.dragBox,bt)?ri:St)},wheel:function(t){var e=this,i=Number(this.options.wheelZoomRatio)||.1,o=1;this.disabled||(t.preventDefault(),!this.wheeling&&(this.wheeling=!0,setTimeout(function(){e.wheeling=!1},50),t.deltaY?o=t.deltaY>0?1:-1:t.wheelDelta?o=-t.wheelDelta/120:t.detail&&(o=t.detail>0?1:-1),this.zoom(-o*i,t)))},cropStart:function(t){var e=t.buttons,i=t.button;if(!(this.disabled||(t.type==="mousedown"||t.type==="pointerdown"&&t.pointerType==="mouse")&&(u(e)&&e!==1||u(i)&&i!==0||t.ctrlKey))){var o=this.options,r=this.pointers,n;t.changedTouches?E(t.changedTouches,function(s){r[s.identifier]=lt(s)}):r[t.pointerId||0]=lt(t),Object.keys(r).length>1&&o.zoomable&&o.zoomOnTouch?n=ai:n=Ct(t.target,ot),Ni.test(n)&&tt(this.element,Mt,{originalEvent:t,action:n})!==!1&&(t.preventDefault(),this.action=n,this.cropping=!1,n===ii&&(this.cropping=!0,O(this.dragBox,ft)))}},cropMove:function(t){var e=this.action;if(!(this.disabled||!e)){var i=this.pointers;t.preventDefault(),tt(this.element,Et,{originalEvent:t,action:e})!==!1&&(t.changedTouches?E(t.changedTouches,function(o){x(i[o.identifier]||{},lt(o,!0))}):x(i[t.pointerId||0]||{},lt(t,!0)),this.change(t))}},cropEnd:function(t){if(!this.disabled){var e=this.action,i=this.pointers;t.changedTouches?E(t.changedTouches,function(o){delete i[o.identifier]}):delete i[t.pointerId||0],e&&(t.preventDefault(),Object.keys(i).length||(this.action=""),this.cropping&&(this.cropping=!1,Z(this.dragBox,ft,this.cropped&&this.options.modal)),tt(this.element,Dt,{originalEvent:t,action:e}))}}},ee={change:function(t){var e=this.options,i=this.canvasData,o=this.containerData,r=this.cropBoxData,n=this.pointers,s=this.action,d=e.aspectRatio,l=r.left,h=r.top,c=r.width,f=r.height,m=l+c,g=h+f,b=0,v=0,M=o.width,C=o.height,D=!0,Y;!d&&t.shiftKey&&(d=c&&f?c/f:1),this.limited&&(b=r.minLeft,v=r.minTop,M=b+Math.min(o.width,i.width,i.left+i.width),C=v+Math.min(o.height,i.height,i.top+i.height));var R=n[Object.keys(n)[0]],p={x:R.endX-R.startX,y:R.endY-R.startY},w=function(I){switch(I){case $:m+p.x>M&&(p.x=M-m);break;case q:l+p.x<b&&(p.x=b-l);break;case H:h+p.y<v&&(p.y=v-h);break;case K:g+p.y>C&&(p.y=C-g);break}};switch(s){case At:l+=p.x,h+=p.y;break;case $:if(p.x>=0&&(m>=M||d&&(h<=v||g>=C))){D=!1;break}w($),c+=p.x,c<0&&(s=q,c=-c,l-=c),d&&(f=c/d,h+=(r.height-f)/2);break;case H:if(p.y<=0&&(h<=v||d&&(l<=b||m>=M))){D=!1;break}w(H),f-=p.y,h+=p.y,f<0&&(s=K,f=-f,h-=f),d&&(c=f*d,l+=(r.width-c)/2);break;case q:if(p.x<=0&&(l<=b||d&&(h<=v||g>=C))){D=!1;break}w(q),c-=p.x,l+=p.x,c<0&&(s=$,c=-c,l-=c),d&&(f=c/d,h+=(r.height-f)/2);break;case K:if(p.y>=0&&(g>=C||d&&(l<=b||m>=M))){D=!1;break}w(K),f+=p.y,f<0&&(s=H,f=-f,h-=f),d&&(c=f*d,l+=(r.width-c)/2);break;case it:if(d){if(p.y<=0&&(h<=v||m>=M)){D=!1;break}w(H),f-=p.y,h+=p.y,c=f*d}else w(H),w($),p.x>=0?m<M?c+=p.x:p.y<=0&&h<=v&&(D=!1):c+=p.x,p.y<=0?h>v&&(f-=p.y,h+=p.y):(f-=p.y,h+=p.y);c<0&&f<0?(s=rt,f=-f,c=-c,h-=f,l-=c):c<0?(s=et,c=-c,l-=c):f<0&&(s=at,f=-f,h-=f);break;case et:if(d){if(p.y<=0&&(h<=v||l<=b)){D=!1;break}w(H),f-=p.y,h+=p.y,c=f*d,l+=r.width-c}else w(H),w(q),p.x<=0?l>b?(c-=p.x,l+=p.x):p.y<=0&&h<=v&&(D=!1):(c-=p.x,l+=p.x),p.y<=0?h>v&&(f-=p.y,h+=p.y):(f-=p.y,h+=p.y);c<0&&f<0?(s=at,f=-f,c=-c,h-=f,l-=c):c<0?(s=it,c=-c,l-=c):f<0&&(s=rt,f=-f,h-=f);break;case rt:if(d){if(p.x<=0&&(l<=b||g>=C)){D=!1;break}w(q),c-=p.x,l+=p.x,f=c/d}else w(K),w(q),p.x<=0?l>b?(c-=p.x,l+=p.x):p.y>=0&&g>=C&&(D=!1):(c-=p.x,l+=p.x),p.y>=0?g<C&&(f+=p.y):f+=p.y;c<0&&f<0?(s=it,f=-f,c=-c,h-=f,l-=c):c<0?(s=at,c=-c,l-=c):f<0&&(s=et,f=-f,h-=f);break;case at:if(d){if(p.x>=0&&(m>=M||g>=C)){D=!1;break}w($),c+=p.x,f=c/d}else w(K),w($),p.x>=0?m<M?c+=p.x:p.y>=0&&g>=C&&(D=!1):c+=p.x,p.y>=0?g<C&&(f+=p.y):f+=p.y;c<0&&f<0?(s=et,f=-f,c=-c,h-=f,l-=c):c<0?(s=rt,c=-c,l-=c):f<0&&(s=it,f=-f,h-=f);break;case ei:this.move(p.x,p.y),D=!1;break;case ai:this.zoom(Wi(n),t),D=!1;break;case ii:if(!p.x||!p.y){D=!1;break}Y=fi(this.cropper),l=R.startX-Y.left,h=R.startY-Y.top,c=r.minWidth,f=r.minHeight,p.x>0?s=p.y>0?at:it:p.x<0&&(l-=c,s=p.y>0?rt:et),p.y<0&&(h-=f),this.cropped||(k(this.cropBox,S),this.cropped=!0,this.limited&&this.limitCropBox(!0,!0));break}D&&(r.width=c,r.height=f,r.left=l,r.top=h,this.action=s,this.renderCropBox()),E(n,function(T){T.startX=T.endX,T.startY=T.endY})}},ae={crop:function(){return this.ready&&!this.cropped&&!this.disabled&&(this.cropped=!0,this.limitCropBox(!0,!0),this.options.modal&&O(this.dragBox,ft),k(this.cropBox,S),this.setCropBoxData(this.initialCropBoxData)),this},reset:function(){return this.ready&&!this.disabled&&(this.imageData=x({},this.initialImageData),this.canvasData=x({},this.initialCanvasData),this.cropBoxData=x({},this.initialCropBoxData),this.renderCanvas(),this.cropped&&this.renderCropBox()),this},clear:function(){return this.cropped&&!this.disabled&&(x(this.cropBoxData,{left:0,top:0,width:0,height:0}),this.cropped=!1,this.renderCropBox(),this.limitCanvas(!0,!0),this.renderCanvas(),k(this.dragBox,ft),O(this.cropBox,S)),this},replace:function(t){var e=arguments.length>1&&arguments[1]!==void 0?arguments[1]:!1;return!this.disabled&&t&&(this.isImg&&(this.element.src=t),e?(this.url=t,this.image.src=t,this.ready&&(this.viewBoxImage.src=t,E(this.previews,function(i){i.getElementsByTagName("img")[0].src=t}))):(this.isImg&&(this.replaced=!0),this.options.data=null,this.uncreate(),this.load(t))),this},enable:function(){return this.ready&&this.disabled&&(this.disabled=!1,k(this.cropper,Yt)),this},disable:function(){return this.ready&&!this.disabled&&(this.disabled=!0,O(this.cropper,Yt)),this},destroy:function(){var t=this.element;return t[y]?(t[y]=void 0,this.isImg&&this.replaced&&(t.src=this.originalUrl),this.uncreate(),this):this},move:function(t){var e=arguments.length>1&&arguments[1]!==void 0?arguments[1]:t,i=this.canvasData,o=i.left,r=i.top;return this.moveTo(gt(t)?t:o+Number(t),gt(e)?e:r+Number(e))},moveTo:function(t){var e=arguments.length>1&&arguments[1]!==void 0?arguments[1]:t,i=this.canvasData,o=!1;return t=Number(t),e=Number(e),this.ready&&!this.disabled&&this.options.movable&&(u(t)&&(i.left=t,o=!0),u(e)&&(i.top=e,o=!0),o&&this.renderCanvas(!0)),this},zoom:function(t,e){var i=this.canvasData;return t=Number(t),t<0?t=1/(1-t):t=1+t,this.zoomTo(i.width*t/i.naturalWidth,null,e)},zoomTo:function(t,e,i){var o=this.options,r=this.canvasData,n=r.width,s=r.height,d=r.naturalWidth,l=r.naturalHeight;if(t=Number(t),t>=0&&this.ready&&!this.disabled&&o.zoomable){var h=d*t,c=l*t;if(tt(this.element,Tt,{ratio:t,oldRatio:n/d,originalEvent:i})===!1)return this;if(i){var f=this.pointers,m=fi(this.cropper),g=f&&Object.keys(f).length?Ui(f):{pageX:i.pageX,pageY:i.pageY};r.left-=(h-n)*((g.pageX-m.left-r.left)/n),r.top-=(c-s)*((g.pageY-m.top-r.top)/s)}else Q(e)&&u(e.x)&&u(e.y)?(r.left-=(h-n)*((e.x-r.left)/n),r.top-=(c-s)*((e.y-r.top)/s)):(r.left-=(h-n)/2,r.top-=(c-s)/2);r.width=h,r.height=c,this.renderCanvas(!0)}return this},rotate:function(t){return this.rotateTo((this.imageData.rotate||0)+Number(t))},rotateTo:function(t){return t=Number(t),u(t)&&this.ready&&!this.disabled&&this.options.rotatable&&(this.imageData.rotate=t%360,this.renderCanvas(!0,!0)),this},scaleX:function(t){var e=this.imageData.scaleY;return this.scale(t,u(e)?e:1)},scaleY:function(t){var e=this.imageData.scaleX;return this.scale(u(e)?e:1,t)},scale:function(t){var e=arguments.length>1&&arguments[1]!==void 0?arguments[1]:t,i=this.imageData,o=!1;return t=Number(t),e=Number(e),this.ready&&!this.disabled&&this.options.scalable&&(u(t)&&(i.scaleX=t,o=!0),u(e)&&(i.scaleY=e,o=!0),o&&this.renderCanvas(!0,!0)),this},getData:function(){var t=arguments.length>0&&arguments[0]!==void 0?arguments[0]:!1,e=this.options,i=this.imageData,o=this.canvasData,r=this.cropBoxData,n;if(this.ready&&this.cropped){n={x:r.left-o.left,y:r.top-o.top,width:r.width,height:r.height};var s=i.width/i.naturalWidth;if(E(n,function(h,c){n[c]=h/s}),t){var d=Math.round(n.y+n.height),l=Math.round(n.x+n.width);n.x=Math.round(n.x),n.y=Math.round(n.y),n.width=l-n.x,n.height=d-n.y}}else n={x:0,y:0,width:0,height:0};return e.rotatable&&(n.rotate=i.rotate||0),e.scalable&&(n.scaleX=i.scaleX||1,n.scaleY=i.scaleY||1),n},setData:function(t){var e=this.options,i=this.imageData,o=this.canvasData,r={};if(this.ready&&!this.disabled&&Q(t)){var n=!1;e.rotatable&&u(t.rotate)&&t.rotate!==i.rotate&&(i.rotate=t.rotate,n=!0),e.scalable&&(u(t.scaleX)&&t.scaleX!==i.scaleX&&(i.scaleX=t.scaleX,n=!0),u(t.scaleY)&&t.scaleY!==i.scaleY&&(i.scaleY=t.scaleY,n=!0)),n&&this.renderCanvas(!0,!0);var s=i.width/i.naturalWidth;u(t.x)&&(r.left=t.x*s+o.left),u(t.y)&&(r.top=t.y*s+o.top),u(t.width)&&(r.width=t.width*s),u(t.height)&&(r.height=t.height*s),this.setCropBoxData(r)}return this},getContainerData:function(){return this.ready?x({},this.containerData):{}},getImageData:function(){return this.sized?x({},this.imageData):{}},getCanvasData:function(){var t=this.canvasData,e={};return this.ready&&E(["left","top","width","height","naturalWidth","naturalHeight"],function(i){e[i]=t[i]}),e},setCanvasData:function(t){var e=this.canvasData,i=e.aspectRatio;return this.ready&&!this.disabled&&Q(t)&&(u(t.left)&&(e.left=t.left),u(t.top)&&(e.top=t.top),u(t.width)?(e.width=t.width,e.height=t.width/i):u(t.height)&&(e.height=t.height,e.width=t.height*i),this.renderCanvas(!0)),this},getCropBoxData:function(){var t=this.cropBoxData,e;return this.ready&&this.cropped&&(e={left:t.left,top:t.top,width:t.width,height:t.height}),e||{}},setCropBoxData:function(t){var e=this.cropBoxData,i=this.options.aspectRatio,o,r;return this.ready&&this.cropped&&!this.disabled&&Q(t)&&(u(t.left)&&(e.left=t.left),u(t.top)&&(e.top=t.top),u(t.width)&&t.width!==e.width&&(o=!0,e.width=t.width),u(t.height)&&t.height!==e.height&&(r=!0,e.height=t.height),i&&(o?e.height=e.width/i:r&&(e.width=e.height*i)),this.renderCropBox()),this},getCroppedCanvas:function(){var t=arguments.length>0&&arguments[0]!==void 0?arguments[0]:{};if(!this.ready||!window.HTMLCanvasElement)return null;var e=this.canvasData,i=Vi(this.image,this.imageData,e,t);if(!this.cropped)return i;var o=this.getData(t.rounded),r=o.x,n=o.y,s=o.width,d=o.height,l=i.width/Math.floor(e.naturalWidth);l!==1&&(r*=l,n*=l,s*=l,d*=l);var h=s/d,c=U({aspectRatio:h,width:t.maxWidth||1/0,height:t.maxHeight||1/0}),f=U({aspectRatio:h,width:t.minWidth||0,height:t.minHeight||0},"cover"),m=U({aspectRatio:h,width:t.width||(l!==1?i.width:s),height:t.height||(l!==1?i.height:d)}),g=m.width,b=m.height;g=Math.min(c.width,Math.max(f.width,g)),b=Math.min(c.height,Math.max(f.height,b));var v=document.createElement("canvas"),M=v.getContext("2d");v.width=J(g),v.height=J(b),M.fillStyle=t.fillColor||"transparent",M.fillRect(0,0,g,b);var C=t.imageSmoothingEnabled,D=C===void 0?!0:C,Y=t.imageSmoothingQuality;M.imageSmoothingEnabled=D,Y&&(M.imageSmoothingQuality=Y);var R=i.width,p=i.height,w=r,T=n,I,X,j,V,z,_;w<=-s||w>R?(w=0,I=0,j=0,z=0):w<=0?(j=-w,w=0,I=Math.min(R,s+w),z=I):w<=R&&(j=0,I=Math.min(s,R-w),z=I),I<=0||T<=-d||T>p?(T=0,X=0,V=0,_=0):T<=0?(V=-T,T=0,X=Math.min(p,d+T),_=X):T<=p&&(V=0,X=Math.min(d,p-T),_=X);var N=[w,T,I,X];if(z>0&&_>0){var G=g/s;N.push(j*G,V*G,z*G,_*G)}return M.drawImage.apply(M,[i].concat(Jt(N.map(function(ht){return Math.floor(J(ht))})))),v},setAspectRatio:function(t){var e=this.options;return!this.disabled&&!gt(t)&&(e.aspectRatio=Math.max(0,t)||NaN,this.ready&&(this.initCropBox(),this.cropped&&this.renderCropBox())),this},setDragMode:function(t){var e=this.options,i=this.dragBox,o=this.face;if(this.ready&&!this.disabled){var r=t===St,n=e.movable&&t===ri;t=r||n?t:ni,e.dragMode=t,st(i,ot,t),Z(i,bt,r),Z(i,yt,n),e.cropBoxMovable||(st(o,ot,t),Z(o,bt,r),Z(o,yt,n))}return this}},re=P.Cropper,pi=function(){function a(t){var e=arguments.length>1&&arguments[1]!==void 0?arguments[1]:{};if(mi(this,a),!t||!Ri.test(t.tagName))throw new Error("The first argument is required and must be an <img> or <canvas> element.");this.element=t,this.options=x({},qt,Q(e)&&e),this.cropped=!1,this.disabled=!1,this.pointers={},this.ready=!1,this.reloading=!1,this.replaced=!1,this.sized=!1,this.sizing=!1,this.init()}return vi(a,[{key:"init",value:function(){var e=this.element,i=e.tagName.toLowerCase(),o;if(!e[y]){if(e[y]=this,i==="img"){if(this.isImg=!0,o=e.getAttribute("src")||"",this.originalUrl=o,!o)return;o=e.src}else i==="canvas"&&window.HTMLCanvasElement&&(o=e.toDataURL());this.load(o)}}},{key:"load",value:function(e){var i=this;if(e){this.url=e,this.imageData={};var o=this.element,r=this.options;if(!r.rotatable&&!r.scalable&&(r.checkOrientation=!1),!r.checkOrientation||!window.ArrayBuffer){this.clone();return}if(Ai.test(e)){Si.test(e)?this.read(qi(e)):this.clone();return}var n=new XMLHttpRequest,s=this.clone.bind(this);this.reloading=!0,this.xhr=n,n.onabort=s,n.onerror=s,n.ontimeout=s,n.onprogress=function(){n.getResponseHeader("content-type")!==$t&&n.abort()},n.onload=function(){i.read(n.response)},n.onloadend=function(){i.reloading=!1,i.xhr=null},r.checkCrossOrigin&&Kt(e)&&o.crossOrigin&&(e=Qt(e)),n.open("GET",e,!0),n.responseType="arraybuffer",n.withCredentials=o.crossOrigin==="use-credentials",n.send()}}},{key:"read",value:function(e){var i=this.options,o=this.imageData,r=Ki(e),n=0,s=1,d=1;if(r>1){this.url=Fi(e,$t);var l=Qi(r);n=l.rotate,s=l.scaleX,d=l.scaleY}i.rotatable&&(o.rotate=n),i.scalable&&(o.scaleX=s,o.scaleY=d),this.clone()}},{key:"clone",value:function(){var e=this.element,i=this.url,o=e.crossOrigin,r=i;this.options.checkCrossOrigin&&Kt(i)&&(o||(o="anonymous"),r=Qt(i)),this.crossOrigin=o,this.crossOriginUrl=r;var n=document.createElement("img");o&&(n.crossOrigin=o),n.src=r||i,n.alt=e.alt||"The image to crop",this.image=n,n.onload=this.start.bind(this),n.onerror=this.stop.bind(this),O(n,Xt),e.parentNode.insertBefore(n,e.nextSibling)}},{key:"start",value:function(){var e=this,i=this.image;i.onload=null,i.onerror=null,this.sizing=!0;var o=P.navigator&&/(?:iPad|iPhone|iPod).*?AppleWebKit/i.test(P.navigator.userAgent),r=function(l,h){x(e.imageData,{naturalWidth:l,naturalHeight:h,aspectRatio:l/h}),e.initialImageData=x({},e.imageData),e.sizing=!1,e.sized=!0,e.build()};if(i.naturalWidth&&!o){r(i.naturalWidth,i.naturalHeight);return}var n=document.createElement("img"),s=document.body||document.documentElement;this.sizingImage=n,n.onload=function(){r(n.width,n.height),o||s.removeChild(n)},n.src=i.src,o||(n.style.cssText="left:0;max-height:none!important;max-width:none!important;min-height:0!important;min-width:0!important;opacity:0;position:absolute;top:0;z-index:-1;",s.appendChild(n))}},{key:"stop",value:function(){var e=this.image;e.onload=null,e.onerror=null,e.parentNode.removeChild(e),this.image=null}},{key:"build",value:function(){if(!(!this.sized||this.ready)){var e=this.element,i=this.options,o=this.image,r=e.parentNode,n=document.createElement("div");n.innerHTML=Ii;var s=n.querySelector(".".concat(y,"-container")),d=s.querySelector(".".concat(y,"-canvas")),l=s.querySelector(".".concat(y,"-drag-box")),h=s.querySelector(".".concat(y,"-crop-box")),c=h.querySelector(".".concat(y,"-face"));this.container=r,this.cropper=s,this.canvas=d,this.dragBox=l,this.cropBox=h,this.viewBox=s.querySelector(".".concat(y,"-view-box")),this.face=c,d.appendChild(o),O(e,S),r.insertBefore(s,e.nextSibling),k(o,Xt),this.initPreview(),this.bind(),i.initialAspectRatio=Math.max(0,i.initialAspectRatio)||NaN,i.aspectRatio=Math.max(0,i.aspectRatio)||NaN,i.viewMode=Math.max(0,Math.min(3,Math.round(i.viewMode)))||0,O(h,S),i.guides||O(h.getElementsByClassName("".concat(y,"-dashed")),S),i.center||O(h.getElementsByClassName("".concat(y,"-center")),S),i.background&&O(s,"".concat(y,"-bg")),i.highlight||O(c,Mi),i.cropBoxMovable&&(O(c,yt),st(c,ot,At)),i.cropBoxResizable||(O(h.getElementsByClassName("".concat(y,"-line")),S),O(h.getElementsByClassName("".concat(y,"-point")),S)),this.render(),this.ready=!0,this.setDragMode(i.dragMode),i.autoCrop&&this.crop(),this.setData(i.data),A(i.ready)&&L(e,jt,i.ready,{once:!0}),tt(e,jt)}}},{key:"unbuild",value:function(){if(this.ready){this.ready=!1,this.unbind(),this.resetPreview();var e=this.cropper.parentNode;e&&e.removeChild(this.cropper),k(this.element,S)}}},{key:"uncreate",value:function(){this.ready?(this.unbuild(),this.ready=!1,this.cropped=!1):this.sizing?(this.sizingImage.onload=null,this.sizing=!1,this.sized=!1):this.reloading?(this.xhr.onabort=null,this.xhr.abort()):this.image&&this.stop()}}],[{key:"noConflict",value:function(){return window.Cropper=re,a}},{key:"setDefaults",value:function(e){x(qt,Q(e)&&e)}}]),a}();x(pi.prototype,Zi,Ji,te,ie,ee,ae);window.Cropper=pi;
