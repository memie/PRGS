<?php

class ReviewController extends Controller
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
        
         * employee>=3
         * admin>=4
         */
        $users=Yii::app()->db->createCommand('SELECT username FROM user WHERE type_id>=3 ')->queryAll();
        foreach ($users as $key => $value) {
          $users[$key] = array_shift($value);
        }
        
        return array(
        		array('allow',  // allow all users to perform 'index' and 'view' actions
        				'actions'=>array('create','index','view',),
        				'users'=>array('*'),
        		),
            array('allow',  // allow all users to perform 'index' and 'view' actions
                'actions'=>array('admin','update','delete',),
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
		$model = Review::model ()->findByPK ( $id );
	
		$comment=new Comment();
	
		$dataProvider=new CActiveDataProvider('Comment');
	
		if(isset($_POST['Comment']))
		{
			$comment->attributes=$_POST['Comment'];
		
			$comment->review_id=$model->id;
			$comment->date_time = date('Y.m.d H.i.s');
		
			$valid = $model->validate ();
			$valid = $comment->validate () && $valid;
			if($valid){
			if($comment->save(false))
				
				$this->redirect ( array (
						'index'
				) );
				
		}}
		$this->render('view',array(
				'model'=>$this->loadModel($id),
				'comment'=>$comment,
				'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	
	
	public function actionCreate()
	{
	
			$model=new Review;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Review']))
		{
			$model->attributes=$_POST['Review'];
			
			$valid = $model->validate ();

			$model->post_date = date('Y.m.d H.i.s');
			if ($image = CUploadedFile::getInstance ( $model, 'image' )) {
				// path for file upload
				$path = Yii::getPathOfAlias ( 'webroot' ) . '/picture/';
				// use image name as username
				$filename = $model->post_date . '_img' . '.' . $image->getExtensionName ();
				// uploaded image to path
				$image->saveAs ( $path . $filename );
			} else
				// this for no image file upload
				$filename = 'noimage.jpg';
			// set another user attribute
			$model->image = $filename;
			$model->id = $model->id;
			if($valid){
				if($model->save())
					$this->redirect(array('view','id'=>$model->id));
			}
		}
	
		$this->render('create',array(
				'model'=>$model,
					
		));}

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

		if(isset($_POST['Review']))
		{
			$model->attributes=$_POST['Review'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
			$model=new Review('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Review']))
			$model->attributes=$_GET['Review'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Review('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Review']))
			$model->attributes=$_GET['Review'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Review the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Review::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Review $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='review-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
