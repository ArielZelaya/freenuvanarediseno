function modalhelp(){
    Swal.fire({
        text: 'Please check your order number and try again later!',
        footer: '<a class="clickable" href="mailto:contact@nuvananutrition.com" >Order number not working?</a>',
    });
}


function firstForm(){
    var fname = document.getElementById("fullname").value;
    var email = document.getElementById("email").value;
    var select = document.getElementById("product").value;
    var ordernumber = document.getElementById("ordernumber").value;
    var valit = document.getElementById("valida").value;
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    if(fname =="" ){
        Swal.fire({text:'Complete your full name', title: " ",});
        return false;
    }
    if(email =="" || (re.test(email)==false)){
        Swal.fire({text:'Complete your email', title: " ",});
        console.log("Email vacio");
        return false;
    }
    if(select =="select"){
        Swal.fire({text:'Choose a Nuvana product', title: " ",});
        return false;
    }
    if(ordernumber =="" || ordernumber.length<19){

        Swal.fire({text:'Complete your order number', title: " ",});
        return false;
    }
    if(valit !=0){
        if(valit ==1){
            Swal.fire({
                text: 'Please check your order number and try again later!', title: " ",
                footer: '<a class="clickable" onclick="notworkingcodesender()" style="cursor:pointer;" >Order number not working?</a>',
              });
          return false;
        }
        else if(valit==2){
            Swal.fire({text:'Order number already used', title: " ",});
          return false;
        }
        else{
            Swal.fire({text:'Our team recommends to use Nuvana products for at least 7 days before reviewing', title: " ",});
            return false;
        }
        return true;
      }
}
function myFunction2() {
    var copyText = document.getElementById("myInput");
    document.getElementById('btncopied').innerText = 'Copied!';
    copyText.select();
    document.execCommand("copy");
    Swal.fire({
            text:" "+ copyText.value,
            title: " ",
        });
    document.getElementById('amazon').removeAttribute('disabled');
        $('#amazon').addClass('button3');
        return false;
    }

    function timeFunction() {
      setTimeout(function myFunction3(){
        document.getElementById('nextBtn').removeAttribute('disabled');

        document.getElementById("nextBtn").className = "mtbtn";
        $('#nextBtn').addClass('mtbtn');
      }, 5000);
   }

   function hidde_step(){
       var span =  document.getElementById("copy-span");
       var tab =  document.getElementById("copy-tab");
       tab.style.display = "none";
       span.style.display = "none";
   }

   function show_steps(){
    var span =  document.getElementById("copy-span");
     span.style.display = "inline-block";
}

/* SCRIPT FOR ORDER NUMBER VALIDATION */

$(document).ready(function() {
    $("#ordernumber").keyup(function(e) {
        var inputvalida = this.value;
        refinedvalue = inputvalida.replace(/_/g, '');
        console.log(refinedvalue.length);
      if (refinedvalue.length != 19 ) {
          return;
      } else {
          if (window.XMLHttpRequest) {
              // code for IE7+, Firefox, Chrome, Opera, Safari
              xmlhttp = new XMLHttpRequest();
          } else {
              // code for IE6, IE5
              xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
          }
          xmlhttp.onreadystatechange = function() {
            
              if (this.readyState == 4 && this.status == 200) {
                  /* document.getElementById("txtHint").innerHTML = this.responseText; */
                  
                  var foo = this.responseText;
                  
                  switch (foo.trim()){
                    case "0":
                    document.getElementById("valida").value = "0";
                    break;
                    case "1":
                    Swal.fire({
                      text: 'Please check your order number and try again later!', title: " ",
                      footer: '<a class="clickable" onclick="notworkingcodesender()" style="cursor:pointer;" >Order number not working?</a>',
                    });
                    document.getElementById("valida").value = "1";
                    break;
                    case "2":
                    
                    Swal.fire({text:'Order number already used!', title: " ",});
                    document.getElementById("valida").value = "2";
                    break;
                    case "3":
                    
                    Swal.fire({text:'Our team recommends to use Nuvana products for at least 7 days before reviewing!', title: " ",});
                    document.getElementById("valida").value = "3";
                    break;
  
                  }
                  
              }
          };
          
          xmlhttp.open("GET","db_search.php?q="+this.value,true);
          xmlhttp.send();
      }
  
    });
  
  });


function notworkingcodesender(){
  swal.clickConfirm();
  var inputVal = document.getElementById("ordernumber").value;
  Swal.fire(   
    'Sorry for the inconvenience',
  'We will take care of this as soon as possible.<br> Please try again in the following 24 hours.'
                  )
                  //console.log(inputVal);
requestcode(inputVal);
}
function requestcode(ordernumber) {
    console.log(ordernumber);
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                
            }
        }
        xmlhttp.open("GET", "requestcode.php?ordernumber="+ordernumber, true);
        xmlhttp.send();    
}
