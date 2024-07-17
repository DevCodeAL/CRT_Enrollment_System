<?php
session_start();
require_once('db_conn.php');
$conn = connection();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>


<div id="enrollModal" class="enrollModal">
    <div class="enrollModal_Form">
    <span id="enrollClose">❌</span>
    <h2 style="text-align: center; color: green;"><b>College Enrollment Form</b></h2>
    <form class="form-collge" id="landingForm" action="college_create.php" method="post">

    <div class="w-50 p-3">
         <label for="username">Username:</label>
        <input type="text" name="username" class="form-control"required>
    </div>


    <div class="w-50 p-3">
         <label for="password">Password:</label>
        <input type="password" name="password" class="form-control" required>
    </div>

    <div class="w-50 p-3">
         <label for="email">Email:</label>
        <input type="text" class="form-control" name="email" placeholder="example@gmail.com" required>
    </div>
    
    <div class="w-25 p-3">
        <label for="user">Classified As:</label>
    <select class="form-select mb-3" name="user" id="">
        <option value="">Choose</option>
        <option style="text-align: center;" value="New Student">New Student</option>
        <option style="text-align: center;" value="Old Student">Old Student</option>
        <option style="text-align: center;" value="Transferee">Transferee</option>
    </select>
</div>

<div class="w-25 p-3">
    <label for="year-status">Year Status:</label>
    <select class="form-select mb-3" name="year-status" id="">
    <option value="">Choose</option>
        <option style="text-align: center;" value="1st Year College">1st Year College</option>
        <option style="text-align: center;" value="2nd Year College">2nd Year College</option>
        <option style="text-align: center;" value="3rd Year College">3rd Year College</option>
        <option style="text-align: center;" value="4rd Year College">4rth Year College</option>
    </select>
</div>

<div class="w-50 p-3">
    <label for="course">Course:</label>
    <select class="form-select mb-3" name="course" id="">
    <option value="">Choose</option>
        <option style="text-align: center;" value="BS in Information Technology">BS in Information Technology</option>
        <option style="text-align: center;" value="BS in Accounting Information System">BS in Accounting Information System</option>
        <option style="text-align: center;" value="BS in Management Accounting">BS in Management Accounting</option>
        <option style="text-align: center;" value="BS in Hospitality Management">BS in Hospitality Management</option>
        <option style="text-align: center;" value="BS in Tourism Management">BS in Tourism Management</option>
        <option style="text-align: center;" value="Bachelor in Technical Vocational Teacher Education">Bachelor in Technical Vocational Teacher Education</option>
        <option style="text-align: center;" value="Associate in Computer Technology (2 Years)">Associate in Computer Technology (2 Years)</option>
        <option style="text-align: center;" value="Hotel in Restaurant Services (2 Years)">Hotel in Restaurant Services (2 Years)</option>
    </select>
</div>

<div class="w-25 p-3">
            <label for="student">Enrollment Status:</label>
            <select name="student" id=""  class="form-select mb-3">
                <option value="">Choose</option>
                <option value="Regular Student">Regular Student</option>
                <option value="Irregular Student">Irregular Student</option>
        </select>
</div>

<div class="w-25 p-3">
            <label for="branch">Branch:</label>
    <select class="form-select mb-3" name="branchc" id="">
    <option value="">Choose</option>
        <option style="text-align: center;" value="Cabanatuan">Cabanatuan</option>
        <option style="text-align: center;" value="Guimba">Guimba</option>
        <option style="text-align: center;" value="Gapan">Gapan</option>
        <option style="text-align: center;" value="San Jose">San Jose</option>
    </select>
</div>

<div class="w-50 p-3">
            <label for="student_number">Student Number:</label>
            <input type="text" name="student_number" class="form-control" placeholder="Student Number:If none write N/A" required>
</div>

<div class="w-25 p-3">
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" class="form-control" placeholder="First Name" required>
</div>

<div class="w-25 p-3">
            <label for="middle-name">Middle Name:</label>
            <input type="text" name="middle-name" class="form-control" placeholder="Middle Name" required>
</div>

<div class="w-25 p-3">
            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" class="form-control" placeholder="Last Name" required>
</div>

<div class="w-25 p-3">
            <label for="name-extension">Name Extension:</label>
            <input type="text" name="name-extension" class="form-control" placeholder="Example: Jr., III, Sr. etc.    Note: Please leave it blank if Not Available." required>
</div>

<div class="w-25 p-3">
            <label for="date_birth">Date of Birth:</label>
            <input type="date" name="date_birth" class="form-control" placeholder="" required>
</div>

<div class="w-25 p-3">
    <label for="datetime">Enrollment (date and time):</label>
    <input type="datetime-local" id="datetime" class="form-control" name="datetime">
  </div>

<div class="w-50 p-3">
            <label for="house_number">House Number:</label>
            <input type="text" name="house_number" class="form-control" placeholder="Building and Street Name*E.g. 123 Sampaguita St." required>
</div>

<div class="w-25 p-3">
            <label for="barangay">Barangay:</label>
            <input type="text" name="barangay" class="form-control" required>
</div>

<div class="w-25 p-3">
            <label for="municipal">City/Municipal:</label>
            <input type="text" name="municipal" class="form-control" required>
</div>

<div class="w-25 p-3">
            <label for="province">Province:</label>
            <input type="text" name="province" class="form-control" required>
</div>

<div class="w-25 p-3">
            <label for="zipcode">Zipcode:</label>
            <input type="text" name="zipcode" class="form-control" required>
</div>

<div class="w-25 p-3">
<label for="sex">Sex:</label>
            <select name="sex" id=""   class="form-select mb-3">
                <option value="">Choose</option>
                <option value="Regular Student">Male</option>
                <option value="Irregular Student">Female</option>
        </select>
</div>


<div class="w-25 p-3">
        <label for="religion">Religion:</label>
            <input type="text" name="religion" class="form-control" required>
</div>

<div class="w-25 p-3">
            <label for="height">Height:</label>
            <input type="text" name="height" class="form-control" required>
</div>

<div class="w-25 p-3">
            <label for="weight">Weigth:</label>
            <input type="text" name="weight" class="form-control" required>
</div>

<div class="w-25 p-3">
            <label for="civil_status">Civil Status:</label>
    <select class="form-select mb-3" name="civil_status" id="">
    <option value="">Choose</option>
        <option style="text-align: center;" value="1st Year College">Single</option>
        <option style="text-align: center;" value="2nd Year College">Married</option>
        <option style="text-align: center;" value="2nd Year College">Widowed</option>
    </select>
</div>

<div class="w-25 p-3">
            <label for="cellphone_number">Cellphone Number:</label>
            <input type="number" name="cellphone_number" class="form-control" placeholder="Contact number must be 11 digits" required>
</div>

<div class="w-50 p-3">
            <label for="fb_account_name">Facebook Account Name:</label>
            <input type="text" name="fb_account_name" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="income">Total Annual Gross Income:</label>
            <input type="number" name="income" class="form-control" placeholder="(Parent or guardian)" required>
</div>

<div class="w-50 p-3">
            <label for="elementary">(1) ELEMENTARY:</label>
            <input type="text" name="elementary" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="year_graduated">(1) YEAR GRADUATED:</label>
            <input type="text" name="year_graduated" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="high_school">(1) HIGH SCHOOL:</label>
            <input type="text" name="high_school" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="highschool_year_graduated">(2) YEAR GRADUATED:</label>
            <input type="text" name="highschool_year_graduated" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="college">(3) COLLEGIATE:</label>
            <input type="text" name="college" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="admission">(3) Year of Admission:</label>
            <input type="text" name="admission" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="parent">PARENT/ GUARDIAN NAME:</label>
            <input type="text" name="parent" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="contact_number">CONTACT NUMBER OF PARENT/ GUARDIAN:</label>
            <input type="text" class="form-control" name="contact_number" placeholder="Contact number must be 11 digits" required>
</div>
            <input type="submit" name="submit"  class="btn btn-primary">  
        </form>
    </div>
</div>


<!--SHS Form-->
<div id="shsForm" class="enrollModal">
    <div class="enrollModal_Form">
    <span id="shsclose">❌</span>
    <h2 style="text-align: center; color: green;"><b>SHS Enrollment Form</b></h2>
    <form class="form-collge" id="landingForm2" action="shs-form.php" method="post">

    <div class="w-50 p-3">
         <label for="">Username:</label>
        <input type="text" name="username_shs" class="form-control"required>
    </div>


    <div class="w-50 p-3">
         <label for="password_shs">Password:</label>
        <input type="password" name="password_shs" class="form-control" required>
    </div>

    <div class="w-50 p-3">
         <label for="email_shs">Email:</label>
        <input type="text" class="form-control" name="email_shs" placeholder="example@gmail.com" required>
    </div>

    <div class="w-50 p-3">
            <label for="LRN_shs">LRN Number:</label>
            <input type="text" name="LRN_shs" class="form-control" required>
</div>

<div class="w-25 p-3">
            <label for="date_birth_shs">Date of Birth:</label>
            <input type="date" class="form-control" name="date_birth_shs" placeholder="" required>
</div>

<div class="w-25 p-3">
            <label for="firstname_shs">First Name:</label>
            <input type="text" class="form-control" name="firstname_shs" placeholder="First Name" required>
</div>

<div class="w-25 p-3">
            <label for="middlename_shs">Middle Name:</label>
            <input type="text" class="form-control" name="middlename_shs" placeholder="Middle Name" required>
</div>

<div class="w-25 p-3">
            <label for="">Last Name:</label>
            <input type="text" class="form-control" name="lastname_shs" placeholder="Last Name" required>
</div>

<div class="w-25 p-3">
            <label for="lastname_shs">Name Extension:</label>
            <input type="text" class="form-control" name="name-extension_shs" placeholder="Example: Jr., III, Sr. etc.    Note: Please leave it blank if Not Available." required>
</div>

<div class="w-25 p-3">
<label for="grade">Grade:</label>
    <select class="form-select mb-3" name="grade" id="">
    <option value="">Choose</option>
        <option style="text-align: center;" value="Grade 11">Grade 11</option>
        <option style="text-align: center;" value="Grade 12">Grade 12</option>
    </select>
</div>

<div class="w-25 p-3">
            <label for="branch">Branch:</label>
    <select class="form-select mb-3" name="branch" id="">
    <option value="">Choose</option>
        <option style="text-align: center;" value="Cabanatuan">Cabanatuan</option>
        <option style="text-align: center;" value="Guimba">Guimba</option>
        <option style="text-align: center;" value="Gapan">Gapan</option>
        <option style="text-align: center;" value="San Jose">San Jose</option>
    </select>
</div>

<div class="w-25 p-3">
            <label for="strand">Strand:</label>
    <select class="form-select mb-3" name="strand" id="">
    <option value="">Choose</option>
        <option style="text-align: center;" value="GAS">GAS</option>
        <option style="text-align: center;" value="ABM">ABM</option>
        <option style="text-align: center;" value="HUMMS">HUMSS</option>
        <option style="text-align: center;" value="STEM">STEM</option>
        <option style="text-align: center;" value="HE">HE</option>
        <option style="text-align: center;" value="ICT">ICT</option>
    </select>
</div>

<div class="w-50 p-3">
    <label for="datetimes">Enrollment (date and time):</label>
    <input type="datetime-local" id="datetime" class="form-control" name="datetimes">
  </div>

<div class="w-50 p-3">
            <label for="mothers_name">Mothers Name:</label>
            <input type="text" name="mothers_name" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="fathers_name">Fathers Name:</label>
            <input type="text" name="fathers_name" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="parent_contact_number">Parent Contact Number:</label>
            <input type="number" name="parent_contact_number" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="last_school">Last School Attendent:</label>
            <input type="text" name="last_school" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="house_number_shs">House Number:</label>
            <input type="text" name="house_number_shs" class="form-control" placeholder="Building and Street Name*E.g. 123 Sampaguita St." required>
</div>

<div class="w-50 p-3">
            <label for="barangay_shs">Barangay:</label>
            <input type="text" name="barangay_shs" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="municipal_shs">City/Municipal:</label>
            <input type="text" name="municipal_shs" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="province_shs">Province:</label>
            <input type="text" name="province_shs" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="zipcode_shs">Zipcode:</label>
            <input type="text" name="zipcode_shs" class="form-control" required>
</div>

<div class="w-50 p-3">
<label for="sex_shs">Sex:</label>
    <select class="form-select mb-3" name="sex_shs" id="">
    <option value="">Choose</option>
        <option style="text-align: center;" value="Male">Male</option>
        <option style="text-align: center;" value="Female">Female</option>
    </select>
</div>


<div class="w-50 p-3">
        <label for="religion_shs">Religion:</label>
            <input type="text" name="religion_shs" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="civil_status_shs">Civil Status:</label>
    <select class="form-select mb-3" name="civil_status_shs" id="">
    <option value="">Choose</option>
        <option style="text-align: center;" value="1st Year College">Single</option>
        <option style="text-align: center;" value="2nd Year College">Married</option>
    </select>
</div>

<div class="w-50 p-3">
            <label for="cp_number_shs">Cellphone Number:</label>
            <input type="number" name="cp_number_shs" class="form-control" placeholder="Contact number must be 11 digits" required>
</div>

<div class="w-50 p-3">
            <label for="fb_account_name_shs">Facebook Account Name:</label>
            <input type="text" name="fb_account_name_shs" class="form-control" required>
</div>

<div class="w-50 p-3">
            <label for="parent_shs">PARENT/ GUARDIAN NAME:</label>
            <input type="text" name="parent_shs" class="form-control" required>
</div>
            <input type="submit" class="btn btn-primary" name="submit">  
        </form>
    </div>
</div>

    <div id="modal" class="modal">
        <div class="myModal">
        <span id="close" class="close">❌</span>
        <form class="form" class="mb-3" action="login.php" method="post" id="loginform" onsubmit="return validateForm()">
        <h3 style="position: relative; top: 10px;">Log In</h3>

            <div id="errorMessage" class="errorMessage"></div>

            <label for="user"><b>Select User</b></label>
            <select class="form-select" name="user" id="">
                <option style="text-align: center;" value="Choose">Choose</option>
                <option style="text-align: center;" value="College">College</option>
                <option style="text-align: center;" value="SHS">SHS</option>
            </select>
            <label for="username" class="form-label"><b>User Name</b></label>
            <input  class="form-control"  id="username" type="text" name="username" required>
            <label class="form-label" for="password"><b>Password</b></label>
            <input  class="form-control"  type="password" id="password" name="password" required>
            <button  class="btn btn-primary" type="submit" name="submit">Login</button>
        </form>
        </div>
    </div>
    <div id="nav-bar" class="p-3 mb-2 bg-primary text-white">
            <ul>
                <li><a href="#index">Home</a></li>
                <li><a href="#course-offered-item6">Course Offered</a></li>
                <li class="nav-drop-down">
                        <span class="hover-span">Online Enrollment</span>
                       <ol class="nav-option-drop-down">
                        <li><button class="drop_down_menu" id="dropdown-btn-college">College</button></li>
                        <li><button class="drop_down_menu" id="dropdown-btn-shs">Senior High School</button></li>
                       </ol>
                </li>
                <li><img src="image/CRT2.png" alt="CRTLogo" width="90px"></li>
                <li><a href="#contactUs">Contact Us</a></li>
                <li><a href="#aboutCRT">About CRT</a></li>
                <li><button type="button" class="btn btn-primary" id="btn">Log In</button></li>
            </ul>
        </div>

    <div class="container-fluid">

        <div id="index" class="bg-dark bg-gradient item2">
            <div class="mySlide">
                <img src="image/img-cab.jpg" alt="crt image" width="1100px" height="330px">
                <div class="content">Cabanatuan City Main Campus</div>
            </div>

            <div class="mySlide">
                <img src="image/crt-background.jpg" alt="crt image"width="1100px" height="330px">
                <div class="content">Guimba Branch</div>
            </div>

            <div class="mySlide">
                <img src="image/img-080gapan.jpg" alt="crt image" width="1100px" height="330px">
                <div class="content">Gapan Branch</div>
            </div>

            <div class="mySlide">
                <img src="image/img-091san-jose.png" alt="crt image" width="1100px" height="330px">
                <div class="content">San Jose City Branch</div>
            </div>

            <div class="dots-con">
                <span class="dots"></span>
                <span class="dots"></span>
                <span class="dots"></span>
                <span class="dots"></span>
            </div>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/yAw-ZQLhbPw?si=GWtYdh6cDnvLwAze" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/xouoh6x8Q0I?si=ctF3CwCrgMRj8B5j" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

            <br>

            <div class="wrapper">
            <h2>Why students enroll at CRT?</h2>
            </div>
        <div class="item3">
            <div  class="element">
                <h3>Guaranteed Quality Education</h3>
                <img class="img" src="image/img1.jpg" alt="">
               <p>All courses are recognized by the CHED, TESDA, and DepEd. The students are assured of the standards set by the government, for the curriculum, facilities and the like.</p>
            </div>
            <div  class="element">
                <h3>Flexible Learning</h3>
                <img src="image/imag2.jpg" width="300px" style="padding: 10px;" alt="">
                <p>A Learning Management System is readily available for the students who are given individual account to access lessons using the online platform other than their face-to-face classes.</p>
            </div>
            <div  class="element">
                <h3>Competency Based Training</h3>
                <img class="img"  src="image/img3.jpg" alt="">
                <p>The students are being prepared to gain competency required to pass Competency Assessment for National Certification and Eligibility.</p>
            </div>
            <div  class="element">
                <h3>Wifi-Zone Campus with Virtual Library</h3>
                <img class="img" src="image/bro4.jpg" alt="">
                <p> Other than books available, it has computers with internet access and students can avail of free WiFi connectivity powered by CRT Globe GoWiFi and CRT Smart Free WiFi.</p>
            </div>
            <div  class="element">
                <h3>State-of-the-art Facilities</h3>
                <img class="img" src="image/bro5.jpg" alt="">
                <p> The laboratory facilities are updated and upgraded from time to time to keep abreast with the ever-changing development in technology. All the laboratories use the standards set for college courses.</p>
            </div>
            <div  class="element">
                <h3>Air-Conditioned Classrooms</h3>
                <img class="img" src="image/bro6.jpg" alt="">
                <p style="margin-top: 24px;">CRT provides an environment conducive to learning. Both the instructors and the students maximize their face-to-face interactions and learning with a cozy environment.</p>
            </div>
            <div  class="element">
                <h3>Industry Support</h3>
                <img class="img" src="image/bro7.jpg" alt="">
                <p>Other that classroom training, students undergo On-the-Job Training (OJT) in the private or government institutions to better equip them to become highly competitive professionals.</p>
            </div>
            <div  class="element">
                <h3>Accredited Assessment Center</h3>
                <img class="img" src="image/bro8.jpg" alt="">
                <p style="margin-top: 34px;">CRT is an accredited assessment center for Hospitality, Tourism, Computer, and Education Competency Requirement.</p>
            </div>
            <div  class="element">
                <h3>Holistic Development Approach</h3>
                <img class="img" src="image/bro9.jpg" alt="">
                <p> At CRT, we believe that both skills and values should be honed hand in hand to mold a more responsible and competent person. Total development of a person is our concern.</p>
            </div>
            <div  class="element">
                <h3>Affordable Tuition Fee</h3>
                <img class="img" src="image/bro10.jpg" alt="">
                <p style="margin-top: 24px;">Above all, quality education is provided with affordable tuition fees no other college of our class can offer.</p>
            </div>
        </div>

            <div style="background-color: #007bff; color: white; padding: 20px;">
            <h2>Course Offered</h2>
        </div>
         <div id="course-offered-item6" class="course-offered-item6">

               <header>
                    <h2>College</h2>
                    <h3>4 Years</h3>
               </header>

                    <div class="element">
                     <b>B.S. in Information Technology</b>
                        <p>BSIT is a four-year degree ladderized program that prepares students to become IT professionals with primary competencies in the areas of systems analysis and design, applications development, database administration, network administration, and systems implementation and maintenance. It likewise deals with the design and development of computer- based information systems for real-world business solutions.</p>
                    </div>

                    <div class="element">
                        <b>B.S. in Accounting Information System</b>
                    <p>BSAIS is a degree program that provides general accounting education to students wanting to pursue a professional career in Accounting Information System. It is a profession that combines knowledge in business, accounting and computer systems. Graduates of this program qualifies to take assessments leading to certifications in accounting information systems given by global professional Accounting Information System organizations.</p>
                    </div>

            <div class="element">
                <b>B.S. in Hospitality Management</b>
                <p>BSHM is a four-year degree ladderized program that covers the process of conception, planning, development, human resource and management of the different aspects of businesses in the hospitality industry. The program provides students with technical skills, as well as knowledge in marketing, finance, budgeting, staffing and other fields of business. The program also aims to teach entrepreneurship skills.</p>
             </div>

             <div class="element">
                <b>B.S. in Tourism Management</b>
                <p>BSTM is a degree program that delivers education to people who are interested to build a career in the travel and leisure industry involving tourism planning, development, implementation and control management functions. The program professionally trains and equip students with competencies that are needed to execute tasks on tourism planning and development, transportation services, travel and tour services. They are also trained to excel as business managers or entrepreneurs operating their own travel and/orleisure enterprises.</p>
                </div>

                <div class="element">
                <b>Bachelor in Technical Vocational Teacher Education</b>
                <p>BTVTEd program is a four-year teacher education program designed to equip future teachers with adequate and relevant competencies in the area of technical vocational teacher education. The technical and vocational teacher education curriculum shall impart a body of knowledge, skills, attitudes, values and experiences that will provide prospective Grade 9 – 10 TLE Teachers, Senior High School teachers for Tech-Voc Livelihood track, TVET Trainers/Instructors, and faculty members in higher educational institutions with necessary competencies essential for effective teaching.</p>
                </div>


                <header>
                    <h2>Senior High School</h2>
                    <p>Grade 11 & 12</p>
                    <h3>Academic Track</h3>
               </header>

               <div class="element">
                <b>Accountancy, Business and Management (ABM)</b>
                <p>Focused on the basic concepts of financial management, business management, corporate operations, and all things that are accounted for.</p>
               </div>

               <div class="element">
                <b>General Academic Track (GAS)</b>
                <p>It is great for students who are still undecided on which track to take in college.</p>
               </div>

               <div class="element">
                <b>Humanities and Social Sciences (HUMSS)</b>
                <p>This is for those who are considering taking up journalism, communication arts, liberal arts, education, and other social science-related courses in college.</p>
               </div>

               <div class="element">
                <b>Science, Technology, Engineering and Mathematics (STEM)*</b>
                <p>Under the track, you can become a pilot, an architect, an astrophysicist, a biologist, a chemist, an engineer, a dentist, a nutritionist, a nurse, a doctor, and a lot more.</p>
               </div>

               <header>
                    <h2>2 Years</h2>
                    <h3>Associate Course</h3>
               </header>

               <div class="element">
                <b>Associate in Computer Technology</b>
                <p>The Associate in Computer Technology program (ACT) provides knowledge and skills in the fundamental of computer programming and basic computation.</p>
               </div>

               <div class="element">
                <b>Hotel and Restaurant Services</b>
                <p>This 2-year diploma course is designed to help students learn the principles in hotel operation, housekeeping, food and beverage services and culinary arts.</p>
               </div>

               <div class="element">
                <b>Food Service Management</b>
                <p>Designed to provide the skills needed to manage a restaurant or food service outlet, this degree puts graduates on the track to manage food service operations, such as those in hospitals, corporate cafeterias, upscale fast food operations and chain restaurants.</p>
               </div>


               <header>
                    <h2>Technical-Vocational-Livelihood</h2>
               </header>

               <div class="element">
                <b>Information and Communications Technology (ICT)</b>
                <p>Utilize information and communication technological tools to contextualize, collaborate, and create experiences for learning like writing computer programs, illustrating, designing, websites and many more.</p>
               </div>

               <div class="element">
                <b>Home Economics (HE)</b>
                <p>Offers various specializations that can lead to livelihood projects at home and give you job-ready skills that can help you in finding the right employment. Courses incudes bartending, bread and pastry, caregiving, cookery, food and beverage, housekeeping, tourism, among others.</p>
               </div>

               <div class="element">
                <b>Industrial Arts Strand (IA)</b>
                <p>This strand follows the TESDA curriculum to gain skills and knowledge on electronics repair, electrical installation, computer system servicing among others.</p>
               </div>
     </div><br><br>

            <header id="aboutCRT">
                <h2 style="font-weight: bold; padding: 20px;">Who is CRT?</h2>
               </header>

    <div class="aboutCRT">
        <div>
            <img src="image/img-building.jpg" alt="" width="100%;">
        </div>

        <div>
            <b>Vision</b>
            <p>To be recognized and respected as one of the premier members of the academic community that provides excellence in technological education.</p>
        
            <b>Mission</b>
            <p>The College for Research & Technology of Cabanatuan is a nurturing community devoted in providing accessible and affordable technological education by being a catalyst of innovation in the promotion of holistic development to empower individuals discovers their true worth and become productive members of the society.</p>
        </div>

                <header>
                <h2 style="font-weight: bold; padding-top: 40px;">CRT Now and Then</h2>
                <p style="text-align: justify; padding: 20px;"> The College for Research and Technology of Cabanatuan (CRT) started as a computer school and has been known to be the first computer school in Nueva Ecija. It pioneered in applying a different approach in education like embedding competency courses to baccalaureate course that even the more established colleges and universities followed. After the main campus was established in 1988 at Cabanatuan City, a strategic plan was laid-out by its president, Dr. Reynato C. Arimbuyutan to establish campuses in all of the four districts of Nueva Ecija. In this way, it was envisioned to contend with the growing desire of students to study in their places of abode but with the quality of education comparable to its main campus. The first Branch established after its Main Campus was the Gapan Branch which opened in 1997. Currently, it is located at Abad Santos Street, Barangay Santo Nino, Gapan City with the hope that the college-owned campus will be built on its lot along Maharlika Highway, Bayanihan, Gapan City in the near future. After three years Guimba Campus was built, located at Parairo St., Saranay Dist., Guimba, Nueva Ecija and followed by San Jose Campus located at Sanchez St., San Jose City. The Gapan, Guimba and San Jose branches are Extension Campuses of the Main Branch that offers two years Technical Courses preparatory to a degree course applying the ladderized education approach. TechVoc courses are embedded in all of its curricular courses. This system had been institutionalized by CHED and TESDA to produce more skilled students and increase the chance for employment of graduates. Presently, CRT had been given by the Department of Education permit to operate the Senior High School in all of its branches. Its expertise in TechVoc education for the past two decades had been considered. In this instance, CRT had been given permits and recognition of the trifocalized system of education in the Philippines: CHED, TESDA and DepEd. The last four years had been a tremendous moment for the college with the completion of three additional buildings in Guimba, San Jose and Cabanatuan and the Gymnasium in Gapan. Winning back to back Championship in Cheerdance Competition at the Nueva Ecija Collegiate Students League (NECSL), Championship at NECSL Women Volleyball Competition, the provincial Step-Up Dance Competition championship, and many more representing the best of a true Crtian. Also, the college witnessed the first batch of BTTE graduates who passed the Licensure Examination for Teachers (LET). All the baccalaureate degrees offered by the college: B.S. in Information Technology, B.S. in Hotel and Restaurant Management, B.S. in Tourism Management, B.S. in Accounting Technology, and Bachelor in Technical Teacher Education had been recognized by the Commission on Higher Education (CHED). Scholarships, the quality of education and the everimproving facilities provided by the college had been the main reason why CRT continuously grow and develop.</p>
               </header>



    </div>

        <div class="bg-dark bg-gradient item4">
            <h1>Enroll Now!</h1>
            <img class="offer" src="image/offers.jpg" alt="">
            <img class="offer" src="image/shsposter.jpg" alt="">
        </div>
        <div id="contactUs" class="boundery"></div>
        <div class="bg-dark bg-gradient item5">
            <div>
                <b>Our Mission</b>
                <p>The College for Research & Technology of Cabanatuan is a nurturing community devoted in providing accessible and affordable technological education by being a catalyst of innovation in the promotion of holistic development to empower individuals discovers their true worth and become productive members of the society.</p>
            </div>
            <div>
                <b>Contact Us</b>
                <p> (044) 463-2735</p>
                <p>crt.cabanatuan@gmail.com</p>
                <a class="fb-account" href="https://www.facebook.com/crtcab1988/"><span style="color: white;">Visit facebook account at:</span> https://www.facebook.com/crtcab1988/</a>
            </div>

            <div style="display: flex; flex-direction: column;">
                <img style="position: relative; left: 140px;" src="image/crtemblem.png" alt="" width="100px">
                <b>College for Research & Technology</b>
                <p>Copyright 2024</p>
                <p>CRT Official Website</p>
            </div>

            <div style="position: relative; right: 40px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d245984.22314615024!2d120.59530916262977!3d15.564725627352944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d15.4827722!2d120.7120023!4m5!1s0x33912cdca5dc1571%3A0xf7af367e2b5120c2!2sMQ49%2BVFJ%20College%20for%20Research%20and%20Technology%2C%20Parairo%20Rd%2C%20Guimba%2C%20Nueva%20Ecija!3m2!1d15.6572371!2d120.7687606!5e0!3m2!1sen!2sph!4v1712300165971!5m2!1sen!2sph" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

<script>
    
document.getElementById("loginform").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent default form submission

    // Get form data
    var formData = new FormData(this);

    // Send form data via AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "login.php", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Response from PHP file
            var response = xhr.responseText;
            document.getElementById("errorMessage").innerText = response;
            
         if (response.trim() === "College") {
            // Handle the unsuccessful case (optional)
            // Maybe display an error message or perform some other action
            window.location.href = "college_profile.php";

        } else if (response.trim() === "Shs") {
            // Handle the unsuccessful case (optional)
            // Maybe display an error message or perform some other action
            window.location.href = "guest_profile.php";
        } else {
            // Handle unexpected responses (optional)
            console.log("Unexpected response:", response.trim());
        }

        }
    };
    xhr.send(formData);
});

    </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/shsForm.js"></script>
     <script src="js/enrollForm.js"></script>
     <script src="js/animation.js"></script>
     <script src="js/log-modal.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/disabled.js"></script>

    </body> 
</html>