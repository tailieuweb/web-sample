<?php
    require_once './config/database.php';
    require_once './class/Model.php';
    require_once "./class/bai_viet.php";
    $obj = new bai_viet();
    $bai_viet = $obj->danh_sach_bai_viet();
    
?>
<html>
	<head>
        <link rel="stylesheet" href="public/css/bootstrap.min.css">	        
        <script src="public/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="public/js/bootstrap.min.js" type="text/javascript"></script>
	</head>
	<body>
        <div class="container">
            <div class="row">
                    <div class="col-md-8"></div>
                    <div class="col-md-4"></div>
            </div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        </div>        
	</body>
</html>
