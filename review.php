<?php 
 session_start();
 if ($_SESSION["verification"]==="verified") { 
  $_SESSION["verification"]="completed"; 
 } else {
   // Finally, destroy the session.
 session_destroy();
   header("Location: index.php", true, 301);
 }

?>
<!doctype html><html lang="en"><head>
<!-- Required meta tags -->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- 		SWEETALERT -->
  
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" />

<script src="https://cdn.jsdelivr.net/npm/jquery-mask-plugin@1.14.16/dist/jquery.mask.min.js"></script>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--    <link href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" />-->
		<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@400;800&display=swap" rel="stylesheet"> 
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
			<!-- OWN CSS -->
			<link rel="stylesheet" href="src/css/style.css">


    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
				
			</head>
			<body>
        
				<?php
            include('src/includes/header.php');
            ?>
            <!-- NAVBAR -->
			<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a href="mailto:contact@nuvananutrition.com">Need help?</a>
			</div
				<section class="section-review" id="review">
					<div class="container-fluid review">
					<div class="row row-ukn">
            <div class="col-md-8 offset-md-2 text-center">
            <div id="form-shadowed" class="container form-container">
              <div class="container h2-review">
            <h2 class="heading-form">Please give us your  <br/>honest feedback.</h2>
            <div class="empare">  
            <p class="subheading-form" style="text-align: justify">
            We are a family-operated business and only share with you products that we take ourselves and recommend to our loved ones. 
             The feedback you provide here helps us to create high-quality supplements that improve all aspects of our customers’ lives. 
             <br>
             <br>
             We’d be thrilled if you would consider leaving us a review on Amazon to help others in your situation.
            </p>
            </div>
            <form id="regForm" action="discounts.php" method="POST">
  <!-- One "tab" for each step in the form: -->
  <div class="tab stars-review-tab">

            <!-- Star System -->
            <div class="text-center underline" style="margin-top: 30px; "> 
          <input type="radio" class="hidden" name="stars" id="star-null"/>
          <input type="radio" class="hidden" name="stars" value="1" id="star-1" checked  />
          <input type="radio" class="hidden" name="stars" value="2" id="star-2" checked />
          <input type="radio" class="hidden" name="stars" value="3" id="star-3" checked />
          <input type="radio" class="hidden" name="stars" value="4" id="star-4" checked />
          <input type="radio" class="hidden" name="stars" value="5" id="star-5" checked />   <!-- checked hace que este activo -->
          <section>
            <label onclick="hidde_step()" for="star-1"> <svg width="255" id="star1"  height="240" style="fill:#eeeeee;" viewBox="0 0 51 48">
              <path  d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"/>
              </svg> </label>
            <label onclick="hidde_step()" for="star-2"> <svg width="255" id="star2"  height="240" style="fill:#eeeeee;" viewBox="0 0 51 48">
              <path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"/>
              </svg> </label>
            <label onclick="hidde_step()" for="star-3"> <svg width="255" id="star3"  height="240" style="fill:#eeeeee;" viewBox="0 0 51 48">
              <path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"/>
              </svg> </label>
            <label onclick="hidde_step()" for="star-4"> <svg width="255" id="star4"  height="240" style="fill:#eeeeee;" viewBox="0 0 51 48">
              <path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"/>
              </svg> </label>
            <label onclick="show_steps()" for="star-5"> <svg width="255" id="star5"  height="240" style="fill:#eeeeee;" viewBox="0 0 51 48">
              <path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"/>
              </svg> </label>
            <!-- <label for="star-null"> Clear </label> -->    <!-- Esto es para reset las estrellas -->
          </section>
          <p class="text-center" style="padding-top:0px; color: #333333;font-weight:300; font-family: 'Open Sans', sans-serif; font-size: 22px;  ">How did you like your Nuvana product? *</p> 
          <!-- End Start System -->
          </div>
          <p class="form-question text-center" style="padding-top: 30px; color:#000000">
            Tell us about your experience with the product. Please include details about how it's benefiting you. *
          </p>
          <textarea id="txtarea" name="review" class="textareastyle" rows="10" style="margin-top: 25px;"></textarea>
  </div>
  <div id="copy-tab" class="tab copy-tab">
   <p class="form-question text-center" style="font-size: 16px;color:#000000"                    >Here's what you said:</p>
  <textarea disabled class="textareastyle" id="disabledtxtarea" rows="7" style="margin-top: 25px;">
        <?php echo $_SESSION["review"]?>
        </textarea>
<input type="text" name="review"  style="opacity: 0.0;
  filter: alpha(opacity=00); /* For IE8 and earlier */" id="myInput"> 
  <p class="form-question text-center" style="color:#000000">
          Click to copy your review, then share it on Amazon.* Don’t worry, you won’t lose your place in the process.
        </p>
        <!-- Start of 3 Buttons -->
        <p class="text-center" style="margin-top: 25px;">
          <button class="button2 text-uppercase" type="button" id="btncopied" onclick="myFunction2()" style="margin-right: 10px;">Click to Copy</button>
          <a  target="_blank" href="<?php
         $product= $_SESSION["product"];
           if ($product == "Turmeric") { 
            echo "https://www.amazon.com/review/create-review/ref=cm_cr_dp_d_wr_but_top?ie=UTF8&channel=glance-detail&asin=B07MLTMQYD";
         } elseif ($product == "Shut Eye"){
          echo "https://www.amazon.com/review/create-review/ref=cm_cr_dp_d_wr_but_top?ie=UTF8&channel=glance-detail&asin=B07B437R5L";
         }else{
          echo "https://www.amazon.com/review/create-review/ref=cm_cr_dp_d_wr_but_top?ie=UTF8&channel=glance-detail&asin=B07QMB6YZY";
         }
         ?>">
            <button  class="buttondisabled2 text-uppercase" type="button" id="amazon"  onclick="timeFunction()" disabled>Review us on Amazon</button>
          </a>
        </p>
        <hr>
        <!-- <p class="text-center">
        <a href="shipping.php"> 
          <button class="buttondisabled2" id="two" style="margin-top: 30px;" disabled> OKAY ITS ON AMAZON</button>
        </a></p> -->
        <!-- End of 3 Buttons --> 
  </div>
  <div class="tab">
  <p class="form-question text-center" style="color:#000000">
          Where are we sending your free bottle?
        </p>
        <br>
        <input style="width:100%;" type="text"  name="email" class="amazon2 underline" id="amazon-ordermail" placeholder="Email - Tracking info will be sent here" >
        <div class="row">
        <div class="col-md-6">
          <input style="width:100%;" type="text" oninput="this.value = this.value.replace(/[^a-zA-Z ]/g, '').replace(/(\.*)\./g, '$1');" id="fName" name="fName" class="amazon2 underline"  placeholder="First Name">
        </div>
        <div class="col-md-6">
          <input style="width:100%;" type="text" oninput="this.value = this.value.replace(/[^a-zA-Z ]/g, '').replace(/(\.*)\./g, '$1');" id="lName" name="lName" class="amazon2 underline"  placeholder="Last Name" >
        </div>
        </div>
        <div id="locationField" >
          <input style="width:100%;" type="text" id="sAddress1" name="sAddress1" class="amazon2 underline"  placeholder="Address 1" onFocus="geolocate()">
      </div>
      <input style="width:100%;" type="text" id="sAddress2" name="sAddress2" class="amazon2 underline"  placeholder="Address 2" title="Add unit number if applicable" data-toggle="tooltip" data-placement="top" rel="txtTooltip">

      <input style="width:100%;" type="text" id="route" name="sAddress2" class="amazon2 underline"  placeholder="Route" title="Add unit number if applicable" data-toggle="tooltip" data-placement="top" rel="txtTooltip" hidden>
      <input style="width:100%;" type="text" id="street_number" name="sAddress2" class="amazon2 underline"  placeholder="Street Number " title="Add unit number if applicable" data-toggle="tooltip" data-placement="top" rel="txtTooltip" hidden>

      <script>
            $(document).ready(function() {
                $('input[rel="txtTooltip"]').tooltip();
            });
        </script>
        <div class="row">


<!--          <input style="width:100%;" type="text" name="sAddress2" class="amazon2 underline"  placeholder="Address Line 2" title="Add unit number if applicable" data-toggle="tooltip" data-placement="top" rel="txtTooltip">-->
        

        <div class="col-md-4">
          <input style="width:100%;" type="text" id="locality" name="city" class="amazon2 underline"  placeholder="City">
        </div>
        <div class="col-md-4">
          <select id="administrative_area_level_1" name="state" class="amazon2 select underline" style="padding-bottom:1px; border-bottom:1px #000 solid; max-width:100%;" >
            
            <?php include("src/includes/states.php");?> Lista de Estados (src/includes/states)

          </select>
        </div>
        <div class="col-md-4">
          <input  style="width:100%;" type="text" id="postal_code" name="zip"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="amazon2 underline"   pattern=".{5,5}"maxlength="5" placeholder="Zip">
        </div>
      </div>
      <!-- <input  type="submit" name="send" value="Submit" required/> -->
      <!-- <div class="text-center">
      <button class="buttonfull text-center">SUBMIT</button>
    </div> -->
  </div>
  <!-- <div class="tab">Login Info:
    <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
    <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
  </div> -->
  <div style="overflow:auto;">
<!--    <div style="float: left">-->
<!--      <button type="button" class="mtbtn" id="prevBtn" onclick="nextPrev(-1)">Previous</button>-->
<!--    </div>-->
    <div style="float:right;">
      <button type="button" class="mtbtn" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span id="copy-span" class="step"></span>
<!--    <span class="step"></span>-->
    <span class="step"></span> 
    <!-- <span class="step"></span> -->
  </div>
</form>
 </div>
            </div>
            </div>
            </div>
            </div>
					
							</div>
						</section>
						
												<?php
               								include('src/includes/footer.php');
              							 ?>

<script>
                    var placeSearch, autocomplete;

                    var componentForm = {
                        street_number: 'short_name',
                        route: 'long_name',
                        locality: 'long_name',
                        administrative_area_level_1: 'long_name',
                        postal_code: 'short_name'

                    };

                    function initAutocomplete() {
                        // Create the autocomplete object, restricting the search predictions to
                        // geographical location types.
                        autocomplete = new google.maps.places.Autocomplete(
                            document.getElementById('sAddress1'), {types: ['geocode']});
                        // Avoid paying for data that you don't need by restricting the set of
                        // place fields that are returned to just the address components.
                        autocomplete.setFields(['address_component']);

                        // When the user selects an address from the drop-down, populate the
                        // address fields in the form.
                        autocomplete.addListener('place_changed', fillInAddress);

                    }

                    function fillInAddress() {
                        console.log("entra en el fill address ");
                        // Get the place details from the autocomplete object.
                        var place = autocomplete.getPlace();
                        var address_data;

                        // for (var component in componentForm) {
                        //     document.getElementById(component).value = '';
                        //     // document.getElementById(component).disabled = false;
                        //     console.log("funcion  get element by id");
                        // }
                        // console.log("salio de funcion get element by id ");
                        // Get each component of the address from the place details,
                        // and then fill-in the corresponding field on the form.
                        for (var i = 0; i < place.address_components.length; i++) {

                            console.log("Address component : ");
                            console.log(addressType);
                            console.log(place.address_components.length);
                            var addressType = place.address_components[i].types[0];
                            if (componentForm[addressType]) {
                                var val = place.address_components[i][componentForm[addressType]];
                                // var address1_route;

                                if (addressType == "street_number"){
                                    var address1_street_number = place.address_components[i][componentForm[addressType]];

                                }else if (addressType=="route"){
                                    var address1_route = place.address_components[i][componentForm[addressType]];

                                }

                                // console.log("valor de cada address type");
                                // console.log(val);
                                document.getElementById(addressType).value = val;

                            }
                        }

                        if (!address1_street_number){

                            document.getElementById("sAddress1").value =address1_route;
                        }
                        else{

                            document.getElementById("sAddress1").value = address1_street_number +" "+ address1_route;
                        }


                    }

                    function geolocate() {
                        if (navigator.geolocation) {
                            navigator.geolocation.getCurrentPosition(function(position) {
                                var geolocation = {
                                    lat: position.coords.latitude,
                                    lng: position.coords.longitude
                                };
                                var circle = new google.maps.Circle(
                                    {center: geolocation, radius: position.coords.accuracy});
                                autocomplete.setBounds(circle.getBounds());
                            });
                        }
                    }
                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHrRpn0FGYLAZ0bi1UTHPCmGClIZo8diA&libraries=places&callback=initAutocomplete" ></script>
                      </body>
                      
                      <script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab




function showTab(n) {
  // This function will display the specified tab of the form...

  var z = document.getElementsByClassName("tab");
  var y = new Array;
for (let i = 0; i<z.length;i++){
  y.push(z[i]);
}
y.splice(1,1);
  var star5 = document.getElementById("star-5");

  if(!document.getElementById("star-5").checked){
    
    var x = y;
  }else{
   
    var x = z;
  }
  
if(document.getElementById("star-5").checked && n==1){
  var nxtbtn = document.getElementById("nextBtn");
  nxtbtn.disabled=true;
  
  nxtbtn.classList.add("disbtn");
 
}

  x[n].style.display = "block";
/*   if(!star5.checked && currentTab==1){

    x[n+1].style.display = "block";
  }else{
    x[n].style.display = "block";
  } */
  //... and fix the Previous/Next buttons:
  /* if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  } */
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}



function nextPrev(n) {
  var review = document.getElementById("txtarea").value;
  if(review.length>=50){   
  // This function will figure out which tab to display
  var z = document.getElementsByClassName("tab");
  var y = new Array;
for (let i = 0; i<z.length;i++){
  y.push(z[i]);
}
y.splice(1,1);
  var star5 = document.getElementById("star-5");

  if(!document.getElementById("star-5").checked){

    var x = y;
  }else{
   
    var x = z;
  }
  // Exit the function if any field in the current tab is invalid:
    if(currentTab == 0){
      var review = document.getElementById("txtarea").value;
      var disabledreview =  document.getElementById("disabledtxtarea");
      var myimput =  document.getElementById("myInput");
      myimput.value = review;
      disabledreview.value = review;
    }
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
var form_shadow = document.getElementById("form-shadowed");
      form_shadow.style.opacity="0";
      let timerInterval
Swal.fire({
  title: 'Submiting form',
  
  timer: 1800,
  timerProgressBar: true,
  onBeforeOpen: () => {
    Swal.showLoading()
    timerInterval = setInterval(() => {
      const content = Swal.getContent()
      if (content) {
        const b = content.querySelector('b')
        if (b) {
          b.textContent = Swal.getTimerLeft()
        }
      }
    }, 100)
  },
  onClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    
  }
})
var myVar = setInterval(myTimer, 1800);

function myTimer() {
  document.getElementById("regForm").submit();
    return false;
} 
    
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}else{
  Swal.fire("Your review should be at least 50 characters long.");
}
}

function validateForm() {
  // This function deals with validation of the form fields
  var z = document.getElementsByClassName("tab");
  var t = new Array;
for (let i = 0; i<z.length;i++){
  t.push(z[i]);
}
t.splice(1,1);
  var x, y, i, valid = true;
  if(!document.getElementById("star-5").checked){
   
    var x = t;
  }else{

    var x = z;
  }
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if ((currentTab==1 && !document.getElementById("star-5").checked) || currentTab==2) {
      /* SHIPPING VALIDATON */
    /* GETTING VALUES FROM SHIPPING INPUTS  Address2 is optional */
    var shipping_email = document.getElementById("amazon-ordermail");
    var fName = document.getElementById("fName");
    var lName = document.getElementById("lName");
    var sAddress1 = document.getElementById("sAddress1");
    var city = document.getElementById("locality");
    var state = document.getElementById("administrative_area_level_1");
    var zip = document.getElementById("postal_code");
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/; 
    /* VALIDATIONS FOR SHIPPING INPUTS */
    console.log(zip.value);
    console.log(zip.value.length);
    if(zip.value =="" || zip.value.length<5){
      Swal.fire({text:'Complete your zip code', title: " ",});
      zip.className += " invalid";
      valid = false;
      }else{zip.classList.remove("invalid");}
    if(state.value ==="select"){
      console.log("selected");
      Swal.fire({text:'Choose a state', title: " ",});
      state.className += " invalid";
      valid = false;
    }
    if(city.value =="" || city.value.length<4){
      Swal.fire({text:'Complete your city', title: " ",});
      city.className += " invalid";
      valid = false;
    }else{city.classList.remove("invalid");}
    if(sAddress1.value =="" || sAddress1.value.length <= 5  ){
      Swal.fire({text:'Complete your address 1', title: " ",});
      sAddress1.className += " invalid";
      valid = false;
    }else{city.classList.remove("invalid");}
    if(lName.value =="" || lName.value.length <= 3  ){
      Swal.fire({text:'Complete your last name', title: " ",});
      lName.className += " invalid";
      valid = false;
    }else{lName.classList.remove("invalid");}
    if(fName.value =="" || fName.value.length <= 3 ){
      Swal.fire({text:'Complete your first name', title: " ",});
      fName.className += " invalid";
      valid = false;
    }else{fName.classList.remove("invalid");}
    if(shipping_email.value =="" || (re.test(shipping_email.value)==false)){
      Swal.fire({text:'Complete your email', title: " ",});
      shipping_email.className += " invalid";
      valid = false;
    }else{shipping_email.classList.remove("invalid");}
      /* SHIPPING VALIDATON */
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  
  if(!document.getElementById("star-5").checked && n==1){
    x[n].className = " active";
  }
  x[n].className += " active";
}
</script>

</html>