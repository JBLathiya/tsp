/**
 * jquery.cookiefy - Lightweight jQuery plugin to the EU cookie laws
 * @version: v1.0.3 (2016-07-27 12:39:40)
 * @documentation: https://kmarryo.github.io/jquery.cookiefy/
 * @author: Mario Lemke (https://github.com/kmarryo)
 * @license: MIT
 */
function set_cookie(e,t,i){"undefined"==typeof i&&(i="360");var o=new Date;o.setDate(o.getDate()+i);var n=escape(t)+(null==i?"":"; expires="+o.toUTCString());document.cookie=e+"="+n}function get_cookie(e){var t,i,o,n=document.cookie.split(";");for(t=0;t<n.length;t++)if(i=n[t].substr(0,n[t].indexOf("=")),o=n[t].substr(n[t].indexOf("=")+1),i=i.replace(/^\s+|\s+$/g,""),i==e)return unescape(o);return!1}!function(e,t,i,o){"use strict";function n(t,i){this.element=t,this.settings=e.extend(d,i),this._defaults=d,this._name=c,this.init()}var c="cookiefy",d={devMode:!1,zIndex:50,backgroundColor:"#bebebe",color:"#000",displayedHtml:"We use cookies to ensure that we give you the best experience on our website. If you continue, you agree with <strong>our cookie policy</strong>.",cssPrefix:c+"_",closeButtonUrl:"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAYAAADEtGw7AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjdFQURCMTE5NUU4NzExRThCMkJFOUQwRkVEODhCQzdFIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjdFQURCMTFBNUU4NzExRThCMkJFOUQwRkVEODhCQzdFIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N0VBREIxMTc1RTg3MTFFOEIyQkU5RDBGRUQ4OEJDN0UiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6N0VBREIxMTg1RTg3MTFFOEIyQkU5RDBGRUQ4OEJDN0UiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4PQJ8qAAABdklEQVR42rTVO0vDUBTA8SSNz4Kgi1VExBY3P4Cbj1FwEsFBHFz0K7jqUqRuriJ+AnERdBAfS3GquAguShEcHKr4QLHxf+AESsi9NZIe+NE2N/f0JOfmxg2CwCG6sYRZDKDuJAsPNVxgD/cOiXuwG6QXZeQl8VqQfux7evlpx7QkzrUgsec1adQXfgxjb5Z5dUkcGAYfsICtmLFDzOPSmFq7GI0PzMlShI9Sw9gxBnVsBLcx86u+4f8ymMARvrGODhSwgkc9T87pTVJxGFJpp1Ynn336XSyjZphXbZZYYgfZhoRiFZ+WOVXvD0tnDNnI4zuqt8ZJ2rwwTjAUqdbRKyjZKrYlPkAucvlFdOnvNmziPUniF0xFGhXe021dgnK8H5WkFZ/JLoXFmO5vYFgbW//PqrjDc8xxqf7ado99fRhMkTcclxUxbpnnytJ5bcHulpHE5y1IfONoE65SfHs8YdLVl2lBN5oZtFv2YNvL1EUFRZz+CjAAWTexwjCGK4wAAAAASUVORK5CYII="};e.extend(n.prototype,{init:function(){var t=this.settings,i=this.element,o={width:"100%",display:"none",position:"fixed",bottom:0,left:0,opacity:.9,padding:"15px 0",textAlign:"center",backgroundColor:t.backgroundColor,color:t.color,borderTop:t.borderTop,boxShadow:"0px 1px 1px 1px rgba(64,64,64,1)",zIndex:t.zIndex};"undefined"!=typeof t.fontFamily&&(o.fontFamily=t.fontFamily),"undefined"!=typeof t.fontSize&&(o.fontSize=t.fontSize),"undefined"!=typeof t.fontSize&&(o.fontSize=t.fontSize);var n=e("<div />",{id:t.cssPrefix+"bar",css:o}),c=function(){var o=e("<div/>",{html:t.displayedHtml,id:t.cssPrefix+"cookie-text",css:{paddingLeft:"10%",paddingRight:"15%"}}),c={textDecoration:"underline",cursor:"pointer",position:"absolute",top:"50%",right:"3%",width:"auto",maxHeight:"2rem",transform:"translateY(-50%)"},d=e("<img/>",{id:t.cssPrefix+"close",src:t.closeButtonUrl,css:c}).on("click",function(){s()});n.append(o),n.append(d),n.find("a").css("text-decoration","underline"),e(i).append(n)},d=function(){n.fadeIn(500)},s=function(){n.fadeOut(500,function(){e(this).remove()})},u=function(){set_cookie(t.cssPrefix+"cookie",!0)},l=function(){return get_cookie(t.cssPrefix+"cookie")};!t.devMode&&l()||(u(),c(),d())}}),e.fn[c]=function(t){return this.each(function(){e.data(this,"plugin_"+c)||e.data(this,"plugin_"+c,new n(this,t))})}}(jQuery,window,document);