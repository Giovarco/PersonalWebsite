var emailSender;

// Initialize EmailSender
$(document).ready(function() {
    emailSender = new EmailSender();
});

// This class is used to send emails
function EmailSender() {

    // PRIVATE VARIABLES | START
    var myEmail = "mario.mignemi@studium.unict.it";
    var contactMeSection = $("#contactMeSection");
    // PRIVATE VARIABLES | END

    // PRIVILEGED FUNCTIONS | START
    this.send = function() {

        var name = contactMeSection.find("#emailName:first").val();
        var subject = contactMeSection.find("#emailSubject:first").val();
        var message = contactMeSection.find("#emailMessage:first").val();
        var params = {
            "subject" : subject + " by " + name,
            "body" : message
        }
    
        window.open("mailto:"+myEmail+"?"+$.param(params));

    }
    // PRIVILEGED FUNCTIONS | END

}