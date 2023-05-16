const wrapper = document.querySelector(".wrapper"),
    selectBtn = wrapper.querySelector(".select-btn"),
    searchInp = wrapper.querySelector("input"),
    options = wrapper.querySelector(".options");

let coordinators = [
    "Joseph Murphy", "Nicola Tesla", "Jose Silva", "Chris Voss", "Alan Wolf", "Julie Plec", "Gary Small", "Gigi Vorgan"];

function addCoordinator(selectedCoordinator) {
    options.innerHTML = "";
    coordinators.forEach(coordinator => {
        let isSelected = coordinator == selectedCoordinator ? "selected" : "";
        let li = `<li onclick="updateName(this)" class="${isSelected}">${coordinator}</li>`;
        options.insertAdjacentHTML("beforeend", li);
    });
}
addCoordinator();

function updateName(selectedLi) {
    searchInp.value = "";
    addCoordinator(selectedLi.innerText);
    wrapper.classList.remove("active");
    selectBtn.firstElementChild.innerText = selectedLi.innerText;
}

searchInp.addEventListener("keyup", () => {
    let arr = [];
    let searchWord = searchInp.value.toLowerCase();
    arr = coordinators.filter(data => {
        return data.toLowerCase().startsWith(searchWord);
    }).map(data => {
        let isSelected = data == selectBtn.firstElementChild.innerText ? "selected" : "";
        return `<li onclick="updateName(this)" class="${isSelected}">${data}</li>`;
    }).join("");
    options.innerHTML = arr ? arr : `<p style="margin-top: 10px;">Not found</p>`;
});

selectBtn.addEventListener("click", () => wrapper.classList.toggle("active"));
