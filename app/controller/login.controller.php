<script>
    $(document).ready(() => {
        $("#btnIniciar").click(() => {
            let email = $("#email").val().trim(); 
            let pass = $("#pass").val().trim(); 

            if (email === "" || pass === "") {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Por favor, complete todos los campos.'
                });
                return; 
            }

            $.ajax({
                url: "./app/model/proccess/login.proccess.php",
                data: {
                    email,
                    pass
                },
                type: "POST",
                success: (response) => {
                    if (response === "success") {
                        Swal.fire({
                            position: 'top',
                            icon: 'success',
                            title: 'Credenciales correctas.',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Ok!'
                        }).then((result) => {
                            window.location = "./read"
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Credenciales incorrectas.'
                        });
                    }
                },
                error: () => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Algo salió mal!'
                    });
                }
            });
        });
    });
</script>
