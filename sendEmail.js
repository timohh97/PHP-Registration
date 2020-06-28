$(document).ready(function () {
    $(".resetPasswordbutton").click(function (event) {

       var email = $(".email").val()

        if (email.length > 5 && email.includes("@") && email.includes(".")) {

            document.getElementById("confirm").value=""+email;
            alert("A message was sent to your email adress: "+email);

        }
        else {
            event.preventDefault()
            alert("The email is not valid!")
        }

    }
    )


}
)
