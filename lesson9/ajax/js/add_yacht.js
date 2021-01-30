'use strict';

let form = document.querySelector('form');
let answer = document.querySelector('#answer');

function responseHandler(serverAnswer) {
    console.log(serverAnswer);
}

form.addEventListener('submit', async (event)=> {
    event.preventDefault();
    const response = await fetch('handler.php', {
        method: 'POST',
        body: new FormData(form)
    });
    const answer = await response.json();
    responseHandler(answer)

})


function  responseHandler(serverAnswer) {
    console.log(serverAnswer);
    if (serverAnswer['answer_state'] === 'error'){
        answer.innerText = serverAnswer['reason'];
    } else if (serverAnswer['answer_state'] === 'succsess') {
        answer.innerText = serverAnswer['reason'] + '. Можно продолжить добавление';
    } else {
        console.log(serverAnswer['reason']);
    }


}