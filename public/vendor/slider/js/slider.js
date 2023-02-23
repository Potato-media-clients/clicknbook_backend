!function(t,e,n,s){t.fn.otsSlider=function(e){var i={effect:"ots-slider-scale-transform",container:".ots-slider",itemClass:".item",items:1,control:!0,controlsClass:".ots-slider-controls",pagination:!0,paginationClass:".ots-slider-navs",currentPageClass:".active",zIndexFrom:99,autoplay:!1,stopHover:!1,interval:5e3,margin:20,currentClass:"is-showing",iconNext:'<svg stroke="#FFFFFF" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"                 viewBox="0 0 32.635 32.635" style="enable-background:new 0 0 32.635 32.635;" xml:space="preserve">            <g>                <path d="M32.135,16.817H0.5c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h31.635c0.276,0,0.5,0.224,0.5,0.5                    S32.411,16.817,32.135,16.817z"/>                <path d="M19.598,29.353c-0.128,0-0.256-0.049-0.354-0.146c-0.195-0.195-0.195-0.512,0-0.707l12.184-12.184L19.244,4.136                    c-0.195-0.195-0.195-0.512,0-0.707s0.512-0.195,0.707,0l12.537,12.533c0.094,0.094,0.146,0.221,0.146,0.354                    s-0.053,0.26-0.146,0.354L19.951,29.206C19.854,29.304,19.726,29.353,19.598,29.353z"/>            </g>            </svg>',iconPrev:'<svg stroke="#FFFFFF" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px"                 y="0px"                 viewBox="0 0 32.635 32.635" style="enable-background:new 0 0 32.635 32.635;" xml:space="preserve">            <g>                <path d="M32.135,16.817H0.5c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h31.635c0.276,0,0.5,0.224,0.5,0.5                    S32.411,16.817,32.135,16.817z"/>                <path d="M13.037,29.353c-0.128,0-0.256-0.049-0.354-0.146L0.146,16.669C0.053,16.575,0,16.448,0,16.315s0.053-0.26,0.146-0.354                    L12.684,3.429c0.195-0.195,0.512-0.195,0.707,0s0.195,0.512,0,0.707L1.207,16.315l12.184,12.184c0.195,0.195,0.195,0.512,0,0.707                    C13.293,29.304,13.165,29.353,13.037,29.353z"/>            </g>            </svg>'},a={"ots-slider-scale-transform":{next:"ots-slider-scale-transform-next",prev:"ots-slider-scale-transform-prev",current:"ots-slider-scale-transform-current",hasCustomTranslation:!1},"ots-slider-scale":{next:"ots-slider-scale-next",prev:"ots-slider-scale-prev",current:"ots-slider-scale-current",hasCustomTranslation:!0},"ots-slider-fade":{next:"ots-slider-fade-next",prev:"ots-slider-fade-prev",current:"ots-slider-fade-current",hasCustomTranslation:!0}};return this.each(function(){var o,r=t(this),l=t.extend({},i,e),c=t(l.container,r),d=t(l.itemClass,c),p=d.length,f=Math.ceil(p/l.items),u=0,m=0,h=(t(l.controlsClass,r),!0),x=function(){var t,e=n.createElement("fakeelement"),i={transition:"transitionend",OTransition:"oTransitionEnd",MozTransition:"transitionend",WebkitTransition:"webkitTransitionEnd"};for(t in i)if(e.style[t]!==s)return i[t]}();function v(){d.each(function(e){-1===t.inArray(e,u)?t(this).css("z-index",l.zIndexFrom-(e+1)):t(this).css("z-index",l.zIndexFrom)})}function g(e){if(v(),e)h=!1,"next"===e?(d.eq(m).removeClass(a[l.effect].current+" "+l.currentClass).addClass(a[l.effect].prev),d.eq(m).one(x,function(){d.eq(m).removeClass(" "+a[l.effect].current+" "+a[l.effect].prev).addClass(a[l.effect].next)}),d.eq(u).removeClass(a[l.effect].next).addClass(a[l.effect].current+" "+l.currentClass),d.eq(u).one(x,function(){h=!0})):(d.eq(m).removeClass(a[l.effect].current).addClass(a[l.effect].prev),d.eq(m).one(x,function(){d.eq(m).removeClass(" "+a[l.effect].current+" "+a[l.effect].prev).addClass(a[l.effect].next)}),d.eq(u).removeClass(a[l.effect].next).addClass(a[l.effect].current),d.eq(u).one(x,function(){h=!0}));else{d.eq(u).addClass(a[l.effect].current+" "+l.currentClass);for(let t=0;t<=p;t++)t!==u&&d.eq(t).addClass(a[l.effect].next)}t(".page-item",r).removeClass(l.currentPageClass.substr(1)),t(".page-item",r).eq(u).addClass(l.currentPageClass.substr(1))}function C(){l.autoplay&&(o&&clearInterval(o),o=setInterval(function(){if(h){let t=u;++t>=p&&(t=0),w(t)}},l.interval))}function w(t){t!==u&&(t>u?(m=u,u=t,g("next")):(m=u,u=t,g("prev")))}t.data(this,"otsSlider",this),l.control&&(r.append('<div class="'+l.controlsClass.substr(1)+'">'),t(l.controlsClass,r).append('<a href="javascript: void(0)" class="ots-slider-control prev">'+l.iconPrev+'</a><a href="javascript: void(0)" class="ots-slider-control next">'+l.iconNext+"</a>")),l.pagination&&function(){r.append('<div class="'+l.paginationClass.substr(1)+'">');let e="";for(let n=1;n<=f;n++)e=n===u+1?l.currentPageClass.substr(1):"",t(l.paginationClass,r).append('<a href="#" class="page-item '+e+'">'+n+"</a>")}(),d.each(function(){t(this).addClass(l.effect)}),v(),g(),C(),r.imagesLoaded(function(){r.fadeIn()}),r.hover(function(){l.autoplay&&l.stopHover&&clearInterval(o)},function(){C()}),r.on("click",".ots-slider-control.next",function(t){t.preventDefault(),h&&(m=u,++u>=p&&(u=0),g("next"),r.trigger("ots_slider_next",u,d,r))}),r.on("click",".ots-slider-control.prev",function(t){t.preventDefault(),h&&(m=u,--u<0&&(u=p-1),g("prev"),r.trigger("ots_slider_prev",u,d,r))}),r.on("click",".page-item",function(e){if(e.preventDefault(),h){let e=t(this).index();m=u,w(e),r.trigger("ots_slider_page",e,d,r)}})})}}(window.Zepto||window.jQuery,window,document),"function"!=typeof Object.create&&(Object.create=function(t){function e(){}return e.prototype=t,new e}),function(t,e,n,s){var i={whichTransition:function(){var t,e=n.createElement("fakeelement"),s={transition:"transitionend",OTransition:"oTransitionEnd",MozTransition:"transitionend",WebkitTransition:"webkitTransitionEnd"};for(t in s)if(void 0!==e.style[t])return s[t]},init:function(e,n){var s=this;s.options=t.extend({},t.fn.otsSlicker.options,e),s.$el=t(n),s.$items=t(s.options.itemClass,s.$el),s.itemWidth=0,s.total=s.$items.length,s.itemPerPage=s.options.items,s.heightContainer=0,s.endEffect=!0,setTimeout(function(){s.setItemPerPage(),s.buildControls(),s.buildSlider(),s.setDefaultState(),s.loadedSlider(),s.events()},10)},reInit:function(){this.heightContainer=0,this.$items=t(this.options.itemClass,this.$el),this.setItemPerPage(),this.buildSlider(),this.setDefaultState()},loadedSlider:function(){var t=this;t.$el.imagesLoaded(function(){t.$el.fadeIn()})},setItemPerPage:function(){var n=this;"object"==typeof n.options.responsive&&t.each(n.options.responsive,function(s,i){let a=parseInt(s);t(e).width()>=a&&(n.itemPerPage=parseInt(i.items))})},buildControls:function(){this.$el.append('<div class="'+this.options.controlClass.substr(1)+'"></div>'),t(this.options.controlClass).append('<a href="javascript: void(0)" class="ots-slick-control prev">'+this.options.iconPrev+'</a><a href="javascript: void(0)" class="ots-slick-control next">'+this.options.iconNext+"</a>")},buildSlider:function(){var e=this,n=e.$el.width()+2*e.options.margin,s=(n-e.options.margin*(e.itemPerPage+1))/e.itemPerPage;e.itemWidth=s,e.$el.imagesLoaded(function(){e.$items.each(function(i){var a=t(this);let o=s*i+e.options.margin*(i+1);a.css({width:s,"-webkit-transform":"translate("+o+"px, 0px)","-o-transform":"translate("+o+"px, 0px)",transform:"translate("+o+"px, 0px)",opacity:"","-webkit-transition-duration":"","-o-transition-duration":"","transition-duration":"","-webkit-transition-delay":"","-o-transition-delay":"","transition-delay":""});let r=a.height();r>e.heightContainer&&(e.heightContainer=r),t(e.options.containerClass,e.$el).css({height:e.heightContainer,width:n,"margin-left":-1*e.options.margin,"margin-right":-1*e.options.margin})})})},setDefaultState:function(){for(let t=0;t<this.itemPerPage;t++)this.$items.eq(t).addClass(this.options.currentClass.substr(1))},next:function(){var e=this;e.endEffect=!1;let n=.1;t(".item.is-showing",e.options.containerClass).each(function(s){var i=t(this);let a=e.itemWidth*(s+e.itemPerPage)+e.options.margin*(s+e.itemPerPage+1);i.clone().removeClass(e.options.currentClass.substr(1)).css({"-webkit-transform":"translate("+a+"px, 0px)","-o-transform":"translate("+a+"px, 0px)",transform:"translate("+a+"px, 0px)"}).appendTo(e.options.containerClass),n+=.1;let o=e.$el.outerWidth();i.css({transform:"translate("+(e.itemWidth-o)+"px, 0px)","-webkit-transform":"translate("+(e.itemWidth-o)+"px, 0px)","-o-transform":"translate("+(e.itemWidth-o)+"px, 0px)","transition-delay":n+"s","-webkit-transition-delay":n+"s","-o-transition-delay":n+"s",opacity:0}),i.one(e.whichTransition(),function(){i.remove()})}),n=.5,t(".item:not(.is-showing)",e.options.containerClass).each(function(s){var i=t(this);if(s+1>e.itemPerPage){let t=e.itemWidth*s+e.options.margin*(s+1);i.css({transform:"translate("+t+"px, 0px)","-webkit-transform":"translate("+t+"px, 0px)","-o-transform":"translate("+t+"px, 0px)","-webkit-transition-duration":"0s","-o-transition-duration":"0s","transition-duration":"0s","-webkit-transition-delay":"0s","-o-transition-delay":"0s","transition-delay":"0s",opacity:0})}else{let t=e.itemWidth*s+e.options.margin*(s+1);s+1<=e.itemPerPage&&(n+=.1,i.css({transform:"translate("+t+"px, 0px)","-webkit-transform":"translate("+t+"px, 0px)","-o-transform":"translate("+t+"px, 0px)","transition-delay":n+"s","-webkit-transition-delay":n+"s","-o-transition-delay":n+"s","-webkit-transition-duration":"0.8s","-o-transition-duration":"0.8s","transition-duration":"0.8s",opacity:1}),i.addClass(e.options.currentClass.substr(1)))}s===e.itemPerPage-1&&i.one(e.whichTransition(),function(){e.endEffect=!0})})},prev:function(){var e=this;e.endEffect=!1;let n=.1;var s=t(".item.is-showing",e.options.containerClass).length;t(".item.is-showing",e.options.containerClass).each(function(i){var a=t(this);let o=e.itemWidth*(i+e.itemPerPage)+e.options.margin*(i+e.itemPerPage+1);a.clone().removeClass(e.options.currentClass.substr(1)).css({transform:"translate("+o+"px, 0px)"}).appendTo(e.options.containerClass);let r=e.$el.outerWidth();a.css({transform:"translate("+(e.itemWidth+r)+"px, 0px)","-webkit-transform":"translate("+(e.itemWidth+r)+"px, 0px)","-o-transform":"translate("+(e.itemWidth+r)+"px, 0px)","-webkit-transition-duration":"0.8s","-o-transition-duration":"0.8s","transition-duration":"0.8s","transition-delay":(s-i)*n+"s","-webkit-transition-delay":(s-i)*n+"s","-o-transition-delay":(s-i)*n+"s",opacity:0}),a.one(e.whichTransition(),function(){a.remove()})}),n=.5,t(".item:not(.is-showing)",e.options.containerClass).each(function(s){var i=t(this);if(s+1>e.itemPerPage){let t=e.itemWidth*s+e.options.margin*(s+1);i.css({transform:"translate("+t+"px, 0px)","-webkit-transform":"translate("+t+"px, 0px)","-o-transform":"translate("+t+"px, 0px)","-webkit-transition-duration":"0s","-o-transition-duration":"0s","transition-duration":"0s","-webkit-transition-delay":"0s","-o-transition-delay":"0s","transition-delay":"0s",opacity:0})}else{let t=-((e.itemPerPage-s)*e.itemWidth+(e.itemPerPage-s)*e.options.margin);i.css({transform:"translate("+t+"px, 0px)","-webkit-transform":"translate("+t+"px, 0px)","-o-transform":"translate("+t+"px, 0px)","-webkit-transition-duration":"0s","-o-transition-duration":"0s","transition-duration":"0s"}),t=e.itemWidth*s+e.options.margin*(s+1);let a=Math.round(.1*(e.itemPerPage-(s+1))*100)/100+n;setTimeout(function(){i.css({"-webkit-transform":"translate("+t+"px,0px)","-o-transform":"translate("+t+"px,0px)",transform:"translate("+t+"px,0px)","-webkit-transition-duration":"0.8s","-o-transition-duration":"0.8s","transition-duration":"0.8s","-webkit-transition-delay":a+"s","-o-transition-delay":a+"s","transition-delay":a+"s",opacity:1}),i.addClass(e.options.currentClass.substr(1))},50)}0===s&&i.one(e.whichTransition(),function(){e.endEffect=!0})})},events:function(){var n=this;n.$el.on("click","a.next",function(t){t.preventDefault(),n.endEffect&&n.next()}),n.$el.on("click","a.prev",function(t){t.preventDefault(),n.endEffect&&n.prev()}),t(e).on("resize",function(){n.reInit()})}};t.fn.otsSlicker=function(e){return this.each(function(){var n=Object.create(i);n.init(e,this),t.data(this,"otsSlicker",n)})},t.fn.otsSlicker.options={items:5,margin:20,currentClass:".is-showing",containerClass:".ots-slick",itemClass:".item",controlClass:".ots-slick-controls",paginationClass:".ots-slick-navs",iconNext:'<svg stroke="#FFFFFF" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"                 viewBox="0 0 32.635 32.635" style="enable-background:new 0 0 32.635 32.635;" xml:space="preserve">            <g>                <path d="M32.135,16.817H0.5c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h31.635c0.276,0,0.5,0.224,0.5,0.5                    S32.411,16.817,32.135,16.817z"/>                <path d="M19.598,29.353c-0.128,0-0.256-0.049-0.354-0.146c-0.195-0.195-0.195-0.512,0-0.707l12.184-12.184L19.244,4.136                    c-0.195-0.195-0.195-0.512,0-0.707s0.512-0.195,0.707,0l12.537,12.533c0.094,0.094,0.146,0.221,0.146,0.354                    s-0.053,0.26-0.146,0.354L19.951,29.206C19.854,29.304,19.726,29.353,19.598,29.353z"/>            </g>            </svg>',iconPrev:'<svg stroke="#FFFFFF" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px"                 y="0px"                 viewBox="0 0 32.635 32.635" style="enable-background:new 0 0 32.635 32.635;" xml:space="preserve">            <g>                <path d="M32.135,16.817H0.5c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h31.635c0.276,0,0.5,0.224,0.5,0.5                    S32.411,16.817,32.135,16.817z"/>                <path d="M13.037,29.353c-0.128,0-0.256-0.049-0.354-0.146L0.146,16.669C0.053,16.575,0,16.448,0,16.315s0.053-0.26,0.146-0.354                    L12.684,3.429c0.195-0.195,0.512-0.195,0.707,0s0.195,0.512,0,0.707L1.207,16.315l12.184,12.184c0.195,0.195,0.195,0.512,0,0.707                    C13.293,29.304,13.165,29.353,13.037,29.353z"/>            </g>            </svg>',responsive:{0:{items:1},768:{items:3},1200:{items:5}}}}(window.Zepto||window.jQuery,window,document);