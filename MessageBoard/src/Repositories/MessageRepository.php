<?php

namespace App\Repositories;

use Infra\Database;

class MessageRepository
{
    protected $db;

    public function __construct()
    {
        $this->db = Database::getPDO();
    }

    function getMessages()
    {
        $query = $this->db->query("select * from messages");
        return $query->fetchAll();
    }

    function create($title, $content)
    {
        $statement = $this->db->prepare("insert into messages (title, content) value (:title, :content)");
        $statement->bindParam(":title", $title);
        $statement->bindParam(":content", $content);

        $execute = $statement->execute();
        if (!$execute) {
            var_dump($statement->errorInfo());
        }
        return true;
    }

    function delete($id)
    {
        $statement = $this->db->prepare("DELETE FROM `messages` WHERE `messages`.`id` = :id");
        $statement->bindParam(":id", $id);

        $execute = $statement->execute();
        if (!$execute) {
            var_dump($statement->errorInfo());
        }
        return true;
    }
}
