<?php

class BlogPost
{
    public $id = null;
    public $headline = null;
    public $text = null;
    public $added_at = null;
    public $user_id = null;
    public $status = 'not-published';

    public function __construct($user_id, $headline = null)
    {
        $this->added_at = date('Y-m-d');

        $this->user_id = $user_id;

        $this->headline = $headline;

        global $all_posts;
        $all_posts[] = $this;

        global $total_posts;
        $total_posts++;
    }

    public function publish()
    {
        $this->status = 'published';
    }

    public function __destruct()
    {
        global $total_posts;
        $total_posts--;
    }
}