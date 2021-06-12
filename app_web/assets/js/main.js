/*  validation regix */

var inputName = document.getElementById("name")
var inputPrenom = document.getElementById("prenom")
var inputEmail = document.getElementById("email")
var inputPassword = document.getElementById("password")

function validation_Name(par, regix, nmber_char) {
    var input_name = document.querySelector(`#${par}`);
    var input_name_value = input_name.value;
    var inputPrenom_value = inputPrenom.value;
    var inputEmail_value = inputEmail.value;
    var inputPassword_value = inputPassword.value;

    input_name.style = "border:1px solid red ";


    if (input_name_value.match(regix) && input_name_value.length >= nmber_char) {
        input_name.style = "border:1px solid green ";
        if (inputPrenom_value.length >= 4 && inputPassword_value.length >= 5 && inputEmail_value.length >= 5) {
            document.getElementById("valide").disabled = false;
        }
    } else {
        document.getElementById("valide").disabled = true;

    }

}
inputName.addEventListener('keyup', () => {
    validation_Name('name', /^[a-zA-Z ]+$/, 4)
})
inputPrenom.addEventListener('keyup', () => {
    validation_Name('prenom', /^[a-zA-Z ]+$/, 4)
})
inputEmail.addEventListener('keyup', () => {
    validation_Name('email', /^[^ ]+@[^ ]+\.[a-z]{2,3}$/, 5)
})
inputPassword.addEventListener('keyup', () => {
    validation_Name('password', /^[A-Za-z0-9]\w{5,}$/, 5)
})



/* show popup data */

var popup_see_note = document.querySelector(".popup_see_note");

var pop_up_show = true

var see_data = (id_user, name, prenom, email, password, html, css, js, php) => {

    if (pop_up_show == true) {

        popup_see_note.style = "display:grid !important";

        popup_see_note.innerHTML = `<h1>${name} ${prenom}</h1>
								<p>Class : <span>Adalovelace</span></p>
								<p>Email : <span>${email}</span></p>
								<p>Password : <span>${password}</span></p>
								<h2>Notes</h2>
								<p>HTML : <span>${html}</span></p>
								<p>CSS : <span>${css}</span></p>
								<p>JAVASCRIPT : <span>${js}</span></p>
								<p>PHP : <span>${php}</span></p>

								<div class="btn_popup_okey">
									<button class="button_okey" onclick="pop_up_display()">Okey</button>
						</div>`;


    }

}
var button_okey = document.querySelector(".button_okey");

pop_up_display = () => {
    popup_see_note.style = "display:none !important";
}


/* delete data */

function delete_popup(id_user) {


    swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location.href = `assets/php/delete.php?id=${id_user}`;
            } else {
                swal("Your imaginary file is safe!");
            }
        });

}

/* get data to update  */

var imported = (user_id, user_name, user_prenom, user_email, user_pass, user_html, user_css, user_js, user_php) => {

    console.log(user_id);

    document.getElementById("id_user").value = user_id;
    document.getElementById("name").value = user_name;
    document.getElementById("prenom").value = user_prenom;
    document.getElementById("email").value = user_email;
    document.getElementById("password").value = user_pass;
    document.getElementById("html").value = user_html;
    document.getElementById("css").value = user_css;
    document.getElementById("js").value = user_js;
    document.getElementById("php").value = user_php;
    document.getElementById("update_btn").style = "display:block";
    document.getElementById("valide").style = "display:none";

}
var imported_void = () => {

    document.getElementById("id_user").value = "";
    document.getElementById("name").value = "";
    document.getElementById("prenom").value = "";
    document.getElementById("email").value = "";
    document.getElementById("password").value = "";

}