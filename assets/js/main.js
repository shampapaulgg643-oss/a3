(function(){
  var b=document.querySelector('.burger'),s=document.querySelector('.side');
  if(b&&s){b.addEventListener('click',function(){var o=s.classList.toggle('open');b.setAttribute('aria-expanded',o?'true':'false');document.body.classList.toggle('lock',o);});
    s.querySelectorAll('a').forEach(function(a){a.addEventListener('click',function(){s.classList.remove('open');document.body.classList.remove('lock');b.setAttribute('aria-expanded','false');});});}
  // Speak example words with the browser's built-in speech engine (if available)
  function say(t){try{if(!('speechSynthesis' in window))return false;speechSynthesis.cancel();var u=new SpeechSynthesisUtterance(t);u.lang='en-US';u.rate=.8;speechSynthesis.speak(u);return true;}catch(e){return false;}}
  var info=document.getElementById('sym-info');
  document.querySelectorAll('[data-sym]').forEach(function(btn){
    btn.addEventListener('click',function(){
      document.querySelectorAll('[data-sym]').forEach(function(x){x.setAttribute('aria-pressed','false');});
      btn.setAttribute('aria-pressed','true');
      if(info){info.querySelector('[data-k="sym"]').textContent=btn.dataset.sym;info.querySelector('[data-k="word"]').textContent=btn.dataset.word;info.querySelector('[data-k="how"]').textContent=btn.dataset.how;}
      say(btn.dataset.word);
    });
  });
  document.querySelectorAll('[data-say]').forEach(function(el){el.addEventListener('click',function(){say(el.dataset.say);});});
  // Flip cards
  document.querySelectorAll('.pair-card').forEach(function(c){c.addEventListener('click',function(){c.classList.toggle('flipped');});});
  // Cookie
  var bar=document.getElementById('cookie'),v=null;try{v=localStorage.getItem('ph_cookie');}catch(e){}
  if(bar&&!v)bar.classList.add('show');
  document.querySelectorAll('[data-cookie]').forEach(function(x){x.addEventListener('click',function(){try{localStorage.setItem('ph_cookie',x.dataset.cookie);}catch(e){}bar.classList.remove('show');});});
  var y=document.getElementById('year');if(y)y.textContent=new Date().getFullYear();
})();
