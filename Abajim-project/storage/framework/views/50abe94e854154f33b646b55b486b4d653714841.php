<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF with Modal</title>
    <!-- Include Bootstrap CSS for modal -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h2>PDF with Modal Example</h2>
    <!-- Button to open PDF (you can embed this PDF using an iframe or a similar approach) -->
    <object data="http://localhost:8001/panel/generate-pdf#toolbar=0&page=8&zoom=auto" type="application/pdf" width="100%"
                height="880px">
                <p>Unable to display PDF file. <a href="">Download</a> instead.</p>
            </object>

 <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    Modal body text goes here.
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include jQuery and Bootstrap JS for modal functionality -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
   $(document).ready(function() {
        if (window.location.hash === '#openModal') {
            $('#myModal').modal('show');
       
        }
    });
</script>
</body>
</html>
    <?php /**PATH C:\Users\moham\OneDrive\Desktop\Abajim\Abajimnew21052024\Abajimnew\Abajim\resources\views/modal.blade.php ENDPATH**/ ?>