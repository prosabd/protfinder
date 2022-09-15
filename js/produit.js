const button = document.querySelector(".addtocart");
const done = document.querySelector(".addedItem");
var added = true;
button.addEventListener('click', () => {
    if (added) {
        done.style.transform = "translate(0px) skew(0deg)";
        done.style.borderRadius = "50px";
        added = true;
    } else {
        done.style.transform = "translate(-110%) skew(0deg)";
        added = true;
    }

}, 10);

console.log(button);

function mouseOut() {
    setTimeout(function(mouseOut){
        done.style.transform = "translate(-110%) skew(0deg)";
        console.log("Hello World Added");
    }, 400);
    

}

function myFunction(buttonaddtocartlink) {
    document.getElementById("buttonaddtocartlink").onclick="window.location.href='inscription.php'"
    }



function addproduit()
{

    $.ajax({
        url: "addproduit.php",
        context: document.body
    }).done(function() {
        console.log("yo")
    });
    return false;
}

//
// $(document).ready(function(){
//     $('#addtocart').on('click',function(){
//
//         var button = $(this);
//         var cart = $('#cart');
//         var cartTotal = cart.attr('data-totalitems');
//         var newCartTotal = parseInt(cartTotal) + 1;
//
//         button.addClass('sendtocart');
//         setTimeout(function(){
//             button.removeClass('sendtocart');
//             cart.addClass('shake').attr('data-totalitems', newCartTotal);
//             setTimeout(function(){
//                 cart.removeClass('shake');
//             },500)
//         },1000)
//     })
// })
//
//

/*
button.addEventListener("mouseenter", function( event ) {
    // on met l'accent sur la cible de mouseenter
    button.style.transform = "scale(1.1)";

    
}, false);*/

// Ce gestionnaire sera exécuté à chaque fois que le curseur
// se déplacera sur un autre élément de la liste

// console.log(button);
//
// function myFunction() {
//     var dots = document.getElementById("categorieproduit");
//     var moreText = document.getElementById("more");
//     var btnText = document.getElementById("myBtn");
//
//     if (dots.style.display === "none") {
//         dots.style.display = "inline";
//         btnText.innerHTML = "Read more";
//         moreText.style.display = "none";
//     } else {
//         dots.style.display = "none";
//         btnText.innerHTML = "Read less";
//         moreText.style.display = "inline";
//     }
// }
//
// console.log(dots);
// console.log(moreText);
// console.log(btnText);
