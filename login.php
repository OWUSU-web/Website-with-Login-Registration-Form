<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Dashboard</title>
    <style>
        /* CSS for the header */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            position: relative;
        }
        nav {
            margin-top: 10px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 0 10px;
            background-color: #555;
        }
        nav a:hover {
            background-color: #777;
        }
        /* CSS for the dropdown */
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #555;
            min-width: 160px;
            z-index: 1;
            border-radius: 5px;
            white-space: nowrap; /* Ensures items stay in a single line */
        }
        .dropdown-content a {
            color: #fff;
            padding: 8px 16px; /* Reduced padding for a smaller size */
            text-decoration: none;
            display: block;
            text-align: left; /* Align text to the left */
            font-size: 14px; /* Reduced font size */
            font-family: Arial, sans-serif; /* Specify font family */
        }
        .dropdown-content a:hover {
            background-color: #777;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        /* CSS for back button */
        #backBtnContainer {
            position: absolute;
            top: 10px; /* Adjust top position */
            right: 10px; /* Adjust right position */
        }
        #backBtnContainer .dropbtn {
            background-color: #555;
            padding: 6px 12px; /* Reduced padding for a smaller size */
            border-radius: 5px;
            color: white;
            font-size: 12px; /* Reduced font size */
        }
        #backBtnContainer .dropbtn:hover {
            background-color: #777;
        }
    </style>
</head>
<body>
    <header>
        <h1>College Dashboard</h1>
        <nav>
            <div class="dropdown">
                <a href="#" class="dropbtn">Colleges</a>
                <div class="dropdown-content" id="collegesDropdown">
                    <a href="#" class="collegeDropdownBtn">College of Science</a>
                    <a href="#" class="collegeDropdownBtn">College of Engineering</a>
                    <a href="#" class="collegeDropdownBtn">College of Health Science</a>
                    <a href="#" class="collegeDropdownBtn">College of Art & Built Environment</a>
                    <a href="#" class="collegeDropdownBtn">College of Humanities & Social Science</a>
                    <a href="#" class="collegeDropdownBtn">College of AGRIC & Natural Resources</a>
                    <!-- Add more colleges as needed -->
                </div>
            </div>
            <div class="dropdown" id="collegeDropdown">
                <!-- This will be dynamically populated based on the selected college -->
            </div>
            <div id="backBtnContainer">
                <!-- Back button will be appended here -->
            </div>
            <div class="dropdown">
                <a href="#" class="dropbtn">Timetable</a>
                <div class="dropdown-content">
                    <!-- Add links for timetable -->
                </div>
            </div>
            <div class="dropdown">
                <a href="#" class="dropbtn">Zoom Class</a>
                <div class="dropdown-content">
                    <!-- Add links for Zoom class -->
                </div>
            </div>
            <div class="dropdown">
                <a href="#" class="dropbtn">Events</a>
                <div class="dropdown-content">
                    <!-- Add links for events -->
                </div>
            </div>
            <div class="dropdown">
                <a href="#" class="dropbtn">Tutorials</a>
                <div class="dropdown-content">
                    <a href="https://chatgpt.com/chatgpt_search" class="tutorialDropdownBtn">ChatGPT</a> <!-- Directs to ChatGPT search page -->
                    <!-- Add links for tutorials -->
                </div>
            </div>
            <div class="dropdown">
                <a href="#" class="dropbtn">Attendance</a>
                <div class="dropdown-content">
                    <!-- Add links for attendance -->
                </div>
            </div>
        </nav>
    </header>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var collegeDropdownBtns = document.querySelectorAll(".collegeDropdownBtn");

            collegeDropdownBtns.forEach(function(btn) {
                btn.addEventListener("click", function() {
                    var collegeName = btn.textContent.trim();
                    var collegeDropdown = document.getElementById("collegeDropdown");
                    collegeDropdown.innerHTML = "<a href='#' class='dropbtn'>" + collegeName + "</a><div class='dropdown-content'><a href='#'>Link 1</a><a href='#'>Link 2</a><a href='#'>Link 3</a></div>";

                    // Create and append the back button
                    var backBtnContainer = document.getElementById("backBtnContainer");
                    backBtnContainer.innerHTML = "<a href='#' class='dropbtn' id='backBtn'>Back</a>";

                    // Add event listener to the back button
                    var backBtn = document.getElementById("backBtn");
                    backBtn.addEventListener("click", function() {
                        // Hide college dropdown and back button
                        collegeDropdown.innerHTML = "";
                        backBtnContainer.innerHTML = "";
                    });
                });
            });
        });
    </script>
</body>
</html>
