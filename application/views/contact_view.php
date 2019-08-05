<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
{box-sizing: border-box;}

input[type=text], select, textarea,text {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;


}


input[type=email], select, textarea,text {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;


}

input[type=submit] {
  background-color: green;
  color: white;
  padding: 14px 26px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: blue;
}

.container {
  border-radius: 5px;
  background-color: #eee;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Contact Us</h3>

<div class="container">
  <form action="">
    <label >Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name..">

    

    <label >email:</label><br>

    <input type="email" name="email" placeholder="Your email address.."  ><br><br>






    <label >Description</label>
    <textarea id="subject" name="subject" placeholder="Write about Your Description.." style="height:200px"></textarea>




    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
