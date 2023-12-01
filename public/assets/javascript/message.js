const load = () => {
    const messageForm1 = document.getElementById("message-form1")
    const messageForm2 = document.getElementById("message-form2")
    const sentBtn1 = document.getElementById("send-btn1")
    const sentBtn2 = document.getElementById("send-btn2")


    sentBtn2.addEventListener('click', () => {
        messageForm2.innerHTML = "<h1>INQUIRY SENT!</h1>"
    })

    sentBtn1.addEventListener('click', () => {
        messageForm1.innerHTML = "<h1>MESSAGE SENT!</h1>"
    })


}
document.addEventListener("DOMContentLoaded", load);