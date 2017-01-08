<!-- contact us section ends -->
    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-2"></div>
                <div class="col-xs-12 col-sm-12 col-md-8 no-padding">
                    <div class="contact">
                        <h2>contact us</h2>
                        <p class="log"></p>
                        <i class="fa fa-angle-double-down" id="in" aria-hidden="true"></i>
                        <i class="fa fa-angle-double-up" id="out" aria-hidden="true"></i>
                        <?php
                            require_once 'include/classes/class.user.php';
                            $user = new USER;
                            
                            if (isset($_POST["contactus"])) {
                                $name = trim($_POST["name"]);
                                $email = trim($_POST["email"]);
                                $message = trim($_POST["message"]);
                            
                                if ($name == "" || $email == "" || $message == "") {
                                    echo '*Must fill all the above fields*';
                                } else {
                                    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                                    if (strlen($name) < 2 || strlen($name) < 2) {
                                        echo "*Name must be more than 2 characters*";
                                    }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                        echo "*Invalid email address*";
                                    }else{
                                        try{
                                            $result = $user->runQuery("INSERT INTO contactus(name, email, message) VALUES(:u_name, :u_email, :message)");
                                            $result->bindParam(":u_name", $name);
                                            $result->bindParam(":u_email", $email);
                                            $result->bindParam(":message", $message);
                                            $result->execute();
                                            
                                            if($result){
                                                echo "Thanks for contacting us.";
                                            }
                                        }catch(PDOException $ex){
                                            echo $ex->getMessage();
                                        }
                                    }
                                }
                            }
                        ?>
                        <script type = "text/javascript" language = "javascript">
                         $(document).ready(function() {
                            
                            $(".fadeview").hide();
                            $("#out").hide();
                            $(".log").text('Click below');
                
                            $("#in").click(function(){
                               $(".fadeview").fadeIn( 'slow', function(){ 
                                  $("#in").hide();
                                  $("#out").show();
                                  $(".log").hide();
                               });
                            });
                
                            $("#out").click(function(){
                               $(".fadeview").fadeOut( 'slow', function(){
                                    $("#in").show();
                                    $("#out").hide();
                                    $("p").show();
                               });
                            });
                				
                         });
                      </script>
                        <div class="fadeview">
                        <form method="post">
                            <input type="text" name="name" placeholder="NAME" />
                            <input type="text" name="email" placeholder="EMAIL" /><br />
                            <textarea rows="5" name="message" placeholder="MESSAGE"></textarea><br />
                            <input type="submit" name="contactus" value="SUBMIT" />
                        </form>
                        </div>                     
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2"></div>
            </div>
        </div>
    </section>