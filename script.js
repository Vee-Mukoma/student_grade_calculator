const score1 = document.getElementById("score1");
const score2 = document.getElementById("score2");
const score3 = document.getElementById("score3");
const score4 = document.getElementById("score4");
const score5 = document.getElementById("score5");
const submitBtn = document.getElementById("submit-btn");

const scores = [score1, score2, score3, score4, score5];

submitBtn.addEventListener("click", function(event) {
    if (score1.value === "" || score2.value === "" || score3.value === "" || score4.value === "" || score5.value === "") {
        event.preventDefault(); // Prevent form submission
        window.alert("Please ensure all score fields are filled!");
    }else {
        scores.forEach(function(score) {
            if (!Number.isInteger(Number(score.value))) {
                event.preventDefault();
                window.alert("Scores must be whole numbers!");
            }
        });
    }
});