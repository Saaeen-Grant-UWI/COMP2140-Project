const load = () => {
    let information = []
    let dateTime = []
    let servicesNeeded = []
    let yourInformation = []
    let vehicleInformation = []
    const appointmentForm = document.getElementById("appointment-form")
    
    
    document.getElementById('btn-to-review-submit').addEventListener('click', () => {

        appointmentForm.querySelectorAll("input").forEach((input) => {
            
            if((input.type == "radio" || input.type == "checkbox")) {

                if((input.checked)) {
                    information.push(input)
                }

            } else {

                if(input.value) {
                    information.push(input)
                }
            } 

        })  

        information.forEach((info) => {
            if(info.className == "appoint-details-input") {

                if(info.name == "appointment-date") {dateTime.push(info.value)}
                if(info.name == "time") {dateTime.push(info.value)}
                if(info.name == "service") {servicesNeeded.push(info.value)}
            }
            if(info.className == "your-info-input") {
                yourInformation.push(info.value)
            }
            if(info.className == "vehicle-info-input") {
                vehicleInformation.push(info.value)
            }
        })

        
       populateReviewSubmit(yourInformation, vehicleInformation, dateTime, servicesNeeded)



    })

    const populateReviewSubmit = (yourInformation, vehicleInformation, dateTime, servicesNeeded) => {
        const personalInfo = document.querySelector(".personal-info")
        const vehicleInfo = document.querySelector(".vehicle-info")
        const dateInfo = document.querySelector(".date-info")
        const servicesInfo = document.querySelector(".service-info")

        personalInfo.innerHTML = `
            <h3>Your Information</h3>
            <p><span class="f-name">${yourInformation[0]}</span> <span class="l-name">${yourInformation[1]}</span></p>
            <p>${yourInformation[2]}</p>
            <p>${yourInformation[3]}</p>
        `

        vehicleInfo.innerHTML = `
            <h3>Vehicle Information</h3>
            <p>${vehicleInformation[0]}</p>
            <p><span class="f-name">${vehicleInformation[1]}</span> <span class="l-name">${vehicleInformation[2]}</span></p>
            <p>${vehicleInformation[3]}</p>
            <p>${vehicleInformation[4]}</p>
        `

        dateInfo.innerHTML = `
            <h3>Date & Time</h3>
            <p>${dateTime[0]}</p>
            <p>${dateTime[1]}</p>
        `

        let servicesString = ``
        servicesNeeded.forEach((service) => { 
             servicesString += `<li><p>${service}</p></li>`
        })


        servicesInfo.innerHTML = `
            <h3>Service(s) Needed</h3>
            <ul class="services-info">
                ${servicesString}
            </ul>
        `        

    }

}
document.addEventListener("DOMContentLoaded", load);