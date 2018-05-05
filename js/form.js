$(document).ready(function () {

  $('form').submit(function (e) {

    var name = $('#name').val();
    var email = $('#mail').val();
    var phoneno = $('#phoneno').val();
    var venue = $('#venue').val();
    var etype = $('#etype').val();
    var guests = $('#guests').val();
    var datepicker = $('#datepicker').val();
    var hcontact = $('#hcontact').val();
    var message = $('#message').val();

    var data = 'name=' + name + '&mail=' + email + '&phoneno=' + phoneno + '&venue=' + venue + '&etype=' + etype + '&guests=' + guests + '&datepicker=' + datepicker + '&hcontact=' + hcontact + '&message=' + message;

    $.ajax({
      type: "POST",
      url: 'form',
      data: data,
      success: $(document).ready(function () {
        $("#myModal").modal("show");
      })
    });

    $("#form")[0].reset();
    e.preventDefault(); // avoid to execute the actual submit of the form.
  });
});