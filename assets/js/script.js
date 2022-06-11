$(document).ready(function () {
  $('.project').hover(
    function () {
      $(this).animate(
        {
          marginTop: '-=1%',
        },
        200
      );
    },

    function () {
      $(this).animate(
        {
          marginTop: '0%',
        },
        200
      );
    }
  );
  $('.loader-container').fadeOut(1600);
});
