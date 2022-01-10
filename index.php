<!DOCTYPE html>
<html>

<head>
  <title>Portfolio - Ayodeji Osasona</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=0.4">
  <meta name="author" content="Ayodeji Osasona">
  <meta name="description" content="Ayodeji Osasona - Welcome to my portfolio!" />

  <script>
  if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
  // true for mobile device
    window.alert("This site is optimised for DESKTOP, please open this page on a desktop for the best experience.");
}else{
  // false for not mobile device
}
  </script>
</head>

<body>
  <div class="top" id="home">
    <h1>Welcome to My Portfolio<h1>
  </div>


  <!-- Main profile area -->

  <div class="intro" id="profile">

    <img src="img/me.jpg" class="profile" alt="Ayodeji Osasona" />

    <div class="intro-other">
      <table>
        <td>
          <h3>SURNAME</h3>
          <h1>OSASONA</h1>

          </br>

          <h3>FIRST NAME</h3>
          <h1>AYODEJI</h1>

          </br>

          <h3>MIDDLE NAME</h3>
          <h1>JESUDARASIMI</h1>

          </br>
          <h3>AGE</h3>
          <h1><?php
            date_default_timezone_set("London/England");
            $age= date("Y") - 2004;

            if(date("m") < 06){
              $final = $age - 1;
            } else {
              $final = $age;
            }

            echo $final; ?></h1>

        </td>

        <td>
          <h3>NATIONALITY</h3>
          <h1>NIGERIAN</h1>

          </br>

          <h3>COUNTRY OF RESIDENCE</h3>
          <h1>ENGLAND</h1>

          </br>

          <h3>SEX</h3>
          <h1>M</h1>

          </br>

          <h3>PROFESSION(S)</h3>
          <h1>STUDENT, FREELANCER</h1>
        </td>

      </table>
    </div>
  </div>


  <!-- Education section -->

  <div class="section-education" id="education">
    <h1>My Education</h1>

    <div class="section-other">
      <center>
        <table>
          <th>School</th>
          <th>Year(s) Attended</th>
          <th>Qualification Obtained</th>

          <tr>
            <td>Saint Lawrence Nursery & Primary School, Ekiti State, Nigeria.</td>
            <td>2007 - 2014</td>
            <td>
              <center>-</center>
            </td>
          </tr>

          <tr>
            <td>Saint Lawrence Metro College, Ekiti State, Nigeria.</td>
            <td>2014 - 2020</td>
            <td>SSCE</td>
          </tr>

          <tr>
            <td>University Of Northampton, Northampton, England.</td>
            <td>2021 - PRESENT</td>
            <td>BSc. (In Progress)</td>
          </tr>

        </table>
      </center>
    </div>
  </div>


  <!--Skills section -->

  <div class="section-skills" id="skills">
    <h1>My Skills</h1>
    <center>
      <div class="section-other-skills">
        <div class="item-1">
          Graphic Design
        </div>

        <div class="item-2">
          Web Design
        </div>

        <div class="item-3">
          Video Editing
        </div>

        <div class="item-4">
          Web Development
        </div>

      </div>
    </center>
  </div>


  <!--Work Experience Section-->
  <div class="section-work" id="experience">
    <h1>My Work Experience</h1>

<center>

    <div class="section-other-work">

<div class="container">

  <h2>Graphic design</h2>
      <ul class="work-links">
        <li><a href="img/1.png" target="_blank">Sample 1 (Music Cover Art)</a></li>
        <li><a href="img/2.png" target="_blank">Sample 2 (Banner)</a></li>
        <li><a href="img/3.png" target="_blank">Sample 3 (Book cover)</a></li>
        <li><a href="img/4.png" target="_blank">Sample 4 (Logo)</a></li>
      </ul>
</div>


<div class="container">
      <h2>Web Design & Development</h2>

      <ul class="work-links">
           <li><a href="https://github.com/aosasona" target="_blank">My GitHub</a></li>
        <li><a href="https://lyfetime.net" target="_blank">Online Community (ONGOING)</a></li>
         <li><a href="https://ran-ch.com/" target="_blank">Anonymous/Guest Chatting Service (ONGOING)</a></li>
        <li><a href="https://aerdeets.com" target="_blank">Modern Responsive Blog Design</a></li>
        <li><a href="https://perfectmusic.com.ng" target="_blank">PerfectMusic Blog</a></li>
        <li><a href="https://kondos.com.ng/" target="_blank">Basic Real Estate (Showcase) Website</a></li>
      </ul>
</div>

<div class="container">
      <h2>Videography & Video Editing</h2>

      <ul class="work-links">
        <li><a href="https://www.youtube.com/watch?v=NuJvi5aojSc" target="_blank">Google Nest Mini 2: The Better Choice?</a></li>
        <li><a href="https://www.youtube.com/watch?v=fvIDC2iST6Y" target="_blank">Sony WH-XB900N Headphones Review</a></li>
        <li><a href="https://www.youtube.com/watch?v=l_AGRITxTg0" target="_blank">Ulanzi i-Light Mini LED Tube Review</a></li>
        <li><a href="https://www.youtube.com/watch?v=jQq-s0xYhz0" target="_blank">Apple Watch Series 6 Revisited</a></li>
        <li><a href="https://www.youtube.com/watch?v=cpkLi_tOcrA" target="_blank">Touring London</a></li>
         <li><a href="https://www.youtube.com/watch?v=HIOCTxFl-io" target="_blank">Mixx StreamBuds Mini Review</a></li>
       
      </ul>
</div>
    </div>
</center>

<div class="footer">&copy; 2021 Ayodeji Osasona.</div>
  </div>

  <!--Fixed top header-->
  <div class="fixed-header">
<center>
    <span class="links">
      <a href="#home" class="internal">Home</a>
      <a href="#profile" class="internal">Profile</a>
      <a href="#education" class="internal">Education</a>
      <a href="#skills" class="internal">Skills</a>
      <a href="#experience" class="internal">Work Experience</a>
    </span>
</center>

      <a href="tel:+447869884239" class="call"><img src="img/phone.png" class="fixed-icon"/></a>
      <a href="mailto:techacumenyt@gmail.com" class="mail"><img src="img/mail.png" class="fixed-icon"/></a>


  </div>

</body>

</html>
