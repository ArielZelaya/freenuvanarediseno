<div class="container-fluid nav-bar fixed-header" >
<link rel="shortcut icon" type="image/png" href="src/img/favicon.jpg"/>

<title>Nuvana Nutrition</title>
<script src="src/js/scripts.js" ></script>
<style>
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 2000;
  top: 0;
  left: 0;
  background-color: #1a3e57;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #999696;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
               <div class="row">
               <div id="logo-registered" class="col-md-3 col-6 logo-nav">
               <a  href="https://nuvananutrition.com/" target="_blank">
               <img class="logo-nav" src="src/img/small_logo.png" alt="">
               </a>
               </div> 
               <div class="col-md-3 col-6">
               <span  class="burger" style="color:#cd8550; font-size:30px;cursor:pointer;float:right" onclick="openNav()">&#9776; </span>
               </div>
               <div class="col-md-3"></div>
               <div class="col-md-3">
                   <a href="mailto:contact@nuvananutrition.com" >
               <img class="logo-help" src="src/img/help.png" alt="">
               </a>
               </div>
               </div>
            </div>
            <section>
													<!-- MODAL -->
													<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">FAQ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde dolore reiciendis iste aut perspiciatis corrupti 
        aspernatur fugiat quibusdam similique nisi eos expedita, maiores ipsam, dolor eum quae molestiae, voluptatum a.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        
      </div>

    </div>
  </div>
</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  console.log("opening");
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  console.log("closing");
}
</script>
												</section>