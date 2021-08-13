    // https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_sidenav
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }
    
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }

    function hideSideNav(){
        document.getElementById("mySidenav").style.width = "0";

    }


    // https://stackoverflow.com/questions/38990163/how-can-i-add-and-remove-an-active-class-to-an-element-in-pure-javascript
    // https://www.w3schools.com/howto/howto_js_active_element.asp 
    // https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_active_element
    // https://www.w3schools.com/jsref/prop_html_classname.asp
    // Add active class to the current button (highlight it)
    var header = document.getElementById("menu-wrapper");
    var btns = header.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace("active","");
    this.className += " active";
    });
    }                                  

    // https://codepen.io/sitanotern1337/pen/MPVbeL
    //I had to modify the code a bit. It's similar to the code shown in this video
    //https://www.youtube.com/watch?v=V9CY0F4Wc7M (The "scroll" event in JavaScript | window.onscroll)
    const newNav = () => {
        let navigation = document.querySelector('.nav');
        window.addEventListener('scroll', () => {
          if(document.body.scrollTop > 100 ||document.documentElement.scrollTop > 100 ) {
            navigation.classList.add('hide');
          } else {
            navigation.classList.remove('hide');
          }
        });
      
      }
      
      newNav();

    //   https://stackoverflow.com/questions/1144805/scroll-to-the-top-of-the-page-using-javascript?noredirect=1&lq=1
    // Get The Id
    var topPage = document.getElementById(`top-page`)

    // On scroll, Show/Hide the button
    window.onscroll = () => {
    window.scrollY > 300
        ? (topPage.style.display = `block`)
        : (topPage.style.display = `none`)         
    }     

    function topPageScroll(){
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace("active","");
      
      // https://www.w3schools.com/howto/howto_js_add_class.asp
      var element = document.getElementById("myDIV");
      element.classList.add("active");        

    }

    var topPageMenuRemove = document.getElementById(`top-page`)
    topPageMenuRemove.onclick = () => {
      topPageScroll();
      window.scrollTo({ top: 0, behavior: 'smooth'        
                  })
    }
     
    function dynamicMenu(el){
      var reuse = el;  
      var target = reuse.getAttribute('data-target');
      console.log(target);
  
      var xhttp = new XMLHttpRequest();
      xhttp.open("GET", target + ".php", true);
      xhttp.send();
      xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
          document.getElementById("info").innerHTML = this.responseText;
             var xyz = target + ".php";
              var x = xyz.replace(/['"]+/g, '');
              console.log(x);

              if(target){
                loadScript(target + ".js");
              }
              function loadScript(url)
              {

                var head = document.getElementsByClassName('js')[0];
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.src = url; 
                head.appendChild(script);

              }  
  
  
          }
              
      };
  
      
     
  } 


  function toggle(){
    var blur = document.getElementById('blur');
    blur.classList.toggle('active')

    var popup = document.getElementById('popup');
    popup.classList.toggle('active')
    }

    