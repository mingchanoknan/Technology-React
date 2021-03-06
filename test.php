<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>React</title>
    <link rel="icon" href="1611079.png" type="image/x-icon" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css"
      integrity="sha512-IgmDkwzs96t4SrChW29No3NXBIBv8baW490zk5aXvhCD8vuZM3yUSkbyTBcXohkySecyzIrUwiF/qV0cuPcL3Q=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Mitr&display=swap"
      rel="stylesheet"
    />

    <style>
      body,
      button {
        font-family: "Mitr", sans-serif;
      }

      .color-nav {
        background-color: #b494c1;
      }
      .logo {
        background-color: #6b3d7a;
      }
      .logo:hover {
        background-color: #6b3d7a !important;
      }
      .has-text-weight-medium {
        color: #00d8ff;
      }
      .imageStyle {
        width: 256px;
        height: 256px;
      }
      .color-text-nav {
        color: white !important;
      }
      .manu-nav-1:hover {
        background-color: #f7abc7 !important;
        color: black !important;
        border-radius: 10px;
        box-shadow: 2px 2px 4px #47394d;
      }
      .manu-nav-2:hover {
        background-color: #fde780 !important;
        color: black !important;
        border-radius: 10px;
        box-shadow: 2px 2px 4px #47394d;
      }
      .manu-nav-3:hover {
        background-color: #c5ea8b !important;
        color: black !important;
        border-radius: 10px;
        box-shadow: 2px 2px 4px #47394d;
      }
      .bntB:hover{
background-color: #fd91b9 !important;
      }
      .color-bnt:hover{
        background-color: #50def7;
      }
      .center {
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .color-bnt {
        background-color: #00d8ff;
      }
      .is-white {
        color: white;
      }
      .has-text-black-bis {
        text-shadow: 0px 4px 4px rgba(255, 255, 255, 0.5);
      }
      mark {
        background-color: rgba(255, 255, 0, 0.295);
      }
      .topic {
        color: #06c0e0;
      }
      .footer {
        background-color: #aeeee7 !important;
        padding: 1em 0.75em 1em !important;;
      }
    </style>
  </head>
  <body>
    <nav
      class="navbar color-nav is-fixed-top"
      role="navigation"
      aria-label="main navigation"
    >
      <div class="navbar-brand ml-6">
        <a class="navbar-item logo" href="index.html">
          <img src="1611079.png" />
          <p class="is-size-4 has-text-weight-medium ml-1">React</p>
        </a>
        <a
          role="button"
          class="navbar-burger"
          aria-label="menu"
          aria-expanded="false"
          data-target="navbarBasicExample"
        >
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>

      <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
          <a
            class="navbar-item color-text-nav m-2 manu-nav-1"
            href="what_is_react.html"
          >
            ?????????????????????
          </a>

          <a
            class="navbar-item color-text-nav m-2 manu-nav-2"
            href="index.html"
          >
            ???????????????????????????
          </a>
          <a
            class="navbar-item color-text-nav m-2 manu-nav-3"
            href="index.html"
          >
            ????????????????????????????????????????????????
          </a>
        </div>

        <div class="navbar-end">
          <div class="navbar-item">
            <div class="buttons">
              <a class="button is-info is-light">
                <strong>?????????????????????</strong>
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <div class="container is-fluid" style="background-color: #6b3d7aec">
      <center>
        <figure class="image imageStyle" style="justify-content: center">
          <img class="pt-6" src="1611079.png" />
        </figure>
      </center>
      <h1
        class="center m-5 is-size-1 has-text-black-bis has-text-weight-semibold"
      >
        React ??????????????????????
      </h1>
      <div class="columns is-mobile is-multiline is-centered pb-5">
        <div class="column is-narrow center">
          <p
            class="bd-notification is-primary"
            style="text-decoration-line: underline"
          >
            <a id="scroll" class="is-white">?????????????????????????????????????????????</a>
          </p>
        </div>
        <div class="column is-narrow">
          <p class="bd-notification is-primary">
            <button class="button color-bnt" onclick="location.href='/what_is_react.html';">React ??????????????????????</button>
          </p>
        </div>
      </div>
    </div>
    <div class="m-3">
      <div class="box m-6 p-6" id="start">
        <p>
          <strong class="is-size-3 topic">React</strong>
          ??????????????????????????????????????????????????????????????????????????????????????? ??? ??????????????????????????????
          ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? React
          ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????
          React ????????????????????? ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
          ?????????????????????????????????????????? ?????????
          <mark>???????????????????????????????????????????????????????????? React ????????????????????????????????????????????????????????????????</mark>
        </p>
        <p class="is-size-3 center mt-4 has-text-black">
          " ????????????????????????????????????????????????????????? "
        </p>
        <mark class="is-size-4"> ???????????????????????????????????????????????????????????? </mark>
        <p class="ml-6">
          ????????????????????????????????????????????????????????????????????????????????? ????????? HTML, CSS, JavaScript, PHP (????????????????????????
          Backend ?????????????????????????????????????????????) ???????????????????????? ??????????????????????????????????????????????????????????????????????????? Server???
        </p>
        <center>
          <img
            class="m-4"
            style="
              width: 35em;
              height: auto;
              border-radius: 20px;
              box-shadow: 4px 4px 10px rgba(24, 23, 23, 0.5);
            "
            src="https://miro.medium.com/max/1400/1*IuunkDUaDY7sOHGyLKlN7g.png"
          />
        </center>
        <ol>
          <li>User ???????????????????????????????????????????????????????????????????????? Server</li>
          <li>
            Server (PHP) ?????????????????????????????????????????????????????? Backend ????????? User
            ?????????????????????????????????????????????????????????????????????????????????????????? ???????????? ??????????????????????????????????????? 10 ????????????????????????????????????
          </li>
          <li>
            Server ?????????????????????????????????????????????????????????????????????????????? Database (???????????? MySQL)
            ???????????????????????????????????????????????????????????? HTML ????????????????????????????????????
          </li>
          <li>Server ????????? HTML ???????????????????????? User</li>
        </ol>
        <p class="is-size-5 ml-6 mt-5"><u>???????????????</u>?????????????????????????????????????????? :</p>
        <li>
          <strong>????????? Infrastructure ??????????????????</strong> ??? ????????????????????????????????? Web Hosting
          ??????????????????????????? PHP & MySQL ????????????????????????????????????????????????????????????????????????
          ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ??????????????????????????????????????????
        </li>
        <li>
          <strong>???????????????????????? ??? ??????????????????????????????????????????????????????</strong> ??? ????????????????????????????????????
          WordPress ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ????????? WooCommerce
          ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? Internet ?????????
        </li>
        <p class="is-size-5 ml-6 mt-3"><u>?????????????????????</u>?????????????????????????????????????????? :</p>
        <li>
          <strong>Server ???????????????????????????</strong> ??? ????????????????????????????????????????????????????????? Flow
          ???????????????????????????????????????????????? ??????????????????????????????????????????????????????????????? HTML ???????????????????????????????????????????????? User
          ???????????????????????? ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????
        </li>
        <p class="mt-4">
          ???????????????????????????????????????????????????????????????????????? ??????????????? Server ??????????????????????????????
          ??????????????????????????????????????????????????????????????????????????????????????? JavaScript ??????????????????????????? Web Browser
          ??????????????????????????? User ????????????????????? ????????????????????? Server ?????????????????????????????????????????????????????????????????????????????????????????? ???
          ????????? JavaScript ??????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????
        </p>

        <div class="mt-5">
          <mark class="is-size-4"> ???????????????????????????????????????????????????????????? </mark>
        </div>
        <p>
          &emsp;&emsp;??????????????????????????????????????????????????????????????????????????????????????? AJAX ??????????????? ????????? JavaScript
          ????????? Request ??????????????????????????????????????? Server ???????????? Server
          ??????????????????????????????????????????????????????????????????????????????????????? ?????????????????????????????? JavaScript
          ???????????????????????????????????????????????????????????? ???????????????????????????????????? ??????????????????????????????????????????????????? Server ??????????????? Web
          Browser ???????????? ?????????????????????????????????????????? ??????????????????????????????????????????????????????????????? Web Browser ????????????????????????
          ?????????????????????????????????????????????????????? Library ???????????????????????????????????????????????????????????????????????????
          ????????????????????????????????????????????????????????????????????????????????? (??????????????????????????? Spaghetti Code =
          ????????????????????????????????????????????????????????????????????????????????????????????????????????????) JavaScript Framework ????????????????????????
          ???????????? React ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
          ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ?????????????????????
          ????????????????????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????:
        </p>
        <center>
          <img
            class="m-4"
            style="
              width: 35em;
              height: auto;
              border-radius: 20px;
              box-shadow: 4px 4px 10px rgba(24, 23, 23, 0.5);
            "
            src="https://miro.medium.com/max/1400/1*7U9RxbCaGEspT3ATXUr5lg.png"
          />
        </center>
        <ol>
          <li>User ?????????????????????????????????????????????</li>
          <li>
            ???????????? HTML, CSS, JS ?????????????????????????????? ???????????? JavaScript ???????????????????????????????????????????????????????????????
            Server
          </li>
          <li>Server ?????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????????</li>
          <li>Database ?????????????????????????????????????????????????????? Server</li>
          <li>
            Server ?????????????????????????????????????????????????????? Browser ????????? API ???????????????????????????????????????????????????????????? JSON
            ??????????????? JavaScript ??????????????????????????????????????????????????????????????????????????????
          </li>
          <li>JavaScript ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</li>
        </ol>
        <p class="is-size-5 ml-6 mt-5"><u>???????????????</u>?????????????????????????????????????????? :</p>

        <li>
          <strong>?????????????????????????????????????????????</strong> ??? ???????????? User ????????????????????????????????? ???????????????????????????
          HTML, CSS, JavaScript ???????????????????????????????????????????????? ???????????????????????? JavaScript
          ?????????????????????????????????????????????????????? ??? ????????? Server ????????????????????????
          ???????????????????????????????????????????????????????????????????????????????????????????????????????????????
        </li>
        <li>
          <storng>??????????????????????????????????????????????????????????????????</storng> ??? ??????????????????????????????????????????????????????????????????
          JavaScript ???????????? Server ????????????????????? (????????? NodeJS) ????????????????????????????????????????????????????????????????????????
          Backend ???????????? PHP, Ruby, Python ????????? ????????????????????????????????????????????? ?????????????????????????????????????????????
          Backend ????????????????????????????????? ????????????????????????????????????????????????????????????????????? NodeJS ?????????????????????
        </li>
        <li>
          <strong>Library ???????????? ??? ????????????</strong> ??? ???????????????????????????????????????????????????????????? Library
          ???????????? ??? ?????????????????????????????????????????? ?????????????????????????????????????????????????????????????????????????????????????????????????????????
          ?????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????
        </li>
        <p class="is-size-5 ml-6 mt-5"><u>?????????????????????</u>?????????????????????????????????????????? :</p>
        <li>
          <strong>????????????????????????????????????????????????????????????</strong> ???
          ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
          ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? Server ?????????????????????
          ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
        </li>
        <li>
          <strong>Library ???????????? ??? ????????????</strong> ??? ???????????????????????????????????????????????????????????????????????????????????????
          ???????????????????????????????????????????????? Library ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ???
          ????????????????????? ????????????????????????????????????????????????????????????
        </li>
      </div>
    </div>
    <div class="boxText center has-background-success-light m-4 p-3">
                      <?php echo 'class Hello extends React.Component {'.'<br>'. 'constructor(){'.'<br>'.'&emsp;&emsp;'. 'super();<br>&emsp;&emsp;this.state = {<br>&emsp;&emsp;&emsp;&emsp;message: "my friend (from state)!"<br>'.'&emsp;&emsp;};'.'<br>}';
                      echo '<br>render(){<br>&emsp;&emsp;'.
                          htmlspecialchars('<!-- ... existing HTML ... -->!').'<br>{<br>{';
                      ?>
                </div>
                <div class="boxText center has-background-grey-light m-4 p-3">
                <?php 
                echo  htmlspecialchars('<!-- ... existing HTML ... -->').'<br>'.
                'ReactDOM.render('.'<br>&emsp;&emsp;'.
                htmlspecialchars('<h1>Hello, world!</h1>,').'<br>&emsp;&emsp;'.
                htmlspecialchars("document.getElementById('root')").'<br>);';


?>
                </div>
    <!-- ????????????????????????????????? -->
    <div class="mr-6 mb-6" style="display: flex; justify-content: flex-end">
      <button
        class="button is-size-5 bntB"
        style="
          background-color: #f7abc7;
          box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.45);
          border-radius: 20px;
        "
        onclick="location.href='/what_is_react.html';">
        React ?????????????????????
      </button>
    </div>
    
    <footer class="footer">
      <div class="content has-text-centered">
        <img src="logo.png" width="50" height="50" />
        <p>
          <strong>????????????????????????</strong> ?????????????????? ???????????????????????? ???????????????????????? <strong>????????????????????????????????????</strong> 63070027 <br />
          <strong>????????????????????????????????????????????????</strong>
        </p>
        <a href="https://www.facebook.com/tarunee.madee.5" target="_blank"><img src="facebook.png" width="40" height="40"></a>
        <a href="https://www.instagram.com/bunny_bell3/" target="_blank"><img src="instagram.png" width="40" height="40"></a>
      </div>
    </footer>
  </body>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      // Get all "navbar-burger" elements
      const $navbarBurgers = Array.prototype.slice.call(
        document.querySelectorAll(".navbar-burger"),
        0
      );

      // Check if there are any navbar burgers
      if ($navbarBurgers.length > 0) {
        // Add a click event on each of them
        $navbarBurgers.forEach((el) => {
          el.addEventListener("click", () => {
            // Get the target from the "data-target" attribute
            const target = el.dataset.target;
            const $target = document.getElementById(target);

            // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
            el.classList.toggle("is-active");
            $target.classList.toggle("is-active");
            $target.style.backgroundColor = "#b494c1";
          });
        });
      }
    });

    $(document).ready(function () {
      $("#scroll").click(function () {
        $("html, body").animate(
          {
            scrollTop: $("#start").offset().top - 10,
          },
          1000
        );
      });
    });
  </script>
</html>
