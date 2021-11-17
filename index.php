<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Task 2 - Navya Verma</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>

    <body>
        <center>
            <h1>Electricity Bill</h1>
            <br><br><hr style="width:50%"><br><br>
            <form method="post">
                <label>Meter Number:</label>&ensp;
                <input type="text" id="meter" name="meter" size="50" placeholder="Please enter your meter number">
                <br><br>
                <label>Identity Card:</label>&ensp; &nbsp;
                <input type="text" id="idcard" name="idcard" size="50" placeholder="Please enter your id card number">
                <br><br>
                <button type="button" onclick="submitInfo()">SUBMIT</button>
            </form>
        </center>
    </body>

    <script type="text/javascript">

    if(window.history.replaceState){
      window.history.replaceState( null, null, window.location.href );
    }

    function submitInfo() {
      var today = new Date();
    console.log(today);
    if((today.getDay() === 2 || today.getDay() === 5) && today.getHours() >= 14){
      // window.alert('Success');
      $.ajax({
        type:'POST',
        url: 'insert.php',
        data: {meter_number: document.getElementById("meter").value, id_card: document.getElementById("idcard").value},
        success: function(data) {
          window.alert('Success');
        }
      });

    }
    else{
      window.alert('Unsuccessful');
    }

    }
    </script>
</html>
