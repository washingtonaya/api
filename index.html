  GNU nano 4.8                                                                                                      index.php

                        $("button").click(function(e) {

                                var $this = $(this);
                                $source = $this.data("source");
                                e.preventDefault();
                                $.ajaxblock();
                                $.ajax({
                                        data: {
                                                "ndni": $("#ndni").val(),
                                                "source": $source,
                                                "token": $("#token").val()
                                        },
                                        type: "POST",
                                        dataType: "json",
                                        url: "datos.php",
                                }).done(function(data, textStatus, jqXHR) {
                                        if (data['success'] != false) {
                                                $("#json_code").text(JSON.stringify(data, null, '\t'));
                                                if (typeof(data['result']) != 'undefined') {
                                                        $("#tbody").html("");
                                                        $.each(data['result'], function(i, v) {
                                                                $("#tbody").append('<tr><td>' + i + '<\/td><td>' + v + '<\/td><\/tr>');
                                                        });
                                                }
                                                //$this.button('reset');
                                                $("#error").hide();
                                                $(".result").show();
                                                $.ajaxunblock();
                                        } else {
                                                if (typeof(data['message']) != 'undefined') {
                                                        alert(data['message']);
                                                }
                                                $.ajaxunblock();
                                        }
                                }).fail(function(jqXHR, textStatus, errorThrown) {
                                        alert("Solicitud fallida:" + textStatus);
                                        $.ajaxunblock();
                                });

                        });
                });


                function soloNumeros(e){
                    var key = window.event ? e.which : e.keyCode;
                    if (key < 48 || key > 57) {
                        //Usando la definición del DOM level 2, "return" NO funciona.
                        e.preventDefault();
                    }
                }
        </script>
</body>

</html>
