//Getting value from "ajax.php".
function fill(Value) {
  //Assigning value to "search" div in "Main.html" file.
  $('#search').val(Value);
  $('#display').hide();
}
$(document).ready(function() {
  //On pressing a key on "Search box" in "Main.html" file. This function will be called.
  $("#search").keyup(function() {
      //Assigning search box value to javascript variable named as "name".
      var name = $('#search').val();
      if (name == "") {
          //Assigning empty value to "display" div in "Main.html" file.
          $("#display").html("");
      }
      else {
          $.ajax({
              //AJAX type is "Post".
              type: "POST",
              //Data will be sent to "ajax.php".
              url: "ajax.php",
              //Data, that will be sent to "ajax.php".
              data: {
                  //Assigning value of "name" into "search" variable.
                  search: name
              },
              //If result found, this funtion will be called.
              success: function(html) {
                  //Assigning result to "display" div in "Main.html" file.
                  $("#display").html(html).show();
              }
          });
      }
  });
});

