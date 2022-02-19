imgInp.onchange =()=> {
    const [file] = imgInp.files
    if (file) {
        image.src = URL.createObjectURL(file)
    }
}
