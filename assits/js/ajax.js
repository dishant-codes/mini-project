$(document).ready(function () {
  $("#findbtn").click((e) => {
    e.preventDefault();

    $.ajax({
      method: "post",
      url: "./components/_handleSearch.php",
      data: $("#blood-type").serialize(),
      dataType: "html",
      success: (response) => {
        $("#displaydata").html(response);
      },
    });
  });
});
