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
            คืออะไร
          </a>

          <a
            class="navbar-item color-text-nav m-2 manu-nav-2"
            href="work.php"
          >
            การใช้งาน
          </a>
          <a
            class="navbar-item color-text-nav m-2 manu-nav-3"
            href="web_example.html"
          >
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
    <div class="container is-fluid mt-6 pt-4 ">
      <p class="is-size-2 has-text-weight-semibold">หัวข้อ</p>
      <button class="accordion button is-large is-fullwidth bnt1 mt-4" onclick="check()">React คืออะไร</button>
      <div class="panel text1">
        <div class="mb-4">
        <p class="mt-4">
          &emsp;&emsp;<strong class="is-size-5">React</strong> คือ <b class="has-text-link">JavaScript Library</b> ที่เอาไว้สำหรับทำ UI ที่ทีม <b class="has-text-link">Facebook เป็นคนพัฒนาขึ้นม</b>า และเปิดให้คนทั่วไปนำมาใช้ฟรี ซึ่งเว็บไซต์ในปัจจุบันของ Facebook.com ก็ใช้ React อยู่เช่นกัน ซึ่ง React ไม่ใช่ SPA Framework (Single Page Application) อย่าง Angular แต่เป็นเพียงแค่ตัว V ใน MVC (Model View Controller) เท่านั้น คือเอาไว้ render พวก Component หรือ Element ต่างๆ ในหน้า HTML เท่านั้น
          ที่เราใช้สำหรับสร้างหน้าเว็บของเราให้ออกมาเจ๋ง และแจ๋ว พร้อมด้วย action ต่างๆ ที่ทำให้เว็บของเราดูน่าสนใจนั่นเองครับ
          จุดเด่นของ React ที่ทำให้มันน่านำมาใช้งานนั้นก็คือ มันมีระบบแคชในตัวทำให้หน้าเว็บของเรามีการตอบสนองที่เร็ว เหมาะแก่การนำไปทำ SPA เป็นอย่างยิ่งนั่นเองครับ การเขียน React เรายังสามารถแยกองค์ประกอบของหน้าเว็บเรา ออกเป็นส่วนๆ เรียกว่าเป็น component แล้วนำมาประกอบกันเป็นหน้าเว็บได้ ซึ่งทำให้เราสามารถ นำ component ของเราไปใช้ซ้ำที่อื่นได้ ไม่ต้องเสียเวลาเขียนใหม่นั่นเอง และReact นั้นเป็น Javascript Framework ที่ทำหน้าที่ Compile Code ของเราให้กลายเป็น Html+Css+Javascript เพื่อให้สามารถใช้งานบน Browser ได้นั่นเอง โดยที่ตัว React นั้นอาศัย NodeJS เพื่อทำการ Compile Code 
        <br><br><strong class="is-size-5">ข้อดีของ React</strong>
        <li><strong>เทรนด์เว็บไซต์เริ่มกลายเป็น API</strong> – เว็บไซต์ในปัจจุบันมี API กันเยอะมาก (เว็บใหญ่ ๆ เช่น Facebook, Google, Twitter etc. ก็มี API ครบกันหมดแล้ว) เพราะฉะนั้นถ้าวันนี้เรายังทำเว็บที่คุยกับ API ไม่ได้ เราจะเสียเปรียบมากในอนาคตครับ</li>
        <li><strong>Concept เข้าใจง่าย</strong> – เรียนรู้ตัว React เองง่ายมาก และเครื่องมือที่ช่วยเรียนรู้เยอะมาก ๆ</li>
      <li><strong>อนาคตไกล</strong> – React เกิดมาหลายปีแล้ว และยังคงมีคนให้ความสนใจเยอะ เพราะฉะนั้นเรียนตอนนี้ยังใช้ได้อีกหลายปีแน่นอน</li>
      <li><strong>เครื่องมือทำงานด้วยเยอะ</strong> – หลายคนอาจจะกลัวว่าเราต้องศึกษาเครื่องมือเพิ่มเติมมากมายเพื่อใช้ React แบบเต็มที่ แต่จริง ๆ เรียนรู้แค่ React ก็ทำเว็บได้แล้ว</li>
      <li><strong>ทำแอพมือถือได้ด้วย</strong> – เครื่องมือหนึ่งที่ทำให้ผมมาสนใจ React คือ React Native ซึ่งเป็นการเขียน JavaScript แล้วนำมาแปลงเป็น App แบบ Native ได้ทั้งบน Android และ iOS เครื่องมือนี้พัฒนาโดยทีม Facebook เองเลย</li>
    <li><strong>คนใช้เยอะ หาโค้ดให้ศึกษาง่าย</strong> – มี Best Practice จากเว็บไซต์จริงเยอะแยะมากมายให้ศึกษา เพราะเว็บใหญ่ก็ใช้กันเยอะ ลองดูได้ที่ ลิสต์เว็บที่ใช้ React บางส่วน </li>
    <li><strong>Community แข็งแกร่งมาก</strong> – ถ้ามีคำถามไม่ต้องกลัวว่าจะไม่มีคนตอบ เพราะกระแสแรงทั้งในไทย (ReactJS Developers Thailand ซึ่งเป็นทีมงานเดียวกับที่จัดงาน React Bangkok) และต่างประเทศ ล่าสุดผมกดบัตร Meetup React Melbourne ไม่ทัน เพราะประกาศแปปเดียวยอดคนเข้าไป 200+ แล้ว</li>
    <br><strong class="is-size-5">ข้อเสียของ React</strong>
    <li><strong>Documentation ยังไม่ดี</strong> – Documentation บนเว็บหลักแอบอ่านยากไปหน่อย แต่เดี๋ยวจะแนะนำเว็บที่อธิบายง่าย ๆ ที่ผมใช้ตอนเรียน React</li>
    <li><strong>ต้องรู้ JavaScript ในระดับหนึ่ง</strong> – คนที่มาจากภาษาอื่นเช่น PHP อาจจะต้องมาเรียนรู้ในส่วนนี้</li>
  </p>
        </div>
      </div>

      <button class="accordion button is-large is-fullwidth mt-5 bnt2" onclick="check()">รายละเอียดเกี่ยวกับเทคโนโลยี React </button>
      
      <div class="panel text2 mb-4">
        <div class="mb-4">
        <p class="mt-4">
          คอนเซปต์ที่เราต้องรู้เพื่อเขียน React หลัก ๆ มีแค่ 3 Concept เท่านั้น
          <ol class="ml-3">
            <li><strong>Component</strong> – ส่วนต่าง ๆ ในเว็บเราจะมองเป็น Component</li>
            <li><strong>State</strong> – ข้อมูลที่อยู่ใน Component แต่ละชิ้น เราเรียกว่า State</li>
            <li><strong>Props</strong> – ข้อมูลที่ถูกส่งต่อจาก Component ชั้นบนลงไปชั้นล่าง เราเรียกว่า Props (Properties)</li>
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
          <li><strong class="is-size-3 mb-3 ">Component</strong></li><br>ก็เหมือนกับการเขียน HTML เลยครับ React ใช้สิ่งที่เรียกว่า JSX ในการแสดงผลเว็บไซต์ หน้าตาจะเหมือน HTML มาก แตกต่างตรงเราเขียนเข้าไปในไฟล์ JavaScript แทนไฟล์ HTML ทำให้เราสามารถเล่นอะไรกับมันได้มากกว่า<br>
          โดยเราสามารถเขีนน <b class="has-text-link">class React-Component</b> ยกตัวอย่าง <b class="has-text-link">componente(‘Hello world”)</b>
          <div class="center has-background-success-light m-4 p-3">
            <?php echo htmlspecialchars('class Hello extends React.Component {').'<br>'. htmlspecialchars('render() {').'<br>'.'&emsp;&emsp;&emsp;&emsp;'. htmlspecialchars('return <h1> Hello wprld!</h1>;').'<br>{<br>{';
            ?>
          </div>
          เราสามารถกำหนด <strong>method</strong> สำหรับ <strong>component</strong> สำหรับตัวอย่างเรากำหนดหนึ่ง <strong>component</strong> นั้น ละจะมีสิ่งที่เรียนว่า <b class="has-text-danger">"render()"</b> ซึ่งข้างในของ <b class="has-text-danger">render()</b> จะ <strong>return</strong> สิ่งที่เราต้องการให้ <strong>React</strong> แสดงบนหน้าเว็บ ในตัวอย่างของเรา คือเราต้องการให้ <strong>React</strong> แสดงคำว่า <string>Hello world!</string> ในแท็กเพื่อให้ตัวอย่างของเราแสดงผลบนหน้าจอเราต้องใช้ <b class="has-text-danger">ReactDOM.render()</b>
          <div class="center has-background-success-light m-4 p-3">
            <?php echo 'ReactDOM.render('.'<br>'. '&emsp;&emsp;&emsp;'.htmlspecialchars('<Hello/>,').'<br>'.'&emsp;&emsp;&emsp;'. htmlspecialchars('document.getElementById("root")').'<br>);';
            ?>
            
          </div>
          หลังจากนั้นก็จะเชื่อม <strong>Component</strong> ด้วย <b class="has-text-danger"><?php echo htmlspecialchars('<Hello/>') ;?></b> และ  <b class="has-text-danger">div id="root"</b> ก็จะแสดงผลดังนี้
          <center>
            <img class="m-4"
            style="
              width: 30em;
              height: auto;
              border-radius: 10px;
              box-shadow: 2px 2px 6px #a15370a4;
            " src='helloworld.png'>
          </center>
          ใน syntax ของ html ที่เราพึ่งดูไป <b class="has-text-link">แท็ก h1</b> และ <b class="has-text-link">แท็ก Hello</b> ซึ่งจะเป็น <strong class="is-size-5">JSX</strong> ที่เราได้อธิบายไว้แล้ว ซึ่งไม่ใช้ทำงานเหมือน html ที่เราเคยใช้ทั่วไป แต่จะต้องมีส่วนของ
          <b class="has-text-danger">ReactDOM.render()</b> อยู่ด้วย
        </p>
        <p class="mt-5 has-text-grey">
          <p class="is-size-4 mb-3">การจัดการข้อมูล</p>
          ข้อมูลมีอยู่สองประเภทใน <b>React คือ props และ state</b> ความแตกต่างระหว่างทั้งสองนั้นค่อนข้างยากที่จะเข้าใจในช่วงการเริ่มต้น ดังนั้นไม่ต้องกังวลหากพบว่าจะทำให้สับสนเล็กน้อย จะง่ายขึ้นเมื่อเรียนรู้และการทำงานของ React

          <br><br>ความแตกต่างที่สำคัญคือ “state" นั้นเป็น private และสามารถเปลี่ยนแปลงได้จากภายในคอมโพเนนต์เอง props คือ external และจะไม่ถูกควบคุมโดย Component มันถูกส่งผ่านจากล่างของ Component ที่สูงกว่า และยังควบคุมข้อมูลทั้งหมด
          
          <br><br><b>Component จะสามารถเปลี่ยน state ภายในได้โดยตรง แต่ส่วนของ props ไม่สามารถเปลี่ยนได้โดยตรง</b></p>
      <p class="mt-5">
        <li><strong class="is-size-3 mb-3 ">Props</strong></li><br>
        คอมโพเนนต์ Hello มีความเป็น static มาก และมันสามารถเรนเดอร์กี่ครั้งก็ได้ด้วยข้อความ Hello World เดิม สิ่งสำคัญของ React คือความสามารถในการนำกลับมาใช้ใหม่ (reusability) หมายความว่าเราสามารถนำคอมโพเนนต์ที่เราเคยเขียนไว้ นำกลับมาใช้ใหม่ได้เรื่อยๆตามที่เราต้องการ ดังตัวอย่างข้างล่าง แต่เราจะเปลี่ยข้อความกันเล็กน้อย

<br><br>เพื่อให้ตรงกับหลักการนำกลับมาใช้ใหม่ เราจึงส่ง props ชื่อ message เข้าไปใน คอมโพเนนต์ Hello
<div class="center has-background-success-light m-4 p-3">
  <?php echo htmlspecialchars('ReactDOM.render(').'<br>'. htmlspecialchars('<Hello massage="my friend"/>').'<br>&emsp;&emsp;&emsp;'. htmlspecialchars('document.getElementById("root")').'<br>);';
  ?>
</div>
ซึ่ง <strong>props</strong> จะเรียก message ที่มีค่า <b class="has-text-link">"my friend"</b> ได้ <b class="has-text-link">component hello</b> โดยการใช้ถึง  <b class="has-text-danger">this.props.message</b>
      </p>
      <div class="boxText center has-background-success-light m-4 p-3">
        <?php echo htmlspecialchars('class Hello extends React.Component {').'<br>'. htmlspecialchars('render() {').'<br>'.'&emsp;&emsp;&emsp;&emsp;'. htmlspecialchars('return <h1>Hello {this.props.massage}!</h1>;').'<br>}<br>}';
        ?></div>
        <p>ซึ่งก็จะแสดงผลได้แบบนี้</p>
        <center>
          <img class="m-4"
          style="
            width: 30em;
            height: auto;
            border-radius: 10px;
            box-shadow: 2px 2px 6px #a15370a4;
          " src='hellomyfriend.png'>
        </center>

        <p>นี่จึงเป็นเหตุผลที่เราเขียน <b class="has-text-danger">{this.props.message}</b> ด้วยเครื่องหมายปีกกา เนื่องจากเราต้องบอก <strong class="is-size-5">JSX</strong> ว่าเราต้องการเพิ่มตัวแปรมาที่ต้องการเชื่อมต่อกันของ <b class="has-text-link">JavaScript</b> โดยเรียวิธีการนี้ว่า <b class="has-text-link">escaping</b>
          <br><br>
                    ดังนั้นตอนนี้เรามีคอมโพเนนต์ที่นำกลับมาใช้ใหม่ซึ่งสามารถแสดงข้อความที่เราต้องการได้แล้ว
                    <br><br>
                    อย่างไรก็ตาม จะเกิดอะไรขึ้นถ้าเราต้องการให้ <strong>component</strong> สามารถเปลี่ยนข้อมูลไปมาได้ ทีนี้จะมาแนะนำให้ใช้ <strong>state</strong> แทน!</p>
                    <p class="mt-5">
                      <li><strong class="is-size-3 mb-3 ">State</strong></li><br>

                      อีกวิธีหนึ่งในการจัดเก็บข้อมูลใน React นั้นอยู่ใน <b class="has-text-danger">component-state</b> และไม่เหมือนกับ props ซึ่งไม่สามารถเปลี่ยนแปลงได้ โดยตรงแต่ <b class="has-text-danger">state</b> ทำได้
<br><br>
ดังนั้นหากคุณต้องการให้ข้อมูลในแอปของคุณเปลี่ยนแปลง ตัวอย่างเช่นอิงจากการโต้ตอบของผู้ใช้งาน ข้อมูลนั้นจะต้องถูกจัดเก็บใน <b class="has-text-danger">component-state</b>
<br><br>
<p class="has-text-centered is-size-5"><strong>Initializing state (กำหนดค่าเริ่มต้นให้ state)</strong></p><br><p>
ในการกำหนดค่าเริ่มต้นให้ <b class="has-text-danger">state</b> เราจะใช้เมธอด <b class="has-text-danger">Constructor()</b> ของคลาส state ของเราเป็น object และตอนนี้ขอกำหนดแต่ message มีค่า "my friend (from state)!" ไปก่อน
                    <div class="boxText center has-background-success-light m-4 p-3">
                      <?php echo 'class Hello extends React.Component {'.'<br>'. 'constructor(){'.'<br>'.'&emsp;&emsp;'. 'super();<br>&emsp;&emsp;this.state = {<br>&emsp;&emsp;&emsp;&emsp;message: "my friend (from state)!"<br>'.'&emsp;&emsp;};'.'<br>}';
                      echo '<br>render(){<br>&emsp;&emsp;'.
                          htmlspecialchars('return <h1>Hello {this.state.message}!</h1>').'<br>{<br>{';
                      ?>
                </div>
                ก่อนที่เราจะเซต <b class="has-text-danger">state()</b> เราจะต้องเรียก super() ใน <b class="has-text-danger">constructor</b> ก่อน เพราะว่า
                <b class="has-text-danger">this</b> จะได้ไม่มีค่าใดๆก่อน <b class="has-text-danger">super()</b> จะทำงาน</p>
                    </p></div>
        
                  </div>
       
    <!-- เปลี่ยนหน้า -->
    <div class="mr-6 mb-6 mt-6" style="display: flex; justify-content: flex-end">
      <button
        class="button is-size-5 bntB"
        style="
          background-color: #FDE780;
          box-shadow: 4px 4px 8px #899ea0;
          border-radius: 20px;
        "
        onclick="location.href='work.php';">
        การใช้งาน React
      </button>
    </div>
    </div>
    <footer class="footer" id="footer">
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
