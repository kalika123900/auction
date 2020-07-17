<div class="right_col" role="main" style="min-height: 3806px;">
<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Course Record <small><a href="<?=site_url()?>admin/course/add/" class="btn btn-primary"><i class="fa fa-plus-circle"></i>&nbsp;Add Course</a></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Title</th>
                          <th>Detail Description</th>
                          <th>Status</th> 
                          <th>Featured Image</th>
                          <th>Chapters</th>
                          <th>Questions</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                        <tbody>
                      <?php
                        $cnt=1;
                        foreach ($result as $row) {
                            ?>
                            <tr>
                            <td><?php echo htmlentities($row->title);?></td>
                            <td><?php echo substr(strip_tags($row->detail_description),0,200).'...';?></td>
                            <td><?php echo htmlentities($row->status);?></td>
                            <td><img style="width:100%; height:70px; object-fit:contain;" src="<?php echo base_url('uploads/'. ($row->featured_image));?>" /></td>
                            <td><?php echo  anchor("admin/course/chapter/$row->id",' ','class="btn btn-primary btn-xs glyphicon glyphicon-folder-open"')?></td>
                            <td><?php echo  anchor("admin/course/questions/$row->id",' ','class="btn btn-primary btn-xs glyphicon glyphicon-folder-open"')?></td>
                         <td>
                         <?php
                        //for passing row id to controller
                        echo  anchor("admin/course/edit/$row->id",' ','class="btn btn-primary btn-xs glyphicon glyphicon-pencil"')?>
                        </td>
                        <td>
                        <a data-href="course/delete/<?=$row->id?>" class="delete_item"> <i class="glyphicon glyphicon-trash btn-danger btn-xs"></i></a>  
                        </td>
                        </tr>
                        <?php
                        // for serial number increment
                        $cnt++;
                        }
                        ?>
                     </tbody>
                   </table>
                  
                  
                 </div>
                  </div>
                  </div>
              </div>
            </div>
                </div>
              <div>
              <div class="col-md-3"></div>
      </div>
      <script>
      $(document).ready(function(){
        $('.delete_item').click(function(){
          var _that = $(this);
          if(confirm('Are you sure you want to delete?'))
          {
            window.location.href = _that.attr('data-href');
          }
        });
      });
      
      </script>



























































































































































