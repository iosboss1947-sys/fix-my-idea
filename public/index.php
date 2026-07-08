<!DOCTYPE html>
<html lang="en"><head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fix My Idea</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
scroll-behavior:smooth;
}

body{
background:#000;
color:#fff;
overflow-x:hidden;
}

/* Navbar */

nav{
position:fixed;
top:0;
left:0;
width:100%;
display:flex;
justify-content:space-between;
align-items:center;
padding:20px 8%;
background:rgba(0,0,0,.7);
backdrop-filter:blur(12px);
z-index:1000;
}

.logo{
font-size:34px;
font-weight:bold;
color:#E50914;
letter-spacing:2px;
}

nav ul{
display:flex;
list-style:none;
gap:30px;
}

nav ul li a{
color:white;
text-decoration:none;
font-size:17px;
transition:.3s;
}

nav ul li a:hover{
color:#E50914;
}

.right-buttons{
display:flex;
gap:15px;
}

.btn{
padding:10px 22px;
border:none;
border-radius:5px;
cursor:pointer;
font-size:15px;
font-weight:bold;
transition:.3s;
}

.login{
background:transparent;
border:1px solid #fff;
color:#fff;
}

.login:hover{
background:white;
color:black;
}

.signup{
background:#E50914;
color:white;
}

.signup:hover{
transform:scale(1.05);
background:#ff2020;
}

/* Hero */

.hero{
height:100vh;
display:flex;
align-items:center;
padding:0 8%;
background:
linear-gradient(rgba(0,0,0,.75),rgba(0,0,0,.85)),
url('images/hero.jpg');
background-size:cover;
background-position:center;
}

.hero-content{
max-width:650px;
}

.hero h1{
font-size:65px;
font-weight:bold;
line-height:1.1;
margin-bottom:20px;
}

.hero h1 span{
color:#E50914;
}

.hero p{
font-size:20px;
line-height:32px;
color:#ddd;
margin-bottom:35px;
}

.hero-buttons{
display:flex;
gap:20px;
}

.start-btn{
padding:16px 40px;
background:#E50914;
color:white;
font-size:18px;
border:none;
border-radius:6px;
cursor:pointer;
transition:.3s;
}

.start-btn:hover{
transform:scale(1.05);
}

.learn-btn{
padding:16px 40px;
background:rgba(255,255,255,.15);
backdrop-filter:blur(10px);
color:white;
border:1px solid white;
font-size:18px;
border-radius:6px;
cursor:pointer;
transition:.3s;
}

.learn-btn:hover{
background:white;
color:black;
}

</style>

</head>

<body>

<nav>

<div class="logo">
FIX MY IDEA
</div>

<ul>
<li><a href="#">Home</a></li>
<li><a href="#">Projects</a></li>
<li><a href="#">Editors</a></li>
<li><a href="#">Pricing</a></li>
<li><a href="#">About</a></li>
</ul>

<div class="right-buttons">
<button class="btn login">Login</button>
<button class="btn signup">Sign Up</button>
</div>

</nav>

<section class="hero">

<div class="hero-content">

<h1>
Turn Your <span>Ideas</span><br>
Into Reality.
</h1>

<p>
India's premium freelance platform where clients post ideas and expert editors transform them into professional projects with speed, quality and trust.
</p>

<div class="hero-buttons">

<button class="start-btn">
Get Started
</button>

<button class="learn-btn">
Explore
</button>

</div>

</div>

</section>
<style>

/* ========================= */
/* Trending Section */
/* ========================= */

.trending{
padding:70px 8%;
background:#000;
}

.section-title{
font-size:38px;
font-weight:bold;
margin-bottom:35px;
color:#fff;
}

.card-container{
display:flex;
gap:25px;
overflow-x:auto;
padding-bottom:15px;
scrollbar-width:none;
}

.card-container::-webkit-scrollbar{
display:none;
}

.project-card{
min-width:280px;
height:400px;
border-radius:12px;
overflow:hidden;
position:relative;
cursor:pointer;
transition:.4s;
box-shadow:0 10px 30px rgba(0,0,0,.5);
}

.project-card:hover{
transform:scale(1.08);
z-index:5;
}

.project-card img{
width:100%;
height:100%;
object-fit:cover;
}

.card-overlay{
position:absolute;
left:0;
bottom:0;
width:100%;
padding:20px;
background:linear-gradient(transparent,rgba(0,0,0,.95));
}

.card-overlay h3{
font-size:24px;
margin-bottom:10px;
}

.card-overlay p{
font-size:15px;
color:#ddd;
line-height:24px;
}

.badge{
display:inline-block;
background:#E50914;
padding:6px 12px;
border-radius:20px;
font-size:13px;
font-weight:bold;
margin-bottom:10px;
}

</style>

<section class="trending">

<h2 class="section-title">
🔥 Trending Ideas
</h2>

<div class="card-container">

<div class="project-card">

<img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&amp;fit=crop&amp;w=700&amp;q=80">

<div class="card-overlay">

<span class="badge">Web Development</span>

<h3>Business Website</h3>

<p>Professional responsive website created by verified editors.</p>

</div>

</div>

<div class="project-card">

<img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&amp;fit=crop&amp;w=700&amp;q=80">

<div class="card-overlay">

<span class="badge">UI / UX</span>

<h3>Modern App Design</h3>

<p>Beautiful mobile interface with premium user experience.</p>

</div>

</div>

<div class="project-card">

<img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&amp;fit=crop&amp;w=700&amp;q=80">

<div class="card-overlay">

<span class="badge">Team Work</span>

<h3>Startup Project</h3>

<p>Collaborate with talented editors and developers.</p>

</div>

</div>

<div class="project-card">

<img src="https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&amp;fit=crop&amp;w=700&amp;q=80">

<div class="card-overlay">

<span class="badge">AI</span>

<h3>AI Automation</h3>

<p>Build smart AI tools to automate business workflows.</p>

</div>

</div>

</div>

</section>
<style>

/* ========================= */
/* WHY CHOOSE US */
/* ========================= */

.why{
padding:90px 8%;
background:#111;
}

.why h2{
font-size:42px;
text-align:center;
margin-bottom:15px;
}

.why p.title{
text-align:center;
color:#bbb;
font-size:18px;
margin-bottom:60px;
}

.features{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
gap:30px;
}

.feature-box{
background:#1b1b1b;
border-radius:15px;
padding:35px 25px;
transition:.4s;
border:1px solid rgba(255,255,255,.08);
}

.feature-box:hover{
transform:translateY(-10px);
border-color:#E50914;
box-shadow:0 0 30px rgba(229,9,20,.35);
}

.icon{
font-size:50px;
margin-bottom:20px;
}

.feature-box h3{
font-size:24px;
margin-bottom:15px;
}

.feature-box p{
color:#ccc;
line-height:28px;
font-size:16px;
}

</style>

<section class="why">

<h2>Why Choose <span style="color:#E50914;">Fix My Idea?</span></h2>

<p class="title">
One platform. Unlimited creative possibilities.
</p>

<div class="features">

<div class="feature-box">
<div class="icon">💡</div>
<h3>Share Your Idea</h3>
<p>
Post your project idea in minutes and let talented editors bring it to life.
</p>
</div>

<div class="feature-box">
<div class="icon">🎯</div>
<h3>Verified Editors</h3>
<p>
Work with skilled editors and developers selected based on quality and experience.
</p>
</div>

<div class="feature-box">
<div class="icon">⚡</div>
<h3>Fast Delivery</h3>
<p>
Receive high-quality work quickly with transparent progress tracking.
</p>
</div>

<div class="feature-box">
<div class="icon">🏆</div>
<h3>Reward System</h3>
<p>
Top-performing editors earn ranks, rewards, and recognition on the platform.
</p>
</div>

</div>

</section>
<style>

/* ========================= */
/* STATS SECTION */
/* ========================= */

.stats{
padding:80px 8%;
background:#000;
display:grid;
grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
gap:30px;
text-align:center;
}

.stat-box{
background:#151515;
padding:35px 20px;
border-radius:15px;
transition:.3s;
}

.stat-box:hover{
transform:translateY(-8px);
box-shadow:0 0 25px rgba(229,9,20,.35);
}

.stat-box h2{
font-size:48px;
color:#E50914;
margin-bottom:10px;
}

.stat-box p{
font-size:18px;
color:#ddd;
}

/* ========================= */
/* REVIEWS */
/* ========================= */

.reviews{
padding:90px 8%;
background:#111;
}

.review-title{
text-align:center;
font-size:40px;
margin-bottom:50px;
}

.review-container{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
gap:30px;
}

.review-card{
background:#1a1a1a;
padding:30px;
border-radius:15px;
border:1px solid rgba(255,255,255,.08);
transition:.3s;
}

.review-card:hover{
transform:translateY(-8px);
border-color:#E50914;
}

.review-card h3{
margin-bottom:15px;
font-size:22px;
}

.review-card p{
line-height:28px;
color:#ccc;
margin-bottom:15px;
}

.stars{
color:#FFD700;
font-size:20px;
}

/* ========================= */
/* CTA */
/* ========================= */

.cta{
padding:100px 8%;
text-align:center;
background:linear-gradient(135deg,#111,#000);
}

.cta h2{
font-size:52px;
margin-bottom:20px;
}

.cta p{
font-size:20px;
color:#ccc;
margin-bottom:35px;
}

.cta button{
padding:18px 45px;
font-size:18px;
background:#E50914;
border:none;
border-radius:6px;
color:#fff;
cursor:pointer;
transition:.3s;
}

.cta button:hover{
transform:scale(1.05);
background:#ff2a2a;
}

</style>

<section class="stats">

<div class="stat-box">
<h2>25K+</h2>
<p>Ideas Completed</p>
</div>

<div class="stat-box">
<h2>8K+</h2>
<p>Professional Editors</p>
</div>

<div class="stat-box">
<h2>99%</h2>
<p>Happy Clients</p>
</div>

<div class="stat-box">
<h2>24/7</h2>
<p>Support</p>
</div>

</section>

<section class="reviews">

<h2 class="review-title">
What Our Clients Say
</h2>

<div class="review-container">

<div class="review-card">
<div class="stars">★★★★★</div>
<h3>Rahul</h3>
<p>
Amazing experience. My website was completed within 3 days with premium quality.
</p>
</div>

<div class="review-card">
<div class="stars">★★★★★</div>
<h3>Priya</h3>
<p>
Fix My Idea connected me with talented editors. The process was smooth and professional.
</p>
</div>

<div class="review-card">
<div class="stars">★★★★★</div>
<h3>Arjun</h3>
<p>
The platform is clean, fast and trustworthy. Highly recommended for startups.
</p>
</div>

</div>

</section>

<section class="cta">

<h2>Ready to Build Your Dream Project?</h2>

<p>
Post your idea today and let India's best editors transform it into reality.
</p>

<button>Start Your Project</button>

</section>
<style>

/* ========================= */
/* FOOTER */
/* ========================= */

footer{
background:#000;
padding:60px 8% 30px;
border-top:1px solid rgba(255,255,255,.08);
}

.footer-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
gap:40px;
margin-bottom:40px;
}

.footer-logo{
font-size:32px;
font-weight:bold;
color:#E50914;
margin-bottom:15px;
}

.footer-title{
font-size:22px;
margin-bottom:18px;
}

.footer-links a{
display:block;
color:#bbb;
text-decoration:none;
margin:10px 0;
transition:.3s;
}

.footer-links a:hover{
color:#E50914;
padding-left:6px;
}

.footer-bottom{
text-align:center;
color:#888;
border-top:1px solid rgba(255,255,255,.08);
padding-top:20px;
}

/* Scroll To Top */

#topBtn{
position:fixed;
right:25px;
bottom:25px;
width:55px;
height:55px;
border:none;
border-radius:50%;
background:#E50914;
color:#fff;
font-size:22px;
cursor:pointer;
display:none;
box-shadow:0 0 20px rgba(229,9,20,.5);
transition:.3s;
}

#topBtn:hover{
transform:scale(1.1);
}

.fade{
opacity:0;
transform:translateY(40px);
transition:all .8s ease;
}

.fade.show{
opacity:1;
transform:translateY(0);
}

</style>

<footer class="fade show">

<div class="footer-grid">

<div>
<div class="footer-logo">FIX MY IDEA</div>
<p style="color:#bbb;line-height:28px;">
Turn your ideas into reality with India's trusted freelance platform.
</p>
</div>

<div>
<h3 class="footer-title">Company</h3>
<div class="footer-links">
<a href="#">About</a>
<a href="#">Careers</a>
<a href="#">Blog</a>
<a href="#">Contact</a>
</div>
</div>

<div>
<h3 class="footer-title">Services</h3>
<div class="footer-links">
<a href="#">Web Development</a>
<a href="#">App Development</a>
<a href="#">UI/UX Design</a>
<a href="#">Video Editing</a>
</div>
</div>

<div>
<h3 class="footer-title">Support</h3>
<div class="footer-links">
<a href="#">Help Center</a>
<a href="#">Privacy Policy</a>
<a href="#">Terms &amp; Conditions</a>
<a href="#">FAQ</a>
</div>
</div>

</div>

<div class="footer-bottom">
© 2026 Fix My Idea. All Rights Reserved.
</div>

</footer>

<button id="topBtn" style="display: none;">↑</button>

<script>

const topBtn=document.getElementById("topBtn");

window.onscroll=function(){

if(document.documentElement.scrollTop>300){

topBtn.style.display="block";

}else{

topBtn.style.display="none";

}

};

topBtn.onclick=function(){

window.scrollTo({

top:0,

behavior:"smooth"

});

};

const observer=new IntersectionObserver(entries=>{

entries.forEach(entry=>{

if(entry.isIntersecting){

entry.target.classList.add("show");

}

});

});

document.querySelectorAll(".fade").forEach(el=>{

observer.observe(el);

});

</script>



</body></html>
