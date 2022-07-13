<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="https://kit.fontawesome.com/1942794f8c.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <title>Matheus Dominguez | Porfolio</title>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="alert">
                    <i class="fa-solid fa-circle-info"></i>
                    <p>This portfolio is still under construction, please disregard any issues and help me by reporting it!</p>
                </div> <!-- alert -->
                <div class="home">
                    <h1>Dominguez & Programming World</h1>
                    <hr>
                    <p>
                        My name is Matheus Dominguez, I'm 20 years old and I live in Rio de Janeiro - RJ.<br>
                        I'm a Front-end web developer, that is, a graphical user interface developer for a website, using HTML, CSS and JavaScript languages and I'm currently studying Backend, using PHP.<br>
                        I've been on this journey for approximately 1 year, and programming was never a professional goal, but a "hobby" in my life that I developed over time.<br>
                        I've never taken a specific course, all my knowledge was acquired through curiosity, researching, watching videos, reading forums and asking questions with more experienced people than me.<br><br>
                    </p>
                </div> <!-- home -->
            </div> <!-- container -->
        </header>
        
        <section class="me">
            <div class="container">
                <h4>Where to find me</h4>
                <div class="list">
                    <a href="https://github.com/oidominguez" target="_blank"><div class="box">
                        <h6><i class="fa-brands fa-github"></i> » Github</h6>
                        <p>Visit if you're interested in seeing some of my codes!</p>
                    </div></a> <!-- box -->
                    
                    <a href="https://instagram.com/oidominguez" target="_blank"><div class="box">
                        <h6><i class="fa-brands fa-instagram"></i> » Instagram</h6>
                        <p>To get to know me a little more, follow me on instagram!</p>
                    </div></a> <!-- box -->
                    
                    <a href="https://discord.com/users/945853784318423080" target="_blank"><div class="box">
                        <h6><i class="fa-brands fa-discord"></i> » Discord</h6>
                        <p>The best place to chat is on discord, just call!</p>
                    </div></a> <!-- box -->
                    
                    <a href="https://www.linkedin.com/in/oidominguez/" target="_blank"><div class="box">
                        <h6><i class="fa-brands fa-linkedin"></i> » Linkedin</h6>
                        <p>I haven't finished organizing my Linkedin yet!</p>
                    </div></a> <!-- box -->
                </div> <!-- list -->
            </div> <!-- container -->
        </section>
        
<?php

            /*
                Status Legend:
                0 -> Unfinished
                1 -> Starting
                2 -> Finished
            */
            
    $projects = array(
        "0" => array(
            "title" => "Web radio - Habbo Style",
            "description" => "A site for a Habbo-style gaming web radio!",
            "link" => "https://radioiron.com/",
            "status" => 0
        ),
        "1" => array(
            "title" => "Minecraft Server Website",
            "description" => "Website/store made for minecraft servers.",
            "link" => "https://redewise.oidominguez.dev/",
            "status" => 0
        ),
        "2" => array(
            "title" => "Cosmic CMS - Fansite Habbo",
            "description" => "A site for a Habbo-style gaming fansite!",
            "link" => "https://lab.oidominguez.dev/cosmic",
            "status" => 1
        ),
        "3" => array(
            "title" => "Syllabus",
            "description" => "A differentiated worksheet, made for personal use.",
            "link" => "https://oidominguez.github.io/syllabus",
            "status" => 2
        ),
        "4" => array(
            "title" => "dPanel",
            "description" => "Administrative panel for sites and systems.",
            "link" => "https://oidominguez.dev/painel",
            "status" => 0
        )
    );

?>
        
        <section class="projects">
            <div class="container">
                <h4>Projects</h4>
                <div class="list">
                    
<?php
    for($i=0;$i<count($projects);$i++){
        $status = $projects[$i]["status"];
        if($status == 0){
            $status = "Unfinished";
            $color_status = "#ffaaaa";
        } else if($status == 1){
            $status = "Starting";
            $color_status = "#5b7fb77a";
        } else if($status == 2){
            $status = "Finished";
            $color_status = "#8cff8c";
        };
        
        echo
        '
        <a href="'.$projects[$i]["link"].'" target="_blank"><div class="box">
            <div class="box-header">
                <h6>'.$projects[$i]["title"].'</h6>
                <hr>
                <p>'.$projects[$i]["description"].'</p>
            </div>
            <div class="box-footer">
            <p><b>Status:</b> <span style="color: '.$color_status.';">'.$status.'</span></p>
            </div>
        </div></a> <!-- box -->
        ';
    }
?>
                </div> <!-- list -->
            </div> <!-- container -->
        </section>
        
        
                <section class="skills">
            <div class="container">
                <h4>Skills</h4>
                <div class="list">
                    
                    <a href="https://html5.org/" target="_blank"><div class="box">
                        <img src="https://i.imgur.com/C10rORE.png" alt="">
                        <h6>HTML</h6>
                    </div></a> <!-- box -->
                    
                    <a href="https://www.w3.org/Style/CSS/Overview.en.html" target="_blank"><div class="box">
                        <img src="https://i.imgur.com/4bOD6FU.png" alt="">
                        <h6>CSS</h6>
                    </div></a> <!-- box -->
                    
                    <a href="https://www.javascript.com/" target="_blank"><div class="box">
                        <img src="https://i.imgur.com/TocfhAa.png" alt="">
                        <h6>JavaScript</h6>
                    </div></a> <!-- box -->
                    
                    <a href="https://www.php.net/" target="_blank"><div class="box">
                        <img src="https://i.imgur.com/SzUr8dc.png" alt="">
                        <h6>PHP</h6>
                    </div></a> <!-- box -->
                    
                    <a href="https://getbootstrap.com/" target="_blank"><div class="box">
                        <img src="https://i.imgur.com/KrSDHWE.png" alt="">
                        <h6>Bootstrap</h6>
                    </div></a> <!-- box -->
                    
                    <a href="https://www.mysql.com/" target="_blank"><div class="box">
                        <img src="https://i.imgur.com/T6XBRkA.png" alt="">
                        <h6>Mysql</h6>
                    </div></a> <!-- box -->
                </div> <!-- list -->
            </div> <!-- container -->
        </section>
        
        <footer>
            <p>powered by <span>Matheus Dominguez</span></p>
        </footer>
        
    </body>
</html>