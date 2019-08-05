<!DOCTYPE html>
<html  >
<head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Brands</title>
  
  <!-- Including Bootstrap / CSS links -->
<?php include('includes/cdn.html'); ?>
  
  
  
</head>
<body>


  <!-- importing navbar -->
<?php include('includes/nav.html'); ?>

<section class="engine"><a >html web templates</a></section><section class="services5 cid-rmvhCzd2iJ" id="services5-20">
   
    <div class="container">
        <div id="mainDiv" class="row">
           
            <div class="title pb-5 col-12">
                <h2 class="align-left mbr-fonts-style m-0 display-2">Brands</h2>
            </div>

         </div>
    </div>

</section>

<div style="margin-bottom: 185px; ">
</div>


<!--importing footer-->
<?php include('includes/footer.html'); ?>


<!-- Including Javascript link -->
<?php include('includes/scripts.html'); ?>
  
</body>
</html>

<script>

  const getBrands = async () => {

    let url = "http://localhost:3002/all_brands";
    const response = await fetch(url);
    const myJson = await response.json();
    console.log(myJson);

    var mainDiv = document.getElementById("mainDiv");
 
    for (var i=0; i<myJson.length; i++) {

    	var div1 = document.createElement("div");
      	div1.classList.add("card");
      	div1.classList.add("px-3");
      	div1.classList.add("col-12");

      	var div2 = document.createElement("div");
      	div2.classList.add("card-wrapper");
      	div2.classList.add("media-container-row");
      	div2.classList.add("media-container-row");

      	var div3 = document.createElement("div");
      	div3.classList.add("card-box");

      	var div4 = document.createElement("div");
      	div4.classList.add("top-line");
      	div4.classList.add("pb-3");

      	var div5 = document.createElement("div");
      	div1.classList.add("bottom-line");

      	var h4 = document.createElement("h4");
      	h4.classList.add("card-title");
      	h4.classList.add("mbr-fonts-style");
      	h4.classList.add("display-5");

      	var p = document.createElement("p");
      	p.classList.add("mbr-text");
      	p.classList.add("cost");
      	p.classList.add("mbr-fonts-style");
      	p.classList.add("m-0");
      	p.classList.add("display-5");

      	var a = document.createElement("a");
      	a.classList.add("text-info");
      	a.href = "/explore/Brand_Description.php?id=" + myJson[i].shop_id;
      	a.innerHTML = "&gt;";

      	var text = document.createTextNode(myJson[i].shop_name);
     
      	p.appendChild(a);
      	h4.appendChild(text);
      	div4.appendChild(h4);
      	div4.appendChild(p);
      	div3.appendChild(div4);
      	div3.appendChild(div5);
      	div2.appendChild(div3);
      	div1.appendChild(div2);

      	mainDiv.appendChild(div1);

    }
    
  }

  window.onLoad = getBrands();

</script>