<?php
#Copyright (c) 2017 Rafal Marguzewicz pceuropa.net
namespace pceuropa\email;
use Yii;
use yii\validators\EmailValidator;


class Send extends \yii\base\Widget{
    
    public $from = null;
    public $to = null;
    public $subject = null;
    public $textBody = null;

    public function init() {
        parent::init();
        if ($this->to === null) {
            Yii::$app->session->setFlash('error', 'Please set recipient\'s email');
        }
    }
    
    public function run() {
        $validator = new \yii\validators\EmailValidator();
        
	   	if ( $this->to && $validator->validate($this->to) ){
		    
		    $message = Yii::$app->mailer->compose()
				->setFrom($this->from)
				->setTo($this->to)
				->setSubject($this->subject)
				->setTextBody($this->textBody);
			
			$message->send();
		}
    
	}
}

?>
