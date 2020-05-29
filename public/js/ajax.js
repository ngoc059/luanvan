window.addEventListener('load', function() {
    $("#theme").change(function () {
          var themeId = $(this).val();
          $.get("ajax/get-lesson/" + themeId, function(data) {
              $("#lesson").html(data);
          })
      })
})