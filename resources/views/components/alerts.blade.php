@script
    <script>
        $wire.on('swal', (event) => {
            const data = event
            Swal.fire({
                title: data[0]['title'],
                text: data[0]['message'],
                icon: data[0]['icon'],
                confirmButtonClass: 'btn btn-success w-sm mt-2',
                buttonsStyling: false,
                showCloseButton: false
            })
        });

        // delete comfirm only
        $wire.on('delete-prompt', (event) => {
            const data = event
            Swal.fire({
                title: 'Confirm Delete?',
                text: 'You are about to Delete all records associated with this record, Action is irreversible',
                icon: 'warning',
                showCancelButton: true,
                cancelButtonClass: 'btn btn-success w-sm mt-2',
                confirmButtonClass: 'btn btn-danger w-sm mt-2',
                confirmButtonText: 'Confirm Delete!',
                buttonsStyling: false,
            }).then((result)=>{
                if(result.isConfirmed){
                    $wire.dispatch('Confirm-Delete')
                }
            })
        });
    </script>
@endscript
