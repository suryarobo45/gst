<!-- <body> -->
<header>
    <div class="container ">
        <div class="row logosection ">
            <div class="col-lg-2  col-2">
                <div class="logo-card">
                    <img src="media/pharma-logo-2 (1).png" alt="">
                </div>
            </div>
            <div class="col-lg-1 col-3"></div>
            <div class="col-lg-1 col-4 ">
                <div id="menu-container">
                    <div id="menu-wrapper">
                        <div id="hamburger-menu"><span></span><span></span><span></span></div>
                        <!-- hamburger-menu -->
                    </div>
                    <!-- menu-wrapper -->
                    <ul class="menu-list accordion">
                        <li id="nav1" class="toggle accordion-toggle">
                            <span class="icon-plus"></span>
                            <a class="menu-link" href="#"></a>
                            <a href="admin/dasboard.php" class="onclick-stand" onclick="myFunction(this)">
                                <div class="side-option-1 p-2 " id="myElement">
                                    <i class="fas fa-tachometer-alt" style="color: white;font-size: 2em;"></i>
                                    <a href="admin/dasboard">
                                        <h5 class="side-head-1">DashBoard</h5>
                                    </a>
                                </div>
                            </a>
                        </li>
                        <!-- accordion-toggle -->
                        <!-- <ul class="menu-submenu accordion-content">
                     <li><a class="head" href="#">Submenu1</a></li>
                     <li><a class="head" href="#">Submenu2</a></li>
                     <li><a class="head" href="#">Submenu3</a></li>
                     </ul> -->
                        <!-- menu-submenu accordon-content-->
                        <li id="nav2" class="toggle accordion-toggle">
                            <span class="icon-plus"></span>
                            <a class="menu-link" href="#"></a>
                            <a href="" class="onclick-stand" onclick="myFunction(event)">
                                <div class="side-option-1 p-2 ">
                                    <i class="fas fa-file-invoice" style="color: #470700;font-size: 2em;"></i>
                                    <h5 class="side-head-1">Invoices</h5>
                                </div>
                            </a>
                        </li>
                        <!-- accordion-toggle -->
                        <!-- <ul class="menu-submenu accordion-content">
                     <li><a class="head" href="#">Submenu1</a></li>
                     <li><a class="head" href="#">Submenu2</a></li>
                     </ul> -->
                        <!-- menu-submenu accordon-content-->
                        <li id="nav3" class="toggle accordion-toggle">
                            <span class="icon-plus"></span>
                            <a class="menu-link" href="#"></a>
                            <a href="">
                                <div class="side-option-1 p-2 ">
                                    <i class="fas fa-file-alt" style="color: #470700;font-size: 2em;"></i>
                                    <h5 class="side-head-1">GST Returns</h5>
                                </div>
                            </a>
                        </li>
                        <li id="nav3" class="toggle accordion-toggle">
                            <span class="icon-plus"></span>
                            <a class="menu-link" href="#"></a>
                            <a href="">
                                <div class="side-option-1 p-2 ">
                                    <i class="fas fa-users" style="color: #470700;font-size: 2em;"></i>
                                    <h5 class="side-head-1">customer management</h5>
                                </div>
                            </a>
                        </li>
                        <!-- accordion-toggle -->
                        <!-- <ul class="menu-submenu accordion-content">
                     <li><a class="head" href="#">Submenu1</a></li>
                     <li><a class="head" href="#">Submenu2</a></li>
                     <li><a class="head" href="#">Submenu3</a></li>
                     <li><a class="head" href="#">Submenu4</a></li>
                     </ul> -->
                        <!-- menu-submenu accordon-content-->
                    </ul>
                    <!-- menu-list accordion-->
                </div>
                <!-- menu-container -->
            </div>
            <div class="col-lg-1 col-1"></div>
            <div class="col-lg-3 ">
                <div class="searchbar">
                    <div class="input-group mb-3 ">
                        <input class="form-control mt-3" id="searchInput" type="search" placeholder="Search" aria-label="Search" id="searchInput">
                        <div class="input-group-prepend">
                            <span class="input-group-text mt-3" onclick="handleSearch()"><i class="fa-brands fa-searchengin fa-xl" style="color: #c6cfd8;"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-1"></div>
            <div class="col-lg-1">
                <div class="notification-icon">
                    <i class="fa-solid fa-bell fa-xl" style="color: rgb(0, 0, 0);"></i>
                    <span class="notification-badge"></span>
                </div>
            </div>
            <div class="col-lg-1">
                <div class="profile-head">
                    <img src="media/3.jpg" alt="Profile Image" class="profile-image">
                </div>
            </div>
        </div>
    </div>
</header>
<div class="siderbar-section">
    <div class="container-xxl" id="#myDIV">
        <div class="row-side-bar m-2">
            <div class="side-head">
                <a href="#" class=" side-btn"><i class="fa-solid fa-tachometer-alt"></i> Dashboard</a>
            </div>
            <div class="dropdown mt-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-user"></i>
                    User
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="outletslogin.php" data-bs-toggle="modal" data-bs-target="#myModal">outlets users</a></li>
                    <li><a class="dropdown-item" href="managementlogin.php" data-bs-toggle="modal" data-bs-target="#myModal2">management users</a></li>
                </ul>
            </div>
            <div class="side-head mt-3">
                <a href="#" class="side-btn"><i class="fa-solid fa-tachometer-alt"></i> invoices</a>
            </div>
            <div class="side-head d-flex justify-content-start  mt-3">
                <a type="button" class="btn side-btn" data-bs-toggle="modal" style="padding-right: 9.2em;" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="fa-solid fa-user"></i>password reset<div class="dot" id="redDot"></div></a>
            </div>
            <div class="side-head mt-3">
                <a href="#" class="side-btn"><i class="fas fa-file-alt"></i> GST Returns </a>
            </div>
            <div class="side-head mt-3">
                <a href="#" class="side-btn"><i class="fas fa-users"></i>customer management </a>
            </div>
            <div class="side-head mt-3">
                <a href="#" class="side-btn"><i class="fas fa-cogs"></i>service management </a>
            </div>
            <div class="side-head mt-3">
                <a href="#" class="side-btn"><i class="fas fa-calculator"></i>tax calculation </a>
            </div>
            <div class="side-head mt-3">
                <a href="#" class="side-btn"><i class="fas fa-chart-bar"></i>Reports </a>
            </div>
            <div class="side-head mt-3">
                <a href="#" class="side-btn"><i class="fas fa-bell"></i>notifications</a>
            </div>
            <div class="side-head mt-3">
                <a href="#" class="side-btn"><i class="fa-solid fa-gear"></i>Settings</a>
            </div>
            <div class="side-head mt-3">
                <a href="#" class="side-btn"><i class="fa-solid fa-right-from-bracket"></i>help</a>
            </div>
            <div class="side-head mt-3">
                <a href="#" class="side-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="fa-solid fa-right-from-bracket"></i>LOGOUT</a>
            </div>
            
            <!-- <div class="">
            <a href=""> 
              <div class="side-option-1">
               <li class='sub-menu' ><i class="" style="color: #470700;font-size: 2em;"></i><a class="settings-text" href='#settings'><div class='fa fa-caret-right' onclick="myFunction(this)"  style="padding-left: 10px;"></div>Settings</a>
                  <ul>
                      <li><a href='registerpanel.php' onclick="alert('link clicked')">Account</a></li>
                      <li><a href='#settings'>Profile</a></li>
                      <li><a href='#settings'>Password</a></li>
                      <li><a href='#settings'>Notification</a></li>
                  </ul>
               </li>
              </div>
            </a>
            </div> -->
            <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                <div class="offcanvas-header" id="log-cont">
                    <h5 class="offcanvas-title" id="offcanvasScrollingLabel" style="margin-top: 5em;"> <br>CONFIRMATION!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <p class="confirm-para">Do you wish to log out of the OpenID provider?</p>
                    <div class="btn logout mt-2">yes! logout</div>
                    <button class="btn close-btn mt-2" data-bs-dismiss="offcanvas">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title-2 fs-5" id="exampleModalLabel">Access Credentials Update</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-lg ">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <form class="d-flex justify-content-around">
                                    <div class="col-2">
                                        <label for="recipient-name" class="col-form-label">Email</label>
                                        <div class="box-2">suryarobo45@gmail.com</div>
                                    </div>
                                    <div class="col-2 ms-5">
                                        <label for="recipient-name" class="col-form-label">Name</label>
                                        <div class="box-2">surya</div>
                                    </div>
                                    <div class="col-2 ms-5">
                                        <label for="recipient-name" class="col-form-label">department</label>
                                        <div class="box-2">Robotics</div>
                                    </div>
                                    <div class="col-2 "> <button type="button" class="btn btn-success btn-secondary accept-btn">Accepted</button></div>
                                    <div class="col-2">
                                        <button type="button" class="btn btn-danger btn-primary reject-btn">Rejected</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <form class="d-flex justify-content-around">
                            <div class="col-2 ">
                                <label for="recipient-name" class="col-form-label">Email</label>
                                <div class="box-2"></div>
                            </div>
                            <div class="col-2 ms-5">
                                <label for="recipient-name" class="col-form-label">Name</label>
                                <div class="box-2"></div>
                            </div>
                            <div class="col-2 ms-5">
                                <label for="recipient-name" class="col-form-label">department</label>
                                <div class="box-2"></div>
                            </div>
                            <div class="col-2"> <button type="button" class="btn btn-success btn-secondary accept-btn">Accepted</button></div>
                            <div class="col-2">
                                <button type="button" class="btn btn-danger btn-primary reject-btn">Rejected</button>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <form class="d-flex justify-content-around">
                            <div class="col-2 ">
                                <label for="recipient-name" class="col-form-label">Email</label>
                                <div class="box-2"></div>
                            </div>
                            <div class="col-2 ms-5">
                                <label for="recipient-name" class="col-form-label">Name</label>
                                <div class="box-2"></div>
                            </div>
                            <div class="col-2 ms-5">
                                <label for="recipient-name" class="col-form-label">department</label>
                                <div class="box-2"></div>
                            </div>
                            <div class="col-2"> <button type="button" class="btn btn-success btn-secondary accept-btn">Accepted</button></div>
                            <div class="col-2">
                                <button type="button" class="btn btn-danger btn-primary reject-btn">Rejected</button>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <form class="d-flex justify-content-around">
                            <div class="col-2 ">
                                <label for="recipient-name" class="col-form-label">Email</label>
                                <div class="box-2"></div>
                            </div>
                            <div class="col-2 ms-5">
                                <label for="recipient-name" class="col-form-label">Name</label>
                                <div class="box-2"></div>
                            </div>
                            <div class="col-2 ms-5">
                                <label for="recipient-name" class="col-form-label">department</label>
                                <div class="box-2"></div>
                            </div>
                            <div class="col-2"> <button type="button" class="btn btn-success btn-secondary accept-btn">Accepted</button></div>
                            <div class="col-2">
                                <button type="button" class="btn btn-danger btn-primary reject-btn">Rejected</button>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <form class="d-flex justify-content-around">
                            <div class="col-2 ">
                                <label for="recipient-name" class="col-form-label">Email</label>
                                <div class="box-2"></div>
                            </div>
                            <div class="col-2 ms-5">
                                <label for="recipient-name" class="col-form-label">Name</label>
                                <div class="box-2"></div>
                            </div>
                            <div class="col-2 ms-5">
                                <label for="recipient-name" class="col-form-label">department</label>
                                <div class="box-2"></div>
                            </div>
                            <div class="col-2"> <button type="button" class="btn btn-success btn-secondary accept-btn">Accepted</button></div>
                            <div class="col-2">
                                <button type="button" class="btn btn-danger btn-primary reject-btn">Rejected</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h3 class="modal-title">Access Request Register</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
               <form action="">
               <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-user-pen fa-xl" style="color: #ffffff;"></i></span>
                                <input id="Input-Focus" class="form-control" type="text" placeholder="Name" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="mb-2">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-envelope fa-xl" style="color: #ffffff;"></i></span>
                                <input id="Input-Focus" type="email" name="email" placeholder="Email" class="form-control" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <div class="row">
                    <div class="col-md-11 col-11">
                        <div class="select-section">
                            <div class="input-group">
                                <span class="input-group-text" style="margin-left: 5.5em;"><i class="fa-solid fa-hand-point-right fa-xl" style="color: #ffffff;"></i></span>
                                <select size="1">
                                    <option class="first-select" value=""><i class="fa-regular fa-hand-point-right"></i>Select admin control access</option>
                                    <option value="1">Management Administrator</option>
                                    <option value="2">Accountant Administrator</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="mb-3 mt-5">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-regular fa-user fa-xl" style="color: #ffffff;"></i></span>
                                <input id="Input-Focus" class="input form-control" type="text" name="username" placeholder="Username" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-eye fa-xl" style="color: #ffffff;"></i></span>
                                <input id="Input-Focus" type="password" placeholder="Password" class="form-control" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <button class="btn signup-btn"  value="Submit" type="submit">Sign Up</button>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
               </form>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="myModal2">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h3 class="modal-title">Access Request Register</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-user-pen fa-xl" style="color: #ffffff;"></i></span>
                                <input id="Input-Focus" class="first-input form-control" type="text" placeholder="Name" pattern="[A-Za-z\s]+" title="Please enter a valid name (letters and spaces only)" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="mb-2">
                            <form action=""id="emailForm">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-envelope fa-xl" style="color: #ffffff;"></i></span>
                                <input id="Input-Focus" type="email" name="email" placeholder="Email" title=" please enter the valid email"pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$"  class="form-control" required />
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="mb-3 mt-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-regular fa-user fa-xl" style="color: #ffffff;"></i></span>
                                <input id="Input-Focus" class="input form-control" type="text" name="username" placeholder="Username" title="please Enter The Name" pattern="[A-Za-z\s]+"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-class="custom-tooltip"  required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-eye fa-xl" style="color: #ffffff;"></i></span>
                                <input id="Input-Focus" type="password" placeholder="Password" class="form-control" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <button type="submit" class="btn signup-btn">Sign Up</button>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>
