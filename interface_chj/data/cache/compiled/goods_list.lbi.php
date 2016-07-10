<div class="ect-wrapper text-center">
 <form method="GET" class="sort" name="listform">
    <div> <a class="<?php if ($this->_var['sort'] == 'goods_id' && $this->_var['order'] == 'DESC'): ?>ect-colory<?php endif; ?>" href="<?php echo url('category/index#goods_list',array('id'=>$this->_var['id'],'display'=>$this->_var['display'],'brand'=>$this->_var['brand_id'],'price_min'=>$this->_var['price_min'],'price_max'=>$this->_var['price_max'],'filter_attr'=>$this->_var['filter_attr'], 'sort'=>'goods_id', 'order'=> 'DESC', 'keywords'=>$this->_var['keywords']));?>"><?php echo $this->_var['lang']['sort_default']; ?></a>
    <a class="<?php if ($this->_var['sort'] == 'sales_volume' && $this->_var['order'] == 'DESC'): ?>ect-colory select<?php elseif ($this->_var['sort'] == 'sales_volume' && $this->_var['order'] == 'ASC'): ?>ect-colory<?php endif; ?>" href="<?php echo url('category/index#goods_list',array('id'=>$this->_var['id'],'display'=>$this->_var['display'],'brand'=>$this->_var['brand_id'],'price_min'=>$this->_var['price_min'],'price_max'=>$this->_var['price_max'],'filter_attr'=>$this->_var['filter_attr'], 'sort'=>'sales_volume', 'order'=> ($this->_var['sort']=='sales_volume' && $this->_var['order']=='ASC')?'DESC':'ASC', 'keywords'=>$this->_var['keywords']));?>"><?php echo $this->_var['lang']['sort_sales']; ?> <i class="glyphicon glyphicon-arrow-up"></i></a>
    <a class="<?php if ($this->_var['sort'] == 'click_count' && $this->_var['order'] == 'DESC'): ?>ect-colory select<?php elseif ($this->_var['sort'] == 'click_count' && $this->_var['order'] == 'ASC'): ?>ect-colory<?php endif; ?>" href="<?php echo url('category/index#goods_list',array('id'=>$this->_var['id'],'display'=>$this->_var['display'],'brand'=>$this->_var['brand_id'],'price_min'=>$this->_var['price_min'],'price_max'=>$this->_var['price_max'],'filter_attr'=>$this->_var['filter_attr'], 'sort'=>'click_count', 'order'=> ($this->_var['sort']=='click_count' && $this->_var['order']=='ASC')?'DESC':'ASC', 'keywords'=>$this->_var['keywords']));?>"><?php echo $this->_var['lang']['sort_popularity']; ?> <i class="glyphicon glyphicon-arrow-up"></i></a>
    <a class="<?php if ($this->_var['sort'] == 'shop_price' && $this->_var['order'] == 'DESC'): ?>ect-colory select<?php elseif ($this->_var['sort'] == 'shop_price' && $this->_var['order'] == 'ASC'): ?>ect-colory<?php endif; ?>" href="<?php echo url('category/index#goods_list',array('id'=>$this->_var['id'],'display'=>$this->_var['display'],'brand'=>$this->_var['brand_id'],'price_min'=>$this->_var['price_min'],'price_max'=>$this->_var['price_max'],'filter_attr'=>$this->_var['filter_attr'], 'sort'=>'shop_price', 'order'=> ($this->_var['sort']=='shop_price' && $this->_var['order']=='ASC')?'DESC':'ASC', 'keywords'=>$this->_var['keywords']));?>"><?php echo $this->_var['lang']['sort_price']; ?><i class="glyphicon glyphicon-arrow-up"></i></a>
    <a class="category-list"><i class="ect-icon ect-icon2 ect-icon-cate3"></i>筛选</a> </div>
    <div class="category-list-show">
    	<?php $_from = $this->_var['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['no']['iteration']++;
?> 
    		<a href="<?php echo $this->_var['cat']['url']; ?>" class="col-md-3 col-xs-3"><span><?php if ($this->_var['cat']['cat_id']): ?><?php echo htmlspecialchars($this->_var['cat']['name']); ?><?php else: ?><?php echo htmlspecialchars($this->_var['cat']['name']); ?><?php endif; ?></span></a>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <a href="<?php echo url('category/all');?>" class="col-md-3 col-xs-3 ect-colory"><span>更多</span></a>
    </div>
    <input type="hidden" name="category" value="<?php echo $this->_var['category']; ?>" />
    <input type="hidden" name="display" value="<?php echo $this->_var['pager']['display']; ?>" id="display" />
    <input type="hidden" name="brand" value="<?php echo $this->_var['brand_id']; ?>" />
    <input type="hidden" name="price_min" value="<?php echo $this->_var['price_min']; ?>" />
    <input type="hidden" name="price_max" value="<?php echo $this->_var['price_max']; ?>" />
    <input type="hidden" name="filter_attr" value="<?php echo $this->_var['filter_attr']; ?>" />
    <input type="hidden" name="page" value="<?php echo $this->_var['page']; ?>" />
    <input type="hidden" name="sort" value="<?php echo $this->_var['sort']; ?>" />
    <input type="hidden" name="order" value="<?php echo $this->_var['order']; ?>" />
    <input type="hidden" name="keywords" value="<?php echo $this->_var['keywords']; ?>" />
    </form>
</div>
<div class="ect-margin-tb ect-pro-list ect-margin-bottom0 ect-border-bottom0">
    <ul id="J_ItemList">
      <li class="single_item"></li>
      <a href="javascript:;" class="get_more"></a> 
	</ul>
</div>
<footer class="logo"><img src="__TPL__/images/copyright.png" width="176" height="60"></footer>
 <?php if ($this->_var['category'] > 0): ?>
</form>
<?php endif; ?>