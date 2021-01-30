<?php
// валидация

function is_valid($post){
    return $post['count'] > 3 && $post['price'] > 100000;
}


// сохранение данных
// unserialize();
function is_saved($data){
    return file_put_contents('yacht.txt', serialize($data));
}

// загрузка файла

function is_loaded(){
    $files = $_FILES;
    if (!is_dir('img')) mkdir('img');
    return move_uploaded_file($files['yacht-img']['tmp_name'], 'img' . $filex['yacht-img']['name'];


}

// формирование ответа

function answer (){
    $post = $_POST;
    if (!is_valid($post)) {
        $answer = [
            'answer_state' => 'error',
            'reason' => 'Ошибка валидации'
        ];
    } else if (!is_saved($post)) {
        $answer = [
            'answer_state' => 'error',
            'reason' => 'Ошибка сохранения'
        ];
    } else if (!is_loaded()) {
        $answer = [
            'answer_state' => 'error',
            'reason' => 'Ошибка загрузки файла'
        ]；
    } else {
        $answer = [
            'answer_state' => 'success',
            'reason' => 'Данные успешно сохранены'
        ];
    }
    // json_decode()
    return json_encode($answer);
;}

echo answer();
