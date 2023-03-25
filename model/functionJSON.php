<?php
interface functionJSON
{
    public function Name();
    public function years();
}
class functionth implements functionJSON
{
    public function Name()
    {
        $un = "มหาวิทยาลัยราชภัฏนครปฐม";
        $unING = "Nakhon Pathom Rajabhat University";
        $name = "ณาตหชา มุมแดง";
        $idIN = "644259007";
        $se = "วิศวกรรมซอฟต์แวร์";
        $IDB = "4732 5285 1809 7362";
        if (!empty($un) && !empty($unING) && !empty($idIN) && !empty($se) && !empty($IDB)) {
            $data = array("$un", "$unING", "$name", "$idIN", "$se" , "$IDB");
            $json = json_encode($data);
            return $json;
        } else {
            return false;
        }
    }
    
    public function years()
    {

        $dateOfBirth = '2002-12-31'; //วันเกิด รูปแบบ ปี เดือน วัน
        $currentDate = date('Y-m-d'); //วันที่ปัจจุบัน

        echo '<br> เกิดวันที่  ' . $dateOfBirth;
       
        echo '<br> วันที่ปัจจุบัน ' . $currentDate;
       

        $diff = abs(strtotime($currentDate) - strtotime($dateOfBirth));

        $years = floor($diff / (365 * 60 * 60 * 24));
        $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
        $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

        echo '<br> อายุ  ';
        $B = date("Y");
        printf("%d ปี <br> นักศึกษาปี ", $years);
        printf( $B - 2021, "%d นักศึกษาปี ");
    }

}
