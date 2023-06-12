$("#email_user").on("keyup", function(event) {
    var regex = /[a-zA-Z0-9]+@(gmail|yahoo|outlook)+\.(com)$/;
    var key = this.value;
    if (!regex.test(key)) {
      byId("email_user").classList.add("is-invalid");
      byId("button-submit3").type = "button";
    } else {
      byId("email_addy").classList.remove("is-invalid");
      byId("button-submit3").type = "submit";
    }
  });