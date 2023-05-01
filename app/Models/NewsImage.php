<?php

namespace App\Models;

use App\Core\baseModel;

class NewsImage extends baseModel
{
    private $id_new_image;
    private $url;
    private $id_new;
    private $table = 'news_image';

    public function __construct(array $news_image = null)
    {
        if (is_array($news_image)) {
            $this->id_new_image = $news_image['id_new_image'];
            $this->url = $news_image['url'];
            $this->id_new = $news_image['id_new'];
        }

        parent::__construct($this->table);
    }

    public function save()
    {
        $query = "INSERT INTO {$this->table} (url, id_new) VALUES (:url, :id_new)";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':url', $this->url);
        $stmt->bindParam(':id_new', $this->id_new);

        return $stmt->execute();
    }

    public function update()
    {
        $query = "UPDATE {$this->table} SET url = :url, id_new = :id_new  WHERE id_new_image = :id_new_image";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':id_new_image', $this->id_new_image);
        $stmt->bindParam(':url', $this->url);
        $stmt->bindParam(':id_new', $this->id_new);

        return $stmt->execute();
    }
}
