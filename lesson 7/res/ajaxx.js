'use strict';

let p = document.querySelector('p');
let form = document.querySelector('form');

function responseHandler(serverAnswer) {
    console.log(serverAnswer);
}




// get запрос и XMLHttpRequest
/*
p.addEventListener('click', () => {
    let url = new URL('http://PHP/lesson7/handler.php')
    url.searchParams.set('page', '1');
    url.searchParams.set('value', '20 20');
    let xhr = new XMLHttpRequest(); // Создание объекта запроса
    xhr.open('GET', 'handler.php?page=1&value=20', true); // конфигурация запроса
    // или
    //xhr.open('GET', url, true); // конфигурация запроса
    xhr.responseType = 'text'; // указание типа ответа (blob, document - XML документ, json - распарсится автоматически)
    // передача заголовков xhr.setRequestHeader('название', 'значение');
    xhr.send(); //соединение с сервром, отправка запроса
    // когда придет ответ от сервера сработает событие Load, будет вызвана функция-обработчик события
    xhr.onload = function () {
        if (xhr.status === 200) {
            responseHandler(xhr.responseText);
        }
    };
    xhr.onerror = function () {//если не load не доступен, сработает обработчик errow
        console.log('ошибка');
    };
    xhr.onprogress = function (event){
        // event.loaded - количество загруженных байт (на данный момент)
        // event.total -  общее количество загруженных байт (если сервер передает заголовок Content-Length) - event.LengthComputable дб в значении true
        console.log(event.total, event.loaded);
    }
});
form.addEventListener('submit', (event) => {
    event.preventDefault();
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'handler.php', true);
    //данные формы нужно поместить в атрибут метода send
    let fd = new FormData(form);
    xhr.send(fd);//FormData, строка, объект{key: value}, blob
    xhr.onload = function () {
        if (xhr.status === 200) {
            responseHandler(xhr.responseText);
        }
    };
});*/


// запрос и fetch
form.addEventListener('click', async (event)=> { //p.addEventListener()
    event.preventDefault();
    // await заставляет интерпретатор ждать, пока fetch не отработает
    const response = await fetch('handler.php',
        {
            method: 'POST',
            body: new FormData(form)

            //headers: {имя: значение}
        });
    const answer = await response.text(); // .json() / .blob() / .formData();
    responseHandler(answer);

});

p.addEventListener('click', () => {
    fetch('handler.php?page=1&value=20', {
        method: 'GET'
    }).then(response => response.text())
        .then(text => console.log(text);
});