<?php
class mobile{

    public function GETFN($filename)
    {
        $data = file_get_contents($filename);
        if($data){
            $JSON = json_decode($data);
            return $JSON;
        }else{
            include false;
        }
    }

}
?>