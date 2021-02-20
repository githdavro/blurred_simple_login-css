<DOCTYPE html>
<html lang="en">
<head>
<style>

body 
{
	background: #00F260;  /* fallback for old browsers */
	background: -webkit-linear-gradient(to right, #0575E6, #00F260);  /* Chrome 10-25, Safari 5.1-6 */
	background: linear-gradient(to right, #0575E6, #00F260); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background-repeat:no-repeat;
    background-size:cover;
}
#bg color {
	
}
#smed td, #smed th 
{
  position: relative;
  width: 280px;
  height:400px;
  margin: 30px;
  box-shadow: 20px 20px 50px rgba(0, 0, 0, 0.5);
  border-radius: 15px;
  background: rgba(255, 255, 255, 0.1);
  overflow: hidden;
  display: flex
  border-top: 1px solid rgba(255, 255, 255, 0.5);
  border-left: 1px solid rgba(255, 255, 255, 0.5);
  backdrop-filter: blur(5px);
  padding: 90px;
  border-radius:10px;
}
.button {
  background-color: #ffffff;
  border: none;
  color: black;
  padding: 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 2px 2px;
  -webkit-transition-duration: 0.9s;
  transition-duration: 0.9s;
  cursor: pointer;
  font-family: Google Sans Medium;
   font-weight: bold;
}

.button2 {
	background-color: #ffffff;
	color: black;
	border-radius: 24px;
	overflow: hidden;
	display: inline-block;
}
.button2:hover {
	background-color: #ffffff;
	color: green;
	box-shadow: 0 12px 16px 0 rgba(64,207,83,1.24), 0 17px 50px 0 rgba(0,0,0,0.19);
	display: inline-block;

}
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #cfcfcf;
  border-radius: 50%;
}

.container:hover input ~ .checkmark {
  background-color: #a6a6a6;
}


.container input:checked ~ .checkmark {
  background-color: #05b508;
}

.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

.container input:checked ~ .checkmark:after {
  display: block;
}

.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
.o{
	border: 0;
	background-color: #ffffff;
	opacity: 0.7;
	margin: 20px auto;
	padding: 14px 10px;
	outline: none;
	color: black;
	border-radius: 10px;
	transition: 0.25s;
	border: 2px;
	font-size: 18px;
	font-color: #ffffff;
	font-family: Google Sans Medium;

}
.*
{
    margin: 0;
    padding: 0;
    font-family: consolas;
}
body
{
    background-image: url('img/EKWszP.gif');
  background-color: #cccccc;
}
.a
{
    position: relative;
    display: inline-block;
    padding: 10px 30px;
    text-decoration: none;
    text-transform: uppercase;
    font-weight: 500;
    letter-spacing: 2px;
    color: #5a84a2;
    font-size: 18px;
    border-radius: 40px;
    box-shadow: -2px -2px 8px rgba(255, 255, 255, 1),
    -2px -2px 12px rgba(255, 255, 255, 0.5),
    inset 2px 2px 4px rgba(255, 255, 255, 0.1),
    2px 2px 8px rgba(0, 0, 0, 0.15);
}
.a:hover
{
    box-shadow: inset -2px -2px 8px rgba(255, 255, 255, 1),
    inset -2px -2px 12px rgba(255, 255, 255, 0.5),
    inset 2px 2px 4px rgba(255, 255, 255, 0.1),
    inset 2px 2px 8px rgba(0, 0, 0, 0.15);  
}
.a:hover span
{
    display: inline-block;
    transform: scale(0.98);
}
</style>
    <meta charset="UTF-8">
    <title>CRUDS GITH</title>
</head>
<body>
<div class="container-fluid">
  <form method="post" action="logincek.php">
  <center>
<h1><font color='white' face='Google Sans Medium' size='5'> LOGIN TO MAJALAH </h1></font>
<table id="smed" width='90'>
<form>
<td><b><center><font color='white' face='Google Sans Medium'>U S E R N A M E</b>
	<br></br>
	<input class="o" placeholder='ketik user' type="text" name="username"
     placeholder="" required autofocus oninvalid="this.setCustomValidity('Masukkan user terlebih dahulu')" oninput="setCustomValidity('')"><br>
	 
	<b><center><font color='white' face='Google Sans Medium'>P A S S W O R D</b>	 
	<br></br>
	<input class="o" placeholder='ketik pass' type="password" name="password"
     placeholder="" required oninvalid="this.setCustomValidity('Waduh bro pean lali password e')" oninput="setCustomValidity('')"><br>
	 
	 <?php if(isset($_GET['pesan'])) {  ?>
                  <label face='Google Sans Medium' style="color:red;"><?php echo $_GET['pesan']; ?></label>
              <?php } ?>	
	 <br></br>
	  <button class="button button2" type="submit">		LOGIN		</button> 
			</form>
</td>
</tr>
</table>
<td>      
              
		</td>
</body>
</html>