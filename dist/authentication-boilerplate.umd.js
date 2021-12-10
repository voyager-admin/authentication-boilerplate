(function(e,o){typeof exports=="object"&&typeof module!="undefined"?o(require("vue")):typeof define=="function"&&define.amd?define(["vue"],o):(e=typeof globalThis!="undefined"?globalThis:e||self,o(e.Vue))})(this,function(e){"use strict";var o=(t,a)=>{for(const[s,l]of a)t[s]=l;return t};const n={props:{errors:Array,data:Object}},d={class:"w-full mt-1"},i={for:"email",class:"label"},r={class:"mt-1 rounded-md shadow-sm"},c=["value","autofocus"],m={class:"w-full mt-6"},_={for:"password",class:"label"},u={class:"mt-1 rounded-md shadow-sm"},f=["value"],p={class:"w-full flex justify-between mt-4"},h={class:"select-none"},y=["checked"],b={for:"remember",class:"text-sm leading-8 mx-1"},w={class:"flex items-center justify-between mt-4"},g={class:"button large accent w-full justify-center",type:"submit"};function V(t,a,s,l,N,k){return e.openBlock(),e.createElementBlock("div",null,[e.createElementVNode("div",d,[e.createElementVNode("label",i,e.toDisplayString(t.__("voyager::auth.email")),1),e.createElementVNode("div",r,[e.createElementVNode("input",{type:"email",name:"email",id:"email",class:"input w-full mb-4 placeholder-gray-400",value:s.data.email,autofocus:!t.otpRequested},null,8,c)])]),e.createElementVNode("div",m,[e.createElementVNode("label",_,e.toDisplayString(t.__("voyager::auth.password")),1),e.createElementVNode("div",u,[e.createElementVNode("input",{type:"password",name:"password",id:"password",class:"input w-full mb-3 placeholder-gray-400",value:s.data.password},null,8,f)])]),e.createElementVNode("div",p,[e.createElementVNode("div",h,[e.createElementVNode("input",{type:"checkbox",class:"input",name:"remember",id:"remember",checked:s.data.remember=="on"||!1},null,8,y),e.createElementVNode("label",b,e.toDisplayString(t.__("voyager::auth.remember_me")),1)])]),e.createElementVNode("div",w,[e.createElementVNode("button",g,e.toDisplayString(t.__("voyager::auth.login")),1)])])}var E=o(n,[["render",V]]);voyager.component("authentication-login",E)});