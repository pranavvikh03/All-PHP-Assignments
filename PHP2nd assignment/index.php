<!DOCTYPE html>
<html>
    <head>
        <title>Registration Wizard</title>
        <meta charset="utf-8">
        <link rel="icon" href="Assets/images/4.jpg">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="Assets/style.css"/>
    </head>
    <body>
        <div id="home">
        <div class="custom_navbar">
            <span class="topnav">
                <a href="#" onclick="changeSection(1);" id="1">Home</a>
                <a href="#register" onclick="changeSection(2);" id="2">Registration</a>
                <a href="#list_students" onclick="changeSection(3);showRecords();" id="3">Student List</a>
            </span>
        </div>
        <div class="jumbotron shadow">
            <div data-aos="fade-up"><h1 class="text_label">Registration System for Online Webniar on Data Science</h1></div>
            <div data-aos="zoom-in"><h3 class="text_sublabel">"The Future is Here !"</h3></div>
        </div>
        <div>
        
            <div class="container">
                    <div class="card">
                        <div class="card-body" data-aos="zoom-in">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src='Assets/images/4.jpg' class="info_card_image"/>
                                </div>
                                <div class="col-sm-8">
                                    <h4 class="text-center">Data Science is the Future</h4>
                                    <p style="padding: 5%;" class="text-center">
                                        Data science is an inter-disciplinary field that uses scientific methods, processes, algorithms and systems to extract knowledge and insights from many structural and unstructured data. Data science is related to data mining, deep learning and big data.

Data science is a "concept to unify statistics, data analysis, machine learning, domain knowledge and their related methods" in order to "understand and analyze actual phenomena" with data. It uses techniques and theories drawn from many fields within the context of mathematics, statistics, computer science, domain knowledge and information science. Turing award winner Jim Gray imagined data science as a "fourth paradigm" of science (empirical, theoretical, computational and now data-driven) and asserted that "everything about science is changing because of the impact of information technology" and the data deluge.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="margin-top:40px;background-image: url('Assets/images/Flat-Mountains.svg'); opacity: 0.8;
                    background-attachment: fixed;
                    background-size: cover;">
                        <div class="card-body"><center>
                            <table class="table table-borderless table-hover text-center">
                                <tbody class="content_body">
                                    <tr><td style="font-size:28px; font-weight:700;">Topics Covered</td></tr>
                                        <tr><td>Introduction to DATA SCIENCE</td></tr>
                                        <tr><td>Basics of Statistics and Probability</td></tr>
                                        <tr><td>Python Basics</td></tr>
                                        <tr><td>Advanced Python Frameworks (Pandas,Numpy)</td></tr>
                                        <tr><td>Visualization using Matplotlib and Seaborn</td></tr>
                                        <tr><td>Exploratory data analysis</td></tr>
                                        <tr><td>Feature Engineering</td></tr>
                                        <tr><td>Machine Learning Algorithms</td></tr>
                                        <tr><td>Modal Evaluation Techniques</td></tr>
                                        <tr><td>Modal Deployment</td></tr>
                                </tbody>
                            </table> 
                        </center></div>
                    </div>
            </div>
        </div></div>
        <div id="register" style="display:none;">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#home" onclick="changeSection(1);">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#register" onclick="changeSection(2);">Register</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#list_students" onclick="changeSection(3);showRecords();">List Students</a>
                  </li>
                </ul>
              </nav>
            <div class="container mt-5">
                <div class="alert alert-success alert-dismissible fade show" style="display:none;" id='alert_register'><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Registration Successful !</strong></div>
                <div class="card">
                    <div class="card-header" style="font-size:larger; font-weight:700;">Register Here</div>
                    <div class="card-body">
                            <form id="registerForm" autocomplete="off">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>First Name:</label>
                                            <input type="text" class="form-control" id="fname" placeholder="First Name"/>
                                            <div id="fnamealert"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Last Name:</label>
                                            <input type="text" class="form-control" id="lname" placeholder="Last Name"/>
                                            <div id="lnamealert"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Department</label>
                                        <select id="dept" class="custom-select">
                                            <option value="invalid" disabled selected>Choose Department</option>
                                            <option>Computer Engineering</option>
                                            <option>Information Technology</option>
                                        </select>
                                        <div id="deptalert"></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="font-weight">Gender:</label><br/><center>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="gender1">
                                            <label class="custom-control-label" for="gender1">Male</label>
                                          </div>
                                          <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="gender2">
                                            <label class="custom-control-label" for="gender2">Female</label>
                                          </div></center>
                                          <div id="genderalert"></div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Mobile No.:</label>
                                            <input type="text" id="mobileno" onkeypress="return isNumberKey(event);" placeholder="Mobile No" class='form-control'/>
                                            <div id="mobilenoalert"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input type="text" id="email" placeholder="Email" class='form-control'/>
                                            <div id="emailalert"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Technologies Known:</label><br/>
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input disa" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Python or Any Prior knowledge of Programming Language</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input disa" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">Statistics & Probability</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input disa1" id="customCheck3">
                                            <label class="custom-control-label" for="customCheck3">No Knowledge</label>
                                        </div>
                                        <div id="technologiesalert"></div>
                                    </div>
                                    <div class="col-sm-6"><br/><br/>
                                        <button onclick="checkValidation();" id='submit' class="btn btn-block btn-lg btn-outline-success">
                                            &nbsp;&nbsp;&nbsp;&nbsp;Submit</button>
                                    </div>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <div id="list_students" style="display:none;">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#home" onclick="changeSection(1);">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#register" onclick="changeSection(2);">Register</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#list_students" onclick="changeSection(3);showRecords();">List Students</a>
                  </li>
                </ul>
              </nav>
              <div class="container mt-5">
                  <h2 class="text-center mb-4" id="headline">Registred Students</h2>
                  <div id="no-data-alert" class="alert alert-danger central-block" style="height:60px;"><strong>No Data Found</strong></div>
                  <table id='data_table' class="table table-hover table-responsive" style='display:none;'>
                      <thead class="thead-dark">
                          <tr>
                              <th class="align-middle">TimeStamp</th>
                              <th class="align-middle">Full Name</th>
                              <th class="align-middle">Gender</th>
                              <th class="align-middle">Department</th>
                              <th class="align-middle">Email</th>
                              <th class="align-middle">Mobile No.</th>
                              <th class="align-middle">Technologies Known</th>
                          </tr>
                      </thead>
                      <tbody id='list_table_id'>
                      </tbody>
                  </table>
              </div>
        </div>
        </div>
        <div class='footer' style="margin-top:60px;">
        </div>
        <!-- Files Imported for Bootstrap-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="Assets/designScript.js"></script>
        <script src="Assets/jqueryScripts.js"></script>
        
        <script>
            AOS.init({
                duration:1200,
            });
          </script>
              </body>
</html>