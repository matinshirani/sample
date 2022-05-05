<?php

class product extends upload{
    public function addproduct($data, $file1, $file2, $file3, $directory){
        if (($file1["name"] != "")){
            $to1=$this->uploader($file1, $directory);
        }else{
            $to1="";
        }
        if (($file2["name"] != "")){
            $to2=$this->uploader($file1, $directory);
        }else{
            $to2="";
        }
        if (($file3["name"] != "")){
            $to3=$this->uploader($file1, $directory);
        }else{
            $to3="";
        }
        $this->db->query("insert into product_tbl (title, count, price, procat,status, text, img1, img2, img3) 
values ('$data[title]', '$data[count]', '$data[price]', '$data[procat]','$data[status]', '$data[text]', '$to1', '$to2', '$to3')");
    }
    public function categories(){
        $sql=$this->db->query("select * from procat_tbl where chid !='0'");
        $row=$sql->fetchAll();
        return $row;
    }
    public function listproduct(){
        $sql=$this->db->query("select * from product_tbl");
        $row=$sql->fetchAll();
        return $row;
    }
    public function procat($procat){
        $sql=$this->db->query("select * from procat_tbl where id='$procat'");
        $row=$sql->fetch();
        return $row['title'];
    }
    public function deleteproduct ($id){
        $this->db->query("delete from product_tbl where id='$id'");
    }
    public function showeditproduct($id){
        $sql=$this->db->query("select * from product_tbl where id='$id'");
        $row=$sql->fetch();
        return $row;
    }
    public function editproduct($data, $id, $file1, $file2, $file3, $directory, $show){
        if ($file1['name'] != ""){
            $to1=$this->uploader($file1, $directory);
        }else{
            $to1=$show['img1'];
        }
        if ($file2['name'] != ""){
            $to2=$this->uploader($file2, $directory);
        }else{
            $to2=$show['img1=2'];
        }
        if ($file3['name'] != ""){
            $to1=$this->uploader($file3, $directory);
        }else{
            $to3=$show['img3'];
        }
        $this->db->query("update product_tbl set title='$data[title]', count='$data[count]',price='$data[price]', procat='$data[procat]', status='$data[status]', text='$data[text]', img1='$to1', img2='$to2', img3='$to3' where id='$id'");
    }

}

?>