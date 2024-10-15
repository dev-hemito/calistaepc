

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"
    integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew=="
    crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>

  <script src="js/theme.js"></script>
  <script src="js/theme-script.js"></script>

  <script>
        $(document).ready(function() {
            $('.co-form').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission

                var $submitBtn = $(this).find('button[type="submit"]'); // Find the submit button within the form
                $submitBtn.text('Submitting...').attr('disabled', true);

                // Simulate form submission with AJAX
                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('.co-form')[0].reset(); 
                        $submitBtn.text('Submitted').attr('disabled', false); 
                    },
                    error: function(xhr, status, error) {
                    },
                    complete: function() {
                        $submitBtn.text('Submit').attr('disabled', false); // Re-enable the button
                    }
                });
            });
        });
    </script>

    
<script>
  // scripts.js
$(document).ready(function() {
    // Get the modal
    var modal = $('#popup-form');

    // Get the button that opens the modal
    var btn = $('.btn-enquire');

    // Get the <span> element that closes the modal
    var span = $('.close');

    // When the user clicks the button, open the modal 
    btn.on('click', function() {
        modal.fadeIn();
    });

    // When the user clicks on <span> (x), close the modal
    span.on('click', function() {
        modal.fadeOut();
    });

    // When the user clicks anywhere outside of the modal, close it
    $(window).on('click', function(event) {
        if ($(event.target).is(modal)) {
            modal.fadeOut();
        }
    });
});

</script>

<script>
    $(document).ready(function() {
        $('.subscribe-from').on('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            var form = $(this);
            var actionUrl = form.attr('action');

            $.ajax({
                type: 'POST',
                url: actionUrl,
                data: form.serialize(), // Serialize form data
                success: function(response) {
                    form[0].reset(); // Clear the form fields
                },
                error: function(xhr, status, error) {
                }
            });
        });
    });
</script>
