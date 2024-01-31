<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registerlogin</title>
    <?php include 'head.php'; ?>
</head>
<body>
    <?php include 'header.php'; ?>
</body>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    ::-webkit-scrollbar {
        width: 3px;
        height: 5px;
        border-radius: 10px;
    }

   
    ::-webkit-scrollbar-thumb {
        background-color: #fffdfd;
        -webkit-border-radius: 10px;
        background-color: #470700;
    }
    #main-content {
    float: right;
    width: 82%;
}

.employee-container {
    padding: 10px;
    text-transform: capitalize;
}

h1.employee-head {
    margin-bottom: 20px;
    margin-left:8em;
    font-family:fantacy;
}
.text-dark td{
    padding-top:20px !important;
}
.text-dark th {
    padding: 10px;
    background-color: #470700 !important;
    color:white !important;
}

.text-body th{
    padding-top:40px !important;
}

.text-body td  {
    padding-top: 40px !important;
}

span.green {
    font-size: 14px;
    background-color: rgb(48, 204, 17);
    padding: 5px;
    border-radius: 5px;
    color: white;
}

span.danger {
    font-size: 14px;
    background-color: rgb(230, 38, 38);
    padding: 5px 10px;
    border-radius: 5px;
    color: white;
}

.pagination-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}
    .modal-title {
        padding-top: 1em;
        padding-left: 32%;
        text-transform: capitalize;
        color: #690c0c;
        font-family: fantasy;
        letter-spacing: 0.1px;
    }
  
    .modal-body {
        background-image: radial-gradient(circle farthest-corner at 10% 20%, rgba(234, 249, 249, 0.67) 0.1%, rgba(239, 249, 251, 0.63) 90.1%);
    }
    label span {
        display: inline-block;
        font-size: 1rem;
        /* position: relative; */
        bottom: -1.2rem;
        transition: transform 200ms ease-in-out;
    }
    label {
        padding-left: 30px;
    }
    
    input {
        /* position:relative; */
        margin-bottom: 2rem;
        padding: 0.5rem 0;
        background-color: transparent;
        outline: none;
        border: unset;
        border-bottom: 1.5px solid rgb(48, 1, 1);
        /* font-size: 1.25rem; */
        letter-spacing: 1.5px;
        color: rgb(73, 9, 9);
        /* z-index: 1; */
    }
    .input-group-text {
        background-color: #470700 !important;
        color: #ffffff !important;
        height: 44px;
    }
    #Input-Focus {
        background-color: rgb(199, 190, 190) !important;
        width: 300px;
        height: 43px;
        border-top-right-radius: 20px;
    }
    #Input-Focus::placeholder {
        color: #000000;
    }
    .btn-add{
        background-color:#470700!important;
        margin-top:5em;
        color:white !important;
    }

    #Input-Focus:focus,
    #Input-Focus:valid {
        border: 1px solid rgb(44, 0, 0);
        color: #000000;
        font-weight: 500;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3), 0 0 10px rgba(0, 0, 0, 0.3), 0 0 10px rgba(0, 0, 0, 0.3) !important;
    }

    .signup-btn {
        background-color: #470700;
        color: white;
        padding: 10px 50px;
    }
    .signup-btn:hover {
        background-color: #470700;
        color: white;
        padding: 10px 50px;
    }
    .select-section {
        display: flex;
        align-items: center;
        margin-left: -1.5em;
    }

    .select-section select {
        flex: 2;
        box-sizing: border-box;
    }

    select {
        width: 400px;
        max-width: 100%;
        overflow-y: auto;
        cursor: pointer;
        padding: 5px 25px;
        appearance: none;
        -moz-appearance: none;
        border: none;
        outline: 0.001px solid rgb(134, 115, 115);
        border-radius: 20px;
        color: #020202;
        font-size: 17px;
    }
    select option {
        padding: 10px 20px;
        margin-bottom: 8px;
        margin-top: 8px;
        border-radius: 12px;
        background-color: rgb(238, 238, 238);
        cursor: pointer;
    }
    select option:hover {
        background-color: rgb(177, 165, 165);
    }
    select option:checked {
        box-shadow: 0 0 10px 100px #640000 inset;
    }
    select::-webkit-scrollbar-track {
        background-color: #f5f5f5;
        border-radius: 12px;
    }

    select::-webkit-scrollbar {
        width: 8px;
        background-color: #f5f5f5;
    }

    select.fadeIn {
        animation: fadeInDown 0.2s;
    }
    select.fadeOut {
        animation: fadeInUp 0.2s;
    }
</style>
<div class="container-xxl" id="main-content">
    <!-- <div class="row mt-5">
        <div class="col-lg-9"></div>
        <div class="col-lg-3"><button type="button" class="btn btn-add" data-bs-toggle="modal" data-bs-target="#myModal">Add User</button></div>
    </div> -->
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="employee-container">
                        <h1 class="employee-head">Employee List</h1>
                        <table class="table">
                            <thead class="text-dark">
                                <tr>
                                    <th>#</th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>user name</th>
                                    <th>status</th>
                                </tr>
                            </thead>
                            <tbody class="text-body">
                                <tr>
                                    <th>1</th>
                                    <td>surya</td>
                                    <td>123@gmail.com</td>
                                    <td>suryarobo</td>
                                    <td><span class="green">approved</span><i class="fa-solid fa-check-double" style="color: #20b839;padding-left: 10px;"></i></td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>mohanraja</td>
                                    <td>abc@gmail.com</td>
                                    <td>abx</td>
                                    <td><span class="danger">pending</span><i class="fa-solid fa-clock" style="color: #ec4a2d;padding-left: 10px;"></i></td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>boopathiraja</td>
                                    <td>abc@gmail.com</td>
                                    <td>directer</td>
                                    <td><span class="green">approved</span><i class="fa-solid fa-check-double" style="color: #20b839;padding-left: 10px;"></i></td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td>kirubha</td>
                                    <td>abc@gmail.com</td>
                                    <td>abc</td>
                                    <td><span class="danger">pending</span><i class="fa-solid fa-clock" style="color: #ec4a2d;padding-left: 10px;"></i></td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td>joes</td>
                                    <td>abc@gmail.com</td>
                                    <td>abc</td>
                                    <td><span class="green">approved</span><i class="fa-solid fa-check-double" style="color: #20b839;padding-left: 10px;"></i></td>
                                </tr>
                                <tr>
                                    <th>6</th>
                                    <td>vignesh</td>
                                    <td>abc@gmail.com</td>
                                    <td>abc</td>
                                    <td><span class="green">approved</span><i class="fa-solid fa-check-double" style="color: #20b839;padding-left: 10px;"></i></td>
                                </tr>
                                <tr>
                                    <th>7</th>
                                    <td>boopathiraja</td>
                                    <td>abc@gmail.com</td>
                                    <td>directer</td>
                                    <td><span class="green">approved</span><i class="fa-solid fa-check-double" style="color: #20b839;padding-left: 10px;"></i></td>
                                </tr>
                                <tr>
                                    <th>8</th>
                                    <td>kirubha</td>
                                    <td>abc@gmail.com</td>
                                    <td>kirubha_123</td>
                                    <td><span class="danger">pending</span><i class="fa-solid fa-clock" style="color: #ec4a2d;padding-left: 10px;"></i></td>
                                </tr>
                                <tr>
                                    <th>9</th>
                                    <td>joes</td>
                                    <td>abc@gmail.com</td>
                                    <td>joes123</td>
                                    <td><span class="green">approved</span><i class="fa-solid fa-check-double" style="color: #20b839;padding-left: 10px;"></i></td>
                                </tr>
                                <tr>
                                    <th>10</th>
                                    <td>vignesh</td>
                                    <td>abc@gmail.com</td>
                                    <td>vicky</td>
                                    <td><span class="green">approved</span><i class="fa-solid fa-check-double" style="color: #20b839;padding-left: 10px;"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <!-- Pagination -->
            <div class="pagination-container">
                <ul class="pagination" id="pagination">
                    <li class="page-item"><a class="page-link" href="#" onclick="showRows(0, 3)">1</a></li>
                    <li class="page-item"><a class="page-link" href="#" onclick="showRows(3, 6)">2</a></li>
                    <li class="page-item"><a class="page-link" href="#" onclick="showRows(6, 10)">3</a></li>
                </ul>
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
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-user-pen fa-xl" style="color: #ffffff;"></i></span>
                                <input id="Input-Focus" class="first-input form-control" type="text" placeholder="Name" required />
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
                            <button class="btn signup-btn">Sign Up</button>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // selct option script
    let select = document.querySelector("select");

    select.addEventListener("focus", () => {
        select.size = 5;
        select.classList.add("fadeIn");
        select.classList.remove("fadeOut");
        select.style.backgroundColor = "#FFF";
    });

    select.addEventListener("blur", () => {
        select.size = 1;
        select.classList.add("fadeOut");
        select.classList.remove("fadeIn");
        select.style.backgroundColor = "#FFF";
    });

    select.addEventListener("change", () => {
        select.size = 1;
        select.blur();
        select.style.backgroundColor = "#FFF";
    });

    select.addEventListener("mouseover", () => {
        if (select.size == 1) {
            select.style.backgroundColor = "rgb(247, 247, 247)";
        }
    });
    select.addEventListener("mouseout", () => {
        if (select.size == 1) {
            select.style.backgroundColor = "#FFF";
        }
    });

    // table script

    $(document).ready(function () {
   showRows(0, 3);
 });
function showRows(startIndex, endIndex) {
    $('.text-body tr').hide();
    $('.text-body tr').slice(startIndex, endIndex).show();
}
</script>
</html>