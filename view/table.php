<?php


function generateHtmlTable($data){
    $keys = array_keys($data[0]);
    
    $htmlTable ='
    <div class="panel panel-default">
                        <div class="panel-heading">
    DataTables Advanced Tables
    <a href="?action=insert" class="btn btn-default pull-right">ADD Entity</a>
    </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        ';
    
                                foreach ($keys as $key){
                                    if (!is_numeric($key)){

                                        $htmlTable .= '<td>'.$key.'</td>';
                                    }
                                }
                                    $htmlTable .='</tr>
                                </thead>
                                <tbody>
                                ';
                            foreach ($data as $line){
                                $htmlTable .= '<tr class="gradeX">';
                                foreach ($keys as $key){
                                    if (!is_numeric($key)) {
                                        $htmlTable .= '<td>' . $line[$key] . '</td>';
                                    }
                                }
                     
                                $htmlTable .= '</tr>';
                            
                            }

                                    
                                    
                         $htmlTable       .='</tbody>
                            </table>
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>';
    
    return $htmlTable;
}

function getForm(){
    return '<form role="form">
                <div class="form-group">
                    <label>Text Input</label>
                    <input class="form-control">
                    <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="form-group">
                    <label>Text Input with Placeholder</label>
                    <input class="form-control" placeholder="Enter text">
                </div>
                <div class="form-group">
                    <label>Static Control</label>
                    <p class="form-control-static">email@example.com</p>
                </div></form>';
}