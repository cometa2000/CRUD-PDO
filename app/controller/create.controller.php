<script>
    $(document).ready(() =>{
        $("#crear").click(function() {
            let nombre = $("#nombre").val()
            let telefono = $("#telefono").val()
            let email = $("#email").val()
            let categoria = $("#categoria").val()
            let creadoPor = $("#creadoPor").val()

            if (!nombre || !telefono || !email) {
                Swal.fire(
                    '¿Un campo vacío?',
                    'por favor, revisa todos los campos.',
                    'question'
                )
                return; 
            }

            let explecionRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/
            if (!explecionRegex.test(email)) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'El formato del email no es válido.'
                })
                return; 
            }
            
            $.ajax({
                url: "./app/model/proccess/create.proccess.php",
                data: {
                    nombre,
                    telefono,
                    email,
                    categoria,
                    creadoPor
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