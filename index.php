
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="dist/css/main.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Portfolio</title>
  </head>
  <body>
      <?php
    if (isset($_POST["email"])) {
      $username = $_POST["name"];
      $email = $_POST["email"];
      $message = $_POST["message"];

      $to = "ezebriones01@gmail.com";
      $subject = $message;

      $message = "Name: {$username} Email: {$email}  Message: " . $message;

      // Always set content-type when sending HTML email
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

      // More headers
      $headers .= 'From: Ezequiel';

      $mail = mail($to,$subject,$message,$headers);

      if ($mail) {
        echo "<script>alert('Mail Send.');</script>";
      }else {
        echo "<script>alert('Mail Not Send.');</script>";
      }
    }
  ?>
    <header class="header">
      <nav class="nav">
        <div class="nav__container">
          <ul>
            <li>
              <a href="#contact" id="nav__CTA" class="nav__CTA">
                <span></span>
                <span></span>
                <span></span>
                Get in Touch!
              </a>
            </li>
            <li><a href="#about">About me</a></li>
            <li><a href="#work">Projects</a></li>
          </ul>
        </div>
      </nav>
      <aside>
        <div class="SM">
          <ul>
            <li>
              <a href="" target="_blank"><i class="fab fa-twitter"></i></a>
            </li>
            <li>
              <a href="https://github.com/EzequielBriones" target="_blank"><i class="fab fa-github"></i></a>
            </li>
            <li>
              <a href="https://www.linkedin.com/in/ezequiel-briones/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </li>
          </ul>
        </div>
      </aside>
      <div class="landing">
        <div class="landing__info">
          <h1 class="landing__name">Ezequiel Briones</h1>
          <h3 class="landing__job">Front-end web developer</h3>
          <h3 class="landing__desc">
            I'm a self-taught developer specialized in front-end Single Page Applications, everything I know I learned from scrapping courses and
            documents from the internet. In this page you can see my work and contact me pressing the button on top. Feel free to contact me in any
            way! I look forward to work with you.
          </h3>
        </div>
        <div class="landing__svg"></div>
      </div>
    </header>

    <section class="about" id="about">
      <div class="about__container">
        <h2 class="title">About me</h2>
        <p class="about__info">
          Hello! My name is Ezequiel, I'm a developer located in Buenos Aires, Argentina. As a person that's starting his carreer in web development I
          have a strong will to learn and be better. <br />
          <br />
          All my knowledge currently comes from different sources in the web, such as Udemy, YouTube, free sources like StackOverflow, w3schools, and
          of course Google. <br /><br />
          I've developed some great projects in the hands of great professionals. These are my first steps in web development and I'm sure you will
          see my improvement trough each one once you see them. <br /><br />
          I consider myself and avid learner, if I have an issue I'll make sure to fix it. I'm not ashamed to ask for help when I get stuck, which I
          believe makes me a good team-worker. I hope that what I have to show you here proves me right and that I'll be getting news from you soon!
        </p>
      </div>

      <div class="about__knowledge">
        <h2 class="about__knowledge-title">My knowledge</h2>
        <div class="about__icons">
          <ul>
            <li>HTML5</li>
            <li>GIT</li>
            <li>CSS3</li>
            <li>French- Beginner</li>
            <li>JavaScript</li>
            <li>English- Bilingual</li>
            <li>SASS</li>
            <li>Spanish- Native</li>
            <li>UX/UI</li>
          </ul>
        </div>
      </div>
    </section>

    <section class="work" id="work">
      <h1 class="title">My projects</h1>
      <div class="work__container">
        <div class="work__photo work__photo--1"></div>
        <div class="work__num work__num--1">01</div>
        <div class="work__desc work__desc--1">
          <h2>Digisolve</h2>
          <br />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, reiciendis dolorum voluptas libero eligendi ut ullam provident consequuntur
            culpa eveniet, id reprehenderit velit harum maiores ex alias quisquam nostrum? Quam, at quia! Libero labore aliquid repellendus cumque
            quisquam itaque maxime.
          </p>
          <ul>
            <li>
              <a href="" target="_blank"><i class="fab fa-github"></i></a>
            </li>
            <li>
              <a href="https://ezequielbriones.github.io/digisolve/" target="_blank"><i class="fas fa-globe"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="work__container">
        <div class="work__photo work__photo--2"></div>
        <div class="work__num">02</div>
        <div class="work__desc">
          <h2>Bizwizz</h2>
          <br />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, reiciendis dolorum voluptas libero eligendi ut ullam provident consequuntur
            culpa eveniet, id reprehenderit velit harum maiores ex alias quisquam nostrum? Quam, at quia! Libero labore aliquid repellendus cumque
            quisquam itaque maxime.
          </p>
          <ul>
            <li>
              <a href="" target="_blank"><i class="fab fa-github"></i></a>
            </li>
            <li>
              <a href="https://ezequielbriones.github.io/Bizwizz/" target="_blank"><i class="fas fa-globe"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="work__container">
        <div class="work__photo work__photo--3"></div>
        <div class="work__num">03</div>
        <div class="work__desc">
          <h2>Lakeview</h2>
          <br />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, reiciendis dolorum voluptas libero eligendi ut ullam provident consequuntur
            culpa eveniet, id reprehenderit velit harum maiores ex alias quisquam nostrum? Quam, at quia! Libero labore aliquid repellendus cumque
            quisquam itaque maxime.
          </p>
          <ul>
            <li>
              <a href="" target="_blank"><i class="fab fa-github"></i></a>
            </li>
            <li>
              <a href="https://ezequielbriones.github.io/Lakeview/" target="_blank"><i class="fas fa-globe"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="contact" id="contact">
      <h1 class="title">Contact me</h1>
      <div class="contact__form">
        <div class="contact__container">
          <!-- aca va la form -->
          <form class="form" action="" method="POST">
            <h3 class="subtitle">I'd love to hear from you!</h3>
            <div class="input">
              <input type="text" name="name" class="input__in input" />
              <label class="input__label" for="">Full name</label>
              <span class="input__span">Full name</span>
            </div>
            <div class="input">
              <input type="text" name="email" class="input__in input" />
              <label class="input__label" for="">Email</label>
              <span class="input__span">Email</span>
            </div>
            <div class="input">
              <textarea name="message" class="input__in textarea" id="textarea"></textarea>
              <label class="input__label input__label-textarea" for="">Message</label>
              <span class="input__span">Message</span>
            </div>
            <input type="submit" value="Send" class="contact__btn" />
          </form>
        </div>
        <div class="contact__info">
          <div class="contact__info-cont">
            <h4 class="subtitle contact__info-sub">You can also find me here!</h4>
            <p class="contact__info-bullets"><i class="fas fa-envelope"></i>ezebriones01@gmail.com</p>
            <p class="contact__info-bullets"><i class="fas fa-phone"></i>(+54) 1169539945</p>
            <p class="contact__info-bullets"><i class="fas fa-map-marker-alt"></i>Buenos Aires, Argentina.</p>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="footer__container">
        <p class="footer__text">This page was designed and built by Ezequiel Briones.</p>
        <p class="footer__copyright">fecha etc etc etc</p>
      </div>
    </footer>
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="src/index.js"></script>
  </body>
</html>
