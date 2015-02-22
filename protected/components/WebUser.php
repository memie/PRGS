<?php

class WebUser extends CWebUser {
	private $_model;
		
			/* function isCustomer(){
			$user = $this->loadUser(Yii::app()->user->id);
			return intval($user->type_id) >= 1;
			} */
			function isEmployee(){
			$user = $this->loadUser(Yii::app()->user->id);
			return intval($user->type_id) >= 3;
			}
			function isAdmin(){
			$user = $this->loadUser(Yii::app()->user->id);
			return intval($user->type_id) >= 4;
			}


	protected function loadUser($id=null)
	{
		if($this->_model===null)
		{
			if($id!==null):
			$this->_model=User::model()->findByPk($id);
			else:
			$this->_model->user_type_id=0;
			endif;
		}
		return $this->_model;
	}
	}
	?>
