$(document).ready(function () {
  $(".thank-you").hide();
  $(".other-address").hide();

  $("#yes, #no").change(function () {
    if ($("#no").prop("checked")) {
      $(".other-address").show();
    } else {
      $(".other-address").hide();
    }
  });

  $(".submit-form").click(function () {
    $("form").hide();
    $(".thank-you").show();
  });

  $("form").on("submit", function (e) {
    e.preventDefault();

    let address = $("#address").val();
    let otherAddress;

    if ($("#no").prop("checked")) {
      otherAddress = $("#prop-address").val();
    } else {
      otherAddress = address;
    }

    let formData = {
      name: $("#name").val(),
      email: $("#email").val(),
      phone: $("#phone").val(),
      address: address,
      propertyType: $("input:radio[name=property]:checked").val(),
      otherAddress: otherAddress,
      notes: $("#notes").val(),
    };

    // send request
    $.ajax({
      url: " http://localhost/iWorQ_technical_interview/src/formHandler.php",
      type: "POST",
      data: formData,
      success: function (response) {
        console.log(response);
      },
      error: function (xhr, status, error) {
        console.log("error", xhr, status, error);
      },
    });
  });
});
