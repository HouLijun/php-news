<?php
class cateTree
{
    public $str="";
    // 添加分类--获取栏目列表函数
    function getTree($pid,$step,$flag,$db,$table){
        $step++;
        // $step 代表他是几级栏目，一级栏目是0，二级栏目是1，三级栏目是2
        $sql="SELECT * FROM {$table} where p_id='{$pid}'";
        $result=$db->query($sql);
        while($row=$result->fetch_assoc()){
            $id=$row['id'];
            $cateName=$row['cateName'];
            $str=str_repeat($flag,$step);
            $this->str.="<option value='{$id}'>{$str}-- {$cateName}</option>";
            $this->getTree($row['id'],$step,$flag,$db,$table);
        }
    }

    // 编辑分类--获取栏目列表函数
    function getCateList($pid,$step,$db,$table){
        $step+=1;
        $sql="select * from {$table} where p_id='{$pid}'";
        $result=$db->query($sql);
        $this->str.="<ul>";
        while ($row=$result->fetch_assoc()) {
            $id=$row['id'];
            $cateName=$row['cateName'];
            $this->str.="<li> <span>{$cateName}</span>  <a href='delCate.php?id={$id}'>删除</a> <a href='editCate.php?id={$id}'>编辑</a>";
            $this->getCateList($id,$step,$db,$table);
        }
        $this->str.="</li></ul>";
    }

    // 新闻编辑分类--获取栏目列表函数
    function getNewsCateList($pid,$step,$db,$table){
        $step+=1;
        $sql="select * from {$table} where p_id='{$pid}'";
        $result=$db->query($sql);
        $this->str.="<ul>";
        while ($row=$result->fetch_assoc()) {
            $id=$row['id'];
            $cateName=$row['cateName'];
            $sqlSon="select * from {$table} where p_id='{$id}'";
            $res=$db->query($sqlSon);
            if(mysqli_num_rows($res)>0){
                $this->str.="<li><span>{$cateName}</span>";
            }else{
                $this->str.="<li><a href='showNewsList.php?id={$id}' target='news'>{$cateName}</a>";
            }
            $this->getNewsCateList($id,$step,$db,$table);
        }
        $this->str.="</li></ul>";
    }
};
/*$obj=new cateTree();
$obj->getTree(0,0,"-",$db,"categories");
echo $obj->str;*/