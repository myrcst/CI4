
<?= $this->extend('layouts/header.php') ?>
<?= $this->section('content') ?>

   <div class="container">     
   <!-- <div class="bg-body-tertiary mt-5 text-center py-2">
      <span class="text-dark text-uppercase text-cus fw-bold fs-1 fst-italic"></span>
      <img src="img/ma..png" style="width:150px; height:160px;">
   </div> -->
   <div class="background-image text-center text-light row justify-content-center align-items-center">
      <div class="card" style="width: 40rem;">
         <div class="card-body">
           <h5 class="card-title"> Gallery </h5> <br>
           <p class="card-text">This gallery is a compilation of pets and nature. It's a way to capture and remember all the good times.</p>
         </div>
       </div>
   </div>
      <div class="grid">
         <a href="img/img8.jpg"> 
         <img src="img/img8.jpg"></a> 
         <a href="img/img13.jpeg"> 
         <img src="img/img13.jpeg"></a> 
         <a href="img/img3.jpg"> 
         <img src="img/img3.jpg"></a>  
         <a href="img/img4.jpg"> 
         <img src="img/img4.jpg"></a> 
         <a href="img/img5.jpg">  
         <img src="img/img5.jpg"></a>
         <a href="img/img12.jpg">
         <img src="img/img12.jpg"></a>
         <a href="img/img7.jpeg"> 
         <img src="img/img7.jpeg"></a>  
         <a href="img/img10.jpg"> 
         <img src="img/img10.jpg"></a> 
         <a href="img/img11.jpg">  
         <img src="img/img11.jpg"></a>
         <a href="img/img6.jpg">
         <img src="img/img6.jpg"></a>                    
         </div>
      <div class="bg-custom text-dark mb-5">
         <div class="row py-5" style="height:400px">            
            <div class="col text-center mx-5">
               <div class="fs-6 fst-italic fw-bold mb-3">M.A.</div>
               <p>Pictures are a valuable source of remembrance. They can help us remember past events, people, and moments. They are especially helpful when we want to revisit a particular day or moment in our lives. Each picture is like a precious memory capsule, filled with memories of the day it was taken, the people who were in the picture, and the events that took place on that day.</p>
               <p>Pictures are worth a thousand words, not just because they can tell a story, but also because they can capture memories that we might have otherwise forgotten. Pictures are worth a thousand memories because they can take us back to a time when we were happy, or when something important happened.</p>
            </div>
            <div class="col text-center ">
               <img src="./img/img2.jpg" height="300">
            </div>
         </div>
      </div>
   </div>


   <?= $this->endSection() ?>