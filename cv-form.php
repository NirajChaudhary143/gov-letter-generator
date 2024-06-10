<?php require "includes/header.php" ?>
<?php
if (!isset($_SESSION['role'])) {
    header("location: login.php");
}
?>
<div class="container p-3">
    <div class="row">
        <div class="col-4">
            <form action="generate-pdf.php" method="POST">
                <div class="form-group">
                    <label for="name-field">Name</label>
                    <input type="text" class="form-control" name="name-field" id="name-field" aria-describedby="emailHelp" placeholder="Enter name.">
                </div>
                <div class="form-group">
                    <label for="designation">Designation</label>
                    <input type="text" name="designation" class="form-control" id="designation" placeholder="Senior PHP Developer">
                </div>
                <div class="form-group">
                    <label for="email-field">Email Address</label>
                    <input type="text" name="email-field" class="form-control" id="email-field" placeholder="johndoe@gmail.com">
                </div>
                <div class="form-group">
                    <label for="phone-field">Phone Number</label>
                    <input type="text" name="phone-field" class="form-control" id="phone-field" placeholder="johndoe@gmail.com">
                </div>
                <div class="form-group">
                    <label for="address-field">Address</label>
                    <input type="text" name="address-field" class="form-control" id="address-field" placeholder="dhapakhel">
                </div>
                <div class="form-group">
                    <h5>Education</h5>
                    <div class="row">
                        <div class="col-6">
                            <label for="">School</label>
                            <input type="text" name="school-field" class="form-control" id="school-field" placeholder="nast college">
                        </div>
                        <div class="col-6">
                            <label for="">Faculty</label>
                            <input type="text" name="faculty-field" class="form-control" id="faculty-field" placeholder="management">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">Start Date
                            <div><input name="start-date-field" id="start-date-field" type="date" class="form-control"></div>
                        </div>
                        <div class="col-6">End Date
                            <div><input name="end-date-field" id="end-date-field" type="date" class="form-control"></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <h5>Experience</h5>
                    <label for="">Job Title</label>
                    <input type="text" name="job-title-field" class="form-control" id="job-title-field" placeholder="management">
                    <div class="row">
                        <div class="col-6">Start Date
                            <div><input name="start-date-duration-field" id="start-date-duration-field" type="date" class="form-control"></div>
                        </div>
                        <div class="col-6">End Date
                            <div><input name="end-date-duration-field" id="end-date-duration-field" type="date" class="form-control"></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="skills-field">Skills</label>
                    <input type="text" name="skills-field" class="form-control" id="skills-field" placeholder="html, css, ...">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <!-- CV -->
        <div class="col-8">
            <div class="container mt-5">
                <div class="text-center">
                    <h1 id="name_text"></h1>
                    <p id="designation_text"></p>
                </div>

                <section class="mb-4">
                    <h2>Contact Information</h2>
                    <ul>
                        <li><strong>Email: </strong> <span id="email-text"></span></li>
                        <li><strong>Phone Number: </strong> <span id="phone-text"></span></li>
                        <li><strong>Address: </strong> <span id="address-text"></span></li>
                    </ul>
                </section>

                <section class="mb-4">
                    <h2>Education</h2>
                    <p>School: <span id="school-text"></span></p>
                    <p>Faculty: <span id="faculty-text"></span></p>
                    <div class="row">
                        <div class="col-6">
                            <p>Start Date: <span id="start-date-text"></span></p>
                        </div>
                        <div class="col-6">
                            <p>End Date: <span id="end-date-text"></span></p>
                        </div>
                    </div>
                </section>

                <section class="mb-4">
                    <h2>Experience</h2>
                    <h4 id="job-title-text"></h4>
                    <div class="row">
                        <div class="col-6">
                            <p>Start Date: <span id="start-date-duration-text"></span></p>
                        </div>
                        <div class="col-6">
                            <p>End Date: <span id="end-date-duration-text"></span></p>
                        </div>
                    </div>
                </section>

                <section class="mb-4">
                    <h2>Skills</h2>
                    <p id="skills-text"></p>
                </section>

            </div>
        </div>
    </div>

</div>
<?php require("includes/footer.php") ?>