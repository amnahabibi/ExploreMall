<!DOCTYPE html>
<html  >
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
  
  <!-- Including Bootstrap / CSS links -->
<?php include('includes/cdn.html'); ?>
  
</head>
<body >


  <!-- importing navbar -->
<?php include('includes/nav.html'); ?>

<section class="engine">
  <a >html web templates</a>
</section>

<section class="services5 cid-rmvhCzd2iJ" id="services5-20">
   
    <div class="container">

        <div id="mainDiv" class="row" style="margin-top: 60px;">

          <div class="col-sm-2">
          </div>


          <div class="col-sm-8">
            <img  id="myImg" class="img-responsive img-rounded align-right" width="100%" > 
          </div>

          <div class="col-sm-2">
          </div>

        </div>

    </div>


    <div class="container" style="margin-top: 60px; margin-bottom: 100px;">

        <div class="row">
          <p id = "brand_dec" style="font-weight: bold;"></p>
          </br></br>
          <p id="brand_contact" style="font-weight: bold;">Contact : </p>
        </div>

    </div>

    <div class="container" style="margin-bottom: 60px;" >
        <div class="media-container-row title">
            <div class="col-12 col-md-8">
                <div class="mbr-section-btn align-center">
                  <a class="btn btn-success display-4"  href="https://maps.mapwize.io/#/v/lucky_one_mall?k=nqYMdclXYas4Cwvl&l=en">NAVIGATE</a>
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

<script>

  const getBrandDetails = async () => {

    var url_string = window.location.href;
    var url1 = new URL(url_string);
    var shop_id = url1.searchParams.get("id");
    console.log(shop_id);
    

    let url = "http://localhost:3002/get_brand_details/" + shop_id;
    const response = await fetch(url);
    const myJson = await response.json();
    console.log(myJson);

    document.title = myJson[0].shop_name;


    document.getElementById("myImg").src = "assets/images/brands/" + myJson[0].shop_img;
    document.getElementById("brand_dec").innerHTML = myJson[0].shop_desc;
    document.getElementById("brand_contact").innerHTML = document.getElementById("brand_contact").innerHTML + myJson[0].shop_contact;
 
  
    
  }


  window.onLoad = getBrandDetails();

</script>