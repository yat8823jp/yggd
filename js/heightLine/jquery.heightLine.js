/*!--------------------------------------------------------------------------*
 *
 *  jquery.heightLine.js
 *
 *  MIT-style license.
 *
 *  2013 Kazuma Nishihata
 *  http://www.to-r.net
 *
 *--------------------------------------------------------------------------*/
;jQuery(function(a){a(".mod-related-item dd").heightLine()});(function(a){a.fn.heightLine=function(){var f=this,g,e=Math.random();var c={op:{maxWidth:10000,minWidth:0,fontSizeCheck:false},setOption:function(h){this.op=a.extend(this.op,h)},destroy:function(){f.css("height","")},create:function(k){var h=this,j=0,i=a(window).width();h.setOption(k);if(i<=h.op.maxWidth&&i>=h.op.minWidth){f.each(function(){if(a(this).outerHeight()>j){j=a(this).outerHeight()}}).each(function(){var l=j-parseInt(a(this).css("padding-top"))-parseInt(a(this).css("padding-bottom"));a(this).height(l)})}},refresh:function(h){this.destroy();this.create(h)},removeEvent:function(){a(window).off("resize."+e);f.off("destroy refresh");clearInterval(g)}};if(typeof arguments[0]==="string"&&arguments[0]==="destroy"){f.trigger("destroy")}else{if(typeof arguments[0]==="string"&&arguments[0]==="refresh"){f.trigger("refresh")}else{c.create(arguments[0]);a(window).on("resize."+e,function(){c.refresh()});f.on("destroy",function(){c.removeEvent();c.destroy()}).on("refresh",function(){c.refresh()});if(c.op.fontSizeCheck){if(a("#fontSizeChange").length<=0){var b=a("<span id='fontSizeChange'></span>").css({width:0,height:"1em",position:"absolute",left:0,top:0}).appendTo("body")}var d=a("#fontSizeChange").height();g=setInterval(function(){if(d!=a("#fontSizeChange").height()){c.refresh()}},100)}}}return f}})(jQuery);
