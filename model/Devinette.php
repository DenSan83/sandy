<?php


class Devinette
{
    private $id;
    private $name;
    private $question;
    private $answer;
    private $createdAt;

    public function getId() { return $this->id; }
    public function getName() { return $this->name; }
    public function getQuestion() { return $this->question; }
    public function getAnswer() { return $this->answer; }
    public function getCreatedAt() { return $this->createdAt; }

    public function setId($id)
    {
      $this->id = $id;
    }

    public function setName($name)
    {
      $this->name = $name;
    }

    public function setQuestion($question)
    {
      $this->question = $question;
    }

    public function setAnswer($answer)
    {
      $this->answer = $answer;
    }

    public function setCreatedAt($createdAt)
    {
      $this->createdAt = $createdAt;
    }
}
