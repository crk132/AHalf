<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/17
 * Time: 16:33
*/

namespace app\index\controller;

use think\Controller;
use think\Request;


class Makedouble extends Controller
{
    public function index()
    {
        return View('makeDouble');
    }
    public function upload(){
        if(Request::instance()->isPost()){
            $base64 = input('post.uploadImg');
            $img1 = base64_decode($base64);
            $res = ROOT_PATH .'public\uploads\single\\'.date('Ymd');
            if (!file_exists($res)){ mkdir ($res);}
                $a = file_put_contents($res.'\\'.time().rand(1,100).'.jpg', $img1);//���ص����ֽ���
            print_r($a);
        }


//        // ��ȡ���ϴ��ļ� �����ϴ���001.jpg
//        $file = request()->file('image');
//        // �ƶ������Ӧ�ø�Ŀ¼/public/uploads/ Ŀ¼��
//        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
//        if($info){
//            // �ɹ��ϴ��� ��ȡ�ϴ���Ϣ
//            // ��� jpg
//            echo $info->getExtension();
//            // ��� 20160820/42a79759f284b767dfcb2a0197904287.jpg
//            echo $info->getSaveName();
//            // ��� 42a79759f284b767dfcb2a0197904287.jpg
//            echo $info->getFilename();
//        }else{
//            // �ϴ�ʧ�ܻ�ȡ������Ϣ
//            echo $file->getError();
//        }
    }
    public function combine(){
        if(Request::instance()->isPost()){
            $base64 = input('post.uploadImg');
            $img1 = base64_decode($base64);
            $res = ROOT_PATH .'public\uploads\double\\'.date('Ymd');
            if (!file_exists($res)){ mkdir ($res);}
            $a = file_put_contents($res.'\\'.time().rand(1,100).'.jpg', $img1);//���ص����ֽ���
            print_r($a);
        }
    }
}
