(function(e){function t(t){for(var i,r,l=t[0],o=t[1],h=t[2],c=0,p=[];c<l.length;c++)r=l[c],Object.prototype.hasOwnProperty.call(n,r)&&n[r]&&p.push(n[r][0]),n[r]=0;for(i in o)Object.prototype.hasOwnProperty.call(o,i)&&(e[i]=o[i]);d&&d(t);while(p.length)p.shift()();return a.push.apply(a,h||[]),s()}function s(){for(var e,t=0;t<a.length;t++){for(var s=a[t],i=!0,l=1;l<s.length;l++){var o=s[l];0!==n[o]&&(i=!1)}i&&(a.splice(t--,1),e=r(r.s=s[0]))}return e}var i={},n={app:0},a=[];function r(t){if(i[t])return i[t].exports;var s=i[t]={i:t,l:!1,exports:{}};return e[t].call(s.exports,s,s.exports,r),s.l=!0,s.exports}r.m=e,r.c=i,r.d=function(e,t,s){r.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:s})},r.r=function(e){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},r.t=function(e,t){if(1&t&&(e=r(e)),8&t)return e;if(4&t&&"object"===typeof e&&e&&e.__esModule)return e;var s=Object.create(null);if(r.r(s),Object.defineProperty(s,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var i in e)r.d(s,i,function(t){return e[t]}.bind(null,i));return s},r.n=function(e){var t=e&&e.__esModule?function(){return e["default"]}:function(){return e};return r.d(t,"a",t),t},r.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},r.p="/";var l=window["webpackJsonp"]=window["webpackJsonp"]||[],o=l.push.bind(l);l.push=t,l=l.slice();for(var h=0;h<l.length;h++)t(l[h]);var d=o;a.push([0,"chunk-vendors"]),s()})({0:function(e,t,s){e.exports=s("56d7")},"56d7":function(e,t,s){"use strict";s.r(t);var i=s("75fc"),n=(s("c5f6"),s("cadf"),s("551c"),s("f751"),s("097d"),s("a026")),a=s("bc3a"),r=s.n(a),l=s("85fe"),o="https://getty.datta.store";n["a"].config.productionTip=!0,n["a"].use(l["a"]),n["a"].component("istock-list",{props:["dataapi","items","offset","spanclass","liclass","ulclass","type","func","loc","widthimg","columngap","searchurl","relateds"],data:function(){return{itemsResize:null,itemsShow:null,styleWrapper:null,buttonSize:null,buttonHeightSize:null}},created:function(){this.$parent.itemsAPI+=this.items,this.styleWrapper={gridTemplateColumns:"repeat(auto-fill, minmax(".concat(this.widthimg,"px, 1fr))"),gridColumnGap:"".concat(this.columngap,"px")}},mounted:function(){this.getWidthAndHeight(),"block"==this.type?(this.itemsResize=this.items,window.addEventListener("resize",this.getWidthAndHeight)):(this.styleWrapper.height="".concat(this.widthimg,"px"),this.itemsResize=Math.floor(this.$el.clientWidth/this.widthimg),window.addEventListener("resize",this.itemsResizeFunc))},computed:{styleMore:function(){return{background:"#00000099",position:"absolute",width:this.buttonWidthSize+"px",height:this.buttonHeightSize+"px",top:"0",zIndex:1,justifyContent:"center",alignItems:"center",display:"flex",fontWeight:"700",borderRadius:"7px",right:0}}},methods:{itemsResizeFunc:function(){this.widthImage=document.getElementsByClassName("getty-img")[0].offsetWidth,this.itemsResize=Math.floor(this.$el.clientWidth/this.widthimg)},getWidthAndHeight:function(){this.buttonWidthSize=document.querySelector(".thumbnail-grid li:nth-child(1)").clientWidth,this.buttonHeightSize=document.querySelector(".thumbnail-grid li:nth-child(1)").clientHeight,document.getElementById("view-more-istock").style.width=this.buttonWidthSize+"px",document.getElementById("view-more-istock").style.height=this.buttonHeightSize+"px"}},template:'\n    <div>\n      <ul :style="this.styleWrapper" :class="ulclass">\n        <li v-for="item in this.dataapi.slice(offset,(this.offset + this.itemsResize))" :class="liclass" >\n          <a :href="item.dest[0]+\'&subId2=\'+func+\'&subId3=\'+loc" rel="sponsored" target="_blank">\n            <span :class="spanclass">\n              <img :src="item.images[0]" :style="{ height: widthimg + \'px\'}" :alt="item.title" />\n            </span>\n          </a>\n        </li>\n        <li  :class="liclass" v-show="searchurl != undefined">\n          <a :href="searchurl" rel="sponsored" target="_blank">\n            <span :class="[spanclass]">\n              <span :style="styleMore" id="view-more-istock" >\n                <p style="color:#ffffff; font-size: 1.5em">View More</p>\n              </span>\n            </span>\n          </a>\n        </li>\n      </ul>\n      <div v-if="relateds && relateds.length">\n        <p style="margin: 5px 0">Related Searches from iStock: <span v-for="(keyword, index) in relateds.slice(0, 11)" ><a target="_blank" :href="keyword.url" rel="sponsored" >{{keyword.phrase}}</a><span v-if="index != (relateds.slice(0, 11).length - 1)">, </span></span></p>\n      </div>\n    </div>\n    '}),n["a"].component("istock-ajax",{props:["dataapi","items","offset","spanclass","liclass","func","loc","widthimg","columngap"],data:function(){return{styleWrapper:null}},created:function(){this.styleWrapper={gridTemplateColumns:"repeat(auto-fill, minmax(".concat(this.widthimg,"px, 1fr))"),gridColumnGap:"".concat(this.columngap,"px")}},mounted:function(){},template:'<ul :style="this.styleWrapper"><li v-if="index > offset - 1" v-for="(item, index) in this.dataapi" :class="liclass" ><a  :href="item.dest[0]+\'&subId2=\'+func+\'&subId3=\'+loc" rel="sponsored" target="_blank"><span :class="spanclass"><img :src="item.images[0]" :style="{ height: widthimg + \'px\'}" :alt="item.title" /></span></a></li></ul>'}),n["a"].component("istock-component",{props:["dataapi","items","offset","spanclass","liclass","ulclass","type","func","loc","widthimg","responsive","relateds"],data:function(){return{itemsResize:null,itemsShow:null,styleWrapper:null,responsiveItems:null}},created:function(){this.$parent.itemsAPI+=this.items},mounted:function(){"block"==this.type?this.itemsResize=this.items:"responsive"==this.type?(this.itemsResponsive(),window.addEventListener("resize",this.itemsResponsive)):(this.styleWrapper.height="".concat(this.widthimg,"px"),this.itemsResize=Math.floor(this.$el.clientWidth/this.widthimg),window.addEventListener("resize",this.itemsResizeFunc))},methods:{itemsResizeFunc:function(){this.itemsResize=this.itemsResponsive()},itemsResponsive:function(){this.responsiveItems=JSON.parse(this.responsive),window.innerWidth<480?this.itemsResize=this.responsiveItems[0]:window.innerWidth<767?this.itemsResize=this.responsiveItems[1]:window.innerWidth<960?this.itemsResize=this.responsiveItems[2]:window.innerWidth<1024?this.itemsResize=this.responsiveItems[3]:window.innerWidth<1366?this.itemsResize=this.responsiveItems[4]:this.itemsResize=this.responsive[5]}},template:'\n  <div>\n    <ul :class="ulclass">\n      <li v-for="item in this.dataapi.slice(offset,(this.offset + this.itemsResize))" :class="liclass" >\n        <a :href="item.dest[0]+\'&subId2=\'+func+\'&subId3=\'+loc" rel="sponsored" target="_blank">\n          <span :class="spanclass">\n            <img :src="item.images[0]" :alt="item.title" class="embed-responsive-item shimmer-background"/>\n          </span>\n        </a>\n      </li>\n    </ul>\n    <div v-if="relateds && relateds.length">\n        <p style="margin: 5px 0">Related Searches from iStock: <span v-for="(keyword, index) in relateds.slice(0, 11)" ><a target="_blank" :href="keyword.url" rel="sponsored" >{{keyword.phrase}}</a><span v-if="index != (relateds.slice(0, 11).length - 1)">, </span></span></p>\n    </div>\n  </div>  \n    '}),n["a"].component("istock-component-button",{props:["dataapi","items","offset","spanclass","liclass","ulclass","type","func","loc","widthimg","responsive","searchurl","relateds"],data:function(){return{itemsResize:null,itemsShow:null,styleWrapper:null,responsiveItems:null}},computed:{itemsLength:function(){return this.dataapi.slice(this.offset,this.offset+this.itemsResize).length},styleMore:function(){return{background:"#00000099",position:"absolute",width:"100%",height:"100%",top:"0",zIndex:1,justifyContent:"center",alignItems:"center",display:"flex",fontWeight:"700"}}},created:function(){this.$parent.itemsAPI+=this.items},mounted:function(){"block"==this.type?this.itemsResize=this.items:"responsive"==this.type?(this.itemsResponsive(),window.addEventListener("resize",this.itemsResponsive)):(this.styleWrapper.height="".concat(this.widthimg,"px"),this.itemsResize=Math.floor(this.$el.clientWidth/this.widthimg),window.addEventListener("resize",this.itemsResizeFunc))},methods:{itemsResizeFunc:function(){this.itemsResize=this.itemsResponsive()},itemsResponsive:function(){this.responsiveItems=JSON.parse(this.responsive),window.innerWidth<480?this.itemsResize=this.responsiveItems[0]:window.innerWidth<767?this.itemsResize=this.responsiveItems[1]:window.innerWidth<960?this.itemsResize=this.responsiveItems[2]:window.innerWidth<1024?this.itemsResize=this.responsiveItems[3]:window.innerWidth<1366?this.itemsResize=this.responsiveItems[4]:this.itemsResize=this.responsive[5]}},template:'\n  <div>\n    <ul :class="ulclass">\n      <li v-for="(item, index) in this.dataapi.slice(offset,(this.offset + this.itemsResize))" :class="liclass" >\n        <a v-if="(index != itemsLength - 1) " :href="item.dest[0]+\'&subId2=\'+func+\'&subId3=\'+loc" rel="sponsored" target="_blank">\n          <span :class="[spanclass]" >\n            <img :src="item.images[0]" :alt="item.title" class="embed-responsive-item shimmer-background"/>\n          </span>\n        </a>\n        <a :href="searchurl" rel="sponsored" target="_blank" v-else style="position: relative">\n            <span :class="[spanclass]">\n              <span :style="styleMore">\n                <p style="color:#ffffff; font-size: 1.5em">View More</p>\n              </span>\n              <img :src="item.images[0]" :alt="item.title" class="embed-responsive-item shimmer-background"/>\n            </span>\n        </a>\n      </li>\n    </ul>\n    <div v-if="relateds && relateds.length">\n        <p style="margin: 5px 0">Related Searches from iStock: <span v-for="(keyword, index) in relateds.slice(0, 11)" ><a target="_blank" :href="keyword.url" rel="sponsored" >{{keyword.phrase}}</a><span v-if="index != (relateds.slice(0, 11).length - 1)">, </span></span></p>\n    </div>\n  </div>\n  '}),new n["a"]({el:"#app",data:function(){return{data:[],itemsAPI:0,loading:!0,startPage:Number,view:"",searchUrl:"",relatedsSearches:[]}},mounted:function(){var e=this;this.startPage=this.$el.dataset.page?this.$el.dataset.page:1,this.startPage=Number(this.startPage),this.view=this.$el.dataset.view;for(var t=this.$el.dataset.style?this.$el.dataset.style:"vector",s=Math.ceil(this.itemsAPI/30),n=this.startPage;n<this.startPage+s;n++)this.fetchApi(this.$el.dataset.keyword,n,t).then((function(t){var s;return(s=e.data).push.apply(s,Object(i["a"])(t))}))},methods:{fetchApi:function(e){var t=this,s=arguments.length>1&&void 0!==arguments[1]?arguments[1]:1,i=arguments.length>2&&void 0!==arguments[2]?arguments[2]:"vector",n="";return n=""!==this.view&&this.view?"".concat(o,"/api/v1/view/").concat(this.view,"/").concat(s):"".concat(o,"/api/v1/search/").concat(e,"/").concat(s),r.a.get(n,{params:{styles:i}}).then((function(e){return t.searchUrl=e.data.data.search_url,t.relatedsSearches=e.data.data.related_searches,e.data.data.results})).finally((function(){t.loading=!1}))},visibilityChanged:function(e,t){var s=this;t.isIntersecting&&e&&this.fetchApi(this.$el.dataset.keyword,this.loadPage++).then((function(e){var t;return(t=s.data).push.apply(t,Object(i["a"])(e))}))}}})}});