<?php

namespace App\Models;

use App\Core\baseModel;

class Question extends baseModel
{
    private $id;
    private $question;
    private $answer;
    private $user;
    protected $table = 'questions';

    public function __construct(?array $question = null)
    {
        if (is_array($question)) {
            $this->id = $question['id'];
            $this->question = $question['question'];
            $this->answer = $question['answer'];
            $this->user = $question['user'];
        }

        parent::__construct($this->table);
    }

    public function save()
    {
        $query = "INSERT INTO {$this->table} (question, answer, user) VALUES (:question, :answer, :user)";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':question', $this->question);
        $stmt->bindParam(':answer', $this->answer);
        $stmt->bindParam(':user', $this->user);

        return $stmt->execute();
    }

    public function update()
    {
        $query = "UPDATE {$this->table} SET question = :question, answer = :answer, user = :user WHERE id = :id";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':question', $this->question);
        $stmt->bindParam(':answer', $this->answer);
        $stmt->bindParam(':user', $this->user);

        return $stmt->execute();
    }
}
