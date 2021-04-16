<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png"><link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@300;600&display=swap" rel="stylesheet"> 
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="./style.css">
  
  <title>Frontend Mentor | [Blogr]</title>

</head>
<body>

  <section class="top__section">
    <nav>
      <img src="./images/logo.svg" alt="" class="logo">
      <div class="dropdown">
      <button class="product">Product <img class="arrow__one" src="./images/icon-arrow-light.svg" alt=""></button>
      <ul class="product__dropdown">
        <li class="product__item"><a id="product__item__link1" class="product__item__link" href="#">Overview</a></li>
        <li class="product__item"><a id="product__item__link2" class="product__item__link" href="#">Pricing</a></li>
        <li class="product__item"><a id="product__item__link3" class="product__item__link" href="#">Marketplace</a></li>
        <li class="product__item"><a id="product__item__link4" class="product__item__link" href="#">Features</a></li>
        <li class="product__item"><a id="product__item__link5" class="product__item__link" href="#">Integrations</a></li>
      </ul>

      <button class="company">Company <img class="arrow__two" src="./images/icon-arrow-light.svg" alt=""></button>
      <ul class="company__dropdown">
        <li class="company__item"><a id="company__item__link1" class="company__item__link" href="#">About</a></li>
        <li class="company__item"><a id="company__item__link2" class="company__item__link" href="#">Team</a></li>
        <li class="company__item"><a id="company__item__link3" class="company__item__link" href="#">Blog</a></li>
        <li class="company__item"><a id="company__item__link4" class="company__item__link" href="#">Careers</a></li>
      </ul>

      <button class="connect">Connect <img class="arrow__three" src="./images/icon-arrow-light.svg" alt=""></button>
      <ul class="connect__dropdown">
        <li class="connect__item"><a id="connect__item__link1" class="connect__item__link" href="#">Contact</a></li>
        <li class="connect__item"><a id="connect__item__link2" class="connect__item__link" href="#">Newsletter</a></li>
        <li class="connect__item"><a id="connect__item__link3" class="connect__item__link" href="#">LinkedIn</a></li>
      </ul>
    </div>

    <div class="burger">
     <button class="burger__btn"><img class="burger__img" src="./images/icon-hamburger.svg" alt=""></button>
     <div class="burger__menu">
      <button class="product__brgr">Product <img class="arrow__brgr__one" src="./images/icon-arrow-dark.svg" alt=""></button>
      <ul class="product__dropdown__brgr">
        <li class="product__item__brgr"><a id="product__item__link1" class="product__item__link__brgr" href="#">Overview</a></li>
        <li class="product__item__brgr"><a id="product__item__link2" class="product__item__link__brgr" href="#">Pricing</a></li>
        <li class="product__item__brgr"><a id="product__item__link3" class="product__item__link__brgr" href="#">Marketplace</a></li>
        <li class="product__item__brgr"><a id="product__item__link4" class="product__item__link__brgr" href="#">Features</a></li>
        <li class="product__item__brgr"><a id="product__item__link5" class="product__item__link__brgr" href="#">Integrations</a></li>
      </ul>

      <button class="company__brgr">Company <img class="arrow__brgr__two" src="./images/icon-arrow-dark.svg" alt=""></button>
      <ul class="company__dropdown__brgr">
        <li class="company__item__brgr"><a id="company__item__link1" class="company__item__link__brgr" href="#">About</a></li>
        <li class="company__item__brgr"><a id="company__item__link2" class="company__item__link__brgr" href="#">Team</a></li>
        <li class="company__item__brgr"><a id="company__item__link3" class="company__item__link__brgr" href="#">Blog</a></li>
        <li class="company__item__brgr"><a id="company__item__link4" class="company__item__link__brgr" href="#">Careers</a></li>
      </ul>

      <button class="connect__brgr">Connect <img class="arrow__brgr__three" src="./images/icon-arrow-dark.svg" alt=""></button>
      <ul class="connect__dropdown__brgr">
        <li class="connect__item__brgr"><a id="connect__item__link1" class="connect__item__link__brgr" href="#">Contact</a></li>
        <li class="connect__item__brgr"><a id="connect__item__link2" class="connect__item__link__brgr" href="#">Newsletter</a></li>
        <li class="connect__item__brgr"><a id="connect__item__link3" class="connect__item__link__brgr" href="#">LinkedIn</a></li>
      </ul>

      <hr class="hr__brgr">

      <div class="login__buttons__brgr">
        <button class="login__brgr"><a href="" class="login__link__brgr">Login</a></button>
        <button class="signup__brgr"><a href="" class="signup__link__brgr"></a>Sign Up</a></button>
      </div>

    </div>
    </div>

    <div class="login__buttons">
      <button class="login"><a href="" class="login__link">Login</a></button>
      <button class="signup"><a href="" class="signup__link">Sign Up</a></button>
    </div>
    </nav>
    <img class="intro__img" src="./images/bg-pattern-intro.svg" alt="">

    <div class="intro">
      <h1 class="intro__title">A modern publishing platform</h1>
      <p class="intro__p">Grow your audience and build your online brand</p>
      <div class="intro__btns">
      <button class="start__intro"><a href="#" class="start__intro__link">Start for Free</a></button>
      <button class="learn__intro"><a href="#" class="learn__intro__link">Learn More</a></button>
    </div>
    </div>

  </section>
  
  <div class="future__title__container">
    <h1 class="future__title" >Designed for the future</h1>
  </div>

  <section class="future__content">

    <div class="future__img__phone">
      <img src="./images/illustration-editor-mobile.svg" alt="" class="editor__img__phone">
    </div>

    <div class="future__posts">
      <div class="post__one">
        <h2 class="post__one__h">Introducing an extensible editor</h2>
        <p class="post__one__p">Blogr features an exceedingly intuitive interface which lets you focus on one thing: creating content. 
          The editor supports management of multiple blogs and allows easy manipulation of embeds such as images, 
          videos, and Markdown. Extensibility with plugins and themes provide easy ways to add functionality or 
          change the looks of a blog.</p>
      </div>
      <div class="post__two">
        <h2 class="post__two__h">Robust content management</h2>
        <p  class="post__two__p"> Flexible content management enables users to easily move through posts. Increase the usability of your blog 
          by adding customized categories, sections, format, or flow. With this functionality, you’re in full control.</p>
      </div>
    </div>
    <div class="future__img">
      <img src="./images/illustration-editor-desktop.svg" alt="" class="editor__img">
    </div>
  </section>

  <section class="phone__section">
    <img class="phone__img" src="./images/illustration-phones.svg" alt="">

    <div class="phone__text">
      <h1 class="phone__h">State of the Art Infrastructure</h1>
      <p class="phone__p">With reliability and speed in mind, worldwide data centers provide the backbone for ultra-fast connectivity. 
        This ensures your site will load instantly, no matter where your readers are, keeping your site competitive.</p>
    </div>
  </section>

  <section class="laptop__content">

    <div class="laptop__img__container">
      <img src="./images/illustration-laptop-desktop.svg" alt="" class="laptop__img">
    </div>

    <div class="laptop__img__container__phone">
      <img src="./images/illustration-laptop-mobile.svg" alt="" class="laptop__img__phone">
    </div>

    <div class="laptop__posts">
      <div class="laptop__post__one">
        <h2 class="laptop__post__one__h">Free, open, simple</h2>
        <p class="laptop__post__one__p">Blogr is a free and open source application backed by a large community of helpful developers. It supports 
          features such as code syntax highlighting, RSS feeds, social media integration, third-party commenting tools, 
          and works seamlessly with Google Analytics. The architecture is clean and is relatively easy to learn.</p>
      </div>
      <div class="laptop__post__two">
        <h2 class="laptop__post__two__h">Powerful tooling</h2>
        <p  class="laptop__post__two__p">Batteries included. We built a simple and straightforward CLI tool that makes customization and deployment a breeze, but
          capable of producing even the most complicated sites.</p>
      </div>
    </div>
  </section>

  <div class="email__inquiry">
    <h1 class="send__email">Send Email</h1>
    <form class="contact__form" method="post" action="contactform.php">
      <input type="text" class="name" name="name" placeholder="Full name">
      <input type="text" class="mail" name="mail" placeholder="Your e-mail">
      <input type="text" class="subject" name="subject" placeholder="Subject">
      <textarea name="message" class="input" placeholder="message"></textarea>
      <button type="submit" class="send__email__btn" name="submit">SEND E-MAIL</button>
    </form>
  </div>

  <footer>

    <div class="part__one">
      <img src="./images/logo.svg" alt="">
    </div>

    <div class="part__two">
      <div class="footer__title__product">
        <h3 class="product__title">Product</h3>
        <ul class="product__footer__list">
          <li class="footer__product__item"><a href="#" class="footer__product__link">Pricing</a></li>
          <li class="footer__product__item"><a href="#" class="footer__product__link">Overview</a></li>
          <li class="footer__product__item"><a href="#" class="footer__product__link">Marketplace</a></li>
          <li class="footer__product__item"><a href="#" class="footer__product__link">Features</a></li>
          <li class="footer__product__item"><a href="#" class="footer__product__link">Integrations</a></li>
        </ul>
      </div>
    </div>
    
    <div class="part__three">
      <div class="footer__title__company">
        <h3 class="company__title">Company</h3>
        <ul class="company__footer__list">
          <li class="company__product__item"><a href="#" class="footer__company__link">About</a></li>
          <li class="company__product__item"><a href="#" class="footer__company__link">Team</a></li>
          <li class="company__product__item"><a href="#" class="footer__company__link">Blog</a></li>
          <li class="company__product__item"><a href="#" class="footer__company__link">Careers</a></li>
        </ul>
      </div>
    </div>

    <div class="part__four">
      <div class="footer__title__connect">
        <h3 class="connect__title">Connect</h3>
        <ul class="connect__footer__list">
          <li class="connect__product__item"><a href="#" class="footer__connect__link">Contact</a></li>
          <li class="connect__product__item"><a href="#" class="footer__connect__link">Newsletter</a></li>
          <li class="connect__product__item"><a href="#" class="footer__connect__link">LinkedIn</a></li>
        </ul>
      </div>
    </div>


  </footer>
  <script src="./app.js"></script>
</body>
</html>