<div class="right_col" role="main" style="min-height: 3806px;">
<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?=ucfirst($course->title)?> All Question <small><a href="<?=site_url()?>admin/course/questions/add/<?=$course->id?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i>&nbsp;Add New Question</a></small></h2>
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
                          <th>Question</th>
                          <th>Option a</th>
                          <th>Option b</th>
                          <th>Option c</th>
                          <th>Option d</th>
                          <th>Answer</th>
                          <th>Status</th>
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
                            <td><?php echo htmlentities($row->question);?></td>
                            <td><?php echo htmlentities($row->option_a);?></td>
                            <td><?php echo htmlentities($row->option_b);?></td>
                            <td><?php echo htmlentities($row->option_c);?></td>
                            <td><?php echo htmlentities($row->option_d);?></td>
                            <td><?php echo htmlentities($row->answer);?></td>
                            <td><?php echo htmlentities($row->status);?></td>
                           
                         <td>
                         <?php
                        //for passing row id to controller
                        echo  anchor("admin/course/questions/edit/$row->id",' ','class="btn btn-primary btn-xs glyphicon glyphicon-pencil"')?>
                        </td>
                        <td>
                        <a data-href="delete/<?=$row->id?>" class="delete_item"> <i class="glyphicon glyphicon-trash btn-danger btn-xs"></i></a>  
                        </td>
                        </tr>
                       
                        <?php
                        // for serial number increment
                        $cnt++;
                        }
                         else: ?>
                        <tr>
                          <td colspan="10" style="text-align:center"><h5>No Questions added yet!</h5></td>
                        </tr>
                        <?php  endif; ?>
                      </tbody>
                   </table>
                   <div >
                    
                    </div>
                  </div>
                  </div>
              </div>
            </div>
                </div>
              <div>
              <div class="col-md-3"></div>
    

    </div>
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