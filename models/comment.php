<?php
require_once('database.php');
// -----function comment-----
function create_comment($content,$user_id,$post_id){
    global $db;
    $statement = $db->prepare('INSERT INTO comments (content,user_id,post_id) values(:content,:user_id,:post_id)');
    $statement->execute([
        ':content' => $content,
        ':user_id' => $user_id,
        ':post_id' => $post_id
    ]);
    return $statement->rowcount()>0;
}

// get comment
function get_comment_post($post_id){
    global $db;
    $statement=$db->prepare("SELECT * FROM comments WHERE post_id=:post_id");
    $statement->execute([
        ':post_id' => $post_id
    ]);
    return $statement->fetchAll();

    
}

function delete_comment($comment_id)
{
    global $db;
    $statement = $db->prepare('DELETE FROM comments WHERE comment_id = :comment_id');
    $statement->execute([
        ':comment_id' => $comment_id
    ]);
    return $statement->rowCount() > 0;
}

function get_comment_by_id($id){
    global $db;
    $statement =$db->prepare("SELECT * FROM comments WHERE comment_id = :comment_id ORDER BY comment_id");
    $statement->execute([
        ':comment_id'=>$id,
    ]);
    return $statement->fetch();
}

function update_comment($content,$comment_id){
    global $db;
    $statement=$db ->prepare("UPDATE comments SET content=:content where comment_id = :comment_id");
    $statement->execute([
        ':content'=>$content,
        ':comment_id' => $comment_id
    ]);
    return $statement->rowcount()>0;
}