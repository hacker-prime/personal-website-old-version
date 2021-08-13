<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shaynhacker</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

</head>
<body>

    <div class="open">
			<div class="layer"></div>
			<div class="layer"></div>
    </div>    
    
<div id="blur">

        <!-- https://stackoverflow.com/questions/5067279/how-to-align-this-span-to-the-right-of-the-div -->
        <div class="navButton">
            <span style="cursor:pointer" onclick="openNav()" class="right">&#9776;</span>
        </div>
        
        <!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_sidenav -->
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav();dynamicMenu(this)">&times;</a>
            <a href="#home" onclick="hideSideNav();dynamicMenu(this)" data-target="home">Home</a>
            <a href="#skills" onclick="hideSideNav();dynamicMenu(this)" data-target="skills">Skills</a>
            <a href="#portfolio" onclick="hideSideNav();dynamicMenu(this)" data-target="portfolio">Portfolio</a>
            <!-- <a href="#">Clients</a> -->
            <a href="#contact" onclick="hideSideNav();dynamicMenu(this)" data-target="contact">Contact</a>
        </div>
            
        <!-- <a href="" class="logoMobile">Shayn Hacker</a> -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <section>
            <div id="nabvar" class="header nav">
                <h2 class="logo">Shayn Hacker</h2>
                <ul class="test" id="menu-wrapper">
                    <li class="mainMenu">
                        <a onclick="dynamicMenu(this)" href="#" class="btn active home" id="myDIV" data-target="home">Home</a>
                    </li>
            
                    <li class="mainMenu">
                        <a onclick="dynamicMenu(this)" href="#skills" class="btn" data-target="skills">Skills</a>
                    </li>
                    <li class="mainMenu">
                        <a onclick="dynamicMenu(this)" href="#portfolio" class="btn" data-target="portfolio">Portfolio</a>
                    </li>
                    <li class="mainMenu">
                        <a onclick="dynamicMenu(this)" href="#contact" class="btn" data-target="contact">Contact</a>
                    </li>
                </ul>
            </div>
        </section>    

        <div id="info">

        <?php include("home.php"); ?>

        </div>   
    
</div>    

<div class="close" id="popup">
    <h2>Overview</h2>
    <p>
    I have formal education in business and self-education in software development. And no I don't know how to hack computers......yet.
    </p>
    <a href="#" onclick="toggle()">Close</a>
</div>	


    <!-- The Social Media Icons at the bottom right of the screen causes the page to jump for a moment. Why? I'm not sure yet.         -->
	<!-- <ul class="sci">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
	</ul> -->                                                       
                                                    
   <img id="top-page" src="https://svgshare.com/i/LW3.sv" alt="Top">    
    <script src="index.js"></script>

</body>
</html>