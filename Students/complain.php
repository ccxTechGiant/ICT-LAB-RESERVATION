<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Complaint</li>
        </ol>
    </div><!--/.row-->

    

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Make Complaint</div>
                <div class="panel-body">
                    <?php
                    if (isset($_GET['error'])) {
                        echo "<div class='alert alert-danger'>
                                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Error on Complaint !
                            </div>";
                    }
                    if (isset($_GET['success'])) {
                        echo "<div class='alert alert-success'>
                                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Complaint Successfully Send !
                            </div>";
                    }
                    ?>
                    <form role="form"  data-toggle="validator" method="post" action="ajax.php">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Complainant Name</label>
                                <input type="text" class="form-control" placeholder="Complainant Name" name="complainant_name" required value="<?php echo $students['First_name'].' '.$students['Surname'];?>" readonly>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Complaint Type</label>
                                <input type="text" class="form-control" placeholder="Complaint Type" name="complaint_type" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-12">
                                <label>Please Describe the Complaints</label>
                                <textarea class="form-control" name="complaint" placeholder="Complaint" required></textarea>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-lg btn-success" name="createComplaint" style="border-radius:0%">Submit</button>
                        <button type="reset" class="btn btn-lg btn-danger" style="border-radius:0%">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Complaint Management</div>
                <div class="panel-body">
                    <?php
                    if (isset($_GET['resolveError'])) {
                        echo "<div class='alert alert-danger'>
                                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Error on Resolve !
                            </div>";
                    }
                    if (isset($_GET['resolveSuccess'])) {
                        echo "<div class='alert alert-success'>
                                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Complaint Successfully Resolve !
                            </div>";
                    }
                    ?>
                    <table class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%" id="rooms">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Complainant Name</th>
                            <th>Complaint Type</th>
                            <th>Complaint</th>
							<th>Status</th>
                            <th>Created Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $complaint_query = "SELECT * FROM complaint";
                        $complaint_result = mysqli_query($connection, $complaint_query);
                        if (mysqli_num_rows($complaint_result) > 0) {
                            $num = 0;
                            while ($complaint = mysqli_fetch_assoc($complaint_result)) {
                                $num++
                                ?>
                                <tr>
                                    <td><?php echo $num ?></td>
                                    <td><?php echo $complaint['complainant_name'] ?></td>
                                    <td><?php echo $complaint['complaint_type'] ?></td>
                                    <td><?php echo $complaint['complaint'] ?></td>
									<td><?php echo $complaint['resolve_status'] ?></td>
                                    <td><?php echo date('M j, Y',strtotime($complaint['created_at'])) ?></td>
                                </tr>
                            <?php }
                        } else {
                            echo "No Rooms";
                        }
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
        <p class="back-link">Developed By: Joy</p>
        </div>
    </div>

</div>    <!--/.main-->