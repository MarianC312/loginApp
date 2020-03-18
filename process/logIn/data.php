<?php
    if(isset($_POST))
    {
        foreach($_POST AS $key => $value)
        {
            if(!isset($value) || is_null($value)|| $value == "")
            {
                ?>
                <div class="alert alert-dismissible alert-warning">
                    <strong class="d-block h5 mb-3"><i class="fa fa-info-circle"></i> Warning!</strong> 
                    <p>
                        The value of <b><?php echo $key ?></b> has an error and can't be processed. <b>Try again</b> or contact an administrator.
                    </p>
                    <button type="button" onclick="divSwitchView('#login-process'); divSwitchView('#login-form');" class="btn btn-warning">Return</button>
                </div>
                <?php
                exit;
            }
            $data[$key] = $value;
        }
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        //There is the array with data and you can send it to anywhere you need...
        //for example to a login class to check with query data and allow get in app or something...
    }else{
        ?>
        <div class="alert alert-dismissible alert-danger">
            <strong><i class="fa fa-times"></i> Error!</strong>
            <p>
                There was an error on receiving data of login form. <b>Try again</b> or contact an administrator.
            </p>
            <p>
                <?php echo ($_GET["debug"]) ? "Debug: ..." : ""; ?>
            </p>
        </div>
        <?php
    }
?>