<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rathna Group Email Confirmation Page</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" defer></script>
  <script src="script.js" defer></script>
</head>
<body>
  <div class="row">
    <div class="col-lg-12">
      <div class="row">
        <div class="col-lg-6 col-6 vh-100 first">
          <div class="row">
            <div class="col-lg-12 d-flex justify-content-start mt-5 ms-2 ">
              <div class="first-half ms-2 ">
                <div class="text-img">
                  <img class="img-fluid" src="media/Rathna_Group_text.png" alt="">
                </div>
                <h1 class="gst-head ">GST Portal</h1>
                <h2 class="password-head">email confirmation process <i class="fa-solid fa-plane-departure"></i></h2>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12 w-50 p-5 mt-5 second">
          <div class="rathna-logo mt-5"><img src="media/Rathna_Group_Logo.png" alt=""></div>
          <form class="p-5 ">
            <div class="mb-3 position-relative">
              <div class="form-field username">
                <div class="icon">
                  <i class="far fa-user"></i>
                </div>
                <input type="text" placeholder="Username" />
              </div>
            </div>
            <div class="mb-3  position-relative">
              <div class="form-field password">
                <div class="icon">
                  <i class="fas fa-envelope"></i>
                </div>
                <input type="email" placeholder="Email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required title="Enter a valid email address" />
              </div>
              <a href=""><button class="login-btn" type="submit">
                  submit
                </button>
              </a>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>
</html>