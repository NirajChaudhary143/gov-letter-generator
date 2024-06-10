<?php require "includes/header.php" ?>
<?php
if (!isset($_SESSION['role'])) {
    header("location: login.php");
    exit;
}
?>
<div class="container p-3">
    <div class="row">
        <div class="col-4">
            <form action="generate-pdf1.php" method="POST">
                <div class="form-group">
                    <label for="name-field">मिति: </label>
                    <input type="date" class="form-control nepali-font" name="date-field" id="date-field" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="name-field">पद: </label>
                    <input type="text" class="form-control nepali-font" name="person-field" id="person-field" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="name-field">कार्यालय: </label>
                    <input type="text" class="form-control nepali-font" name="office-field" id="office-field" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="name-field">ठेगाना: </label>
                    <input type="text" class="form-control nepali-font" name="address-field" id="address-field" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="name-field">जिल्ला: </label>
                    <input type="text" class="form-control nepali-font" name="district-field" id="district-field" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="name-field">नगरपालिका: </label>
                    <input type="text" class="form-control nepali-font" name="mun-field" id="mun-field" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="name-field">वडा.न: </label>
                    <input type="text" class="form-control nepali-font" name="ward-field" id="ward-field" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="name-field">नक्सा.न: </label>
                    <input type="text" class="form-control nepali-font" name="map-field" id="map-field" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="name-field">कि.न: </label>
                    <input type="text" class="form-control nepali-font" name="kitta-field" id="kitta-field" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="name-field">नाम: </label>
                    <input type="text" class="form-control nepali-font" name="name-field" id="name-field" aria-describedby="emailHelp"> <br>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <!-- bidhut	 -->
        <div class="col-8">
            <div class="container-fluid mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="bg-white p-4 rounded shadow-sm">
                            <div class="border-bottom pb-2 mb-3">
                                <div class="row">
                                    <div class="col text-end">
                                        <p>मिति: <span id="date-text"></span></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div>
                                        <p>श्रीमान <span id="person-text"></span>ज्यू <br>
                                            <span id="office-text"></span> कार्यालय <br>
                                            <span id="address-text"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="text-center">
                                    <strong>विषय: विधुत मिटर जडानको लागी सिफारिस गरि पाउँ।</strong>
                                </div>
                                <div class="mt-3">
                                    <p>महोदय</p>
                                    <p>सेवामा निवेदन यो छ कि मेरो नाम दर्ता रहेका <span id="district-text"></span> जिल्ला
                                        <span id="mun-text"></span> गा.वि। स /न.पा. वडा.न <span id="ward-text"></span> मा पर्ने नक्सा
                                        न. <span id="map-text"></span> कि.न. <span id="kitta-text"></span> को जग्गामा निर्मित रहेको घरमा
                                        विधुत मिटर जडान गर्न आवश्यक भएकाले शो को लागि सम्बन्धित विधुत प्राधिकरणलाई सिफारिस गरि पाउन<br>
                                        श्रीमान् समक्ष अनुरोध गर्दछु ।
                                    <p>
                                </div>
                                <div class="mt-3">
                                    <p>श्रीमानको जो आदेश । </p>
                                </div>
                            </div>
                            <div class="text-end">
                                <p><u>निवेदक</u></p>
                                <p><u id="name-text"></u></p>
                                <p><u>हस्ताक्षर</u></p>
                            </div>
                            <div class="mt-3">
                                <p><u>संलग्न प्रमाणहरु :</u><br>
                                    नागरिकताको प्रमाण पत्रको प्रतिलिपि -१<br>
                                    जग्गा धनि दर्ता प्रमाण पत्र प्रतिलिपि -१ </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "includes/footer.php" ?>