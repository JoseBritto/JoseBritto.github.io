
const contactForm = document.getElementById('contact-form');
const message_input = document.getElementById('message-input');
const email_input = document.getElementById('email-input');
const submit_btn = document.getElementById('contact-submit');
const submit_btn_inner_html = submit_btn.innerHTML;

function show_contact_error(message) {
    console.log(message);
}

function show_contact_success_message() {
    
}

contactForm.addEventListener('submit', (e) => {
    e.preventDefault();
    let message = message_input.value;
    if (message.length > 1500)
    {
        show_contact_error("Message length cannot be more than 1500 characters");
        return;
    }
    if (email_input.value.length > 300)
    {
        show_contact_error("Email length cannot be more than 300 characters");
    }
    message += "\n\nReply To: ";
    message += email_input.value;
    message += "\n\n";
    submit_btn.innerHTML = "<i class=\"las la-spinner\"></i>";
    let name = email_input.value.substring(0, email_input.value.indexOf("@"));
    if (name.length > 70)
        name = name.substring(0, 70);
    name = name.trim();
    name = name.replace(/[^\x00-\x7F]/g, "-"); // Remove all non-ascii chars
    if (name.toLowerCase() === "here" || name.toLowerCase() === "everyone" || name.length < 2)
    {
        name = "Invalid Name";
    }
    fetch('https://discord.com/api/webhooks/1277718137844006984/tdXJ1fyFhmEjPN9Tu8A-WggBzfjm-Tcr_NFduM2iIsi9R8XZrY3b7YnTkR1PdYp1ExIa?wait=true', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            content: message,
            username: name,
            embeds: [{
                title: 'Go to Site',
                description: 'Message is from britto.tech',
                url: 'https://britto.tech',
                color: 8421504,
                fields: [
                    {
                        name: 'Provided Email',
                        value: email_input.value,
                        inline: true, 
                    }
                ],
                thumbnail: {
                    url: 'https://britto.tech/android-chrome-512x512.png',  // Replace with your icon URL
                },
            }]
        }),
    }).then(response => {
        if (!response.ok)
            show_contact_error("Failed to send the message: " + response.statusText);
        else {
            message_input.value = "";
            email_input.value = "";
            show_contact_success_message();
            submit_btn.innerHTML = submit_btn_inner_html;
        }
    });

});