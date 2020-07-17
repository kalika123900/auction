<div class="right_col" role="main" style="min-height: 3806px;">
<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Subject Record <small><a href="<?=site_url()?>admin/subject/add" class="btn btn-primary"><i class="fa fa-plus-circle"></i>&nbsp;Add Subject</a></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Subject Name</th>
                          <th>Subject Slug</th>
                          <th>Subject Description</th>
                          <th>Subject Photo</th>
                          <th>Status</th>
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
                           
                            <td><?php echo htmlentities($row->id); ?></td>
                            <td><?php echo htmlentities($row->subject_name); ?></td>
                            <td><?php echo htmlentities($row->subject_slug); ?></td>
                            <td><?php echo htmlentities($row->subject_description); ?></td>
                            <td><img src="<?php echo base_url('uploads/'. ($row->subject_photo)); ?>" height="40" width="40"/></td>
                            <td><?php echo htmlentities($row->status); ?></td>
                            <td>
                        <?php
                        //for passing row id to controller
                         echo  anchor("SubjectMaster/getdetails/{$row->id}", ' ', 'class="btn btn-primary btn-xs glyphicon glyphicon-pencil"')?>
                        </td>
                        <td>
                        <a data-href="SubjectMaster/deletesubject/<?=$row->id?>" class="delete_item"><i class="glyphicon glyphicon-trash btn-danger btn-xs"></i></a>
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
              </div>
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




























































































































































        