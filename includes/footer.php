 <!-- Footer -->
 <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>About Us</h5>
                    <p>we are sajilo application giver for the all official and non official organization</p>
                </div>
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <p>Email: sajiloservice@gmail.com<br>Phone: 9814678481</p>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <p>Stay connected with us on social media:</p>
                    <a href="#" class="btn btn-outline-light me-2" role="button">Facebook</a>
                    <a href="#" class="btn btn-outline-light me-2" role="button">Twitter</a>
                    <a href="#" class="btn btn-outline-light" role="button">Instagram</a>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p>&copy; 2024 sajilo service. All rights reserved.</p>
            </div>
        </div>
    </footer>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $("#name-field, #designation,#email-field, #phone-field, #address-field, #school-field, #faculty-fiel, #job-title-field,#skills-field").keyup(function() {
            var name = $("#name-field").val()
            $("#name_text").text(name);
            var designation = $("#designation").val();
            $("#designation_text").text(designation)
            var email = $("#email-field").val();
            $("#email-text").text(email)
            var phone = $("#phone-field").val();
            $("#phone-text").text(phone)
            var address = $("#address-field").val();
            $("#address-text").text(address)
            var school = $("#school-field").val();
            $("#school-text").text(school)
            var faculty = $("#faculty-field").val();
            $("#faculty-text").text(faculty)
            var jobTitle = $("#job-title-field").val();
            $("#job-title-text").text(jobTitle)
            var skills = $("#skills-field").val();
            $("#skills-text").text(skills)
        })

        $("#start-date-field, #end-date-field, #start-date-duration-field,#end-date-duration-field").change(function() {
            var start = $("#start-date-field").val();
            $("#start-date-text").text(start)
            var end = $("#end-date-field").val();
            $("#end-date-text").text(end)
            var startDurationEnd = $("#start-date-duration-field").val();
            $("#start-date-duration-text").text(startDurationEnd)
            var endDateDuration = $("#end-date-duration-field").val();
            $("#end-date-duration-text").text(endDateDuration)
        })


        $("#date-field, #person-field, #office-field, #address-field, #district-field, #mun-field, #ward-field, #map-field, #kitta-field, #name-field, #sign-field").keyup(function() {
			var date = $("#date-field").val();
            $("#date-text").text(date);

			var person = $("#person-field").val()
            $("#person-text").text(person);

			var office = $("#office-field").val()
            $("#office-text").text(office);
			var address = $("#address-field").val()
            $("#address-text").text(address);
			var district = $("#district-field").val()
            $("#district-text").text(district);
			var mun = $("#mun-field").val()
            $("#mun-text").text(mun);
			var ward = $("#ward-field").val()
            $("#ward-text").text(ward);
			var map = $("#map-field").val()
            $("#map-text").text(map);
			var kitta = $("#kitta-field").val()
            $("#kitta-text").text(kitta);
			var name = $("#name-field").val()
            $("#name-text").text(name);
			var sign = $("#sign-field").val()
            $("#sign-text").text(sign);
    })


	$("#date-field").change(function() {
            var miti = $("#date-field").val();
            $("#date-text").text(start)

        })


		//input
		const inputFields = document.querySelectorAll('.nepali-font');

// Add input event listener to each input field
inputFields.forEach(inputField => {
	inputField.addEventListener('input', function() {
		// Convert the input text to Nepali font
		this.style.fontFamily = 'Karma, sans-serif';
	});
});
    })
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
