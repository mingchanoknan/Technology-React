<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>React</title>
  <link rel="icon" href="1611079.png" type="image/x-icon" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css" integrity="sha512-IgmDkwzs96t4SrChW29No3NXBIBv8baW490zk5aXvhCD8vuZM3yUSkbyTBcXohkySecyzIrUwiF/qV0cuPcL3Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet" />
  <style>
    .is-active2 {
      background-color: #f7abc7 !important;
      color: black !important;
      border-radius: 10px;
      box-shadow: 2px 2px 6px black;
    }

    body,
    button {
      font-family: "Mitr", sans-serif;
    }

    .column {
      padding: 0px !important;
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

    .manu-nav-2 {
      background-color: #fde780 !important;
      color: black !important;
      border-radius: 10px;
      box-shadow: 2px 2px 4px #47394d;
    }

    .manu-nav-2:hover {
      background-color: #fde780 !important;
      color: black !important;
      border-radius: 10px;
      box-shadow: 2px 2px 4px #47394d;
      cursor: default;
    }

    .manu-nav-3:hover {
      background-color: #c5ea8b !important;
      color: black !important;
      border-radius: 10px;
      box-shadow: 2px 2px 4px #47394d;
    }

    .menu-list a {
      color: white !important;
      /* color: black !important; */
    }

    .is-active2 {
      color: black !important
    }

    .menu-list a:hover {
      color: #4a4a4a !important;
    }

    .menu-label {
      color: #b494c1 !important;
    }

    .box {
      background-color: #fde6809d;
    }

    .footer {
      background-color: #aeeee7 !important;
      padding: 1em 0.75em 1em !important;
    }

    .has-background {
      background-color: #f7abc7;
      border-radius: 20px;
      color: #6b3d7a;
    }

    .center {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .has-background-box {
      background-color: #808bbe;
      color: white;
      border-radius: 15px;
    }

    mark {
      background-color: #F7ABC7;
      box-shadow: 4px 4px 4px rgba(7, 0, 0, 0.5);
      border-radius: 10px;

    }
div .bar{
 
  width: auto;
  overflow-y: scroll;
}

.bnt-side{
  background-color: #6b3d7a; color: white; padding: 2em !important
}
  </style>
</head>

<body>
  <nav class="navbar color-nav is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="navbar-brand ml-6">
      <a class="navbar-item logo" href="main.html">
        <img src="1611079.png" />
        <p class="is-size-4 has-text-weight-medium ml-1">React</p>
      </a>
      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item color-text-nav m-2 manu-nav-1" href="what_is_react.php">
          คืออะไร
        </a>

        <a class="navbar-item color-text-nav m-2 manu-nav-2"> การใช้งาน </a>
        <a class="navbar-item color-text-nav m-2 manu-nav-3" href="web_example.html">
          ตัวอย่างเว็บไซต์
        </a>
      </div>

      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a class="button is-info is-light" href="source.html">
              <strong>แหล่งที่มาของข้อมูล</strong>
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <div class="columns mt-6 layer1">
    <div id="setBar"class="column bar container pl-4">
      <div id="sec1" style="display:block" class="box p-6">
        <p class="is-size-4 has-text-centered has-text-weight-semibold mb-4"><mark class="pl-5 pr-5 p pt-2 pb-2">เพิ่ม React ให้กับตัวเว็บภายใน 1 นาที</mark></p>
        <p>ในส่วนนี้ จะเป็นการนำ React component เข้ามาอยู่ใน HTML page โดยเริ่มจาก
          <br><strong>ขั้นตอนที่ 1 เพิ่ม DOM เข้าไปใน HTML</strong><br>
          เปิดไฟล์ HTML ที่คุณต้องการแก้ ละใส่แท็ก &lt;div&gt; ว่างไว้เพื่อบ่งบอกไว้ว่าจุดนั้น
          จะเป็นส่วนของ React เช่น
        </p>
        <div class="center has-background-box m-4 p-3">
          <?php
          echo  htmlspecialchars('<!-- . . . existing HTML . . . -->') . '<br>' .
            'ReactDOM.render(' . '<br>&emsp;&emsp;' .
            htmlspecialchars('<h1>Hello, world!</h1>,') . '<br>&emsp;&emsp;' .
            htmlspecialchars("document.getElementById('root')") . '<br>);';
          ?>
        </div>
        <p><strong>ขั้นตอนที่ 2 เพิ่มแท็ก script</strong><br>
          ต่อมา เพิ่มแท็ก script ตามด้านล่างก่อนจะปิดแท็ก body &lt;/body&gt;
        </p>
        <div class="center has-background-box m-4 p-3">
          <?php
          echo  htmlspecialchars('<!-- . . . other HTML . . . -->') . '<br><br>' .
            htmlspecialchars('<!-- Load React. -->') . '<br>' .
            htmlspecialchars('<!-- Note: when deploying, replace "development.js" with "production.min.js". -->') . '<br>&emsp;' .
            htmlspecialchars('<script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script> ') . '<br>&emsp;' .
            htmlspecialchars('<script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>') . '<br>' .
            htmlspecialchars("<!-- Load our React component. -->") . '<br>&emsp;' .
            htmlspecialchars('<script src="like_button.js"></script>') . '<br>' .
            htmlspecialchars('</body>');
          ?>
        </div>
        <p><strong>ขั้นตอนที่ 3 สร้าง React component</strong><br>
          สร้างไฟล์ like_button.js
          นำโค้ดตัวอย่าง ไปว่างในไฟล์ที่เราสร้างไว้ หลังจากนั้นให้เพิ่มส่วนนี้เข้าไปตอนท้ายของ
          like_button.js</p>

        <p>ส่วนข้างล่างจะเป็นตัวหา div ที่เราสร้างว่างไว้เพื่อแสดงตัวปุ่ม “Like” ที่เราสร้างขึ้นมา</p>
        <div class="center has-background-box m-4 p-3">
          <?php
          echo '/ ... the starter code you pasted ...<br><br>' . htmlspecialchars("const domContainer = document.querySelector('#like_button_container');")."<br>ReactDOM.render(e(LikeButton), domContainer);"
          ?>
        </div>
      </div>

      <div id="sec2" style="display:none" class="box p-6">
        <p class="is-size-4 has-text-centered has-text-weight-semibold mb-4"><mark style="background-color: #6fd8ff;" class="pl-5 pr-5 p pt-2 pb-2">สร้าง React App</mark></p>
        <p>ต้องมีการติดตั้ง Node เวอร์ชั่น 14.0.0 ขึ้นไปในเครื่องที่คุณจะทำ
          เริ่มโดยต้องเลือกทำอย่างใดอย่างหนึ่งตามนี้ </p>
        <div class="columns m-3 has-text-centered">
          <div class="column is-2">
            <p>npx</p>
          </div>
          <div class="column has-background">
            <p class="p-2">npx create-react-app my-app</p>
          </div>
        </div>
        <div class="columns m-3 has-text-centered">
          <div class="column is-2">
            <p>npm</p>
          </div>
          <div class="column has-background ">
            <p class="p-2">npm init react-app my-app</p>
          </div>
        </div>

        <div class="columns m-3 has-text-centered">
          <div class="column is-2">
            <p>Yarn</p>
          </div>
          <div class="column has-background">
            <p class="p-2">yarn create react-app my-app</p>
          </div>
        </div>
        <p>ตำแหน่งของไฟล์จะชื่อว่า my-app อยู่ในโฟลเดอร์ปัจจุบัน ภายในโฟลเดอร์นั้นก็จะมี
          การสร้างโครงสร้างโปรเจคและลง dependencies:</p>
        <div class="p-5 mt-2 has-background-box">
          <p>my-app<br>
            ├── README.md<br>
            ├── node_modules<br>
            ├── package.json<br>
            ├── .gitignore<br>
            ├── public<br>
            │ ├── favicon.ico<br>
            │ ├── index.html<br>
            │ └── manifest.json<br>
            └── src<br>
            ├── App.css<br>
            ├── App.js<br>
            ├── App.test.js<br>
            ├── index.css<br>
            ├── index.js<br>
            ├── logo.svg<br>
            └── serviceWorker.js<br>
            └── setupTests.js<br>
          </p>
        </div>
        <p class="mt-2">หลังจากนั้นเข้าไปยังโฟลเดอร์ my-app</p>
        <div class="has-background has-text-centered p-2 m-2">
          <p>cd my-app</p>
        </div>
        <p>เมื่ออยู่ภายในโปรเจคแล้ว สามารถ run โดยคำสั่งแบบ built-in ได้แก่</p>
        <div class="has-background has-text-centered p-2 m-2">
          <p>npm start | yarn start</p>
        </div>
        <p>เพื่อสำหรับการ run app เพื่อทำงาน
          เปิด <b class="has-text-danger">http://localhost:3000</b> เพื่อดูเว็บ
          หน้าจะถูก reload ทุกครั้งที่มีการแก้ไขและสามารถดู errors ได้ใน console ได้เลย</p>
      </div>

      <div id="sec3" style="display:none" class="box p-6">
        <p class="is-size-4 has-text-centered has-text-weight-semibold mb-4"><mark class="pl-5 pr-5 p pt-2 pb-2">Hello World</mark></p>
        <p>React ที่มีขนาดเล็กสุดก็จะประมาณโค้ดด้านล่าง</p>
        <div class="center has-background-box m-4 p-3">
          <?php
          echo
          'ReactDOM.render(' . '<br>&emsp;&emsp;' .
            htmlspecialchars('<h1>Hello, world!</h1>,') . '<br>&emsp;&emsp;' .
            htmlspecialchars("document.getElementById('root')") . '<br>);';
          ?>
        </div>
        <p>โดยโค้ดข้างต้นจะแสดงคำว่า “Hello, world!” บนเพจ</p>
      </div>

      <div id="sec4" style="display:none" class="box p-6">
        <p class="is-size-4 has-text-centered has-text-weight-semibold mb-4"><mark style="background-color: #6fd8ff;" class="pl-5 pr-5 p pt-2 pb-2">Introduction JSX</mark></p>
        <p>พิจารณาจากการประกาศตัวแปรข้างต้น</p>
        <div class="center has-background-box m-4 p-3">
          <?php echo htmlspecialchars('const element = <h1>Hello, world!</h1>;') ?>
        </div>
        <p>Syntax ข้างต้นนี้ไม่ใช่ทั้ง String และก็ HTML</p><br>
        <p>มันเรียกว่า JSX มันเป็นหนึ่งในรูปแบบการเขียนแบบ Javascript JSX ถูกแนะนำให้ใช้สำหรับการเขียน React เพื่ออธิบายว่าหน้าตา UI เป็นยังไง</p><br>
        <p>
          <strong>ทำไมถึงต้อง JSX?</strong><br><br>
          &emsp;&emsp;React นั้นครอบครุมทุกด้านเกี่ยวกับ Logic ของฝั่ง UI เช่น จะ “handled” ยังไง จะเปลี่ยน “state” ตอนไหนยังไง จะให้ข้อมูลแสดงยังไง<br>
          &emsp;&emsp;React นั้นมีการเขียนแบบ SoC (Separates of Concerns) โดยมีหลังการคือทำให้มันไม่ซับซ้อน โดยมีการใช้ตัวที่เรียกว่า “component”<br>
          &emsp;&emsp;React ไม่จำเป็นต้องทำ JSX เสมอไป แต่คนส่วนมากเล็งเห็นว่ามันง่าย ทั้งด้านกากรเขียนและการแสดงข้อผิดพลาด<br><br>

          งั้นมาเริ่มกันเลย<br> <br>
          <strong>Expression in JSX</strong><br><br>
          ในโค้ดข้างต้น มีการประกาศตัวแปรชื่อ “name” และใช้ใส่ภายใน JSX ในรูปแบบ {}
        </p>
        <div class="center has-background-box m-4 p-3">
          <?php
          echo
          "const name = 'Josh Perez';<br>" .
            htmlspecialchars('const element = <h1>Hello, {name}</h1>;') . '<br>' .
            "ReactDOM.render(<br>
        &emsp;&emsp;element,<br>
        " .
            htmlspecialchars("document.getElementById('root')") . '<br>);';
          ?>
        </div>
        <p>เราสามารถใส่ “JavaScript Expression” ใน {} ภายใน JSX เช่น 2+2,
          user.firstname, or formatName(user)
        </p><br>
        <p>ในโค้ดข้างล่างนี้ มีการเรียกฟังก์ชัน format(user) ภายใน &lt;h1&gt;</p>
        <div class="center has-background-box m-4 p-3">
          <?php
          echo "function formatName(user) {<br>
            &emsp;&emsp;return user.firstName + ' ' + user.lastName;<br>
           }<br>
           const user = {<br>
            &emsp;&emsp;firstName: 'Harper',<br>
            &emsp;&emsp;lastName: 'Perez'<br>
           };<br>"."const element = (<br> &emsp;&emsp;".htmlspecialchars("<h1> Hello, {formatName(user)}! </h1>")."<br>);<br>".
           "ReactDOM.render(<br>
           &emsp;&emsp;element,<br>&emsp;&emsp;".
           htmlspecialchars("document.getElementById('root')") . '<br>);';
          ?>
        </div>
        <p><strong>JSX ก็สามารถเขียนแบบ Expression ได้เช่นกัน</strong><br><br>
JSX Expression สามารถเขียนในรูปแบบฟังก์ชันใน JavaScript ได้
กล่าวคือ JSX สามารถใส่ if statements และ for loops กำหนดค่า และ return ค่า
ไปยัง function ได้เช่น</p>
<div class="center has-background-box m-4 p-3">
  <?php
  echo "function getGreeting(user) {<br>&emsp;&emsp;if (user) {<br>&emsp;&emsp;&emsp;&emsp;"
    .htmlspecialchars("return <h1>Hello, {formatName(user)}!</h1>;").
    "<br>&emsp;&emsp;}<br>&emsp;&emsp;".htmlspecialchars("return <h1>Hello, Stranger.</h1>;")."<br>}";
  ?>

</div>
<p><strong>สามารถใส่ Attributes ได้ใน JSX</strong><br><br>
สามารถใช้ quotes</p>
<div class="center has-background-box m-4 p-3">
  <?php
  echo htmlspecialchars('const element = <div tabIndex="0"></div>;');
  ?>
</div>
<p>สามารถใช้ปีกกา {} ในการระบุ Attributes ได้</p>
<div class="center has-background-box m-4 p-3">
  <?php
  echo htmlspecialchars('const element = <img src={user.avatarUrl}></img>;');
  ?>
</div>

<p><strong>สามารถใส่ Children ได้ใน JSX</strong><br><br>
ถ้าในแท็กต่างๆไม่มีอะไรข้างใน หรือไม่มี Children แนะน าให้ใช้ /> เหมือน XML</p>
<div class="center has-background-box m-4 p-3">
  <?php
  echo htmlspecialchars('const element = <img src={user.avatarUrl} />;');
  ?>
</div>
<p>ในส่วนของการใส่ children ข้างไหน</p>
<div class="center has-background-box m-4 p-3">
  <?php
  echo "const element = (<br>&emsp;&emsp;".htmlspecialchars('<div>')."<br>&emsp;&emsp;&emsp;&emsp;".htmlspecialchars('<h1>Hello!</h1>')."<br>&emsp;&emsp;&emsp;&emsp;".
  htmlspecialchars('<h2>Good to see you here.</h2>').'<br>&emsp;&emsp;'.htmlspecialchars('</div>')."<br>);";
  ?>
</div>
      </div>
      <div id="sec5" style="display:none" class="box p-6">
        <p class="is-size-4 has-text-centered has-text-weight-semibold mb-4"><mark class="pl-5 pr-5 p pt-2 pb-2">การ Render Element</mark></p>
        <p class="has-text-grey is-size-6">Elements เป็นสิ่งที่เล็กที่สุดที่สร้างเป็นบล็อคใน React apps</p>
        <p>Elements จะอธิบายว่าคุณอยากให้อะไรแสดงบนหน้าจอ</p>
        <div class="center has-background-box m-4 p-3">
  <?php
  echo htmlspecialchars('const element = <h1>Hello, world</h1>;');
  ?>
</div>
        <p>มันจะไม่เหมือนกับ browser DOM elements ในตัว React element ก็คือ object
          ทั่วไป และง่ายต่อการเขียน โดยตัว React DOM จะดูแลเกี่ยวกับการอัพเดท DOM ที่
          ตรงกับ React Elements
        </p><br>
        <p>
          <strong>การ Render Elements ใน DOM</strong><br>
          ให้ &lt;div&gt; อยู่ในซักที่ในโค้ด
        </p>
        <div class="center has-background-box m-4 p-3">
  <?php
  echo htmlspecialchars('<div id="root"></div>');
  ?>
</div>
        <p>เราระบุว่ามันเป็น “root” DOM node เพราะทุกอย่างที่อยู่ในนี้จะถูกจัดการโดย
          React DOM</p>
        <p class="mt-4">แอพพลิเคชั่นที่สร้างโดย React ส่วนมากจะมี root DOM node อันเดียว ถ้าต้องการ
          แก้ไข React ให้สามารถใช้จริงได้ อาจจะต้องมีการแยก root DOM nodes ตามที่
          ต้องการ</p>
        <p>ในการ Render elements ใน root จะต้องใช้ ReactDOM.render():</p>
        <div class="center has-background-box m-4 p-3">
  <?php
  echo htmlspecialchars('const element = <h1>Hello, world</h1>;').'<br>'.htmlspecialchars("ReactDOM.render(element, document.getElementById('root'));");
  ?>
</div>
        <p>มันก็จะแสดง Hello world ในหน้าเพจ</p><br>
        <p>
          <strong>การอัพเดท Elements ที่ถูก Render ไปแล้ว</strong><br>
          React elements เป็นสิ่งที่ไม่สามารถเปลี่ยนแปลงได้ไม่ว่าจะเป็นตัว children หรือ
          Attribute ของมัน มันจะแสดงหน้า UI ในช่วงเวลานั้นๆ<br><br>
          แต่ก็มีวิธีเปลี่ยนโดยเราจะสร้าง UI ใหม่ให้มันสร้าง Elements ใหม่และส่งไปยัง
          ReactDOM.render().<br><br>
          พิจารณาจากโค้ด ticking clock :
        </p>
        <div class="center has-background-box m-4 p-3">
  <?php
  echo 'function tick() {<br>&emsp;&emsp;'."const element = (<br>&emsp;&emsp;&emsp;&emsp;".htmlspecialchars('<div>')."<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;".htmlspecialchars('<h1>Hello!</h1>')."<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;".
  htmlspecialchars('<h2>It is {new Date().toLocaleTimeString()}.</h2>').'<br>&emsp;&emsp;&emsp;&emsp;'.htmlspecialchars('</div>')."<br>&emsp;&emsp;);<br>"."&emsp;&emsp;ReactDOM.render(element, document.getElementById('root'));}<br>
  setInterval(tick, 1000)";
  ?>
</div>
      </div>
      <div id="sec6" style="display:none" class="box p-6">
        <p class="is-size-4 has-text-centered has-text-weight-semibold mb-4"><mark style="background-color: #6fd8ff;" class="pl-5 pr-5 p pt-2 pb-2">Components และ Props</mark></p>
        <p>โดย concept จะเหมือน Javascript function แต่จะมีการใส่ “props” และจะคืนค่า
          React elements ที่อธิบายว่าอะไรอยู่บนหน้าจอ<br><br>
          <strong>Function และ Class components</strong><br>
          ทางที่ง่ายที่สุดในการสร้าง component คือเขียนเหมือน JavaScript function:
        </p>
        <div class="center has-background-box m-4 p-3">
  <?php
  echo 'function Welcome(props) {<br>&emsp;&emsp;'.htmlspecialchars('return <h1>Hello, {props.name}</h1>;')."<br>}";
  ?>
  </div>
        <p>Function ข้างต้นถูกหลักของ React components เพราะมีการใช้ “props”
          (properties) เป็น argument ที่มากับข้อมูลและ return ออกไปเป็น React Element
          ดังนั้นจึงเรียกมันว่า “Function Component” เพราะมันคล้ายกับ JavaScript
          Function</p><br>
        <p>คุณสามารถเขียนให้อยู่ในรูป class ได้ (ES6 class)</p>
        <div class="center has-background-box m-4 p-3">
  <?php
  echo 'lass Welcome extends React.Component {<br>&emsp;&emsp;
    render() {<br>&emsp;&emsp;&emsp;&emsp;'.htmlspecialchars('return <h1>Hello, {this.props.name}</h1>;')."<br>&emsp;&emsp;}<br>}";
  ?>
  </div>
        <p><strong>การ Render Component</strong><br>
          ก่อนหน้านี้เราจะให้ React Elements แสดงในรูปแท็ก DOM
          อย่างไรก็ตาม elements แสดงถึง components ที่ผู้เขียนสร้างขึ้นมา</p>
          <div class="center has-background-box m-4 p-3">
  <?php
  echo htmlspecialchars('const element = <Welcome name="Sara" />;
  ');
  ?>
</div>
        <p>เมื่อ React เห็นว่า Element แสดงถึง component และส่งค่า JSX attributes และ
          children ไปยัง component เลยเรียกมันว่า “props”
          ดังตัวอย่างที่โค้ดจะแสดง “Hello, Sara” หน้าเพจ</p>
          <div class="center has-background-box m-4 p-3">
  <?php
  echo htmlspecialchars('function Welcome(props) { return <h1>Hello, {props.name}</h1>;')."<br>}<br>".htmlspecialchars('const element = <Welcome name="Sara" />;ReactDOM.render(').
  "<br>&emsp;&emsp;element,<br>&emsp;&emsp;document.getElementById('root')<br>);";
  ?>
</div>
        <p><strong>การ Compose Components</strong><br>
          คือให้ components แสดงอยู่ใน output คล้ายๆกับการใช้ components อื่นๆ ใน
          level ไหนก็ได้</p><br>
        <p>ดังตัวอย่าง เราสามารถสร้าง App ที่ Render Welcome component ได้หลายครั้ง:</p>
        <div class="center has-background-box m-4 p-3">
  <?php
  echo 'function Welcome(props) {<br>&emsp;&emsp;'.htmlspecialchars('return <h1>Hello, {props.name}</h1>;').
  '<br>}<br>'.'function App() {<br>&emsp;&emsp;return (<br>&emsp;&emsp;&emsp;&emsp;'.htmlspecialchars('<div>').'<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.htmlspecialchars('<Welcome name="Sara" /> ').'<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.htmlspecialchars('<Welcome name="Cahal" />').'<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.htmlspecialchars('<Welcome name="Edite" /> ').'<br>&emsp;&emsp;&emsp;&emsp;'.htmlspecialchars('</div>').'<br>&emsp;&emsp;);<br>}<br>'.
  "ReactDOM.render(<br>&emsp;&emsp;".htmlspecialchars('<App />,')."<br>&emsp;&emsp;document.getElementById('root')<br>);";
  ?>
</div>
      </div>
      <div id="sec7" style="display:none" class="box p-6">
        <p class="is-size-4 has-text-centered has-text-weight-semibold mb-4"><mark class="pl-5 pr-5 p pt-2 pb-2">State และ Lifecycle</mark></p>
        <p>เปลี่ยนจาก Function component เป็น Class component</p>
        <div class="center has-background-box m-4 p-3">
  <?php
echo 'class Clock extends React.Component {<br>&emsp;&emsp;
  render() {<br>
    &emsp;&emsp;&emsp;&emsp;return (<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.htmlspecialchars('<div>')."<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;".
    htmlspecialchars('<h1>Hello, world!</h1>')."<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;".
    htmlspecialchars('<h2>It is {this.props.date.toLocaleTimeString()}.</h2>').'<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.htmlspecialchars('<div>').
    '<br>&emsp;&emsp;&emsp;&emsp;);<br>&emsp;&emsp;}<br>}<br><br>ReactDOM.render(<br>&emsp;&emsp;'.htmlspecialchars('<Clock date={new Date()} />,')."<br>&emsp;&emsp;document.getElementById('root')<br>);"

?>
</div>
        <p>หมายเหตุการทำ Local state และ Lifecycle สามารถทำได้ใน Class components<br>
          <strong>การเพิ่ม Local State ลงใน Class</strong><br>
          เราจะเปลี่ยน date ที่อยู่ในรูปแบบ props เป็น state ใน 3 ขั้นตอน<br><br>
          1. เปลี่ยนจาก this.props.date เป็น this.state.date ใน render()
        </p>
        <div class="center has-background-box m-4 p-3">
  <?php
echo 'class Clock extends React.Component {<br>&emsp;&emsp;
  render() {<br>&emsp;&emsp;&emsp;&emsp;
  return (<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.
  htmlspecialchars('<div>').'<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.
  htmlspecialchars('<h1>Hello, world!</h1>').'<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.
  htmlspecialchars('<h2>It is {this.state.date.toLocaleTimeString()}.</h2>').'<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.
  htmlspecialchars('</div>').
  '<br>&emsp;&emsp;&emsp;&emsp;);<br>&emsp;&emsp;
  }<br>
 }';
?>
</div>
        <br><p>2. เพิ่ม contructor ของ class โดยจะสร้างในรูปแบบ this.state</p>
        <div class="center has-background-box m-4 p-3">
  <?php
  echo 'class Clock extends React.Component {<br>&emsp;&emsp;
    constructor(props) {<br>&emsp;&emsp;&emsp;&emsp;
    super(props);<br>&emsp;&emsp;&emsp;&emsp;
    this.state = {date: new Date()}; }<br>&emsp;&emsp;
    render() {<br>&emsp;&emsp;&emsp;&emsp;
    return (<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.
    htmlspecialchars('<div>').'<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.
    htmlspecialchars('<h1>Hello, world!</h1>').'<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.
    htmlspecialchars('<h2>It is {this.state.date.toLocaleTimeString()}.</h2>').'<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.
    htmlspecialchars('</div>').'<br>&emsp;&emsp;&emsp;&emsp;'.
    ');<br>&emsp;&emsp;
    }<br>
   }';
  ?>
</div>
<p>โดยจะมีการส่ง props มายัง contructor</p>
<div class="center has-background-box m-4 p-3">
  <?php
echo 'constructor(props) {<br>&emsp;&emsp;
  super(props);<br>&emsp;&emsp;
  this.state = {date: new Date()};<br>
  }'
?>
</div>
        <p>โดยทั่วไปควรจะสร้าง constructor ที่มีการเขียนใช้ props เสมอ</p>
        
        <br><p>3. ลบ date props จาก &lt;Clock /&gt;</p>
        <div class="center has-background-box m-4 p-3">
  <?php
echo 'ReactDOM.render(<br>&emsp;&emsp;'.
htmlspecialchars(" <Clock />, document.getElementById('root')").
'<br> )'
?>
</div>
        <p>ผลลัพธ์โดยรวม</p>
        <div class="center has-background-box m-4 p-3">
  <?php
echo 'class Clock extends React.Component {<br>&emsp;&emsp;
  constructor(props) {<br>&emsp;&emsp;&emsp;&emsp; super(props); this.state = {date:
 new Date()}; <br>&emsp;&emsp;
}<br>&emsp;&emsp;
  render() {<br>&emsp;&emsp;&emsp;&emsp;
  return (<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.
  htmlspecialchars('<div>').'<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.
  htmlspecialchars('<h1>Hello, world!</h1>').'<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.
  htmlspecialchars('<h2>It is {this.state.date.toLocaleTimeString()}.</h2> ').'<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.
  htmlspecialchars('</div>').'<br>&emsp;&emsp;&emsp;&emsp;'.
  ');<br>&emsp;&emsp;
  }<br>
 }<br>
 ReactDOM.render(<br>&emsp;&emsp;'.
 htmlspecialchars(" <Clock />, document.getElementById('root')").'<br>'.
 ');';
?>
</div>
        <p><strong>การเพิ่ม Life cycle ลงใน class</strong><br>
          ต้องการ setup ตัวจับเวลา เมื่อ Clock component ถูก Render ไปยัง DOM ครั้ง
          แรก เราจะเรียกว่า “mounting”
          เมื่อต้องการเคลียเวลาเมื่อ DOM ที่ถูกสร้างโดย Clock ถูกลบออก เราจะเรียกว่า
          “Unmounting”<br><br>
          โดยเราจะประกาศ methods พิเศษใน Class component เพื่อโค้ดที่ต้องการให้มีการ
          “mount” และ “unmount”</p>
        <!-- code -->
        <div class="center has-background-box m-4 p-3">
  <?php
echo 'class Clock extends React.Component {<br>&emsp;&emsp;
  constructor(props) {<br>&emsp;&emsp;&emsp;&emsp;
  super(props);<br>&emsp;&emsp;&emsp;&emsp;
  this.state = {date: new Date()};<br>&emsp;&emsp;
  }<br>&emsp;&emsp;&emsp;&emsp;
  componentDidMount() { }<br>&emsp;&emsp;&emsp;&emsp;
  componentWillUnmount() { }<br>&emsp;&emsp;&emsp;&emsp;
  render() {<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  return (<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.
  htmlspecialchars('<div>').'<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.
  htmlspecialchars('<h1>Hello, world!</h1>').'<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.
  htmlspecialchars('<h2>It is {this.state.date.toLocaleTimeString()}.</h2>').'<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.
  htmlspecialchars("</div>")."<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;".
  ');<br>&emsp;&emsp;&emsp;&emsp;
  }<br>&emsp;&emsp;
 }';
?>
</div>
        <p>Methods พวกนี้คือ “Lifecycle methods”
          โดย ComponentDidMount() จะท างานหลังจาก component ถูก render จึงเหมาะ
          สำหรับทำ setup ตัวนับเวลา</p>
        <!-- code -->
        <div class="center has-background-box m-4 p-3">
  <?php
echo 'componentDidMount() {<br>&emsp;&emsp;
  this.timerID = setInterval(<br>&emsp;&emsp;&emsp;&emsp;
  () => this.tick(),<br>&emsp;&emsp;&emsp;&emsp;
  1000<br>&emsp;&emsp;
  ); <br>}';
?>
</div>
        <p>หมายเหตุ timerID คือตัวแปรที่ไม่ได้ต้องการจัดเก็บในรูปของ state<br><br>
          ComponentWillUnmount() จะท างานก่อนที่ component จะถูกลบออก ในโค้ด
          ตัวอย่างจึงให้หยุดจับเวลา
        </p>
        <!-- code -->
        <div class="center has-background-box m-4 p-3">
  <?php
echo 'componentWillUnmount() {<br>&emsp;&emsp;
  clearInterval(this.timerID);<br>
  }
 '
?>
</div>
        <p>โดย 5 หัวข้อที่ผ่านมาเป็นขั้นพื้นฐานส าหรับผู้ที่ต้องการเขียน React โดย concept
          เบื้องต้นของ React ยังมีต่อ สามารถเข้าไปดูในเว็บไซต์ของ React ได้โดยตรง<br>

          <a href="https://reactjs.org/docs/handling-events.html" target="_blank">6. การเขียน Handling Events</a>
          <br><a href="https://reactjs.org/docs/conditional-rendering.html " target="_blank">7. การเขียนเงื่อนไขใน Render</a>
          <br><a href="https://reactjs.org/docs/lists-and-keys.html" target="_blank">8. Lists และ Keys</a>
          <br><a href="https://reactjs.org/docs/forms.html" target="_blank">9. Forms</a>
          <br><a href="https://reactjs.org/docs/lifting-state-up.html" target="_blank">10. การส่ง state ไปยัง parent</a>
          <br><a href="https://reactjs.org/docs/composition-vs-inheritance.html" target="_blank">11. การเขียนแบบ Composition vs การเขียนแบบ Inheritance</a>
        </p>
      </div>
    </div>
    <div class="column bnt-side is-4 mt-2">
      <aside class="menu">
        <p class="menu-label">การใช้งาน React</p>
        <ul class="menu-list">
          <li>
            <a class="is-active2 has-text-black">การติดตั้ง React</a>
            <ul>
              <li id= "b1"style="background-color: #f5f5f5;"><a id="a1" style="color: #4a4a4a !important;" onclick="show(1)">เพิ่ม React ให้กับตัวเว็บภายใน 1 นาที</a></li>
              <li id="b2"><a id="a2" onclick="show(2)">สร้าง React App</a></li>

            </ul>
          </li>

          <li>
            <a class="is-active2 has-text-black">วิธีการเขียน React สำหรับมือใหม่</a>
            <ul>
              <li id="b3"><a id="a3" onclick="show(3)">Hello World</a></li>
              <li id="b4"><a id="a4" onclick="show(4)">Introduction JSX</a></li>
              <li id="b5"><a id="a5" onclick="show(5)">การ Render Element</a></li>
              <li id="b6"><a id="a6" onclick="show(6)">Components และ Props</a></li>
              <li id="b7"><a id="a7" onclick="show(7)">State และ Lifecycle</a></li>

            </ul>
          </li>

      </aside>
    </div>
  </div>
  <div class="columns mt-6 mb-6">
    <div class="column">
      <button class="button is-size-5 bntB1 ml-6" style="
          background-color: #F7ABC7;
          box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.45);
          border-radius: 20px;
        " onclick="location.href='what_is_react.php';">
        React คืออะไร
      </button>
    </div>
    <div class="column" style="display: flex; justify-content: flex-end">
      <button class="button is-size-5 bntB2 mr-6" style="
          background-color:#C5EA8B;
          box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.45);
          border-radius: 20px;
        " onclick="location.href='web_example.html';">
        ตัวอย่างเว็บไซต์
      </button>
    </div>
  </div>
  <footer class="footer">
    <div class="content has-text-centered">
      <img src="logo.png" width="50" height="50" />
      <p>
        <strong>จัดทำโดย</strong> นางสาว ชนกนันท์ นุ่มน้อย <strong>รหัสนักศึกษา</strong> 63070027 <br />
        <strong>ช่องทางการติดต่อ</strong>
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
  var h = window.innerHeight/1;
console.log(h);
document.getElementById("setBar").style.height=h +"px";
  function show(value) {
    if (value == 1) {
      // document.getElementById("sec1").style.visibility = "visible";
      // document.getElementById("sec2").style.visibility = "hidden";
      // document.getElementById("sec3").style.visibility = "hidden";
      // document.getElementById("sec4").style.visibility = "hidden";
      // document.getElementById("sec5").style.visibility = "hidden";
      // document.getElementById("sec6").style.visibility = "hidden";
      // document.getElementById("sec7").style.visibility = "hidden";

      document.getElementById("sec1").style.display = "block";
      document.getElementById("sec2").style.display = "none";
      document.getElementById("sec3").style.display = "none";
      document.getElementById("sec4").style.display = "none";
      document.getElementById("sec5").style.display = "none";
      document.getElementById("sec6").style.display = "none";
      document.getElementById("sec7").style.display = "none";

      document.getElementById("b1").style.backgroundColor="#f5f5f5";
      document.getElementById("b2").style.backgroundColor="";
      document.getElementById("b3").style.backgroundColor="";
      document.getElementById("b4").style.backgroundColor="";
      document.getElementById("b5").style.backgroundColor="";
      document.getElementById("b6").style.backgroundColor="";
      document.getElementById("b7").style.backgroundColor="";

      document.getElementById("a1").setAttribute('style', 'color: #4a4a4a !important;');
      document.getElementById("a2").style.color="";
      document.getElementById("a3").style.color="";
      document.getElementById("a4").style.color="";
      document.getElementById("a5").style.color="";
      document.getElementById("a6").style.color="";
      document.getElementById("a7").style.color="";

    } else if (value == 2) {
      // document.getElementById("sec1").style.visibility = "hidden";
      // document.getElementById("sec2").style.visibility = "visible";
      // document.getElementById("sec3").style.visibility = "hidden";
      // document.getElementById("sec4").style.visibility = "hidden";
      // document.getElementById("sec5").style.visibility = "hidden";
      // document.getElementById("sec6").style.visibility = "hidden";
      // document.getElementById("sec7").style.visibility = "hidden";

      document.getElementById("sec1").style.display = "none";
      document.getElementById("sec2").style.display = "block";
      document.getElementById("sec3").style.display = "none";
      document.getElementById("sec4").style.display = "none";
      document.getElementById("sec5").style.display = "none";
      document.getElementById("sec6").style.display = "none";
      document.getElementById("sec7").style.display = "none";

      document.getElementById("b1").style.backgroundColor="";
      document.getElementById("b2").style.backgroundColor="#f5f5f5";
      document.getElementById("b3").style.backgroundColor="";
      document.getElementById("b4").style.backgroundColor="";
      document.getElementById("b5").style.backgroundColor="";
      document.getElementById("b6").style.backgroundColor="";
      document.getElementById("b7").style.backgroundColor="";

      document.getElementById("a1").style.color="";
      document.getElementById("a2").setAttribute('style', 'color: #4a4a4a !important;');
      document.getElementById("a3").style.color="";
      document.getElementById("a4").style.color="";
      document.getElementById("a5").style.color="";
      document.getElementById("a6").style.color="";
      document.getElementById("a7").style.color="";
    } else if (value == 3) {
      // document.getElementById("sec1").style.visibility = "hidden";
      // document.getElementById("sec2").style.visibility = "hidden";
      // document.getElementById("sec3").style.visibility = "visible";
      // document.getElementById("sec4").style.visibility = "hidden";
      // document.getElementById("sec5").style.visibility = "hidden";
      // document.getElementById("sec6").style.visibility = "hidden";
      // document.getElementById("sec7").style.visibility = "hidden";

      document.getElementById("sec1").style.display = "none";
      document.getElementById("sec2").style.display = "none";
      document.getElementById("sec3").style.display = "block";
      document.getElementById("sec4").style.display = "none";
      document.getElementById("sec5").style.display = "none";
      document.getElementById("sec6").style.display = "none";
      document.getElementById("sec7").style.display = "none";

      document.getElementById("b1").style.backgroundColor="";
      document.getElementById("b2").style.backgroundColor="";
      document.getElementById("b3").style.backgroundColor="#f5f5f5";
      document.getElementById("b4").style.backgroundColor="";
      document.getElementById("b5").style.backgroundColor="";
      document.getElementById("b6").style.backgroundColor="";
      document.getElementById("b7").style.backgroundColor="";

      document.getElementById("a1").style.color="";
      document.getElementById("a2").style.color="";
      document.getElementById("a3").setAttribute('style', 'color: #4a4a4a !important;');
      document.getElementById("a4").style.color="";
      document.getElementById("a5").style.color="";
      document.getElementById("a6").style.color="";
      document.getElementById("a7").style.color="";
    } else if (value == 4) {
      // document.getElementById("sec1").style.visibility = "hidden";
      // document.getElementById("sec2").style.visibility = "hidden";
      // document.getElementById("sec3").style.visibility = "hidden";
      // document.getElementById("sec4").style.visibility = "visible";
      // document.getElementById("sec5").style.visibility = "hidden";
      // document.getElementById("sec6").style.visibility = "hidden";
      // document.getElementById("sec7").style.visibility = "hidden";

      document.getElementById("sec1").style.display = "none";
      document.getElementById("sec2").style.display = "none";
      document.getElementById("sec3").style.display = "none";
      document.getElementById("sec4").style.display = "block";
      document.getElementById("sec5").style.display = "none";
      document.getElementById("sec6").style.display = "none";
      document.getElementById("sec7").style.display = "none";

      document.getElementById("b1").style.backgroundColor="";
      document.getElementById("b2").style.backgroundColor="";
      document.getElementById("b3").style.backgroundColor="";
      document.getElementById("b4").style.backgroundColor="#f5f5f5";
      document.getElementById("b5").style.backgroundColor="";
      document.getElementById("b6").style.backgroundColor="";
      document.getElementById("b7").style.backgroundColor="";

      document.getElementById("a1").style.color="";
      document.getElementById("a2").style.color="";
      document.getElementById("a3").style.color="";
      document.getElementById("a4").setAttribute('style', 'color: #4a4a4a !important;');
      document.getElementById("a5").style.color="";
      document.getElementById("a6").style.color="";
      document.getElementById("a7").style.color="";
    } else if (value == 5) {
      // document.getElementById("sec1").style.visibility = "hidden";
      // document.getElementById("sec2").style.visibility = "hidden";
      // document.getElementById("sec3").style.visibility = "hidden";
      // document.getElementById("sec4").style.visibility = "hidden";
      // document.getElementById("sec5").style.visibility = "visible";
      // document.getElementById("sec6").style.visibility = "hidden";
      // document.getElementById("sec7").style.visibility = "hidden";

      document.getElementById("sec1").style.display = "none";
      document.getElementById("sec2").style.display = "none";
      document.getElementById("sec3").style.display = "none";
      document.getElementById("sec4").style.display = "none";
      document.getElementById("sec5").style.display = "block";
      document.getElementById("sec6").style.display = "none";
      document.getElementById("sec7").style.display = "none";

      document.getElementById("b1").style.backgroundColor="";
      document.getElementById("b2").style.backgroundColor="";
      document.getElementById("b3").style.backgroundColor="";
      document.getElementById("b4").style.backgroundColor="";
      document.getElementById("b5").style.backgroundColor="#f5f5f5";
      document.getElementById("b6").style.backgroundColor="";
      document.getElementById("b7").style.backgroundColor="";

      document.getElementById("a1").style.color="";
      document.getElementById("a2").style.color="";
      document.getElementById("a3").style.color="";
      document.getElementById("a4").style.color="";
      document.getElementById("a5").setAttribute('style', 'color: #4a4a4a !important;');
      document.getElementById("a6").style.color="";
      document.getElementById("a7").style.color="";
    } else if (value == 6) {
      // document.getElementById("sec1").style.visibility = "hidden";
      // document.getElementById("sec2").style.visibility = "hidden";
      // document.getElementById("sec3").style.visibility = "hidden";
      // document.getElementById("sec4").style.visibility = "hidden";
      // document.getElementById("sec5").style.visibility = "hidden";
      // document.getElementById("sec6").style.visibility = "visible";
      // document.getElementById("sec7").style.visibility = "hidden";

      document.getElementById("sec1").style.display = "none";
      document.getElementById("sec2").style.display = "none";
      document.getElementById("sec3").style.display = "none";
      document.getElementById("sec4").style.display = "none";
      document.getElementById("sec5").style.display = "none";
      document.getElementById("sec6").style.display = "block";
      document.getElementById("sec7").style.display = "none";

      document.getElementById("b1").style.backgroundColor="";
      document.getElementById("b2").style.backgroundColor="";
      document.getElementById("b3").style.backgroundColor="";
      document.getElementById("b4").style.backgroundColor="";
      document.getElementById("b5").style.backgroundColor="";
      document.getElementById("b6").style.backgroundColor="#f5f5f5";
      document.getElementById("b7").style.backgroundColor="";
      document.getElementById("a1").style.color="";
      document.getElementById("a2").style.color="";
      document.getElementById("a3").style.color="";
      document.getElementById("a4").style.color="";
      document.getElementById("a5").style.color="";
      document.getElementById("a6").setAttribute('style', 'color: #4a4a4a !important;');
      document.getElementById("a7").style.color="";
    } else if (value == 7) {
      // document.getElementById("sec1").style.visibility = "hidden";
      // document.getElementById("sec2").style.visibility = "hidden";
      // document.getElementById("sec3").style.visibility = "hidden";
      // document.getElementById("sec4").style.visibility = "hidden";
      // document.getElementById("sec5").style.visibility = "hidden";
      // document.getElementById("sec6").style.visibility = "hidden";
      // document.getElementById("sec7").style.visibility = "visible";

      document.getElementById("sec1").style.display = "none";
      document.getElementById("sec2").style.display = "none";
      document.getElementById("sec3").style.display = "none";
      document.getElementById("sec4").style.display = "none";
      document.getElementById("sec5").style.display = "none";
      document.getElementById("sec6").style.display = "none";
      document.getElementById("sec7").style.display = "block";

      document.getElementById("b1").style.backgroundColor="";
      document.getElementById("b2").style.backgroundColor="";
      document.getElementById("b3").style.backgroundColor="";
      document.getElementById("b4").style.backgroundColor="";
      document.getElementById("b5").style.backgroundColor="";
      document.getElementById("b6").style.backgroundColor="";
      document.getElementById("b7").style.backgroundColor="#f5f5f5";

      document.getElementById("a1").style.color="";
      document.getElementById("a2").style.color="";
      document.getElementById("a3").style.color="";
      document.getElementById("a4").style.color="";
      document.getElementById("a5").style.color="";
      document.getElementById("a6").style.color="";
      document.getElementById("a7").setAttribute('style', 'color: #4a4a4a !important;');
    }
  }
</script>

</html>