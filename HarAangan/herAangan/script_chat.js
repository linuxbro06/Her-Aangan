function click_btn (){
    $('#send-btn-user').click(function () {

        $('#msg-user').submit();
        $message= $("#msg-user").val();
        console.log($message);
        
    }); 
}

