<?php

class TypeController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	//public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
  public function accessRules()
    {
        /**
         * Specifies the user type rules.
         * customer>=1
         * agent>=2
         * employee>=3
         * admin>=4
         */
        $users=Yii::app()->db->createCommand('SELECT username FROM user WHERE type_id>=3 ')->queryAll();
        foreach ($users as $key => $value) {
          $users[$key] = array_shift($value);
        }
        
        return array(
        		array('allow',  // allow all users to perform 'index' and 'view' actions
        				'actions'=>array('index','view'),
        				'users'=>array('*'),
        		),
            array('allow',  // allow all users to perform 'index' and 'view' actions
                'actions'=>array('admin','update','delete','create'),
                'users'=>$users,
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }
	

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
			$model = Type::model ()->findByPK ( $id );
			$menu=new Menu();
			$dataProvider=new CActiveDataProvider('Menu');
			
			$this->render('view',array(
			'model'=>$this->loadModel($id),
				'menu'=>$menu,
				'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Type;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Type']))
		{
			$model->attributes=$_POST['Type'];
			if($model->save())
				$this->redirect(array('admin'));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Type']))
		{
			$model->attributes=$_POST['Type'];
			if($model->save())
				$this->redirect(array('admin'));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new Type('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Type']))
			$model->attributes=$_GET['Type'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Type('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Type']))
			$model->attributes=$_GET['Type'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Type the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Type::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Type $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='type-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
