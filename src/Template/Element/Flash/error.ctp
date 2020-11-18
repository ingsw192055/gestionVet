<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
if($message != null) {

?>  
    <section class="primary-bg">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $message ?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </section>
<?php
    }
    }
?>