import{d,i as _,a as p,u,b as h,c as m,e as f,f as n,g as t,t as s,h as a,F as g,r as v,n as x,j as y,o as r,k as b,l as N,m as k,p as P,q as j,_ as w}from"./index-18e7bab9.js";import{N as S}from"./NoteDisplay-52b66a66.js";const V={class:"m-4"},C={class:"mb-10"},L={class:"text-4xl font-bold mt-2"},M={class:"opacity-50"},T={class:"text-lg"},B={class:"font-bold flex gap-2"},D={class:"opacity-50"},H=t("div",{class:"flex-auto"},null,-1),z={key:0,class:"border-gray-400/50 mb-8"},F=d({__name:"PresenterPrint",setup(q){_(p),u(`
@page {
  size: A4;
  margin-top: 1.5cm;
  margin-bottom: 1cm;
}
* {
  -webkit-print-color-adjust: exact;
}
html,
html body,
html #app,
html #page-root {
  height: auto;
  overflow: auto !important;
}
`),h({title:`Notes - ${m.title}`});const l=f(()=>y.map(o=>{var i;return(i=o.meta)==null?void 0:i.slide}).filter(o=>o!==void 0&&o.noteHTML!==""));return(o,i)=>(r(),n("div",{id:"page-root",style:x(a(j))},[t("div",V,[t("div",C,[t("h1",L,s(a(m).title),1),t("div",M,s(new Date().toLocaleString()),1)]),(r(!0),n(g,null,v(a(l),(e,c)=>(r(),n("div",{key:c,class:"flex flex-col gap-4 break-inside-avoid-page"},[t("div",null,[t("h2",T,[t("div",B,[t("div",D,s(e==null?void 0:e.no)+"/"+s(a(b)),1),N(" "+s(e==null?void 0:e.title)+" ",1),H])]),k(S,{"note-html":e.noteHTML,class:"max-w-full"},null,8,["note-html"])]),c<a(l).length-1?(r(),n("hr",z)):P("v-if",!0)]))),128))])],4))}}),J=w(F,[["__file","/media/emad/Media/Projects/MyCodingJourney/resources/presentations/presentation-01/node_modules/@slidev/client/internals/PresenterPrint.vue"]]);export{J as default};
