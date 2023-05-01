<?php

namespace App\Models;

use App\Core\baseModel;

class News extends baseModel
{
    private $id_new;
    private $title_new;
    private $author_new;
    private $content_new;
    private $date_new;
    private $id_event;
    protected $table = 'news';

    public function __construct(array $news = null)
    {
        if (is_array($news)) {
            $this->id_new = $news['id_new'];
            $this->title_new = $news['title_new'];
            $this->author_new = $news['author_new'];
            $this->content_new = $news['content_new'];
            $this->date_new = $news['date_new'];
            $this->id_event = $news['id_event'];
        }

        parent::__construct($this->table);
    }

    public function save()
    {
        $query = "INSERT INTO {$this->table} (title_new, author_new, content_new, date_new, id_event) VALUES (:title_new, :author_new, :content_new, :date_new, :id_event)";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':title_new', $this->title_new);
        $stmt->bindParam(':author_new', $this->author_new);
        $stmt->bindParam(':content_new', $this->content_new);
        $stmt->bindParam(':date_new', $this->date_new);
        $stmt->bindParam(':id_event', $this->id_event);

        return $stmt->execute();
    }

    public function update()
    {
        $query = "UPDATE {$this->table} SET title_new = :title_new, author_new = :author_new, content_new = :content_new, date_new = :date_new, id_event = :id_event  WHERE id_new = :id_new";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':id_new', $this->id_new);
        $stmt->bindParam(':title_new', $this->title_new);
        $stmt->bindParam(':author_new', $this->author_new);
        $stmt->bindParam(':content_new', $this->content_new);
        $stmt->bindParam(':date_new', $this->date_new);
        $stmt->bindParam(':id_event', $this->id_event);

        return $stmt->execute();
    }
}
