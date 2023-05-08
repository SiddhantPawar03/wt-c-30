<!DOCTYPE html>
<html>
<head>
    <title>Student Results</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Enter Student ID</h2>
    <br>
    <form id="resultForm">
        <label for="student_id">Student ID:</label>
        <input type="text" id="student_id" name="student_id"><br><br>
        
        <input type="submit" value="Submit">
    </form>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Results</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1 id='name'></h1>
        
        <table>
			<thead>
				<tr>
					<th>Subject</th>
					<th>MSE Marks (30%)</th>
					<th>ESE Marks (70%)</th>
					<th>Total Marks</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Compiler Design</td>
					<td id='mse_marks1'></td>
					<td id='ese_marks1'></td>
					<td id='total1'></td>
				</tr>
				<tr>
					<td>Web Technology</td>
					<td id='mse_marks2'></td>
					<td id='ese_marks2'></td>
					<td id='total2'></td>
				</tr>
				<tr>
					<td >Design and Analysis of Algorithms</td>
					<td id='mse_marks3'></td>
					<td id='ese_marks3'></td>
					<td id='total3'></td>
				</tr>
				<tr>
					<td>Cloud Computing</td>
					<td id='mse_marks4'></td>
					<td id='ese_marks4'></td>
					<td id='total4'></td>
				</tr>
				<tr>
					<td class="total" colspan="3">Total Marks</td>
					<td class="total" id='final_total'></td>
				</tr>
				<tr>
					<td class="total" colspan="3">Percentage</td>
					<td class="total" id='percentage'></td>
				</tr>
			</tbody>
		</table>
        
   

    
    <script>
        $(document).ready(function() {
          
            $('#resultForm').submit(function(event) {
                // Stop the form from submitting normally
                event.preventDefault();

                // Get the form data
                var formData = $(this).serialize();
                console.log(formData);
                // Send the data to the server using AJAX
                xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var result=this.responseText;
      if(result==='No Result')
      {
       
        document.getElementById("name").innerHTML = 'No results found.';

      }
      else{
            var result=JSON.parse(result);
            console.log(result);

      document.getElementById("name").innerHTML = result.name_;
      document.getElementById("mse_marks1").innerHTML = result.mse_marks1;
      document.getElementById("ese_marks1").innerHTML = result.ese_marks1;
     document.getElementById("mse_marks2").innerHTML = result.mse_marks2;
      document.getElementById("ese_marks2").innerHTML = result.ese_marks2;
     document.getElementById("mse_marks3").innerHTML = result.mse_marks3;
      document.getElementById("ese_marks3").innerHTML = result.ese_marks3;
     document.getElementById("mse_marks4").innerHTML = result.mse_marks4;
      document.getElementById("ese_marks4").innerHTML = result.ese_marks4;
      mse1=parseInt(result.mse_marks1);
      ese1=parseInt(result.ese_marks1);
      mse2=parseInt(result.mse_marks2);
      ese2=parseInt(result.ese_marks2);
      mse3=parseInt(result.mse_marks3);
      ese3=parseInt(result.ese_marks3);
      mse4=parseInt(result.mse_marks4);
      ese4=parseInt(result.ese_marks4);
      var total1=mse1*0.30+ese1*0.70;
      var total2=mse2*0.30+ese2*0.70;
      var total3=mse3*0.30+ese3*0.70;
      var total4=mse4*0.30+ese4*0.70;
      var final_total=total1+total2+total3+total4;
      var percentage=final_total/4;
      document.getElementById("total1").innerHTML = total1.toFixed(2);
      document.getElementById("total2").innerHTML = total2.toFixed(2);
     document.getElementById("total3").innerHTML = total3.toFixed(2);
      document.getElementById("total4").innerHTML = total4.toFixed(2);
      document.getElementById("final_total").innerHTML = final_total.toFixed(2);
      document.getElementById("percentage").innerHTML = percentage.toFixed(2);

     }
    }
  };
  xhttp.open("GET", "searchResult.php?"+formData, true);
  xhttp.send();
            });
        });
    </script>
</body>
</html>
