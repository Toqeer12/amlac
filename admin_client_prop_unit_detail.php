<?php 
session_start();
include 'raw_detail.php';
if ($_SESSION['exp'] == 'invalid') {
    header("location:login.php");
    unset($_SESSION['user']);
    unset($_SESSION['company']);
    unset($_SESSION['Id']);
    unset($_SESSION['fulname']);

}
 
?>          <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="widget">
                                <div class="widget-body">
           
                                    <table class="table table-striped table-bordered" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th>Block #</th>
                                                <th>Inst Amount</th>
                                                <th class="hidden-phone">Annual Lease</th>
                                                <th class="hidden-phone">Commison Amount</th>
                                                <th class="hidden-phone">Commison</th>
                                                <th class="hidden-phone">Status</th>
                                                <th class="hidden-phone">Leaser Info</th>
                          
                                            </tr>
                                        </thead>
                                        <tbody>
                                                </td>
                                            <tr>
                                               <?php 
                                                $varpropId  = $_GET['propId'];
                                                $propertyUnit = viewpropertyUnit($varpropId);
                                                for ($i = 0; $i < count($propertyUnit); $i++) {


                                                    ?>
                                                <tr>
                                                <td> 
                                                <?php 
                                                echo $propertyUnit[$i]['block_no']; // uid
                                                ?>
                                                </td>
                                                <td> 
                                                <?php 
                                                echo $propertyUnit[$i]['ins_amount']; // uid
                                                ?>
                                                </td>
                                                <td> 
                                                <?php 
                                                echo $propertyUnit[$i]['annul_lease']; // uid
                                                ?>
                                                </td>
                                                <td> 
                                                <?php 
                                                echo $propertyUnit[$i]['comission_amount']; // uid
                                                ?>
                                                </td>
                                               <td> 
                                                <?php 
                                                echo $propertyUnit[$i]['comission']; // uid
                                                ?>
                                                </td>
                                                <td> 
                                                <?php 
                                                echo $propertyUnit[$i]['status']; // uid
                                                ?>
                                                </td>
                                                <?php
                                                
                                                }
                                                ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
 