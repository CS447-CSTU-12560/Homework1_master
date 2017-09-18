<!DOCTYPE html>
<html>
<style>
form {
	margin: auto;
    border: 3px solid #f1f1f1;
    width: 400px;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #5882FA;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>

<br>
<br>
<br>

<form action="checkLogin()">

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" id="uname" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id="psw" name="psw" required>
        
    <button type="button" onclick="checkLogin()">Login</button>
  </div>
</form>

<script src="js/check_login.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>

