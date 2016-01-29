<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form class="form-horizontal" role="form" method="post" name="form">
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Name:</label>
            <div class="col-sm-10">
                <input type="name" class="form-control" name = "name" id="name" placeholder="Enter Name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="phone">Phone:</label>
            <div class="col-sm-10">
                <input type="phone" class="form-control" name = "phone" id="phone" placeholder="Enter phone">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name = "email" id="email" placeholder="Enter email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="confirm-email">Confirm email:</label>
            <div class="col-sm-10">
                <input type="confirm-email" class="form-control" name = "confirm-email" id="confirm-email" placeholder="Confirm email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="address">Address:</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name = "address" id="address" placeholder="Enter address">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="city">City:</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name = "city" id="city" placeholder="Enter city">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="state">State:</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name = "state" id="state" placeholder="Enter password">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="zip">Zip:</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" name = "zip" id="zip" placeholder="Enter password">
            </div>
        </div>
        <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
                <button onclick="validate(); return false;" id="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
<script>
    "use strict";
        // Get all elements with tag 'input'
        var inputElements = document.getElementsByTagName('input');

        // Print the first element
        // console.log(inputElements[0]); 

        function validate(){
            console.log('validating');
            // Print all elements
            for (var i = 0; i < inputElements.length; i++) {
                if(inputElements[i].value == null || inputElements[i].value == ""){
                    alert("Please Fill All Fields");
                }
                console.log(inputElements[i].value);
            }

            // if(document.getElementById('name')){

            // }else{
            //     document.getElementById("myForm").submit();
            // }
        }
</script> 
</body>
</html>