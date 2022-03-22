<form action="questions.php" method="post" id="q1f">
    
    <div class="card">
        <div class="card-body">
            <label for="range">Q1: How healthy are you physically?</label>
            <div class="slidecontainer">
                1<input type="range" min="1" max="5" class="form-range slider" id="q1myRange" name="healthy-state" value="">5
            </div>
            
            <button id="submitQ1f" class="btn-custom primary mt-3 mb-5 disabled" name="next" type="submit" disabled>NEXT</button>
        </div>
    </div>
</form>

<script>
    document.getElementById("q1f").addEventListener("change", function() {
        
        document.getElementById("submitQ1f").disabled = false;
        document.getElementById("submitQ1f").classList.remove("disabled") = false;
        
    });
</script>