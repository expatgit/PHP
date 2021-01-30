"use strict";

let p = document.querySelector('p');
let form = document.querySelector('form');

function responseHandler(serverAnswer) {
    console.log(serverAnswer);
}

// XMLHttpRequest и fetch() - нативный js
// jquery и axios - библиотеки js используют (XMLHttpRequest)

// XMLHttpRequest встроенный объект, который дает возможность
// отправлять ajax запросы
// может быть выбран, если:
// есть необходимость в функционале, который не предоставляет fetch
// если XMLHttpRequest уже используется в проекте

// fetch - функция, которая дает возможность отправлять ajax запросы

// get запрос и XMLHttpRequest
p.addEventListener('click', ()=>{
    // используется, если необходимо закодировать параметры
    let url = new URL('http://php/lesson7/handler.php');
    url.searchParams.set('page', '1');
    url.searchParams.set('value', '20 20');

    let xhr = new XMLHttpRequest(); // создание объекта запроса
    xhr.open('GET', 'handler.php?page=1&value=20', true); // конфигурация запроса
    // xhr.open('GET', url, true);
    // указание типа ответа:
    // blob, document - XML документ, json - распарсится автоматически
    xhr.responseType = 'text';
    // передача заголовков xhr.setRequestHeader('название', 'значение');
    xhr.send(); // соединение с сервером, отправка запроса
    // когда придет ответ от сервера сработает событие load,
    // будет вызвана функция обработчик
    xhr.onload = function () {
        if (xhr.status === 200) {
            responseHandler(xhr.responseText);
        }
    };
    // данная функция сработает, если запрос выполнить не удалось
    xhr.onerror = function () {
        console.log('ошибка');
    };
    xhr.onprogress = function (event) {
        // event.loaded - количество загруженных байт
        // event.total - всего байт (можно узнать, только, если сервер
        // передает заголовок Content-Length, при этом
        // event.lengthComputable будет в значении true
        console.log(event.total, event.loaded);
    }
});

form.addEventListener('submit', (event) => {
    event.preventDefault();
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'handler.php', true);
    let fd = new FormData(form);
    // передача данных в теле сообщения
    xhr.send(fd); // FormData, строка, объект {key: value}, blob
    xhr.onload = function () {
        if (xhr.status === 200) {
            responseHandler(xhr.responseText);
        }
    };
});
// запрос и fetch
/*
p.addEventListener('click', async ()=>{
    // await заствляет интерпретатор ждать, пока fetch не отработает
    const response = await fetch('handler.php?page=1&value=20',
        {
            method: 'GET',
            // headers: {имя: значение}
        });
    const answer = await response.text(); // .json() / .blob() / .formData()
    responseHandler(answer);
});

form.addEventListener('submit', async (event)=>{
    event.preventDefault();
    const response = await fetch('handler.php',
        {
            method: 'POST',
            body: new FormData(form)
        });
    const answer = await response.text();
    responseHandler(answer);
});

p.addEventListener('click', ()=>{
    fetch('handler.php?page=1&value=20', {method: 'GET'})
        .then(response => response.text())
        .then(text => console.log(text));
});*/
