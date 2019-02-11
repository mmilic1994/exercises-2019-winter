<?php

class Comment
{
    public $author = null;
    public $text = null;
    public $created_at = null;

    public function fillFromArray($array)
    {
        $this->author = $array['author'];
        $this->text = $array['text'];

        if (isset($array['created_at'])) {
            $this->created_at = $array['created_at'];
        }
    }

    public function save()
    {
        $this->created_at = date('Y-m-d H:i:s');

        // transform this object to an array and insert it into DB
        insert((array)$this);
    }

    public function getCreatedAt($format = 'Y-m-d H:i:s')
    {
        return date($format, strtotime($this->created_at));
    }
}