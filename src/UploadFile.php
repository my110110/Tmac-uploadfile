<?php
/**
 * Created by PhpStorm.
 * User: zyh
 * Date: 2019/4/18
 * Time: 9:26
 */
namespace tmac;

class UploadFile
{
   public function upload(int $int):string
   {
       return md5($int);
   }
}