
    function login()
    {
      var username = $("#tab2 #username").attr("value");
      var pass = $("#tab2 #pass").attr("value");
      if(username ==""){
        $('#fail').show(function(){
        document.getElementById("fail").innerHTML="Username is required";
        });
      }
      else if(pass=="") {
        $('#fail').show(function(){
        document.getElementById("fail").innerHTML="Password is required";
        });
      }
      else
      {
        $.post('login.php',{email: username, password: pass}, 
      function(data)
      {
        if(data == 0)
        {
          $('#fail').show(function(){
          document.getElementById("fail").innerHTML="username wrong";
          });

        }
        if(data == 1)
        {
          $('#fail').show(function(){
          document.getElementById("fail").innerHTML="password wrong";
          });
        }
        if(data == 2)
        {
          window.location = "latest.php";
        }
      });
      }
      
      
    }


    function notlogin(){
      window.location = "latest.php";
    }
    function register()
    {
      var name = $("#tab1 #name").attr("value");
      var email = $("#tab1 #email").attr("value");
      var pass = $("#tab1 #password").attr("value");
      if(name ==""){
        $('#failr').show(function(){
        document.getElementById("failr").innerHTML="Name is required";
        });
      }
      else if(email=="") {
        $('#failr').show(function(){
        document.getElementById("failr").innerHTML="Email is required";
        });
      }
      else if(pass =="") {
        $('#failr').show(function(){
        document.getElementById("failr").innerHTML="password is required";
        });
      }
      else{
      $.post('register.php',{name: name, email:email, password:pass}, function(data)
      {
        if(data == 0)
        {
          $('#failr').show(function(){
          document.getElementById("failr").innerHTML="email exists";
          });

        }
        if(data == 1)
        {
          window.location = "latest.php";
        }
      });
    }}