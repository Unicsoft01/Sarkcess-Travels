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
    </script>
@endscript
