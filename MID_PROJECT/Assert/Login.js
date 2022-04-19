function validation()
{
    var username = document.forms['form']['username'];
    var password = document.forms['form']['password'];


    let retval = 1;

    if(username.value === "" ){
        retval = 0;
        document.getElementById("show1").textContent = "**Enter UserName";
        document.getElementById("show1").style.color = "red";
    }



    if(password.value === "") {
        retval = 0;
            document.getElementById("show5").textContent = "**Please enter Password";
            document.getElementById("show5").style.color = "red";
        }


    if(retval == 0) return false;
    return true;
}