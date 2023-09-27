<script>
    $(document).ready(() => {
        $(".deleteButton").click(function() {
            let id = $(this).data("id");

            Swal.fire({
                title: '¿Estás seguro?',
                text: "¡No podrás deshacer esta acción!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminarlo'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "./app/model/proccess/delete.proccess.php",
                        data: {
                            id: id
                        },
                        type: "POST",
                        success: () => {
                            Swal.fire(
                                'Eliminado!',
                                'Su archivo ha sido eliminado.',
                                'success'
                            ).then((result) => {
                                location.reload()
                                // window.location = "./read";
                            });
                        },
                        error: () => {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Algo salió mal!'
                            });
                        }
                    });
                }
            });
        });
    });
</script>