<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
</head>
<body>


<!-- Contact Section -->

<div id="contactPrimary">
                                              
            <div id="asterickSubstitute">

                <div class="containerSubstitute" id="contactSection">  

                        <form id="contact" action="" method="post">
                        
                        <h3>Quick Contact</h3>
                        <h4>Contact me today, and get a reply with in 24 hours!</h4>
                        <fieldset>
                            <!-- The input tag directly below had an attribute or property  called autofocus and it seems to have caused the page to scroll to the bottom on page load                     -->
                            <input placeholder="Your name" type="text" tabindex="1" name="name" id="name">
                            <div class="error" id="nameError"></div>
                        </fieldset>
                        <fieldset>
                            <input placeholder="Your Email Address" type="text" tabindex="2" id="email" name="email">
                            <div class="error" id="emailError"></div>
                        </fieldset>
                        <fieldset>
                            <input placeholder="Your Phone Number" type="text" tabindex="3" id="phone" name="phone">
                            <div class="error" id="phoneError"></div>
                        </fieldset>
                        <fieldset>
                            <textarea placeholder="Type your Message Here...." type="text" tabindex="5" id="message" name="message"></textarea>
                        </fieldset>
                        <fieldset>
                            <button type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                        </fieldset>
                        <div class="success" id="success"></div>

                        </form>  

                        <div class="js"></div>
                </div>   

            </div>


            <div id="contactInfoPlus" class="contactInfoPlus" >

                       <ul style="list-style:none;" class="contact-list">

                             <li class="list-item">
                                 <i class='fas fa-map-marker-alt' style='font-size:15px'>
                                    <span class="contact-text place">Jamaica</span>
                                 </i>
                    
                             </li> 

                             <li class="list-item">
                                 <i class="fas fa-envelope" style='font-size:15px'>
                                    <span style="margin-left: 25px;" class="contact-text place">shaynhacker@gmail.com</span>
                                 </i>
                    
                             </li> 

                             <li class="list-item">
                                 <i class="fas fa-mobile-alt" style='font-size:15px'>
                                    <span class="contact-text place">1-876-470-4800</span>
                                 </i>
                    
                             </li>               

                        </ul>                         

            </div>                                                          
         
</div>            

<div class="js"></div>


<!-- Contact Section -->

</body>
</html>