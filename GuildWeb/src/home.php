<?php
echo <<<HOME
<!DOCTYPE html>
<html lang="en-US">
<head>
  <script src="https://use.fontawesome.com/4c9c134f39.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8"/>
  <title>SDG Home</title>
  <link href="css/SDG-Style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
  <div id="wrapper">
  <nav>
    <div class="nav-img"><a href="index.html"><img src="sytles/grnSDG.png" alt="cat"></a></div>
    <div class="nav-links">
      <a id="nav-index" href="index.html">Home</a>
      <a id="nav-about" href="#">About</a>
      <a id="nav-projects" href="#">Projects</a>
   </div> 
  </nav>

  <header>
    <h1>Software</h1><h1>Development</h1><h1>Guild</h1>
    <a href="https://github.com/Demibro/Stark-State-College-SDG-App"><i class="fa fa-github-square" aria-hidden="true"></i></a>
    <a href="https://www.facebook.com/Stark-State-College-Software-Development-Guild-1519047618176936/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
    <a href="https://twitter.com/software_guild"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
  </header>
  
  <article class="main">  
    
    <section class="about">
      <h2>The Guild</h2>
      <p>
          The Software Development Guild is a gathering of student developers who seek to further advance their craft through collaboration. 
      </p>
      <p>
        The Guild serves as a meeting place for students of all backgrounds and understanding who seek to better understand software components and the development cycle. 
      </p>  
    </section>
   
    <section class="officers">
      <table>
        <th colspan="3"><h2>Officers</h2></th>
        <tr>
          <td><img src="styles/advis.png" alt="Advisor"/><p>Advisor Sharon Hoover</p></td>
          <td><img src="styles/pres.png" alt="President"/><p>President Devin Brough</p></td>
        </tr>
        <tr>  
          <td><img src="styles/open.png" alt="Vice-President"/><p>Vice-President David Sarnor</p></td>
          <td><img src="styles/admin.png" alt="Admin"/><p>Administrative Assistant Quinntin Duong</p></td>
        </tr>
        </tr>
        <tr>
          <td><img src="styles/web.png"/><p>Web Master Jason Helsel</p></td>
          <td><img src="styles/open.png"/><p>Event Coordinator TBD</p></td>
        </tr>
      </table>
    </section>

    <section class="meeting-info"> 
      <h3>Meetings are Tuesday from <time>4:00pm to 5:00pm</time>
      </h3>
      <p>
       If you would like to join but can't make it to the meetings contact the project manager at <a href="mailto:MR/MRS_Manager@dudeguy.com">MR/MRS_Manager@dudeguy.com</a> to see what you can do to help on our next project!
      </p>
    </section>
  </article>
  

  <footer>
    <section id="contact">
      <h4>Contact:&nbsp;</h4>
      <p>President Namey McNamerson&nbsp;</p>
      <p><a href="mailto:MR_prezzz@dudeguy.com">MR_prezzz@dudeguy.com</a></p>
    </section>
    <section id="copyright">
      <p>&copy; 2017 SSC Software Development Guild</p>
    </section>
  </footer>
 
  </div>

</body>
</html>
HOME;
