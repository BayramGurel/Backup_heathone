<?php


function getCategory(int $id):array
{
    global $pdo;
    $category = $pdo->query('SELECT * FROM category where id=' . $id)->fetchAll(PDO::FETCH_CLASS, 'Category');
    return $category;
}

?>