<script>
     $(document).ready(() =>{ 
        $("#updatee").click(() => {
            let id = $("#id").val()
            let nombre = $("#nombre").val()
            let telefono = $("#telefono").val()
            let email = $("#email").val()
            let categoria = $("#categoria").val()

            if (!nombre || !telefono || !email) {
                Swal.fire(
                    '¿Un campo vacío?',
                    'por favor, revisa todos los campos.',
                    'question'
                )
                return; // Detener la ejecución si hay campos vacíos
            }

            let explecionRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/
            if (!explecionRegex.test(email)) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'El formato del email no es válido.'
                })
                return; // Detener la ejecución si el email no es válido
            }

            $.ajax({
                url: "./app/model/proccess/update.proccess.php",
                data: {
                    id,
                    nombre,
                    telefono,
                    email,
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
                        window.location = "./read"
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