


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<style>
        .form-container{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form{
            position: relative;
            top: 90px;
            text-align: center;
            border: 2px solid gray;
           border-radius: 10px;
           box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.23);
            -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.23);
            -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.23);
            width: 300px;
            padding: 10px;
        }

        label, input, select{
            padding: 16px;
        }

        .btn{
            margin: 20px;
        }

        .errorMessage{
         position: absolute;
         top: 86px;
         left: 5px;
        background-color: red;
        color: whitesmoke;
        z-index: 2;
        width: 96%;
        }

        img{
            position: relative;
            top: -90px;
            left: 100px;
            z-index: 1;
        }
    </style>

<div class="form-container">
    <img src="image/CRT2.png" width="50px;" alt="">
    <form class="form" class="mb-3" action="admin-login.php" method="post" id="loginform" onsubmit="return validateForm()">
    <h4 style="position: relative; top: 10px;">Log In</h4>

            <div id="errorMessage" class="errorMessage"></div>

            <label for="user"><b>Select User Admin</b></label>
            <select class="form-select" name="user" id="">
                <option style="text-align: center;" value="Choose">Choose</option>
                <option style="text-align: center;" value="Cabanatuan">Cabanatuan</option>
                <option style="text-align: center;" value="Gapan">Gapan</option>
                <option style="text-align: center;" value="Guimba">Guimba</option>
                <option style="text-align: center;" value="San Jose">San Jose</option>
            </select>

            <label for="username" class="form-label"><b>User Name</b></label>
            <input  class="form-control"  id="username" type="text" name="username" required>
            <label class="form-label" for="password"><b>Password</b></label>
            <input  class="form-control"  type="password" id="password" name="password" required>
            <button  class="btn btn-primary" type="submit" name="submit">Login</button>
        </form>
 </div> 

 <script>
        document.getElementById("loginform").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent default form submission

    // Get form data
    var formData = new FormData(this);

    // Send form data via AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "admin-login.php", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Response from PHP file
            var response = xhr.responseText;
            document.getElementById("errorMessage").innerText = response;
            
            // Check if the response is either "Success" or "Unsuccessful"
        if (response.trim() === "CABANATUAN") {
            // Redirect to admin_dashboard.php
            window.location.href = "admin-dashboard.php";

         } else if(response.trim() === "GAPAN"){
            window.location.href = "gapan-dashboard.php";

            } else if(response.trim() === "GUIMBA"){
                window.location.href = "guimba-dashboard.php";

            } else if(response.trim() === "SAN JOSE"){
                window.location.href = "sanjose-dashboard.php";


        } else {
            // Handle unexpected responses (optional)
            console.log("Unexpected response:", response.trim());
        }

        }
    };
    xhr.send(formData);
});
</script>
</body>
</html>