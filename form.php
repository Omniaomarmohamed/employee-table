<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="scripts/aos-master/dist/aos.css">
    </head>

<body class="text-capitalize" style="background-color: #101d3d;">
  <section class=" mb-5 py-5">
          <form class="w-50 m-auto" method="post" action="employee.php" role="form" class="contactForm py-5 container">
          <div data-aos="fade-down" class="py-3">
                <h1  style="color: #f1f1f1;">Employee <span style="color: #e8465a"> form:</h1>
        </div>
            <div class="form-row ">
              <div data-aos="fade-right" class=" form-group col-lg-12  col-md-12 col-sm-12">
                <label class="main font-weight-bold text-white"> Frist Name:</label>
                <input id="frist_name" type="name" name="frist_name" class="form-control rounded"  placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="text-danger d-none alert alert-danger" id="inputFNameAlert">
                  name is invalid , please enter you name
              </div>
              </div>
              </div>
              <div class="form-row ">
              <div data-aos="fade-left" class="form-group col-lg-12  col-md-12 col-sm-12">
                <label class="main font-weight-bold text-white"> Last Name:</label>
                <input id="last_name" type="name" name="last_name" class="form-control rounded"  placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="text-danger d-none alert alert-danger" id="inputLNameAlert">
                  name is invalid , please enter you name
              </div>
              </div>
              </div>
              <div class="form-row ">
            <div data-aos="fade-right" class="form-group col-lg-12 col-md-12 col-sm-12">
              <label class="main font-weight-bold text-white"> your number:</label>
              <input id="phoneNumInput" type="number" class="form-control rounded" name="phone" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="text-danger d-none alert alert-danger" id="inputNumAlert">
                phone number is invalid , please enter you number
            </div>
            </div>
            </div>

              <div class="form-row ">
              <div data-aos="fade-left" class="form-group col-lg-12 col-md-12 col-sm-12">
                <label class="main font-weight-bold text-white"> your e-mail:</label>
                <input id="emailInput" type="email"  class="form-control rounded" name="email" placeholder="" data-rule="email" data-msg="Please enter a valid email" />
                <div class="text-danger d-none alert alert-danger" id="inputEmailAlert">
                  e-mail is invalid , please enter you email
              </div>
              </div>
            </div>
            <div class="form-row ">
            <div data-aos="fade-right" class="form-group col-lg-12 col-md-12 col-sm-12">
              <label class="main font-weight-bold text-white"> Basic Salary:</label>
              <input id="basic_salary" type="number" class="form-control rounded" name="basic_salary" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="text-danger d-none alert alert-danger" id="basic_salaryAlert">
              Basic Salary is invalid , please enter you Basic Salary
            </div>
            </div>
            </div>
            <div data-aos="fade-up" class="text-center my-2"><button class="btn btn-danger" name="submit" type="submit">submit</button></div>
          </form>

        </div>
      </div>
  </section>
   
  
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="scripts/js/all.min.js"></script>
  <script src="scripts/aos-master/dist/aos.js"></script>
  <script src="scripts/js/main2.js"></script>
</body>

</html>