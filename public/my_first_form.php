<?php
  var_dump($_GET);
  var_dump($_POST);
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>HTML Form</title>
</head>
<body>
	<section>
		<h2>User Login</h2>
		<form method="POST" action="/my_first_form.php">
    	<p>
    	    <label for="username">Username</label>
    	    <input  id="username" name="username" value="asteph" type="text	" placeholder="username" required autofocus>
    	</p>
    	<p>
    	    <label for="password">Password</label>
    	    <input id="password" name="password" type="password" 
    	    placeholder="password">
    	</p>
    	<p>
    		<button>Login</button>
    	</p>
        </form>
    </section>
    <section>
    	<h2>Compose an Email</h2>
    	<form method="POST" action="/my_first_form.php">
        	<p>
        	    <label for="to">To:</label>
        	    <input  id="to" name="to" type="text" placeholder="johnny.appleseed@gmail.com" required autofocus>
        	</p>
        	<p>
        	    <label for="from">From:</label>
        	    <input  id="from" name="from" type="text" placeholder="johnny.appleseed@gmail.com">
        	</p>
        	<p>
        	    <label for="subject">Subject:</label>
        	    <input  id="subject" name="subject" type="text" placeholder="name of subject">
        	</p>
            <p>
                <label for="email_body">Body:</label><br>
                <textarea id="email_body" placeholder="Content here" name="email_body" rows="5" cols="40"></textarea>
            </p>
            <p>
                <label for="save_copy">Save a copy to Sent folder</label>
                <input type="checkbox" id="save_copy" name="save_copy" value="yes" checked>
            </p>
            <label>Select the desired image size:
            <select id="img_size" name="img_size">
                <option>small</option>
                <option selected>medium</option>
                <option>large</option>
            </select>
            </label>
            <p><button>Submit</button></p> 
        </form>
        <form method="POST" action="/my_first_form.php">
            <h2>Multiple Choice Test</h2>
            <p>What operating system are you ciurrently using?</p>
            <label><input type="radio" id="1" name="operating_system" value="linux"> Linux</label>
            <label><input type="radio" id="2" name="operating_system" value="osx"> OS X</label>
            <label><input type="radio" id="3" name="operating_system" value="windows"> Windows</label> 
            <p>What browser are you using?</p>
            <label><input type="radio" id="3" name="browser" value="Safari"> Safari</label>
            <label><input type="radio" id="4" name="browser" value="Chrome"> Chrome</label>
            <label><input type="radio" id="5" name="browser" value="Firefox"> Firefox</label>
            <label><input type="radio" id="6" name="browser" value="Explorer"> Explorer</label>
            <p>Check all that apply</p>
            <label><input type="checkbox" id="7" name="gender_age[]" value="male"> Male</label>
            <label><input type="checkbox" id="8" name="gender_age[]" value="female"> Female</label>
            <label><input type="checkbox" id="9" name="gender_age[]" value="young"> younger than 18</label>
            <label><input type="checkbox" id="10" name="gender_age[]" value="old"> older than 45</label>
                </p>
            <label>Which states are the best?
            <select id="best_state" name="best_state[]" multiple>
                <option>Texas</option>
                <option selected>Oklahoma</option>
                <option>California</option>
                <option>New York</option>
                <option>Colorado</option>
                <option>Florida</option>
            </select>
            </label>
            <p><button>Submit</button></p>

        </form>
        <h2>Select Testing</h2>
        <form method="POST" action="/my_first_form.php">   
            <label>Do you have a pet?
            <select id="pet_owner" name="pet_owner">
                <option value="1" selected>yes</option>
                <option value="0">no</option>
            </select>
            </label>
            <p><button>Submit</button></p>  
        </form>
    </section>

</body>
</html>
