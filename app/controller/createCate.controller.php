<script>
    $(document).ready(() =>{
        $("#crearCate").click(() => {
            let categoria = $("#categoria").val()

            // TAREA VALIDACIONES DE nombre, email, telefono MOSTRAR ALERTA CON sweetalert
            if (!categoria) {
                Swal.fire(
                    '¿Un campo vacío?',
                    'por favor, revisa todos los campos.',
                    'question'
                )
                return; // Detener la ejecución si hay campos vacíos
            }
            
            $.ajax({
                url: "./app/model/proccess/createCate.proccess.php",
                data: {
                    categoria
                },
                type: "POST",
                success: () => {
                    Swal.fire({
                        position: 'top',
                        icon: 'success',
                        title: 'Tu trabajo ha sigo guardado.',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ok!'
                    }).then ((result) => {
                        window.location = "./read2"
                    })
                     
                },
                error: () => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Algo salió mal!'
                    })         
                }
            })
        })
    })
</script>