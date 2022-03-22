<form class="needs-validation" action="questions.php" method="post" id="survey-homepage" name="survey-homepage">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Name:</span>
        <input onchange="onValidate('name')" id="name" name="name" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Gender:</span>
        <input onchange="onValidate('gender')" id="gender" name="gender" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Email:</span>
        <input onchange="onValidate('email')" id="email" name="email" type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Age:</span>
        <input onchange="onValidate('age')" id="age" name="age" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">

    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Weight:</span>
        <input onchange="onValidate('weight')" id="weight" name="weight" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="card mt-5">
        <div class="card-body">
            <label for="range">Q1: How healthy are you physically?</label>
            <div class="slidecontainer">
                1<input onchange="onValidate('howHealthy')" type="range" min="1" max="5" class="form-range slider" id="howHealthy" name="howHealthy" value="0">5
            </div>
        </div>
    </div>
    <div class="col-12 text-end">
        <button id="submitQ1f" class="btn-custom primary mt-3 mb-5 disabled" type="submit" disabled>NEXT</button>
    </div>
</form>

<script>
    function onValidate(id) {
        var isValide = false;
        var submitButton = document.getElementById("submitQ1f");

        var chlidElement = document.getElementById(id);
        var parentElement = chlidElement.parentElement;
        var value = chlidElement.value;

        if (value === '') {
            parentElement.classList.add("invalid")
        } else {
            parentElement.classList.remove("invalid")
        };

        var name = document.forms['survey-homepage']['name'].value;
        var gender = document.forms['survey-homepage']['gender'].value;
        var email = document.forms['survey-homepage']['email'].value;
        var age = document.forms['survey-homepage']['age'].value;
        var weight = document.forms['survey-homepage']['weight'].value;
        var howHealthy = document.forms['survey-homepage']['howHealthy'].value;

        
        isValide = name !== '' && gender !== '' && email !== '' && age !== '' && weight !== '' && howHealthy !== '';

        if (isValide)
        {
            submitButton.disabled = false;
            submitButton.classList.remove("disabled");
        } else {
            submitButton.disabled = true;
            submitButton.classList.add("disabled");
        }

    };
</script>