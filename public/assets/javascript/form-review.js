const load = () => {
    let information = []
    let dateTime = []
    let servicesNeeded = []
    let yourInformation = []
    let vehicleInformation = []
    const appointmentForm = document.getElementById("appointment-form")
    const appointmentDetails = document.querySelector(".appointment-details")
    const myInformation = document.querySelector(".my-information")
    const reviewSubmit = document.querySelector(".review-submit")

    const progressSection = document.querySelectorAll(".progress-section")
    const progressSectionNumber = document.querySelectorAll(".progress-section p span")
    const progressSectionLine = document.querySelectorAll(".progressline")
    
    document.getElementById('app-details-continue').addEventListener('click', () => {
       depopulateReviewSubmit()


        if( document.getElementById('app-details-continue').classList.contains('submit')) {
            appointmentForm.submit()
        }

        appointmentDetails.classList.add('hide')
        myInformation.classList.remove('hide')
        
        progressSection[1].classList.add('progress-active-text')
        progressSectionNumber[1].classList.add('progress-active-number')
        progressSectionLine[1].classList.add('progress-active-line')
    
    })


    document.getElementById('my-info-continue').addEventListener('click', () => {
        myInformation.classList.add('hide')
        reviewSubmit.classList.remove('hide')

        progressSection[2].classList.add('progress-active-text')
        progressSectionNumber[2].classList.add('progress-active-number')
        progressSectionLine[2].classList.add('progress-active-line')


        Array.from(appointmentForm.querySelectorAll("input")).forEach((input) => {
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

                if(info.name == "appointment_date") {dateTime.push(info.value)}
                if(info.name == "time") {dateTime.push(info.value)}
                if(info.name == "services[]") {servicesNeeded.push(info.value)}
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

    document.getElementById('my-info-back').addEventListener('click', () => {
        
        appointmentDetails.classList.remove('hide')
        myInformation.classList.add('hide')

        progressSection[1].classList.remove('progress-active-text')
        progressSectionNumber[1].classList.remove('progress-active-number')
        progressSectionLine[1].classList.remove('progress-active-line')

     
    })

    document.getElementById('review-submit-back').addEventListener('click', () => {
        reviewSubmit.classList.add('hide')
        myInformation.classList.remove('hide')

        progressSection[2].classList.remove('progress-active-text')
        progressSectionNumber[2].classList.remove('progress-active-number')
        progressSectionLine[2].classList.remove('progress-active-line')

    })
    
    
    
    
    // document.getElementById('btn-to-review-submit').addEventListener('click', () => {




    // })

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
            <p ${typeof(vehicleInformation[0])=="undefined"? "class='error-message'":""} >${typeof(vehicleInformation[0])=="undefined"? "Vehicle year required":vehicleInformation[0]}</p>
            <p><span class="${typeof(vehicleInformation[1])=="undefined"? "error-message":"f-name"}">${typeof(vehicleInformation[1])=="undefined"? "Vehicle make required":vehicleInformation[1]}</span> <span class="${typeof(vehicleInformation[2])=="undefined"? "error-message":"l-name"}">${typeof(vehicleInformation[2])=="undefined"? "Vehicle model required":vehicleInformation[2]}</span></p>
            <p ${typeof(vehicleInformation[3])=="undefined"? "class='error-message'":""} >${typeof(vehicleInformation[3])=="undefined"? "Addtional model info required":vehicleInformation[3]}</p>
            <p ${typeof(vehicleInformation[4])=="undefined"? "class='error-message'":""} >${typeof(vehicleInformation[4])=="undefined"? "Vehicle licence plate number required":vehicleInformation[4]}</p>
        `

        dateInfo.innerHTML = `
            <h3>Date & Time</h3>
            <p ${typeof(dateTime[0])=="undefined"? "class='error-message'":""} >${typeof(dateTime[0])=="undefined"? "Date selection is required":dateTime[0]}</p>
            <p ${typeof(dateTime[1])=="undefined"? "class='error-message'":""} >${typeof(dateTime[1])=="undefined"? "Date selection is required":dateTime[1]}</p>
        `

        let servicesString = ``
        if(servicesNeeded.length===0) {
            servicesInfo.innerHTML = `
            <h3>Service(s) Needed</h3>
            <p class="error-message">Service(s) selection is required</p>
        `   
        } else {
            servicesNeeded.forEach((service) => { 
                servicesString += `<li class="review-service"><p>${service}</p></li>`
           })
   
   
           servicesInfo.innerHTML = `
               <h3>Service(s) Needed</h3>
               <ul class="services-info">
                   ${servicesString}
               </ul>
           `      
        }
          

    }

    const depopulateReviewSubmit = () => {
        const personalInfo = document.querySelector(".personal-info")
        const vehicleInfo = document.querySelector(".vehicle-info")
        const dateInfo = document.querySelector(".date-info")
        const servicesInfo = document.querySelector(".service-info")

        personalInfo.innerHTML = ``

        vehicleInfo.innerHTML = ``

        dateInfo.innerHTML = ``

        servicesInfo.innerHTML = `` 

        information = []
        dateTime = []
        servicesNeeded = []
        yourInformation = []
        vehicleInformation = []

    }

}
document.addEventListener("DOMContentLoaded", load);