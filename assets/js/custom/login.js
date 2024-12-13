$("#loginForm").submit(function (e) {
  e.preventDefault();

  $.ajax({
    url: "login/checkAuth",
    method: "POST",
    dataType: 'json',
    data: $(this).serialize(),
    success: function (response) {
      if (response["status"] == "success") {
        window.location.href = baseUrl + "dashboard";
      } else {
        alert(response["message"]);
      }
      },
  });
});
