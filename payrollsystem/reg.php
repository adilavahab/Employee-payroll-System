
<html>
<head>
  <title>
    REGISTER
  </title>
  <style>
    body{
      background-color: #20194a;
    }
    p{
      color: #a8c995;
      font-weight: 200;
      font-size: 20px;
      text-decoration: solid;
    }
    
  </style>
  <link rel="stylesheet" href="style3.css">
</head>

<body>

				<center><b><h1 style="color: #fdea2e;">
          NEW EMPLOYEE
        </center></b></h1>
        <hr>

		<form action="insertdata.php" method="post" autocomplete="off">
      <table>
        <tr>
          <td><p>NAME:<br><br></p></td>       
          <td><input type="text"    name="fname" required autofocus><br><br></td>
        </tr>
        <tr>
          <td><p>AGE :<br><br></p></td>       
          <td><input type="number"  name="age"><br><br></td>
        </tr>
        <tr>
          <td><p>DOB :<br><br></p></td>       
          <td><input type="date"    name="dob"><br><br></td>
        </tr>
        <tr style="color: #fff;">
          <td><p>GENDER :<br><br></p></td>  
          <td><input type="radio"   name="sex"     value="male">     MALE     &emsp;
          <input type="radio"   name="sex"     value="female">   FEMALE   &emsp;
          <input type="radio"   name="sex"     value="other">    OTHERS   &emsp;
          <br><br></td>
        </tr>
        <tr>
          <td><p>BLOOD GRP :<br><br></p></td> 
          <td><select name="blood">
            <option value="A+"> A+ </option>
            <option value="A-"> A- </option>
            <option value="AB+"> AB+ </option>
            <option value="AB-"> AB- </option>
            <option value="B+"> B+ </option>
            <option value="B-"> B- </option>
            <option value="O+"> O+ </option>
            <option value="O-"> O- </option>
            
          </select><br><br></td>
        </tr>
        <tr>
          <td><p>MOBILE NO :<br><br></p></td>
          <td><input type="tel"       name="phone"   placeholder="000-0000-000" maxlength="10" required><br><br></td>
        </tr>
        <tr>
          <td><p>DESIGNATION :<br><br></p></td>     
          <td><input type="text"     name="desig"     required><br><br></td>
        </tr>
        <tr>
          <td><p>SALARY :<br><br></p></td>     
          <td><input type="number"     name="sal"     required><br><br></td>
        </tr>
      </table>
      
      <center><input type="submit" value="Submit" class="button2"></center>
    </form>
</body>
</html>