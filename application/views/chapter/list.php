<div class="right_col" role="main" style="min-height: 1024px;">
<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>All Chapters <small> <a href="<?=site_url()?>admin/course/chapter/add/<?=$cid?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i>&nbsp;Add New Chapter</a></small> </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Course</th>
                          <th>Title</th>
                           <th>Slug</th>
                          <th>Short Description</th>
                          <th>Detail Description</th>
                           <th>Status</th>
                          <th>Featured Image</th>
                          <th>Featured Video</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                        <tbody>
                      <?php
                        if(count($result)>0):
                        $cnt=1;
                        foreach ($result as $row) {
                            ?>
                            <tr>
                            <td><?php echo htmlentities($row->course_title);?></td>
                            <td><?php echo htmlentities($row->title);?></td>
                            <td><?php echo htmlentities($row->slug);?></td>
                            <td><?php echo htmlentities($row->short_description);?></td>
                            <td><?php echo htmlentities($row->detail_description);?></td>
                            <td><?php echo htmlentities($row->status);?></td>
                            <td><img src="<?php echo base_url('uploads/'. ($row->featured_image));?>" height="40" width="40"/></td>
                            <td><video src="<?php echo base_url('uploads/'. ($row->featured_video));?>" height="100" width="150" controls>Your browser does not support HTML5</video></td>
                         <td>
                         <?php
                        //for passing row id to controller
                        echo  anchor("admin/course/chapter/edit/$row->id",' ','class="btn btn-primary btn-xs glyphicon glyphicon-pencil"')?>
                        </td>
                        <td>
                        <a data-href="delete/<?=$row->id?>" class="delete_item"> <i class="glyphicon glyphicon-trash btn-danger btn-xs"></i></a>  
                        </td>
                        </tr>
                        <?php
                        // for serial number increment
                        $cnt++;
                        }
                      else:?>
                        <tr>
                          <td colspan="9" style="text-align:center; text-transform: uppercase; font-weight: bold">No Chapter Has Been Added Yet!</td>
                        </tr>
                      <?php
                      endif;
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


























































































































































