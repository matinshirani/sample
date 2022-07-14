<?php
class settings extends upload {
    public function show_edit(){
        $sql=$this->db->query("select * from settings_tbl");
        $row=$sql->fetch();
        return $row;
    }
    public function edit($data, $show, $banner, $logo){
        if ($banner['name'] != ''){
            $ban=$this->uploader($banner, "view/settings/images/");
        }else{
            $ban=$show['banner'];
        }
        if ($logo['name'] != ''){
            $log=$this->uploader($logo, "view/settings/images/");
        }else{
            $log=$show['logo'];
        }
        $this->db->query("update settings_tbl set title='$data[title]', link_logo='$data[link_logo]',
instagram='$data[instagram]', g_plus='$data[g_plus]', linkedin='$data[linkedin]', facebook='$data[facebook]', 
tel='$data[tel]', days='$data[days]', email='$data[email]', city='$data[city]', address='$data[address]', 
description='$data[description]', ban_text1='$data[ban_text1]', ban_text2='$data[ban_text2]', fea_text1='$data[fea_text1]', 
fea_text2='$data[fea_text2]', news_text1='$data[news_text1]', news_text2='$data[news_text2]', banner='$ban', logo='$log'");
    }
}

?>