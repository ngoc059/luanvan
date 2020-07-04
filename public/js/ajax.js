window.addEventListener('load', function() {
    $("#theme").change(function () {
          var themeId = $(this).val();
          $.get("ajax/get-lesson/" + themeId, function(data) {
              $("#lesson").html(data);
          })
      })
})

window.addEventListener('load', function() {
    $("#theme-list-lesson").change(function () {
          var themeId = $(this).val();
          $.get("get-list-lesson/" + themeId, function(data) {
              $("#tableLesson").html(data);
          })
      })
})