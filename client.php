<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['numero']) && !empty($_POST['numero']) && isset($_POST['addresse']) && !empty($_POST['addresse']))
    extract($_POST);
    $_SESSION['client'] = $name;
    $_SESSION['numero'] = $numero;
    $_SESSION['addresse'] = $addresse;
var_dump($_SESSION);

    header('location:./listespanier.php');
}
?>
    <body>
     



           

<center>
            <div id="product-post"style="" >
                <div class="container"  >
                  
                    <div id="contact-us">
                        <div class="container">
                            <div class="row">
                                <div class="product-item col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">  
                                            <div class="message-form">
                                                <form action="#" method="post" class="send-message">
                                                    <div class="row">
                                                    <div class="name col-md-4 ">
                                                        <input type="text" name="name" id="name" placeholder="Nom compet" />
                                                    </div>
                                                    <div class="email col-md-4">
                                                        <input type="text" name="numero" id="email" placeholder="numero" />
                                                    </div>
                                                    <div class="subject col-md-4">
                                                        <input type="text" name="addresse" id="subject" placeholder="addresse" />
                                                    </div>
                                                    </div>
                                                    </center>                     
                                                  <center>  <div class="send">
                                                        <button style="width: 15%" type="submit">Commander</button>
                                                    </div></center>
                                                </form>
                                            </div>
                                        </div>
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                      
                </div>
            </div>


           
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&amp;sensor=false">
        </script>
                
    
     
    </body>
</html>