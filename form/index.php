<div>
    <!-- Your form code here -->
    <form action="./form_check.php" method="post" id="myForm">
        <input type="text" placeholder="Your Name" name="username">
        <input type="number" placeholder="Your Mobile" name="usermobile">
        <input type="email" placeholder="Your Email" name="useremail">
        <input type="hidden" name="pageurl" value="<?= $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
        <select name="Projects" id="Projects" value="Project">
            <option value="" disabled selected hidden>Project</option>
            <option value="Projects Aveum">Project Aveum</option>
            <option value="Projects Aria">Projects Aria </option>
        </select>
        <input type="message" placeholder="Your Message" name="usermessage">
        <div class="utility_flex-total-center">
            <input type="submit" name="submitbtn" class="submit-btn-form" value="submit">
        </div>
        <div class="form-status" id="form-status">

        </div>
    </form>
</div>

<script>
    $(document).ready(function() {
        $('#myForm').on('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting normally

            // Get the form data
            var formData = $(this).serialize();
            // console.log(formData);
            // Send the AJAX request
            $.ajax({
                url: './form_check.php',
                type: 'POST',
                data: formData,
                success: function(response) {
                    // Handle the successful response
                    let output = JSON.parse(response);
                    let form_status = document.getElementById("form-status");
                    if (output.status == 1) {
                        form_status.innerText = output.message;
                        form_status.style.color = "green";
                    } else {
                        form_status.innerText = output.message;
                        form_status.style.color = "red";
                    }
                    console.log(output.status);
                    // You can perform further actions here, such as displaying a success message
                },
                error: function(xhr, status, error) {
                    // Handle the error response
                    console.log(xhr.responseText);
                    // You can display an error message or take other actions as needed
                }
            });
        });
    });
</script>