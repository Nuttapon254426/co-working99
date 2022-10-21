<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animated Login Form | CodingNepal</title>
    <link rel="stylesheet" href="Costyle.css">
  </head>


  <body background="image/Login.jpg">

                <header>
            <div class="conteny flex_space">
              <div class="logo">
                <p style="color:white; font-size: 25px;">CO WORKING <span01>SPACE</span01></p>
                <img src="image/logo.png" alt="">
              </div>
              <div class="navlinks">
                <ul id="menulist">
                  <li><a href="#home">THAKSIN UNIVERSITY มหาวิทยาลัยทักษิณ วิทยาเขต พัทลุง</a></li>
                  <li> <i class="fa fa-search"> </i></li>
                  <li> 
                    <button class="primary-btn" onclick="history.back()"> ย้อนกลับ  </button></a>
                  </li>
                </ul>
                <span class="fa fa-bars"></span>
              </div>
            </div>
          </header>

<!-- ----------------Login------------------- -->

    <div class="center">
      <h1>TSU Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" required>
          <span></span>
          <label>Username</label>
        </div>

        <div class="txt_field">
          <input type="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" value="Login">
        <br><br>

      </form>
    </div>




  </body>
</html>
