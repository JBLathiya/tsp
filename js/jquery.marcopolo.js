/*!
 * Marco Polo v1.8.0
 *
 * A jQuery autocomplete plugin for the discerning developer.
 *
 * https://github.com/jstayton/jquery-marcopolo
 *
 * Copyright 2013 by Justin Stayton
 * Licensed MIT
 */
(function(e){"use strict";typeof define=="function"&&define.amd?define(["jquery"],e):e(jQuery)})(function(e,t){"use strict";var n={};e.widget("mp.marcoPolo",{options:{cache:!0,compare:!1,data:{},delay:250,formatData:null,formatError:function(){return"<em>Your search could not be completed at this time.</em>"},formatItem:function(e){return e.title||e.name},formatMinChars:function(e){return"<em>Your search must be at least <strong>"+e+"</strong> characters.</em>"},formatNoResults:function(e){return"<em>No results for <strong>"+e+"</strong>.</em>"},hideOnSelect:!0,highlight:!0,label:null,minChars:1,onBlur:null,onChange:null,onError:null,onFocus:null,onMinChars:null,onNoResults:null,onRequestBefore:null,onRequestAfter:null,onResults:null,onSelect:function(e){this.val(e.title||e.name)},param:"q",required:!1,selectable:"*",selected:null,submitOnEnter:!1,url:null},keys:{DOWN:40,END:35,ENTER:13,ESC:27,HOME:36,TAB:9,UP:38},_create:function(){var t=this,n;t.$input=n=t.element.addClass("mp_input"),t.inputName="mp_"+(n.attr("name")||e.now()),t.$list=e('<ol class="mp_list" />').attr({"aria-atomic":"true","aria-busy":"false","aria-live":"polite",id:t.inputName+"_list",role:"listbox"}).hide().insertAfter(t.$input),t.inputOriginals={"aria-activedescendant":n.attr("aria-activedescendant"),"aria-autocomplete":n.attr("aria-autocomplete"),"aria-expanded":n.attr("aria-expanded"),"aria-labelledby":n.attr("aria-labelledby"),"aria-owns":n.attr("aria-owns"),"aria-required":n.attr("aria-required"),autocomplete:n.attr("autocomplete"),role:n.attr("role")},n.attr({"aria-autocomplete":"list","aria-owns":t.$list.attr("id"),autocomplete:"off",role:"combobox"}),t.ajax=null,t.ajaxAborted=!1,t.documentMouseup=null,t.focusPseudo=!1,t.focusReal=!1,t.mousedown=!1,t.selectedData=null,t.selectedMouseup=!1,t.timer=null,t.value=t.$input.val(),t._bindInput()._bindList()._bindDocument(),t._initSelected()._initOptions()},_setOption:function(t,n){e.Widget.prototype._setOption.apply(this,arguments),this._initOptions(t,n)},_initOptions:function(n,r){var i=this,s=n===t,o={};return s?o=i.options:o[n]=r,e.each(o,function(t,n){switch(t){case"label":i.options.label=e(n).addClass("mp_label"),i.options.label.attr("id")?i.removeLabelId=!1:(i.removeLabelId=!0,i.options.label.attr("id",i.inputName+"_label")),i._toggleLabel(),i.$input.attr("aria-labelledby",i.options.label.attr("id"));break;case"required":i.$input.attr("aria-required",n);break;case"selected":s&&n&&i.select(n,null,!0);break;case"url":n||(i.options.url=i.$input.closest("form").attr("action"))}}),i},change:function(e,t){var n=this;if(e===n.value)return;e!==n.$input.val()&&n.$input.val(e),n.selectedData=null,n.value=e,n._trigger("change",[e]),t!==!0&&(n.focusPseudo?n._cancelPendingRequest()._hideAndEmptyList():n._toggleLabel())},search:function(e){var n=this.$input;e!==t&&n.val(e),n.focus()},select:function(e,t,n){var r=this,i=r.$input,s=r.options.hideOnSelect;s&&r._hideList();if(!e)return r.change("");r.selectedData=e,r._trigger("select",[e,t,!!n]),i.val()!==r.value&&(r.value=i.val(),r.focusPseudo||r._toggleLabel(),r._hideAndEmptyList())},_initSelected:function(){var e=this,t=e.$input,n=t.data("selected"),r=t.val();return n?e.select(n,null,!0):r&&e.select(r,null,!0),e},selected:function(){return this.selectedData},destroy:function(){var n=this,r=n.options,i=n.$input;n.$list.remove(),e.each(n.inputOriginals,function(e,n){n===t?i.removeAttr(e):i.attr(e,n)}),i.removeClass("mp_input"),r.label&&(r.label.removeClass("mp_label"),n.removeLabelId&&r.label.removeAttr("id")),e(document).unbind("mouseup.marcoPolo",n.documentMouseup),e.Widget.prototype.destroy.apply(n,arguments)},list:function(){return this.$list},_bindInput:function(){var t=this,n=t.$input,r=t.$list;return n.bind("focus.marcoPolo",function(){if(t.focusReal)return;t.focusPseudo=!0,t.focusReal=!0,t._toggleLabel(),t.selectedMouseup?t.selectedMouseup=!1:(t._trigger("focus"),t._request(n.val()))}).bind("keydown.marcoPolo",function(n){var i=e();switch(n.which){case t.keys.UP:n.preventDefault(),t._showList()._highlightPrev();break;case t.keys.DOWN:n.preventDefault(),t._showList()._highlightNext();break;case t.keys.HOME:n.preventDefault(),t._showList()._highlightFirst();break;case t.keys.END:n.preventDefault(),t._showList()._highlightLast();break;case t.keys.ENTER:if(!r.is(":visible")){t.options.submitOnEnter||n.preventDefault();return}i=t._highlighted(),i.length&&t.select(i.data("marcoPolo"),i),(!t.options.submitOnEnter||i.length)&&n.preventDefault();break;case t.keys.TAB:if(!r.is(":visible"))return;i=t._highlighted(),i.length&&t.select(i.data("marcoPolo"),i);break;case t.keys.ESC:t._cancelPendingRequest()._hideList()}}).bind("keyup.marcoPolo",function(){n.val()!==t.value&&t._request(n.val())}).bind("blur.marcoPolo",function(){t.focusReal=!1,setTimeout(function(){t.mousedown||t._dismiss()},1)}),t},_bindList:function(){var t=this;return t.$list.bind("mousedown.marcoPolo",function(){t.mousedown=!0}).delegate("li.mp_selectable","mouseover",function(){t._addHighlight(e(this))}).delegate("li.mp_selectable","mouseout",function(){t._removeHighlight(e(this))}).delegate("li.mp_selectable","mouseup",function(){var n=e(this);t.select(n.data("marcoPolo"),n),t.selectedMouseup=!0,t.$input.focus()}),t},_bindDocument:function(){var t=this;return e(document).bind("mouseup.marcoPolo",t.documentMouseup=function(){t.mousedown=!1,!t.focusReal&&t.$list.is(":visible")&&t._dismiss()}),t},_toggleLabel:function(){var e=this,t=e.options.label;return t&&t.length&&(e.focusPseudo||e.$input.val()?t.hide():t.show()),e},_firstSelectableItem:function(){return this.$list.children("li.mp_selectable:visible:first")},_lastSelectableItem:function(){return this.$list.children("li.mp_selectable:visible:last")},_highlighted:function(){return this.$list.children("li.mp_highlighted")},_removeHighlight:function(e){return e.removeClass("mp_highlighted").attr("aria-selected","false").removeAttr("id"),this.$input.removeAttr("aria-activedescendant"),this},_addHighlight:function(e){return this._removeHighlight(this._highlighted()),e.addClass("mp_highlighted").attr({"aria-selected":"true",id:this.inputName+"_highlighted"}),this.$input.attr("aria-activedescendant",e.attr("id")),this},_highlightFirst:function(){return this._addHighlight(this._firstSelectableItem()),this},_highlightLast:function(){return this._addHighlight(this._lastSelectableItem()),this},_highlightPrev:function(){var e=this._highlighted(),t=e.prevAll("li.mp_selectable:visible:first");return t.length||(t=this._lastSelectableItem()),this._addHighlight(t),this},_highlightNext:function(){var e=this._highlighted(),t=e.nextAll("li.mp_selectable:visible:first");return t.length||(t=this._firstSelectableItem()),this._addHighlight(t),this},_showList:function(){return this.$list.children().length&&(this.$list.show(),this.$input.attr("aria-expanded","true")),this},_hideList:function(){return this.$list.hide(),this.$input.removeAttr("aria-activedescendant").removeAttr("aria-expanded"),this},_emptyList:function(){return this.$list.empty(),this.$input.removeAttr("aria-activedescendant"),this},_hideAndEmptyList:function(){return this.$list.hide().empty(),this.$input.removeAttr("aria-activedescendant").removeAttr("aria-expanded"),this},_buildNoResultsList:function(t){var n=this,r=n.$input,i=n.$list,s=n.options,o=e('<li class="mp_no_results" role="alert" />'),u;return u=s.formatNoResults&&s.formatNoResults.call(r,t,o),u&&o.html(u),n._trigger("noResults",[t,o]),u?(o.appendTo(i),n._showList()):n._hideList(),n},_buildResultsList:function(t,n){var r=this,i=r.$input,s=r.$list,o=r.options,u=r.selectedData,a=o.compare&&u,f,l,c=!1,h,p=e(),d;for(var v=0,m=n.length;v<m;v++)h=n[v],p=e('<li class="mp_item" />'),d=o.formatItem.call(i,h,p),p.data("marcoPolo",h),p.html(d).appendTo(s),a&&o.highlight&&(o.compare===!0?(f=h,l=u):(f=h[o.compare],l=u[o.compare]),f===l&&(r._addHighlight(p),a=!1,c=!0));return s.children(o.selectable).addClass("mp_selectable").attr({"aria-selected":"false",role:"option"}),r._trigger("results",[n]),r._showList(),!c&&o.highlight&&r._highlightFirst(),r},_buildSuccessList:function(t,n){var r=this,i=r.$input,s=r.options;return r._emptyList(),s.formatData&&(n=s.formatData.call(i,n)),!n||n.length===0||e.isEmptyObject(n)?r._buildNoResultsList(t):r._buildResultsList(t,n),r},_buildErrorList:function(t,n,r){var i=this,s=i.$input,o=i.$list,u=i.options,a=e('<li class="mp_error" role="alert" />'),f;return i._emptyList(),f=u.formatError&&u.formatError.call(s,a,t,n,r),f&&a.html(f),i._trigger("error",[a,t,n,r]),f?(a.appendTo(o),i._showList()):i._hideList(),i},_buildMinCharsList:function(t){var n=this,r=n.$input,i=n.$list,s=n.options,o=e('<li class="mp_min_chars" role="alert" />'),u;return t.length?(n._emptyList(),u=s.formatMinChars&&s.formatMinChars.call(r,s.minChars,o),u&&o.html(u),n._trigger("minChars",[s.minChars,o]),u?(o.appendTo(i),n._showList()):n._hideList(),n):(n._hideAndEmptyList(),n)},_cancelPendingRequest:function(){var e=this;return e.ajax?(e.ajaxAborted=!0,e.ajax.abort()):e.ajaxAborted=!1,clearTimeout(e.timer),e},_request:function(t){var r=this,i=r.$input,s=r.$list,o=r.options;return r._cancelPendingRequest(),r.change(t,!0),r.timer=setTimeout(function(){var u={},a={},f={},l,c=e();if(t.length<o.minChars)return r._buildMinCharsList(t),r;u=e.isFunction(o.data)?o.data.call(r.$input,t):o.data,a[o.param]=t,f=e.extend({},u,a),l=o.url+(o.url.indexOf("?")===-1?"?":"&")+e.param(f),o.cache&&n[l]?r._buildSuccessList(t,n[l]):(r._trigger("requestBefore"),c=i.parent().addClass("mp_busy"),s.attr("aria-busy","true"),r.ajax=e.ajax({url:o.url,dataType:"json",data:f,success:function(e){r._buildSuccessList(t,e),o.cache&&(n[l]=e)},error:function(e,t,n){r.ajaxAborted||r._buildErrorList(e,t,n)},complete:function(e,t){r.ajax=null,r.ajaxAborted=!1,c.removeClass("mp_busy"),s.attr("aria-busy","false"),r._trigger("requestAfter",[e,t])}}))},o.delay),r},_dismiss:function(){var e=this,t=e.options;return e.focusPseudo=!1,e._cancelPendingRequest()._hideAndEmptyList(),t.required&&!e.selectedData&&e.change("",!0),e._toggleLabel()._trigger("blur"),e},_trigger:function(t,n){var r=this,i="on"+t.charAt(0).toUpperCase()+t.slice(1),s=r.widgetEventPrefix.toLowerCase()+t.toLowerCase(),o=e.isArray(n)?n:[],u=r.options[i];return r.element.trigger(s,o),u&&u.apply(r.element,o)}})});