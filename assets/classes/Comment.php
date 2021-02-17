<?php

/**
 * class Comment
 * post scritti dagli utenti abilitati "writer"
 * @author Antonio Quattrocchi
 * @copyright 2021 A.Q.
 */

class Comment {
  public $postId;
  public $accountId;
  public $commentId;
  public $body;
  public $createdDate;

  public function __construct(string $postId, string $accountId, string $commentId, string $body,  $createdDate){

    $this->postId = $postId;
    $this->accountId = $accountId;
    $this->commentId = $commentId;
    $this->body = $body;
    $this->createdDate = $createdDate;
  }
}