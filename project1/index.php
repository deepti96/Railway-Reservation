
<!DOCTYPE html>
<head><title>Railway Reservation System</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js"></script>
    <script src="typeahead.min.js"></script>
    <script>
    $(document).ready(function(){
    $('input.typeahead').typeahead({
        name: 'typeahead',
        remote:'search.php?from=%QUERY',
        limit : 10
    });
});
    </script>

    <style type="text/css">
.bs-example{
  font-family: sans-serif;
  position: relative;
  margin: 50px;
}
.typeahead, .tt-query, .tt-hint {
  border: 2px solid #CCCCCC;
  border-radius: 8px;
  font-size: 24px;
  height: 40px;
  line-height: 30px;
  outline: medium none;
  padding: 8px 12px;
  width: 300px;
}
.typeahead {
  background-color: #FFFFFF;
}
.typeahead:focus {
  border: 2px solid #0097CF;
}
.tt-query {
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
}
.tt-hint {
  color: #999999;
}
.tt-dropdown-menu {
  background-color: #FFFFFF;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 8px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  margin-top: 12px;
  padding: 8px 0;
  width: 422px;
}
.tt-suggestion {
  font-size: 24px;
  line-height: 24px;
  padding: 3px 20px;
}
.tt-suggestion.tt-is-under-cursor {
  background-color: #0097CF;
  color: #FFFFFF;
}
.tt-suggestion p {
  margin: 0;
}
body{
  background: linear-gradient(rgba(255,255,255,.2), rgba(255,255,255,.2)), url("./img/back_train.jpg") no-repeat;
  background-size: 100% 110%;
  background-opacity: 0.2;
}

.form1{
  margin-top: 2%;
  border: solid #000000 3px;
  padding: 1%;
  margin-right: 1%;
  background-color: rgba(255,255,255,.3);

}

.form_element{
  padding-top: 10%;
}
</style>


</head>

<body style="">
 <!--background="./img/back_train.jpg"-->
 <header>
   <div style="background-color: #ffffff; padding: 5px;">
   <div style="text-align : left;float:left; font-size: 20px; width: 800px;">CSN-351 || DBMS PROJECT</div>
     <div style="text-align : right; font-size: 20px; ">Railways</div>
   </div>
 </header>
 <div class="container" style="margin-top: 2%;">
	<!--<table><td width="2000" height="50" bgcolor= #ffffff><h1><center>Train Reservation System</center></h1></td></table>-->


  <!--<table><tr>
Ticket Booking
  <td>-->
  <div class="row">
  
  <div class=" form1 col-lg-4" style="" >
  	<form action="bookticket.php" method="post">
    <center><u><h2 style="color:#352e82;">TICKET BOOKING</h2></u></center>
    <div class="form_element">
  	<h3 style="color:#352e82">From Station:</h3>

     <input type="text" name="type" class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder="From" required>
     </div>
     
     <div class="form_element">
  	<h3 style="color:#352e82">To Station:</h3>
     <input type="text" name="typeahead" class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder="To" required>
     </div>

     <div class="form_element">
  	<h3 style="color:#352e82">DATE OF JOURNEY: </h3>
    <input type="date" name="date1" id="date1" alt="date" class="IP_calendar" title="d/m/Y" required/>
    </div>

  	<center><input type="submit" style="background-color: #33d43b; padding: 7px; color: #ffffff; margin-top: 15px; border-radius: 10%; border: 1px solid green;"></center>
  	</form>
    </div>

  <!--</td>-->
<!--Cancellation of Ticket-->

  <!--<td>-->
<div class="form1 col-lg-4" style="">
  <center>
   <center><u><h2 style="color:#352e82">TICKET CANCELLATION</h2></u></center>

   <form action="cancellation.php" method="post">
   <div class="form_element">
     <h3 style="color:#352e82">PNR Number:</h3>
     <input type="number" name="pnr" min="1" max="999"class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder="PNR Number" required>
     </div>
     <br><br>
     <button type="submit" class="btn btn-danger">Cancel</button>
  </form>

</center>
</div>

<div class="col-lg-3" style="color: white; font-size: 40px; margin-top: 2%; font-weight: bold;">
<center>
<span style="color: white;">RAILWAY</span>
<br>
<span style="color: white;">RESERVATION</span>
<br>
<span style="color: white;">SYSTEM</span>
<br>
</center>
</div>
 <!-- </td>

</tr></table>-->
</div>
</body>
</html>
