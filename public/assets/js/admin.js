// Selector
// update projects form
const table = document.querySelector("#table");
const updateClose = document.querySelector("#updateClose");
const updateContainer = document.querySelector("#updateContainer");
const updateForm = document.querySelector("#updateForm");
const createForm = document.querySelector("#createForm");

// create projects form
const createFormContainer = document.querySelector("#createFormContainer");
const createFormClose = document.querySelector("#createFormClose");
const createFormBtn = document.querySelector("#createFormBtn");

// new account form
const newAccountFormContainer = document.querySelector(
  "#newAccountFormContainer"
);
const newAccountFormBtn = document.querySelector("#newAccountFormBtn");
const newAccountFormClose = document.querySelector("#newAccountFormClose");

// menu btn
const menubar = document.querySelector("#menubar");

// alert box close btn
const alertBoxClose = document.querySelector("#alertBoxClose");
const alertBoxContainer = document.querySelector("#alertBoxContainer");

// show update form & data binding
if (table !== null) {
  table.addEventListener("click", (e) => {
    if (e.target.classList.contains("update-btn")) {
      //   select current projects data
      const row = e.target.closest(".project-table-row");
      const id = row.querySelector(".project-id");
      const projectDate = row.querySelector(".project-date");
      const customer = row.querySelector(".project-customer");
      const location = row.querySelector(".project-location");
      const service = row.querySelector(".project-service");
      const photo1 = row.querySelector(".project-photo1");
      const photo2 = row.querySelector(".project-photo2");
      const photo3 = row.querySelector(".project-photo3");
      const categories = row.querySelector(".project-categories");

      //   select update form data
      const updateId = updateForm.querySelector("#id");
      const updateProjectDate = updateForm.querySelector("#project-date");
      const updateCustomer = updateForm.querySelector("#customer");
      const updateLocation = updateForm.querySelector("#location");
      const updateService = updateForm.querySelector("#service");
      const updateCurrentPhoto1 = updateForm.querySelector("#photo1");
      const updateCurrentPhoto2 = updateForm.querySelector("#photo2");
      const updateCurrentPhoto3 = updateForm.querySelector("#photo3");
      const updatePhoto = updateForm.querySelector("#update-photo1");
      const updateCategories = updateForm.querySelector("#categories");

      // data binding
      updateId.value = id.innerText;
      updateProjectDate.value = projectDate.innerText;
      updateCustomer.value = customer.innerText;
      updateLocation.value = location.innerText;
      updateService.value = service.innerText;
      updateCurrentPhoto1.value = photo1.innerText;
      updateCurrentPhoto2.value = photo2.innerText;
      updateCurrentPhoto3.value = photo3.innerText;
      updateCategories.value = categories.innerText;

      // show update form
      updateContainer.classList.remove("hidden");
      updateContainer.classList.add("flex");
    }
  });
}

// close update form
if (updateClose !== null) {
  updateClose.addEventListener("click", () => {
    updateContainer.classList.remove("flex");
    updateContainer.classList.add("hidden");
  });
}

// show create form
if (createFormBtn !== null) {
  createFormBtn.addEventListener("click", () => {
    createFormContainer.classList.remove("hidden");
    createFormContainer.classList.add("flex");
  });
}

// close create form
if (createFormClose !== null) {
  createFormClose.addEventListener("click", () => {
    createFormContainer.classList.remove("flex");
    createFormContainer.classList.add("hidden");
  });
}

//show new account form
if (newAccountFormBtn !== null) {
  newAccountFormBtn.addEventListener("click", () => {
    newAccountFormContainer.classList.remove("hidden");
    newAccountFormContainer.classList.add("flex");
  });
}

// close new account form
if (newAccountFormClose !== null) {
  newAccountFormClose.addEventListener("click", () => {
    newAccountFormContainer.classList.remove("flex");
    newAccountFormContainer.classList.add("hidden");
  });
}

// menu toggle show hide
if ($("#menuBtn") !== null) {
  $("#menuBtn").click(() => {
    $("#menuOpen").toggle();
    $("#menuClose").toggle();
    $("#menubar").slideToggle();
  });
}

// show password for login form
if ($("#show-password") !== null) {
  $("#show-password").change(() => {
    if ($("#password").attr("type") == "password") {
      $("#password").attr("type", "text");
    } else {
      $("#password").attr("type", "password");
    }
  });
}

// close alert box
if (alertBoxClose !== null) {
  alertBoxClose.addEventListener("click", () => {
    alertBoxContainer.classList.remove("flex");
    alertBoxContainer.classList.add("hidden");
  });
}
