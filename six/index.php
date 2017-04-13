<?php include '../main/header.php'; ?>

    <div class="row mt-4">
        <div class="col-md-6 ">
            <input class="form-control" id="input">
        </div>
        <div class="col-md-6 ">
            <button class="btn btn-primary" onclick="loop( document.getElementById('input').value )"> GO!</button>
        </div>
    </div>
    <div class="row mt-4">
        <div id="message"></div>
    </div>
<?php include '../main/footer.php'; ?>