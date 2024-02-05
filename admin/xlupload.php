<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xlupload</title>
    <?php include 'head.php'; ?>
    
</head>

<body>
    <?php include 'header.php'; ?>
    
    <div class="container-xxl upload-container">
        <div class="row ">
            <div class="col-lg-12">
                <div class="row mt-5">
                    <div class="col-lg-10"></div>
                    <div class="col-lg-2 mt-5">
                        <button type="button" class="btn upload-btn" data-bs-toggle="modal" data-bs-target="#uploadModal">
                            xl-upload
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">File-upload page</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ms-5">
                    <div class="upload-container ms-2 me-5 mb-4">
                        <form action=""  method="post" enctype="multipart/form-data">
                            <div class="file-container">
                                <input type="file" id="xl-file" name="file" accept="image/*" onchange="updateFileName()">
                                <label for="xl-file" class="xl-file-label" id="xl-file-label">Choose file</label>
                                <span class="clear-file" onclick="clearFileSelection()">X</span>
                            </div>
                            <div class="row mt-4 ">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-4"><button class="xl-import-btn" type="submit">Import</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function updateFileName() {
            const fileInput = document.getElementById("xl-file");
            const fileLabel = document.getElementById("xl-file-label");
            const clearFileBtn = document.querySelector(".clear-file");

            if (fileInput.files.length > 0) {
                fileLabel.textContent = fileInput.files[0].name;
                clearFileBtn.style.display = "inline-block";
            } else {
                fileLabel.textContent = "Choose file...";
                clearFileBtn.style.display = "none";
            }
        }

        function clearFileSelection() {
            const fileInput = document.getElementById("xl-file");
            const fileLabel = document.getElementById("xl-file-label");
            const clearFileBtn = document.querySelector(".clear-file");

            fileInput.value = ""; // Clear the file input
            fileLabel.textContent = "Choose file...";
            clearFileBtn.style.display = "none";
        }
    </script>
</body>

</html>
