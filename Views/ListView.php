<?php include('../Includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Themes/Css/ListView.css">
    <title>Customer details</title>
</head>
<body>
       <div class="container">
           <h6 class = "overview_text">Overview</h6>
           <h4 class = "customers_text">Customers</h4>
           <nav aria-label="Page navigation example">
                   <ul class="pagination">
                        <li class="page-item">
                             <a class="page-link" href="#" aria-label="Previous">
                                  <img src="..\Themes\Images\left-arrow.png" width = "20" height = "20">
                              </a>
                        </li>
                        <li class="page-text">1-10 pages</li>
                        <a class="page-link" href="#" aria-label="Next">
                        <img src="..\Themes\Images\right-arrow.png" width = "20" height = "20">
                               </a>
                  
                   </ul>
            </nav>
           <a href="#" class = "create_text"> <img src="..\Themes\Images\add.png" width = "10" height = "10" class = "create_puls_btn"> Create</a>
            <!-- table record -->
            <div class="table ">
                  <table class="table text-center">
                  <thead>
                              <tr>
                                    <th scope="col">
                                        <input type="checkbox" name="main_checkbox" id="main_checkbox" class = "main-checkbox">
                                        <img src="..\Themes\Images\down-arrow.png" alt="20" width = "20" class = "delete_update_all">    
                                        <ul class = "all-list-type">
                                            <li><button class = "delte-btn-all">Delete All</button></li>
                                            <li><button class = "delte-btn-all">Mass Update</button></li>
                                        </ul>          
                                    </th>
                                    <th scope="col">Record Number</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Password</th>
                                    <th scope="col"><img src="..\Themes\Images\settings.png" alt="settings" width = "30" height = "30"></th>

                              </tr>
                  </thead>
                  <tbody>
                               <tr>
                                    <td><input type="checkbox" name="name" id="name" class ="selected_check"></td>
                                    <td scope="row">CUS_1</td>
                                    <td>kamalesh </td>
                                    <td>kali</td>
                                    <td>8976453232</td>
                                    <td>kamaleshkali123@gmail.com</td>
                                    <td>kamal123</td>
                                    <td>
                                        <div class="dropdown">
                                              <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"></button>
                                                       <div class="dropdown-menu">
                                                             <a class="dropdown-item" href="#">Update</a>
                                                             <a class="dropdown-item-delte" href="#">Delete</a>
                                                             <a class="dropdown-item" href="DetailView.php">Detail View</a>
                                                       </div>
                                                       <img src="..\Themes\Images\view.png" alt="preview" width = "20" height = "20" class = "popup-check">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                     <td><input type="checkbox" name="name" id="name" class ="selected_check"></td>
                                     <td scope="row">CUS_2</td>
                                     <td>vicknesh</td>
                                     <td>vicky</td>
                                      <td>9865735262</td>
                                      <td>vicknesh123@gmail.com</td>
                                      <td>vicky123</td>
                                      <td>
                                         <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"></button>
                                                       <div class="dropdown-menu">
                                                             <a class="dropdown-item" href="#">Update</a>
                                                             <a class="dropdown-item" href="#">Delete</a>
                                                             <a class="dropdown-item" href="#">Detail View</a>
                                                       </div>
                                                       <img src="..\Themes\Images\view.png" alt="preview" width = "20" height = "20">
                                         </div>
                                      </td>
                                </tr>
                                <tr>
                                      <td><input type="checkbox" name="name" id="name" class ="selected_check"></td>
                                      <td scope="row">CUS_3</td>
                                      <td>karthick</td>
                                      <td>raj</td>
                                      <td>8865450232</td>
                                      <td>karthickraj123@gmail.com</td>
                                      <td>karthi123</td>
                                      <td>
                                          <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"></button>
                                                       <div class="dropdown-menu">
                                                             <a class="dropdown-item" href="#">Update</a>
                                                             <a class="dropdown-item" href="#">Delete</a>
                                                             <a class="dropdown-item" href="#">Detail View</a>
                                                       </div>
                                                       <img src="..\Themes\Images\view.png" alt="preview" width = "20" height = "20">
                                          </div>
                                      </td>
                                </tr>
                                <tr>
                                      <td><input type="checkbox" name="name" id="name" class ="selected_check"></td>
                                      <td scope="row">CUS_4</td>
                                      <td>mani</td>
                                      <td>vichu</td>
                                      <td>7600267032</td>
                                      <td>manivichu123@gmail.com</td>
                                      <td>mani123</td>
                                      <td>
                                          <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"></button>
                                                       <div class="dropdown-menu">
                                                             <a class="dropdown-item" href="#">Update</a>
                                                             <a class="dropdown-item" href="#">Delete</a>
                                                             <a class="dropdown-item" href="#">Detail View</a>
                                                       </div>
                                                       <img src="..\Themes\Images\view.png" alt="preview" width = "20" height = "20">
                                          </div>
                                      </td>
                                </tr>
                                <tr>
                                      <td><input type="checkbox" name="name" id="name" class ="selected_check"></td>
                                      <td scope="row">CUS_5</td>
                                      <td>Karan</td>
                                      <td>rajan</td>
                                      <td>7354267032</td>
                                      <td>karanraj123@gmail.com</td>
                                      <td>karan123</td>
                                      <td>
                                          <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"></button>
                                                       <div class="dropdown-menu">
                                                             <a class="dropdown-item" href="#">Update</a>
                                                             <a class="dropdown-item" href="#">Delete</a>
                                                             <a class="dropdown-item" href="#">Detail View</a>
                                                       </div>
                                                       <img src="..\Themes\Images\view.png" alt="preview" width = "20" height = "20">
                                          </div>
                                      </td>
                                </tr>
                                <tr>
                                      <td><input type="checkbox" name="name" id="name" class ="selected_check"></td>
                                      <td scope="row">CUS_6</td>
                                      <td>mani</td>
                                      <td>vichu</td>
                                      <td>7600267032</td>
                                      <td>manivichu123@gmail.com</td>
                                      <td>mani123</td>
                                      <td>
                                          <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"></button>
                                                       <div class="dropdown-menu">
                                                             <a class="dropdown-item" href="#">Update</a>
                                                             <a class="dropdown-item" href="#">Delete</a>
                                                             <a class="dropdown-item" href="#">Detail View</a>
                                                       </div>
                                                       <img src="..\Themes\Images\view.png" alt="preview" width = "20" height = "20">
                                          </div>
                                      </td>
                                </tr>
                                <tr>
                                      <td><input type="checkbox" name="name" id="name" class ="selected_check"></td>
                                      <td scope="row">CUS_7</td>
                                      <td>Harish</td>
                                      <td>Kali</td>
                                      <td>8674562216</td>
                                      <td>harish123@gmail.com</td>
                                      <td>harish123</td>
                                      <td>
                                          <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"></button>
                                                       <div class="dropdown-menu">
                                                             <a class="dropdown-item" href="#">Update</a>
                                                             <a class="dropdown-item" href="#">Delete</a>
                                                             <a class="dropdown-item" href="#">Detail View</a>
                                                       </div>
                                                       <img src="..\Themes\Images\view.png" alt="preview" width = "20" height = "20">
                                          </div>
                                      </td>
                                </tr>
                </tbody>
                </table>
            </div>
        </div>
        <!-- table end  -->
        <!-- popup view for preview -->
        <div class="popup">
                         <div class = "popup-header">
                                 <img src="..\Themes\Images\user.jpg" class = "popup-image" alt="user" width = "100" height = "100">
                                 <img src="..\Themes\Images\popup-wrong.png" class = "popup-image1" width = "15" height = "15">
                                 <hr>
                         </div>
                         <div class="popup-content">
                                 <h3 class = "popup-heading">Preview</h3>
                                 <br>
                                 <p class = "popup-detail"><strong>Firstname :</strong> kamalesh</p>
                                 <p class = "popup-detail"><strong>Lastname :</strong> kali</p>
                                 <p class = "popup-detail"><strong>Phone Number :</strong> 8976453232</p>
                                 <p class = "popup-detail"><strong>Email :</strong> kamaleshkali123@gmail.com</p>
                                 <p class = "popup-detail"><strong>Password :</strong> kamal123</p>
                                 <button class = "popup-btn">Done</button>
                         </div>
        </div>
        <!-- popup end  -->
        <!-- popup view for delte  -->
        <div class="popup-delete">
                               <div class="popup-header-delete">
                                        <img src="..\Themes\Images\warning.png" class = "popup-image-delete" width = "100" height = "100">
                                        <img src="..\Themes\Images\popup-wrong.png" class = "popup-image-delete-cancel" width = "15" height = "15">
                              </div>
                              <div class="popup-conten-delete">
                                        <h4 class = "popup-heading-text">Are You Sure To Delete This Record</h4>
                                        <br>
                                        <button class = "popup-delete-yes">Yes</button>
                                        <button class = "popup-delete-no">No</button>
                              </div>
        </div>
        <!-- popup end  -->
      <script src="../Themes/Javascript/ListView.js"></script>
</body>
</html>