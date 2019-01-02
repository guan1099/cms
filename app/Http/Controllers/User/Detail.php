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
        public function add(){
            $data=[
                'book_name'=>str_random(5),
                'book_author'=>str_random(3),
                'book_price'=>150
            ];
            $res=UserModel::insert($data);
            dump($res);
        }
        public function delete($id){
            $where=[
                'id'=>$id
            ];
            $res=UserModel::where($where)->delete();
            print_r($res);
        }
        public function update($id){
            $where=[
                'id'=>$id
            ];
            $data=[
                'book_name'=>str_random(5),
                'book_author'=>str_random(3),
                'book_price'=>150
            ];
            $res=UserModel::where($where)->update($data);
            dump($res);
        }
        public function userList(){
            $list=UserModel::all();
            $data=[
                'list'=>$list,
                'page'=>10000
            ];
            return view('user.userList',$data);
        }
    }
?>