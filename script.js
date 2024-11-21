var modal2 = document.getElementById("myModal2");
var modal3 = document.getElementById("myModal3");

// Кнопки открытия модальных окон
var link2 = document.getElementById("openModal2");
var link3 = document.getElementById("openModal3");

// Крестики закрытия модальных окон
var span2 = modal2.getElementsByClassName("close")[0];
var span3 = modal3.getElementsByClassName("close")[0];

// Открытие модального окна входа
link2.onclick = function (event) {
    event.preventDefault();
    modal2.style.display = "block";
};

// Открытие модального окна регистрации
link3.onclick = function (event) {
    event.preventDefault();
    modal3.style.display = "block";
};

// Закрытие окна входа через крестик
span2.onclick = function () {
    modal2.style.display = "none";
};

// Закрытие окна регистрации через крестик
span3.onclick = function () {
    modal3.style.display = "none";
};

// Закрытие окон при клике вне них
window.onclick = function (event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    } else if (event.target == modal3) {
        modal3.style.display = "none";
    }
};


//AJAX фигня
$(document).ready(function() {
    $('#loginform').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'login2.php',
            data: $(this).serialize(),
            success: function(response)
            {   
                var jsonData = JSON.parse(response);
// user is logged in successfully in the back-end 
// let's redirect 
                if (jsonData.success == "1")
                {
                    location.href = 'html.php';
                }
                else
                {
                    alert('Неправильно введённое значение!');
                }
            }
        });
    });
});