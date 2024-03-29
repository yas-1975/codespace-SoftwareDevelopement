export default deleteDisplay;
function deleteDisplay() {
    document.getElementById("inputtext").value = inputtext.value.slice(0, -1);
}
