<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Profile</title>
  
 <!-- Including Bootstrap / CSS links -->
<?php include('includes/cdn.html'); ?>
  
  
  
</head>
<body>

  <!-- importing navbar -->
<?php include('includes/nav.html'); ?>

<section class="engine"><a >online site builder</a></section><section class="header15 cid-rmq80GFD0d mbr-fullscreen" id="header15-16">


    <div class="container align-right">
        <div class="row">
            <div class="mbr-white col-lg-8 col-md-7 content-container">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-2">
                    AN EXPLORE'S PROFILE</h1>
                <p class="mbr-text pb-3 mbr-fonts-style display-5">
                    Enjoy exclusive benefits with your explore's profile.<br>Get notified about about the amazing offers, events and discover whats new at the mall with your explore profile.</p>
            </div>
            <div class="col-lg-4 col-md-5">
                <div class="form-container">
                    <div class="media-container-column">
                       <!--  <div class="media-container-column" data-form-type="formoid"> -->

                      
                        <form method="post" class="mbr-form form-with-styler" data-form-title="Explore Form" >
<!-- 
                            <input type="hidden" name="email" data-form-email="true" value="JbRlIbrZz/uJNP+mkEEcQSI+Kmr9pypQecylwrHzW8jpaJ2QgnEeK7b8KzPRPLra2NhTUit0QabAXj/dBzOcG6sThEaWU7UjzMMfAsnu5lmoCW+AGtymNaSZQDOwqJw5">
                            <div class="row">
                                <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                                <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                                </div>
                            </div> -->

                            <div class="dragArea row">

                                <div class="col-md-12 form-group " data-for="name">
                                    <input type="text" name="name" placeholder="Name" data-form-field="Name" required="required" class="form-control px-3 display-7" id="name-header15-16">
                                </div>
                                <div class="col-md-12 form-group " data-for="email">
                                    <input type="email" name="email" placeholder="Email" data-form-field="Email" required="required" class="form-control px-3 display-7" id="email-header15-16">
                                </div>
                                <div data-for="phone" class="col-md-12 form-group ">
                                    <input type="tel" name="phone" placeholder="Phone" data-form-field="Phone" class="form-control px-3 display-7" id="phone-header15-16">
                                </div>
                                
                                <div class="col-md-12 input-group-btn">
                                
                                <!-- <button type="submit" class="btn btn-secondary btn-form display-4" onClick="subscribe()">Get Started Now</button> -->
                                <button type="submit" class="btn btn-secondary btn-form display-4" name = 'submit'>Get Started Now</button>
                            </div>
                            
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>

<!--importing footer-->
<?php include('includes/footer.html'); ?>


<!-- Including Javascript link -->
<?php include('includes/scripts.html'); ?>
  
</body>
</html>

<?php

include('includes/conn.php');

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "Insert into subscriber (subscriber_name, subscriber_email, subscriber_contact) VALUES ('$name', '$email', '$phone')";

    if($conn->query($sql)){
        echo "<script>alert('Thankyou, you have been successfully subscribed.')</script>";
    }
    else{
        echo "<script>alert('Sorry, there was an error, please try again.')</script>";
    }

}

?>

<!-- <script>

    const subscribe = async () => {

        var name = document.getElementById("name-header15-16").value;
        var email = document.getElementById("email-header15-16").value;
        var phone = document.getElementById("phone-header15-16").value;

        let url = "http://localhost:3002/subscribe/" + name + "/" + email + "/" + phone;
        const response = await fetch(url);
        const myJson = await response.json();

        console.log("naveed");
        console.log(myJson);
        
        if(myJson.status){
            alert("Subscribed");
        }


    }

</script> -->