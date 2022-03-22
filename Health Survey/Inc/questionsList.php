<form action="surveyResult.php" method="post" id="QuestionsList" name="QuestionsList">
    
    <!-- q2 -->
    <div class="card">
        <div class="card-body q2">
            <label class="form-label mb-4"><strong>Q2: </strong>Do you take nutritional supplements?</label>
            <div class="form-check">
                <input onchange="onValidate('q2')" class="form-check-input" type="radio" value="Yes" name="q2" id="q2yes">
                <label class="form-check-label" for="q2yes">
                    Yes
                </label>
            </div>
            <div class="form-check">
                <input onchange="onValidate('q2')" class="form-check-input" type="radio" value="No" name="q2" id="q2no">
                <label class="form-check-label" for="q2no">
                    No
                </label>
            </div>
        </div>
    </div>

    <!-- q3 -->
    <div class="card">
        <div class="card-body q3">
            <label class="form-label mb-4"><strong>Q3: </strong>How important is physical activity to you?</label>
            <div class="row">
                <div class="row col-12 col-lg-6">
                    <div class="col-4 text-left">
                        Not at all important
                    </div>
                    <div class="col-4">
                        <input type="range" value="" onchange="onValidate('q3')" class="form-range" min="0" max="5" name="q3">
                    </div>
                    <div class="col-4 text-end">
                        Very important
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- q4 -->
    <div class="card">
        <div class="card-body q4">
            <label class="form-label mb-4"><strong>Q4: </strong>What additional physical activity do you do most?</label>
            <div class="form-check">
                <input onchange="onValidate('q4')" class="form-check-input" type="radio" value="No additional physical activity" name="q4" id="q41">
                <label class="form-check-label" for="q41">
                    No additional physical activity
                </label>
            </div>
            <div class="form-check">
                <input onchange="onValidate('q4')" class="form-check-input" type="radio" value="Lifting weights" name="q4" id="q42">
                <label class="form-check-label" for="q42">
                    Lifting weights
                </label>
            </div>
            <div class="form-check">
                <input onchange="onValidate('q4')" class="form-check-input" type="radio" value="Walking" name="q4" id="q43">
                <label class="form-check-label" for="q43">
                    Walking / Jogging / Running
                </label>
            </div>
            <div class="form-check">
                <input onchange="onValidate('q4')" class="form-check-input" type="radio" value="Swimming" name="q4" id="q46">
                <label class="form-check-label" for="q46">
                    Swimming
                </label>
            </div>
            <div class="form-check">
                <input onchange="onValidate('q4')" class="form-check-input" type="radio" value="Dancing" name="q4" id="q47">
                <label class="form-check-label" for="q47">
                    Dancing / Aerobics / Pilates
                </label>
            </div>
            <div class="form-check">
                <input onchange="onValidate('q4')" class="form-check-input" type="radio" value="Team sports" name="q4" id="q410">
                <label class="form-check-label" for="q410">
                    Team sports
                </label>
            </div>
            <div class="form-check">
                <input onchange="onValidate('q4')" class="form-check-input" type="radio" value="Other" name="q4" for="q411" id="q411">
                <label class="form-check-label" for="q411">
                    Other
                </label>
                <input onchange="onValidate('q4')" type="text" class="form-control mt-3" name="q4Input" >
            </div>

        </div>
    </div>
    
    <!-- q5 -->
    <div class="card">
        <div class="card-body q5">
            <label class="form-label mb-4"><strong>Q5: </strong>Do you feel you do too little, just enough or way too much additional physical activity?</label>
            <div class="row">
                <div class="row col-12 col-lg-6">
                    <div class="col-12 text-center">Just right</div>
                    <div class="col-4 text-left">
                        Far too little
                    </div>
                    <div class="col-4">
                        <input onchange="onValidate('q5')" type="range" value="" class="form-range" min="1" max="5" name="q5">
                    </div>
                    <div class="col-4 text-end">
                        Far too much
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- q6 -->
    <div class="card">
        <div class="card-body q6">
            <label class="form-label mb-4"><strong>Q6: </strong>On a typical day, how many of your meals or snacks contain carbohydrates?</label>
            <div class="form-check">
                <div class="col-12 col-lg-6">
                    <input onchange="onValidate('q6')" name="q6" type="number" class="form-control" >
                </div>
            </div>
        </div>
    </div>
    
    <!-- q7 -->
    <div class="card">
        <div class="card-body q7">
            <label class="form-label mb-4"><strong>Q7: </strong>On a typical day, how many of your meals or snacks contain protein?</label>
            <div class="form-check">
                <div class="col-12 col-lg-6">
                    <input onchange="onValidate('q7')" name="q7" type="number" class="form-control" >
                </div>
            </div>
        </div>
    </div>
    
    <!-- q8 -->
    <div class="card">
        <div class="card-body q8">
            <label class="form-label mb-4"><strong>Q8: </strong>On a typical day, how many of your meals or snacks contain vegetables?</label>
            <div class="form-check">
                <div class="col-12 col-lg-6">
                    <input onchange="onValidate('q8')" name="q8" type="number" class="form-control" >
                </div>
            </div>
        </div>
    </div>
    
    <!-- q9 -->
    <div class="card">
        <div class="card-body q9">
            <label class="form-label mb-4"><strong>Q9: </strong>On a typical day, how many of your meals or snacks contain fruit?</label>
            <div class="form-check">
                <div class="col-12 col-lg-6">
                    <input onchange="onValidate('q9')" name="q9" type="number" class="form-control" >
                </div>
            </div>
        </div>
    </div>
    
    <!-- q10 -->
    <div class="card">
        <div class="card-body q10">
            <label class="form-label mb-4"><strong>Q10: </strong>On a typical day, how many of your meals are microwaved or prepared?</label>
            <div class="form-check">
                <div class="col-12 col-lg-6">
                    <input onchange="onValidate('q10')" name="q10" type="number" class="form-control" >
                </div>
            </div>
        </div>
    </div>

    <button type="button" onclick="history.back();" class="btn-custom back mt-3 mb-5">Back</button>
    <button onclick="return validateAll()" id="submitQs" class="btn-custom primary mt-3 mb-5 float-end" type="submit">Submit</button>
    
</form>


<script>
    var isQuestionsListValide = false;

    function validateAll () {
        var elements = ["q2", "q3", "q4", "q5", "q6", "q7", "q8", "q9", "q10"];
        elements.map(function(ele){
            onValidate(ele);
        });

        return isQuestionsListValide;
    };

    function onValidate(id) {
        var parentElement = document.getElementsByClassName(id)[0];
        var value = document.forms['QuestionsList'][id].value;

        if (value === '') {
            parentElement.classList.add("invalid")
        } else {
            parentElement.classList.remove("invalid")
        };

        var q2value = document.forms["QuestionsList"]["q2"].value;
        var q3value = document.forms["QuestionsList"]["q3"].value;
        var q4value = document.forms["QuestionsList"]["q4"].value;
        q4value === "Other" && (q4value = document.forms["QuestionsList"]["q4Input"].value);
        var q5value = document.forms["QuestionsList"]["q5"].value;
        var q6value = document.forms["QuestionsList"]["q6"].value;
        var q7value = document.forms["QuestionsList"]["q7"].value;
        var q8value = document.forms["QuestionsList"]["q8"].value;
        var q9value = document.forms["QuestionsList"]["q9"].value;
        var q10value = document.forms["QuestionsList"]["q10"].value;
        
        isQuestionsListValide = q2value !== '' &&
            q3value !== '' &&
            q4value !== '' &&
            q5value !== '' &&
            q6value !== '' &&
            q7value !== '' &&
            q8value !== '' &&
            q9value !== '' &&
            q10value !== '';
    };
</script>