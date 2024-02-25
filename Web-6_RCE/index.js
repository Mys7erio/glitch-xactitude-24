function validateForm() {
  const fileInput = document.getElementById("filer_input2");
  const uploadButton = document.getElementById("upload-button");
  console.log("fileInput");

  if (fileInput.files.length === 0) {
    alert("Please select a file to upload.");
    uploadButton.disabled = true;
    return false;
  } else {
    uploadButton.disabled = false;
  }

  return true;
}

function updateUploadButton() {
  const fileInput = document.getElementById("filer_input2");
  const uploadButton = document.getElementById("upload-button");
  if (fileInput.files.length > 0) {
    const fileName = fileInput.files[0].name;
    uploadButton.textContent = `Upload ${fileName}`;
  } else {
    uploadButton.textContent = "Upload";
  }
}
