function showMoreDescription() {
    let service_description = document.getElementById("service_description");
    let more_btn = document.getElementById("more_btn");
    service_description.style.display = "block";
    more_btn.style.display = "none";
}

function showLessDescription() {
    let service_description = document.getElementById("service_description");
    let more_btn = document.getElementById("more_btn");
    service_description.style.display = "none";
    more_btn.style.display = "block";
}
