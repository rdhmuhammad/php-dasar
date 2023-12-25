<?php
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'insert':
            echo "insert button!";
            break;
        case 'select':
            echo "select button!";
            break;
    }
    exit;
}
?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $( document ).ready(function() {
        $( ".button" ).click(function() {
            var clickBtnValue = $(this).val();
            $.ajax({
                //url: '', // url is empty because I'm working in the same file
                data: {'action': clickBtnValue},
                type: 'post',
                success: function(result) {
                    alert("action performed successfully"); //this alert is fired
                    $('div#result').text('Button clicked: ' + result);
                }
            });
        });
    });
</script>

<div id="result"></div>

<input type="submit" class="button" name="insert" value="insert" />
<input type="submit" class="button" name="select" value="select" />