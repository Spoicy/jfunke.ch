(()=>{var e,t={80:(e,t,r)=>{r(392)},392:()=>{function e(e){console.log("test");var t=e[0].target.clientWidth,r=e[0].target.childNodes[1],o=r.clientHeight,n=r.clientWidth;r.classList.contains("center-y")&&o<250?(r.classList.remove("center-y"),r.classList.add("center-x"),console.log("updated to x")):r.classList.contains("center-x")&&n<t&&(r.classList.remove("center-x"),r.classList.add("center-y"),console.log("updated to y"))}document.querySelectorAll(".overflow-hidden").forEach((function(t){new ResizeObserver(e).observe(t),console.log("item added")}))},425:()=>{}},r={};function o(e){var n=r[e];if(void 0!==n)return n.exports;var s=r[e]={exports:{}};return t[e](s,s.exports,o),s.exports}o.m=t,e=[],o.O=(t,r,n,s)=>{if(!r){var c=1/0;for(d=0;d<e.length;d++){for(var[r,n,s]=e[d],i=!0,l=0;l<r.length;l++)(!1&s||c>=s)&&Object.keys(o.O).every((e=>o.O[e](r[l])))?r.splice(l--,1):(i=!1,s<c&&(c=s));if(i){e.splice(d--,1);var a=n();void 0!==a&&(t=a)}}return t}s=s||0;for(var d=e.length;d>0&&e[d-1][2]>s;d--)e[d]=e[d-1];e[d]=[r,n,s]},o.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={773:0,170:0};o.O.j=t=>0===e[t];var t=(t,r)=>{var n,s,[c,i,l]=r,a=0;if(c.some((t=>0!==e[t]))){for(n in i)o.o(i,n)&&(o.m[n]=i[n]);if(l)var d=l(o)}for(t&&t(r);a<c.length;a++)s=c[a],o.o(e,s)&&e[s]&&e[s][0](),e[s]=0;return o.O(d)},r=self.webpackChunk=self.webpackChunk||[];r.forEach(t.bind(null,0)),r.push=t.bind(null,r.push.bind(r))})(),o.O(void 0,[170],(()=>o(80)));var n=o.O(void 0,[170],(()=>o(425)));n=o.O(n)})();