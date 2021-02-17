<?php

/**
 * class Post
 * post scritti dagli utenti abilitati "writer"
 * @author Antonio Quattrocchi
 * @copyright 2021 A.Q.
 */

class Post {
  public $postId;
  public $title;
  public $body;
  public $img;
  public $genre;
  public $tag;
  public $accountId;
  public $createdDate;

  public function __construct(string $postId, string $title, string $body, string $img, array $genre, array $tag, string $accountId, $createdDate){

    $this->postId = $postId;
    $this->title = $title;
    $this->body = $body;
    $this->img = $img;
    $this->genre = $genre;
    $this->tag = $tag;
    $this->accountId = $accountId;
    $this->createdDate = $createdDate;
  }
}