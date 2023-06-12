let byId = function (id) {
return document.getElementById(id);
};
$(function () {
  bsCustomFileInput.init();
});

$("#table").DataTable(),
$("#table_search").DataTable({
responsive: false,
lengthChange: false,
autoWidth: false,
});

$("#email").on("keyup", function (event) {
  var regex = /[a-zA-Z0-9]+@(gmail|yahoo|outlook)+\.(com)$/;
  var key = this.value;
  if (!regex.test(key)) {
    byId("email").classList.add("is-invalid");
    byId("button-submit").type = "button";
  } else {
    byId("email").classList.remove("is-invalid");
    byId("button-submit").type = "submit";
  }
});

