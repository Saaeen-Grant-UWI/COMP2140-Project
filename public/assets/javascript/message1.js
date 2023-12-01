const load = () => {
    const messageForm1 = document.getElementById("message-form1")
    const sentBtn1 = document.getElementById("send-btn1")


    sentBtn1.addEventListener('click', () => {
        messageForm1.innerHTML = "<h1>MESSAGE SENT!</h1>"
    })


}
document.addEventListener("DOMContentLoaded", load);