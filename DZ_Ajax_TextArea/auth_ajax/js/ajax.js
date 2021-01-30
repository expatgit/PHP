'use strict';


let form = document.querySelector('form');

/*

function responseHandler(serverAnswer) {
    console.log(serverAnswer);
}
*/


function responseHandler(serverAnswer) {
    ;
}


form.addEventListener('submit', (event) => {
    event.preventDefault();
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'page.php', true);
    let fd = new FormData(form);
    // передача данных в теле сообщения
    xhr.send(fd); // FormData, строка, объект {key: value}, blob
    xhr.onload = function () {
        if (xhr.status === 200) {

            let div = document.createElement('div');
            div.innerText = fd.get('comment');
            document.body.append(div);
            alert('Ответ сервера получен');
        }
        else {
            alert('Error 404: NOt Found');
        }
    };
});


