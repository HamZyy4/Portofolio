(()=>{
const root=document.documentElement;root.classList.add('js');
const $=(s,r=document)=>r.querySelector(s),$$=(s,r=document)=>[...r.querySelectorAll(s)];
/* mobile menu */
const menu=$('#mobileMenu'),mt=$('#menuToggle');
mt?.addEventListener('click',()=>{const closed=menu.classList.toggle('hidden');mt.setAttribute('aria-expanded',String(!closed));mt.textContent=closed?'Menu':'Close'});
$$('a',menu).forEach(a=>a.addEventListener('click',()=>{menu.classList.add('hidden');mt.textContent='Menu';mt.setAttribute('aria-expanded','false')}));
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

/* =====================================
   STACK FILTER - SMOOTH TRANSITION
===================================== */

const cards = $$('.tech-card');
const filters = $$('.filter');

let filterTimer = null;
let filterVersion = 0;

filters.forEach(button => {
    button.addEventListener('click', () => {

        const category = button.dataset.cat;
        const version = ++filterVersion;

        clearTimeout(filterTimer);

        filters.forEach(item => {
            const active = item === button;

            item.classList.toggle('on', active);
            item.setAttribute('aria-selected', String(active));
        });

        cards.forEach(card => {
            card.classList.add('out');
        });

        filterTimer = setTimeout(() => {

            if (version !== filterVersion) return;

            cards.forEach(card => {
                const shouldHide =
                    category !== 'all' &&
                    card.dataset.cat !== category;

                card.classList.toggle('hide', shouldHide);
            });

            requestAnimationFrame(() => {

                if (version !== filterVersion) return;

                cards.forEach(card => {
                    card.classList.remove('out');
                });

            });

        }, 220);

    });
});
/* =====================================
   HERO IMAGE LOADER
===================================== */

const heroImage = $('#heroBackground');

if (heroImage) {
    const showHero = () => {
        heroImage.classList.add('is-loaded');
    };

    const loadHero = async () => {
        try {
            if (heroImage.decode) {
                await heroImage.decode();
            }
        } catch (error) {
            // Image may already be decoded by the browser.
        }

        if (heroImage.naturalWidth > 0) {
            requestAnimationFrame(showHero);
        }
    };

    if (heroImage.complete) {
        loadHero();
    } else {
        heroImage.addEventListener('load', loadHero, {
            once: true
        });

        heroImage.addEventListener('error', () => {
            heroImage.classList.remove('is-loaded');
        }, {
            once: true
        });
    }
}

/* =====================================
   SPOTLIGHT - RAF OPTIMIZED
===================================== */

if (matchMedia('(hover:hover) and (pointer:fine)').matches) {

    $$('.spot').forEach(el => {

        let frame = null;
        let latestX = 0;
        let latestY = 0;

        el.addEventListener('pointermove', e => {

            const rect = el.getBoundingClientRect();

            latestX = e.clientX - rect.left;
            latestY = e.clientY - rect.top;

            if (frame) return;

            frame = requestAnimationFrame(() => {

                el.style.setProperty('--mx', `${latestX}px`);
                el.style.setProperty('--my', `${latestY}px`);

                frame = null;

            });

        }, { passive: true });

        el.addEventListener('pointerleave', () => {
            if (frame) {
                cancelAnimationFrame(frame);
                frame = null;
            }
        });

    });

}
const copyMail = document.querySelector('#copyMail');

if (copyMail) {
    copyMail.addEventListener('click', async () => {
        try {
            await navigator.clipboard.writeText(
                'ilhamarten07@gmail.com'
            );

            const original = copyMail.textContent;

            copyMail.textContent =
                document.documentElement.lang === 'id'
                    ? 'Email berhasil disalin'
                    : 'Email copied successfully';

            setTimeout(() => {
                copyMail.textContent = original;
            }, 1800);

        } catch (error) {
            window.location.href =
                'mailto:ilhamarten07@gmail.com';
        }
    });
}
})();