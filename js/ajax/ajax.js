$(document).ready(function(){
    $("#giris").click(function(){
        var myData=$("#formGiris").serialize();
        $.ajax({
            url: "../../controller/controller.php",
            type: "POST",
            data: myData,
            success: function(data){
                if(data == "bos"){
                    Swal.fire(
                        'The Internet?',
                        'That thing is still around?',
                        'warning'
                      );
                }
                else if(data == "no"){
                    Swal.fire(
                        'Xeta',
                        'That thing is still around?',
                        'danger'
                      );
                }
                else if(data == "yes"){
                    Swal.fire(
                        'Tebrikler',
                        'That thing is still around?',
                        'success'
                      );
                }
            }
        })
    })

})