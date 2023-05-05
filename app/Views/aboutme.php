
<?= $this->extend('layouts/header.php') ?>
<?= $this->section('content') ?>

   <div class="container">     
    <div class="bg-body-tertiary mt-5 text-center py-2">
       <span class="text-dark text-uppercase text-cus fw-bold fs-1 fst-italic"></span>
       <img src="../img/ma..png" style="width:150px; height:160px;">
    </div>
   </div>
   <div class="container">
    <div id="left_col">
    <div class="profile_frame">
        <img src="../img/pf.png" style="width:230px; height:250px;">
    </div>
    <div  class="text-center mt-3">
      <h4>Myra Acosta</h4>
      <p >Student<br>University of San Agustin</p>
    </div>
    <div class="contact_details_content mt-5">
      <h2>Contact details</h2>
      <p class="fw-bold">Phone:</p>
      <p>+639565286096</p>
      <p class="fw-bold">Email:</p>
      <p>macosta@usa.edu.ph</p>
      <p class="fw-bold">Address:</p>
      <p>Brgy. Buray, Oton, Iloilo</p>
    </div>
  </div>
  <div id="content_container">				  
    <div class="m-5">
      <h2>About Me</h2>
      <p> I am a highly inquisitive person who is always looking for new knowledge and experiences. 
        I enjoy learning about different subjects and exploring new possibilities. 
        Discovering new information is a source of joy for me, and I feel grateful for all the knowledge I've been able to acquire.
         </p>				
    </div>
    <div class="m-5">
      <h2>Interests & Hobbies</h2>
      <p>I enjoy exploring and indulging in a variety of hobbies, and I'm always looking for new ways to learn and experience new things.
         I especially enjoy learning new things, whether it's about something I'm already interested in, or something new altogether.</p>
      <ul>
        <p class="fw-bold">List of Interests and hobbies:</h3>
        <li>Drawing</li>
        <li>Painting</li>
        <li>Puzzles</li>
        <li>K-dramas</li>
        <li>Futsal</li>
        <li>Crafts</li>
        <li>Travelling</li>
      </ul>
    </div>
    </div>
  </div>
  <?= $this->endSection() ?>