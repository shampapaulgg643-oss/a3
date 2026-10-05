<?php
// Phonetics Halo — homepage
$msg = ''; $ok = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['letter_email'])) {
    $email = trim((string) filter_input(INPUT_POST, 'letter_email', FILTER_SANITIZE_EMAIL));
    if (!empty($_POST['nickname'])) { $ok = true; $msg = 'Thank you!'; }
    elseif ($email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        @file_put_contents(__DIR__ . '/subscribers.txt', date('c') . "\t" . $email . PHP_EOL, FILE_APPEND | LOCK_EX);
        $ok = true; $msg = 'Welcome aboard! Your first Sound of the Week arrives next Monday.';
    } else { $msg = 'Please enter a valid email address.'; }
}
$tips = [
  'Say the schwa /ə/ in "banana" twice: ba-NA-na becomes /bəˈnænə/.',
  'Hum /m/ for three seconds, then open into /ɑː/. Feel the voice move from nose to mouth.',
  'Whisper "think" and "sink" back to back. Only the tongue tip should change.',
  'Read one sentence aloud and tap the table on each stressed syllable.',
  'Say "red lorry, yellow lorry" slowly five times, then at normal speed.',
  'Record yourself saying "ship" and "sheep", then compare the vowel length.',
  'Place a finger on your throat and say /s/ then /z/. Feel the buzz switch on.'
];
$tip = $tips[(int) date('N') - 1];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Phonetics Halo | Learn English Pronunciation &amp; the IPA</title>
<meta name="description" content="Free English pronunciation lessons: an interactive IPA vowel chart, minimal pairs, word stress, a four-week practice plan and clear tips for learners and teachers.">
<meta name="robots" content="index, follow, max-image-preview:large">
<link rel="canonical" href="https://www.phoneticshalo.com/">
<meta property="og:type" content="website"><meta property="og:site_name" content="Phonetics Halo">
<meta property="og:title" content="Phonetics Halo | Learn English Pronunciation &amp; the IPA"><meta property="og:description" content="Free English pronunciation lessons: an interactive IPA vowel chart, minimal pairs, word stress, a four-week practice plan and clear tips for learners and teachers.">
<meta property="og:url" content="https://www.phoneticshalo.com/"><meta property="og:image" content="https://images.unsplash.com/photo-1610733661495-4aa6ed9fc6f4?auto=format&fit=crop&w=1200&q=75">
<meta name="twitter:card" content="summary_large_image">
<meta name="theme-color" content="#0F2E2E">
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 48 48'%3E%3Crect width='48' height='48' rx='12' fill='%230F2E2E'/%3E%3Ccircle cx='24' cy='24' r='15' fill='none' stroke='%23FFD23F' stroke-width='4'/%3E%3C/svg%3E">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://images.unsplash.com">
<link href="https://fonts.googleapis.com/css2?family=Literata:opsz,wght@7..72,400;7..72,500&family=Sora:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-0LY0HY7L01');
</script>
<script type="application/ld+json">[{"@context": "https://schema.org", "@type": "EducationalOrganization", "name": "Phonetics Halo", "url": "https://www.phoneticshalo.com/", "email": "hello@phoneticshalo.com", "telephone": "+1-888-777-5845", "address": {"@type": "PostalAddress", "streetAddress": "181 Mercer Street", "addressLocality": "New York", "addressRegion": "NY", "postalCode": "10012", "addressCountry": "US"}}, {"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "What is phonetics?", "acceptedAnswer": {"@type": "Answer", "text": "Phonetics is the study of speech sounds: how we make them with our mouth, throat and breath, how they travel as sound waves, and how listeners perceive them. It is different from spelling, which is why the same letter can represent several sounds in English."}}, {"@type": "Question", "name": "Do I need to learn the IPA to improve my pronunciation?", "acceptedAnswer": {"@type": "Answer", "text": "Not strictly, but it helps a lot. The International Phonetic Alphabet gives every sound its own symbol, so you can see exactly what to say instead of guessing from English spelling. Most learners pick up the core symbols in a few weeks."}}, {"@type": "Question", "name": "Which accent do you teach?", "acceptedAnswer": {"@type": "Answer", "text": "Our examples are based on General American English, but we point out important differences from other accents, such as British English, where they affect understanding. The goal is clarity, not erasing your own accent."}}, {"@type": "Question", "name": "How long does it take to improve pronunciation?", "acceptedAnswer": {"@type": "Answer", "text": "Many learners notice clearer speech after a few weeks of short, regular practice. Changing deep habits takes longer. Ten focused minutes a day usually beats one long session a week."}}, {"@type": "Question", "name": "Can I hear the sounds on this website?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. Tap any symbol in the vowel chart or a play button to hear an example word through your browser’s built-in speech voice. Voices vary between devices, so use them as a guide alongside recordings of real speakers."}}, {"@type": "Question", "name": "Are your lessons free?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. All guides and exercises on Phonetics Halo are free to read and use. The site may be supported by advertising, which never affects what we teach."}}]}]</script>
</head>
<body>
<a class="skip" href="#main">Skip to content</a>
<div class="topbar"><a class="logo" href="index.php" aria-label="Phonetics Halo home"><svg viewBox="0 0 48 48" aria-hidden="true"><circle cx="24" cy="24" r="19" fill="none" stroke="#FFD23F" stroke-width="4"/><text x="24" y="31" text-anchor="middle" font-family="Georgia,serif" font-size="20" fill="#fff">&#601;</text></svg><span>Phonetics Halo<small>Hear it. Say it.</small></span></a><button class="burger" aria-label="Open menu" aria-expanded="false" aria-controls="side"><span></span><span></span><span></span></button></div>
<aside class="side" id="side">
  <a class="logo" href="index.php" aria-label="Phonetics Halo home"><svg viewBox="0 0 48 48" aria-hidden="true"><circle cx="24" cy="24" r="19" fill="none" stroke="#FFD23F" stroke-width="4"/><text x="24" y="31" text-anchor="middle" font-family="Georgia,serif" font-size="20" fill="#fff">&#601;</text></svg><span>Phonetics Halo<small>Hear it. Say it.</small></span></a>
  <nav aria-label="Main navigation"><ul><li><a href="index.php" aria-current="page"><span class="sym">&#601;</span>Home</a></li><li><a href="ipa-guide.html"><span class="sym">&#952;</span>IPA Sound Guide</a></li><li><a href="practice.html"><span class="sym">&#643;</span>Practice Exercises</a></li><li><a href="about.html"><span class="sym">&#230;</span>About Us</a></li><li><a href="contact.html"><span class="sym">&#331;</span>Contact</a></li></ul></nav>
  <div class="side-foot"><p>Free guides to English pronunciation and the sounds of speech.</p><a href="index.php#sound-letter">Get the Sound of the Week &rarr;</a></div>
</aside>
<div class="main">
<main id="main">
<section class="hero">
  <div class="wrap">
    <div class="hero-grid">
      <div>
        <span class="tag">English pronunciation, made clear</span>
        <h1>Hear every sound. <span class="hl">Say it</span> with confidence.</h1>
        <p class="lead">Phonetics Halo is a free learning space for English pronunciation. Explore the IPA chart, practise tricky sound pairs and learn how stress and rhythm shape the way English really sounds.</p>
        <div class="ctas"><a class="btn" href="ipa-guide.html">Start with the IPA guide &rarr;</a><a class="btn btn--line" href="practice.html">Try an exercise</a></div>
      </div>
      <div class="halo">
        <div class="pic"><img src="https://images.unsplash.com/photo-1610733661495-4aa6ed9fc6f4?auto=format&fit=crop&w=700&q=75" alt="woman in a black shirt speaking into a microphone" width="700" height="700" fetchpriority="high"></div>
        <span class="float f1">/θ/</span><span class="float f2">/æ/</span><span class="float f3">/ʃ/</span><span class="float f4">/ə/</span>
      </div>
    </div>
    <div class="facts">
      <div><strong>44</strong><span>distinct sounds in most accents of English, from only 26 letters</span></div>
      <div><strong>/ə/</strong><span>the schwa, the most frequent vowel sound in spoken English</span></div>
      <div><strong>Today&#8217;s drill</strong><span><?php echo htmlspecialchars($tip, ENT_QUOTES, 'UTF-8'); ?></span></div>
    </div>
  </div>
</section>

<section class="block alt" aria-labelledby="what-t">
  <div class="wrap split">
    <div class="pic"><img src="https://images.unsplash.com/photo-1584457361626-06effef61a7c?auto=format&fit=crop&w=900&q=75" alt="close-up of lips slightly parted while speaking" width="900" height="720" loading="lazy"></div>
    <div>
      <span class="tag">The basics</span>
      <h2 id="what-t">Spelling lies. <em>Sounds</em> don&#8217;t.</h2>
      <p>Look at the words <em>though</em>, <em>through</em>, <em>tough</em> and <em>cough</em>. Same four letters, four completely different sounds. That is why so many learners, and plenty of native speakers, find English pronunciation confusing.</p>
      <p>Phonetics solves this by describing sounds directly. Instead of trusting the letters, you learn where your tongue, lips and voice should be for each sound, and you use a clear symbol system, the IPA, to write it down.</p>
      <p>Once you can see sounds, you can fix them. That is the idea behind every lesson on this site.</p>
    </div>
  </div>
</section>

<section class="block" id="vowels" aria-labelledby="v-t">
  <div class="wrap">
    <div class="head"><span class="tag">Interactive vowel chart</span><h2 id="v-t">Tap a symbol to <span class="hl">hear it</span></h2><p class="muted">These are the main vowel sounds of General American English. Select a symbol to see an example word and a simple description of how to make it.</p></div>
    <div class="chart-box">
      <div class="syms" role="group" aria-label="Vowel symbols"><button type="button" class="sym-btn" data-sym="/iː/" data-word="see" data-how="Long and tense. Spread your lips slightly, as if smiling, with the tongue high and forward." aria-pressed="true">iː<small>see</small></button><button type="button" class="sym-btn" data-sym="/ɪ/" data-word="sit" data-how="Short and relaxed. The tongue is a little lower and further back than for /iː/." aria-pressed="false">ɪ<small>sit</small></button><button type="button" class="sym-btn" data-sym="/eɪ/" data-word="day" data-how="A glide: start near /e/ and move toward /ɪ/. Your jaw closes slightly as you finish." aria-pressed="false">eɪ<small>day</small></button><button type="button" class="sym-btn" data-sym="/ɛ/" data-word="bed" data-how="Short, with the mouth half open and the tongue front and mid-height." aria-pressed="false">ɛ<small>bed</small></button><button type="button" class="sym-btn" data-sym="/æ/" data-word="cat" data-how="Open the jaw wide and keep the tongue low and forward. Common in American English." aria-pressed="false">æ<small>cat</small></button><button type="button" class="sym-btn" data-sym="/ɑː/" data-word="father" data-how="Long and open, with the tongue low and back and the jaw dropped." aria-pressed="false">ɑː<small>father</small></button><button type="button" class="sym-btn" data-sym="/ɔː/" data-word="law" data-how="Rounded lips, tongue low and back. Many American speakers merge it with /ɑː/." aria-pressed="false">ɔː<small>law</small></button><button type="button" class="sym-btn" data-sym="/oʊ/" data-word="go" data-how="A glide from a rounded /o/ toward /ʊ/. The lips round more as you finish." aria-pressed="false">oʊ<small>go</small></button><button type="button" class="sym-btn" data-sym="/ʊ/" data-word="book" data-how="Short and relaxed, with lightly rounded lips and the tongue high and back." aria-pressed="false">ʊ<small>book</small></button><button type="button" class="sym-btn" data-sym="/uː/" data-word="food" data-how="Long, with tightly rounded lips and the tongue high and back." aria-pressed="false">uː<small>food</small></button><button type="button" class="sym-btn" data-sym="/ʌ/" data-word="cup" data-how="Short and central, with a relaxed, slightly open mouth. Stressed syllables only." aria-pressed="false">ʌ<small>cup</small></button><button type="button" class="sym-btn" data-sym="/ə/" data-word="about" data-how="The schwa. The most common vowel in English, found in unstressed syllables. Very short and relaxed." aria-pressed="false">ə<small>about</small></button><button type="button" class="sym-btn" data-sym="/ɜːr/" data-word="bird" data-how="A central vowel coloured by /r/. The tongue bunches or curls slightly back." aria-pressed="false">ɜːr<small>bird</small></button><button type="button" class="sym-btn" data-sym="/aɪ/" data-word="time" data-how="Start with an open /a/ and glide up toward /ɪ/." aria-pressed="false">aɪ<small>time</small></button><button type="button" class="sym-btn" data-sym="/aʊ/" data-word="now" data-how="Start open and glide toward a rounded /ʊ/. The lips close and round." aria-pressed="false">aʊ<small>now</small></button><button type="button" class="sym-btn" data-sym="/ɔɪ/" data-word="boy" data-how="Start with rounded /ɔ/ and glide toward /ɪ/, unrounding the lips." aria-pressed="false">ɔɪ<small>boy</small></button></div>
      <div class="sym-info" id="sym-info" aria-live="polite">
        <div class="big" data-k="sym">/iː/</div>
        <h3>as in &ldquo;<span data-k="word">see</span>&rdquo;</h3>
        <p data-k="how">Long and tense. Spread your lips slightly, as if smiling, with the tongue high and forward.</p>
        <p class="note">Audio uses your browser&#8217;s built-in voice, so it can sound slightly different on each device.</p>
      </div>
    </div>
  </div>
</section>

<section class="block alt" aria-labelledby="p-t">
  <div class="wrap">
    <div class="head"><span class="tag">Minimal pairs</span><h2 id="p-t">Six pairs that trip people up</h2><p class="muted">Minimal pairs are words that differ by just one sound. Practising them trains your ear and your mouth at the same time. Tap a card to see how to tell the sounds apart.</p></div>
    <div class="pairs"><button type="button" class="pair-card" aria-label="Minimal pair ship and sheep, tap for tip"><span class="in"><span class="face front"><span class="w">sh<span>i</span>p &middot; sh<span>ee</span>p</span><small>/ɪ/ vs /iː/ &middot; tap for the tip</small></span><span class="face back"><strong>/ɪ/ vs /iː/</strong><span>Keep /ɪ/ short and relaxed; stretch /iː/ with a slight smile.</span></span></span></button><button type="button" class="pair-card" aria-label="Minimal pair think and sink, tap for tip"><span class="in"><span class="face front"><span class="w"><span>th</span>ink &middot; <span>s</span>ink</span><small>/θ/ vs /s/ &middot; tap for the tip</small></span><span class="face back"><strong>/θ/ vs /s/</strong><span>For /θ/, let the tongue tip touch your top teeth and blow air gently.</span></span></span></button><button type="button" class="pair-card" aria-label="Minimal pair vest and west, tap for tip"><span class="in"><span class="face front"><span class="w"><span>v</span>est &middot; <span>w</span>est</span><small>/v/ vs /w/ &middot; tap for the tip</small></span><span class="face back"><strong>/v/ vs /w/</strong><span>/v/ uses teeth on the lower lip; /w/ uses rounded lips and no teeth.</span></span></span></button><button type="button" class="pair-card" aria-label="Minimal pair cat and cut, tap for tip"><span class="in"><span class="face front"><span class="w">c<span>a</span>t &middot; c<span>u</span>t</span><small>/æ/ vs /ʌ/ &middot; tap for the tip</small></span><span class="face back"><strong>/æ/ vs /ʌ/</strong><span>Drop the jaw wider for /æ/; keep /ʌ/ central and relaxed.</span></span></span></button><button type="button" class="pair-card" aria-label="Minimal pair light and right, tap for tip"><span class="in"><span class="face front"><span class="w"><span>l</span>ight &middot; <span>r</span>ight</span><small>/l/ vs /r/ &middot; tap for the tip</small></span><span class="face back"><strong>/l/ vs /r/</strong><span>/l/ touches the ridge behind your teeth; /r/ never touches it.</span></span></span></button><button type="button" class="pair-card" aria-label="Minimal pair full and fool, tap for tip"><span class="in"><span class="face front"><span class="w">f<span>u</span>ll &middot; f<span>oo</span>l</span><small>/ʊ/ vs /uː/ &middot; tap for the tip</small></span><span class="face back"><strong>/ʊ/ vs /uː/</strong><span>/ʊ/ is short and loose; /uː/ is long with tightly rounded lips.</span></span></span></button></div>
    <p style="margin-top:26px"><a class="btn btn--line" href="practice.html#pairs">See the full minimal pairs list</a></p>
  </div>
</section>

<section class="block" aria-labelledby="s-t">
  <div class="wrap">
    <div class="head"><span class="tag">Stress &amp; rhythm</span><h2 id="s-t">Where the beat falls changes the word</h2><p class="muted">English is a stress-timed language. Stressed syllables are longer, louder and higher; unstressed ones shrink, often to a schwa. Put the stress in the wrong place and even perfect sounds can be hard to understand.</p></div>
    <div class="stress">
      <div class="st"><div class="bars"><i class="on" style="height:100%"><b>PRE</b></i><i style="height:45%"><b>sent</b></i></div><h3>PRE-sent (noun)</h3><p class="muted">A gift. Stress on the first syllable.</p><button class="say" data-say="a present">&#9654; Listen</button></div>
      <div class="st"><div class="bars"><i style="height:45%"><b>pre</b></i><i class="on" style="height:100%"><b>SENT</b></i></div><h3>pre-SENT (verb)</h3><p class="muted">To show or give. Stress moves to the second syllable.</p><button class="say" data-say="to present">&#9654; Listen</button></div>
      <div class="st"><div class="bars"><i style="height:40%"><b>pho</b></i><i class="on" style="height:100%"><b>NE</b></i><i style="height:50%"><b>tics</b></i></div><h3>pho-NE-tics</h3><p class="muted">Words ending in <em>-ic</em> or <em>-ics</em> usually stress the syllable just before.</p><button class="say" data-say="phonetics">&#9654; Listen</button></div>
    </div>
  </div>
</section>

<section class="block alt" aria-labelledby="plan-t">
  <div class="wrap split">
    <div>
      <span class="tag">A simple plan</span>
      <h2 id="plan-t">Four weeks to clearer speech</h2>
      <p class="muted">You do not need hours a day. Follow this routine for ten to fifteen minutes daily and you will build steady, lasting habits.</p>
      <a class="btn" href="practice.html">Open the practice page &rarr;</a>
    </div>
    <ol class="plan">
      <li><span class="wk">Week<br>1</span><h3>Learn to see sounds</h3><p>Study the vowel and consonant symbols. Look up five everyday words a day in a dictionary with IPA.</p></li>
      <li><span class="wk">Week<br>2</span><h3>Train your ear</h3><p>Work through minimal pairs. Listen first, then repeat, then record yourself and compare.</p></li>
      <li><span class="wk">Week<br>3</span><h3>Find the beat</h3><p>Mark stressed syllables in short texts and read them aloud, tapping on each stress.</p></li>
      <li><span class="wk">Week<br>4</span><h3>Put it together</h3><p>Shadow a short recording for a few minutes a day, copying its rhythm and intonation.</p></li>
    </ol>
  </div>
</section>

<section class="block" aria-labelledby="aud-t">
  <div class="wrap">
    <div class="head"><span class="tag">Who it&#8217;s for</span><h2 id="aud-t">Built for anyone who speaks English</h2></div>
    <div class="aud">
      <article><div class="pic"><img src="https://images.unsplash.com/photo-1513258496099-48168024aec0?auto=format&fit=crop&w=500&q=75" alt="man wearing headphones studying at a laptop" width="500" height="375" loading="lazy"></div><div class="t"><h3>Language learners</h3><p>Understand why words sound the way they do and stop guessing from spelling.</p></div></article>
      <article><div class="pic"><img src="https://images.unsplash.com/photo-1664382953518-4a664ab8a8c9?auto=format&fit=crop&w=500&q=75" alt="person writing on a whiteboard in a classroom" width="500" height="375" loading="lazy"></div><div class="t"><h3>Teachers</h3><p>Clear explanations and ready-to-use pairs and drills for your pronunciation lessons.</p></div></article>
      <article><div class="pic"><img src="https://images.unsplash.com/photo-1715610237622-748477adf2e4?auto=format&fit=crop&w=500&q=75" alt="woman speaking at a podium with a microphone" width="500" height="375" loading="lazy"></div><div class="t"><h3>Public speakers</h3><p>Use stress, pausing and intonation to sound clearer and more confident on stage.</p></div></article>
      <article><div class="pic"><img src="https://images.unsplash.com/photo-1559523161-0fc0d8b38a7a?auto=format&fit=crop&w=500&q=75" alt="two men with headphones recording a podcast in a studio" width="500" height="375" loading="lazy"></div><div class="t"><h3>Podcasters &amp; voice users</h3><p>Sharpen articulation so listeners follow you easily, even at speed.</p></div></article>
    </div>
  </div>
</section>

<section class="block alt" aria-labelledby="mis-t">
  <div class="wrap split rev">
    <div class="pic"><img src="https://images.unsplash.com/photo-1513470270416-d3ff6f16b22f?auto=format&fit=crop&w=900&q=75" alt="two women talking face to face across a table" width="900" height="720" loading="lazy"></div>
    <div>
      <span class="tag">Common mistakes</span>
      <h2 id="mis-t">Five habits that blur your speech</h2>
      <ol class="mist">
        <li><div><h3>Pronouncing every letter</h3><p>Silent letters are silent: the <em>k</em> in &ldquo;knee&rdquo; and the <em>b</em> in &ldquo;climb&rdquo; are never said.</p></div></li>
        <li><div><h3>Giving every syllable equal weight</h3><p>English squeezes unstressed syllables. Flat, even rhythm sounds robotic and can hide meaning.</p></div></li>
        <li><div><h3>Ignoring the schwa</h3><p>&ldquo;Banana&rdquo; is /bəˈnænə/, not three identical vowels. Relaxing weak syllables sounds far more natural.</p></div></li>
        <li><div><h3>Dropping final consonants</h3><p>The ends of words carry grammar: &ldquo;walk&rdquo; vs &ldquo;walked&rdquo;, &ldquo;cat&rdquo; vs &ldquo;cats&rdquo;.</p></div></li>
        <li><div><h3>Practising only by reading</h3><p>Your ear leads your mouth. Listen carefully to real speakers before and after you practise.</p></div></li>
      </ol>
    </div>
  </div>
</section>

<section class="block" aria-labelledby="meth-t">
  <div class="wrap">
    <div class="head"><span class="tag">Practice methods</span><h2 id="meth-t">Techniques that actually work</h2></div>
    <div class="methods">
      <div class="m-tile big"><div class="pic"><img src="https://images.unsplash.com/photo-1553729784-e91953dec042?auto=format&fit=crop&w=800&q=75" alt="girl reading a book aloud" width="800" height="500" loading="lazy"></div><div class="t"><h3>Reading aloud with a pencil</h3><p>Before reading a paragraph aloud, underline the stressed syllables and mark natural pauses with a slash. Then read slowly, exaggerating the stress, and gradually speed up. It turns silent reading into real speaking practice.</p></div></div>
      <div class="m-tile y"><h3>Shadowing</h3><p>Play a short clip of a clear speaker and speak along a fraction of a second behind them, copying rhythm and melody rather than individual words.</p></div>
      <div class="m-tile c"><h3>Record &amp; compare</h3><p>Record yourself on your phone, then listen back alongside the original. You will hear things you cannot notice while speaking.</p></div>
      <div class="m-tile"><h3>Mirror work</h3><p>Watch your lips and jaw in a mirror. Rounding, spreading and opening are easy to check visually.</p></div>
      <div class="m-tile y"><h3>Dictionary IPA</h3><p>Every good learner&#8217;s dictionary shows IPA. Check new words there before you learn them.</p></div>
    </div>
  </div>
</section>

<section class="block alt" aria-labelledby="faq-t">
  <div class="wrap split" style="align-items:start">
    <div>
      <span class="tag">FAQ</span>
      <h2 id="faq-t">Questions learners ask us</h2>
      <p class="muted">Still curious? Send your question through the contact page and we will do our best to help.</p>
      <div class="pic" style="margin-top:24px;aspect-ratio:16/10"><img src="https://images.unsplash.com/photo-1451226428352-cf66bf8a0317?auto=format&fit=crop&w=800&q=75" alt="dictionary open to an index page" width="800" height="500" loading="lazy"></div>
    </div>
    <div class="faq"><details open><summary>What is phonetics?</summary><p>Phonetics is the study of speech sounds: how we make them with our mouth, throat and breath, how they travel as sound waves, and how listeners perceive them. It is different from spelling, which is why the same letter can represent several sounds in English.</p></details><details><summary>Do I need to learn the IPA to improve my pronunciation?</summary><p>Not strictly, but it helps a lot. The International Phonetic Alphabet gives every sound its own symbol, so you can see exactly what to say instead of guessing from English spelling. Most learners pick up the core symbols in a few weeks.</p></details><details><summary>Which accent do you teach?</summary><p>Our examples are based on General American English, but we point out important differences from other accents, such as British English, where they affect understanding. The goal is clarity, not erasing your own accent.</p></details><details><summary>How long does it take to improve pronunciation?</summary><p>Many learners notice clearer speech after a few weeks of short, regular practice. Changing deep habits takes longer. Ten focused minutes a day usually beats one long session a week.</p></details><details><summary>Can I hear the sounds on this website?</summary><p>Yes. Tap any symbol in the vowel chart or a play button to hear an example word through your browser&#8217;s built-in speech voice. Voices vary between devices, so use them as a guide alongside recordings of real speakers.</p></details><details><summary>Are your lessons free?</summary><p>Yes. All guides and exercises on Phonetics Halo are free to read and use. The site may be supported by advertising, which never affects what we teach.</p></details></div>
  </div>
</section>

<section class="block" id="sound-letter" aria-labelledby="n-t">
  <div class="wrap">
    <div class="news">
      <img src="https://images.unsplash.com/photo-1478737270239-2f02b77fc618?auto=format&fit=crop&w=1600&q=75" alt="close-up of a silver studio microphone" width="1600" height="1000" loading="lazy">
      <div class="in">
        <span class="tag" style="color:var(--halo)">Free weekly email</span>
        <h2 id="n-t">Sound of the Week</h2>
        <p>One sound, one clear explanation and a two-minute drill, every Monday. No spam, and you can leave with one click.</p>
        <?php if ($msg): ?><p class="<?php echo $ok ? 'ok' : 'err'; ?>" role="status"><?php echo htmlspecialchars($msg, ENT_QUOTES, 'UTF-8'); ?></p><?php endif; ?>
        <form method="post" action="index.php#sound-letter">
          <label for="le" class="skip">Email address</label>
          <input type="email" id="le" name="letter_email" placeholder="Your email address" required autocomplete="email">
          <input type="text" name="nickname" tabindex="-1" autocomplete="off" style="display:none" aria-hidden="true">
          <button class="btn" type="submit">Subscribe</button>
        </form>
        <p class="small">Read our <a href="privacy-policy.html">Privacy Policy</a> to see how we handle your email.</p>
      </div>
    </div>
  </div>
</section>
</main>
<footer class="foot">
  <div class="wrap">
    <div class="foot-grid">
      <div><h4>Phonetics Halo</h4><p>Clear, friendly lessons on the sounds of English, from the IPA chart to rhythm and intonation. Written for learners, teachers and anyone curious about speech.</p></div>
      <div><h4>Learn</h4><a href="ipa-guide.html">IPA Sound Guide</a><a href="practice.html">Practice Exercises</a><a href="index.php#vowels">Vowel Chart</a><a href="about.html">About Us</a><a href="contact.html">Contact</a></div>
      <div><h4>Policies</h4><a href="privacy-policy.html">Privacy Policy</a><a href="terms-and-conditions.html">Terms &amp; Conditions</a><a href="cookie-policy.html">Cookie Policy</a><a href="disclaimer.html">Disclaimer</a><a href="editorial-policy.html">Editorial Policy</a></div>
      <div><h4>Contact</h4><p>181 Mercer Street, New York, NY 10012, United States</p><a href="tel:+18887775845">+1-888-777-5845</a><a href="mailto:hello@phoneticshalo.com">hello@phoneticshalo.com</a></div>
    </div>
    <div class="foot-base"><span>&copy; <?php echo date("Y"); ?> Phonetics Halo. All rights reserved.</span><span>Photos from Unsplash, used under the Unsplash License.</span></div>
  </div>
</footer>
</div>
<div class="cookie" id="cookie" role="dialog" aria-label="Cookie notice"><p>We use essential cookies and, with your consent, analytics cookies to improve our lessons. <a href="cookie-policy.html">Cookie Policy</a></p><button class="y" data-cookie="accepted">Accept</button><button data-cookie="declined">Essential only</button></div>
<script src="assets/js/main.js" defer></script>
</body>
</html>
