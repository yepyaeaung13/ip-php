// Selector
// update projects form
const table = document.querySelector("#table");
const updateClose = document.querySelector("#updateClose");
const updateContainer = document.querySelector("#updateContainer");
const updateForm = document.querySelector("#updateForm");

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

// show update form & data binding
if (table !== null) {
  table.addEventListener("click", (e) => {
    if (e.target.classList.contains("update-btn")) {
      //   select current projects data
      const row = e.target.closest(".project-table-row");
      const id = row.querySelector(".project-id");
      const customer = row.querySelector(".project-customer");
      const location = row.querySelector(".project-location");
      const service = row.querySelector(".project-service");
      const photo = row.querySelector(".project-photo");
      const categories = row.querySelector(".project-categories");

      //   select update form data
      const updateId = updateForm.querySelector("#id");
      const updateCustomer = updateForm.querySelector("#customer");
      const updateLocation = updateForm.querySelector("#location");
      const updateService = updateForm.querySelector("#service");
      const updateCurrentPhoto = updateForm.querySelector("#photo");
      const updatePhoto = updateForm.querySelector("#update-photo");
      const updateCategories = updateForm.querySelector("#categories");

      // data binding
      updateId.value = id.innerText;
      updateCustomer.value = customer.innerText;
      updateLocation.value = location.innerText;
      updateService.value = service.innerText;
      updateCurrentPhoto.value = photo.innerText;
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
