
<div class="container-fluid">
    <div class="jumbotron">
    <form action="action.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">Select File</label>
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="doc" required placeholder="Chosse File">
            <small id="emailHelp" class="form-text text-muted">We'll never share your file with anyone else.</small>
        </div>
        <!-- <div class="form-group">
            <label for="exampleInputPassword1">Select Key</label>
            <select class="form-control" name="key" required id="exampleInputPassword1" >
                <option value="key1">key1</option>
            </select>
        </div> -->
        <div class="form-group form-check">
            <input type="checkbox" required class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" name="dec" class="btn btn-primary">Decrypt</button>
        </form>
    </div>
</div>





















