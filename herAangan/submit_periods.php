

<!DOCTYPE html>
<html lang="en">
<head>
<title>Profile page</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=person" />
    <style>
         .material-symbols-outlined{
              font-variation-settings:
              'FILL' 0,
              'wght' 400,
              'GRAD' 0,
              'opsz' 24
            }
           
                table {
                    
                    margin:;
                    width: 100%;
                    border-collapse: collapse;
                }
                table, th, td {
                    border: 1px solid black;
                    
                }
                th, td {
                    padding:5px;
                    text-align: left;
                }
                th{
                    background:rgb(230, 158, 214);
                }
               

     .profile-container {
      background: #fff;
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    max-width:525px;
    margin-left:150px;
      text-align: center;
      padding:20px;
    }

    .profile-img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid #ff6f91;
      margin-bottom: 20px;
    }

    /* h2, p {
      color: #333;
    } */

    input[type="text"], input[type="number"] {
      width: 100%;
      padding: 10px;
      font-size: 1rem;
      border: 1px solid #ddd;
      border-radius: 8px;
      margin-bottom: 15px;
    }

    .btn {
      background: #ff6f91;
      color: #fff;
      font-size: 1rem;
      padding: 12px 20px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      width: 100%;
      transition: background 0.3s ease;
    }

    /* .btn:hover {
      background: #ff4c6a;
    }  */
            </style>
           
        
    
</head>
<body>
<h1 style="margin-left:20px;">
    <div class="full-page">
    <div class="sidebar-cont">
            <!-- ===================================================for side bar========================================================== -->
            <nav class="sidebar" >
                <header>
                    <div class="image-text">
                        <span class="imag">
                            <img src="logo1.png" height="50px" width="50px" style="margin: 5px;"> 
                        </span>
                        <div class="text header-text">
                            <span class="name">Safe Space</span>
                            <span class="profession">For Women</span>
                        </div>

                    </div>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAOlJREFUSEvtlTEOQUEQhr/XicIlxCEQQjTiEDqd0i2UKiqNC6FQKBQKiSBxAplkXiKPxO68ZDeS3Xpmvpk/M/9mRHpZJC4JHEz5JLWr1DXg6Rr8Lc4i9RDYAD1gZ4X7guvAFqgCN6BvhfuCJX4NjHXSO9AGDr6T+4KlvuQsgYnCrkALOPrALeC8/uoNfgE6PvAyYGlgAUy1E4E3gZPL5GXBwpgDM4WddfKf8L8FR5E6+HJFOaeigcgNd0MYSEMtswI8FLp3OZ9ijGWrR2qbA6tP5/ZnaTjKt2hp9CPHInUCmxRIUptksyS9AIx6Kh9ESA21AAAAAElFTkSuQmCC"
                        class="toggle">
                </header>

                <div class="menu-bar">
                    <div class="menu">
                        <li class="search-box">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAsFJREFUSEvllknIT2EUxn9fZgsLG/OQyBhlYYEFCgkpmUohwxeSkiHDhg0LZIrILFJkgRIWWFE2KGQqkimRQpmH89S5X6/r3vve719/38LZ3fue9zxnfM5bQwNJTQPhUha4KTAI6AG0BV4Cj4DrwNdKnI8BdwE2AeOA5hkAn4DTwHLgWX0cKAJeCGwBFG1MvgDzgUMxxeQ8D1hRLnWl75be3cBl4D7wGOgG9AJGALVAI9ddY46uLwOeBbwA2OWXVcexwIMCY/2t/ueADq4zFTgRA08D9wZuAU08uqHAGzfS12vdAlBtzwJ3/awjcBXoBHwEelomXhSBp4EvmIFR3qm6/MQvbwBWZhhaC6zz/wOAG/Ytm0esJDPLArcG3rryVmBJcHGjRbIsx5BqvNfPjgPTgPeA7P3IAw8jngScdMXBwLXUpdWe2iveVDuA9p72rsBrYHJQ3ywbdSZD4MXANj9pZV39IdIgw4FLrjMBOGPjJAfU9ZJZwOEyEa8KRqFxUZrcmOZbWZCoN5ShZtYLn/3fCkAlypQwYtVqj2u1M0J4FYk461ipf+4HU4LS/aUbAo8ELrrGGOB8BcDjPeW62s9qfqdMxC2Bd06R+8zzeRUAHwWmA7+c23MXSHqOTwETgZ/WnX2cRMria45vuvJ+Wxpziy6mgcXBSo82kehyiI9JDLyzM5doU1yg9ans5UoWV88BlGrJU+vW0UYK9wpsDHSubuM6O41mF8U8zdtOIUVqO2lpiDiS7SQ6VSmGeUrTduT8gfpGnOhrS20HNNMx+eYPArFfIoXgsReIar4Z0HiJHNIiLj5oP7UsNL+zbUOpsaLgMeDEgED15uruby5trYfA7YCpEt00uL7l3B9SFjiW6vS5wNSgsq/RnGGdfixUqhawMEJwdbm6vU6qCSwQsZ9mWgvjn6Q6WppqR5zrwP8H/BsS330f5DsGoAAAAABJRU5ErkJggg=="
                                class="icon" >
                            <input type="" id="search-bar" placeholder="Search...">

                        </li>
                        <script>
                            $(document).ready(function () {
                                $("#search-bar").on("keyup", function () {
                                    const query = $(this).val().toLowerCase();
                    
                                    // Loop through each item in the list
                                    $(".item-list li").each(function () {
                                        const item = $(this).text().toLowerCase();
                                        
                                        if (item.indexOf(query) !== -1) {
                                            $('.sub-topics').show();
                                            $('.sub-topics-don').show();
                                            $(this).show(200);
                                            
                                        } 
                                       
                                        else {
                                           
                                            $(this).hide(200);
                                            
                                        }
                                       
                                    });

                                    value=$("#search-bar").val();
                                    if(value==''){
                                        $('.sub-topics').hide();
                                        $('.sub-topics-don').hide();

                                    }

                                });
                            });
                        </script>
                        
                        <ul class="menu-link" id="list"></ul>
                        <ul class="item-list">
                        <li class="nav-link">
                            <a href="submit_periods.php">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAcBJREFUSEvN1j1rFVEQh/FfJAqChYhgAmIstBFBtBBSSwQ7SWGRVgsxpjEG0ogJ2EhI5VulH8BCsJRgq52KoAiCJJAmjYV11OyEe2DVvXdf7l6up9li58wzc2b+58yIIa2RIXFVAR/CNI72EeQmXuB78lEGHsMHHOkDmrZu4QziW5rxTTxoAZpchL9HVcBLuFsC/oFX2I+L2NfDfjn7Fz5LM+4F/oUZPM+C+92BHcMnHOgCbwX8DFcLAKu4NUjwLB4XAG6kOhb8ayXjO7hX4Dx6YreOVcH5eiaZ9arxF5zGzxxgLz7jxCDB4fs1FhBBnMo6+z4u1O3quhk3kXdhjZuAt/EWIa09mZ4ns7qPDjLjb51jfZmuwA4srtjLWMRE2831BpcyrcaN1W3Fw7KGc38ZND7qyPRsCTSxDmev2keM5+CNwdfwtEZX3cZKG+B5vKsBPt/phbSlccY1mP3dXG2/x3N4GCHlJ5AiHR/H1xJtVj2F0PxJrFcBh03ocaqFmSvktZGiLMu4aja17f4L8PVsmnxSO/R/N5RNrrs78kYH8R7RUP2s2uCAxZB2BTG0NV3dpo8//FWKrmkEvfYNDbwDJ+xjH15rg88AAAAASUVORK5CYII="
                                    class="icon" />
                                <span class="text nav-text"> Profile</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="home.html">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAXhJREFUSEvt1r8vBUEQwPHva1BoVILC6/wDOpVCp9GJSKgJ/wL+BIlQSkhQ6URUKn+AVkXhRynRSBTcJLOy1t7bnXVyzbvm3rvs3Gdmbm/e69DS0WnJpRSWuCVN+gT4tBZQAkuMYIuKnWkSJtwKh6gr1IxbYFl7BCyr9qDnST0fAyu5bc+Fw0ofgRkFb4AJa9tz4DrUr9iMp+AU6p6xtNuE94Jz0SK8DraiZjwGl6ImPIT/imbjPhwbDjvVnbat41DXS9yWF/tjyPiwDAYZAv7RJCz3lfl+Kh98eAE4/2d4HrgIYfk+BYwB15qAX/EAsFG9r3PAUJDgO3AF7AEfkVbPAk9VxXcuru51cr80PnwIrCae9z6wHoF/ORb4DRgGZFTeBwl0AZler8BI03CsC873d7ArJnbtO19LxX3Yf8z9Vks3ijbXCzBaOKPDsGdgPLxYt6s3q/dxtyF4rSriIBeWddM6HgcLE5AxegncxuJT/7kKzXRYa/AXg/aCH31NgGkAAAAASUVORK5CYII="
                                    class="icon" />
                                <span class="text nav-text"> Home</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="chat.php">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAXdJREFUSEvtlrtKBDEUhr8VvBSWKuILaCVWwlYWWthYCFYiWGzlIyiCNwRfQNDWSrCxsBPBQgQ7tRD0DVb2AdRCzZFEMnEyTCa7MxabZi/knO/8f87JTI2KVq0iLi54ElgAeiMK+gAugMesHDa4DtxGAN3QKeDBl88Gbyil+20ErwMHecDbwJbeGHP2XzrHjvqUnKnLBnTBRY+7a7U4Z2Z7GXiTP8pqLmP/KnBSBfh3xMpW/P/BDeAQ6C8wW3IL7uq4PyPms3oQOAJWCgBNyBxwFQp+BsZ10CtwDHwGFHEPnOv9fcC7e3/7FBvGjXq0LQKtAKi7VZRf5gWLOjmfvUClNnQAmNc9MpYH3ASWAFFrLykm5nEpubzjNJth7R0wHWG5FzwBvGRYOwKs5VDdo/cNpRSZqjhSTCJ8FDgFZpykHQcLT5TLJbKpv3utbqdiO5eoPlPdPexrrk6BJa+x/lr9+HkBjB2PkGLFemngp7LBiSLLVJwAfwPy4GMf57gnQAAAAABJRU5ErkJggg=="
                                    class="icon" />
                                <span class="text nav-text">Chat</span>
                            </a>
                        </li>
                        <li class="nav-link more-info" style="border-radius:5px;">
                            <a>
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAWNJREFUSEvllr9KA0EQh7+UaiPJA6h1NFhbaS/WWuQh0oikUQuxsPAVYiFa2Aha+wJ2IqRQ0Bew08IiugO7x3q5Yze3g2dw4eD+7P6+2ZnfDtegptGoicufAEsQK0BTIQtvwAPwVabl73gbuFCAOokd4DIGfGAi3FcEHxot0Swc/o598EZCAHd2bSVwiulcXZPAi4BcofECyCVDBRxbd3930w2uLdWh2hZ9V0l1yo7PjDEHXmQ/ulnZOXbvU8xVlI2sm/02OHN/CKyV6rFuFgJrmWvMcFXB88CqF1Woc6mB1wGXPuGHOtf0g1VT3QeObN3mgI8qzgJGJvXinROjsQvMAu9WSxjHcu+bawu4thNOgRsrMin/CmgBz8AesAb0rMgmcJsHzwCPwNKkpMj5T0Ab+MyD5bkDnAPLkWKx0+5NBrrA0C0o+8WRjrWQK0UsxJ8nx0jO+Gt+ccq/VZVAsjX/D/wNZmZ0H3LeBl0AAAAASUVORK5CYII="
                                    class="icon" />
                                <span class="text nav-text  more-in">LifeCycle</span>

                            </a>
                        </li>
                        <div class="sub-topics">
                            <ul>
                                <li class="nav-link"><a href="puberty.html"><span class="text nav-text"
                                            style="margin-left: 30px;">-Menstruation</span></li></a>
                                <li class="nav-link"><a href="pregnancy.php"><span class="text nav-text"
                                            style="margin-left: 30px;">-Pregnancy</span>
                                </li></a> 
                                <li class="nav-link"><a href="menopause.html"><span class="text nav-text"
                                            style="margin-left: 30px;">-Menopause</span></li></a>
                               
                                <li class="nav-link"><a href="diseases.html"><span class="text nav-text"
                                            style="margin-left: 30px;">-Diseases</span>
                                </li></a>
                            </ul>
                        </div>
                        <li class="nav-link more-info-don">
                            <a href="disposal.html">
                                <img src="icon_trash.png" class="icon"  width="35px">
                                <span class="text nav-text">Product Disposal</span>
                            </a>
                        </li>
                        <script>
                            $('.sub-topics').hide();
                            $('.more-info').click(function () {
                                $('.sub-topics').toggle(1000);
                            });
                        </script>
                        <li class="nav-link more-info-don">
                            <a>
                                <img src="donation.png" class="icon"  width="35px">
                                <span class="text nav-text">Make a difference</span>
                            </a>
                        </li>
                        <div class="sub-topics-don">
                            <ul>
                                <li class="nav-link"><a href="Donation.html"><span class="text nav-text"
                                            style="margin-left: 30px;">-Money Donation</span></li></a>
                                <li class="nav-link"><a href="product.html"><span class="text nav-text"
                                            style="margin-left: 30px;">-Product Donation</span></li></a>
                                 <li class="nav-link"><a href="Volunteer.html"><span class="text nav-text"
                                            style="margin-left: 30px;">-Volunteer</span></li></a>
                               
                            </ul>
                        </div>
                        <script>
                            $('.sub-topics-don').hide();
                            $('.more-info-don').click(function () {
                                $('.sub-topics-don').toggle(1000);
                            });
                        </script>
                        <li class="nav-link">
                            <a href="about.html">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAKFJREFUSEvtlVEKgCAQRCeIztXB+qibdZSu0VclOPWhgU7g9rELkoTj4GtsOxhVZ+QLN25G3lET9RwnK4AwQk0AevFbcL9b/ob6iCuW60nRDmAQjROf3xmLByuXearJaoyTDUAYofiunOezkjdDSjWTrhh/SnUTYzPUCs4qjV8n4sr9q5uEy8w41xaT1laRpuK2WLGnttRTrXETVI5agKZJThLHHh+8rHbaAAAAAElFTkSuQmCC"
                                    class="icon" />
                                <span class="text nav-text">Events</span>
                            </a>
                        </li>


                        <li class="nav-link">
                            <a href="logout.php">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAVNJREFUSEvt1r8uBUEUx/HPFVGLRIEXUCASjQ6PoFCiInQSCp0/j4BEIjpKhdBo/HsDGoWC8ATegB3Zm2xuNnfvrNy9EabYYubMfs+c35kzp6ZDo9Yhrl8FDs6Ooi8iWq94y9rHnngIVxiJgNZNT7CIzzARCz7CUglofcsszsuAbzCDR6xFOHCb2m5htwz4DlMJ/B7TEeDv8CYR3kk+2//gvMj1Yx2b6WIloZ7AJZ4zeo6jN0msDzy0Q+N5HKOnRCLl+VOYXN1JRdrDamZ37NUJcjSOpuCg50VSmSYjQphnmleUmoIHUk2Dtj8Z0eAAC5oeNJTFtoc6e8pl7FeZXFl40Dpo/lTldao7EHTfSItImKukgOQl2D+41WtXWLmKftSxRuAQK0XeNVmfS/q1szKNwCCuMVwCfoqFss1e4HVhLH0eW+W/4D1rHNtltgoqtPt74C9MpFwf1xogTQAAAABJRU5ErkJggg=="
                                    class="icon" />
                                <span class="text nav-text">Log Out</span>
                            </a>
                        </li>
                        </ul>
                    </div>
                </div>
                <!-- <script scr="script.js"></script> -->
            </nav>
        </div>
                        

    <div class="main-page" >
    <div style="font-size:20px;max-width:800px;margin-left :50px;">
    <div class="profile-container" >
    <!-- Profile Section -->
    <img src="profile.jpg" alt="Profile Picture" class="profile-img" id="profileImg" style="margin:auto;">
    <h2 id="username">Username</h2>
    <p id="age">Age: N/A</p>

    <!-- Input Form -->
    <form id="userForm">
      <input type="text" id="inputUsername" placeholder="Enter your username" required>
      <input type="number" id="inputAge" placeholder="Enter your age" min="1" required>
      <button type="button" class="btn" onclick="updateProfile()">Update Profile</button>
    </form>
  </div>

  <script>
    function updateProfile() {
      // Get input values
      const username = document.getElementById("inputUsername").value;
      const age = document.getElementById("inputAge").value;

      // Validate inputs
      if (!username || !age) {
        alert("Please fill in both fields!");
        return;
      }

      // Update profile display
      document.getElementById("username").innerText = username;
      document.getElementById("age").innerText = `Age: ${age}`;
    }
  </script>
<!-- <div style="font-size:20px;border:2px solid red;max-width:525px;margin-left :200px;"> -->
              <h1>Sync Sakhi</h1>

<form action="tracker.php" method="POST" style="max-width:1000px;">
    <table style="border-radius:20px;">
        <thead>
            <tr>
                <th>Period </th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="periodsTableBody">
            <tr>
                <td><input type="text" name="period_name[]" required placeholder="Enter period name"></td>
                <td><input type="date" name="start_date[]" required></td>
                <td><input type="date" name="end_date[]" required></td>
                <td><button type="button" onclick="removeRow(this)" class="btn">Remove</button></td>
            </tr>
        </tbody>
    </table>
    <button type="button" onclick="addRow()"style=";border-radius:4px;margin:10px" class="btn">Add Period</button>
    <br><br>
    <button type="submit" style="background-color:#427bb8;border-radius:4px;margin:10px" class="btn">Submit</button>
</form>
       


<!-- <div style="font-size:20px;border:2px solid red;max-width:525px;margin-left :200px;"> -->
<h2>Existing Periods</h2>
<table >
    <thead>
        <tr>
            <th>Period </th>
            <th>Start Date</th>
            <th>End Date</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $host = 'localhost';
        $dbname = 'login_regiser';
        $username = 'root';
        $password = '';
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->query("SELECT * FROM periods ORDER BY start_date DESC");
        $periods = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // Display periods from the database
        if ($periods) {
            foreach ($periods as $period) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($period['period_name']) . "</td>";
                echo "<td>" . htmlspecialchars($period['start_date']) . "</td>";
                echo "<td>" . htmlspecialchars($period['end_date']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No periods found.</td></tr>";
        }
        ?>
    </tbody>
</table>

<script>
    function addRow() {
        const tableBody = document.getElementById('periodsTableBody');
        const newRow = document.createElement('tr');

        newRow.innerHTML = `
            <td><input type="text" name="period_name[]" required placeholder="Enter period name"></td>
            <td><input type="date" name="start_date[]" required></td>
            <td><input type="date" name="end_date[]" required></td>
            <td><button type="button" onclick="removeRow(this)" class="btn">Remove</button></td>
        `;

        tableBody.appendChild(newRow);
    }

    function removeRow(button) {
        const row = button.parentNode.parentNode;
        row.parentNode.removeChild(row);
    }
</script>
<br<br><hr><br>
<div style="font-size:20px;max-width:900px;text-align: left;">
    <h2>Are you Pregnant?</h2>
<button class="btn btn-danger note-btn" style="max-width:200px;">Yes</button>
<button class="btn btn-danger note-btn2" style="max-width:200px;">No</button>

</div>
<script>
                   $(document).ready(function(){
                    $(".note1").hide();
                    $('.note-btn').click( function(){
                        $(".note1").hide(1000);
                        $(".note1").show(1000);
                    })
                    $('.note-btn2').click( function(){
                        $(".note1").hide(1000);
                    })
                   })
                    
</script>
<div class="note1">
<div style="max-width:400px;">
                <h2>Your Notes</h2>
<table >
    <thead>
        <tr>
            <th>Note</th>
            <th>Date</th>
           
        </tr>
    </thead>
    <tbody>
        <?php
        $host = 'localhost';
        $dbname = 'login_regiser';
        $username = 'root';
        $password = '';
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->query("SELECT * FROM pregnancy_note ORDER BY date DESC");
        $periods = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // Display periods from the database
        if ($periods) {
            foreach ($periods as $period) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($period['note']) . "</td>";
                echo "<td>" . htmlspecialchars($period['date']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Note not found.</td></tr>";
        }
        ?>
    </tbody>
</table>
    </div>
    <div style="max-width:400px;">
                <h2>Weight</h2>
<table >
    <thead>
        <tr>
            <th>Weitht</th>
            <th>Date</th>
           
        </tr>
    </thead>
    <tbody>
        <?php
        $host = 'localhost';
        $dbname = 'login_regiser';
        $username = 'root';
        $password = '';
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->query("SELECT * FROM weight ORDER BY date DESC");
        $periods = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // Display periods from the database
        if ($periods) {
            foreach ($periods as $period) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($period['weight']) . "Kg</td>";
                echo "<td>" . htmlspecialchars($period['date']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No weight found.</td></tr>";
        }
        ?>
    </tbody>
</table>
    </div>
    </div>
        

    </div>
    
</div>

</div>


</div>

<aside class="rightbar" style="font-size:40%; text-align:left" >
            <div class="informatiom"  >
                <div class="aside" style="margin:10px;">
                
                   
                    <h2>Her Store </h2>
                    <p>Your needs, our commitment 
                        All your Menstrual product needs delivered at your doorstep earliest</p>
                    <h3>Menstrual product buying link</h3>
                    <ul>Pads:-
                        <li><a href="https://www.zeptonow.com/pn/sofy-antibacteria-sanitary-pads-xl/pvid/b6fd35f1-7daf-4c3a-aba7-c28970961baf"> Link for buying pads</a></li>
                        Menstrual cups
                        <li><a href="https://www.zeptonow.com/pn/pee-safe-menstrual-cup-medium/pvid/4af772c7-c1a9-462a-aa15-422ff1c69a11">Link for buying menstrual cups</a></li>
                        Tampons
                        <li><a href="https://www.zeptonow.com/pn/sirona-premium-tampons-heavy-flow/pvid/ad5cd11c-6da6-4a02-a6d7-89e38850237f">Link for buying tampons</a></li>
                    </ul>
                </div>
                <div class="footer">
                </div>
            </div>

        </aside>

    <footer style="font-size:50%;max-width:1500px">
            <p>&copy; 2023 HerAangan. All Rights Reserved.</p>
            
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            
        </footer>
    
</body>
</html>