<?php

class UserController extends Controller {

    public function actionIndex() {
        $this->render('index');
    }

    public function loginWithFacebook() {
        //$attr = StringHelper::filterArrayString($_POST);
    }

    public function register() {
        $attr = StringHelper::filterArrayString($_POST);
        $result = User::model()->register($attr);
        switch ($result) {
            case 'USER_EXIST':
                ResponseHelper::JsonReturnError('', 'user exist');
                break;
            case 'SERVER_ERROR':
                ResponseHelper::JsonReturnError('', 'server error');
                break;
            case 'SUCCESS':
                ResponseHelper::JsonReturnSuccess('', 'success');
                break;
        }
    }

    public function login() {
        
    }

    // Uncomment the following methods and override them if needed
    /*
      public function filters()
      {
      // return the filter configuration for this controller, e.g.:
      return array(
      'inlineFilterName',
      array(
      'class'=>'path.to.FilterClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }

      public function actions()
      {
      // return external action classes, e.g.:
      return array(
      'action1'=>'path.to.ActionClass',
      'action2'=>array(
      'class'=>'path.to.AnotherActionClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }
     */
}
