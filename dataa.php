<?php
session_start();
if($_SESSION['access']==="granted"){

}
else{
        header("Location: login2.php", true, 301);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="src/img/neur-02.jpg"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Nuvana Nutrition</title>

    <!-- Bootstrap -->
    <link href="src/css/font.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
    <!-- HEADER -->
    <div class="container-fluid " style="background-color: #4d738a;  padding-top: 10px; padding-bottom: 55px;">
      <div class="container text-center">
        <h1 class="text-center sanscondensed" style="color: #ffffff; font-weight: 700; font-size: 70px; padding-top: 5px; margin-bottom: -5px;">Nuvana</h1>
        <br>
        <p class="text-center sans" style="color:  #ffffff; font-size: 20px;">Registered orders</p>
        <img src="src/img/group3.png" style="width: 350px; padding-top: 10px;max-width: 100%;">
        
      </div>
    </div>

    <!-- <div class="container-fluid" style="background-color: #E1DABB; padding-bottom: 50px;">
      <div class="container">
        <p class="text-center sansc" style="margin-bottom: 0px; padding-top: 50px;">GET A FREE SAMPLE ON US</p>
        <p class="text-center roboto" style="font-size: 20px; margin-top: -4px;">Plus save on future Nuvana product purchases.</p>
        <p class="text-center"> <img src="src/img/group.png" style="width: 300px; margin-top: 2%;"></p>
        <p class="text-center roboto">Tell us what you think and we'll send you a free product sample. No strings attached.</p>
        <p class="text-center roboto">*Limit one free sample per household. We only ship to addresses in the US. Offer valid while supplies last.</p>
      </div>
    </div> -->
    <!-- END HEADER -->
      <!-- DATA TABLE -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" ></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<!-- RESPONSIVE DATATABLE -->

    <!-- NEW FORM -->

    
    <div class="container-fluid" >
    <div id="2ndcontainer" class="container " style="margin-top:70px; margin-bottom:70px; max-width:100%; " class="dtable" >
    <table id="datatbl" class="display " style="max-width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Order N#</th>
                <th>Product</th>
                <th>Stars</th>
                <th>Email</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address line 1</th>
                <th>Address line 2</th>
                <th>City</th>
                <th>State</th>
                <th>Zip</th>
            </tr>
        </thead>
        <tbody>
          <!-- INICIO PHP -->
          <!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "marvinvi_freenuvanaionos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID,Product,OrderNumber,Rating,Email,First_Name,Last_name,Shipping1,Shipping2,City,St,Zip,Review FROM nuvana ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
        echo "<td>". $row["ID"]. "</td>";
        echo "<td data-priority='1'>". $row["OrderNumber"]. "<span class='badge badge-danger hide_ele' style='margin:5px;'  hidden>!</span></td>";
        echo "<td>". $row["Product"]. "</td>";
        echo "<td>". $row["Rating"]. "</td>";
        echo "<td >". $row["Email"]. "<span class='badge badge-danger hide_ele' style='margin:5px;'  hidden>!</span></td>";
        echo "<td data-priority='2'>". $row["First_Name"]. "</td>";
        echo "<td>". $row["Last_name"]. "</td>";
        echo "<td>". $row["Shipping1"]."<span class='badge badge-danger hide_ship' style='margin:5px;'  hidden>!</span></td>";
        echo "<td>". $row["Shipping2"]. "</td>";
        echo "<td>". $row["City"]. "</td>";
        echo "<td>". $row["St"]. "</td>";
        echo "<td>". $row["Zip"]. "</td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
            <!-- <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr> -->
            <!-- FIN PHP -->
        </tbody>
        <tfoot>
            <tr>
            <th>Id</th>
            <th>Order N#</th>
                <th>Product</th>
                <th>Stars</th>
                <th>Email</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address line 1</th>
                <th>Address line 2</th>
                <th>City</th>
                <th>State</th>
                <th>Zip</th>
               
            </tr>
        </tfoot>
    </table>
    <script>
    $(document).ready(function() {
    $('#datatbl').DataTable({
    "order": [0,'desc'],
    "rowCallback": function( row, data, index ) {
                                var allData = this.api().column(1).data().toArray();
                                var ship_data = this.api().column(4).data().toArray();
                                var addres_data = this.api().column(7).data().toArray();
                                if (allData.indexOf(data[1]) != allData.lastIndexOf(data[1])) {

                                    $('td:eq(1)', row).attr('class','repeted');
                                    // $('td:eq(3)', row).removeAttr('hidden');
                                    $('td:eq(1)', row).children().removeAttr('hidden');


                                }
                                if (ship_data.indexOf(data[4]) != ship_data.lastIndexOf(data[4])) {

                                    $('td:eq(4)', row).attr('class','repeted');
                                    // $('td:eq(3)', row).removeAttr('hidden');
                                    $('td:eq(4)', row).children().removeAttr('hidden');

                                }
                                if (addres_data.indexOf(data[7]) != addres_data.lastIndexOf(data[7])) {

                                    $('td:eq(7)', row).attr('class','repeted');
                                    // $('td:eq(3)', row).removeAttr('hidden');
                                    $('td:eq(7)', row).children().removeAttr('hidden');

                                }



                            }
  },{
  "columns": [
    { "width": "5%" },
    { "width": "5%" },
    { "width": "5%" },
    { "width": "5%" },
    { "width": "5%" },
    { "width": "5%" },
    { "width": "5%" },
    { "width": "5%" },
    { "width": "5%" },
    { "width": "5%" },
    { "width": "5%" },

    
  ]
} ,{autoWidth: false},{
    responsive: true
});
} );

var wd = document.getElementById('2ndcontainer').offsetWidth;
console.log(wd); document.getElementsByClassName
var lis = document.getElementsByTagName("li");
for (var i=0;i<lis.length;i++){
  lis[i].style.width=wd;
}



    </script>
    <style>
      th { font-size: 14px; }
td { font-size: 14px; }
.dtr-data{
  max-width: 100%;
  word-wrap: break-word;
}

    </style>
    </div>
    </div>
    

    

    <!-- FOOTER -->
    <?php include ("src/includes/footer.php"); ?>
    <!-- END FOOTER -->
<!-- Latest compiled and minified CSS -->

  </body>
</html>