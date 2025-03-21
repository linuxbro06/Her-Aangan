<!DOCTYPE html>
<html lang="en">

<head>
<title>Pregnancy page</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=person" />
    <style>
        .material-symbols-outlined {
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
               
    </style>

</head>
<!-- ======================= body ==================================== -->

<body>

    <!-- ========================================================section========================================================================================================================== -->
    <div class="main-page">
    </div>
    <h1 style="margin-left:20px;"></h1>
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
        <div class="main-page">

            <h1
                style="color: rgb(245, 31, 124);margin-right:200px;background-color:rgb(252, 252, 252);height:100px;padding:30px;">
                Pregnancy</h1>
                <div style="font-size:20px;max-width:800px;margin-left :50px;">
                    <h2>Write it down & live through it!</h2>
                    <p>From first sonography to baby's first kick note down all your precious moments through your pregnancy.</p>
                        <button type="button" class="btn btn-danger note-btn">Add your Notes</button><br><br><hr><br>
                       <?php
                        if(isset($_POST['submit']) ){
                        
                        echo "<div class='alert alert-success' role='alert'>
                        A simple success alert—check it out!
                      </div>";
                       }
                        
                       ?>
                        <div class="note">
                <form action="note.php" method="POST" style="max-width:1000px;">
                    <table style="border-radius:20px;">
                        <thead>
                            <tr>
                                <th>Notes</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="periodsTableBody">
                            <tr>
                                <td><textarea type="text" name="note" required placeholder="Enter your Note"></textarea></td>
                                <td><input type="date" name="date" required></td>
                                <td><button type="button" onclick="removeRow(this)" class="btn">Remove</button></td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="button" onclick="addRow()"style=";border-radius:4px;margin:10px" class="btn btn-dark">Add Note</button>
                    <br><br>
                    <button type="submit" style="background-color:#427bb8;border-radius:4px;margin:10px" class="btn" name="submit">Submit</button>
                </form>
                        </div>
                <script>
                    $('.note').hide();
                    $('.note-btn').click( function(){
                        $(".note").toggle(1000);
                    })
                    </script>
                        
<div style="max-width:400px;">
               

<script>
    function addRow() {
        const tableBody = document.getElementById('periodsTableBody');
        const newRow = document.createElement('tr');

        newRow.innerHTML = `
           <td><textarea type="text" name="note" required placeholder="Enter your Note"></textarea></td>
            <td><input type="date" name="start_date[]" required></td>
            <td><button type="button" onclick="removeRow(this)" class="btn">Remove</button></td>
        `;

        tableBody.appendChild(newRow);
    }

    function removeRow(button) {
        const row = button.parentNode.parentNode;
        row.parentNode.removeChild(row);
    }
</script>
</div></div>


<div style="font-size:20px;max-width:800px;margin-left :50px;">
                    <h2>Embrace how a life grows in you!</h2>
                    <p>Record your weights here to keep a track of your & your baby's health.</p>
                        <button type="button" class="btn btn-danger note-btn1">Track your Weight</button><br><br><hr><br>

                        <div class="note1">
                <form action="note.php" method="POST" style="max-width:1000px;">
                    <table style="border-radius:20px;">
                        <thead>
                            <tr>
                                <th>Weight</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="periodsTableBody">
                            <tr>
                                <td><input type="number" name="weight" required placeholder="Enter your Weight in Kg"></textarea></td>
                                <td><input type="date" name="date" required></td>
                                <td><button type="button" onclick="removeRow(this)" class="btn">Remove</button></td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="button" onclick="addRow()"style=";border-radius:4px;margin:10px" class="btn btn-dark">Add Note</button>
                    <br><br>
                    <button type="submit" style="background-color:#427bb8;border-radius:4px;margin:10px" class="btn" name="submit">Submit</button>
                </form>
                        </div>
                <script>
                    $('.note1').hide();
                    $('.note-btn1').click( function(){
                        $(".note1").toggle(1000);
                    })
                    </script>
                        
<div style="max-width:400px;">
               

<script>
    function addRow() {
        const tableBody = document.getElementById('periodsTableBody');
        const newRow = document.createElement('tr');

        newRow.innerHTML = `
           <td><textarea type="text" name="weight" required placeholder="Enter your Weight in Kg"></textarea></td>
            <td><input type="date" name="start_date[]" required></td>
            <td><button type="button" onclick="removeRow(this)" class="btn">Remove</button></td>
        `;

        tableBody.appendChild(newRow);
    }

    function removeRow(button) {
        const row = button.parentNode.parentNode;
        row.parentNode.removeChild(row);
    }
</script>
</div></div>


            <div style="max-width:900px">
                <div class="t1" style="font-size:150%;padding:20px;">

                <div style="display:flex">

                    <div style="flex: 1;padding:20px;">

                        <h2 class="h1">1. What is Pregnancy?</h2>
                        <p class="p1">Pregnancy is the condition in which a woman carries and nurtures a developing
                            fetus inside her uterus. It begins when a sperm fertilizes an egg, forming a zygote, which
                            then implants and grows in the uterine lining. Pregnancy typically lasts around 40 weeks,
                            divided into three trimesters, and involves the development of the baby from a fertilized
                            egg into a fully formed infant.
                           
                        </p>
                    </div>
                    <div style="flex: 1;margin-top:80px;">
                        <img src="preg.png" width="90%">
                    </div>

                </div>
                <br>
                <hr><br>
                <h2 class="h2">2. Process of Pregnancy </h2>
                <p class="p2">Pregnancy is the process by which a woman carries and nurtures a developing baby inside
                    her womb. It typically lasts around 40 weeks, divided into three trimesters:<br><br>
                    • Conception: Pregnancy begins when a sperm fertilizes an egg, forming a zygote. The fertilized egg
                    travels to the uterus and implants into the uterine lining.<br><br>

                    Labor and delivery mark the end of pregnancy, with the baby being born after a series of
                    contractions that help the baby exit the womb.<br>
                    Throughout pregnancy, regular medical checkups are crucial to ensure both the mother’s and baby’s
                    health.<br>
                </p>
                <br>
                <hr><br>
                <h2 class="h3">3. General Measures Throughout All Trimesters:</h2>
                <p class="p3">• Avoid Certain Foods: Stay away from raw or undercooked meats, fish high in mercury,
                    unpasteurized dairy, and certain soft cheeses to reduce the risk of infections.<br><br>
                    • Mental Health: Pregnancy can bring emotional changes. Seek support if you feel overwhelmed or
                    anxious.<br><br>
                    • Stay Informed: Educate yourself about childbirth, breastfeeding, and baby care. Join prenatal
                    classes or groups if possible.<br><br>
                    • Hydrate: Drink plenty of water throughout the pregnancy to support amniotic fluid levels and
                    prevent dehydration.<br><br>
                    • Monitor Your Health: Regularly check blood pressure and blood sugar levels, especially if you have
                    underlying health conditions or risk factors.<br><br>
                    By following these guidelines and staying in regular contact with your healthcare provider, you can
                    help ensure a healthier pregnancy for both you and your baby.<br><br>
                </p>
                <br>
                <hr><br>
                <h2>4. What happens in each trimesters?</h2><br>
                <h4 class="h4">• First Trimester (Weeks 1-12)</h4><br>
                <img src="tri1.png" width="900px" class="p4"><br>
                <hr><br>
                <h4 class="h5">• Second Trimester (Weeks 13-26)</h4><br>
                <img src="tri2.png" width="900px" class="p5"><br>
                <hr><br>
                <h4 class="h6">• Third Trimester (Weeks 27-40)</h4><br>
                <img src="tri3.png" width="900px" class="p6"><br>
                <hr><br>


                <h2 class="h7">5. Post Pregnancy Care </h2>
                <p>Post-pregnancy care is crucial for a new mother to regain her health, rebuild strength, and ensure
                    proper recovery. It involves taking care of physical, mental, and emotional well-being. Here's a
                    breakdown of care in three main areas: food, personal hygiene, and mental health care.</p><br><br>
                <p class="p7">• Hydration: Drinking enough water is vital, especially if you're breastfeeding. It helps
                    with milk production and keeps you hydrated. Aim for at least 8-10 glasses of water a day.<br><br>
                    • Balanced Diet: Focus on a nutrient-dense diet that supports recovery and energy levels.
                    Include:<br><br>
                    i. Proteins: Lean meats, fish, eggs, legumes, and dairy products support tissue repair and
                    energy.<br><br>
                    ii. Fruits and Vegetables: Rich in vitamins, antioxidants, and fiber. Fresh produce supports immune
                    function and aids digestion.<br><br>
                    iii. Whole Grains: Brown rice, oats, quinoa, and whole wheat bread provide long-lasting energy and
                    fiber.<br><br>
                    iv. Healthy Fats: Avocados, nuts, seeds, and fatty fish like salmon are good sources of Omega-3s
                    that support brain health and inflammation reduction.<br><br>
                    v. Iron-rich foods: Postpartum blood loss can lead to lower iron levels. Include iron-rich foods
                    like spinach, beans, red meat, and fortified cereals.<br><br>
                    • Calcium and Vitamin D: To support bone health, include calcium-rich foods like dairy products,
                    leafy greens, and fortified plant-based milks. Vitamin D is essential for calcium absorption, and
                    sunlight or supplementation may be needed.<br><br>
                    • Breastfeeding: If you choose to breastfeed, increase your calorie intake slightly (around 300-500
                    extra calories) to support milk production. Foods like oats, nuts, and dark leafy greens can boost
                    milk supply.<br><br>
                    i. Cleaning: Gently clean your perineal area after using the bathroom, ideally with warm water. You
                    can use a peri bottle (a squirt bottle) to rinse the area, particularly if you had stitches.<br><br>
                    ii. Pads: Use maternity pads (not regular sanitary pads) for bleeding. Expect lochia (postpartum
                    bleeding) for several weeks, though it will gradually lessen. Change pads frequently to avoid
                    infection.<br><br>
                    iii. Sitz Baths: Taking warm sitz baths for 10-15 minutes can soothe perineal discomfort, reduce
                    swelling, and promote healing if you had tears or an episiotomy during delivery.<br><br>
                    • Breast Hygiene:<br><br>
                    <span style="padding:px;"> i. Breastfeeding Care: If breastfeeding, ensure your nipples are clean
                        and dry to prevent infection. Use a mild soap and warm water to wash the area. Apply a soothing
                        cream or nipple balm to help with soreness.<br><br>
                        ii. Engorgement: If your breasts become engorged (overfull), massage gently or pump a little
                        milk to relieve discomfort.<br><br>
                        iii. Avoid Tight Bras: Wear a supportive, comfortable bra to avoid pressure on your breasts and
                        prevent clogged ducts.<br><br>
                    </span>
                   <h3 class="h8">7.	Postpartum Depression (PPD) -</h3>  Symptoms, Acceptance, and Measures to Be Taken<br>
<span>Postpartum Depression (PPD) is a serious mental health condition affecting many women after childbirth. Unlike the "baby blues," which are mild and temporary, PPD is more intense and can last for weeks or months. It is caused by a combination of hormonal changes, physical exhaustion, sleep deprivation, and emotional stress.<br>
<b>Symptoms of Postpartum Depression</b><br>
PPD symptoms can vary, but common signs include:<br>
<b>•	Emotional Symptoms:</b><br>
i.	Persistent sadness, hopelessness, or feeling overwhelmed<br>
ii.	Irritability or mood swings<br>
iii.	Crying spells with no clear cause<br>
iv.	Loss of interest in activities or inability to bond with the baby<br>
v.	Intense feelings of guilt, inadequacy, or anxiety<br>
<b>•	Physical Symptoms:</b><br>
i.	Chronic fatigue, even after rest<br>
ii.	Sleep disturbances, either insomnia or sleeping too much<br>
iii.	Changes in appetite (overeating or loss of appetite)<br>
iv.	Headaches, muscle pain, and digestive issues<br>
v.	Low energy and difficulty concentrating<br>
<b>•	Behavioral Symptoms:</b><br>
i.	Withdrawal from friends and family<br>
ii.	Avoiding self-care or daily responsibilities<br>
iii.	Thoughts of harming oneself or the baby (in severe cases)<br>
Acceptance of Postpartum Depression<br>
Acceptance of PPD is crucial for healing. Many women feel ashamed or guilty about experiencing PPD, but it’s important to remember that it is a medical condition, not a personal failure. About 10-20% of new mothers experience PPD, and it is not caused by a lack of love for the baby.<br>
•	It’s common: Understand that PPD is widespread and many women go through it.<br>
•	It’s not your fault: Hormonal, physical, and emotional changes after childbirth contribute to PPD, not your abilities as a mother.<br>
•	Ask for help: Seeking support is vital. PPD is treatable, and asking for help is a sign of strength.<br>
Measures to Be Taken for Postpartum Depression<br>
•	Seek Professional Help:<br>
i.	Consult a doctor or therapist: Reach out to a healthcare provider if you feel overwhelmed. They may recommend therapy (e.g., Cognitive Behavioral Therapy) or medication (antidepressants) to manage symptoms.<br>
ii.	Therapy: Counseling helps address negative thoughts and develop coping strategies.<br>
•	Create a Support System:<br>
i.	Talk to loved ones: Open communication with family, friends, or your partner can reduce feelings of isolation and provide emotional support.<br>
ii.	Join support groups: Online or in-person support groups can connect you with others who understand what you're going through.<br>
•	Prioritize Rest and Sleep:<br>
i.	Sleep when the baby sleeps: Try to rest whenever you can. Sleep deprivation exacerbates PPD, so taking naps or having someone help with nighttime care is essential.<br>
ii.	Ask for help: Don’t hesitate to ask your partner or family members to assist with baby care or household tasks.<br>
•	Take Care of Physical Health:<br>
i.	Eat well: A nutritious diet supports both physical and emotional recovery. Include fruits, vegetables, lean proteins, and whole grains.<br>
ii.	Exercise: Gentle activities, like walking or postnatal yoga, can help lift your mood. Always check with your doctor before starting new exercises.<br>
iii.	Avoid alcohol or drugs: These substances can worsen symptoms of depression and anxiety.<br>
•	Practice Self-Compassion:<br>
i.	Be kind to yourself: Understand that it's okay not to have everything under control. Celebrate small wins, like taking a shower or going for a walk.<br>
ii.	Set small goals: Don’t overwhelm yourself with tasks. Focus on manageable goals to avoid burnout.<br>
•	Bond with Your Baby:<br>
i.	Skin-to-skin contact: Hold and cuddle your baby to help with bonding and release oxytocin, which can improve mood.<br>
ii.	Breastfeeding: If possible, breastfeeding helps create a nurturing bond with the baby. However, don’t feel pressured if breastfeeding is challenging—seek support if needed.<br>
When to Seek Immediate Help<br>
If you experience thoughts of harming yourself or the baby, or if you experience extreme confusion, hallucinations, or delusions, seek emergency medical help immediately.<br>
</span><br>
                </p>
            </div>
                <script>

                    $('.p3').hide();
                    $('.p2').hide();
                    $('.p4').hide();
                    $('.p5').hide();
                    $('.p6').hide();
                    $('.p7').hide();
                    $(document).ready(function () {
                        // $('.h1').click(function(){
                        //    $(".p1").toggle(500);
                        //})
                        $('.h2').click(function () {
                            $(".p2").toggle(500);
                        })
                        $('.h3').click(function () {
                            $(".p3").toggle(500);
                        })
                        $('.h4').click(function () {
                            $(".p4").toggle(500);
                        })
                        $('.h5').click(function () {
                            $(".p5").toggle(500);
                        })
                        $('.h6').click(function () {
                            $(".p6").toggle(500);
                        })
                        $('.h7').click(function () {
                            $(".p7").toggle(500);
                        })

                    }
                    )
                </script>

            </div>

        </div>
    </div>


    <aside class="rightbar">
        <div class="informatiom">
            <div class="aside" style="margin:10px;">
                <p></p>
               
                    <h2>Her Store </h1>
                        <p>Your needs, our commitment
                            All your Menstrual product needs delivered at your doorstep earliest</p>
                        <h3>Menstrual product buying link
                    </h2>
                    <ul>Pads:-
                        <li><a
                                href="https://www.zeptonow.com/pn/sofy-antibacteria-sanitary-pads-xl/pvid/b6fd35f1-7daf-4c3a-aba7-c28970961baf">
                                Link for buying pads</a></li>
                        Menstrual cups
                        <li><a
                                href="https://www.zeptonow.com/pn/pee-safe-menstrual-cup-medium/pvid/4af772c7-c1a9-462a-aa15-422ff1c69a11">Link
                                for buying menstrual cups</a></li>
                        Tampons
                        <li><a
                                href="https://www.zeptonow.com/pn/sirona-premium-tampons-heavy-flow/pvid/ad5cd11c-6da6-4a02-a6d7-89e38850237f">Link
                                for buying tampons</a></li>
                    </ul>
            </div>
            <div class="footer">
            </div>
        </div>

    </aside>
    <footer>
        <p>&copy; 2024 HerAangan. All Rights Reserved.</p>

        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>

    </footer>
</body>

</html>