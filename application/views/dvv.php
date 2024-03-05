<?php if($dvv != false){ ?>
<div class="row">
    <?php $no=1; foreach($dvv as $dv){ ?>
    <div class="col-md-6">
        <table class="table text-center table-bordered">
            <thead>
                <tr>
                    <th colspan="2" class="bg-info text-white"><?=$dv->criterion;?></th>
                </tr>
            </thead>
            <?php $childrens = $this->get->table('naac', array('type' => $dv->type, 'criterion' => $dv->criterion, 'topic_parent !=' => 0, 'status' => 1), '', 'topic'); if($childrens != false){ ?>
            <tbody>
                <?php $topics = array(); foreach($childrens as $children){ $topics[] = $children->topic.'@'.$children->topic_file; }  natsort($topics); if(!empty($topics)){ foreach($topics as $topic){ $topc = explode('@',$topic); $t = $topc[0]; $url = $topc[1]; ?>
                    <tr><td>Criterion: <?=$t;?></td><td><a href="<?=base_url('uploads/'.$url);?>" target="_blank">Click here</a></td></tr>
                <?php } } ?>
            </tbody>
            <?php } ?>
        </table> 
    </div>
    <?php } ?>
</div>
<?php } ?>