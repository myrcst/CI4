
<?= $this->extend('layouts/include_folder/contact.php') ?>
<?= $this->section('content') ?>


<!-- <link rel="stylesheet" href=" styles/css.css"> -->
<div class="container">     
    <div class="bg-body-tertiary mt-5 text-center py-2">
       <span class="text-dark text-uppercase text-cus fw-bold fs-1 fst-italic"></span>
       <img src="../img/ma..png" style="width:150px; height:160px;">
    </div>
   </div>
    <div class="container display-flex align-items-center justify-content-center position-relative py-5">
    <div class="form bg-custom">
      <div class="contact-info">
        <h2 class="title fw-bold">Let's get in touch</h2>       
            <p class="fw-bold mt-3">Phone:</p>
            <p>+639565286096</p>
            <p class="fw-bold">Email:</p>
            <p>macosta@usa.edu.ph</p>
            <p class="fw-bold">Address:</p>
            <p>Brgy. Buray, Oton, Iloilo</p>
        <div class="social-media">
          <p class="fst-italic fw-bold">Connect with me :</p>
          <div class="social-icons">
            <a href="https://web.facebook.com/Mhymyyy/">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com/mctvcst/">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
        </div>
      </div>
   
      <div class="contact-form">
        <form action="<?= base_url('ContactMe/insert');?>" method="POST">
          <h3 class="title fw-bold text-light text-center">Contact me</h3>
          <label for="" class= 'text-light'>Username</label>
          <div class="input-container">
            <input type="text" id="username" name="username" class="input" placeholder="Enter Name">
  
            <!-- <span>Username</span> -->
          </div>
          <label for="" class= 'text-light'>Email</label>
          <div class="input-container">
            <input type="email" id="email" name="email" class="input" placeholder="Enter Email">
            
            <!-- <span>Email</span> -->
          </div>
          <label for="" class= 'text-light'>Phone</label>
          <div class="input-container">
            <input type="number" id="phone" name="phone" class="input" placeholder="Enter Phone">
            
            <!-- <span>Phone</span> -->
          </div>
          <label for="" class= "text-light">Message</label>
          <div class="input-container textarea">
            <textarea name="messages" id="messages" class="input" placeholder="Enter Message"></textarea>
            
            <!-- <span>Message</span> -->
          </div>
          
          <div class="text-center">
          <button type="submit" name="submit" class="btn btn-primary fw-bold"  data-bs-toggle="modal" data-bs-target="#feedback">
           Send
         </button>
      </div>
        </form>
      </div>
    </div>
  </div>
<?= $this->endSection() ?>