<?php

/*   *   *   *   *   *   *   *   *   *   *   *   *   *   *   *   *   *   *   *   */
/*  FUNKCJE WSPÓLNE  
*/

//  funkcja podmiay znaków na HTML Entities
function e(string $text) {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}


/*   *   *   *   *   *   *   *   *   *   *   *   *   *   *   *   *   *   *   *   */
/*  FUNKCJE ADMINISTRATORSKIE
*/

//  funkcja dodająca stronę
function addPage($arr, $db) {

    //  sprawdzenie zawartości formularza
    if(!empty($arr['form-label']) && !empty($arr['form-title']) && !empty($arr['form-body'])) {

        //  zabezpieczenie danych
        $label  =   e($arr['form-label']);
        $title  =   e($arr['form-title']);
        $body   =   e($arr['form-body']);

        //  włożenie danych do bazy danych
        $insert = $db->prepare('INSERT INTO pages VALUES(null, :label, :title, :body, null, null)');
        $insert->execute([
            'label' =>  $label,
            'title' =>  $title,
            'body'  =>  $body,
        ]);
    }
}

//  funkcja pozwalająca na edycję strony
function editPage($arr, $db) {

    //  sprawdzenie zawartości formularza
    if(!empty($arr['form-label']) && !empty($arr['form-title']) && !empty($arr['form-body'])) {

        //  zabezpieczenie danych
        $label  =   e($arr['form-label']);
        $title  =   e($arr['form-title']);
        $body   =   e($arr['form-body']);
        $id     =   e($arr['form-id']);

        //  włożenie danych do bazy danych
        $insert = $db->prepare('UPDATE pages SET label = :label, title = :title, body = :body, edited = NOW() WHERE id = :id');
        $insert->execute([
            'label' =>  $label,
            'title' =>  $title,
            'body'  =>  $body,
            'id'    =>  $id,
        ]);
    }
}


//  funkcja usuwa stronę
function deletePage($arr, $db) {

    //  sprawdzenie zawartości formularza
    if(!empty($arr['form-id'])) {

        //  zabezpieczenie danych
        $id = e($arr['form-id']);

        //  włożenie danych do bazy danych
        $insert = $db->prepare('DELETE FROM pages WHERE id = :id');
        $insert->execute(['id' => $id,]);
    }
}

?>