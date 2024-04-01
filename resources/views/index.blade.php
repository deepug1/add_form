<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sterking</title>
    <link rel="stylesheet" href="style.css">
    </link>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>

    </style>
</head>

<body>
    <div class="overlay"></div>
    <div class="nav-conatainer">
        <div class="maintab">
            <div class="profile_picture">
            </div>
            <nav class="nav">
                <li class="lilink "><a href="#" class="navlink navlink1">Dashboard</a></li>
                <li class="lilink"><a href="#" class="navlink">Enquiris</a></li>
                <li class="lilink"><a href="#" class="navlink">Projects</a></li>
                <li class="lilink"><a href="#" class="navlink">Team</a></li>
                <li class="lilink"><a href="#" class="navlink"> Reports </a></li>
            </nav>
        </div>
        <div class="profile-info">
            <div class="role">Management</div>
            <div class="profile">Deepu</div>
        </div>

    </div>
    <div class="down-container">
        <div class="downspan">Dashboard</div>
    </div>
    <!-- <form> -->
    <div class="search">
        <input class="searchinput" placeholder="search">
        <button class="addnew">Add New</button>
    </div>
    <div class="container">
        <div class="header">
            <h2>Add New Entry</h2>
        </div>
        <div class="message" id="message"></div>
        <form  id="addnew">
            @csrf
            <div class="full_name">
                <div class="form-group fname">
                    <label for="fname">First Name:</label>
                    <input type="text" id="fname" name="fname" required>
                </div>
                <div class="form-group lname">
                    <label for="lname">Last Name:</label>
                    <input type="text" id="lname" name="lname" required>
                </div>
            </div>

            <div class="contact">
                <div class="form-group inemail">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group inmob">
                    <label for="mobile">Mobile Number:</label>
                    <input type="tel" id="mobile" name="mobile" required>
                </div>
            </div>


            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>

            <div class="form-group button-container">
                <input class = "formsub" type="submit" value="Submit">
                <input type="button" class="cancel" value="Cancel">
            </div>
        </form>
    </div>
    <script src="script.js"></script>

</body>

</html>