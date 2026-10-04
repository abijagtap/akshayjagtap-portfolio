document.addEventListener('DOMContentLoaded',()=>{
 const menuButton=document.querySelector('[data-menu-button]'),mobileMenu=document.querySelector('[data-mobile-menu]');
 if(menuButton&&mobileMenu)menuButton.addEventListener('click',()=>{mobileMenu.classList.toggle('open');menuButton.setAttribute('aria-expanded',mobileMenu.classList.contains('open'))});
 document.querySelectorAll('[data-mobile-link]').forEach(l=>l.addEventListener('click',()=>mobileMenu?.classList.remove('open')));
 const observer=new IntersectionObserver(entries=>entries.forEach(e=>{if(e.isIntersecting){e.target.classList.add('is-visible');observer.unobserve(e.target)}}),{threshold:.1});
 document.querySelectorAll('.reveal').forEach(el=>observer.observe(el));
 const path=location.pathname.split('/').pop()||'index.html';document.querySelectorAll('.nav-link').forEach(a=>{if(a.getAttribute('href')===path)a.classList.add('active')});
 const dot=document.querySelector('.cursor-dot'),ring=document.querySelector('.cursor-ring');
 if(dot&&ring&&matchMedia('(pointer:fine)').matches){let mx=innerWidth/2,my=innerHeight/2,dx=mx,dy=my,rx=mx,ry=my;addEventListener('mousemove',e=>{mx=e.clientX;my=e.clientY});const tick=()=>{dx+=(mx-dx)*.3;dy+=(my-dy)*.3;rx+=(mx-rx)*.1;ry+=(my-ry)*.1;dot.style.left=dx+'px';dot.style.top=dy+'px';ring.style.left=rx+'px';ring.style.top=ry+'px';requestAnimationFrame(tick)};tick();document.querySelectorAll('a,button').forEach(el=>{el.addEventListener('mouseenter',()=>ring.classList.add('hover'));el.addEventListener('mouseleave',()=>ring.classList.remove('hover'))})}
 document.querySelectorAll('[data-year]').forEach(el=>el.textContent=new Date().getFullYear());
 document.querySelectorAll('[data-month]').forEach(el => { el.textContent = new Date().toLocaleString('default', { month: 'long' }); });

});
