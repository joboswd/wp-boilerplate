<div class="cta-row w-100 text-center">
    <div class="form">
        <form class="w-100 position-relative" name="contactpage-form">
            <div class="row">
                <div class="col">
                    <input type="text" id="username" name="user_name" placeholder="Name" class="w-100"/>
                </div>
                <div class="col">
                    <input type="email" id="contactemail" name="email_address" placeholder="Email Address" class="w-100"/>
                </div>
            </div>
            <textarea id="usermessage" name="user_message" placeholder="Message" class="w-100"></textarea>
            <span class="text-center d-none" id="error-message">Please don't leave any field blank.</span>
            <span class="text-center d-none" id="success-message">Thank you! We will get in touch with you shortly.</span>
            <button type="submit" id="submit-form" class="cta mx-auto">
                SUBMIT
            </button>
        </form>
    </div>
</div>

<script>
    const scriptURL = '' // insert your Google Sheet script URL
    const contactform = document.forms['contactpage-form']

    contactform.addEventListener('submit', e => {
        e.preventDefault()
    
        const contactemail = document.getElementById("contactemail")
        const contactusername = document.getElementById("username")
        const contactusermessage = document.getElementById("usermessage")
        const errorMessage = document.getElementById("error-message")
        const successMessage = document.getElementById("success-message")

        addEventListener('input', e => {
			e.target.classList.remove("error")
            contactusermessage.classList.remove("error")
            errorMessage.classList.add("d-none")
            successMessage.classList.add("d-none")
        })
            
        if (e.target.email_address.value !== '' && e.target.user_name.value !== '' && e.target.user_message.value !== '') {				
            fetch(scriptURL, { method: 'POST', body: new FormData(contactform)})
            .then(
                response => {
                    console.log('Success!', response)
                    contactemail.value = ""
                    contactusername.value = ""
                    contactusermessage.value = ""
                    successMessage.classList.remove("d-none")

                }
            )
            .catch(error => console.error('Error!', error.message))
        }
        else if (e.target.email_address.value == "" || e.target.user_name.value == "" || e.target.user_message.value == "") {
            contactemail.classList.add("error")
            contactusername.classList.add("error")
            contactusermessage.classList.add("error")
            errorMessage.classList.remove("d-none")
            successMessage.classList.add("d-none")
        } 

    })
</script>