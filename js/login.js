const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});

//jQuery code here!
/*
function loadlink(){
    $('#signup').load('traitement.php',function () {
        $(this).unwrap();
    });
}

loadlink(); // This will run on page load
setInterval(function(){
    loadlink() // this will run after every 5 seconds
}, 2000);
*/

var password = document.getElementById("passwordsignup");

function genPassword() {
    var chars = "abcdefghijklmnopqrstuvwxyz!@#$%^&*()-+<>ABCDEFGHIJKLMNOPQR1234567890";
    var chars1 = "abcdefghijklmnopqrstuvwxyz";
    var chars2 = "!@#$%^&*()-+<>";
    var chars3 = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    var chars4 = "1234567890";
    var passwordLength = 12;
    var passwordLength2 = 1;
    var password = "";
    for (var x = 0; x <= passwordLength; x++) {
        var i = Math.floor(Math.random() * chars.length);
        password += chars.substring(i, i +1);
    }
    for (var x = 1; x <= passwordLength2; x++) {
        var iq = Math.floor(Math.random() * chars1.length);
        var iw = Math.floor(Math.random() * chars2.length);
        var ie = Math.floor(Math.random() * chars3.length);
        var ir = Math.floor(Math.random() * chars4.length);
        password += chars1.substring(iq, iq +1);
        password += chars2.substring(iw, iw +1);
        password += chars3.substring(ie, ie +1);
        password += chars4.substring(ir, ir +1);
        console.log(password)
    }


    function shuffle(password) {
        var arr = password.split('');           // Convert String to array
        
        arr.sort(function() {
          return 0.5 - Math.random();
        });  
        password = arr.join('');                // Convert Array to string
        return password;                        // Return shuffled string
    }

    password = shuffle(password);

    console.log(password)


    document.getElementById("passwordsignup").value = password;
}

function copyPassword() {
    var copyText = document.getElementById("password");
    copyText.select();
    document.execCommand("copy");
}

const togglePasswordsignin = document.getElementById('togglePasswordsignin');
const passwordsigninview = document.getElementById('passwordsignin');
const togglePassword = document.getElementById('togglePassword');
const toggleconfirmPassword = document.querySelector("#toggleconfirmPassword");
const passwordview = document.getElementById('passwordsignup');
const passwordconfirmview = document.querySelector("#passwordconfirmsignup");

togglePasswordsignin.addEventListener("click", function () {
    // toggle the type attribute
    const type = passwordsigninview.getAttribute("type") ;
    passwordsigninview.setAttribute("type", type === "password" ? "text" : "password");

    // toggle the icon
    this.classList.toggle("bi-eye");
});

togglePassword.addEventListener("click", function () {
    // toggle the type attribute
    const type = passwordview.getAttribute("type") ;
    passwordview.setAttribute("type", type === "password" ? "text" : "password");

    // toggle the icon
    this.classList.toggle("bi-eye");
});

toggleconfirmPassword.addEventListener("click", function () {
    // toggle the type attribute
    const type = passwordconfirmview.getAttribute("type") ;
    passwordconfirmview.setAttribute("type", type === 'password' ? 'text' : 'password');

    // toggle the icon
    this.classList.toggle("bi-eye");
});

/*
// prevent form submit
const form = document.querySelector(".form-container sign-up-container");
form.addEventListener('submit', function (e) {
    e.preventDefault();
});
*/


function formvalidation (){
    function ValidateEmail()
    {
        var mailcheck = document.getElementById('mailsignup').value;
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(mailcheck.match(mailformat))
        {

            
            return true;
        }
        else
        {
            
            return false;

        }
    }

    function ValidatePassword() {
        var Passwordcheck = document.getElementById('passwordsignup').value;
        var minNumberofChars = 8;
        var maxNumberofChars = 50;
        var regularExpression  = /^[a-zA-Z0-9!@#$%^&*]{8,50}$/;
        var strength=0;
        var spanPasswordinvalid = document.getElementById('passwordinvalid');
        var spanPasswordinvalidminheight = document.getElementById('passwordinvalidminheight');
        var spanPasswordinvalidmaxheight = document.getElementById('passwordinvalidmaxheight');
        if(Passwordcheck.length < minNumberofChars){
            spanPasswordinvalidminheight.style.display="flex";
            
        }
        if(Passwordcheck.length > maxNumberofChars){
            spanPasswordinvalidmaxheight.style.display="flex";
            
        }    
        if (Passwordcheck.match(/[a-z]+/)){
            strength+=1;
        }
        if (Passwordcheck.match(/[A-Z]+/)){
            strength+=1;
        }
        if (Passwordcheck.match(/[0-9]+/)){
            strength+=1;
        }
        if (Passwordcheck.match(/[$@#&!%^*()<>?]+/)){
            strength+=1;

        }
        if (strength !== 4){
            spanPasswordinvalid.style.display="flex";
        }
        if (strength == 4){
            console.log("wesh6")
            return true
        }
        

        // if(Passwordcheck.length < minNumberofChars){
        //     spanPasswordinvalidminheight.style.display="flex";
        //     return false;
        // }
        // if(Passwordcheck.length > maxNumberofChars){
        //     spanPasswordinvalidmaxheight.style.display="flex";
        //     return false;
        // }
        else {
            return false;
        }
    }
    function CheckPassword(){
        var confirmPasswordcheck = document.getElementById('passwordconfirmsignup').value;
        var confirmInitialPasswordcheck = document.getElementById('passwordsignup').value;
        if(confirmPasswordcheck == confirmInitialPasswordcheck)
        {
           
            return true;
        }
        else
        {
            
            return false;
        }
    }
    function ValidateEmailstatus(){
        if (ValidateEmail() == true){
            var mailcheck2 = document.getElementById('mailsignup');
            var spanMailinvalid = document.getElementById('mailinvalid');
            mailcheck2.style.border= "none";
            spanMailinvalid.style.display= "none";
            console.log("bonjour1")
            return true
        }
        else{
            var mailcheck2 = document.getElementById('mailsignup');
            var spanMailinvalid = document.getElementById('mailinvalid');
            mailcheck2.style.border= "1px solid red";
            spanMailinvalid.style.display= "flex";
            console.log("bonjour")
            return false
        }
    }
    function ValidatePasswordstatus(){
        if (ValidatePassword() == true){
            var Passwordcheck2 = document.getElementById('passwordsignup');
            var spanPasswordinvalid = document.getElementById('passwordinvalid');
            var spanPasswordinvalidminheight = document.getElementById('passwordinvalidminheight');
            var spanPasswordinvalidmaxheight = document.getElementById('passwordinvalidmaxheight');
            Passwordcheck2.style.border= "none";
            spanPasswordinvalid.style.display="none";
            spanPasswordinvalidminheight.style.display="none";
            spanPasswordinvalidmaxheight.style.display="none";
            console.log("bonjour2")
            return true
        }
        else{
            var Passwordcheck2 = document.getElementById('passwordsignup');
            // var spanPasswordinvalid = document.getElementById('passwordinvalid');
            Passwordcheck2.style.border= "1px solid red";
            // spanPasswordinvalid.style.display="flex";
            console.log("bonjour")
            return false
        }
    }
    function CheckPasswordstatus(){
        if (CheckPassword() == true){
            var confirmPasswordcheck2 = document.getElementById('passwordconfirmsignup');
            var spanConfirmPasswordinvalid = document.getElementById('confirmPasswordinvalid');
            confirmPasswordcheck2.style.border= "none";
            spanConfirmPasswordinvalid.style.display="none";
            console.log("bonjour3")
            return true
        }
        else{
            var confirmPasswordcheck2 = document.getElementById('passwordconfirmsignup');
            var spanConfirmPasswordinvalid = document.getElementById('confirmPasswordinvalid');
            confirmPasswordcheck2.style.border= "1px solid red";
            spanConfirmPasswordinvalid.style.display="flex";
            return false
        }
    }

    // ValidateEmailstatus()
    // ValidatePasswordstatus()
    // CheckPasswordstatus()
    if (ValidateEmailstatus()==true && ValidatePasswordstatus()==true && CheckPasswordstatus()==true){
        console.log("bonjour4")
        return true;
    }
    else {
        return false;
    }
}
/*
    if (ValidateEmail() == true && ValidatePassword() == true && CheckPassword() == true) {
        var confirmPasswordcheck2 = document.getElementById('passwordconfirmsignup');
        var Passwordcheck2 = document.getElementById('passwordsignup');
        var spanConfirmPasswordinvalid = document.getElementById('confirmPasswordinvalid');
        var spanPasswordinvalid = document.getElementById('passwordinvalid');
        var mailcheck2 = document.getElementById('passwordsignup');
        var spanMailinvalid = document.getElementById('mailinvalid');
        confirmPasswordcheck2.style.border= "none";
        Passwordcheck2.style.border= "none";
        spanConfirmPasswordinvalid.style.display="none";
        spanPasswordinvalid.style.display="none";
        mailcheck2.style.border= "none";
        spanMailinvalid.style.display= "none";

    }
    if (ValidateEmail() == true && ValidatePassword() == true && CheckPassword() == false) {
        var confirmPasswordcheck2 = document.getElementById('passwordconfirmsignup');
        var Passwordcheck2 = document.getElementById('passwordsignup');
        var spanConfirmPasswordinvalid = document.getElementById('confirmPasswordinvalid');
        confirmPasswordcheck2.style.border= "1px solid red";
        Passwordcheck2.style.border= "1px solid red";
        spanConfirmPasswordinvalid.style.display="flex";
    }
    if (ValidateEmail() == true && ValidatePassword() == false && CheckPassword() == true) {
        var Passwordcheck2 = document.getElementById('passwordsignup');
        var spanPasswordinvalid = document.getElementById('passwordinvalid');
        Passwordcheck2.style.border= "1px solid red";
        spanPasswordinvalid.style.display="flex";
    }
    if (ValidateEmail() == true && ValidatePassword() == false && CheckPassword() == false) {
        var confirmPasswordcheck2 = document.getElementById('passwordconfirmsignup');
        var Passwordcheck2 = document.getElementById('passwordsignup');
        var spanConfirmPasswordinvalid = document.getElementById('confirmPasswordinvalid');
        var spanPasswordinvalid = document.getElementById('passwordinvalid');
        confirmPasswordcheck2.style.border= "1px solid red";
        Passwordcheck2.style.border= "1px solid red";
        spanConfirmPasswordinvalid.style.display="flex";
        spanPasswordinvalid.style.display="flex";
    }
    if (ValidateEmail() == false && ValidatePassword() == true && CheckPassword() == true) {
        var mailcheck2 = document.getElementById('mailsignup');
        var spanMailinvalid = document.getElementById('mailinvalid');
        mailcheck2.style.border= "1px solid red";
        spanMailinvalid.style.display= "flex";
    }
    if (ValidateEmail() == false && ValidatePassword() == false && CheckPassword() == true) {
        var Passwordcheck2 = document.getElementById('passwordsignup');
        var spanPasswordinvalid = document.getElementById('passwordinvalid');
        var mailcheck2 = document.getElementById('mailsignup');
        var spanMailinvalid = document.getElementById('mailinvalid');
        Passwordcheck2.style.border= "1px solid red";
        spanPasswordinvalid.style.display="flex";
        mailcheck2.style.border= "1px solid red";
        spanMailinvalid.style.display= "flex";
    }
    if (ValidateEmail() == false && ValidatePassword() == true && CheckPassword() == false) {
        var confirmPasswordcheck2 = document.getElementById('passwordconfirmsignup');
        var spanConfirmPasswordinvalid = document.getElementById('confirmPasswordinvalid');
        var mailcheck2 = document.getElementById('mailsignup');
        var spanMailinvalid = document.getElementById('mailinvalid');
        confirmPasswordcheck2.style.border= "1px solid red";
        spanConfirmPasswordinvalid.style.display="flex";
        mailcheck2.style.border= "1px solid red";
        spanMailinvalid.style.display= "flex";
    }
    else{
        var confirmPasswordcheck2 = document.getElementById('passwordconfirmsignup');
        var Passwordcheck2 = document.getElementById('passwordsignup');
        var spanConfirmPasswordinvalid = document.getElementById('confirmPasswordinvalid');
        var spanPasswordinvalid = document.getElementById('passwordinvalid');
        var mailcheck2 = document.getElementById('mailsignup');
        var spanMailinvalid = document.getElementById('mailinvalid');
        confirmPasswordcheck2.style.border= "1px solid red";
        Passwordcheck2.style.border= "1px solid red";
        spanConfirmPasswordinvalid.style.display="flex";
        spanPasswordinvalid.style.display="flex";  
        mailcheck2.style.border= "1px solid red";
        spanMailinvalid.style.display= "flex";      
    }
}
*/

/*
    function passwordinfos(){
        if(document.querySelector([type="password"]).value.length > 0){
            document.querySelector("passwordinfos").style.display = "block"
        }
    }
*/


/* 
   $(document).ready(function($) {
    $('#myPassword').strength_meter();

    $('#password').strength_meter({
    inputClass: 'c_strength_input',
    strengthMeterClass: 'c_strength_meter',
    toggleButtonClass: 'c_button_strength'
});

    $("#myThirdPassword").strength_meter({
    strengthMeterClass: 't_strength_meter'
});
});


;(function ( $, window, document, undefined ) {
    var upperCase = new RegExp('[A-Z]');
    var lowerCase = new RegExp('[a-z]');
    var numbers = new RegExp('[0-9]');

    $.widget( "namespace.strength_meter" , {

        //Options to be used as defaults
        options: {
            strengthWrapperClass: 'strength_wrapper',
            inputClass: 'strength_input',
            strengthMeterClass: 'strength_meter',
            toggleButtonClass: 'button_strength',

            showPasswordText: 'Show Password',
            hidePasswordText: 'Hide Password'
        },

        _create: function () {
            var
                options = this.options;

            //Note. Instead of this you can use templating. I did not want to have addition dependencies.
            this.element.addClass(options.strengthWrapperClass);
            this.element.append('<input type="password" class="' + options.inputClass + '" "/>');
            this.element.append('<input type="text" class="' + options.inputClass + '" style="display:flex"/>');
            this.element.append('<a href="" class="' + options.toggleButtonClass + '">' + options.showPasswordText + '</a>');
            this.element.append('<div class="' + options.strengthMeterClass + '"><div><p></p></div></div>');
            this.element.append(
                '<div class="pswd_info" style="display: flex;"> \
                <h4>Password must include:</h4> \
                <ul> \
                <li data-criterion="length" class="valid">8-20 <strong>Characters</strong></li> \
                <li data-criterion="capital" class="valid">At least <strong>one capital letter</strong></li> \
                <li data-criterion="number" class="valid">At least <strong>one number</strong></li> \
                <li data-criterion="letter" class="valid">No spaces</li> \
                </ul> \
                </div>');

            //this object contain all main inner elements which will be used in strength meter.
            this.content = {};

            this.content.$textInput = this.element.find('input[type="text"]');
            this.content.$passwordInput = this.element.find('input[type="password"]');
            this.content.$toggleButton = this.element.find('a');
            this.content.$pswdInfo = this.element.find('.pswd_info');
            this.content.$strengthMeter = this.element.find("." + options.strengthMeterClass);
            this.content.$dataMeter = this.content.$strengthMeter.find("div");

            this._sync_inputs(this.content.$passwordInput, this.content.$textInput);
            this._sync_inputs(this.content.$textInput, this.content.$passwordInput);

            this._bind_input_events(this.content.$passwordInput);
            this._bind_input_events(this.content.$textInput);

            var that = this;
            this.content.$toggleButton.bind("click", function(e){
                e.preventDefault();

                that._toggle_input(that.content.$textInput);
                that._toggle_input(that.content.$passwordInput);

                var text = that.content.$passwordInput.is(":visible") ? that.options.showPasswordText: that.options.hidePasswordText;
                $(event.target).text(text);
            });
        },

        //Toggle active inputs.
        _toggle_input: function($element){
            $element.toggle();

            if($element.is(":visible")){
                $element.focus();
            }
        },

        //Copy value from active input inside hidden.
        _sync_inputs: function($s, $t){
            $s.bind('keyup', function () {
                var password = $s.val();
                $t.val(password);
            });
        },

        _bind_input_events: function($s) {
            var that = this;
            $s.bind('keyup', function () {
                var password = $s.val();

                var characters = (password.length >= 8);
                var capitalletters = password.match(upperCase) ? 1 : 0;
                var loweletters = password.match(lowerCase) ? 1 : 0;
                var number = password.match(numbers) ? 1 : 0;
                var containWhiteSpace = password.indexOf(' ') >= 0 ? 1 : 0;

                var total = characters + capitalletters + loweletters + number;
                that._update_indicator(total);

                that._update_info('length', password.length >= 8 && password.length <= 20);
                that._update_info('capital', capitalletters);
                that._update_info('number', number);
                that._update_info('letter', !containWhiteSpace);
            }).focus(function () {
                that.content.$pswdInfo.show();
            }).blur(function () {
                that.content.$pswdInfo.hide();
            });
        },

        _update_indicator: function(total) {
            var meter = this.content.$dataMeter;

            meter.removeClass();
            if (total === 0) {
                meter.html('');
            } else if (total === 1) {
                meter.addClass('veryweak').html('<p>very weak</p>');
            } else if (total === 2) {
                meter.addClass('weak').html('<p>weak</p>');
            } else if (total === 3) {
                meter.addClass('medium').html('<p>medium</p>');
            } else {
                meter.addClass('strong').html('<p>strong</p>');
            }
        },

        _update_info: function(criterion, isValid) {
            var $passwordCriteria = this.element.find('li[data-criterion="' + criterion + '"]');

            if (isValid) {
                $passwordCriteria.removeClass('invalid').addClass('valid');
            } else {
                $passwordCriteria.removeClass('valid').addClass('invalid');
            }
        },

        // Destroy an instantiated plugin and clean up
        // modifications the widget has made to the DOM
        _destroy: function () {
            this.element
                .removeClass( this.options.strengthWrapperClass )
                .text( "" );
        },

        // Respond to any changes the user makes to the
        // option method
        _setOption: function ( key, value ) {
            switch (key) {
                case "someValue":
                    //this.options.someValue = doSomethingWith( value );
                    break;
                default:
                    //this.options[ key ] = value;
                    break;
            }
        }
    });

})( jQuery, window, document );

*/