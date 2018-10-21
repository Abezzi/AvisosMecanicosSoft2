            $("#guardar_obs2").click(function(evnt){
                var id = $("#id").val();
                var obs = $("#observaciones").val();
                $.ajax({
                    url: "<?php echo base_url().'index.php/formulario_registro/observaciones_registroDac'?>",
                    type: 'POST',
                    data: {id:id, observaciones:obs},
                    success: function(result){
                        alert(result);
                        $("#aprobar").css("display", "none");
                        $("#boton").css("display", "none");
                    }
                });

            });