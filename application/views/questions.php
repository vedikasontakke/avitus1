<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V16</title> 
	<meta charset="UTF-8">       
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/vendor/animate/animate.css');?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/vendor/css-hamburgers/hamburgers.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/vendor/animsition/css/animsition.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/select2/select2.min.css');?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/daterangepicker/daterangepicker.css');?>">
<!--===============================================================================================-->

<!--===============================================================================================-->
</head>
<body>
<!-- Section: Design Block -->
<section class="text-center text-lg-start">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

   /* @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }*/
  </style>

  <!-- Jumbotron -->
  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-1 ">
            <h2 class="fw-bold mb-2">Hey admin</h2>
            <h4 class="fw-bold mb-4">Add a Question</h4>
            <form>
             

              <!-- Quextion input -->
              <div class="form-outline mb-4">
              <label for="exampleFormControlTextarea1">Question</label>
              <textarea class="form-control" id="que_id" rows="2" required></textarea>
              <div class="invalid-feedback">Question field cannot be blank!</div>

              </div>

 <!-- 2 column grid layout with text inputs for the first and last names -->
 <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <label class="form-label" for="form3Example1">Which type of Question type ?</label>
                  </div>
                </div>
                <div class="col-md-3 mb-4">
                  <div class="form-outline">
              <div class="col-md-2">
                                <select class="form-select mt-1" required>
                                      <option selected disabled value="">Question Type</option>
                                      <option value="jweb">Check box</option>
                                      <option value="sweb">breif answer</option>
                                      <option value="pmanager">Multiple Choice</option>
                               </select>
                                <div class="invalid-feedback">Please select a position!</div>
                           </div>              </div>
                  
                </div>
              </div>

              <!-- additional input -->
              <div class="form-outline mb-4">
                <label for="exampleFormControlTextarea1">additional(optional)</label>
                <textarea class="form-control" id="additional_id" rows="2"></textarea>
              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">
                Done
              </button>

             
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-10 mb-lg-0">
        <img src="https://m.media-amazon.com/images/I/81qoHgFnn7L._SL1500_.jpg" class="w-100 rounded-4 shadow-4"
          alt="" />
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>

</body>
</html>