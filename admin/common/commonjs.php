<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

  <!-- <script src="assets/js/ckeditor.js"></script> -->
  <script>
    $(document).ready(function() {
      $("#menu").click(function() {
        $("body").toggleClass('show')
      });
    });

    //---//

    $(".sub-menu ul").toggleClass('hideUl');
    $(".sub-menu a").click(function () {

      $(this).parent(".sub-menu").children("ul").toggleClass('hideUl').slide("100");
      $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
    });
  </script>
