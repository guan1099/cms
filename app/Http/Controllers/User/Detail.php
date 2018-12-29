<?php
    namespace App\Http\Controllers\User;
    use Illuminate\Routing\Controller;
    use App\Model\User\UserModel;
    class Detail extends Controller{
        public function index($id){
            echo __METHOD__;
            $info=UserModel::where(['admin_id'=>$id])->first()->toArray();
            echo '<pre>';print_r($info);
        }
    }
?>