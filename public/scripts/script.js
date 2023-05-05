const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});
/* const submit = document.querySelector('#submit');
const modalMessage = document.querySelector("#feedback .modal-body");

const email = document.querySelector('#email');
const username = document.querySelector('#username');
const messages = document.querySelector('#messages');

submit.addEventListener('click', () => {
   modalMessage.innerHTML = `<p>Thank you, ${username.value}, for sending a message!</p>`;
});
 */


$(document).ready(function() {
   $('.deletebtn').on('click', function() {
      $('#deletemodal').modal('show');
      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function() {
         return $(this).text();
      }).get();
      console.log(data);
      $('#delete').val(data[0]);

   });
});



$(document).ready(function() {
   $('.editbtn').on('click', function() {
      $('#editmodal').modal('show');
      $tr = $(this).closest('tr');
      var data = $tr.children("td").map(function() {
         return $(this).text();
      }).get();

      console.log(data);
      $('#username').val(data[0]);
      $('#email').val(data[1]);
      $('#phone').val(data[2]);
      $('#messages').val(data[3]);
   });
});                 



$(document).ready(function() {
   $('.viewbtn').on('click', function() {
      $('#viewmodal').modal('show');
      $tr = $(this).closest('tr');
      var data = $tr.children("td").map(function() {
         return $(this).text();
      }).get();

      console.log(data);
      $('#username').val(data[0]);
      $('#email').val(data[1]);
      $('#phone').val(data[2]);
      $('#messages').val(data[3]);
   });
});
