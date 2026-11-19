(()=>{
const root=document.documentElement;root.classList.add('js');
const $=(s,r=document)=>r.querySelector(s),$$=(s,r=document)=>[...r.querySelectorAll(s)];

/* mobile menu */
const menu=$('#mobileMenu'),mt=$('#menuToggle');
mt?.addEventListener('click',()=>{const closed=menu.classList.toggle('hidden');mt.setAttribute('aria-expanded',String(!closed));mt.textContent=closed?'Menu':'Close'});
$$('a',menu).forEach(a=>a.addEventListener('click',()=>{menu.classList.add('hidden');mt.textContent='Menu'}));
$('#year').textContent=new Date().getFullYear();

/* language (EN / ID) */
let lang='en';try{lang=localStorage.getItem('lang')||((navigator.language||'').toLowerCase().startsWith('id')?'id':'en')}catch(e){}
const roles={en:['Website Developer','Roblox Map Developer','Luau Executor Developer'],id:['Developer Website','Developer Map Roblox','Developer Executor Luau']};
const tw=$('#typed');let tTimer,ri=0,ci=0,del=false;
function tick(){const list=roles[lang],w=list[ri%list.length];ci+=del?-1:1;tw.textContent=w.slice(0,ci);let t=del?32:70;if(!del&&ci===w.length){del=true;t=1800}else if(del&&ci===0){del=false;ri++;t=350}tTimer=setTimeout(tick,t)}
function startTyping(){clearTimeout(tTimer);ri=0;ci=0;del=false;if(tw)tick()}
function applyLang(){root.lang=lang;$$('[data-en][data-id]').forEach(el=>{el.textContent=el.dataset[lang]});$$('.lang-label').forEach(b=>b.textContent=lang==='en'?'EN · ID':'ID · EN');startTyping();try{localStorage.setItem('lang',lang)}catch(e){}}
$$('.lang-btn').forEach(b=>b.addEventListener('click',()=>{lang=lang==='en'?'id':'en';applyLang()}));
applyLang();

/* scroll: progress bar + active nav (rAF-throttled) */
const bar=$('#progress'),links=$$('.nav-link'),secs=links.map(l=>$(l.getAttribute('href')));
let ticking=false;
function onScroll(){ticking=false;const h=root,max=h.scrollHeight-h.clientHeight;bar.style.transform='scaleX('+(max>0?h.scrollTop/max:0)+')';let cur=-1;secs.forEach((s,i)=>{if(s&&s.getBoundingClientRect().top<innerHeight*.4)cur=i});links.forEach((l,i)=>l.classList.toggle('active',i===cur))}
addEventListener('scroll',()=>{if(!ticking){ticking=true;requestAnimationFrame(onScroll)}},{passive:true});onScroll();

/* reveal on scroll */
const io=new IntersectionObserver(es=>es.forEach(e=>{if(e.isIntersecting){e.target.classList.add('in');io.unobserve(e.target)}}),{threshold:.1,rootMargin:'0px 0px -6% 0px'});
$$('.reveal').forEach(el=>io.observe(el));

/* pause marquees when off-screen or tab hidden (saves CPU/battery) */
const mio=new IntersectionObserver(es=>es.forEach(e=>e.target.classList.toggle('paused',!e.isIntersecting)),{rootMargin:'100px'});
$$('.marquee,.run').forEach(el=>mio.observe(el));
document.addEventListener('visibilitychange',()=>root.classList.toggle('tab-hidden',document.hidden));

/* stack filter with soft fade */
const cards=$$('.tech-card');
$$('.filter').forEach(b=>b.addEventListener('click',()=>{
  $$('.filter').forEach(x=>x.classList.remove('on'));b.classList.add('on');const c=b.dataset.cat;
  cards.forEach(card=>card.classList.add('out'));
  setTimeout(()=>{cards.forEach(card=>{card.classList.toggle('hide',c!=='all'&&card.dataset.cat!==c)});requestAnimationFrame(()=>cards.forEach(card=>card.classList.remove('out')))},180)}));

/* spotlight (pointer devices only) */
if(matchMedia('(hover:hover)').matches){$$('.spot').forEach(el=>el.addEventListener('pointermove',e=>{const r=el.getBoundingClientRect();el.style.setProperty('--mx',(e.clientX-r.left)+'px');el.style.setProperty('--my',(e.clientY-r.top)+'px')},{passive:true}))}

/* copy email */
$('#copyMail')?.addEventListener('click',async e=>{const b=e.currentTarget,o=b.textContent;try{await navigator.clipboard.writeText('ilhamarten07@gmail.com');b.textContent=lang==='en'?'Copied':'Tersalin';setTimeout(()=>{b.textContent=o},1600)}catch(_){}});
})();
