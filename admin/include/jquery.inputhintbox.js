
(function($){$.fn.inputHintBox=function(options){options=$.extend({},$.inputHintBoxer.defaults,options);this.each(function(){new $.inputHintBoxer(this,options);});return this;}
$.inputHintBoxer=function(input,options){var $guideObject=$(options.el||input),$input=$(input),box,boxMouseDown=false;if(($guideObject.attr('type')=='radio'||$guideObject.attr('type')=='checkbox')&&$guideObject.parent().is('label')){$guideObject=$($guideObject.parent());}
function init(){var boxHtml=options.html!=''?options.html:options.source=='attr'?$input.attr(options.attr):'';if(typeof boxHtml==="undefined")boxHtml='';box=options.div!=''?options.div.clone():$("<div/>").addClass(options.className);box=box.css('display','none').addClass('_hintBox').appendTo(options.attachTo);if(options.div_sub=='')box.html(boxHtml);else $(options.div_sub,box).html(boxHtml);$input.focus(function(){$('body').mousedown(global_mousedown_listener);show();}).blur(function(){prepare_hide();}).bind('mouseover',function(e){$('body').mousedown(global_mousedown_listener);if(Runner.Event.prototype.getTarget(e.originalEvent).nodeName!="OPTION"){show();}}).bind('mouseout',function(e){prepare_hide(true);});}
function align(){var posData=findPos($guideObject[0]);var offsets=$guideObject.position(),left=posData[0]+$guideObject.width()+options.incrementLeft+5+($.browser.safari?5:($.browser.msie?10:($.browser.mozilla?6:0))),top=posData[1]+options.incrementTop;if(options.pageObj&&options.pageObj.fly&&options.pageObj.win){box.css('z-index',options.pageObj.win.cfg.getProperty("zindex")+1);}
box.css({position:"absolute",top:top,left:left});}
function show(){$('div.shiny_box').hide();align();box.show();}
function prepare_hide(noTimeout){$('body').click(global_click_listener);if(boxMouseDown)return;if(noTimeout){hide(true);}else{$.inputHintBoxer.mostRecentHideTimer=setTimeout(function(){hide()},300);}}
var global_click_listener=function(e){var $e=$(e.target),c='._hintBox';clearTimeout($.inputHintBoxer.mostRecentHideTimer);if($e.parents(c).length==0&&$e.is(c)==false)hide();};var global_mousedown_listener=function(e){var $e=$(e.target),c='._hintBox';boxMouseDown=($e.parents(c).length!=0||$e.is(c)!=false);}
function hide(noTimeout){$('body').unbind('click',global_click_listener);$('body').unbind('mousedown',global_mousedown_listener);align();if(noTimeout){box.hide();}else{box.fadeOut('fast');}}
init();return{}};$.inputHintBoxer.mostRecentHideTimer=0;$.inputHintBoxer.defaults={div:'',className:'input_hint_box',source:'attr',div_sub:'',attr:'title',html:'',incrementLeft:5,incrementTop:0,attachTo:'body'}})(jQuery);