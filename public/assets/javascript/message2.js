const load = () => {
    const messageForm2 = document.getElementById("message-form2")
    const sentBtn2 = document.getElementById("send-btn2")


    sentBtn2.addEventListener('click', () => {
        messageForm2.innerHTML = "<h1>INQUIRY SENT!</h1>"
    })



}
document.addEventListener("DOMContentLoaded", load);