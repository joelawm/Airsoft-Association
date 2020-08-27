<?php

class Entry
{
	private $id;
	private $date;
	private $author;
	private $title;
	private $excerpt;
	private $content;
	private $dbh;

	public function __construct()
	{
		$this->dbh = new PDO("mysql:dbname=blog_tut;host=localhost;", 'root', '')
	}

	public function createNew()
	{

	}

	public function createNewFromPost()
	{
	}

	public function setByParams($id, $date, $author, $title, $excerpt)
	{

	}

	public function setByRow($row)
	{
		$this->setByParams($row['id'],$row['post_date'],$row['post_author'],$row['post_exerpt'],$row['post_title'],$row['post_content'])
	}

	public function SqlInsertEntry()
	{

	}

	public function SqlSelectEntryId($id)
	{

	}

	public function SqlUpdateEntryId($id)
	{

	}

	private function validateString()
	{

	}

	public function getId()
	{
		return $this->id;
	}
}
?>
