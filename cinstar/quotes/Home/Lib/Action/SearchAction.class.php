<?php
class SearchAction extends CommonAction{

	public function index(){	
		$currentUrl = trim($_SERVER['REQUEST_URI']);
		$currentUrl = substr($currentUrl, 1, 1);
        if ($currentUrl=="_"){
		    $this->_empty();
			exit;
		}
		$_msg = (C('CNEN')=='cn') ? '请输入关键词' : 'Please input the keywords' ;
		$keyword= I('q','','htmlspecialchars,trim');	
		if ($keyword=="") {
			$this->error($_msg);
		}
		$where=" name like '%%%s%%' ";

		$db=M('Product');
		import('ORG.Util.Page');
		$count=$db->where($where,array($keyword))->count();
		$page=new Page($count,C('LIST_PRONUM'));
		$prevs= (C('CNEN')=='cn') ? '上一页' : 'Previous' ;
		$nexts= (C('CNEN')=='cn') ? '下一页' : 'Next' ;
		$page->setConfig('prev',$prevs);
		$page->setConfig('next',$nexts);
		$page->setConfig('theme',"%upPage% %linkPage% %downPage%");
		$this->page=$page->show();

		$this->product=$db->field('id,name,description,url,thumb')->where($where,array($keyword))->limit($page->firstRow.','.$page->listRows)->select();
		
		$this->pid=M('List')->field('id')->where(array('type'=>'Product','pid'=>0))->limit(1)->order('sort')->find();
		$this->keyword=$keyword;
		$this->display();
	}


}
?>