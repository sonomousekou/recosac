    <!-- jquery-->
    <script src="./public/assets/js/jquery-3.7.0.min.js"></script>
    <script src="./public/assets/js/popper.min.js"></script>
    <script src="./public/assets/js/bootstrap-5.3.0.min.js"></script>
    <!-- Plugin -->
    <script src="./public/assets/js/plugin.js"></script>
    <!-- Main js-->
    <script src="./public/assets/js/main.js"></script>
        
<script>
$(document).ready(function() {
    $('#lang-select').change(function() {
        var lang = $(this).val();
        var route = "<?php echo $route; ?>";
        $.ajax({
             
            url: './views/client/includes/change_lang.php',
            method: 'GET',
            data: { lang: lang, route: route },
            success: function(response) {
                location.reload();
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });
    });

});
</script>