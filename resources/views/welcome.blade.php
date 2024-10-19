<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tiny.cloud/1/tn7y5ovrk1qwnjgfvptsdmse79pd1s55dhsrpfuv0o652xki/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea',
            plugins: 'code table lists',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
        });
    </script>
</head>

<body>
    <h1>TinyMCE Quick Start Guidews</h1>
    <form method="post">
        <textarea id="mytextarea">Hello, World!</textarea>
    </form>
</body>

</html>
