
      <script src="js/jquery.min.js"></script>
      <script src="js/jquery-migrate-3.0.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.easing.1.3.js"></script>
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/jquery.stellar.min.js"></script>
      <script src="js/jquery.animateNumber.min.js"></script>
      <script src="js/bootstrap-datepicker.js"></script>
      <script src="js/jquery.timepicker.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/scrollax.min.js"></script>
      <script src='js/iziToast.min.js'></script>
      <script src="js/main.js"></script>
<script>        
        function onSubmit(token) {
          document.getElementById("demo-form").submit();
        }
        function onClick(e) {
          e.preventDefault();
          grecaptcha.ready(function() {
            grecaptcha.execute('6LfciCUjAAAAAOgp6mqTQQLC5zuuVujIp6351gYH', {action: 'submit'}).then(function(token) {
                // Add your logic to submit to your backend server here.
            });
          });
        }
    </script>