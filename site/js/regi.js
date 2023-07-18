
$("#reg-form").submit(function (event) {
    let $password = $("#password");
    let $confirm = $("#confirm_pwd");
    let $error = $("#confirm_error");
    if($password.val() === $confirm.val()){
        return true;
    }else{
        $error.text("Password not Match");
        event.preventDefault();
    }
});

///slider-pret
var s = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = s.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
s.oninput = function() {
  output.innerHTML = this.value;
}