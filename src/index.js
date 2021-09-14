const inputs = document.querySelectorAll(".input__in");
const modBtn = document.querySelector(".nav__CTA");
const modOver = document.querySelector(".modal-overlay");
const closeBtn = document.querySelector(".close-btn");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}
function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});
