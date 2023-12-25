// its will add func to registered event.
// cari.addEventListener('click', (e)=>{})

// using ready to wait for html document
$(document).ready(()=>{
    $("#keyword").on('keyup', () => {
        // object ajax
        // old ie not support it, they used XActiveHttpRequest
        const xhr = new XMLHttpRequest();

        // check if ajax ready
        // state are
        /*
           - 0 : initialize
           - 1 :
           - 2 :
           - 3 :
           - 4 :
         */
        $("#loader").show();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200){
                // using jqery we can do ->
                // $("#container").load('ajax/cabang.php?=keyword='+$('#kerword').value);
                $("#container").html(xhr.response);
            }
        }
        xhr.open('GET', 'ajax/cabang.php?keyword='+$("#keyword").val(), true);
        xhr.send();
    })
})