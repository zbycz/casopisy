<?php

class CommentModel extends Nette\Object {
      
    protected $tComment;       

    public function __construct(\SystemContainer $context) {

        $this->tComment =  'komentare';        
    }

    public function addComment($values){
		dibi::query("INSERT $this->tComment",array(
			"cislo_id" => $values['cislo_id'],
			"strana" => $values['strana'],
			"user_id" => $values['user_id'],
			"time%sql" => "now()",
			"text" => $values['message'],
		));       
    }


    public function getCommentsByNumber($cislo) {
        return dibi::query("SELECT comment.*,u.name FROM $this->tComment AS comment LEFT JOIN user u ON user_id = u.id WHERE cislo_id = %i AND del=0 ORDER BY time",$cislo)->fetchAssoc('strana|id');        
    }
    
    public function getComments($cislo,$page) {
        return dibi::fetchAll("SELECT comment.*,u.name FROM $this->tComment AS comment LEFT JOIN user u ON user_id = u.id WHERE cislo_id = %i && strana = %i AND del=0 ORDER BY time",$cislo,$page);        
    }
    
    public function getComment($commentId){
        return dibi::query("SELECT * FROM $this->tComment k WHERE k.id = %i",$commentId)->fetch();
    }
    
    public function getCommentOwner($commentId){
        return dibi::query("SELECT user_id FROM komentare WHERE komentare.id = %i",$commentId)->fetchSingle();
    }
    
    public function isOwner($commentId,$userId){
        return ($this->getCommentOwner($commentId) === $userId) ? true : false;
    }

    public function delete($id)	{
		dibi::query("UPDATE $this->tComment SET del=1 WHERE id = %i",$id);
	}    

   
    
}
