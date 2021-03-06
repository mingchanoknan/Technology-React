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
    
      html {
        background-color: #e0fafc;
        position:relative; 
  min-height: 100%;

      }

      button,
      body {
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
      .manu-nav-1 {
        background-color: #f7abc7 !important;
        color: black !important;
        border-radius: 10px;
        box-shadow: 2px 2px 4px #47394d;
      }
      .manu-nav-1:hover {
        background-color: #f7abc7 !important;
        color: black !important;
        border-radius: 10px;
        box-shadow: 2px 2px 4px #47394d;
        cursor: default;
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
        position: absolute;
        right: 0;
bottom: 0;
  width: 100%;
        background-color: #aeeee7 !important;
        padding: 1em 0.75em 1em !important;
      }
      .accordion {
        
        color: #444;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 1s;
      }
      .bnt1{
        background-color: #C5EA8B;
      }
      .bnt2{
        background-color: #F7ABC7;
      }

      .bnt1:hover{
        background-color: #acee76;
      }
      .bnt2:hover{
        background-color: #f5a5b9;
      }
      .text1{
        background-color: #C5EA8B80;
      }
      .text2{
        background-color: #F7ABC780;
      }

      .panel {
        padding: 0 18px;
        display: none;
       
        overflow: hidden;
      }
    </style>
  </head>
  <body class="background">
    <nav
      class="navbar color-nav is-fixed-top"
      role="navigation"
      aria-label="main navigation"
    >
      <div class="navbar-brand ml-6">
        <a class="navbar-item logo" href="main.html">
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
          <a class="navbar-item color-text-nav m-2 manu-nav-1">
            ?????????????????????
          </a>

          <a
            class="navbar-item color-text-nav m-2 manu-nav-2"
            href="work.php"
          >
            ???????????????????????????
          </a>
          <a
            class="navbar-item color-text-nav m-2 manu-nav-3"
            href="web_example.html"
          >
            ????????????????????????????????????????????????
          </a>
        </div>

        <div class="navbar-end">
          <div class="navbar-item">
            <div class="buttons">
              <a class="button is-info is-light" href="source.html">
                <strong>?????????????????????????????????????????????????????????</strong>
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <div class="container is-fluid mt-6 pt-4 ">
      <p class="is-size-2 has-text-weight-semibold">??????????????????</p>
      <button class="accordion button is-large is-fullwidth bnt1 mt-4" onclick="check()">React ?????????????????????</button>
      <div class="panel text1">
        <div class="mb-4">
        <p class="mt-4">
          &emsp;&emsp;<strong class="is-size-5">React</strong> ????????? <b class="has-text-link">JavaScript Library</b> ??????????????????????????????????????????????????? UI ?????????????????? <b class="has-text-link">Facebook ????????????????????????????????????????????????</b>??? ???????????????????????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????????????????? Facebook.com ??????????????? React ????????????????????????????????? ???????????? React ?????????????????? SPA Framework (Single Page Application) ??????????????? Angular ?????????????????????????????????????????????????????? V ?????? MVC (Model View Controller) ???????????????????????? ??????????????????????????? render ????????? Component ???????????? Element ??????????????? ?????????????????? HTML ????????????????????????
          ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????? ??????????????????????????? action ??????????????? ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????
          ?????????????????????????????? React ??????????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????? SPA ???????????????????????????????????????????????????????????????????????? ???????????????????????? React ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????? ???????????????????????????????????? component ???????????????????????????????????????????????????????????????????????????????????????????????? ?????????????????????????????????????????????????????? ?????? component ???????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????? ?????????React ???????????????????????? Javascript Framework ???????????????????????????????????? Compile Code ??????????????????????????????????????????????????? Html+Css+Javascript ?????????????????????????????????????????????????????????????????? Browser ?????????????????????????????? ??????????????????????????? React ??????????????????????????? NodeJS ?????????????????????????????? Compile Code 
        <br><br><strong class="is-size-5">???????????????????????? React</strong>
        <li><strong>????????????????????????????????????????????????????????????????????????????????? API</strong> ??? ???????????????????????????????????????????????????????????? API ?????????????????????????????? (???????????????????????? ??? ???????????? Facebook, Google, Twitter etc. ???????????? API ???????????????????????????????????????) ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? API ?????????????????? ???????????????????????????????????????????????????????????????????????????????????????</li>
        <li><strong>Concept ??????????????????????????????</strong> ??? ????????????????????????????????? React ?????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????????????????? ???</li>
      <li><strong>????????????????????????</strong> ??? React ???????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</li>
      <li><strong>?????????????????????????????????????????????????????????????????????</strong> ??? ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? React ?????????????????????????????? ????????????????????? ??? ????????????????????????????????? React ?????????????????????????????????????????????</li>
      <li><strong>??????????????????????????????????????????????????????</strong> ??? ????????????????????????????????????????????????????????????????????????????????????????????? React ????????? React Native ???????????????????????????????????????????????? JavaScript ???????????????????????????????????????????????? App ????????? Native ??????????????????????????? Android ????????? iOS ???????????????????????????????????????????????????????????????????????? Facebook ??????????????????</li>
    <li><strong>??????????????????????????? ??????????????????????????????????????????????????????</strong> ??? ?????? Best Practice ???????????????????????????????????????????????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????????????????? ????????????????????????????????? ????????????????????????????????????????????? React ????????????????????? </li>
    <li><strong>Community ????????????????????????????????????</strong> ??? ???????????????????????????????????????????????????????????????????????????????????????????????????????????? ?????????????????????????????????????????????????????????????????? (ReactJS Developers Thailand ????????????????????????????????????????????????????????????????????????????????????????????? React Bangkok) ??????????????????????????????????????? ?????????????????????????????????????????? Meetup React Melbourne ?????????????????? ?????????????????????????????????????????????????????????????????????????????????????????? 200+ ????????????</li>
    <br><strong class="is-size-5">?????????????????????????????? React</strong>
    <li><strong>Documentation ????????????????????????</strong> ??? Documentation ????????????????????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????????????????????????????????????????? ??? ???????????????????????????????????????????????? React</li>
    <li><strong>????????????????????? JavaScript ????????????????????????????????????</strong> ??? ?????????????????????????????????????????????????????????????????? PHP ????????????????????????????????????????????????????????????????????????????????????</li>
  </p>
        </div>
      </div>

      <button class="accordion button is-large is-fullwidth mt-5 bnt2" onclick="check()">???????????????????????????????????????????????????????????????????????????????????? React </button>
      
      <div class="panel text2 mb-4">
        <div class="mb-4">
        <p class="mt-4">
          ????????????????????????????????????????????????????????????????????????????????????????????? React ???????????? ??? ??????????????? 3 Concept ????????????????????????
          <ol class="ml-3">
            <li><strong>Component</strong> ??? ???????????????????????? ??? ?????????????????????????????????????????????????????? Component</li>
            <li><strong>State</strong> ??? ????????????????????????????????????????????? Component ??????????????????????????? ????????????????????????????????? State</li>
            <li><strong>Props</strong> ??? ??????????????????????????????????????????????????????????????? Component ?????????????????????????????????????????????????????? ????????????????????????????????? Props (Properties)</li>
          </ol>
          <center>
            <img
              class="m-4"
              style="
                width: 30em;
                height: auto;
                border-radius: 20px;
                box-shadow: 4px 4px 10px #a15370a4;
              "
              src="https://miro.medium.com/max/1400/1*w5cQdoXjQU2W1TqV1en2Hg.png"
            />
          </center>
          <li><strong class="is-size-3 mb-3 ">Component</strong></li><br>????????????????????????????????????????????????????????? HTML ????????????????????? React ?????????????????????????????????????????????????????? JSX ????????????????????????????????????????????????????????? ?????????????????????????????????????????? HTML ????????? ?????????????????????????????????????????????????????????????????????????????????????????? JavaScript ????????????????????? HTML ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????<br>
          ??????????????????????????????????????????????????? <b class="has-text-link">class React-Component</b> ?????????????????????????????? <b class="has-text-link">componente(???Hello world???)</b>
          <div class="center has-background-success-light m-4 p-3">
            <?php echo htmlspecialchars('class Hello extends React.Component {').'<br>'. htmlspecialchars('render() {').'<br>'.'&emsp;&emsp;&emsp;&emsp;'. htmlspecialchars('return <h1> Hello wprld!</h1>;').'<br>{<br>{';
            ?>
          </div>
          ?????????????????????????????????????????? <strong>method</strong> ?????????????????? <strong>component</strong> ????????????????????????????????????????????????????????????????????????????????? <strong>component</strong> ???????????? ??????????????????????????????????????????????????????????????? <b class="has-text-danger">"render()"</b> ??????????????????????????????????????? <b class="has-text-danger">render()</b> ?????? <strong>return</strong> ???????????????????????????????????????????????????????????? <strong>React</strong> ?????????????????????????????????????????? ???????????????????????????????????????????????? ???????????????????????????????????????????????? <strong>React</strong> ??????????????????????????? <string>Hello world!</string> ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? <b class="has-text-danger">ReactDOM.render()</b>
          <div class="center has-background-success-light m-4 p-3">
            <?php echo 'ReactDOM.render('.'<br>'. '&emsp;&emsp;&emsp;'.htmlspecialchars('<Hello/>,').'<br>'.'&emsp;&emsp;&emsp;'. htmlspecialchars('document.getElementById("root")').'<br>);';
            ?>
            
          </div>
          ??????????????????????????????????????????????????????????????? <strong>Component</strong> ???????????? <b class="has-text-danger"><?php echo htmlspecialchars('<Hello/>') ;?></b> ?????????  <b class="has-text-danger">div id="root"</b> ????????????????????????????????????????????????
          <center>
            <img class="m-4"
            style="
              width: 30em;
              height: auto;
              border-radius: 10px;
              box-shadow: 2px 2px 6px #a15370a4;
            " src='helloworld.png'>
          </center>
          ?????? syntax ????????? html ?????????????????????????????????????????? <b class="has-text-link">???????????? h1</b> ????????? <b class="has-text-link">???????????? Hello</b> ?????????????????????????????? <strong class="is-size-5">JSX</strong> ?????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????? html ?????????????????????????????????????????????????????? ??????????????????????????????????????????????????????
          <b class="has-text-danger">ReactDOM.render()</b> ????????????????????????
        </p>
        <p class="mt-5 has-text-grey">
          <p class="is-size-4 mb-3">?????????????????????????????????????????????</p>
          ????????????????????????????????????????????????????????????????????? <b>React ????????? props ????????? state</b> ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????????????????????????????????????????????????????? React

          <br><br>?????????????????????????????????????????????????????????????????? ???state" ???????????????????????? private ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? props ????????? external ???????????????????????????????????????????????????????????? Component ????????????????????????????????????????????????????????????????????? Component ?????????????????????????????? ???????????????????????????????????????????????????????????????????????????
          
          <br><br><b>Component ????????????????????????????????????????????? state ?????????????????????????????????????????? ?????????????????????????????? props ???????????????????????????????????????????????????????????????????????????</b></p>
      <p class="mt-5">
        <li><strong class="is-size-3 mb-3 ">Props</strong></li><br>
        ?????????????????????????????? Hello ?????????????????????????????? static ????????? ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? Hello World ???????????? ???????????????????????????????????? React ??????????????????????????????????????????????????????????????????????????????????????????????????? (reusability) ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????????

<br><br>???????????????????????????????????????????????????????????????????????????????????????????????????????????? ??????????????????????????? props ???????????? message ???????????????????????? ?????????????????????????????? Hello
<div class="center has-background-success-light m-4 p-3">
  <?php echo htmlspecialchars('ReactDOM.render(').'<br>'. htmlspecialchars('<Hello massage="my friend"/>').'<br>&emsp;&emsp;&emsp;'. htmlspecialchars('document.getElementById("root")').'<br>);';
  ?>
</div>
???????????? <strong>props</strong> ????????????????????? message ???????????????????????? <b class="has-text-link">"my friend"</b> ????????? <b class="has-text-link">component hello</b> ????????????????????????????????????  <b class="has-text-danger">this.props.message</b>
      </p>
      <div class="boxText center has-background-success-light m-4 p-3">
        <?php echo htmlspecialchars('class Hello extends React.Component {').'<br>'. htmlspecialchars('render() {').'<br>'.'&emsp;&emsp;&emsp;&emsp;'. htmlspecialchars('return <h1>Hello {this.props.massage}!</h1>;').'<br>}<br>}';
        ?></div>
        <p>?????????????????????????????????????????????????????????????????????</p>
        <center>
          <img class="m-4"
          style="
            width: 30em;
            height: auto;
            border-radius: 10px;
            box-shadow: 2px 2px 6px #a15370a4;
          " src='hellomyfriend.png'>
        </center>

        <p>????????????????????????????????????????????????????????????????????????????????? <b class="has-text-danger">{this.props.message}</b> ???????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????? <strong class="is-size-5">JSX</strong> ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? <b class="has-text-link">JavaScript</b> ???????????????????????????????????????????????????????????? <b class="has-text-link">escaping</b>
          <br><br>
                    ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                    <br><br>
                    ???????????????????????????????????? ?????????????????????????????????????????????????????????????????????????????????????????? <strong>component</strong> ?????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????? <strong>state</strong> ?????????!</p>
                    <p class="mt-5">
                      <li><strong class="is-size-3 mb-3 ">State</strong></li><br>

                      ???????????????????????????????????????????????????????????????????????????????????????????????? React ?????????????????????????????? <b class="has-text-danger">component-state</b> ????????????????????????????????????????????? props ????????????????????????????????????????????????????????????????????????????????? ??????????????????????????? <b class="has-text-danger">state</b> ???????????????
<br><br>
????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????????????? <b class="has-text-danger">component-state</b>
<br><br>
<p class="has-text-centered is-size-5"><strong>Initializing state (????????????????????????????????????????????????????????? state)</strong></p><br><p>
???????????????????????????????????????????????????????????????????????? <b class="has-text-danger">state</b> ??????????????????????????????????????? <b class="has-text-danger">Constructor()</b> ????????????????????? state ?????????????????????????????? object ????????????????????????????????????????????????????????? message ??????????????? "my friend (from state)!" ??????????????????
                    <div class="boxText center has-background-success-light m-4 p-3">
                      <?php echo 'class Hello extends React.Component {'.'<br>'. 'constructor(){'.'<br>'.'&emsp;&emsp;'. 'super();<br>&emsp;&emsp;this.state = {<br>&emsp;&emsp;&emsp;&emsp;message: "my friend (from state)!"<br>'.'&emsp;&emsp;};'.'<br>}';
                      echo '<br>render(){<br>&emsp;&emsp;'.
                          htmlspecialchars('return <h1>Hello {this.state.message}!</h1>').'<br>{<br>{';
                      ?>
                </div>
                ????????????????????????????????????????????? <b class="has-text-danger">state()</b> ?????????????????????????????????????????? super() ?????? <b class="has-text-danger">constructor</b> ???????????? ????????????????????????
                <b class="has-text-danger">this</b> ???????????????????????????????????????????????????????????? <b class="has-text-danger">super()</b> ?????????????????????</p>
                    </p></div>
        
                  </div>
       
    <!-- ????????????????????????????????? -->
    <div class="mr-6 mb-6 mt-6" style="display: flex; justify-content: flex-end">
      <button
        class="button is-size-5 bntB"
        style="
          background-color: #FDE780;
          box-shadow: 4px 4px 8px #899ea0;
          border-radius: 20px;
        "
        onclick="location.href='work.php';">
        ??????????????????????????? React
      </button>
    </div>
    </div>
    <footer class="footer" id="footer">
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
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
          panel.style.display = "none";
        } else {
          panel.style.display = "block";
        }
      });
      
    }

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

    function check(){
      document.getElementById("footer").style.position = "relative";
    }
  </script>
</html>
